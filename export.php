<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'hr');  
$sql = "SELECT `uni`,`firstname`,`middlename`,`lastname`,`title`,`gender`,`email`,`phone`,`nationality`,`dob`,`region`,`contract_type` FROM `employees`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "UNI" . "\t" . "First Name" . "\t" . "Middle Name" . "\t"."Last Name" . "\t" . "Title" . "\t" . "Gender" . "\t". "Email" . "\t" . "Phone" . "\t"."Nationality" . "\t" . "Date of Birth" . "\t" . "Working Place" . "\t". "Contract Type" . "\t" ;  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=ICAP_Employees.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 

