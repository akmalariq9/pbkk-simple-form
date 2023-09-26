<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="https://media.discordapp.net/attachments/1150687865420906517/1156286863036924015/image.png?ex=65146b8e&is=65131a0e&hm=1e32f46c85263479872fa3151b3d2e91d43a54ff42eefc02026659c867e03d47&=&width=640&height=640" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: black;
            border: none;
        }
    </style>
</head>
<script>
    console.log("Session 'success' value:", "{{ session('success') }}");
</script>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="font-weight: 700;">Input Data</h1>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form method="POST" action="{{ route('data.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
                @if ($errors->has('nama'))
                <div class="alert alert-danger">{{ $errors->first('nama') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor Hp:</label>
                <input type="text" name="nomor_hp" id="nomor_hp" class="form-control" value="{{ old('nomor_hp') }}" required>
                @if ($errors->has('nomor_hp'))
                <div class="alert alert-danger">{{ $errors->first('nomor_hp') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea name="alamat" id="alamat" class="form-control" required>{{ old('alamat') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai (2.50 s.d. 99.99):</label>
                <input type="number" name="nilai" id="nilai" class="form-control" step="0.01" min="2.50" max="99.99" required value="{{ old('nilai') }}">
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar:</label>
                <input type="file" name="gambar" id="gambar" class="form-control-file">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>