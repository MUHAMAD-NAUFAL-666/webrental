<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class PaymentController extends Controller
{
    public function showPaymentPage(Request $request)
    {
        // Ambil data dari request (misalnya perangkat dan metode pembayaran)
        $device = $request->input('device');
        $paymentMethod = $request->input('paymentMethod');
    
        // Informasi akun Dana
        $phoneNumber = '081398169386'; // Nomor telepon yang terdaftar di Dana
        $amount = '100000'; // Jumlah pembayaran
        
        // Buat URL deep link untuk pembayaran Dana
        $paymentUrl = "dana://payment?phone={$phoneNumber}&amount={$amount}"; // Sesuaikan dengan format deep link Dana jika tersedia

        // Generate QR code dengan URL deep link
        $qrCode = new QrCode($paymentUrl);
        $writer = new PngWriter();
        
        // Generate the QR code as binary data
        $qrCodeData = $writer->write($qrCode);
        
        // Encode the binary data to base64
        $base64QrCode = base64_encode($qrCodeData->getString());

        // Tampilkan halaman pembayaran dengan QR Code yang sudah dibuat
        return view('customer.payment', compact('device', 'paymentMethod', 'base64QrCode'));
    }
}
