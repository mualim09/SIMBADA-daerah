<?php
ob_start();
require_once('../../../config/config.php');

define("_JPGRAPH_PATH", "$path/function/mpdf/jpgraph/src/"); // must define this before including mpdf.php file
$JpgUseSVGFormat = true;

define('_MPDF_URI',"$url_rewrite/function/mpdf/"); 	// must be  a relative or absolute URI - not a file system path

include ('../../../function/tanggal/tanggal.php');
include "../../report_engine.php";
require_once('../../../function/mpdf/mpdf.php');

$parameter=  $_GET['parameter'];

//mendeklarasikan report_engine. FILE utama untuk reporting
$REPORT=new report_engine();

//query usulan pemindahtanganan
$query= "SELECT A.Aset_ID, A.NamaAset, A.Kelompok_ID, A.LastSatker_ID,
                A.Lokasi_ID, A.LastKondisi_ID, A.Persediaan, 
                A.Satuan, A.TglPerolehan, A.NilaiPerolehan,
                A.Alamat, A.RTRW, A.Pemilik, A.Tahun, A.NomorReg,
                K.Kelompok, K.Uraian, K.Kode,
                L.NamaLokasi,
                S.KodeSatker,S.NamaSatker, S.KodeUnit,
                KDS.InfoKondisi, KTR.NoKontrak
                FROM Aset AS A 
                INNER JOIN KontrakAset AS KTRA ON A.Aset_ID=KTRA.Aset_ID
                INNER JOIN Kontrak AS KTR ON KTR.Kontrak_ID=KTRA.Kontrak_ID
                LEFT JOIN Kelompok AS K ON A.Kelompok_ID = K.Kelompok_ID
                LEFT JOIN Lokasi AS L ON A.Lokasi_ID = L.Lokasi_ID 
                LEFT JOIN Satker AS S ON A.LastSatker_ID = S.Satker_ID
                LEFT JOIN Kondisi AS KDS ON A.LastKondisi_ID = KDS.Kondisi_ID
                $parameter A.Usulan_Pemindahtanganan_ID IS NULL AND A.NotUse=0 AND A.StatusValidasi=1 
                ORDER BY A.Aset_ID asc limit 50";

//mengenerate query
$result_query=$REPORT->retrieve_query($query);

//set gambar untuk laporan
$gambar = $FILE_GAMBAR_KABUPATEN;

//retrieve html
$html=$REPORT->retrieve_html_usulan_pemindahtanganan_cetak_seluruh($result_query, $gambar);

//print html
$count = count($html);

for ($i = 0; $i < $count; $i++) {
    //echo $html[$i];     
}

//cetak reporting
$REPORT->show_status_download_kib();
$mpdf=new mPDF('','','','',15,15,16,16,9,9,'L');
$mpdf->debug=true;
$mpdf->AddPage('L','','','','',15,15,16,16,9,9);
$mpdf->setFooter('{PAGENO}') ;
$mpdf->progbar_heading = '';
$mpdf->StartProgressBarOutput(2);
$mpdf->useGraphs = true;
$mpdf->list_number_suffix = ')';
$mpdf->hyphenate = true;

$count = count($html);
for ($i = 0; $i <= $count; $i++) {
     if($i==0)
          $mpdf->WriteHTML($html[$i]);
     else
     {
           $mpdf->AddPage('L','','','','',15,15,16,16,9,9);
           $mpdf->WriteHTML($html[$i]);
           
     }
}
$waktu=date("d-m-y_h:i:s");
$namafile="$path/report/output/Daftar usulan pemidahtanganan cetak seluruh data $waktu.pdf";
$mpdf->Output("$namafile",'F');
$namafile_web= "$url_rewrite/report/output/Daftar usulan pemidahtanganan cetak seluruh data $waktu.pdf";
echo "<script>window.location.href='$namafile_web';</script>";
exit;
?>

