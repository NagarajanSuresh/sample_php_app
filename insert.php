<!DOCTYPE html>
<html>
<head>
    <title>Insert Page page</title>
</head>
<body>
    <center>
        <?php
        $dbpassword = "rootroot";
        $db_host=trim(file_get_contents('host.txt'));
        $conn = mysqli_connect($db_host, "root", $dbpassword, "school");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $age = $_REQUEST['age']; 
        // Performing insert query execution
        $sql = "INSERT INTO students(name,age)  VALUES ('$name', '$age')";
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.";
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
