<?php
    include 'connect.php';
            $Get = "SELECT * FROM `info`";
            $Info = mysqli_query($connect, $Get);

            echo "<br> <br>";
            while ($row = mysqli_fetch_assoc($Info)) {
                echo $row['FirstName'] . "<br>";
                echo $row['LastName'] . "<br>";
                echo $row['Age']. "<br>";
                echo $row['Gender']. "<br> <br>";
                }
            ?>