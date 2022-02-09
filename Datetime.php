<?php

$dateTime = new DateTime();
$dateTime->setDate(1998, 2, 20);
$dateTime->setTime(10, 10, 10, 0);


$dateTime->add(new DateInterval("P1Y"));

$dateInterval = new DateInterval("P1M"); 
$dateInterval->invert =1; // invert untuk mengurangi

$dateTime->add($dateInterval);
var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto")); //untuk merubah time zone (wilayah)
var_dump($now);

$string = $now->format("Y-m-d H:i:s"); //untuk merubah format waktu 
echo "Waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2022-", new DateTimeZone("Asia/Jakarta"));
if($date){
    var_dump($date);
}else{
    echo "Maaf Format tanggal salah";
}



