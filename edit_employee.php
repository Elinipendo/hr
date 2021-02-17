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
    $id=$_GET['id'];
    $uni=$_POST['uni'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $nationality=$_POST['nationality'];
    $department=$_POST['department'];
    $dob=$_POST['dob'];
    $contract=$_POST['contract'];
    $region=$_POST['region'];
    $title=$_POST['title'];
$sql=mysqli_query($link,"UPDATE employees SET uni='$uni',firstname='$firstname',middlename='$middlename',lastname='$lastname',gender='$gender',email='$email',phone='$phone',nationality='$nationality',department='$department',dob='$dob',contract_type='$contract',region='$region',title='$title' where id='$id'");


$_SESSION['msg']="Employee Updated Successfully !!";

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
                                <h3>Add New Employee</h3>
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
   <?php
   
    $query=mysqli_query($link,"select * from employees where id='".$_GET['id']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
  <div class="control-group">
<label class="control-label" for="basicinput">UNI</label>
<div class="controls">
<input type="text" placeholder="Enter UNI"  name="uni" class="span4 tip" required value="<?php echo htmlentities($row['uni']);?>">
</div>
</div> 
  <div class="control-group">
<label class="control-label" for="basicinput">Title</label>
<div class="controls">
<input type="text" placeholder="Enter Title"  name="title" class="span8 tip" required value="<?php echo htmlentities($row['title']);?>">
</div>
</div>                                  
<div class="control-group">
<label class="control-label" for="basicinput">First Name</label>
<div class="controls">
<input type="text" placeholder="Enter Firt Name"  name="firstname" class="span8 tip" required value="<?php echo htmlentities($row['firstname']);?>">
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Middle Name</label>
<div class="controls">
<input type="text" placeholder="Enter Middle Name"  name="middlename" class="span8 tip" required value="<?php echo htmlentities($row['middlename']);?>">
</div>
</div>

<div class="control-group">
                                            <label class="control-label" for="basicinput">Last Name</label>
                                            <div class="controls">
                                                <input type="text" placeholder="Enter Last Name"  name="lastname" class="span8 tip" required value="<?php echo htmlentities($row['lastname']);?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Gender</label>
                                            <div class="controls">
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" id="optionsRadios1" value="<?php echo htmlentities($row['gender']);?>" checked="">
                                                    Male
                                                </label> 
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" id="optionsRadios2" value="Female">
                                                    Female
                                                </label> 
                                               
                                            </div>
                                        </div>
                                        <div class="control-group">
<label class="control-label" for="basicinput">Date of Birth</label>
<div class="controls">
<input type="date"   name="dob" class="span8 tip" required value="<?php echo htmlentities($row['dob']);?>">
</div>
</div>
                                        

<div class="control-group">
                                            <label class="control-label" for="basicinput">Email</label>
                                            <div class="controls">
                                                <input type="email" placeholder="Enter Email Address"  name="email" class="span8 tip" value="<?php echo htmlentities($row['email']);?>"required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Phone Number</label>
                                            <div class="controls">
                                                <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="Eg. 255-758-000-999"  class="span8 tip" required value="<?php echo htmlentities($row['phone']);?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nationality</label>
                                            <div class="controls">
                                                <select tabindex="1" data-placeholder="Select here.." class="span8" name="nationality">
                                                    <option value="<?php echo htmlentities($row['nationality']);?>"><?php echo htmlentities($row['nationality']);?></option>

                                                   
                                                    <option value="AFG">Afghanistan</option>
    <option value="ALA">Åland Islands</option>
    <option value="ALB">Albania</option>
    <option value="DZA">Algeria</option>
    <option value="ASM">American Samoa</option>
    <option value="AND">Andorra</option>
    <option value="AGO">Angola</option>
    <option value="AIA">Anguilla</option>
    <option value="ATA">Antarctica</option>
    <option value="ATG">Antigua and Barbuda</option>
    <option value="ARG">Argentina</option>
    <option value="ARM">Armenia</option>
    <option value="ABW">Aruba</option>
    <option value="AUS">Australia</option>
    <option value="AUT">Austria</option>
    <option value="AZE">Azerbaijan</option>
    <option value="BHS">Bahamas</option>
    <option value="BHR">Bahrain</option>
    <option value="BGD">Bangladesh</option>
    <option value="BRB">Barbados</option>
    <option value="BLR">Belarus</option>
    <option value="BEL">Belgium</option>
    <option value="BLZ">Belize</option>
    <option value="BEN">Benin</option>
    <option value="BMU">Bermuda</option>
    <option value="BTN">Bhutan</option>
    <option value="BOL">Bolivia, Plurinational State of</option>
    <option value="BES">Bonaire, Sint Eustatius and Saba</option>
    <option value="BIH">Bosnia and Herzegovina</option>
    <option value="BWA">Botswana</option>
    <option value="BVT">Bouvet Island</option>
    <option value="BRA">Brazil</option>
    <option value="IOT">British Indian Ocean Territory</option>
    <option value="BRN">Brunei Darussalam</option>
    <option value="BGR">Bulgaria</option>
    <option value="BFA">Burkina Faso</option>
    <option value="BDI">Burundi</option>
    <option value="KHM">Cambodia</option>
    <option value="CMR">Cameroon</option>
    <option value="CAN">Canada</option>
    <option value="CPV">Cape Verde</option>
    <option value="CYM">Cayman Islands</option>
    <option value="CAF">Central African Republic</option>
    <option value="TCD">Chad</option>
    <option value="CHL">Chile</option>
    <option value="CHN">China</option>
    <option value="CXR">Christmas Island</option>
    <option value="CCK">Cocos (Keeling) Islands</option>
    <option value="COL">Colombia</option>
    <option value="COM">Comoros</option>
    <option value="COG">Congo</option>
    <option value="COD">Congo, the Democratic Republic of the</option>
    <option value="COK">Cook Islands</option>
    <option value="CRI">Costa Rica</option>
    <option value="CIV">Côte d'Ivoire</option>
    <option value="HRV">Croatia</option>
    <option value="CUB">Cuba</option>
    <option value="CUW">Curaçao</option>
    <option value="CYP">Cyprus</option>
    <option value="CZE">Czech Republic</option>
    <option value="DNK">Denmark</option>
    <option value="DJI">Djibouti</option>
    <option value="DMA">Dominica</option>
    <option value="DOM">Dominican Republic</option>
    <option value="ECU">Ecuador</option>
    <option value="EGY">Egypt</option>
    <option value="SLV">El Salvador</option>
    <option value="GNQ">Equatorial Guinea</option>
    <option value="ERI">Eritrea</option>
    <option value="EST">Estonia</option>
    <option value="ETH">Ethiopia</option>
    <option value="FLK">Falkland Islands (Malvinas)</option>
    <option value="FRO">Faroe Islands</option>
    <option value="FJI">Fiji</option>
    <option value="FIN">Finland</option>
    <option value="FRA">France</option>
    <option value="GUF">French Guiana</option>
    <option value="PYF">French Polynesia</option>
    <option value="ATF">French Southern Territories</option>
    <option value="GAB">Gabon</option>
    <option value="GMB">Gambia</option>
    <option value="GEO">Georgia</option>
    <option value="DEU">Germany</option>
    <option value="GHA">Ghana</option>
    <option value="GIB">Gibraltar</option>
    <option value="GRC">Greece</option>
    <option value="GRL">Greenland</option>
    <option value="GRD">Grenada</option>
    <option value="GLP">Guadeloupe</option>
    <option value="GUM">Guam</option>
    <option value="GTM">Guatemala</option>
    <option value="GGY">Guernsey</option>
    <option value="GIN">Guinea</option>
    <option value="GNB">Guinea-Bissau</option>
    <option value="GUY">Guyana</option>
    <option value="HTI">Haiti</option>
    <option value="HMD">Heard Island and McDonald Islands</option>
    <option value="VAT">Holy See (Vatican City State)</option>
    <option value="HND">Honduras</option>
    <option value="HKG">Hong Kong</option>
    <option value="HUN">Hungary</option>
    <option value="ISL">Iceland</option>
    <option value="IND">India</option>
    <option value="IDN">Indonesia</option>
    <option value="IRN">Iran, Islamic Republic of</option>
    <option value="IRQ">Iraq</option>
    <option value="IRL">Ireland</option>
    <option value="IMN">Isle of Man</option>
    <option value="ISR">Israel</option>
    <option value="ITA">Italy</option>
    <option value="JAM">Jamaica</option>
    <option value="JPN">Japan</option>
    <option value="JEY">Jersey</option>
    <option value="JOR">Jordan</option>
    <option value="KAZ">Kazakhstan</option>
    <option value="KEN">Kenya</option>
    <option value="KIR">Kiribati</option>
    <option value="PRK">Korea, Democratic People's Republic of</option>
    <option value="KOR">Korea, Republic of</option>
    <option value="KWT">Kuwait</option>
    <option value="KGZ">Kyrgyzstan</option>
    <option value="LAO">Lao People's Democratic Republic</option>
    <option value="LVA">Latvia</option>
    <option value="LBN">Lebanon</option>
    <option value="LSO">Lesotho</option>
    <option value="LBR">Liberia</option>
    <option value="LBY">Libya</option>
    <option value="LIE">Liechtenstein</option>
    <option value="LTU">Lithuania</option>
    <option value="LUX">Luxembourg</option>
    <option value="MAC">Macao</option>
    <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
    <option value="MDG">Madagascar</option>
    <option value="MWI">Malawi</option>
    <option value="MYS">Malaysia</option>
    <option value="MDV">Maldives</option>
    <option value="MLI">Mali</option>
    <option value="MLT">Malta</option>
    <option value="MHL">Marshall Islands</option>
    <option value="MTQ">Martinique</option>
    <option value="MRT">Mauritania</option>
    <option value="MUS">Mauritius</option>
    <option value="MYT">Mayotte</option>
    <option value="MEX">Mexico</option>
    <option value="FSM">Micronesia, Federated States of</option>
    <option value="MDA">Moldova, Republic of</option>
    <option value="MCO">Monaco</option>
    <option value="MNG">Mongolia</option>
    <option value="MNE">Montenegro</option>
    <option value="MSR">Montserrat</option>
    <option value="MAR">Morocco</option>
    <option value="MOZ">Mozambique</option>
    <option value="MMR">Myanmar</option>
    <option value="NAM">Namibia</option>
    <option value="NRU">Nauru</option>
    <option value="NPL">Nepal</option>
    <option value="NLD">Netherlands</option>
    <option value="NCL">New Caledonia</option>
    <option value="NZL">New Zealand</option>
    <option value="NIC">Nicaragua</option>
    <option value="NER">Niger</option>
    <option value="NGA">Nigeria</option>
    <option value="NIU">Niue</option>
    <option value="NFK">Norfolk Island</option>
    <option value="MNP">Northern Mariana Islands</option>
    <option value="NOR">Norway</option>
    <option value="OMN">Oman</option>
    <option value="PAK">Pakistan</option>
    <option value="PLW">Palau</option>
    <option value="PSE">Palestinian Territory, Occupied</option>
    <option value="PAN">Panama</option>
    <option value="PNG">Papua New Guinea</option>
    <option value="PRY">Paraguay</option>
    <option value="PER">Peru</option>
    <option value="PHL">Philippines</option>
    <option value="PCN">Pitcairn</option>
    <option value="POL">Poland</option>
    <option value="PRT">Portugal</option>
    <option value="PRI">Puerto Rico</option>
    <option value="QAT">Qatar</option>
    <option value="REU">Réunion</option>
    <option value="ROU">Romania</option>
    <option value="RUS">Russian Federation</option>
    <option value="RWA">Rwanda</option>
    <option value="BLM">Saint Barthélemy</option>
    <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
    <option value="KNA">Saint Kitts and Nevis</option>
    <option value="LCA">Saint Lucia</option>
    <option value="MAF">Saint Martin (French part)</option>
    <option value="SPM">Saint Pierre and Miquelon</option>
    <option value="VCT">Saint Vincent and the Grenadines</option>
    <option value="WSM">Samoa</option>
    <option value="SMR">San Marino</option>
    <option value="STP">Sao Tome and Principe</option>
    <option value="SAU">Saudi Arabia</option>
    <option value="SEN">Senegal</option>
    <option value="SRB">Serbia</option>
    <option value="SYC">Seychelles</option>
    <option value="SLE">Sierra Leone</option>
    <option value="SGP">Singapore</option>
    <option value="SXM">Sint Maarten (Dutch part)</option>
    <option value="SVK">Slovakia</option>
    <option value="SVN">Slovenia</option>
    <option value="SLB">Solomon Islands</option>
    <option value="SOM">Somalia</option>
    <option value="ZAF">South Africa</option>
    <option value="SGS">South Georgia and the South Sandwich Islands</option>
    <option value="SSD">South Sudan</option>
    <option value="ESP">Spain</option>
    <option value="LKA">Sri Lanka</option>
    <option value="SDN">Sudan</option>
    <option value="SUR">Suriname</option>
    <option value="SJM">Svalbard and Jan Mayen</option>
    <option value="SWZ">Swaziland</option>
    <option value="SWE">Sweden</option>
    <option value="CHE">Switzerland</option>
    <option value="SYR">Syrian Arab Republic</option>
    <option value="TWN">Taiwan, Province of China</option>
    <option value="TJK">Tajikistan</option>
    <option value="TZA">Tanzania, United Republic of</option>
    <option value="THA">Thailand</option>
    <option value="TLS">Timor-Leste</option>
    <option value="TGO">Togo</option>
    <option value="TKL">Tokelau</option>
    <option value="TON">Tonga</option>
    <option value="TTO">Trinidad and Tobago</option>
    <option value="TUN">Tunisia</option>
    <option value="TUR">Turkey</option>
    <option value="TKM">Turkmenistan</option>
    <option value="TCA">Turks and Caicos Islands</option>
    <option value="TUV">Tuvalu</option>
    <option value="UGA">Uganda</option>
    <option value="UKR">Ukraine</option>
    <option value="ARE">United Arab Emirates</option>
    <option value="GBR">United Kingdom</option>
    <option value="USA">United States</option>
    <option value="UMI">United States Minor Outlying Islands</option>
    <option value="URY">Uruguay</option>
    <option value="UZB">Uzbekistan</option>
    <option value="VUT">Vanuatu</option>
    <option value="VEN">Venezuela, Bolivarian Republic of</option>
    <option value="VNM">Viet Nam</option>
    <option value="VGB">Virgin Islands, British</option>
    <option value="VIR">Virgin Islands, U.S.</option>
    <option value="WLF">Wallis and Futuna</option>
    <option value="ESH">Western Sahara</option>
    <option value="YEM">Yemen</option>
    <option value="ZMB">Zambia</option>
    <option value="ZWE">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>


    <div class="control-group">
                
                    <label class="control-label" for="basicinput">Department</label>
                 <div class="controls">
                     <select tabindex="1" data-placeholder="Select here.." class="span8" name="department">
                        <option value="<?php echo htmlentities($row['department']);?>"><?php echo htmlentities($row['department']);?></option>
                                               <?php $query=mysqli_query($link,"select * from department");

                                                while($row=mysqli_fetch_array($query))
                                                        {
                                                            echo "<option>" . $row['name'] . "</option>";
                                                                }?> 
                                            </select>
                                            </div>
                                        </div>
                                        <?php
                                        $query=mysqli_query($link,"select * from employees where id='".$_GET['id']."'");
$row=mysqli_fetch_array($query);
                                        ?>
                                            <div class="control-group">
                                            <label class="control-label" for="basicinput">Working Place</label>
                                            <div class="controls">
                                                <select tabindex="1" data-placeholder="Select here.." class="span8" name="region">
                                                    <option value="<?php echo htmlentities($row['region']);?>"><?php echo htmlentities($row['region']);?></option>
                                                    <option value="Dar Es Salaam">Dar Es Salaam</option>
                                                    <option value="Geita">Geita</option>
                                                    <option value="Simiyu">Simiyu</option>
                                                    <option value="Kagera">Kagera</option>
                                                    <option value="Kigoma">Kigoma</option>
                                                    <option value="Mara">Mara</option>
                                                    <option value="Mwanza">Mwanza</option>
                                                    <option value="Pwani">Pwani</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Contract Type</label>
                                            <div class="controls">
                                                <select tabindex="1" data-placeholder="Select here.." class="span8" name="contract">
                                                    <option value="<?php echo htmlentities($row['contract_type']);?>"><?php echo htmlentities($row['contract_type']);?></option>
                                                    <option value="Internship">Internship</option>
                                                    <option value="Permanent">Permanent</option>
                                                    <option value="Temporary">Temporary</option>
                                                    <option value="Special Task">Special Task</option>
                                                    <option value="Project">Project</option>
                                                   
                                                </select>
                                            </div>
                                        </div>



    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit" class="btn"><i class=" icon-save"></i>Save</button>
                                            <?php }?>
                                            </div>
                                        </div>
                                    </form>
                            </div>
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
