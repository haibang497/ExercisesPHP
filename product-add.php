<!DOCTYPE html>
    <body>
    <table width="800px" border="1" align="center">
            <tr bgcolor="darkcyan">
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
            </tr>
                <tr>
                    <td align="center"><?php echo $_GET["id"]; ?></td>
                    <td align="center"><?php echo $_GET["name"]; ?></td>
                    <td align="center"><?php echo $_GET["quantity"]; ?></td>
                </tr>
        </table>
    </body>
</html>