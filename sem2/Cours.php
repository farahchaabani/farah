
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>My first PHP page</h1>
<?php
echo "Hello world!";
//pas de declaration de variable
$test=2;
$test="509";
$test=array();
$test=2.15;
echo $test;

$nombre1=5;
$nombre2=8;
$chaine3="10";
$chaine4='Hello';
$Somme = $nombre1 + $nombre2;
echo $Somme ;

$a='chaine';
$b='Voici une $a';
echo $a;
echo $b;

$a="chaine";
$b="Voici une $a";
echo $a;
echo $b;

$c=6*2;
$d="Acheter".$c."jeux";
echo $d;
echo"Bonjour $a";

$tab1=array(12, "fraise", 2.2);

$tab2[]=12;
$tab2[]="fraise";
$tab2[]=2.2;

$tab3[0]=12;
$tab3[1]="fraise";
$tab3[2]=2.2;

for($i=0; $i<sizeof($tab3); $i++)
{echo "tab[$i]: ".$tab3[$i]."<BR>\n";}


?>
</body>
</html>
