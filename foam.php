<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid" style="margin-top: 2px;">

        <h1 style="text-align:center;">Form Validation</h1>

        <form action="foam.php" method="post" class="form-group">
            <label for="FirstName">FirstName</label>
            <input type="text" name="FirstName" class="form-control" placeholder="First-Name">
            <br>
            <label for="LastName">LastName</label>
            <input type="text" name="LastName" class="form-control" placeholder="Last-Name">
            <br>
            <label for="Age">Age</label>
            <input type="number" name="Age" class="form-control">
            <br>
            <label for="Gender">Gender</label>
            <input type="text" name="Gender" class="form-control">
            <br>
            <input type="Submit" value="Submit" name="Submit" class="btn btn-success">
        </form>
    </div>
    <?php
    if (isset($_POST['Submit'])) {
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Age = $_POST['Age'];
        $Gender = $_POST['Gender'];

        $info = "INSERT INTO `info` (`FirstName`, `LastName`,`Age`, `Gender`) VALUES ('$FirstName', '$LastName', '$Age', '$Gender')";
        $results = mysqli_query($connect, $info);
        if (!$results) {
            die("information failed");
        }
    }
    ?>
</body>

</html>