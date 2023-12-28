
<html >

   <head><meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>chat </title>

          <style>img{float:right}
          body {
  background-attachment: fixed;
}


</style>
   </head>
   <img src ="robot.jpg"  width="100" height="100">
   <body style='background-color :black;color:green;' ><center> <h1>Secret chat</h1> </center>
    <form action="" method='POST' style=''>
        <div>

 <?php
// Replace these with your actual database credentials
$servername = "localhost";
$username = "elliot";
$password = "password";
$dbname = "facebook";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$Message = ($_POST['mssg']);
if ($Message != ""){
$sql = "INSERT INTO chat (message)
VALUES ('$Message')";

if ($conn->query($sql) === TRUE ) {
echo "sent ✔️";}
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}}sxsxs


// SQL query
$sql = "SELECT * FROM chat";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Error in SQL query: " . $conn->error);
}

// Check if there are rows in the result set
if ($result->num_rows > 0) {
    // Fetch data and do something with it
    while ($row = $result->fetch_assoc()) {
        // Access individual columns using $row['column_name']

        echo $row["message"].'<br>';
    }
} else {
    echo "No results found";
}

// Close the connection
$conn->close();
?>

</div>

    <textarea name='mssg' class="form-control" id="exampleFormControlTextarea1" rows="3" style='color:red;width: 99%; height: 108px;position: absolute; bottom: 33px; background-color: black'></textarea>
        <br>
          <center>
            <button class="btn btn-primary" type = "submit" style="background-color: #0ed490;position: absolute; bottom: 7px; background-color: green">Send</button>
      </center>
        </form>
   </body>

</html>


