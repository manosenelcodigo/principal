﻿<?php
require_once("mpdf/mpdf.php");



$html = '
<h1>hola mundo</h1>
<img src="public/images/logo.png" />
';


//==============================================================
//==============================================================
//==============================================================

$mpdf=new mPDF('c'); 

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>