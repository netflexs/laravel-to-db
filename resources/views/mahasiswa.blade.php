<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fefefe;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 100%;
            text-align: left;
        }

        label {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" required>

        <label for="fakultas">Fakultas:</label>
        <input type="text" name="fakultas" required>

        <label for="sks">Total SKS:</label>
        <input type="number" name="sks" required>

        <label for="ipk">IPK:</label>
        <input type="text" name="ipk" required>

        <button type="submit">Simpan</button>
        @if(session()->has('success'))
    <script>
        alert("{{ session()->get('success') }}");
    </script>
@endif

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    </form>
</body>

</html>
