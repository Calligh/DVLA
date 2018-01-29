<?php
include '../controllers/autoload.php';
$path = $handlebar . '/public'. '/vendors/fpdf'. '/fpdf.php';
$font = $handlebar . '/public/' . '/vendors/fpdf'. '/font';
define('FPDF_FONTPATH',$font);
require $path;
$_date = $_GET['report_date'];
$hook = new Lessons();
$getuser_hook = $hook->getUserByDate($mysqli,$_date);
$gethook_count = $getuser_hook->num_rows;
if ($gethook_count > 0){
    $reg_users = array();
    while($row_hook_data = $getuser_hook->fetch_array(MYSQLI_BOTH)){
        $data = array(
            "FirstName" => $row_hook_data['first_name'],
            "LastName"  => $row_hook_data['last_name'],
            "MiddleName"=> $row_hook_data['middle_name'],
            "Gender"    => $row_hook_data['gender']
        );
        array_push($reg_users,$data);
    }
}



class PDF extends FPDF{
    function Header()
    {
        // Select Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Framed title
        $this->Cell(30,10,'Registered User List',0,'C');
        // Line break
        $this->Ln(20);
    }

    function Footer()
    {
        // Go to 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Arial','I',8);
        // Print centered page number
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetLeftMargin(20);
$pdf->SetRightMargin(20);

foreach ($reg_users as $item => $value) {
    $full_name = $value["FirstName"]." ".$value["LastName"]. " ". $value["MiddleName"];
    $pdf->Cell(40,10,$full_name);
}

$pdf->Output();

?>


