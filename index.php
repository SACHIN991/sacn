
<?php 

    session_start();
    if(isset($_SESSION["login"])) {
   echo '<p>already login click to <a href="/sacn/logout.php">logout</a></p>';
} else {
    header('Location: http://localhost/sacn/login.php');
}
    
include 'header.php';
include 'connection.php';

$sql = "SELECT * FROM stu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	?>
	 <table class="table table-bordered">/
    
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>E-mail</th>
      <th>Message</th>
      <th>Show DaTa</th>
      <th>DANGER ZONE</th>
    </tr>
  </thead>
  <tbody>
	<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "<br>"."Name:" . $row["name"]."<br>"."E-mail:" . $row["email"]."<br>"."Message:" . $row["message"]. "<br>";
        ?>
       
    <tr>
      <th scope="row"><?php echo $row["id"]?></th>
      <td><?php echo $row["name"]?></td>
      <td><?php echo $row["email"]?></td>
      <td><?php echo $row["message"]?></td>
      <td><a href="open2.php?id=<?php echo $row["id"]?>">open2</a></td>
      <td><a href="delete.php?id=<?php echo $row["id"]?>">delete</a></td>
    </tr>
  
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</tbody>
</table>
</body>
</html>
