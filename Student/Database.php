<?php
  $conn = new mysqli("localhost", "root", "admin", "edutech", 3306);
  $query = "SELECT * FROM student";
  $result = $conn->query($query);
    if($result){
      $num = $result->num_rows;
      while($row = mysqli_fetch_assoc($result)){
        echo $row['Name'];
      }
  }
?>