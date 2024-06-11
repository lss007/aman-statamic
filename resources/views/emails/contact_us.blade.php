<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
</head>
<body>
    <h1>Thank You for Contacting Us, {{ $data['name'] }}!</h1>
    <p>We have received your message and will get back to you shortly.</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
    <p>Best regards,<br/>The Demo Site Team</p>
</body>
</html>
