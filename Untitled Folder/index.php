<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="plugin/datatables-plugins/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="plugin/datatables-responsive/dataTables.responsive.css">
<link rel="stylesheet" type="text/css" href="css/commenters.css">
      <script type="text/javascript" src="js/mob.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <form class="modal-content" onsubmit="mobileno();" action="sms.php" method="post">
    <div class="panel-body">
                            <table width="80%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>CHECK BOX</th>
                                        <th>S_NO</th>
                                        <th>NAME</th>
                                        <th>REGISTER_NO</th>
                                        <th>MOBILE_NO</th>
                                    </tr>

                                </thead>
                                <tbody id="tbodyid">
                                     <?php
                                            $myPDO = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

                                             $query = $myPDO->query("SELECT * FROM test_2");
                                                 $query->execute();
                                                 while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                    <tr class="odd gradeX">
                                        <td><input class="id" type="checkbox" name="c"></td>
                                        <td><?php echo $row['S_NO']?></td>
                                        <td><?php echo $row['NAME']?></td>
                                        <td><?php echo $row['REGISTER_NO']?></td>
                                        <td class="center"><?php echo $row['MOBILE_NO']?></td>
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
                                <button type="submit" class="btn btn-primary" >submit</button>
                            </div>
      </form>


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
  </body>
</html>;
