<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Verifikasi Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">Verifikasi Email</div>
            <div class="card-body">
                <p>Hai {{ $notifiable->name }},</p>
                <p>Silakan klik tombol di bawah ini untuk memverifikasi email Anda:</p>
                <a href="{{ $url }}" class="btn btn-success">Verifikasi Email</a>
            </div>
        </div>
    </div>
</body>

</html>
