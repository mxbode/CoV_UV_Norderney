<?php

$handle = fopen("source_corona-cases.csv", "r");
$deathshandle = fopen("source_corona-deaths.csv", "r");

$cf = 67; //country field = 67 == Index Germany

while (($data = fgetcsv($handle, 0, chr(9))) !== FALSE) {
           $deathsdata = fgetcsv($deathshandle, 0, chr(9));
            if(is_numeric($deathsdata[$cf])) {
           echo $data[0].";".$data[$cf].";".$deathsdata[$cf];
           echo chr(10); 
}
}

fclose($handle);
fclose($deathshandle);
?>
