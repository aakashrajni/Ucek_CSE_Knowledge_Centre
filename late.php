<?php
session_start();
if($_SESSION['login'] != 1)
    header ('Location: index.html');
else
{
?>
<!DOCTYPE html>
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
    </div>s
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
              <li class="link">
                <a href="3year.php">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">3rd Year</span>

                </a>
             </li>
              <li class="link">
                <a href="4year.php">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">4th Year</span>

                </a>
             </li>
                
              <li class="link active">
                <a href="late.php">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Late</span>

                </a>
                    <!--ul class="collapse collapseable" id="collapse-post">
                        <li><a href="new-article.html">Create New</a></li>
                        <li><a href="articles.php">View Article</a> </li>
                      </ul-->
                    </li>
                    
                    <li class="link ">
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

                  <li class="link ">
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
                </ul>
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
             <div>
            <div class="row">
   <table class="table table-bordered" style="/*position: absolute; top: 0; bottom: 0; left: 0; right: 0;*/ border-style: solid;  border-color: grey; border-radius: 1;">
                    
   <tbody>
   <tr>
    <td id= "left_panel" style="width: 35%;height: 640px;">
      <p style="font-weight: bold;">MESSAGE SECTION</p>
      

      <form id="cont" method="post" action="sms.php">
      <div class="form-group " style="margin-top: 70px;">
       <input style="height: 50px;"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SENDER ID" value="UCEK-CSE">
     
      </div> 
  <div class="form-group" style="margin-top: 0px; ">
 
    <textarea style=""  rows="4" class="form-control gh" id="mobilenumber" name="mobilenumber" placeholder="Enter the Moblie Number"><?php 
 if( !empty($_SESSION['phno']))
 { 
     echo $_SESSION['phno'];
 } ?></textarea>
  </div> 
       <div class="form-group" style="margin-top: 0px;">
    
    
    <textarea style="height: 120px;"  class="form-control gh" id="Textarea"  name="Textarea" onkeyup="addbu()" onblur="rembu()"  placeholder="Enter Message"></textarea>
  </div>

   
  <button type="submit" style="margin-top: 50px;" class="btn btn-primary">Send SMS</button>
  </form>       
  </td>

      <td id= "right_panel" style="width: 65%;height: 100%;">

      <p id = rcont style="font-weight: bold;">Templates</p> 
          
            <button class="btn btn-primary" name="sbut" style="display: none; margin-left:300px"  onclick="addtodb()"  id="ssbut">Save Draft</button>
          <div id="insdiv" style="display: block">
          <table class="table "  id="instab">
                    
   <tbody>
  
          <?php 
                $myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
                $query = $myPDO->query("SELECT * FROM msgboard WHERE pageid='1';");
                $query->execute();
                while($row = $query->fetch(PDO::FETCH_ASSOC)){                                      
          ?>
       <tr >
           <td style="cursor:pointer;padding:20px;width:90%"onclick="sentmsg(this)">
            <?php echo $row['msg']?>
           </td>
           <td style="width:10%" onclick="delbut(this)">
           <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </button>
           </td>
       </tr> 
       <?php
                }
              ?>
  </tbody>
              </table></div>
                
       </td>
      </tr> 
  </tbody>
</table>

                    </div>

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
        <script type="text/javascript">
        $(document).ready(function(){
          $('#afbtn').click(function(){
            $( "#afbtn" ).before("<div class='row' style='padding-bottom: 10px;'><div class='col-md-4'><input class='form-control' type='text' placeholder='Enter Field' name='field[]' required ></div><div class='col-md-4'><input class='form-control' type='text' placeholder='Enter placeholder' name='fieldp[]' required></div><div class='col-md-4' style='margin-top: -9px'><select class='form-control'  name='fieldd[]' ><option>text</option><option>number</option></select></div></div>");
          });
        });
        </script>
        <script>
                function rembu() {
                    var len = document.getElementById("Textarea").value.length;
            
                    if(len < 1)
                        document.getElementById('ssbut').style.display = 'none';
                }
                 function addbu() {
                    var len = document.getElementById("Textarea").value.length;
            
                    if(len < 1)
                        {
                         document.getElementById('ssbut').style.display = 'none';
                         document.getElementById('insdiv').style.display = 'block';
                     }else if (len >0)
                        {
                         document.getElementById('ssbut').style.display = 'block';
                         document.getElementById('insdiv').style.display = 'none';
                     }
                }
            function addtodb() {
                     var msgnow = document.getElementById("Textarea").value;
                      $.ajax({
            type: "POST",
            data: {id: "1",
                data:msgnow},
            url: "adddb.php",
            success: function(data){
                document.getElementById('ssbut').style.display = 'none';
                document.getElementById('insdiv').style.display = 'block';
                $( "#insdiv" ).load(window.location.href + " #insdiv" );
            }
                      });
                     
                 }
             function sentmsg(clicked_id)
          {
              document.getElementById('Textarea').value = clicked_id.innerText;
          }
            function delbut(clicked)
            {
                var delnow = $(clicked).closest('tr').children('td:first').text().trim();
                var pass = delnow;
             var xhr = $.ajax({
            type: "POST",
            data: {id: pass},
            url: "deldb.php",
            success: function(data){
                $( "#insdiv" ).load(window.location.href + " #insdiv" );
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