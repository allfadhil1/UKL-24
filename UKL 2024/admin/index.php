<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border="1" class="table">
    <tr>
        <th>Nama_Depan</th>
        <th>Nama_Belakang</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
   </table>
   <?php
//Select Tabel User dari database
$nomor = 1;
echo $nomor;
include '../koneksi.php';
$query_mysql = mysqli_query($mysqli, "SELECT * FROM user ") or die(mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){

?>
<tr>
<td><?php echo $nomor++; ?></td>
<td><?php echo $data['Nama_Depan']; ?></td>
<td><?php echo $data['Nama_Belakang']; ?></td>
<td><?php echo $data['Username']; ?></td>
<td><?php echo $data['Password']; ?></td> <td>

</td>
<?php } ?>
</tr>
</body>
</html>