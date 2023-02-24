<?php
$matematika=80;
$indonesia=80;
$ipa=60;
$ips=65;
    if ($matematika >=70 && $matematika <=99 && $indonesia >=60 && $indonesia <=99 && $ipa >=60 && $ipa <=99 && $ips >=60 && $ips <=99){
        echo "Nilai Matematika = $matematika";
        echo "<br>Nilai Bahasa Indonesia = $indonesia";
        echo "<br>Nilai IPA = $ipa";
        echo "<br>Nilai IPS = $ips";
        echo "<font style = 'color:green;'><br>Status anda : Lulus</font>";
    }else if ($matematika <40 && $indonesia <40 && $ipa <40 && $ips <40){
        echo "Nilai Matematika = $matematika";
        echo "<br>Nilai Bahasa Indonesia = $indonesia";
        echo "<br>Nilai IPA = $ipa";
        echo "<br>Nilai IPS = $ips";
        echo "<br>Nilai IPS tidak boleh lebih dari 99 atau kurang dari 40";
    }else{
        echo "Nilai Matematika = $matematika";
        echo "<br>Nilai Bahasa Indonesia = $indonesia";
        echo "<br>Nilai IPA = $ipa";
        echo "<br>Nilai IPS = $ips";
        echo "<font style= 'color:red;'><br>Nilai tidak boleh lebih dari 99 atau kurang dari 40</font>"; 
    }
?>