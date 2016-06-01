<?php
require_once("mpdf/mpdf.php");



$html = '<table class="table table-bordered">';
for($i=0;$i<10;$i++)
{
    $html.='
    <tr>
        <td>Número</td>
        <td>'.$i.'</td>
    </tr>
';    
}
$html.='</table>';
$html.='<hr />';
$html.='<div class="panel panel-info">
          <div class="panel-heading">Panel heading without title</div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
';


//==============================================================
//==============================================================
//==============================================================

$mpdf=new mPDF('c'); 
$mpdf->SetDisplayMode('fullpage');

// LOAD a stylesheet
$estilos = file_get_contents('public/bootstrap/bootstrap.css');
$mpdf->WriteHTML($estilos,1);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>
