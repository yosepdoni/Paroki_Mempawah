<?php
// Contoh tampilan HTML surat baptis
$html = '<html><head></head><body>';
$html .= '<h1>Surat Baptis</h1>';
$html .= '<p>Kepada yang terhormat,</p>';
$html .= '<p>Kami dengan sukacita mengumumkan bahwa:</p>';
$html .= '<p>Nama: John Doe</p>';
$html .= '<p>Telah dibaptis pada tanggal 12 Januari 2023</p>';
$html .= '</body></html>';

// Simpan tampilan HTML ke file sementara
$tempHtmlFile = 'surat_baptis.html';
file_put_contents($tempHtmlFile, $html);

// Gunakan wkhtmltopdf untuk mengonversi HTML ke PDF
$cmd = 'wkhtmltopdf ' . $tempHtmlFile . ' surat_baptis.pdf';
exec($cmd);

// Hapus file HTML sementara
unlink($tempHtmlFile);

// Berikan file PDF untuk diunduh
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="surat_baptis.pdf"');
readfile('surat_baptis.pdf');
