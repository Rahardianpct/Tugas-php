<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Upah Karyawan</title>
</head>
<body>
    <form action="submit.php" method="post">
        Jumlah jam kerja: <input type="text" name="jam_kerja"><br><br>
        Golongan
        <select name="golongan">
            <option value="1">Golongan 1</option>
            <option value="2">Golongan 2</option>
            <option value="3">Golongan 3</option>
            <option value="4">Golongan 4</option>
        </select><br><br>
        <input type="submit" value="sumbit">
    </form>
</body>
</html>