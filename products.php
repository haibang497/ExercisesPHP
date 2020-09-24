<!DOCTYPE html>
    <head>
        <title>Item</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
    <?php
        $item=array(
            array(
                'ID'=>"01",
                'Name'=>"Book",
                'Quantity'=>"200"
            ),
            array(
                'ID'=>"02",
                'Name'=>"Pen",
                'Quantity'=>"200"
            ),
            array(
                'ID'=>"03",
                'Name'=>"Pencil",
                'Quantity'=>"200"
            )
            );

        // $add=array(
        //     'ID'=>"04",
        //     'Name'=>"Paper",
        //     'Quantity'=>"500"
        // );

        // $item[]=$add;

        echo'<pre>';
        print_r($item);
        echo '</pre>';
        // $item[3]['ID']="05";

        // unset($item[3]);

    ?>
        <form>
            <h1>Array</h1>
            <table width="500px" border="1" align="center">
                <tr bgcolor="darkcyan">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                </tr>
                <?php
                    foreach($item as $val) {
                ?>
                <tr>
                    <td align="center"><?php echo $val['ID'] ?></td>
                    <td align="center"><?php echo $val['Name'] ?></td>
                    <td align="center"><?php echo $val['Quantity'] ?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </body>
</html>