<?php

$conn = new mysqli("localhost", "root", "", "person");

if($conn->connect_error){
    die("Connection Failed" . $conn->connect_error);
}

$result= $conn->query("SELECT * FROM user");

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr>
              <td>{$row["ID"]}</td>
              <td>{$row["Name"]}</td>
              <td>{$row["City"]}</td>
              <td>{$row["DOB"]}</td>
             </tr> <br> ";
    }
}else{
    echo "Connection Failed";
}

$conn ->close();

?>