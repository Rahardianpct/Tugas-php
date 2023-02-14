<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berat badan ideal</title>
</head>
<body>
    <form action="" method="post">
        <label for="tinggi_badan">Tinggi Badan (cm):</label>
        <input type="text" id="tinggi_badan" name="tinggi_badan"><br><br>
        <label for="berat_badan">Berat Badan (kg):</label>
        <input type="text" id="berat_badan" name="berat_badan"><br><br>
        <input type="submit" value="Submit"> <input type="reset" value="reset">
    </form>
    <?php
        if ($_POST) {
            $tinggi_badan = $_POST['tinggi_badan'];
            $berat_badan = $_POST['berat_badan'];
      
            $berat_badan_ideal = ($tinggi_badan - 100) - (($tinggi_badan - 100) * 0.1);
            $perbedaan = abs($berat_badan - $berat_badan_ideal);
      
            if ($perbedaan <= 2) {
              print "Berat badan Anda ideal";
            } else {
              print "Berat badan Anda tidak ideal";
            }
          }
    ?>
</body>
</html>