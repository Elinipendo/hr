<?php
// Initialize the session
session_start();
 include('config.php');
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $supervisor=$_POST['supervisor'];
    $description=$_POST['description'];
$sql=mysqli_query($link,"insert into department(name,supervisor,description) values('$name','$supervisor','$description')");
$_SESSION['msg']="Department added Successfully !!";

}

// if(isset($_GET['del']))
//           {
//                   mysqli_query($link,"delete from department where id = '".$_GET['id']."'");
//                   $_SESSION['delmsg']="department deleted !!";
//           }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ICAP | HR</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">ICAP | HR</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                       
                      
                       <!--      -->
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php 
                        include('sidebar.php');
                        ?>
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                                    <div class="module">
                            <div class="module-head">
                                <h3>Department</h3>
                            </div>
                            <div class="module-body">

                                    <?php if(isset($_POST['submit']))
{?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                                    </div>
<?php } ?>


                                    <?php if(isset($_GET['del']))
{?>
                                    <div class="alert alert-error">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Oh snap!</strong>   <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
                                    </div>
<?php } ?>

                                    <br />
<form class="form-horizontal row-fluid" name="Category" method="post" >
                                    
<div class="control-group">
<label class="control-label" for="basicinput">Department Name</label>
<div class="controls">
<input type="text" placeholder="Enter Department Name"  name="name" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Department Supervisor</label>
<div class="controls">
<input type="text" placeholder="Enter Department Name"  name="supervisor" class="span8 tip" required>
</div>
</div>

<div class="control-group">
                                            <label class="control-label" for="basicinput">Description</label>
                                            <div class="controls">
                                                <textarea class="span8" name="description" rows="5"></textarea>
                                            </div>
                                        </div>

    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit" class="btn">Create</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                       <div class="module">
                            <div class="module-head">
                                <h3>Departments</h3>
                            </div>
                           <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped   display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Department Name</th>
                                            <th>Department Supervisor</th>
                                            <th>Creation Date</th>
                                       
                                        
                                        </tr>
                                    </thead>
                                    <tbody>

<?php $query=mysqli_query($link,"select * from department");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                                  
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['supervisor']);?></td>
                                             <td><?php echo htmlentities($row['created_at']);?></td>


                                            
                                        <?php $cnt=$cnt+1; } ?>
                                        
                                </table>
                            </div>
                        </div><!--/.module-->
                       
                         
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2019 ICAP HR </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
