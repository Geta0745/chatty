<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="tableStyle.css">
    <title>รายละเอียดสินค้า</title>
</head>
<body>
    <table>
        <tr>
            <th><img src=<?php echo $_POST['pimg']; ?> width="300px" height="300px"></th>
        </tr>
        <tr>
            <td><?php echo $_POST['pname']; ?></td>
        </tr>
        <tr>
            <td><?php echo $_POST['pcount']; ?></td>
        </tr>
        <tr>
            <td><?php echo $_POST['pprice']; ?></td>
        </tr>
        <tr>
            <td><?php echo $_POST['pdate']; ?></td>
        </tr>
        <tr>
            <td><a href="ttable.html">กลับเมนู</a></td>
        </tr>
    </table>
</body>
</html>