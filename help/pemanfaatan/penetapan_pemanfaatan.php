<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01//EN" "http://www.w3.org/TR/php4/strict.dtd">
<?php
include "../../config/config.php";
?>
<php>
    <head>
        <title>Help SIMBADA</title>
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
                <title><?=$title?></title>
                <!-- include css file -->
                
                <link rel="stylesheet" href="../../css/simbada.css" type="text/css" media="screen" />
                <link rel="stylesheet" href="../../css/jquery-ui.css" type="text/css">
                <link rel="stylesheet" href="../../css/example.css" TYPE="text/css" MEDIA="screen">
    </head>
    <body>
        <div>
            <div id="frame_header">
                <div id="header"></div>
            </div>
            <div id="list_header"></div>
            <div id="kiri">
            <div id="frame_kiri">
                <?php include '../menu_samping.php';?>
            </div>
        </div>
        
        <div id="tengah">	
            <div id="frame_tengah">
                <div id="" style="padding: 10px">
                    <fieldset style="padding: 5px;">
                    <label style='font-size:18px'>Help &raquo;</label>
					<br><br>
					<p style='font-size:17px' >Sub Menu Penetapan Pemanfaatan</p>
					<br>
					<p style='font-size:14px'>Pada Sub Menu penetapan pemanfaatan ini mempunyai alur operasi sebagai berikut :</p>
					<br>
					<p align="center"><img  src="../pemanfaatan/images/penetapan_pemanfaatan.jpg" width="700px" height="185px"/></p><br>
					<p style="padding: 3px">Sub menu ini digunakan untuk mencatat aset-aset yang telah ditetapkan pemanfaatannya, dengan langkah-langkah berikut ini&nbsp;:</p>
					<ol style="padding: 18px"><li>Klik sub menu Penetapan Pemanfaatan.<br><p align="center"><img  src="../pemanfaatan/images/pm11.jpg"></p><br>
					<li>SIMBADA akan menampilkan halaman seleksi pencarian data.<br><br><ul><li>Isi Tanggal Awal dan Akhir sesuai dengan periode penerbitan SK Penetapan Pemanfaatan yang ingin dilihat.</li><li>Isi Nomor Penetapan Pemanfaatan dengan nomor atau bagian nomor SK Penetapan Pemanfaatan yang ingin ditampilkan.</li><li>Pilih SKPD bila ingin menampilkan data berdasarkan SKPD.</li><li>Bersihkan Filter untuk membersihkan dari seleksi sebelumnya.<br><br><img  src="../pemanfaatan/images/pm12.jpg"><br><br></li></ul></li>
					<li>Klik Tampilkan Data untuk menampilkan data berdasarkan seleksi. Bila tanpa seleksi atau filter dikosongkan, maka SIMBADA akan menampilkan semua data.<br><br><img  src="../pemanfaatan/images/pm13.jpg"><br><br></li>
					<li>Klik Cetak untuk mencetak data dalam format PDF, klik Edit untuk mengedit data atau klik Hapus untuk menghapus data penetapan pemanfaatan yang tidak digunakan.<br><br></li>
					<li>Klik Tambah Data untuk membuat atau menambahkan data baru. SIMBADA akan menampilkan halaman berisi daftar aset yang dibuatkan penetapannya. Isi Aset ID untuk mencari data berdasarkan ID aset, isi Nama Aset untuk mencari data berdasarkan nama yang dicari, isi Nomor Kontrak untuk mecari data berdasarkan nomor yang dicari, pilih Satker yang ingin dicari atau kosongkan semua filter untuk menampilkan semua data.<br><br><img  src="../pemanfaatan/images/pm14.jpg"><br><br></li>
					<li>klik tombol Lanjut untuk menampilkan daftar aset kemudian SIMBADA akan menampilkan daftar informasi data aset yang dicari.<br><br><img  src="../pemanfaatan/images/pm15.jpg"><br><br></li>
					<li>Berikan tanda centang pada data aset yang ingin di pilih dan klik tombol Lanjutkan maka SIMBADA akan menambahkan data aset kedalam daftar aset yang ingin dibuatkan penetapannya.<br><br><img  src="../pemanfaatan/images/pm16.jpg"><br><br><ul style="padding: 12px"><li>Isi Nomor Penetapan dengan nomor Surat Keputusan Penetapan Pemanfaatannya.</li><li>Isi Tanggal Penetapan dengan tanggal Surat Keputusan Penetapan Pemanfaatan.</li><li>Isi Keterangan dengan teks keterangan yang diperlukan.</li><li>Isi Nama Partner dengan pihak ketiga yang memanfaatkan aset.</li><li>Isi Alamat Partner dengan alamat pihak ketiga.</li><li>Isi Tanggal Mulai dan Tanggal Selesai dengan tanggal mulai dan selesai perjanjian pemanfaatan.</li><li>Klik Penetapan Pemanfaatan untuk mencatat data penetapan pemanfaatan, atau klik Batal untuk membatalkan proses.</li></ul>
					</li></ol>
					<p align="center"><input type="button" value="<< Previous" onClick="window.location.href='daftar_usulan_pemanfaatan.php'"> &nbsp;<input type='BUTTON' value='TOC' onClick="window.location.href='../'">&nbsp;  <input type='BUTTON' value='Next >>' onClick="window.location.href='validasi_pemanfaatan.php'"></p>
                    </fieldset>
                </div>
            </div>
        </div>
        
        </div>
            <div id="footer">Sistem Informasi Barang Daerah ver. 0.x.x <br />
            Powered by BBSDM Team 2012
            </div>
        </div>
    </body>
</php>
