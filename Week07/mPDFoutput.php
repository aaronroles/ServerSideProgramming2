<?php
    include('../mPDF/mpdf.php');

    $mpdf = new MPDF();

    $mpdf->WriteHTML('Hello World');

    $mpdf->Output();
?>