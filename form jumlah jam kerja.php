<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung upah kerja</title>
</head>
<body>
    <form action="" method="post">
        <label for="jam_kerja">Masukan Jumlah jam kerja perminggu</label>
        <input type="text" id="jam_kerja" name="jam_kerja">
        <input type="submit" value="Hitung upah">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jam_kerja = $_POST ['jam_kerja'];
            $upah_per_jam = 2000;
            $upah_lembur = 3000;
            $jam_lembur = 0;
            
            if ($jam_kerja > 48) {
                $jam_lembur = $jam_kerja - 48;
                $jam_kerja = 48;
            }
            $upah = ($jam_kerja * $upah_per_jam) + ($jam_lembur * $upah_lembur);
            echo "Upah yang diterima sebesar Rp. $upah";
        }
    ?>
</body>
</html>