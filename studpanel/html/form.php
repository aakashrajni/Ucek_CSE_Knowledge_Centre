<!DOCTYPE html>
<html>
<head>

  <title>form</title>
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="javascript" type="text/css" href="Validator.js">
   <script src="Validator.js"></script>
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

     <script>
     $(document).ready(function() {
       $("#datepicker").datepicker();
     });
     </script>

</head>
<body>
  <div class="container">

    <form class="well form-horizontal" name="Form" action="demo.php" method="post" onsubmit="return Validator();">
      <fieldset>

        <!-- Form Name -->
        <legend>Students Detials</legend>

        <!--Reg NO-->

        <div class="form-group">
          <label class="col-md-4 control-label">Register No</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="Register_no" placeholder="Register no" class="form-control"  type="text">

            </div><span id="Register_no1"></span>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Name</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="name" placeholder="First Name" class="form-control"  type="text">
            </div><span id="name1"></span>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Password</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="password" placeholder="Password" class="form-control"  type="password">
            </div><span id="name1"></span>
          </div>
        </div>
        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Dob</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="dob" placeholder="Date of brith" class="form-control" id="datepicker" type="date" >
            </div><span id="dob1"></span>
          </div>
        </div>

        <!--SEX-->
        <div class="form-group">
          <label class="col-md-4 control-label" >Sex</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <!--span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span-->
              <label class="radio-inline">
                <input type="radio" value="male" name="sex" checked>Male</label>
                <label class="radio-inline">
                  <input type="radio" value="female" name="sex">Female</label>
                </div><span id="sex1"></span>
              </div>
            </div>

            <!--Age-->

            <div class="form-group">
              <label class="col-md-4 control-label">Age</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  name="age" placeholder="Age" class="form-control"  type="text">
                </div><span id="age1"></span>
              </div>
            </div>

            <!--Blood grp-->

            <div class="form-group">
              <label class="col-md-4 control-label">Blood Group</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
                  <select name="blood_group" class="form-control selectpicker" >
                    <option value=" " >Please select </option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>B+</option>
                    <option>B-</option>
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
                  <input  name="year_of_admission" placeholder="Year Of Admission" class="form-control"  type="text">
                </div><span id="year_of_admission1"></span>
              </div>
            </div>

            <!--Year-->
            <div class="form-group">
              <label class="col-md-4 control-label">Year</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                  <select name="year" class="form-control selectpicker" >
                    <option value=" " >Please select </option>
                    <option>1 year</option>
                    <option>2 year</option>
                    <option>3 year</option>
                    <option>4 year</option>
                  </select>
                </div><span id="year1"></span>
              </div>
            </div>


            <!--sem-->

            <div class="form-group">
              <label class="col-md-4 control-label">Sem</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                  <select name="sem" class="form-control selectpicker" >
                    <option value=" " >Please select </option>
                    <option>1 semester</option>
                    <option>2 semester</option>
                    <option>3 semester</option>
                    <option>4 semester</option>
                    <option>5 semester</option>
                    <option>6 semester</option>
                    <option>7 semester</option>
                    <option>8 semester</option>
                  </select>
                </div><span id="sem1"></span>
              </div>
            </div>


            <!--day scholar/hostel-->

            <div class="form-group">
              <label class="col-md-4 control-label">Hostler / Day Scholar</label>
              <div class="col-md-4 selectContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="hos" class="form-control selectpicker" >
                    <option value=" " >Please select </option>
                    <option>Hostler</option>
                    <option>Day Scholar</option>
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
                  <select name="rol" class="form-control selectpicker" >
                    <option value=" " >Please select </option>
                    <option>Regular</option>
                    <option>Lateral Entry</option>
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
                  <input  name="fathername" placeholder="Father's Name" class="form-control"  type="text">
                </div><span id="fathername1"></span>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-4 control-label">Parent's \ Guardian occupation</label>
              <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <input  name="pgo" placeholder="Parent's \ Guardian occupation" class="form-control"  type="text">
                </div><span id="pgo1"></span>
              </div>
            </div>


            <!--addresss-->
             <div class="form-group">
            <label class="col-md-4 control-label">Address For communiation</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input  name="address" placeholder="Address For communiation" class="form-control"  type="text">
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
            <label class="col-md-4 control-label">Moblie No</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="moblie_no" placeholder="+91" class="form-control" type="text">
              </div><span id="moblie_no1"></span>
            </div>
          </div>

<!-- p_ addresss-->
             <div class="form-group">
            <label class="col-md-4 control-label">Permanent_Address</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input  name="p_address" placeholder="Permanent Address " class="form-control"  type="textarea">
              </div><span id="p_address1"></span>
            </div>
          </div>




          <!-- Text input-->



          <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
              </div><span id="email1"></span>
            </div>
          </div>

<div class="form-group">
            <label class="col-md-4 control-label">Parent's / Guardian Moblie No</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="parent_no" placeholder="+91" class="form-control" type="text">
              </div><span id="parent_no1"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Academic Achievements</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
                <input name="academic_achievements" placeholder="Academic Achievements" class="form-control" type="text">
              </div><span id="academic_achievements1"></span>
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label">Non Academic Achievements</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-th-list"></i></span>
                <input name="Non_Academic_Achievements" placeholder="Non Academic Achievements" class="form-control" type="text">
              </div><span id="Non_Academic_Achievements1"></span>
            </div>
          </div>


          <!-- Success message -->
          <!--div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div-->


          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
  </div><!-- /.container -->

</body>
</html>
