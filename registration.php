<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "bd_task";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);
if (isset($_POST['submit'])) {

    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $number = $_POST["number"];
    $gender = $_POST["gender"];
    // $image = $_POST["image"];    
    $sql = "INSERT INTO `users`( `first_name`, `last_name`, `email`, `password`, `number`, `gender`) VALUES ('$firstname','$lastname','$email','$password','$number','$gender')";
    $submit = mysqli_query($conn, $sql);
    if (!$submit) {
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom Css -->

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="formContainer">
        <div class="formWrapper">
            <span class="logo">User Login</span>
            <span class="title">Rsgister</span>
            <form action="registration.php" method="post">
                <input type="text" placeholder="first name" name="first_name">
                <input type="text" placeholder="last name" name="last_name">
                <input type="email" placeholder="email" name="email">
                <input type="password" placeholder="password" name="password">
                <input type="text" placeholder="number" name="number">
                <h5>Gender</h5>
                <div style="transform:scale(.7)">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="Male">
                        <label class="form-check-label ms-2" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="Female">
                        <label class="form-check-label ms-2" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="Others">
                        <label class="form-check-label ms-2" for="inlineRadio2">Others</label>
                    </div>
                </div>
                <h6>Add image</h6>
                <input type="file" id="file" name="image">

                <input type="submit" value="Submit" name="submit" class="btn btn-info">
            </form>



        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>