<html>
<head>
<title> Plantilla 1 </title>
</head>
<body>

<?php
include("dblogin.php");
$con = mysqli_connect($db_server,$db_user,$db_password,$db_name);
$result = mysqli_query($con, "select matricula,nombre from Estudiante");
$row_cnt = mysqli_num_rows($result);
?>

<div class="container" align="center">

<table border="1">
<thead>
<tr>
<th colspan="2">
<?php echo "Estudiantes registrados: $row_cnt"; ?>
</th> 
</thead>

</tr>
<thead>
<tr>
<th>Matrícula</th>
<th>Nombre</th>
</tr>
</thead>

<tbody>
<?php
while($row = mysqli_fetch_array($result)){
?>

<tr>
<td> <?php echo $row["matricula"]; ?> </td>
<td> <?php echo $row["nombre"]; ?> </td>
</tr>

<?php
}
?>
</tbody>
</table>
</div>

<?php
mysqli_free_result($result);
mysqli_close($con);
?>

</body>
</html>

