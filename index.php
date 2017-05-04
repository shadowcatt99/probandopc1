<html><head>
  <title>probandopc1</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
 <div align="center">
  	<img align="center" src="images/cabeza.png" border="0">
 </div>
  <table align="center" width="500">
 <tbody><tr>
  <td width="150"><img src="images/lateral.png" border="0"></td>
  <td width="800">
  	 <table align="center" width="700">
  	  <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
      <td><?php echo $row['codigo_servicios']?></td>
      <td><?php echo $row['nombre_servicios']?></td>
      <td><?php echo $row['descripcion_servicios']?></td>
      <td><?php echo $row['imagen_servicios']?></td>
      </tr>
     <?php }
  } else {
            <td><?php echo $row['descripcion_servicio']?></td>
      echo "0 results";
  }
  $conn->close();
 ?> </table>
 </td>
  <td><img src="images/lateral.png"></td>
 </tr>
 </tbody></table>
 <div align="center">
  	<img align="center" src="images/base.png" border="0">
 </div>
 
 
</body></html>
