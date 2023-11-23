<html>
<head><title>foreach cle</title>
</head>
<body>
<?php
$tab6 = array('un'      =>   12,
              'deux'    =>   "fraise",
              "trois"   =>   2.5,
              "quatre"  =>   "el5");
foreach  ($tab6 as $cle  =>  $val)
{
	echo "tab[$cle]: $val<br>\n";
}

?>