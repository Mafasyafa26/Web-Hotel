<html>
<link rel="stylesheet" href="css.css">
<head>
    <title>Data Hotel</title>
</head>
<body>
<center><h1>Data Hotel</h1>
    <table border = "1"></center>
    <tr>
          <th bgcolor="aqua">NIK</th>
          <th bgcolor="aqua">Nama</th>
          <th bgcolor="aqua">Alamat</th>
          <th bgcolor="aqua">No_Kamar</th>
    </tr>
<?php
include "connect.php";
$query = "SELECT * FROM hotel";
$data = $koneksi->query($query);
while($d = mysqli_fetch_array($data)){
    ?>
    <td><?php echo $d['NIK'];?> </td>
    <td><?php echo $d['Nama'];?> </td>;
    <td><?php echo $d['Alamat'];?> </td>;
    <td><?php echo $d['No_Kamar'];?> </td>;
    <?php
} 
?>
</table>
</body>
</html>

