<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid pink;
        }
    </style>
    <title></title>
</head>
<body>
<table border ="1">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerList = array(
        "1" => array("ten" => "Đỗ Thị Thanh",
            "ngaysinh" => "1998/08/20",
            "diachi" => "Hà Nội",
            "anh" => " "),
        "2" => array("ten" => "Lê Thị Hoa",
            "ngaysinh" => "1997/03/21",
            "diachi" => "Thái Bình",
            "anh" => " "),
        "3" => array("ten" => "Đỗ Thị Hồng",
            "ngaysinh" => "1993/07/23",
            "diachi" => "Bắc Giang",
            "anh" => " "),
        "4" => array("ten" => "Nguyễn Thị Thanh",
            "ngaysinh" => "2000/08/29",
            "diachi" => "Hà Nội",
            "anh" => " ")
    );
    ?>
    <?php
    foreach($customerList as $key => $value ){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value['ten']."</td>";
        echo "<td>".$value['ngaysinh']."</td>";
        echo "<td>".$value['diachi']."</td>";

        echo "</tr>";
    }
    ?>
</table>
</body>
</html>