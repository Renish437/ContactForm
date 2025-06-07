<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
            margin-top: 15px;
            color: #4b5563;
        }
        .value {
            margin: 5px 0 15px;
            color: #111827;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #9ca3af;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">📩 New Contact Message</div>

        <div class="label">👤 Name:</div>
        <div class="value">{{ $mailData['name'] }}</div>

        <div class="label">✉️ Email:</div>
        <div class="value">{{ $mailData['email'] }}</div>

        <div class="label">📝 Message:</div>
        <div class="value">{{ $mailData['message'] }}</div>

        <div class="footer">
            This message was sent from your website contact form.
        </div>
    </div>
</body>
</html>
