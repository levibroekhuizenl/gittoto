<?php
$servername = "localhost";
                    $username = "crashbeer_nl_sportbet";
                    $password = "4ZyY6iqsMLpY";
                    $dbname = "crashbeer_nl_sportbet";
$inlay = $_POST['inlay'];

    /*other variables*/
    $set1 = $_POST['set'];
    $set2 = $_POST['set1'];
    $set = $set1.$set2;
    echo $set;
                    session_start();
                    $getuser = $_SESSION["username"];

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$mysql = "SELECT * FROM users WHERE username='$getuser'";

 $result = $conn->query($mysql);



                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $budget = $row["budget"];
                            $newbudget = $budget - $inlay;
                            $match1 = $row["match1"];
                            $match2 = $row['match2'];
                        }
                    } else {
                        
                    }

                    if($match1 == ""){
                    	echo "zit niks in";
                        //header("Location: http://crashbeer.nl/betset.php");
                    } else{
                    	echo "bet is al geplaatst";
                    	die;
                    }

                    if ($budget < $inlay){
                    	echo "error";
                    	die;
                    }

$sql = "UPDATE users SET match1 = '$set', inlay = '$inlay', budget = '$newbudget' WHERE username = '$getuser'";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>