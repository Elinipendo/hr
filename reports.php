<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
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
                    <!--/.span3-->
                                     <div class="span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                        REPORTS AVAILABLE</h3>
                                </div>
          
                                <div class="module-body table">
                                    <table class="table table-message">
                                        <tbody>
                                            <tr class="heading">
                                                <td class="cell-check">
                                                    
                                                </td>
                                                <td class="cell-icon">
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Name of Report
                                                </td>
                                                <td class="cell-title">
                                                    File type(excle,pdf,doc,or CSV)
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                </td>
                                                <td class="cell-time align-right">
                                                  
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                   
                                                </td>
                                                <td class="cell-icon">
                                                   
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Employees Report
                                                </td>
                                                <td class="cell-title">
                                                    CSV
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                   <a href="export.php" style="text-decoration: none;"><i class="icon-cloud-download" style="width: 70%; height:40%"></i></a> 
                                                </td>
                                                <td class="cell-time align-right">
                                                 
                                                </td>
                                            </tr>
                                            <tr class="unread starred">
                                                <td class="cell-check">
                                                   
                                                </td>
                                                <td class="cell-icon">
                                                   
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Contract report
                                                </td>
                                                <td class="cell-title">
                                                    CSV
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                     <a href="export_contracts.php" style="text-decoration: none"><i class="icon-cloud-download" style="width: 70%; height:40%"></i></a>
                                                </td>
                                                <td class="cell-time align-right">
                                                
                                                </td>
                                            </tr>
                                         
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="module-foot">
                                </div>
                            </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->

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
