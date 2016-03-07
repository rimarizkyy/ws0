<?php

$wsdl="http://localhost/latihan/ws0?wsdl";
$client2 = new SoapClient ( $wsdl, array('cache_wsdl' => WSDL_CACHE_NONE, 'trace'=>1) );


//var_dump($client2->__getFunctions());
//var_dump($client2->__getTypes());
//PERHATIKAN WSDL !!!

$return = $client2->hello('rambo sopan');
echo $return;

echo '</br>';
$return2 = $client2->cekBarang('MG1122');
echo 'jumlah barang='.$return2;

echo '</br>';

//document literal style
//2 input dikirim dalam 1 objek, return 1 output
$nilai=array('prm1'=>10, 'prm2'=>29);
$return3 = $client2->tambah($nilai);
echo 'hasil tambah='.$return3;

//0 input dikirim, return 1 objek didalamnya ada 3 output
echo '</br>';
echo 'info nama='. $client2->info()->nama;
echo '</br>';
echo 'info nim='. $client2->info()->npm;
echo '</br>';
echo 'info agama='. $client2->info()->agama;

echo '</br>';

$data=array('nama'=>'Iwan','npm'=>'45676','sks'=>9);
echo $client2->setMhs($data);

//echo '<br>'.'--------------------'.'<br>';
//var_dump($client2->__getLastResponse());
echo '<br>'.'--------------------'.'<br>';
echo "Response :<br>", htmlentities($client2->__getLastResponse()), "<br>";
?>