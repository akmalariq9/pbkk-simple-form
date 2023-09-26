<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="https://media.discordapp.net/attachments/1150687865420906517/1156286863036924015/image.png?ex=65146b8e&is=65131a0e&hm=1e32f46c85263479872fa3151b3d2e91d43a54ff42eefc02026659c867e03d47&=&width=640&height=640" />
    <title>Submitted Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .fixed-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="font-weight: 800;">Data</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col" style="text-align: center;">Nama</th>
                    <th scope="col" style="text-align: center;">Email</th>
                    <th scope="col" style="text-align: center;">Nomor HP</th>
                    <th scope="col" style="text-align: center;">Alamat</th>
                    <th scope="col" style="text-align: center;">Nilai</th>
                    <th scope="col" style="text-align: center;">Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->nomor_hp}}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->nilai }}</td>
                    <td><img src="{{ asset('uploads/' . $item->gambar) }}" alt="Gambar" class="fixed-image"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>