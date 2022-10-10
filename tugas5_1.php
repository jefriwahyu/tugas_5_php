<?php

    printf("Tabel Logika ");

    // operator logika &&
    $and1 = printf(false && false);
    $and2 = printf(false && true);
    $and3 = printf(true && false);
    $and4 = printf(true && true);
    
    // operator logika ||
    $or1 = printf(false || false);
    $or2 = printf(false || true);
    $or3 = printf(true || false);
    $or4 = printf(true || true);
    
?>

<html>
    <body>
        
        <!-- Menampilkan output hasil operator logika -->
        <table border="1">
        
            <tbody>
                <tr>
                    <td>Input true</td>
                    <td>Input 2</td>
                    <td>AND</td>
                    <td>OR</td>
                </tr>
                <tr>
                    <td>false</td>
                    <td>false</td>
                    <td><?php echo $and1 ?></td>
                    <td><?php echo $or1 ?></td>
                </tr>
                <tr>
                    <td>false</td>
                    <td>true</td>
                    <td><?php echo $and2 ?></td>
                    <td><?php echo $or2 ?></td>
                </tr>
                <tr>
                    <td>true</td>
                    <td>false</td>
                    <td><?php echo $and3 ?></td>
                    <td><?php echo $or3 ?></td>
                </tr>
                <tr>
                    <td>true</td>
                    <td>true</td>
                    <td><?php echo $and4 ?></td>
                    <td><?php echo $or4 ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>