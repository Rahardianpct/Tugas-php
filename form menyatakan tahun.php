<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form  Menyatakan Tahun</title>
</head>
<body>
    <form method="post">
        <label for="tahun">Masukan Tahun :</label>
        <input type="text" id="tahun" name="tahun">
        <input type="submit" value="submit">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tahun = $_POST ['tahun'];
            if (($tahun % 4 == 0 && $tahun % 100 !=0) || $tahun % 400 == 0){
                print "Tahun $tahun adalah tahun kabisat";
            } else {
                print "$tahun Bukan tahun kabisat";
            }
        }
    ?>
</body>
</html>