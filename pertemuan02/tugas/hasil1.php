<?php 
$a = $_POST['username'];
$b = $_POST['password'];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Hasil</title>
 </head>
 <body>
 	<table border="1">
 		<tr>
 			<thead>
 				<th>Username</th>
 				<th>Password</th> 				
 			</thead>
 		</tr>
 		<tr>
 			<tbody>
 				<th><?php echo $a ; ?></th>
 				<th><?php echo $b ; ?></th> 				
 			</tbody>
 		</tr>
 	</table>
 </body>
 </html>