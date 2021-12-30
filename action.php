<?php
    $name = '"' . $_POST['name'] . '"';
    $email = '"' . $_POST['email'] . '"';
    $comments = $_POST['comment'] ? $_POST['comment'] : '';
    $comment = '"' . $comments . '"';

    $servername = "sql308.epizy.com";
    $username = "epiz_29947181";
    $password = "8PrgnBGxhRxmF";
    $dbname = "epiz_29947181_portfolio";


// Creating connection
$conn = mysqli_connect($servername, $username, $password);
// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Creating a database named doughnuts
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (!mysqli_query($conn, $sql)) {
    echo "Error creating database: " . mysqli_error($conn);
}

// sql to create table
$sqlTable = "CREATE TABLE IF NOT EXISTS epiz_29947181_portfolio.Messages (
    Name VARCHAR(40),
    Email VARCHAR(40),
    Comments Text(60000))";
    
    if ($conn->query($sqlTable) !== TRUE) {
      echo "Error creating table: " . $conn->error;
    }
     
        $sql = "INSERT INTO epiz_29947181_portfolio.Messages (Name, Email, Comments)
VALUES ($name, $email, $comment)";
            
            if ($conn->query($sql) === TRUE) {
                echo '<style>
                body {
                    margin: 0;
                    padding: 0;
                }</style><div style="text-align:center; padding-top:13%;background: radial-gradient(ellipse at bottom, #663b66 0%, #090a0f 100%);
                color:rgb(255, 255, 255);
                font-family:\'Lucida Sans\', \'Lucida Sans Regular\', \'Lucida Grande\', \'Lucida Sans Unicode\', Geneva, Verdana, sans-serif;height: 100vh;
                width: 100vw;overflow: hidden;" id="default">
                <div>
                    <h1><strong>Thanks!</strong></h1>
                    <p><strong>I will contact with you soon</strong></p>
                      
                </div>
            </div>';
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }

// closing connection
mysqli_close($conn);
?>