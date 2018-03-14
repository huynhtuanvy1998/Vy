<?php
if(!empty($_POST['Vy']))
{
    $a = $_POST['Vy'];
    echo str_replace("/","-",$a)."<br>";
    $date = date_create($a);
    echo date_format($date, "M-d-Y");
}
 else {
     echo "Nhap vao text:";
 }


