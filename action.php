<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SQL Injection form error example</title>
    <meta name="description" content="Twitter Bootstrap Version2.0 form error example from w3resource.com.">
    <link href="http://localhost/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">
</head>

<body style="margin-top: 50px">
    <div class="container">
        <div class="row">
            <div class="span6">
                <?php $host = "localhost";
                $username = "root";
                $password = "";
                $db_name = "hr";
                $con = mysqli_connect(
                    "$host",
                    "$username",
                    "$password"
                ) or
                    die("cannot connect");
                mysqli_select_db($con, $db_name) or
                    die("cannot select DB");
                $uid = $_POST['uid'];
                $pid = $_POST['passid'];
                $SQL = "select * from user_details where userid = '$uid' 
and password = '$pid' ";
                $result = mysqli_query($con, $SQL);
                // echo $result;
                // echo mysqli_fetch_row($result);
                // $SQLQuery = "SELECT * FROM user_details";
// echo mySQL_query($con, $SQLQuery);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<h4>" .
                            "-- Personal Information -- " .
                            $row[2] . "</h4>", "</br>";

                        echo "
<p>" .
                            "User ID : " .
                            $row[1] . "
</p>";
                        echo "<p>" .
                            "Password : " .
                            $row[2] . "</p>";
                        echo "<p>" .
                            "First Name : " .
                            $row[3] . " Last Name : " .
                            $row[4] . "</p>";
                        echo "<p>" .
                            "Gender : " .
                            $row[5] . " 
Date of Birth :" .
                            $row[6] . "</p>
";
                        echo "
<p>" .
                            "Country : " .
                            $row[7] . " 
User rating : " . $row[8] .
                            "</p>
";
                        echo "<p>
" . "Email ID : " .
                            $row[8] .
                            "</p>
";
                        echo "--------------------------------------------";
                    }
                } else
                    echo "
Invalid user id or password"; ?>

            </div>
        </div>
    </div>
</body>

</html>