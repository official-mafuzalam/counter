<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cost Saved</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        p {
            font-size: 50px;
        }
    </style>
</head>

<body>

    <a href="/index.html">
        <h2 class="text-center">Hemayetpur Counter</h2>
    </a>


    <p>

        <?php

        $date = $_POST['cost_date'];
        $time = $_POST['cost_time'];
        $cost_name = $_POST['cost_name'];
        $cost_amount = $_POST['cost_amount'];


        $hostname = 'localhost'; // specify host domain or IP, i.e. 'localhost' or '127.0.0.1' or server IP 'xxx.xxxx.xxx.xxx'
        $database = 'friendsi_blood'; // specify database name "friendsi_blood", "friendsi_counter_db"
        $db_user = 'friendsi_user_1'; // specify username
        $db_pass = 'friendsi_user_1'; // specify password
        

        $con = mysqli_connect("$hostname", "$db_user", "$db_pass", "$database");

        if (mysqli_connect_errno())
            echo "<b>Couldn't connect to Database! </b> <br>";
        else
            // echo "connected to Database successfully !!";
            echo "";


        $sql = "INSERT INTO counter_cost (cost_date, cost_time, cost_name, cost_amount) VALUES('$date', '$time', '$cost_name', '$cost_amount') ";
        $result = mysqli_query($con, $sql);

        if ($result)
            echo "\n DATA SAVE SUCCESSFULLY!";
        else
            echo "Qury error!";

        ?>


    </p>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>


</body>

</html>