<?php 

    require_once("connection.php");
    $query = "select * from userdetails";
    $result = mysqli_query($con,$query);

?>

<!doctype html>
<html>
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User details-DPE</title>
  <script>
    var logoutTimeout;

    function resetLogoutTimer() {
      clearTimeout(logoutTimeout);
      logoutTimeout = setTimeout(logout, 120000); // 2 minutes in milliseconds
    }

    function logout() {
      // Perform the logout operations here, such as clearing session data or redirecting to a login page.
	document.location.href =  "index.html";

      // For this example, we will simply display an alert message.
      alert("You have been automatically logged out due to inactivity.");
      // You can replace the alert above with the actual logout logic you want to execute.
    }

    document.addEventListener("mousemove", resetLogoutTimer);
    document.addEventListener("keydown", resetLogoutTimer);
    document.addEventListener("click", resetLogoutTimer);
  </script>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
  </head>
  <body>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    resetLogoutTimer(); // Start the initial timer
  </script>
<div class="text-center">
  <img src="logo.png" class="rounded" alt="...">
</div>

<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>email</th>
<th>Password</th>
<th>Role</th>
<th>Gender</th>
<th>Phone Number</th>
<th>Desgination</th>
<th>Department</th>
<th>Expertise</th>
</tr>

<?php 
                                    
while($row=mysqli_fetch_assoc($result))
{
    $FirstName = $row['FirstName'];
    $LastName = $row['LastName'];
    $email = $row['email'];
    $Password = $row['pwd'];
    $Role = $row['Role'];
    $Gender = $row['Gender'];
    $PhoneNumber = $row['PhoneNumber'];
    $Desgination = $row['Designation'];
    $Department = $row['Department'];
    $Expertise = $row['Expertise'];
?>
<tr>
    <td><?php echo $FirstName ?></td>
    <td><?php echo $LastName ?></td>
    <td><?php echo $email ?></td>
    <td><?php echo $Password ?></td>
    <td><?php echo $Role ?></td>
    <td><?php echo $Gender ?></td>
    <td><?php echo $PhoneNumber ?></td>
    <td><?php echo $Desgination ?></td>
    <td><?php echo $Department ?></td>
    <td><?php echo $Expertise ?></td>
   
</tr>        
<?php 
               } 
          ?> 
  </table>

  </body>
</html>