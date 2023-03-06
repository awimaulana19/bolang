<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Email</title>
</head>

<body>
    <h1>Silahkan Cek Email Anda</h1>
    <form action="/email/verification-notification" method="POST">
        @csrf
        <button type="submit">Kirim Ulang</button>
    </form>
</body>

</html>
