<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/reservasi-hotel/app/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = file_get_contents(BASEURL . '/table_booking/templatePdf/' . $data['id']);

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();

$dompdf->stream('#Invoice_' . $data['nama'] . '_ID_' . $data['id']);

?>