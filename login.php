<?php
$servername = "localhost";
$root = "root";
$password = "";
$dbName = "bd_task";
// Create connection
$conn = new mysqli($servername, $root, $password);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/veno box/venobox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="formContainer">
        <div class="formWrapper">
            <span class="logo">User Login</span>
            <span class="title">Login</span>
            <form>
                <input type="text" placeholder="display name">
                <input type="email" placeholder="email">
                <input type="password" placeholder="password">


                <button><a href="index.php">Sing Up</a></button>
            </form>



        </div>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets/veno box/venobox.min.js"></script>
</body>

</html>