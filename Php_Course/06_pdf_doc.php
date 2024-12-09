<?php
// Include the FPDF library
require('path/to/fpdf.php');

// Create a new instance of FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Set font
$pdf->SetFont('Arial', 'B', 16);

// Add a cell with text
$pdf->Cell(40, 10, 'Hello World!');

// Draw a line
$pdf->Line(10, 20, 200, 20);

// Add a rectangle
$pdf->Rect(10, 30, 190, 50);

// Add some text inside the rectangle
$pdf->SetXY(10, 35);
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(190, 10, "This is an example of creating a PDF using FPDF library in PHP. You can add more text, images, and other graphical elements as needed.");

// Output the PDF
$pdf->Output('D', 'example.pdf');  // 'D' parameter forces the download of the file
?>
