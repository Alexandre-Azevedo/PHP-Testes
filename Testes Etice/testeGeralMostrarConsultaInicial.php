<?php

require_once($_SERVER['DOCUMENT_ROOT']."/etice/pages/Head.php");



include ("C:/xampp/htdocs/etice/pages/conexaoBD.php");
$sqlt = "select * from administrador.tabelas where id='1'";
$rest = pg_query($dbcon, $sqlt);
while ($rowt = pg_fetch_row($rest)) { $nomenclatura=$rowt[2]; $tabela=$rowt[1]; }
echo 'Valor da váriável $tabela';
echo'<br/>';
echo $tabela;
echo '<hr/>';
$sqlct = "select * from administrador.campos_tabela where idtabela='1' order by ordem";
$resct = pg_query($dbcon, $sqlct); $i=0;
while ($rowct = pg_fetch_row($resct)) { 
   $campos[$i][0]= $rowct[1];
   $campos[$i][1]= $rowct[2];
   $campos[$i][2]= $rowct[3];
   $campos[$i][3]= $rowct[4];
   $i=$i+1;
}	

$sql = "select * from ".$tabela." order by ".$campos[0][0];
$res = pg_query($dbcon, $sql);
$record= pg_num_rows($res);

echo'Valor de campos[0][0]';
echo'<br/>';
echo $campos[0][0];
echo '<hr/>';
echo'conteudo de $record';
echo'<br/>';
echo var_dump($record);

?>	