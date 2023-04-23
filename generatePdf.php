<?php

require("fpdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();

$name = $_POST["name"];
$designation = $_POST["designation"];
$dob = $_POST["dob"];
$address = $_POST["address"];
$education = $_POST["education"];
$skills = $_POST["skills"];
$projects = $_POST["projects"];
$summary = $_POST["summary"];
$gender = $_POST["gender"];
$email = $_POST["email"];

// Title Section
$pdf->SetFont('Arial','B', 25);
$pdf->Cell(40,10,'Resume');
$pdf->Ln(10);

$pdf->Line(10, 23, 200, 23);

// Intro Section - Name, Summary
$pdf->SetFont('Times','B',25);
$pdf->Ln(10);
if ($gender == "male") {
  $pdf->Cell(40,10, 'Mr. ' . $name);
} elseif ($gender == "female") {
  $pdf->Cell(40,10, 'Ms. ' . $name);
}
$pdf->Ln(10);

$pdf->SetFont('Times', 'B', 15);
$pdf->Cell(40, 10, $designation);
$pdf->Ln(10);

$pdf->SetFont('Times','',12);
$pdf->MultiCell(190, 7, $summary);  
$pdf->Ln(7);

// Info
$pdf->SetFont('Times','B',12);
$pdf->MultiCell(190, 7, "Email ID: $email");

$pdf->SetFont('Times','B',12);
$pdf->MultiCell(190, 7, "Date of birth: $dob");
$pdf->Ln(7);


// Address
$pdf->SetFont('Times','B',18);
$pdf->Cell(40,10, 'Address');
$pdf->Ln(10);

$pdf->SetFont('Times','',12);
$pdf -> SetLineWidth(0.5);
$pdf->MultiCell(120, 7, $address);  
$pdf->Ln(10);

//Education
$pdf->SetFont('Times','B',18);
$pdf->Cell(40,10, 'Education');
$pdf->Ln(10);

$pdf->SetFont('Times','',12);
$pdf -> SetLineWidth(0.5);
$edu_arr = explode(',', $education);
$edus = $edu_arr;
foreach ($edus as $key => $value) {
  $education1 = explode('-', $value);
  $pdf->SetFont('Times','B',13);
  $pdf->MultiCell(120, 7, $education1[0]);
  $pdf->SetFont('Times','',12);
  $pdf->MultiCell(120, 7, $education1[1]);
  $pdf->Ln(5);
}  
$pdf->Ln(5);

// Skills
$pdf->SetFont('Times','B',18);
$pdf->Cell(40,10, 'Skills');
$pdf->Ln(10);

$skillsList = explode(',', $skills);
$pdf->SetFont('Times','',13);

foreach ($skillsList as $key => $value) {
  $pdf->MultiCell(count($skillsList) * 9, 7, "\225  $value");
}
$pdf->Ln(5);

// Projects
if($projects) {
  $pdf->SetFont('Times','B',18);
  $pdf->Cell(40,10, 'Projects');
  $pdf->Ln(10);

  $projectList = explode(',', $projects);
  $pdf->SetFont('Times','',13);

  foreach ($projectList as $key => $value) {
    $pdf->MultiCell(120, 7, "\225  $value");
  }
}



$pdf->Output();

?>