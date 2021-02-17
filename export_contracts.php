<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'hr');  
$sql = "SELECT `uni`,`contractType`,`employee`,`supervisor`,`email`,`phone`,`region`,`start_at`,`end_at`,`duration`,`salary`,`status` FROM `contracts`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "UNI" . "\t" ."Contract Type" . "\t" . "\t" . "Employee Name" . "Supervisor" . "\t"."Email" . "\t" . "Phone" . "\t" . "Working Place" . "\t". "Start Date" . "\t" . "End Date" . "\t"."Duration" . "\t" . "Salary" . "\t" . " Status" . "\t" ;  
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
header("Content-Disposition: attachment; filename=Contracts_Report.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 

