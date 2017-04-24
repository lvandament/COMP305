<?php	
$db=mysqli_connect('willy', 'comp305_grp1', 'Temp!comp305_grp1','comp305_grp1')
or die ('Error connecting to MySqL Server.');
require "comp305.php";
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="mainCSS.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="webJS.js" defer></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5" style="min-width: 900px">
<title> Under Construction </title>
<body>
<div class="body" style="min-width: 900px">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>LHU Fraternity &#38 Sorority</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="National Chapter Web"><i class="fa fa-globe"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
    </div>
  </div>
 </div>
</div>


<!-- Left Page Container With Calander -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile of Calendar -->
      <div class="w3-card-2 w3-round w3-white" style="float: right">
        <div class="w3-container"style="width: 500px; height: 500px">
          <div class="w3-card-2 w3-round w3-light-red w3-center" style="width: auto; height: 500px">
            <iframe src="https://calendar.google.com/calendar/embed?src=9sq4hf7qtm45vq71l4bknaqsnk%40group.calendar.google.com&ctz=America/New_York" style="border: 0px" width="100%" height="100%" frameborder="0" scrolling="no"></iframe></div>

        </div>
      </div>
      <br>


    <!-- End Left Column -->
    </div>

    
    <!-- Middle Column -->
    <div class="w3-col m7">

     
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Lock Haven University of Pennsylvania Sorority and Faterinty</h6>
					<p>
						<?php if($_SESSION['Member_name']!==null)
{
echo " <p>\n";
echo "  Current Member ID: ".$_SESSION["Member_id"]."\n";
echo " <br />";
echo "  Current Fraternity / Sorority ID: ".$_SESSION["FoS_id"]."\n";
echo " <br />";
echo "  Current Member Name: ".$_SESSION["Member_name"]."\n";
echo " <br />";
echo "  Current Grad Year: ".$_SESSION["Grad_Year"]."\n";
echo " <br />";
echo "  Current Email: ".$_SESSION["Email"]."\n";
echo " <br />";
echo "  Current Admin Status: ".$_SESSION["Admin_status"]."\n";
echo " <br />";
echo "  Current Dues: ".$_SESSION["Dues_owed"]."\n";
echo " <br />";
echo " </p>";
//$sql2="INSERT INTO 'Admin_Log' ('Login_id, 'Member_id', 'FoS_id' 'Login_time) VALUES ('',".$_SESSION["Member_id"].",".$_SESSION["FoS_id"].",NOW());";
//$result=mysqli_query(DatabaseConnect(),$sql2);
}
else
{
  echo "<center>You are not logged in</center>";
}?>					
					</p>

            </div>
          </div>
        </div>
</div>


      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card-2 w3-round w3-white w3-center" style="border: 0px">
        <div class="w3-container">
          <p>PHP name here of whoever is logged in's club name</p>
          <p><button class="w3-button w3-block w3-theme-l4">Learn More</button></p>
          <!-- Profile -->
                This is where the outline of the fraternity or sorority would pop up and be nice to look at. with link to fb and twitter.
              </p>

              <hr>
              <button type="button" class="w3-button w3-theme" ><i class="fa fa-pencil"></i>  Log Out</button>
            </div>
        </div>
      </div>
<br>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column  -->
    
   <div>
        
          <!-- Profile -->
         
      <br>


    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16 w3-center w3-color-pink">
  <h5>LHU COMP305 Scrum Final</h5>
</footer>
</div>

</body>
</body>
</body>
</html>
