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
$sql = "SELECT id, username, contactno, address FROM users where id =".$_GET['userid'];
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
              <?php
                if($result->num_rows) {
                while($row=$result->fetch_assoc()) { ?>

              <tr>
                  <td>User Id:<input type="text" value="<?php echo $row['id'];?>"></td>
              </tr>
              <tr>
                  <td>User Name:<?php echo $row['username'];?></td>
              </tr>
              <tr>
                  <td>Contact No.:<?php echo $row['contactno'];?></td>
              </tr>
              <tr>
                  <td>Address:<?php echo $row['address'];?></td>
              </tr>
              <?php
}
}
             ?>
          </table>
      </div>
      <button>
          Update
      </button>
  </div>
  <!-- Footer -->
  <?php
  include("./footer.php");
  ?>