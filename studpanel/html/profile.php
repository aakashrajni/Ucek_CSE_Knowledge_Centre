<?php
$conn =mysqli_connect("localhost","dihubin_root","Dihroot@1","dihubin_dih");
session_start();
if($_SESSION['log'] != 2)
    header ('Location: ../../index.html');
else
{
$username1= $_SESSION['username'];
$pro = $_SESSION['register_no'];
$email11 = $username1;
$sql="SELECT * FROM astud WHERE regno='$pro'";
$result=mysqli_query ($conn,$sql);
$row= mysqli_fetch_array($result);
$_SESSION['year']= $row['year'];
$_SESSION['sem']=  $row['sem'];

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
 
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/dist/css/bootstrap-theme.min">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="st.css">
    
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script type="text/javascript" src="Validator.js"></script>
    <script>
     $(document).ready(function() {
       $("datepicker").datepicker();
   });
</script>

<!-- color CSS -->
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
                        <h4 class="page-title">Profile page</h4> </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                            <ol class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Profile page</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- .row -->
                    <div id="login">
                     <div class="container">
                        <div class="row">



                            <div class="col-md-9 ">

                                <div class="panel panel-default">
                                    <div class="panel-heading">  <h4 >User Profile</h4></div>
                                    <div class="panel-body">

                                        <div class="box box-info">

                                            <div class="box-body">
                                                <div class="col-sm-6">
                                                    <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 

                                                        <input id="profile-image-upload" class="hidden" type="file">
                                                        <div style="color:#999;">click here to change profile image</div>
                                                        <!--Upload Image Js And Css-->
                                                    </div>
                                                    <br>

                                                    <!-- /input-group -->
                                                </div>
                                                <div class="col-sm-6">
                                                    <h4 style="color:#00b1b1;"><?php echo $row ['name'];?></h4></span>
                                                    <span><p>Student</p></span>            
                                                </div>
                                                <div class="clearfix"></div>
                                                <hr style="margin:10px 0 10px 0;">


                                                <div class="col-sm-5 col-xs-6 tital " >Register no</div><div class="col-sm-7 col-xs-6 "><?php echo $row ['regno'];?><span id="Register_no"></span></div>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Name</div><div class="col-sm-7"><?php echo $row ['name'];?><span id="name"></span></div>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Dob</div><div class="col-sm-7"><?php echo $row ['dob'];?> <span id="Dob"></span></div>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Sex</div><div class="col-sm-7"><?php echo $row ['sex'];?><span id="Sex"></span></div>

                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Age</div><div class="col-sm-7"><?php echo $row ['age'];?><span id="age"></span></div>

                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Blood Group</div><div class="col-sm-7"><?php echo $row ['bg'];?><span id="Blood_group"></span></div>

                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Year Of Admission</div><div class="col-sm-7"><?php echo $row ['yoa'];?><span id="year of Admission"></span></div>

                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " > Year</div><div class="col-sm-7"><?php echo $row ['year'];?><span id="year"></span></div>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " > Sem</div><div class="col-sm-7"><?php echo $row ['sem'];?><span id="sem"></span></div>

                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " > Hostler / Day Scholar</div><div class="col-sm-7"><?php echo $row ['hod'];?><span id="hosteler/dayscholar"></span></div>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " > Regular / Lateral Entry</div><div class="col-sm-7"><?php echo $row ['rol'];?><span id="Regular/Lateral"></span></div>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Father's Name</div><div class="col-sm-7"><?php echo $row ['faname'];?><span id="Father name"></span></div>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " > Parent's / Guardian occupation</div><?php echo $row ['occup'];?><div class="col-sm-7"><span id="Parents/Guardian"></span></div>




                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Address For communiation</div><div class="col-sm-7"><?php echo $row ['addres'];?><span id="address"></span></div>


                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Mobile no</div><div class="col-sm-7"><?php echo $row ['mob'];?><span id="Mobile no"></span></div>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Permanent_Address </div><div class="col-sm-7"><?php echo $row ['paddres'];?><span id="Permanent_address"></span></div>



                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >E-Mail</div><div class="col-sm-7"><?php echo $row ['email'];?><span id="Email"></span></div>

                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Parent's / Guardian Moblie No</div><div class="col-sm-7"><?php echo $row ['pno'];?><span id="Parents/Guardian"></span></div>

                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Achievements</div><div class="col-sm-7"> <?php echo $row ['acaach'];?><span id="Acedemic Achievements"></span></div>
                                                <div class="clearfix"></div>
                                                <div class="bot-border"></div>

                                                <div class="col-sm-5 col-xs-6 tital " >Non Academic Achievements</div><div class="col-sm-7"> <?php echo $row ['nonacaach'];?><span id=" Non Acedemic Achievements"></span></div>
                                                
                                                <a href="#" id="btn-login" href="#" class="btn btn-success" onClick="$('#login').hide(); $('#Update').show()">Update</a>
                                            </div> 

                                <!-- /.box-body 
                            </div>
                            <!-- /.box -->

                        </div>


                    </div> 
                </div>
            </div>  


        </div>
        
        <!-- /#page-wrapper -->
    </div>
</div>
</div>


<div id="Update" style="display:none;">
  <div class="container1"  margin-top:50px>

    <form class="well form-horizontal" name="Form" method="POST" action="update.php"   onsubmit="return Validator();">
      <fieldset>

        <!-- Form Name -->
        <legend>Students Detials</legend>

        <!--Reg NO-->

        <div class="form-group">
          <label class="col-md-4 control-label">Register No</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="reg_no1" name="Register_no" placeholder="Register no" readonly="readonly" class="form-control" value="<?php echo $row ['regno'];?>"  type="text">  

          </div><span id="Register_no1"></span>
      </div>
  </div>
  
  <!-- Text input-->

  <div class="form-group">
      <label class="col-md-4 control-label">Name</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="name1"   name="name" placeholder="First Name" class="form-control"  value="<?php echo $row ['name'];?>" type="text">
      </div><span id="name13"></span>
  </div>
</div>

  <!-- <div class="form-group">
      <label class="col-md-4 control-label">Password</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="password" placeholder="Password" class="form-control" type="password">
      </div><span id="name1"></span>
  </div>
</div> -->
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Dob</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input id="dob1" name="dob" placeholder="Date of brith" class="form-control" id="datepicker" value="<?php echo $row ['dob'];?>" type="date" >
  </div><span id="dob13"></span>
</div>
</div>

<!--SEX-->
<div class="form-group">
  <label class="col-md-4 control-label" >Sex</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">   
      <!--span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span-->
      <label class="radio-inline">
        <input type="radio" value="male" name="sex" value="<?php echo $row ['sex'];?>" checked>Male</label>
        <label class="radio-inline">
          <input id="sex1"  type="radio" value="female" value="<?php echo $row ['sex'];?>" name="sex">Female</label>
      </div><span id="sex13"></span>
  </div>
</div>

<!--Age-->

<div class="form-group">
  <label class="col-md-4 control-label">Age</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  id="age1" name="age2" placeholder="Age" class="form-control" value="<?php echo $row ['age'];?>" type="text">
  </div><span id="age13"></span>
</div>
</div>

<!--Blood grp-->

<div class="form-group">
  <label class="col-md-4 control-label">Blood Group</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
      <select  id="bg1" name="blood_group" class="form-control selectpicker">
        <option  > Select </option>
        <option value="A+" <?php if($row['bg']=='A+')echo 'Selected="Selected"'; ?> >A+</option>
        <option value="A-" <?php if($row['bg']=='A-')echo 'Selected="Selected"'; ?>>A-</option>
        <option value="O+" <?php if($row['bg']=='O+')echo 'Selected="Selected"'; ?>>O+</option>
        <option value="O-" <?php if($row['bg']=='O-')echo 'Selected="Selected"'; ?>>O-</option>
        <option value="AB+"<?php if($row['bg']=='AB+')echo'Selected="Selected"'; ?>>AB+</option>
        <option value="AB-"<?php if($row['bg']=='AB-')echo 'Selected="Selected"'; ?>>AB-</option>
        <option value="B+" <?php if($row['bg']=='B+')echo 'Selected="Selected"'; ?>>B+</option>
        <option value="B-" <?php if($row['bg']=='B-')echo 'Selected="Selected"'; ?>>B-</option>
    </select>
</div><span id="blood_group1"></span>
</div>
</div>


<!--Year of admission-->

<div class="form-group">
  <label class="col-md-4 control-label">Year Of Admission</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
      <input id="yoa1"  name="year_of_admission" placeholder="Year Of Admission" class="form-control" value="<?php echo $row ['yoa'];?>" disabled="disabled" type="text">
  </div><span id="year_of_admission1"></span>
</div>
</div>

<!--Year-->
<div class="form-group">
  <label class="col-md-4 control-label">Year</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
      <select id="yearss"  name="year" 
            readonly="readonly" class="form-control selectpicker">
          <option value=" " > Select</option>
          
          <option value="2"<?php if($row['year']=='2')echo 'Selected="Selected"'; ?>>2 year</option>
          <option value="3"<?php if($row['year']=='3')echo 'Selected="Selected"'; ?>>3 year</option>
          <option value="4"<?php if($row['year']=='4')echo 'Selected="Selected"'; ?>>4 year</option>
      </select>
  </div><span id="year13"></span>
</div>
</div>


<!--sem-->

<div class="form-group">
  <label class="col-md-4 control-label">Sem</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
      <select  id="sem1" name="sem" readonly="readonly" class="form-control selectpicker" >
        <option  value=" ">Select</option>
        
        <option value="3"<?php if($row['sem']=='3')echo 'Selected="Selected"'; ?> >3 semester
        </option>
        <option value="4"<?php if($row['sem']=='4')echo 'Selected="Selected"'; ?> >4 semester
        </option>
        <option value="5"<?php if($row['sem']=='5')echo 'Selected="Selected"'; ?> >5 semester
        </option>
        <option value="6"<?php if($row['sem']=='6')echo 'Selected="Selected"'; ?> >6 semester
        </option>
        <option value="7"<?php if($row['sem']=='7')echo 'Selected="Selected"'; ?> >7 semester
        </option>
        <option value="8"<?php if($row['sem']=='8')echo 'Selected="Selected"'; ?> >8 semester
        </option>
    </select>
</div><span id="sem13"></span>
</div>
</div>


<!--day scholar/hostel-->

<div class="form-group">
  <label class="col-md-4 control-label">Hostler / Day Scholar</label>
  <div class="col-md-4 selectContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
      <select  id="ho_day1"  name="hos" class="form-control selectpicker">
        <optionvalue=""> Select </option>
        <option value="Hostler" <?php if($row['hod']=='Hostler')echo 'Selected="Selected"'; ?> >Hostler
        </option>
        <option value="Day Scholar" <?php if($row['hod']=='Day Scholar')echo 'Selected="Selected"'; ?>>Day Scholar</option>
    </select>
</div><span id="hos1"></span>
</div>
</div>

<!--Regular/ lateral-->

<div class="form-group">
  <label class="col-md-4 control-label">Regular / Lateral Entry</label>
  <div class="col-md-4 selectContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
      <select  id="reg_la1" name="rol" class="form-control selectpicker"  >
        <option value=" " >Select </option>
        <option value="Regular" <?php if($row['rol']=='Regular')echo 'Selected="Selected"'; ?>>Regular</option>
        <option value="Lateral Entry" <?php if($row['rol']=='Lateral Entry')echo 'Selected="Selected"'; ?>>Lateral Entry</option>
          <option value="Transfer" <?php if($row['rol']=='Transfer')echo 'Selected="Selected"'; ?>>Transfer</option>
          
    </select>
</div><span id="rol1"></span>
</div>
</div>

<!--father-->

<div class="form-group">
  <label class="col-md-4 control-label">Father's Name</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      <input id="fathername1"  name="fathername" placeholder="Father's Name" class="form-control" value="<?php echo $row ['faname'];?>" type="text">
  </div><span id="fathername13"></span>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Parent's \ Guardian occupation</label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      <input   id="pgo1" name="pgo" placeholder="Parent's \ Guardian occupation" class="form-control" value="<?php echo $row ['occup'];?>" type="text">
  </div><span id="pgo13"></span>
</div>
</div>


<!--addresss-->
<div class="form-group">
    <label class="col-md-4 control-label">Address For communiation</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input id="add1"  name="address" placeholder="Address For communiation" class="form-control"  value="<?php echo $row ['addres'];?>" type="textarea">
    </div><span id="address1"></span>
</div>
</div>

<!-- Text input-->

          <!-- <div class="form-group">
            <label class="col-md-4 control-label">Phone</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="phone" placeholder="+91" class="form-control" type="text">
              </div>
            </div>
        </div> -->

        <div class="form-group">
            <label class="col-md-4 control-label">Student Moblie No</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="moblie_no" id="mob1" placeholder="+91" class="form-control" value="<?php echo $row ['mob'];?>" type="text">
            </div><span id="moblie_no1"></span>
        </div>
    </div>

    <!-- p_ addresss-->
    <div class="form-group">
        <label class="col-md-4 control-label">Permanent_Address</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input  name="p_address" id="p_add1" placeholder="Permanent Address " class="form-control"  value="<?php echo $row ['paddres'];?>" type="textarea">
        </div><span id="p_address1"></span>
    </div>
</div>




<!-- Text input-->



<div class="form-group">
    <label class="col-md-4 control-label">E-Mail</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email" id="email1" placeholder="E-Mail Address" class="form-control" value="<?php echo $row ['email'];?>" type="text">
    </div><span id="email13"></span>
</div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Parent's / Guardian Moblie No</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        <input   name="parent_no" id="par_no1" placeholder="+91" class="form-control" readonly="readonly" value="<?php echo $row ['pno'];?>"type="text">
    </div><span id="parent_no1"></span>
</div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Academic Achievements</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
        <input name="academic_achievements"  id="academic_achievements1" placeholder="Academic Achievements"  class="form-control" value="<?php echo $row ['acaach'];?>"t type="text">
    </div><span id="academic_achievements13"></span>
</div>
</div>


<div class="form-group">
    <label class="col-md-4 control-label">Non Academic Achievements</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
        <input name="Non_Academic_Achievements"  id="Non_Academic_Achievements1" placeholder="Non Academic Achievements" class="form-control" value="<?php echo $row ['nonacaach'];?>"t type="text">
    </div><span id="Non_Academic_Achievements13"></span>
</div>
</div>


<!-- Success message -->
<!--div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon oglyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div-->


<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
        <button type="submit" name="submit"  onclick="
        updatedb();" class="btn btn-success">Submit</button>
        <!--  onclick="$('#Update').hide(); $('#login').show()" -->
    </div>
</div>

</fieldset>
</form>  
</div>
</div><!-- /.container -->
</div>



<div class="ftr">
   <footer> 2017 &copy; UNIVERSITY COLEGE OF ENGINEERING-KANCHEEPURAM </footer>
   <!-- /#wrapper -->
   <!-- /#wrapper --></div>   
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
  
   <!-- <script>
     function updatedb()
     {
        var reg = document.getElementById("reg_no1").value;
        var name =document.getElementById("name1").value;
        var age=document.getElementById("age1").value; 
        var date = document.getElementById("dob1").value;
        var gender = document.getElementById("sex1").value;
        var select = document.getElementById("bg1").value;
        var year=document.getElementById("yearss").value;
        var yearofadmin= document.getElementById("yoa1").value;
        var semester = document.getElementById("sem1").value;
        var hostel_days = document.getElementById("ho_day1").value;
        var regular_la = document.getElementById("reg_la1").value;
        var fatherna = document.getElementById("fathername1").value;
        var parentsgu= document.getElementById("pgo1").value;
        var address = document.getElementById("add1").value;
        var Mobile = document.getElementById("mob1").value;
        var parent_add = document.getElementById("p_add1").value;
        var emai= document.getElementById("email1").value;
        var par = document.getElementById("par_no1").value;
        var aca =document.getElementById("academic_achievements1").value;
        var naca= document.getElementById("Non_Academic_Achievements1").value;
        
        // console.log(reg);
 

      //   $.ajax(
      //   {
      //       type:'POST',
      //       data:{
      //         reg1:reg,
      //         name1:name,
      //         age1:age,
      //         date1:date,
      //         gen:gender,
      //         sel1:select,
      //         year1:year,
      //         years:yearofadmin,
      //         sems:semester,
      //         hos:hostel_daysc,
      //         regular:regular_la,
      //         father_n:fatherna,
      //         pare:parentsgu,
      //         add1:address,
      //         mob1:Mobile,
      //         par_ad:parent_add,
      //         em:emai,  
      //         pa:par,
      //         aa:aca,
      //         nna:naca
      //     },

      //     url:'update.php',
      //     success:function(data)
      //     {
      //         console.log(data);
      //         // alert(reg1);
      //         $('#Update').hide(); $('#login').show();
      //     }
      // });
    }
</script>
  -->
 
</body>
</html>
<?php
}
?>
