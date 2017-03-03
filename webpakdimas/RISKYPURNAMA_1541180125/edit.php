<?php
  include('Crud.php');
  $obj = new Crud("localhost:3307","root","","1541180125");
  if(isset($_REQUEST['submit'])){
  	extract($_REQUEST);
    $obj->update($id, $nama,  $alamat,  $usia);
  }

  if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $result=$obj->mysqli->query("SELECT * FROM user WHERE id='$id'");
    $rows=$result->fetch_assoc();
    extract($rows);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Data</title>
</head>
<body>
<form method="post" action="edit.php">
<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <td>ID</td>
    <td>
      <input type="readonly" name="id" size="50" value="<?php echo $id; ?>" />
    </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" size="50" value="<?php echo $nama; ?>" /></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat" size="50" value="<?php echo $alamat; ?>" /></td>
  </tr>
  <tr>
    <td>Usia</td>
    <td><input type="text" name="usia" size="50" value="<?php echo $usia; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="submit" value="Simpan" />
    </td>
  </tr>
</table>
</form>
</body>
</html>