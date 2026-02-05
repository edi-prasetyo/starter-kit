<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-danger text-white">Reset Password</div>
            <div class="card-body">
                <p>Hai {{ $notifiable->name }},</p>
                <p>Kamu menerima email ini karena ada permintaan reset password.</p>
                <a href="{{ $url }}" class="btn btn-danger">Reset Password</a>
                <p class="mt-2">Jika kamu tidak meminta reset password, abaikan email ini.</p>
            </div>
        </div>
    </div>
</body>

</html>
