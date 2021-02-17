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
                $position = isset($Row[1]) ? $Row[1] : '';
                $uni = isset($Row[0]) ? $Row[0] : '';
                $firstname = isset($Row[2]) ? $Row[2] : '';
                $middlename = isset($Row[3]) ? $Row[3] : '';
                $lastname = isset($Row[4]) ? $Row[4] : '';
                $gender = isset($Row[5]) ? $Row[5] : '';
                $email = isset($Row[6]) ? $Row[6] : '';
                $phone = isset($Row[7]) ? $Row[7] : '';
                $region = isset($Row[8]) ? $Row[8] : '';
                $department = isset($Row[9]) ? $Row[9] : '';
                $contract = isset($Row[10]) ? $Row[10] : '';
                $html.="<td>".$firstname."</td>";
                $html.="<td>".$lastname."</td>";
                $html.="</tr>";

                $query = "insert into employees(uni,title,firstname,middlename,lastname,gender,email,phone,region, department,contract_type) values('".$uni."','".$position."','".$firstname."','".$middlename."','".$lastname."','".$gender."','".$email."','".$phone."','".$region."','".$department."','".$contract."')";
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
