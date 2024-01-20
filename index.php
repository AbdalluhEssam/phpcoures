<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <table>
            <tr>
                <th>
                    Name:
                </th>
                <td>
                    <input type="text" name="name" />
                </td>
            </tr>

            <tr>
                <th>
                    Email:
                </th>
                <td>
                    <input type="text" name="email" />
                </td>
            </tr>

            <tr>
                <th>
                    username:
                </th>
                <td>
                    <input type="text" name="username" />
                </td>
            </tr>
            <tr>
                <th>
                    password:
                </th>
                <td>
                    <input type="text" name="password" />
                </td>
            </tr>

            <tr>
                <th>
                    phone:
                </th>
                <td>
                    <input type="text" name="phone" />
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>


    <?php
    include 'connect.php';
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

    $query = "INSERT INTO `clients` (`name`, `email`, `username`, `password`, `phone`) VALUES ('$name','$email','$username','$password','$phone')";
    $result = $conn->query($query);
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
        print_r($_POST);
    };
    ?>
</body>

</html>