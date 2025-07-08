<!DOCTYPE html>
<html>
<head>
    <title>Email Verification Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .verification-code {
            text-align: center;
            font-size: 32px;
            letter-spacing: 5px;
            color: #333;
            padding: 20px;
            margin: 20px 0;
            background: #fff;
            border-radius: 5px;
        }
        .message {
            color: #666;
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            color: #999;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Email Verification Code</h2>
        </div>
        
        <div class="message">
            <p>Hello!</p>
            <p>You have requested to reset your password. Please use the verification code below to proceed:</p>
        </div>

        <div class="verification-code">
            {{ $code }}
        </div>

        <div class="message">
            <p>This code will expire in 60 minutes. Ya Ganteng</p>
            <p>If you didn't request this code, please ignore this email.</p>
        </div>

        <div class="footer">
            <p>This is an automated email, please do not reply.</p>
            <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
