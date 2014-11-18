<?php
include "../config/config.php";
?>
<html>
    <head>
		<link rel="stylesheet" href="function/css/simbada.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="function/tablecloth/tablecloth.css" type="text/css" media="screen" />
		<script type="text/javascript" src="function/sorter/js/jquery-latest.js"></script> 
		<script type="text/javascript" src="function/sorter/js/jquery.tablesorter.js"></script> 
		<style type="text/css">
		thead th, thead td {
		  text-align: center;
		}
		</style>
		

		<script>
		function select(a) {
			var theForm = document.sheet;
			for (i=0; i<theForm.elements.length; i++) {
				if (theForm.elements[i].name=='formDoor[]')
					theForm.elements[i].checked = a;
			}
		}
		</script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Import Pengadaan Aset / Barang</title>
    </head>
    <body>
        <div id="content">
            <?php
                include "$path/header.php";
                include "$path/title.php";
                include "$path/menu_import.php"
            ?>
            <div id="tengah1">	
                <div id="frame_tengah1">
                    <div id="frame_gudang">
                        <div id="topright">
                            Kartu Inventaris Barang E
                        </div>
                        <!--==================-->
                        <div id="bottomright">
                            <div style='padding:10px; width:98%; height:70%; overflow:auto; border: 1px solid #dddddd;'>
						<!--proses di sini-->
						
<?php
//variabel
  $aDoor = $_POST['formDoor'];
  $row = $_POST['formDoor'];

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;
$gagal = 0;  
  
  if(empty($aDoor))
  {
    echo("<div align='center' style='font:14px Arial;font-weight:bold;'>Tidak ada data yang dipilih</div><br>");
  }
  else
  {
    $N = count($aDoor);
    echo("<font style='font:14px Arial;font-weight:bold'>Data yang dipilih : </font>");
	echo "<table border='1'>
		<thead>
			<tr>
			<th rowspan='3'>NO</th>
			<th rowspan='3'>NAMA BARANG</th>
			<th colspan='2'>NOMOR</th>
			<th rowspan='3'>KODE LOKASI</th>
			<th colspan='2'>BUKU/PERPUSTAKAAN</th>
			<th colspan='3'>BARANG BERCORAK KESENIAN/KEBUDAYAAN</th>
			<th colspan='2'>HEWAN/TERNAK</th>
			<th rowspan='3'>JUMLAH</th>
			<th rowspan='3'>TAHUN<br>CETAK/<br>PEMBELIAN</th>
			<th rowspan='3'>ASAL USUL<br>PEROLEHAN</th>
			<th rowspan='3'>HARGA<br>(Rp)</th>
			<th rowspan='3'>KETERANGAN</th>
			<th rowspan='3'>STATUS</th>
			</tr>
			<tr>
			<th rowspan='2'>KODE BARANG</th>
			<th rowspan='2'>REGISTER</th>
			<th rowspan='2'>JUDUL/<br>PENCIPTA</th>
			<th rowspan='2'>SERTIFIKAT</th>
			<th rowspan='2'>ASAL DAERAH</th>
			<th rowspan='2'>PENCIPTA</th>
			<th rowspan='2'>BAHAN</th>
			<th rowspan='2'>JENIS</th>
			<th rowspan='2'>UKURAN</th>
			</tr>
		</thead>";
    for($k=0; $k < $N; $k++)
    {	
	$j=$k+1;
	echo "<tr>";
		
		//ambil record yang di cek list
		list($nm_brg,$kd_brg,$noreg,$kd_lokasi,$judul,$sertifikat,$asal,$pencipta,
		$bahan,$jenis,$ukuran,$jumlah,$tahun_cetak,$asalusul,$harga,$skpd_id,$ket,$user) = explode("|", $row[$k]);
		//cari kelompok_id
                
                $harga=str_replace(",",'',$harga);
		$total_harga=$total_harga+$harga;  
		$pemilik=substr($noreg,0,2);
		$sql="SELECT Kelompok_ID FROM Kelompok WHERE Kode='$kd_brg'";
		$cek_hasil=mysql_query($sql) or die(mysql_error());
		$result = mysql_fetch_object($cek_hasil);
		$kelompok_id=$result->Kelompok_ID;
		  
	  // setelah data dibaca, sisipkan ke dalam tabel rkb
		$query = "INSERT INTO Aset (Aset_ID,NamaAset,Kelompok_ID,NomorReg,Lokasi_ID,Tahun,AsalUsul,NilaiPerolehan,Kuantitas,OrigSatker_ID,Pemilik,TipeAset,Info,UserNm,NotUse,CaraPerolehan) 
		VALUES ('','$nm_brg', '$kelompok_id', '$noreg', '$kd_lokasi', '$tahun_cetak', '$asalusul', '$harga','$jumlah', '$skpd_id','$pemilik','E','$ket','$user','0','0')";
		$hasil = mysql_query($query) or die(mysql_error());
		
		//cari aset_id
		$sql="SELECT Aset_ID FROM Aset 
				WHERE 
					Kelompok_ID='$kelompok_id' AND NamaAset='$nm_brg' AND NomorReg='$noreg' AND Tahun='$tahun_cetak'
					AND AsalUsul='$asalusul' AND NilaiPerolehan='$harga'";
		$cek_hasil=mysql_query($sql) or die(mysql_error());
		$result = mysql_fetch_object($cek_hasil); 
			$aset_id=$result->Aset_ID;
		
		$query2 = "INSERT INTO AsetLain (AsetLain_ID,Aset_ID,Judul,TahunTerbit,ISBN,AsalDaerah,Pengarang,Material,Spesifikasi,Ukuran) 
		VALUES ('','$aset_id','$judul', '$tahun_cetak', '$sertifikat', '$asal', '$pencipta','$bahan','$jenis','$ukuran')";
		$hasil2 = mysql_query($query2) or die(mysql_error());
		
	// jika proses insert data sukses, maka counter $sukses bertambah
	// jika gagal, maka counter $gagal yang bertambah
	if ($hasil && $hasil2) {
	$sukses++;
	$status="Berhasil di Upload";
	}
	else {
	$gagal++;
	$status="Gagal di Upload";
	}
		//menampilkan status data yang dipilih	
		$harga = number_format($harga,2,',','.');
	  echo "<td style='text-align:center'>$j</td><td>$nm_brg</td><td>$kd_brg</td><td>$noreg</td><td>$kd_lokasi</td><td>$judul</td><td>$sertifikat</td><td>$asal</td><td>$pencipta</td><td>
		$bahan</td><td>$jenis</td><td>$ukuran</td><td>$jumlah</td><td>$tahun_cetak</td><td>$asalusul</td><td>$harga</td><td>$ket</td><td>$status</td></tr>";
    }
  }
  $total_harga = number_format($total_harga,2,',','.');
  echo "<tr><td colspan='15' style='text-align:center;'>Total Perolehan</td><td>$total_harga</td><td colspan='2'></td></tr>
	</table>";
  ?>
</div>
<br>
<?php
  // tampilan status sukses dan gagal
echo "<div align='center'><hr width='500px'><br><font style='font:14px Arial;font-weight:bold;'>Proses import data selesai</font>";
echo "<p>Jumlah data yang sukses diimport : ".$sukses."<br>";
echo "Jumlah data yang gagal diimport : ".$gagal."</p>";
?>
<br>
<a href="<?php echo $url_rewrite ?>/import/kibe.php" style="font:14px Arial;color:#0066FF;text-decoration:underline;">&nbsp&nbspImport Data Lagi&nbsp&nbsp</a>						


						
						<!--akhir proses-->
                                                
                                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php
        include "$path/footer.php"
    ?>
</html>
