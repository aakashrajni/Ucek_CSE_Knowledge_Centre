<?php
$ds          = DIRECTORY_SEPARATOR;  //1
 $s = 0;
$storeFolder = 'upload';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
     
}

include 'Classes/PHPExcel/IOFactory.php';

$inputFileName = ''. $targetFile.'';

print($inputFileName);
//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();

//  Loop through each row of the worksheet in turn
for ($row = 1; $row <= $highestRow; $row++){ 
    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                    NULL,
                                    TRUE,
                                    FALSE);
    //  Insert row data array into your database of choice here
    
    if($rowData[0][10] != null) {
        if($s == 0)
        {
            $s=1;
            $heading = $rowData;
            $uid = uniqid();
            print_r($uid);
            for($r = 0;$heading[0][$r] != null;$r++){
                $max = $r;
                $heading[0][$r] = $foo = preg_replace('/\s+/', '', $heading[0][$r]);
                if(strlen($heading[0][$r]) == 6 || strlen($heading[0][$r]) == 10)
                $head = $heading[0][$r];
                $myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
                $query = $myPDO->query("INSERT INTO header(uid,head) VALUES ('$uid','$head'); ");
            }
            echo '<pre>'; print_r($heading); echo '</pre>';
            continue;
        }
        $rn = $rowData[0][1];
        $rowData[0] = array_combine($heading[0],$rowData[0]);
        $serialData[0] = serialize($rowData[0]);
    $quer = $myPDO->query("INSERT INTO insmark(regno,array,uid) VALUES ('".$rn."','".$serialData[0]."','".$uid."'); ");
    }
}
?>