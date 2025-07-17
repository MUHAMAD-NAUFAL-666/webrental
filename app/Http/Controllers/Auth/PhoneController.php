<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PhoneController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login-phone');
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|min:10|max:15'
        ]);

        // Format nomor HP: hanya angka
        $phone = preg_replace('/[^0-9]/', '', $request->phone);

        // Awali dengan 62 jika perlu
        if (substr($phone, 0, 1) === '0') {
            $phone = '62' . substr($phone, 1);
        } elseif (substr($phone, 0, 2) !== '62') {
            $phone = '62' . $phone;
        }

        $otp = rand(100000, 999999);

        session([
            'otp' => $otp,
            'phone' => $phone,
            'otp_expires' => now()->addMinutes(5)
        ]);

        $sent = $this->sendWaOtp($phone, $otp);

        return $sent
            ? redirect()->back()->with('success', 'Kode OTP telah dikirim ke WhatsApp Anda.')
            : redirect()->back()->with('error', 'Gagal mengirim OTP. Silakan coba lagi.');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6'
        ]);

        if (!session('otp_expires') || now()->gt(session('otp_expires'))) {
            return redirect()->back()->with('error', 'Kode OTP telah kedaluwarsa. Silakan minta kode baru.');
        }

        if ($request->otp == session('otp')) {
            $phone = session('phone');

            $user = User::firstOrCreate(
                ['phone' => $phone],
                [
                    'name' => 'User ' . substr($phone, -4),
                    'email' => $phone . '@phone.local',
                    'password' => bcrypt('phone_login_' . $phone),
                    'email_verified_at' => now()
                ]
            );

            Auth::login($user);
            session()->forget(['otp', 'phone', 'otp_expires']);

            return redirect()->route('customer.welcome');
        }

        return redirect()->back()->with('error', 'Kode OTP salah. Silakan coba lagi.');
    }

    private function sendWaOtp($number, $otp)
{
    try {
        // ✅ Gunakan hardcoded values seperti di PenyewaanController
        $apiKey = 'MyjsCGxFtIhNkutdKZWdnDxhzFLcwR';
        $sender = '081573635413';

        // ✅ Format pesan OTP
        $message = "Kode OTP login FlexiGadget Anda adalah: *{$otp}*\n\nKode berlaku selama 5 menit.\nJangan bagikan kode ini kepada siapapun.";

        // ✅ Kirim request ke API WhatsApp
        $response = Http::get('https://wa.codeucil.my.id/send-message', [
            'api_key' => $apiKey,
            'sender'  => $sender,
            'number'  => $number,
            'message' => $message
        ]);

        // 🪵 Logging untuk debug
        \Log::info("WA API Request", [
            'api_key' => $apiKey,
            'sender' => $sender,
            'number' => $number,
            'message' => $message
        ]);

        \Log::info("WA API Response: " . $response->body());

        if (!$response->successful()) {
            \Log::warning('WA API failed', [
                'status' => $response->status(),
                'response' => $response->body()
            ]);
        }

        return $response->successful();
    } catch (\Exception $e) {
        \Log::error('Failed to send WhatsApp OTP: ' . $e->getMessage());
        return false;
    }
}

}
