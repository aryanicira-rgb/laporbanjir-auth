<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>

    <form action="/simpan" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label for="nim">NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan"><br><br>

        <input type="submit">Simpan</button>
    </form>
</body>
</html>