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
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UCEK</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="plugin/datatables-plugins/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="plugin/datatables-responsive/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="css/commenters.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">CSE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">1st Year</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">2nd Year</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">3rd Year</a>
                    </li>
                    <li>
                        <a  href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1> 1st Year</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 >2nd Year</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <form id="myform" class="modal-content" action="leave.php" method="post" >
                      <br><div class="input-group" style="margin-left: 50px">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="lol" id="ll" class="form-control selectpicker"  onblur="dvalue();" style="width: 20%">
                    <option>Please select </option>
                    <option value="0">Leave message</option>
                    <option value="1">Late message</option>
                  </select>
                </div><br>
                <div class="panel-body">
                                        <table width="80%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                                        $myPDO = new PDO('mysql:host=localhost;dbname=sms', 'root', '');

                                                         $query = $myPDO->query("SELECT * FROM stud ORDER BY regno ASC");
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
            </div>
        </div>
        
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                    <script src="js/default.js"></script>
                    <script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
                    <script src="plugin/datatables-plugins/dataTables.bootstrap.min.js"></script>
                    <script arc="plugin/datatables-responsive/dataTables.responsive.js"></script>
                    <script src="plugin/editable-table-master/mindmup-editabletable.js"></script>
                    <script type="text/javascript">
                      $(document).ready(function(){
                      $('#dataTables-example').DataTable();
                        });
                    </script>
                    <script type="text/javascript">
                      $('#dataTables-example').editableTableWidget();
                    </script>
                    <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
               <script>
            $('#drbtn').click(function(){
               window.location.assign('commenters.php?delete=true');//there are many ways to do this
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