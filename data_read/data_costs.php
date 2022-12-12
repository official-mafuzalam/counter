<!-- HTML File -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <a href="/index.html">
        <h2 class="text-center">Hemayetpur Counter</h2>
    </a>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Cost Name</th>
                    <th scope="col">Cost Amount</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $hostname = 'localhost'; // specify host domain or IP, i.e. 'localhost' or '127.0.0.1' or server IP 'xxx.xxxx.xxx.xxx'
                $database = 'friendsi_blood'; // specify database name
                $db_user = 'friendsi_user_1'; // specify username
                $db_pass = 'friendsi_user_1'; // specify password
                

                $con = mysqli_connect("$hostname", "$db_user", "$db_pass", "$database");

                $sql = "SELECT * FROM counter_costs ORDER BY id DESC";
                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    # code..
                
                ?>
                <tr>

                    <td>
                        <?php echo $row['id']; ?>
                    </td>
                    <td>
                        <?php echo $row['cost_date']; ?>
                    </td>
                    <td>
                        <?php echo $row['cost_time']; ?>
                    </td>
                    <td>
                        <?php echo $row['cost_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['cost_amount']; ?>
                    </td>

                </tr>


                <?php

                }

                ?>


            </tbody>
        </table>
    </div>
</body>

</html>