<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" whidth ="100%" height="100%">
        <tr height="15%">
            <td colspan = "3">
                <?php include "blocks/header.php";?>
            </td>
        </tr>

        <tr>
            <td width = "10%">Left nav</td>
            <td>
            <?php include "blocks/content.php";?>
            </td>
            <td width = "10%">Right nav</td>
        </tr>
    </table>
</body>
</html>