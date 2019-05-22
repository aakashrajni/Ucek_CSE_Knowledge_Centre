<?php
$conn =mysqli_connect("localhost","dihubin_root","Dihroot@1","dihubin_dih");
session_start();
if($_SESSION['log'] != 2)
    header ('Location: ../../index.html');
else
{
$arrear = 0;
$username1= $_SESSION['username'];
$year1= $_SESSION['year'];
$sem1= $_SESSION['sem'];
$email11 = $username1;
$pro = $_SESSION['register_no'];
$sql="SELECT * FROM astud WHERE regno='$pro'";
$result=mysqli_query ($conn,$sql);
$row= mysqli_fetch_array($result);
$mark  = $row['regno'];
$dyear =$row['year'];
$dsem  = $row['sem'];
if ($dsem%2 == 0) {
    $ddyear = $dyear;
    $ddsem = $dsem - 1;
}else{
    $ddyear = $dyear - 1;
    $ddsem = $dsem - 1;
}

if (isset($_POST['year77'])) {
    $yy = $_POST['year77'];
    $ss = $_POST['sem77'];
}else{
    $yy = $ddyear;
    $ss = $ddsem;
}

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
                    <form name="form6" method="POST" >
                        <h4 class="page-title"> <select id="depyear" name="depyear">
                            <option value="">select</option>
                            
                            <option value="2">2 year</option>
                            <option value="3">3 year</option>
                            <option value="4">4 year</option>
                        </select></h4> 
                            <h4 class="page-title"> <select id="depsem" name="depsem" oninput="semss()">
                            <option value="">select</option>
                            
                            <option value="3">3 semester</option>
                            <option value="4">4 semester</option>
                            <option value="5">5 semester</option>
                            <option value="6">6 semester</option>
                            <option value="7">7 semester</option>
                            <option value="8">8 semester</option>
                        </select></h4>
                        </div>
                        
                        </form>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Blank Page</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
<?php

$u =0;
$m =0;
$count =0;




 echo "<table class='table table-hover table-striped table-responsive' >";

      
     echo "<tr><th>SUBJECT_CODE</th><th>SUBJECT</th><th>CREDITS</th><th>GRADE</th></tr>  "; 

// echo $year2;
$sql3="SELECT * FROM mark WHERE year='$yy' AND sem='$ss'";
    $result3=mysqli_query ($conn,$sql3);
while($row3= mysqli_fetch_array($result3)){

    $subn=$row3['subject'];
    $sub=$row3['subject_code'];
    $cre=$row3['credits'];
    $sql4="SELECT uid FROM header WHERE head='$sub'";
    $result4=mysqli_query ($conn,$sql4);
    $row4= mysqli_fetch_array($result4);
    $uid1=$row4['uid'];

    
  
$sql2="SELECT array FROM insmark WHERE regno = '$pro' AND uid = '$uid1'";
$result2=mysqli_query ($conn,$sql2);
$row2= mysqli_fetch_array($result2);
 $uns=unserialize($row2['array']);
 $subc=$uns[$sub];
 
 
 
 


 if ($subc == 'U' || $subc == 'u') {
     $c = 0;
     $arrear = $arrear+1;
 }
 if ($subc == 'S' || $subc == 's') {
     $c=10;
 }
 if ($subc == 'A' || $subc == 'a') {
     $c=9;
 }
 if ($subc == 'B' || $subc == 'b') {
     $c=8;
 }
 if ($subc == 'C' || $subc == 'c') {
     $c=7;
 }
 if ($subc == 'D' || $subc == 'd') {
     $c=6;
 }
 if ($subc == 'E' || $subc == 'e') {
     $c=5;
 }
 if($c != 0)
 $count +=$cre;
 $m = $m + ($cre * $c);


    echo "<tr class='table_row'>";
    echo "<td>$sub</td>";
     echo "<td>$subn</td>";
     echo "<td>$cre</td>";
     echo "<td>$subc</td>";
     // echo "<td>$gpa1</td>";
     echo "</tr>";
    
}
    $gpa = $m/$count;
    $gpa = number_format((float)$gpa, 2, '.', '');
    echo "<tr class='table_row'>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td>$gpa</td>";
     
     echo "</tr>";
    echo "<tr class='table_row'>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
     
     echo "</tr>";
    echo "<tr class='table_row'>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td>Number of arrears</td>";
    echo "<td>$arrear</td>";
     
     echo "</tr>";

echo "</table>";

echo "</table>";
       

?>

                   
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
    <script type="text/javascript">
       function semss(){
            var sems = document.getElementById("depsem");
            var years = document.getElementById("depyear");
            var ne = sems.options[sems.selectedIndex].value;
            var na = years.options[years.selectedIndex].value;
            
            $.ajax({
                type:"POST",
                data:{year77:na , sem77:ne},
                url:"Acedemic.php",
                success: function(data){
                    console.log(data);
            
                }

            });


        }
    </script>
</body>

</html>
<?php
}
?>