
<?php
// Initialize the session
session_start();
 include('config.php');
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_GET['uid']) && $_GET['action']=='del')
{
$userid=$_GET['uid'];
$query=mysqli_query($link,"delete from contracts where id='$userid'");
header('location:contracts.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICAP | HR</title>
 

    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
                        <!--/.sidebar-->
                    </div>
                    
            <div class="span9">
                    <div class="content">

 
                                    
                                    
 
                         <div class="module">

                            <div class="module-head">
                       
      <div class="module-option clearfix">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                           <h3>EMPLOYEE CONTRACTS</h3>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="renew_all.php" class="btn btn-primary">RENEW ALL</a>
                                    </div>
                                </div>

                            </div>

                            <div class="module-body table">


                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Full Name</th>
                                         
                                            <th>Phone</th>
                                            <th>Region </th>
                                            <th>Contract Type</th>
                                        <th>Status</th>
                                            
                                            <th>Action</th>
                                        
                                        </tr>
                                    </thead>
                                   

<?php $query=mysqli_query($link,"select * from contracts");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                                  
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['employee']);?></td>
                                            
                                            <td> <?php echo htmlentities($row['phone']);?></td>
                                        <td><?php echo htmlentities($row['region']);?></td>
                                            <td> <?php echo htmlentities($row['contractType']);?></td>
                                            <?php 
                                                    $muda=$row['duration'];
                                                if ($muda<=12 ) {
                                                    ?>
                                                   <td> <b class="label" style="background:green"><?php echo htmlentities($row['status']);?></b></td>
                                               <?php }
                                               elseif ($muda>12) {
                                                   echo "<td>"."Expired"."</td>";
                                               }
                                                ?>


                                           
                                         
                                            
                                           
<td>
     <a href="contract_details.php?uid=<?php echo $row["id"]; ?>"><i class="icon-eye-open "></i></a><t><t>
    <t>

<a href="contracts.php?uid=<?php echo htmlentities($row['id']);?>&&action=del" title="Delete" onClick="return confirm('Do you really want to delete ?')">
<i class="icon-trash"></i></a>
<span class='glyphicon glyphicon-trash'></span> 
                                        </td><span class='glyphicon glyphicon-trash'></span>    
                                            
                                        <?php $cnt=$cnt+1; } ?>
                            
                                     <tbody>
                                </table>
                            </div>
                            
                        </div>    
                        
                        
                    </div><!--/.content-->

                </div><!--/.span9-->

            </div>
        </div><!--/.container-->
    </div><!--/.wrapper-->

      <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2019 ICAP HR </b>All rights reserved.
            </div>
        </div>

    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('.datatable-1').dataTable();
            $('.dataTables_paginate').addClass("btn-group datatable-pagination");
            $('.dataTables_paginate > a').wrapInner('<span />');
            $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
            $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
        } );
    </script>
</body>
<?php } ?>