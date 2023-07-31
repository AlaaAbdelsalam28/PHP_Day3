<?php 

$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'science'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'science'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];


echo "<table>

      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
      </tr>";

      foreach ($students as $i) {
        echo "<tr";
    
        if ($i['status'] == 'science') {
            echo " style='color:red;'";
        }
    
        echo"<br>";
        echo "<td>" . $i['name'] . "</td>";
        echo "<td>" . $i['email'] . "</td>";
        echo "<td>" . $i['status'] . "</td>";
        echo "</tr>";
    }
    

echo "</table>";


?>