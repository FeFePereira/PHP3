<?php
$capital = $_GET['capital'];
$taxa = $_GET['taxa'];
$tempo = $_GET['tempo'];
   
$taxaDecimal = $taxa/100; 

echo "capital: R$ " . number_format($capital, 2, ',', '.') . "<br>";
echo "Taxa: $taxa% ao período<br>";
echo "Tempo: $tempo períodos<br><br>"; 
echo "<table>";
echo "<tr><th>Tempo</th><th>Montante</th><th>Juros</th></tr>";

for($t=0; $t <= $tempo ; $t++){
    $juros = $capital * $taxaDecimal * $t;
    $montante = $capital + $juros; 
      echo "<tr>";
    echo "<td>$t</td>";
    echo "<td>" . number_format($montante, 0, '', '') . "</td>";
    echo "<td>" . number_format($juros, 0, '', '') . "</td>";
    echo "</tr>";}
?>