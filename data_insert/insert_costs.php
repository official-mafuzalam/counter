<?php

$date = $_POST['cost_date'];
$time = $_POST['cost_time'];
$cost_name = $_POST['cost_name'];
$cost_amount = $_POST['cost_amount'];


$hostname = 'localhost'; // specify host domain or IP, i.e. 'localhost' or '127.0.0.1' or server IP 'xxx.xxxx.xxx.xxx'
$database = 'friendsi_blood'; // specify database name
$db_user = 'friendsi_user_1'; // specify username
$db_pass = 'friendsi_user_1'; // specify password


$con = mysqli_connect("$hostname", "$db_user", "$db_pass", "$database");

if (mysqli_connect_errno())
    echo "Couldn't connect to Database! <br>";
else
    echo "connected to Database successfully !!";


$sql = "INSERT INTO counter_costs (cost_date, cost_time, cost_name, cost_amount) VALUES('$date', '$time', '$cost_name', '$cost_amount') ";
$result = mysqli_query($con, $sql);

if ($result)
    echo "\n Data inserted successfully!";
else
    echo "Qury error!";

?>