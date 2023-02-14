<?php
    $jam_kerja = $_POST['jam_kerja'];
    $golongan = $_POST['golongan'];

    switch ($golongan) {
        case 1:
          $upah_perjam = 5000;
          break;
        case 2:
          $upah_perjam = 6000;
          break;
        case 3:
          $upah_perjam = 7000;
          break;
        case 4:
          $upah_perjam = 8000;
          break;
        default:
          $upah_perjam = 0;
      }

    $upah = $jam_kerja * $upah_perjam;
    $upah_lembur = $jam_kerja * 3000;
    $total_upah = $upah + $upah_lembur;

    echo "Upah per jam: Rp. " . $upah_perjam . "<br>";
    echo "Upah: Rp. " . $upah . "<br>";
    echo "Upah Lembur: Rp. " . $upah_lembur . "<br>";
    echo "Total Upah: Rp. " . $total_upah;
?>