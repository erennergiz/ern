<html>
<head>
<title>Makale Listesi</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
</head>
<body>
<h1>Makale Listesi</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>BAŞLIK</td>
        <td>İŞLEMLER</td>
    </tr>
<?php
    foreach ($makaleListele as $key => $value) {
        echo "<tr>";
            echo "<td>". $value["id"] ."</td>";
            echo "<td>". $value["baslik"] ."</td>";
            echo "<td>";
                echo "<a href='http://localhost/mvc/index/makaleDuzenle/". $value["id"] ."'>Düzenle</a>";
                echo "<a href='http://localhost/mvc/index/makaleSil/". $value["id"] ."'>Sil</a>";
            echo "</td>";
        echo "</tr>";
    }
?>
</table>
</body>
</html>
