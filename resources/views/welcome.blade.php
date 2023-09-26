<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://media.discordapp.net/attachments/1150687865420906517/1156286863036924015/image.png?ex=65146b8e&is=65131a0e&hm=1e32f46c85263479872fa3151b3d2e91d43a54ff42eefc02026659c867e03d47&=&width=640&height=640" />
    <title>Simple Form - PBKK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .display-4 {
            font-size: 3rem;
            font-weight: bold;
        }
        .btn-cta {
            font-size: 1rem;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            border: none; /* Menghilangkan border */
        }
        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        /* Menghilangkan efek hover Bootstrap */
        .btn-cta:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="display-4">Hi There, Welcome! 👋👋</h1>
        <a href="{{ route('form') }}" class="btn btn-primary btn-cta mt-4">Isi Form</a>
    </div>

    <footer class="footer">
        &copy; Akmal Ariq Romadhon. All Rights Reserved.
    </footer>

    <!-- Tambahkan script Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
