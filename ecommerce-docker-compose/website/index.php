<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Site</title>
</head>
<body>
<h2>Ecommerce.com-Docker Container</h2>
<div>
	<?php 

			$products=file_get_contents('http://product-service'); 

			$decodedProducts = json_decode($products,TRUE);


			 $list = '<ul>';

			foreach($decodedProducts['clothing'] as $cloths){

				$list.='<li>'.$cloths.'</li>';
			}

			 $list.='</ul>';

			 echo $list;
	?>

</div>
</body>
</html>