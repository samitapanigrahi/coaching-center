  <?php
  include("./admin-header.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coaching-center";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  $status= $conn->connect_error;
  die("Connection failed: " . $conn->connect_error);
} else {
   $status= "Connected successfully";
}
$sql = "SELECT id, username, contactno, address FROM users";
$result = $conn->query($sql);
//print_r($result);

  ?>
  <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

tr.info td,
th {
    border: 1px solid #dddddd;

    color: black;
    text-align: center;
    padding: 8px;
}

tr.header>td,
th {
    border: 1px solid #dddddd;
    background-color: blue;
    color: white;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
  </style>
  <!-- Main Content -->
  <div class="main-content">
      <p><?php 
echo  $status;
    ?>
      <div class="card">
          <h3>Users</h3>
          <table id="usertbl">
              <tr class="header">
                  <th>User Id</th>
                  <th>User Name</th>
                  <th> Contact No.</th>
                  <th>Address</th>
                  <th></th>
              </tr>

              <?php
if($result->num_rows) {
while($row=$result->fetch_assoc()) {
//print_r($row);
//exit;
 ?>
              <tr class="info">
                  <td><a href="view-users.php?userid=<?php echo $row['id'];?>"><?php echo $row['id'];?></a></td>
                  <td><?php echo $row['username'];?></td>
                  <td><?php echo $row['contactno'];?></td>
                  <td><?php echo $row['address'];?></td>
                  <td>
                      <!--<button onClick="">Edit</button>-->
                      <i class="fa fa-edit" style="font-size: 20px;"></i>
<a href="view-users.php?userid=<?php echo $row['id'];?>">
                      <!--<button onClick="">Delete</button>-->
                      <i class="fa fa-trash" style="font-size: 20px; color:red;"></i></a>
                  </td>

              </tr>
              <?php
             }
        }
             ?>
          </table>
      </div>


  </div>

  <!-- Footer -->
  <?php
  include("./footer.php");
  ?>