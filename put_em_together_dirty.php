<?php
$handle = fopen("source_corona-cases.csv", "r");
$uvhandle = fopen("uv_isle_norderney.csv", "r");
$deathshandle = fopen("source_corona-deaths.csv", "r");

$cf = 67; //country field = 67 == Index Germany

$uvdata = fgetcsv($uvhandle, 0, ';'); // ignore titles
$uvdata = fgetcsv($uvhandle, 0, ';');

while (($data = fgetcsv($handle, 0, chr(9))) !== FALSE) {
           $deathsdata = fgetcsv($deathshandle, 0, chr(9));


           if(preg_match ("/".$data[0]."/", $uvdata[2])) { // uv data available for this date?
                 $uv=true; 
                 $uvdata = fgetcsv($uvhandle, 0, ';'); //data is available; read next line
           } else { 
                 $uv=false; 
           }   

           echo $data[0].";".$data[$cf].";".$deathsdata[$cf];
           if($uv)
                 echo ";".$uvdata[2].";".$uvdata[4]; //uv data is available; add them to line
           echo chr(10); 
}

fclose($handle);
fclose($uvhandle);
fclose($deathshandle);
?>
