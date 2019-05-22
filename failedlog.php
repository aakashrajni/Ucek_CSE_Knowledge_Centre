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

                     <li class="link">
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
                <li class="link active">
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
                  
                  <?php
                    if(isset($_SESSION['alert']))
                    if($_SESSION['alert'] == 1)
                    {
                    $_SESSION['alert'] = 0;
                  echo '<div class="alert alert-success" role="alert">Well done! You successfully sent messages.</div>';
                    }else if($_SESSION['alert'] == 9)
                    {
                    echo '<div class="alert alert-danger" role="alert">Oh snap! Change a few things up and try sending again.</div>';
                    }
                  ?>
                  
                  <div style="background-color:white;width:100%;margin-top:50px;margin-bottom:100px" id="rload">
                  <table class="table" width="100%">
                    <thead><!-- universal table heading -->
                        <tr>
                            <th hidden="hidden">Request Id</th>
                            <th style="text-align:center" width="20%">Sent</th>
                            <th style="text-align:center" width="20%">Receiver</th>
                            <th style="text-align:center" width="20%">Name</th>
                            <th style="text-align:center" width="10%">Year</th>
                            <th style="text-align:center" width="20%">Status</th>
                            <th style="text-align:center" width="10%">resend</th>
                        </tr>
                    </thead>
                    <tbody id="delivery_body">
                        <?php
                                                        $myPDO = new PDO('mysql:host=localhost;dbname=uceksmsf_aakash', 'uceksmsf_admin', 'Ucektest@1');
                                                        $com = date("Y-m-d");
                                                        $ncom = strtotime('-7 day' , strtotime($com));
                                                        $ncom = date('Y-m-j' , $ncom );
                                                         $query = $myPDO->query("SELECT DISTINCT request_id,receiver,date,description FROM delrep ORDER BY date DESC");
                                                             $query->execute();
                                                             while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                                                 $oval=substr($row['date'],0,-9);
                                                                 if($oval < $ncom)
                                                                     continue;
                                                                 if($row['description'] != "DELIVERED")
                                                                 {
                                                                     $nqu = $myPDO->query("SELECT COUNT(*) AS total FROM delrep WHERE request_id = '".$row['request_id']."' AND receiver = '".$row['receiver']."' AND description = 'DELIVERED';");
                                                                     $nqu->execute();
                                                                     $nrow = $nqu->fetch(PDO::FETCH_ASSOC);
                                                                     if($nrow['total'] == '1')
                                                                         continue;
                                                                 
                                                                
                                                    ?>
                                <tr style="cell-padding:30">
                                    <td hidden="hidden"><?php echo $row['request_id']?></td>
                                    <td style="text-align:center"><?php echo $row['date']?></td>
                                    <td style="text-align:center"><?php echo $row['receiver']?></td>
                                    <td style="text-align:center"><?php 
                                        $num = substr($row['receiver'],2);               
                                        $qu = $myPDO->query("SELECT * FROM astud WHERE pno = $num");
                                                             $qu->execute();
                                                             $r = $qu->fetch(PDO::FETCH_ASSOC);
                                        echo $r['name']
                                        
                                        ?></td>
                                    <td style="text-align:center"><?php echo $r['year']?></td>
                                    <td style="text-align:center"><?php echo $row['description']?></td>
                                    <td style="text-align:center"><?php if($row['description']=="DELIVERED"){?><button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button><?php }else {?><button type="button" class="btn btn-default" aria-label="Left Align"  onclick="rsent(this)"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></button>
                                    </td><?php } ?>
                                                                        </tr>
                        <?php
                                                             }
}
    ?>
                    </tbody>
                </table>
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
            
            function rsent(clicked)
            {
                var delnow = $(clicked).closest('tr').children('td:first').text().trim();
                var delnum = $(clicked).closest('tr').children('td:nth-child(3)').text().trim();
                console.log(delnow,delnum);
             var xhr = $.ajax({
            type: "POST",
            data: {id: delnow,
                   num: delnum},
            url: "resent.php",
            success: function(data){
                console.log(data);
                $( "#rload" ).load(window.location.href + " #rload" );
            }
                      });
                
            }
            $(document).ready(function(){
                console.log("start");
                setInterval(function ()
                {
                $('#rload').load(window.location.href + " #rload" ).fadeIn("slow");
                    console.log("repeat");
                 }, 10000);
            });
        </script>
  </body>
</html>
<?php
}
    ?>