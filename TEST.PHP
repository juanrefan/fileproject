<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

include_once 'PDOUtil.php';

include_once 'dao/invoiceDAO.php';
    $test = new invoiceDAO();

    
    $select = $test->SelectInvoice();

    foreach ($select as $row) {
        echo "<tr>";
        echo '<td>' . $row->getInvoice() . '</td>';
        echo '<td>' . $row->getJumlah() . '</td>';
        echo '<td>' . $row->getNama() . '</td>';
        echo '<td>' . $row->getTanggal() . '</td>';
        echo '<td>' . $row->getJumlah() . '</td>';
        echo '<td>' . $row->getTotal() . '</td>';
        echo "</tr>";

}
$link=null;

    
    ?>
</body>
</html>