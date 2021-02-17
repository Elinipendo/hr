
<?php
session_start();
include('config.php');
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
else{


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
	<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
<style type="text/css">
@media print{
	#div1{
	width: 100%; 
margin: 0; 
float: none;

	}
	@page :left {
margin: 1cm;
}
@page :right {
margin: 1cm;
}
@page :top {
margin: 1cm;
}
}
</style>
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
                    </div >		<div  style="margin-left: 94%; margin-bottom: 1%;">
                    	<button type="button" class="btn btn-primary" onclick="printContent('div1')"><i class="icon-print"><span class='glyphicon glyphicon-print'></span> </i>Print</button>	
                    </div>

                    
			<div class="span9" id="div1" style="border: none !important;">
					<div class="content">

						


	<div class="module">
						
						
<?php 

	$query=mysqli_query($link,"select * from contracts  where contracts.id='".$_GET['uid']."'");
$row=mysqli_fetch_array($query);
?>


	<div class="module" style="font-family: Calibri;font-size: 18px; text-align: justify;
  text-justify: inter-word;">
							<div class="module-head">
								
								<h3 style="text-align: center; color: rgb(64,0,128); font-size: 20px">MSPH TANZANIA LLC</h3>
								<p style="text-align: center; font-size: 18px;">Plot No. G6, Jangid Plaza, Chaburuma Road Off Ali Hassan Mwinyi Road, Dar es Salaam, Tanzania. </p><p style="text-align: center;">Tel +255 22 2700717/2700725.  Fax: +255 22 270 2035 Email:  icap-tz-hr@cumc.columbia.edu</p>____________________________________________________________________________________________________________
</p>
								

							</div><h3 style="text-align: center;">RENEWAL OF CONTRACT OF EMPLOYMENT</h3><p style="text-align: left; margin-left: 4%; margin-right: 2%;font-family: Calibri;font-size: 15px; text-align: justify; text-justify: inter-word;">
							<b>THIS AGREEMENT</b> is made on <b>1st October 2019</b> between <b>MSPH Tanzania LLC</b>, (hereinafter referred to as the employee and herein called the “MSPH”) a non-governmental organisation existing under the laws of the United Republic of Tanzania and <b><?php echo htmlentities($row['employee']);?></b> of  <b><?php echo htmlentities($row['address']);?></b> (in consideration of the mutual promises herein set forth, hereby agree as follows: </p>
							
							<ol style=" margin-left: 7%; margin-right: 5%;">

								<b><li><p>Contract Period.</b> The Employee’s employment contract renewed from <b>1st October 2019</b> until <b>30th September 2020.</b>  </p></li><br>

								<li><b>Place of Recruitment and Work.</b>The Employee’s place of recruitment is <b><?php echo htmlentities($row['recruitment']);?></b> and Employee’s place of work is in <b><?php echo htmlentities($row['region']);?></b> as per job description and work plan.</li><br>

								<li><b>Job Title and Duties.</b> MSPH hereby employs the Employee to render services as <b><?php echo htmlentities($row['title']);?></b>  and to perform such other duties as may be assigned to him/her by MSPH as per the agreed job description and work plan.</li><br>

								<li><b>Performance. </b>The Employee agrees to devote his entire working time and attention to the work of MSPH, with such exceptions as shall be approved by the Country Director, and shall not engage directly or indirectly in any business other than that of MSPH during official working hours. The employee shall be reporting and answerable to <?php echo htmlentities($row['supervisor']);?></b> . While so reporting, the Employee shall be expected to work and use his own initiative on the day-to-day assignments. The Employee will also engage as appropriate with other team members from the Program to further program goals. </li><br>

								<li><b>Probation.</b> This contract is subject to <b>six months’</b> probationary period. Employee’s contract shall be confirmed after a successful completion of probationary period. Evaluation shall be done to ascertain Employee’s success.</li><br>

								<li><b>Hours of Work. </b><br>
									<ol style=" margin-left: 9%; margin-right: 7%;">
										<li><i>Ordinary Working Days </i>shall be from Monday to Friday each week. </li><br>
										<li><i>Ordinary Working Hours </i>shall be from 08.00am to 05.00pm with half an hour lunch break from Monday to Thursday. On Friday work hours shall be from 08.00am to 02.00pm with no lunch break.  The minimum total hours of work in a week shall be 40 hours excluding lunch time.</li><br>

										<li><i>Overtime;</i> overtime shall be defined as any hours that exceed 45 hours in a week and may be worked only when approved by a line manager in advance and in writing. Support staffs (Administrative Assistants, Receptionist, Drivers, Office Attendants and Cleaners) may be required to work overtime on a regular basis. Weekly working hours for support staff shall not exceed 45 hours with maximum of 5 hours’ overtime per week allowed. </li><br>

										<li><i>Attendance and Tardiness: </i>Employee shall be required to observe working hours and report to work on time, and return from lunch break promptly. When emergencies or other circumstances shall prevent the employee from reporting to work on time, the Employee shall inform the supervisor or the Human Resources Manager by 8.15am. Employee shall be required to note his/her whereabouts by signing on the whiteboard during the working hours. </li><br>

										<li><i>Unauthorised Absence:</i> Shall the Employee be absent from work and fail to contact his/her supervisor, Human Resources Manager, Country Program Director for five (5) consecutive days, the Employee shall be considered to have resigned from duty and services will be terminated.</li>

										<li><i>Time sheet/Effort Reporting:</i> Employee shall be required to submit an up-to-date and complete personal time sheet to his/her supervisor who must countersign every month. After the supervisor review and signature, the time sheet shall be submitted to Human Resources Manager. Shall the Employee be required to travel he/she shall submit the time sheet prior to departure.</li>

										<li><i>Work during Public Holidays and Rest days:</i> Shall the Employee be required to work during the public holidays or rest days; the employee shall be paid double the basic wage for each hour worked on that day.	</li>


									</ol>
								</li><br>
								<li><b>Remuneration. </b> For the Employee’s services to MSPH, the MSPH shall compensate the Employee as follows: -<br>
										<ol style=" margin-left: 9%; margin-right: 7%;">
											<li><i>Salary: </i>The employee Basic Salary is <b> <?php echo htmlentities($row['salary']);?> </b>per month. Salary shall be paid direct into the account of the Employee upon submission of payment check to the Commercial Bank on the payment day of each month.</li><br>

											<li><i>End of year Bonus (13th month Cheque): </i>The full bonus is awarded to those who have worked for MSPH Tanzania LLC for at least one year and upon availability of funds.  Only full time employees qualify for a 13th month bonus. Employees receiving the bonus should be active on payroll as of 31 December of the current year.  The bonus should be pro-rated for employees who have not completed one year of employment as of 31 December.  Pro-rating should be calculated as of the employee’s hire date and not probationary completion date. The Bonus pay is subject to availability of funds and is fully discretionary and subject to the final decision of MSPH.</li><br>

											<li><i>Salary Advance: </i> Salary advance to employees are prohibited by MSPH Policy, employee shall not receive advance payments against future salaries.</li><br>

											<li><i>Social Security Benefits: </i> ICAP Tanzania local hire employees will be registered with National Social Security Fund (NSSF) that is operational in the United Republic of Tanzania. An amount equal to 20% of the base salary will be contributed by ICAP MSPH Tanzania LLC and paid to the employee’s registered pension fund representing employer’s statutory contribution of 10% and the employee’s statutory contribution of 10%.</li><br>

											<li><i>Severance Pay </i><br>
											 Employees shall be entitled to the severance pay according to S.42 (2) of the Employment and Labour Relations Act, 2004. Severance pay is not payable if an employment is terminated on account of misconduct or voluntary resignation. </li><br>

											<li><i>Health Insurance Cover:</i> The Employee, Employee’s spouse and child(ren) who are 18 or below and maximum of 21 years if still at school shall have health insurance coverage at the expense of the Employer. The maximum number of children under this coverage is four (4).</li><br>
										</ol>
									</li>

									<li><b>Deductions. </b> MSPH shall deduct from the Employee’s basic salary statutory income tax and any other such taxes as may from time to time be required by prevailing legislation.</li><br>

									<li><b>Annual Leave.</b>
										<ol style=" margin-left: 9%; margin-right: 7%;">
											<li>The Employee shall be entitled to not more than 22 working days paid annual leave during each leave cycle.  A leave cycle for the purpose of annual leave means a period of 12 months’ consecutive employment from employment date or the completion of the last leave cycle. Leave shall be taken only after discussion and approval by the Country Director together with employee’s immediate supervisor. Employee must complete six (6) months of the service before taking annual leave. Annual leave must be requested 10 working days in advance.</li><br>

											<li>The employee shall not be entitled to accumulate more than 10 days at the end of each year and no payments shall be made in respect of any leave except on termination of employment in accordance with MSPH Local Hire Manual. The MSPH shall not permit employee to work during any period of annual leave.</li><br>

											<li>Sick leave shall be provided in accordance with the Employment and Labour Relations Act 2004, and may not be carried over to any subsequent years. Any unused sick leave is not paid out at the end of the calendar year or upon termination of contract. </li><br>

											<li>Employee will be entitled to 2 (two) personal days in addition to the annual leave. Personal days are earned at the rate of one paid leave day for each six-month period worked starting from the day of employment. Personal days must be used within 12 months of the earned date and are not accumulated and paid for upon termination of contract of employment.</li><br>

											<li>Employee shall have the right to maternity or paternity leave in accordance with the Employment and Labour Relations Act 2004.</li><br>
										</ol>
										</li><br>

										<li><b>Confidentiality. </b> The Employee agrees that he/she will not disclose to any person who is not an employee of the MSPH any information pertaining to MSPH acquired by him/her while in the employment of the MSPH without the specific written consent of MSPH.  All notes and memorandum of any confidential information concerning the work of MSPH which shall be acquired, received or made by the Employee during the course of his/her employment shall be the property of the MSPH and shall be surrendered by the Employee to the Country Director or to any other person authorised in that behalf at the termination of the Employee’s employment or at the request of the Country Director at any time during the course of the Employee’s employment.</li><br>

										<li><b>Reimbursement. </b>  Pursuant to policies adopted by the Management of MSPH, MSPH agrees to reimburse the Employee for reasonable expenses incurred. </li><br>

										<li><b>Termination of Contract</b></li><br>

										<ol style=" margin-left: 9%; margin-right: 7%;">
											<li><i>Death of Employee.</i> In the event the Employee shall die during the term of this agreement, this agreement shall terminate immediately; however, the personal representative of the Employee shall be entitled to receive the Employee’s salary through the last day of the month in which her/his death occurs.</li><br>

											<li><i>With Notice.</i> 
													<ol style=" margin-left: 9%; margin-right: 7%;" type="i">
														<li>This Agreement may be terminated at any time if either party shall have previously given the other one month’s notice in writing of their intention in that behalf and such notice shall not have been withdrawn in the meantime with the consent of either party in which event the agreement shall be terminated at the expiration of such notice, or sooner if both parties so agree. Either party may pay the other party one month's salary in lieu of notice if given less than a month notice. </li><br>

														<li>The Contract of Employment is dependent on continuing donor funding and may be terminated for operational requirements (i.e. retrenchment). The Employee agrees that in the event of such retrenchment the employee shall accept the retrenchment as genuine and fair and shall accept as fair terms of retrenchment the minimal terminal benefits required by law and shall not make any further demands. </li><br>
													</ol>
											</li>

												<li><i>Other reasons for termination </i>
													<ol style=" margin-left: 9%; margin-right: 7%;" type="a">
														<li>MSPH may terminate this agreement and discharge the employee if the employee has committed an act of misconduct including but not limited to  wilfully damaged or injured the property, business or good will of the MSPH; failed after due warning to observe any rule, policy or directive of the MSPH; or violated, after due warning, any of the covenants, terms or provisions of this agreement.</li><br>

														<li>The following actions amongst others amount to offences and may also lead to the Employee’s fair termination:
															<ol style=" margin-left: 9%; " type="i">
																<li>Being absent from the place of work for   5 (five)   days    or more without permission.</li><br>

																<li>Illegal dealings with Project/Program Sponsors or staff, such as soliciting for personal support and favours as well as other dealings which create conflict of interest.</li><br>

																<li>Theft, Fraud or misappropriation of MSPH TANZANIA LLC properties as provided by the MSPH TANZANIA LLC MSPH Tanzania LLC SoPs.</li><br>

																<li>Neglect/failure to carry out duties so as to endanger himself/herself, others or property.  Also neglect or failure to comply to any instructions relating to safety or otherwise.</li><br>

																<li>Conviction by any court of any unlawful act at the place of, or in the course of work or any place unless such employee successfully appeals against such conviction.</li><br>

																<li>Without due authority disclosing or conveying any information or any technical, trade or confidential matter to the prejudice of or against the desire of the Employer.</li><br>

																<li>Committing any act which is against the interests of MSPH TANZANIA LLC.</li><br>

																<li>Deliberately misusing MSPH TANZANIA LLC funds or property for personal gain contrary to the MSPH Tanzania LLC SoPs.</li><br>
															</ol>
															These are in addition to other misconducts provided in the Employment and Labour Relations Act, Code of Good Practice and Local Hire Manual.
														</li><br>
														<li>Should it be discovered that any information supplied by the Employee in his application for employment processes like in the applicant’s bio data form, previous payslip be incorrect or falsified, this contract may be terminated in accordance with the disciplinary procedure.</li><br>

														<li>This contract shall automatically terminate upon the expiry of the term of service stipulated in clause 1 (one) above. Neither party shall have legitimate expectation of renewal or continuation of this agreement after it expires.</li><br>

													</ol>
												</li>
										</ol>
										<li><b>IN WITNESS WHEREOF</b> the parties have executed this agreement in the manner and on the dates hereinafter appearing.<br><br>
											<p><b>SIGNED BY: Fernando Morales </b> on behalf of the said <b>MSPH:	Employer</b></p>

											<table>
												<tr style="width:10%; height:3%;"><td ></td></tr>
											</table><br>
											Signature: <textarea name="" style="width: 20%; height: 15%;"></textarea><br>
											Designation:	<b>Country Director</b><br>	<br> 
											on this <input type="text" name="" style="width: 5%;">/<input type="text" name="" style="width: 5%;">/<input type="text" name="" style="width: 10%;">  <br><br>
											<br>
											<b><p >Employee</p></b><br>
											Signed by:<b> <?php echo htmlentities($row['employee']);?></b><br>
											<br>	
											Signature: <textarea name="" style="width: 20%; height: 15%;"></textarea><br>
											<br>
											on this <input type="text" name="" style="width: 5%;">/<input type="text" name="" style="width: 5%;">/<input type="text" name="" style="width: 10%;"> in the presence of <br><br>


											<b>Stella Mwanansao Nghambi</b><br>
												Designation: <b>Senior Human Resources and Administration Manager</b><br><br>
												Signature:Signature: <textarea name="" style="width: 20%; height: 15%;"></textarea><br>
											
											on this <input type="text" name="" style="width: 5%;">/<input type="text" name="" style="width: 5%;">/<input type="text" name="" style="width: 10%;">  <br><br>
												P. O. Box 80214, Jangid Plaza, Chaburuma Road Off Ali Hassan Mwinyi Road, Dar es Salaam, Tanzania.



										</li>

							</ol>
							

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
<?php }?>