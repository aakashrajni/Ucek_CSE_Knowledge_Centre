<?php
$conn =mysqli_connect("localhost","dihubin_root","Dihroot@1","dihubin_dih");
session_start();
if($_SESSION['log'] != 2)
    header ('Location: ../../index.html');
else
{
$username1= $_SESSION['username'];
$email11 = $username1;
$pro = $_SESSION['register_no'];
$sql="SELECT * FROM astud WHERE regno='$pro'";
$result=mysqli_query ($conn,$sql);
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="st.css">
    <!-- color CSS you can use different color css from css/colors folder -->
<!-- We have chosen the skin-blue (blue.css) for this starter
      page. However, you can choose any other skin from folder css / colors .
  -->
  <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>

                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#">  <b class="hidden-xs"><?php echo $row ['name'];?></b> </a>
                    </li>
                    <li><a class="profile-pic1" href="signout.php"> <b class="hidden-xs">/sign out</b></a></li>
                </ul>
            
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    
                    <li>
                        <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                    </li>

                    <li>
                        <a href="Acedemic.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Acedemic Details</span></a>
                    </li>


                    <li>
                        <a href="Attendence.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Attendence Details</span></a>
                    </li>

                </ul>

            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Absent Days </h4> </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Blank Page</li>
                            </ol>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                                 

                                    
                                              <?php


    $data = '91'.$row ['pno'];
    $sql1="SELECT * FROM delrep WHERE receiver = '$data' ORDER BY date DESC";
$result1=mysqli_query ($conn,$sql1);
// echo "<table>";

 
 

 echo "<table class='table table-hover table-striped table-responsive' >";


     echo "<tr><th>DATE</th><th>DAY</th><th>MESSAGE</th></tr>"; 


while($row1= mysqli_fetch_array($result1)){


     $req=$row1['request_id'];

     $date=substr($row1['date'],0,-9);
     $dt = strtotime($date);
     $day = date("l", $dt);
     $day1=strtoupper($day);
    // // echo "<table>";
    // echo "<tr><td>" . $date . "</tr><td>" . $day1 . "</td></tr>";
    // echo "</table>";
     $sql7="SELECT msg FROM success WHERE request_id = '$req'";    
  $result7=mysqli_query ($conn,$sql7);


  $row7= mysqli_fetch_array($result7);
  
    $msg1=$row7['msg'];
     echo "<tr class='table_row'>";
        

     
     echo "<td>$date</td>";
     echo "<td>$day1</td>";
      echo "<td>$msg1</td>";

     echo "</tr>";
    
}



  
 echo "</table>";
       
?> 

        

                            </div>
                            

                    </div>
              <!-- /.container-fluid -->
                    <footer class="footer text-center"> 2017 &copy; UNIVERSITY COLEGE OF ENGINEERING-KANCHEEPURAM </footer>
                </div>
                <!-- /#page-wrapper -->
            </div>

            <!-- /#wrapper -->
            <!-- jQuery -->
            <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Menu Plugin JavaScript -->
            <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
            <!--slimscroll JavaScript -->
            <script src="js/jquery.slimscroll.js"></script>
            <!--Wave Effects -->
            <script src="js/waves.js"></script>
            <!-- Custom Theme JavaScript -->
            <script src="js/custom.min.js"></script>
        </body>

        </html>
<?php
}
?>