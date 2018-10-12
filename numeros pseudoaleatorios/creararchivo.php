<?php

$ar=fopen("archivo.txt","a") or die (error al crear);

$asu=$_REQUEST['table-elementos'];

fwrite($ar, $asu);
fwrite($ar, "\n");