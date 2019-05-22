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

                   <li class="link active">
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
      

      <form id="cont" method="post" action="source.php">
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
    
           <textarea   rows="8" class="form-control gh" id="Textarea"  name="Textarea" onkeyup="addbu()" onblur="rembu()" placeholder="Enter Message" data-mode="multiple" data-provide="typeahead" autocomplete="off"></textarea>
  </div>

   
  <button type="submit" style="margin-top: 50px;" class="btn btn-primary">Send SMS</button>
  </form>       
  </td>

      <td id= "right_panel" style="width: 65%;height: 100%;">

      <p id = rcont style="font-weight: bold;">Templates</p> 
         
            <button class="btn btn-primary" name="sbut" style="display: none;margin-left:300px"  onclick="addtodb()"  id="ssbut">Save Draft</button>
            <div id="insdiv" style="display: block">
          <table class="table" id="instab">
                    
   <tbody>
  
          <?php 
                $myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
                $query = $myPDO->query("SELECT * FROM msgboard WHERE pageid='2';");
                $query->execute();
                while($row = $query->fetch(PDO::FETCH_ASSOC)){                                      
          ?>
       <tr >
           <td style="cursor:pointer;padding:20px;width:90%" onclick="sentmsg(this)">
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
        <script src="js/bootstrap-typeahead.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
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
                     } else if (len >0)
                           {
                         document.getElementById('ssbut').style.display = 'block';
                         document.getElementById('insdiv').style.display = 'none';
                     }
                }
                 function addtodb() {
                     var msgnow = document.getElementById("Textarea").value;
                      $.ajax({
            type: "POST",
            data: {id: "2",
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
          $(document).ready(function(){
                console.log("hi");
                !function(source) {
    function extractor(query) {
        var result = /([^,\s:]+)$/.exec(query);
        if(result && result[1])
            return result[1].trim();
        return '';
    }
    
    $('#Textarea').typeahead({
        source: source,
        updater: function(item) {
            return this.$element.val().replace(/[^,\s]*$/,'')+item+',';
        },
        matcher: function (item) {
          var tquery = extractor(this.query);
          if(!tquery) return false;
          return ~item.toLowerCase().indexOf(tquery.toLowerCase())
        },
        highlighter: function (item) {
          var query = extractor(this.query).replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, '\\$&')
          return item.replace(new RegExp('(' + query + ')', 'ig'), function ($1, match) {
            return '<strong>' + match + '</strong>'
          })
        }
    });
    
}
(["@CS6301","@CS6302","@CS6303","@CS6304","@GE6351","@MA6351","@CS6311","@CS6312","@MA6453","@CS6551","@CS6401","@CS6402","@CS6403","@EC6504","@CS6511","@CS6512","@CS6513","@MA6566","@CS6501","@CS6502","@CS6503","@CS6504","@CS6511","@CS6512","@CS6513","@CS6601","@IT6601","@CS6660","@IT6502","@CS6659","@CS6611","@CS6612","@CS6611","@CS6001","@GE6757","@IT6702","@CS6002","@IT6004","@CS6701","@CS6702","@CS6703","@CS6704","@CS6711","@CS6712","@CS6003","@CS6004","@CS6005","@BM6005","@IT6801","@IT6005","@EC6703","@CS6006","@CS6007","@IT6006","@CS6801","@CS6811","@CS6008","@CS6009","@IT6011","@CS6010","@MG6088","@GE6075","@CS6011","@CS6012","@GPA","@ARREARS","@NAME","@CS6411","@CS6412","@CS6413","@GE6674","@PH6251","@CY6251","@CS6201","@GE6262","@CS6202","@HS6251","@MA6251","@CS6211","@CS6212","@CS6501IAT1","@CS6502IAT1","@CS6503IAT1","@CS6504IAT1","@MA6566IAT1","@CS6501IAT2","@CS6502IAT2","@CS6503IAT2","@CS6504IAT2","@MA6566IAT2","@CS6501IAT3","@CS6502IAT3","@CS6503IAT3","@CS6504IAT3","@MA6566IAT3","@CS6301IAT1","@CS6302IAT1","@CS6303IAT1","@CS6304IAT1","@GE6351IAT1","@MA6351IAT1","@CS6301IAT2","@CS6302IAT2","@CS6303IAT2","@CS6304IAT2","@GE6351IAT2","@MA6351IAT2","@CS6301IAT3","@CS6302IAT3","@CS6303IAT3","@CS6304IAT3","@GE6351IAT3","@MA6351IAT3","@CS6701IAT1","@CS6702IAT1","@CS6703IAT1","@CS6704IAT1","@CS6003IAT1","@CS6004IAT1","@CS6005IAT1","@IT6801IAT1","@IT6005IAT1","@CS6007IAT1","@IT6006IAT1","@CS6701IAT2","@CS6702IAT2","@CS6703IAT2","@CS6704IAT2","@CS6003IAT2","@CS6004IAT2","@CS6005IAT2","@IT6801IAT2","@IT6005IAT2","@CS6007IAT2","@IT6006IAT2","@CS6701IAT3","@CS6702IAT3","@CS6703IAT3","@CS6704IAT3","@CS6003IAT3","@CS6004IAT3","@CS6005IAT3","@IT6801IAT3","@IT6005IAT3","@CS6007IAT3","@IT6006IAT3"
]);
                            });
      </script>
  </body>
</html>
<?php
}
    ?>