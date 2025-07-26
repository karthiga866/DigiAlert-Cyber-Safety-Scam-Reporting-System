<?php
require('fpdf/fpdf.php');
include 'connect.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'DigiAlert - Scam Reports',0,1,'C');
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10, 10, 'ID', 1);
$pdf->Cell(30, 10, 'Name', 1);
$pdf->Cell(40, 10, 'Email', 1);
$pdf->Cell(35, 10, 'Scam Type', 1);
$pdf->Cell(70, 10, 'Description', 1);
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$sql = "SELECT * FROM reports";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(10, 10, $row['id'], 1);
    $pdf->Cell(30, 10, $row['name'], 1);
    $pdf->Cell(40, 10, $row['email'], 1);
    $pdf->Cell(35, 10, $row['scam_type'], 1);
    $pdf->Cell(70, 10, substr($row['description'],0,35).'...', 1);
    $pdf->Ln();
}

$pdf->Output();
?>
