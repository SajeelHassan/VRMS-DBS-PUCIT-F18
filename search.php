<?php

  if(isset($_POST['search_submit']))
  {
    require 'includes/db.inc.php';
    session_start();
    $fname=$_POST['fname'];
    $make=$_POST['make'];
    $model=$_POST['model'];
    $city=$_POST['city'];
    $status=$_POST['status'];
  }
  else{
    header("location:vehicleSearch.php?error=NOTCLICKED");
    exit();
  }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="vrms.css">
		<title>
			Admin Panel
		</title>
		</head>
		<body>
		<div id="adminbarbkg">
			<div id="adminlogobar">
        <div id="adminlogo"><a href="adminpanel.php">VRMS<sub>.com</sub></a></div>
			</div>
		</div>
		<div class="clear"></div>
		 <div id="page-size">
			<div id="admin_page">
        <div id="admin_accountOptions">
          <p>Account Options</p><br><br>
          <a href="vehicleSearch.php">Vehicle Search</a><br><br>
          <a href="adminpendingReg.php">Pending Registrations</a>
          <form action="includes/adminlogout.inc.php" method="post">
            <button type="submit" name="logout">Logout</button>
          </form>
        </div>
        <div class="clear"></div>
        <div id="account_main">
          <h2>Search Results</h2>

          <table id="user_status" >
                <tr>
                  <th>Owner Name</th>
                  <th>MAKE</th>
                  <th>MODEL</th>
                  <th>city</th>
                  <th>Status</th>
                  <th>View Complete Info</th>
                </tr>
          <?php
          if(!empty($fname)){
            $query="SELECT o.fullname,v.make,v.model,r.city,r.status,r.regid
FROM ownerdetails O,vehicledetails V,registration r
WHERE o.ownerid=v.vehicleid AND v.vehicleid=r.regid AND
 o.fullname LIKE '%$fname%';";
            $result=mysqli_query($link,$query);
            $resultCheck=mysqli_num_rows($result);
            if($resultCheck > 0){
              while($row=mysqli_fetch_array($result))
              {

                  echo "<tr>
                  <td> $row[0]</td>
                  <td> $row[1]</td>
                  <td> $row[2]</td>
                  <td> $row[3]</td>
                  <td> $row[4]</td>
                  <td><a href='thePdetails.php?id=$row[5]'>Click Here</a></td>
                </tr>";
              }
            }
}
else if(!empty($make)){
  $query="SELECT o.fullname,v.make,v.model,r.city,r.status,r.regid
  FROM ownerdetails O,vehicledetails V,registration r
  WHERE o.ownerid=v.vehicleid AND v.vehicleid=r.regid AND
  v.make LIKE '%$make%';";
  $result=mysqli_query($link,$query);
  $resultCheck=mysqli_num_rows($result);
  if($resultCheck > 0){
    while($row=mysqli_fetch_array($result))
    {

        echo "<tr>
        <td> $row[0]</td>
        <td> $row[1]</td>
        <td> $row[2]</td>
        <td> $row[3]</td>
        <td> $row[4]</td>
        <td><a href='thePdetails.php?id=$row[5]'>Click Here</a></td>
      </tr>";
    }
  }

}
else if(!empty($model)){
  $query="SELECT o.fullname,v.make,v.model,r.city,r.status,r.regid
  FROM ownerdetails O,vehicledetails V,registration r
  WHERE o.ownerid=v.vehicleid AND v.vehicleid=r.regid AND
  v.model LIKE '%$model%';";
  $result=mysqli_query($link,$query);
  $resultCheck=mysqli_num_rows($result);
  if($resultCheck > 0){
    while($row=mysqli_fetch_array($result))
    {

        echo "<tr>
        <td> $row[0]</td>
        <td> $row[1]</td>
        <td> $row[2]</td>
        <td> $row[3]</td>
        <td> $row[4]</td>
        <td><a href='thePdetails.php?id=$row[5]'>Click Here</a></td>
      </tr>";
    }
  }

}
else if(!empty($city)){
  $query="SELECT o.fullname,v.make,v.model,r.city,r.status,r.regid
  FROM ownerdetails O,vehicledetails V,registration r
  WHERE o.ownerid=v.vehicleid AND v.vehicleid=r.regid AND
  r.city LIKE '%$city%';";
  $result=mysqli_query($link,$query);
  $resultCheck=mysqli_num_rows($result);
  if($resultCheck > 0){
    while($row=mysqli_fetch_array($result))
    {

        echo "<tr>
        <td> $row[0]</td>
        <td> $row[1]</td>
        <td> $row[2]</td>
        <td> $row[3]</td>
        <td> $row[4]</td>
        <td><a href='thePdetails.php?id=$row[5]'>Click Here</a></td>
      </tr>";
    }
  }

}
else if(!empty($status)){
  $query="SELECT o.fullname,v.make,v.model,r.city,r.status,r.regid
  FROM ownerdetails O,vehicledetails V,registration r
  WHERE o.ownerid=v.vehicleid AND v.vehicleid=r.regid AND
  r.status LIKE '%$status%';";
  $result=mysqli_query($link,$query);
  $resultCheck=mysqli_num_rows($result);
  if($resultCheck > 0){
    while($row=mysqli_fetch_array($result))
    {

        echo "<tr>
        <td> $row[0]</td>
        <td> $row[1]</td>
        <td> $row[2]</td>
        <td> $row[3]</td>
        <td> $row[4]</td>
        <td><a href='thePdetails.php?id=$row[5]'>Click Here</a></td>
      </tr>";
    }
  }

}
else {
  echo "<tr>
  <td>Nothing Found</td>
  <td>Nothing Found</td>
  <td>Nothing Found </td>
  <td>Nothing Found </td>
  <td>Nothing Found </td>
  <td>Nothing Found</a></td>
</tr>";
}
           ?>

          </table>
        </div>
			</div>
		 </div>
		</div>
		<div class="clear"></div>

	</body>

</html>
