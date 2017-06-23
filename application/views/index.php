<!DOCTYPE html>
<html>
<head>
  <title>Danh sách khách hàng</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>Id</td>
      <td>Name</td>
      <td>Age</td>
    </tr>
    <?php foreach ($list as $value) {?>
    <tr>
      <td><?php echo $value["firstName"];?></td>
      <td><?php echo $value["lastName"];?></td>
      <td><?php echo $value["phoneNumber"];?></td>
      <td><?php echo $value["email"];?></td>
      <td><?php echo $value["question"];?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>