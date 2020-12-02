<?php
include "config/koneksi.php";
require('assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('dist/img/avatar56.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'TOKO RIZKY',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 087743280825',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Dsn Ngadisono, Desa Sumbersuko',0,'L');
$pdf->SetX(4);
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Produk",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Produk', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Harga', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Stok Masuk', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Satuan', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Suplier', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Tanggal', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($koneksi, "select * from produk");
while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nama_produk'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['harga'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['stokproduk'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['satuan'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $lihat['supplier'],1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['tglmasuk'], 1, 1,'C');

	$no++;
}

$pdf->Output("laporan_buku.pdf","I");

?>