<?php

    // membuat variabel untuk menampung konstanta dengan tipe data string
    $kata1 = "Ayo ";
    $kata2 = "Belajar ";
    $kata3 = "Bersama ";
    $kata4 = "Niomic";


    // menggabungkan string dengan operator string
    $gbkata1 = $kata1.$kata2;
    $gbkata2 = $kata3.$kata4;
    $gbkata3 = $gbkata1.$gbkata2;

?>

<html>
    <body>

        <!-- Menampilkan output hasil operator string -->
        <h1>Operator String</h1>
        <table border="1">
            <tbody>
                <tr>
                    <td>Input 1</td>
                    <td>Input 2</td>
                    <td>Hasil</td>
                </tr>
                <tr>
                    <td><?php echo $kata1 ?></td>
                    <td><?php echo $kata2 ?></td>
                    <td><?php echo $gbkata1 ?></td>
                </tr>
                <tr>
                    <td><?php echo $kata3 ?></td>
                    <td><?php echo $kata4 ?></td>
                    <td><?php echo $gbkata2 ?></td>
                </tr>
            </tbody>
        </table>
  
        <p>Gabungan : <?php echo $gbkata3 ?> :)</p>
    </body>
</html>