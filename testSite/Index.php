<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    
 <br>
 <a href="?nb=2">Affichage 2 hello</a><br>
  <a href="?nb=10">Affichage 10 hello</a><br>
   <a href="?nb=20">Affichage 20 hello</a><br>
   
<form>
	<label for="nb"> Nombre :</label>
	<input id='nb' name='nb' type="number" max= 200>
</form>
<?php
    $texte="Hello World (dynamique)<br>";
	$i=0;
	$max=$_GET["nb"];
	$max=min(200,$max);
	
	while($i<$max) {
		$color="";
		if ($i%2==0)
			$color="color:red;";
		if ($i%2==1)
			$color="color:green;";
	echo "<span style='{$color}font-size: {$i}pt;'>{$texte}</span>";
		$i++;
		
	}


?>
    

</body>

            


</html>