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

        .btn-group {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .btn-cta {
            margin: 0 10px;
            background-color: #000;
            color: white;
        }

        .content {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .btn-cta:hover {
            /* Tidak ada perubahan pada hover */
            background-color: blue;
            color: white;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1 class="display-4">Hi There, Welcome! 👋👋</h1>
        <div class="btn-group">
            <a href="{{ route('form') }}" class="btn btn-cta">Isi Form</a>
            <a href="{{ route('data.index') }}" class="btn btn-cta">Lihat Data</a>
        </div>
    </div>

    <footer class="footer">
        &copy; Akmal Ariq Romadhon. All Rights Reserved.
    </footer>

    <!-- Tambahkan script Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>