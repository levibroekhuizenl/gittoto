<?php

$servername = "localhost";
                    $username = "crashbeer_nl_sportbet";
                    $password = "4ZyY6iqsMLpY";
                    $dbname = "crashbeer_nl_sportbet";
$homeValue = 0;
$gameOneTrue = 0;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


for($i=0;$i <100; $i++){

 $sql = "SELECT * FROM users WHERE id='$i'";

                    $result = $conn->query($sql);

                    if ($result->num_rows >= 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          $inlay2 = $row['inlay2'];
                          

         if ( ($match2 == 'draw') && ($gameOneTrue == 2) ){
                      echo "ik heb gelijk";
                      $budget = $row['budget'];
                        $inlay2 = $row['inlay2'];
                        $winst = $inlay2 * $homeValue;
                        $finalBudget = $budget + $winst;
                        echo $winst;                      
                        echo $match2; 
                        $sql = "UPDATE users SET budget='$finalBudget' WHERE id=$i";

        }else {
          if( ($match2 == 'away') && ($gameOneTrue == 3) ){
            echo "ik heb gelijk";
                      $budget = $row['budget'];
                        $inlay2 = $row['inlay2'];
                        $winst = $inlay2 * $homeValue;
                        $finalBudget = $budget + $winst;
                        echo $winst;                      
                        echo $match2;
                        

                        /* Attempt MySQL server connection. Assuming you are running MySQL
            server with default setting (user 'root' with no password) */
             
            // Attempt update query execution



















          }
        }
          if( ($match2 == 'home') && ($gameOneTrue == 1) ){
                        echo "ik heb gelijk";
                      $budget = $row['budget'];
                        $inlay2 = $row['inlay2'];
                        $winst = $inlay2 * $homeValue;
                        $finalBudget = $budget + $winst;
                        echo $winst;                      
                        echo $match2;
                        $sql = "UPDATE users SET budget='$finalBudget' WHERE id=$i";
          } 




         $sql = "UPDATE users SET inlay2='0' WHERE id=$i";
         $sql = "UPDATE users SET match2='' WHERE id=$i";


          if ($conn->query($sql) == TRUE) {
              echo "";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }

          echo $i;

            



        echo "<br>";                  
                        }
                    } else {
                       
                    }
}

$conn->close(); 

?>