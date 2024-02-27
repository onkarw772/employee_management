<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <table>
        <Form action="update.php" method="post">
            <?php
            include('db.php');
            $eid = $_GET['eid'];
            $show = mysqli_query($con, "SELECT * FROM `registere_emp` WHERE `id`='$eid'");
            $row = mysqli_num_rows($show);
            while ($row = mysqli_fetch_array($show)) {
            ?>
                <tr>
                    <td>full name</td>
                    <td><input type="text" name="name" id="name" value="<?php echo $row['name'] ?>"></td>
                    <td><input type="hidden" name="eid" id="name" value="<?php echo $row['id'] ?>"></td>
                </tr>
                <tr>
                    <td>city</td>
                    <td><input type="text" name="city" id="city" value="<?php echo $row['city'] ?>"></td>
                </tr>
                <tr>
                    <td>salary</td>
                    <td><input type="text" name="salary" id="salary" value="<?php echo $row['salary'] ?>"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" name="email" id="email" value="<?php echo $row['email'] ?>"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" name="password" id="password" value="<?php echo $row['password'] ?>"></td>
                </tr>
                <input type="hidden" name="eid" id="" value="<?php echo $row['id'] ?>">
                <tr>
                    <td><input type="submit" name="update"></td>
                    <td><input type="reset" name="reset"></td>
                </tr>
            <?php
            }

            include('db.php');

            if (isset($_POST['update'])) {
                $eid = $_POST['eid'];
                $name = $_POST['name'];
                $city = $_POST['city'];
                $salery = $_POST['salary'];
                $email = $_POST['email'];
                $password = $_POST['password'];



                $query = mysqli_query($con, "UPDATE `registere_emp` SET `name`='$name',`city`='$city',`salary`='$salery',`email`='$email ',`password`='$password'  WHERE `id`=$eid");
                if ($query) {
                    echo " <script>alert('updated sucessfully')</script>";
                    echo " <script>document.location='../empdetails.php'</script>";
                } else {
                    echo "somthing went wrong";
                }
            }


            ?>

        </Form>
    </table>

</body>

</html>