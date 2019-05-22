
<?php
session_start();
if($_SESSION['login'] != 1)
    header ('Location: index.html');
else
{
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TEST</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/commenters.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="plugin/datatables-plugins/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="plugin/datatables-responsive/dataTables.responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
          
  <body>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-admin" >
    <form class="modal-content"  action="index.php" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Fields of Form</h4>
      </div>
      <div class="modal-body">
      <div class="container-fluid" id="f1">
      <div class="row" style="padding-bottom: 10px;">
      <div class="col-md-4">
      <input class="form-control" type="text" placeholder="Enter Field" name="field[]" required >
      </div>
      <div class="col-md-4">
      <input class="form-control" type="text" placeholder="Enter placeholder" name="fieldp[]" required>
      </div>
      <div class="col-md-4 " style="margin-top: -9px">
      <select class="form-control"  name="fieldd[]" >
        <option>text</option>
        <option>number</option>
      </select>
      </div>
      </div>
      <button type="button" class="btn btn-success pull-left" id="afbtn">ADD FIELD</button>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</div>
    <div class="container-fluid display-table">
      <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
            <h1 class="hidden-sm hidden-xs">Navigation</h1>
            <ul>
              <li class="link dashboard">
                <a href="#">
                  <span class="glyphicon glyphicon-th " aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Dashboard</span>
                </a>
              </li>

                     <li class="link ">
                <a href="1year.php">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Verify Students</span>

                </a>
             </li>
              <li class="link ">
                <a href="2year.php">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">2nd Year</span>

                </a>
             
             </li>
              <li class="link active">
                <a href="3year.php">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">3rd Year</span>

                </a>
             </li>
              <li class="link ">
                <a href="4year.php">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">4th Year</span>

                </a>
             </li>
             <li class="link ">
                <a href="late.php">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Late</span>

                </a>
                    <!--ul class="collapse collapseable" id="collapse-post">
                        <li><a href="new-article.html">Create New</a></li>
                        <li><a href="articles.php">View Article</a> </li>
                      </ul-->
                    </li>
              

                    <li class="link">
                      <a href="leave.php">
                       <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                       <span class="hidden-sm hidden-xs">Leave</span>                
                     </a>
                     
                   </li>
                
                <li class="link ">
                    <a href="result_data.php">
                      <span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                      <span class="hidden-sm hidden-xs">Result Data</span>
                    </a>
                  </li>

                   <li class="link ">
                    <a href="results.php">
                      <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                      <span class="hidden-sm hidden-xs">Result</span>
                    </a>
                  </li>

                  <li class="link">
                    <a href="settings.php">
                      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                      <span class="hidden-sm hidden-xs">Message Log</span>
                    </a>
                </li>
                
                     <li class="link">
                    <a href="failedlog.php">
                      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                      <span class="hidden-sm hidden-xs">Failed Log</span>
                    </a>
                </li>
>                </ul>
              </div>
              <div class="col-md-10 col-sm-11 display-table-cell valign-top box">
                <div class="row" id="nav-header">
                  <header >
                    <div class="col-md-5">
                      <nav class="navbar-default pull-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </nav> 
    <input type="text" class="hidden-sm hidden-xs" id="header-search-field" placeholder="Search for Something">
                </div>
              <div class="col-md-7">
                <ul class="pull-right">
                  <li id="welcome" class="hidden-xs">Welcome to your Administration Area</li>
                  <li class="fixed-width ">
                    <a href="#">
                      <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                      <span class="label label-warning">3</span>
                      </a>
                    </li>
                    
                    <li class="fixed-width">
                    <a href="#">
                      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                      <span class="label label-message">3</span>
                      </a>
                    </li>
                    
                    <li>
                    <a href="logout.php" class="logout">
                      <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                      log out
                      </a>
                    </li>
                  </ul>
                </div>
              </header>
            </div>
           <div style="margin-top:50px; margin-bottom:100px">
                  <form id="myform" class="modal-content" action="leave.php" method="post" >
                      <br><div class="input-group" style="margin-left: 50px">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="lol" id="ll" class="form-control selectpicker"  onblur="dvalue();" style="width: 20%">
                    <option>Please select </option>
                    <option value="0">Leave message</option>
                    <option value="1">Late message</option>
                    <option value="2">Result message</option>
                  </select>
                </div><br>
                <div class="panel-body">
                                        <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>CHECK BOX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type="checkbox" onchange="checkAll(this)" name="chk[]" /></th>
                                                    <th>NAME</th>
                                                    <th>REGISTER_NO</th>
                                                    <th>MOBILE_NO</th>
                                                </tr>

                                            </thead>
                                            <tbody id="tbodyid">
                                                 <?php
                                                        $myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');

                                                         $query = $myPDO->query("SELECT * FROM astud WHERE year='3' AND ver='1' ORDER BY regno ASC");
                                                             $query->execute();
                                                             while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                                    ?>
                                                <tr class="odd gradeX">
                                                    <td class="left"><input class="id" type="checkbox" name="c"></td>
                                                    <td><?php echo $row['name']?></td>
                                                    <td><?php echo $row['regno']?></td>
                                                    <td class="center"><?php echo $row['pno']?></td>
                                                </tr>
                                                <?php

                                                }
                                                ?>
                                                <?php
                                                        $myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');

                                                         $query = $myPDO->query("SELECT * FROM astud WHERE year='3' AND ver='0' ORDER BY regno ASC");
                                                             $query->execute();
                                                             while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                                    ?>
                                                <tr class="odd gradeX">
                                                    <td class="left"><input class="id" type="checkbox" name="c"></td>
                                                    <td style="color:red"><?php echo $row['name']?></td>
                                                    <td style="color:red"><?php echo $row['regno']?></td>
                                                    <td class="center" style="color:red"><?php echo $row['pno']?></td>
                                                </tr>
                                                <?php

                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <!-- /.table-responsive -->
                      </div>
                  <div class="modal-footer">
                                            <input type="text" hidden="hidden" name="hv" id="hvn">
                                            <input type="text" hidden="hidden" name="msg" id="msgnew">
                                            <button id = "test" type="submit"  class="btn btn-primary"  >submit</button>
                                        </div>
                  </form>
                  
                  </div>
            <div class="row">
                <footer id="admin-footer" class="clearfix">
            <div class="pull-left"><b>Copyright </b>&copy; 2017</div>
            <div class="pull-right">Admin System</div>
            </footer>
                    </div>
            
        </div>
          
           </div>
              </div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="js/default.js"></script>
        <script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="plugin/datatables-plugins/dataTables.bootstrap.min.js"></script>
      <script arc="plugin/datatables-responsive/dataTables.responsive.js"></script>
         <script type="text/javascript">
                      $(document).ready(function(){
                      $('#dataTables-example').DataTable();
                        });
                    </script>
       <script>
            document.getElementById("test").addEventListener("click", function() {   
var table = document.getElementById("dataTables-example");
    var num = "";
for (var i = 1, row; row = table.rows[i]; i++) {
   //iterate through rows
   //rows would be accessed using the "row" variable assigned in the for loop
    var mvalue = row.querySelectorAll('td');
    var cb = mvalue[0].querySelector('input[type = "checkbox"]');
    var tof = cb.checked;
    if(tof == true )
    {
        num = num.concat(91);
        num = num.concat(mvalue[3].innerHTML);
        num = num.concat(",");
        document.getElementById("hvn").value = num;
    }

}

    });
            function msgfunc() {
    var m = document.getElementById("message-text").value;
     document.getElementById("msgnew").value = m;
    $('#myModal').modal('hide');
}
            
            
            function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }
    </script>
  </body>
</html>
<?php
}
    ?>