<!DOCTYPE html>
<html>
<head>

  <title>verify</title>
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="javascript" type="text/css" href="Validator.js">
   <script src="validation2.js"></script>
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 </head>
<body>
  <form class="well form-horizontal" name="Form2" action="chgpwd.php" method="post" onsubmit="return Validator2();">

     <div class="form-group">
          <label class="col-md-4 control-label">Password</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="password03" placeholder="Password" class="form-control"  type="password">
            </div><span id="pass11"></span>
          </div>
        </div>

         <div class="form-group">
          <label class="col-md-4 control-label">Confirm Password</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="password02" placeholder="Confirm Password" class="form-control"  type="password">
            </div><span id="pass12"></span>
          </div>
        </div>


</form>
</body>
</html>