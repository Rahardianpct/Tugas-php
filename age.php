<?php
    $age = $_POST['age'];

    if ($age >= 0 && $age <= 5) {
        print "balita";
    } elseif ($age > 5 && $age <= 16){
        print "Anak-Anak";
    }elseif ($age > 16 && $age <=50){
        print "dewasa";
    }elseif ($age > 50){
        print "Usia Tua";
    } else {
        print "invalid Age";
    }
?>