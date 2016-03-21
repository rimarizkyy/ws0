<?php
//Perhatikan alamat yang dituju oleh klien
//SoapClient, http://localhost/latihan/ws0?wsdl

 $file='brosur_0.wsdl';
 if(isset($_GET["wsdl"])) readfile($file); 
?>