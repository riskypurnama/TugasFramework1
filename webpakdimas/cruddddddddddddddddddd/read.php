<?php
include('Crud.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tampil Data</title>
</head>

<body>
<?php
  $obj=new Crud("localhost:3307","root","","1541180125");
  $obj->read();
?>
<table width="500" border="1" cellpadding="5" cellspacing="0">
  <tr>
    <th width="15" scope="row">ID</th>
    <td width="140">Nama</td>
    <td width="110">Alamat</td>
    <td width="80">Usia</td>
    <td>Aksi</td>
  </tr>

<?php
  foreach($obj->data as $val){
	  extract($val);
?>
    <tr>
      <td scope="row"><?php echo $id; ?></td>
      <td><?php echo $nama; ?></td>
      <td><?php echo $alamat; ?></td>
      <td><?php echo $usia; ?></td>
      <td><a href="edit.php?id=<?php echo $id; ?>">Edit</a>|<a href="delete.php?id=<?php echo $id; ?>">Hapus</a></td>
    </tr>
<?php
  }
?>
</table>
</body>
</html>