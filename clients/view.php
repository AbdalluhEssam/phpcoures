<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table style="padding: 10px;    ">
        <tr style="padding: 10px;">
            <td style="padding: 10px;">Name</td>
            <td style="padding: 10px;">Email</td>
            <td style="padding: 10px;">UserName</td>
            <td style="padding: 10px;">password</td>
            <td style="padding: 10px;">Phone</td>

        </tr>

        <?php

 include '../connect.php';

 $query = "SELECT * From clients";
 $result = $conn->query($query);
 if($result){
    foreach ($result as $key) {
        echo '<tr>';
        echo '<td style="padding: 10px;">'.$key['name'].'</td>';
        echo '<td style="padding: 10px;">'.$key['email'].'</td>';
        echo '<td style="padding: 10px;">'.$key['username'].'</td>';
        echo '<td style="padding: 10px;">'.$key['password'].'</td>';
        echo '<td style="padding: 10px;">'.$key['phone'].'</td>';
        echo '</tr>';
    }
 }
?>

    </table>
</body>

</html>