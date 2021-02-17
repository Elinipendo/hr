<div style="display: none;">
    <?php
require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');

$dbHost = "localhost";
$dbDatabase = "hr";
$dbPasswrod = "";
$dbUser = "root";
$mysqli = new mysqli($dbHost, $dbUser, $dbPasswrod, $dbDatabase);
print_r($_FILES);
if(isset($_POST['Submit']))
{
    $mimes = array('application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    if(in_array($_FILES["file"]["type"],$mimes))
    {
        $uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);

        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);
        $Reader = new SpreadsheetReader($uploadFilePath);

        $totalSheet = count($Reader->sheets());
        echo "You have total ".$totalSheet." sheets".

        $html="<table border='1'>";
        $html.="<tr><th>Title</th><th>Description</th></tr>";

        /* For Loop for all sheets */
        for($i=0;$i<$totalSheet;$i++)
        {
            $Reader->ChangeSheet($i);
            foreach ($Reader as $Row)
            {
                $html.="<tr>";
                $contract_type = isset($Row[1]) ? $Row[1] : '';
                $uni = isset($Row[0]) ? $Row[0] : '';
                $employee = isset($Row[2]) ? $Row[2] : '';
                 $title = isset($Row[3]) ? $Row[3] : '';
                $supervisor = isset($Row[4]) ? $Row[4] : '';
                $start_at = isset($Row[5]) ? $Row[5] : '';
                $end_at = isset($Row[6]) ? $Row[6] : '';
                $email = isset($Row[7]) ? $Row[7] : '';
                $phone = isset($Row[8]) ? $Row[8] : '';
                $region = isset($Row[9]) ? $Row[9] : '';
                $duration = isset($Row[10]) ? $Row[10] : '';
                $salary = isset($Row[11]) ? $Row[11] : '';
                $status = isset($Row[12]) ? $Row[12] : '';
                 $address = isset($Row[13]) ? $Row[13] : '';
                  $recruitment = isset($Row[14]) ? $Row[14] : '';
                $html.="<td>".$employee."</td>";
                $html.="<td>".$start_at."</td>";
                $html.="</tr>";

                $query = "insert into contracts(uni,contractType,employee,title,supervisor,start_at,end_at,email,phone,region, duration,salary,status, address,recruitment) values('".$uni."','".$contract_type."','".$employee."','".$title."','".$supervisor."','".$start_at."','".$end_at."','".$email."','".$phone."','".$region."','".$duration."','".$salary."','".$status."','".$recruitment."','".$address."')";
                $mysqli->query($query);
            }
        }
        $html.="</table>";

            echo "<br />Data Inserted in dababase";
        }
        else
        {
            die("<br/>Sorry, File type is not allowed. Only Excel file.");
        }
}
?>
</div>
