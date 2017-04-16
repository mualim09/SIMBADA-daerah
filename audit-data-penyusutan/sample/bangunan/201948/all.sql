
INSERT INTO `aset` (`Aset_ID`, `kodeKelompok`, `kodeSatker`, `kodeLokasi`, `noRegister`, `noKontrak`, `TglPerolehan`, `TglPembukuan`, `SumberDana`, `NilaiPerolehan`, `Alamat`, `RTRW`, `kondisi`, `TglInventarisasi`, `BAST_ID`, `BASP_ID`, `Kuantitas`, `Satuan`, `Bersejarah`, `Info`, `Dihapus`, `UserNm`, `FixAset`, `NotUse`, `Tahun`, `AsalUsul`, `Dipindah`, `StatusValidasi`, `CaraPerolehan`, `Status_Validasi_Barang`, `kodeData`, `kodeKA`, `kodeRuangan`, `TipeAset`, `statusPemanfaatan`, `MasaManfaat`, `AkumulasiPenyusutan`, `PenyusutanPertaun`, `fixPenggunaan`, `GUID`, `NilaiBuku`, `UmurEkonomis`, `TahunPenyusutan`, `nilai_kapitalisasi`, `prosentase`, `penambahan_masa_manfaat`, `jenis_belanja`, `kodeKelompokReklasAsal`, `kodeKelompokReklasTujuan`) VALUES
(201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', 2, NULL, '2010-06-14', '2010-06-14', NULL, '1595012583.0000', 'Tambak Degayu', NULL, 1, NULL, NULL, NULL, 1, '1595012583.0000', 0, '', 0, '95', 0, 1, 2010, 'Pembelian', NULL, 1, NULL, 1, 1, 1, '', 'C', 0, 50, '158134529.0000', '31900252.0000', 1, NULL, '1436878054.0000', 48, 2016, NULL, NULL, NULL, 0, NULL, NULL);
 

 
INSERT INTO `bangunan` (`Bangunan_ID`, `Aset_ID`, `kodeKelompok`, `kodeSatker`, `kodeLokasi`, `noRegister`, `TglPerolehan`, `TglPembukuan`, `kodeData`, `kodeKA`, `kodeRuangan`, `StatusValidasi`, `Status_Validasi_Barang`, `StatusTampil`, `Tahun`, `NilaiPerolehan`, `Alamat`, `Info`, `AsalUsul`, `kondisi`, `CaraPerolehan`, `TglPakai`, `Konstruksi`, `Beton`, `JumlahLantai`, `LuasLantai`, `Dinding`, `Lantai`, `LangitLangit`, `Atap`, `NoSurat`, `TglSurat`, `NoIMB`, `TglIMB`, `StatusTanah`, `NoSertifikat`, `TglSertifikat`, `Tanah_ID`, `Tmp_Tingkat`, `Tmp_Beton`, `Tmp_Luas`, `KelompokTanah_ID`, `GUID`, `TglPembangunan`, `MasaManfaat`, `AkumulasiPenyusutan`, `NilaiBuku`, `PenyusutanPerTahun`, `UmurEkonomis`, `TahunPenyusutan`, `nilai_kapitalisasi`, `prosentase`, `penambahan_masa_manfaat`, `jenis_belanja`, `kodeKelompokReklasAsal`, `kodeKelompokReklasTujuan`) VALUES
(1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', 2, '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 1, 2010, '1595012583.0000', 'Tambak Degayu', '', 'Pembelian', 1, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '', '0000-00-00', NULL, NULL, '', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 50, '158134529.0000', '1436878054.0000', '31900252.0000', 48, 2016, NULL, NULL, NULL, 0, NULL, NULL);



INSERT INTO `log_bangunan` (`log_id`, `Bangunan_ID`, `Aset_ID`, `kodeKelompok`, `kodeSatker`, `kodeLokasi`, `noRegister`, `TglPerolehan`, `TglPembukuan`, `kodeData`, `kodeKA`, `kodeRuangan`, `StatusValidasi`, `Status_Validasi_Barang`, `Tahun`, `NilaiPerolehan`, `Alamat`, `Info`, `AsalUsul`, `kondisi`, `CaraPerolehan`, `TglPakai`, `Konstruksi`, `Beton`, `JumlahLantai`, `LuasLantai`, `Dinding`, `Lantai`, `LangitLangit`, `Atap`, `NoSurat`, `TglSurat`, `NoIMB`, `TglIMB`, `StatusTanah`, `NoSertifikat`, `TglSertifikat`, `Tanah_ID`, `Tmp_Tingkat`, `Tmp_Beton`, `Tmp_Luas`, `KelompokTanah_ID`, `GUID`, `TglPembangunan`, `changeDate`, `action`, `operator`, `TglPerubahan`, `NilaiPerolehan_Awal`, `Kd_Riwayat`, `No_Dokumen`, `StatusTampil`, `MasaManfaat`, `AkumulasiPenyusutan`, `NilaiBuku`, `PenyusutanPerTahun`, `AkumulasiPenyusutan_Awal`, `NilaiBuku_Awal`, `PenyusutanPerTahun_Awal`, `Aset_ID_Penambahan`, `UmurEkonomis`, `TahunPenyusutan`, `nilai_kapitalisasi`, `prosentase`, `penambahan_masa_manfaat`, `mutasi_ak_tambah`, `mutasi_ak_kurang`, `jenis_belanja`, `kodeKelompokReklasAsal`, `kodeKelompokReklasTujuan`, `jenis_hapus`) VALUES
(977, 1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', '2', '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 2010, '800433000.0000', '', '', 'Pembelian', 1, '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '0', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00', 0, '', '', 0, '', '', '0000-00-00', '2015-05-11', 'reklas', '1', '0000-00-00 00:00:00', '0.0000', '30', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.0000', '0.0000', 0, NULL, NULL, NULL),
(978, 1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', '2', '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 2010, '800433000.0000', 'kel. Degayu', '', 'Pembelian', 1, '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '0', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00', 0, '', '', 0, '', '', '0000-00-00', '2015-05-11', 'reklas', '1', '2014-12-31 00:00:00', '800433000.0000', '30', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.0000', '0.0000', 0, NULL, NULL, NULL),
(3292, 1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', '2', '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 2010, '800433000.0000', 'kel. Degayu', 'NULL', 'Pembelian', 1, 'NULL', '0000-00-00', 'NU', 0, 0, 0, 'NULL', 'NULL', 'NULL', 'NULL', '0', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 0, 'NULL', 'NULL', 0, 'NULL', 'NULL', '0000-00-00', '2016-01-14', 'Penyusutan_2014_11.01.01.01', NULL, '2015-01-01 00:00:00', '800433000.0000', '49', NULL, 1, 0, '0.0000', '0.0000', '0.0000', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '0.0000', '0.0000', 0, NULL, NULL, NULL),
(3293, 1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', '2', '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 2010, '800433000.0000', 'kel. Degayu', 'NULL', 'Pembelian', 1, 'NULL', '0000-00-00', 'NU', 0, 0, 0, 'NULL', 'NULL', 'NULL', 'NULL', '0', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 0, 'NULL', 'NULL', 0, 'NULL', 'NULL', '0000-00-00', '2016-01-14', 'Penyusutan_2014_11.01.01.01', NULL, '2015-01-01 07:07:07', '800433000.0000', '50', NULL, 1, 50, '80043300.0000', '720389700.0000', '16008660.0000', NULL, NULL, NULL, NULL, 45, 2014, NULL, NULL, NULL, '0.0000', '0.0000', 0, NULL, NULL, NULL),
(4948, 1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', '2', '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 2010, '1595012583.0000', 'kel. Degayu', '', 'Pembelian', 1, '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '0', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00', 0, '', '', 0, '', '', '0000-00-00', '2016-02-23', '3', '95', '2015-11-11 00:00:00', '800433000.0000', '2', NULL, 1, 50, '80043300.0000', '2309548866.0000', '16008660.0000', '80043300.0000', '1514969283.0000', '0.0000', NULL, 45, 2014, NULL, NULL, NULL, '0.0000', '0.0000', 0, NULL, NULL, NULL),
(28256, 1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', '2', '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 2010, '1595012583.0000', 'Tambak Degayu', '', 'Pembelian', 1, '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00', 0, '', '', 0, '', 'koreksi alamat', '0000-00-00', '2016-04-29', 'koreksi', '95', '2015-12-30 00:00:00', '1595012583.0000', '18', NULL, 1, 50, '80043300.0000', '1514969283.0000', '16008660.0000', NULL, NULL, NULL, NULL, 45, 2014, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', 0, NULL, NULL, NULL),
(28579, 1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', '2', '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 2010, '1595012583.0000', 'Tambak Degayu', 'NULL', 'Pembelian', 1, 'NULL', '0000-00-00', 'NU', 0, 0, 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 0, 'NULL', 'NULL', 0, 'NULL', 'NULL', '0000-00-00', '2016-05-02', 'Penyusutan_2015_11.01.01.01', NULL, '2015-12-31 00:00:00', '1595012583.0000', '49', NULL, 1, 50, '80043300.0000', '2309548866.0000', '16008660.0000', '80043300.0000', '2309548866.0000', '16008660.0000', NULL, 45, 2014, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', 0, NULL, NULL, NULL),
(28580, 1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', '2', '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 2010, '1595012583.0000', 'Tambak Degayu', 'NULL', 'Pembelian', 1, 'NULL', '0000-00-00', 'NU', 0, 0, 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 0, 'NULL', 'NULL', 0, 'NULL', 'NULL', '0000-00-00', '2016-05-02', 'Penyusutan_2015_11.01.01.01', NULL, '2015-12-31 00:00:00', '1595012583.0000', '51', NULL, 1, 50, '126234277.0000', '1468778306.0000', '46190977.0000', '80043300.0000', '2309548866.0000', '16008660.0000', NULL, 49, 2015, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', 0, NULL, NULL, NULL),
(32573, 1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', '2', '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 2010, '1595012583.0000', 'Tambak Degayu', 'NULL', 'Pembelian', 1, 'NULL', '0000-00-00', 'NU', 0, 0, 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 0, 'NULL', 'NULL', 0, 'NULL', 'NULL', '0000-00-00', '2017-03-17', 'Penyusutan_2016_11.01.01.01', NULL, '2016-12-31 00:00:00', '1595012583.0000', '49', NULL, 1, 50, '126234277.0000', '1468778306.0000', '46190977.0000', '126234277.0000', '1468778306.0000', '46190977.0000', NULL, 49, 2015, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', 0, 'NULL', 'NULL', NULL),
(32574, 1869, 201948, '03.11.01.04.04', '11.01.01.01', '12.11.33.11.01.10.01.01', '2', '2010-06-14', '2010-06-14', 1, 1, 0, 1, 1, 2010, '1595012583.0000', 'Tambak Degayu', 'NULL', 'Pembelian', 1, 'NULL', '0000-00-00', 'NU', 0, 0, 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '0000-00-00', 'NULL', '0000-00-00', 'NULL', 'NULL', '0000-00-00', 0, 'NULL', 'NULL', 0, 'NULL', 'NULL', '0000-00-00', '2017-03-17', 'Penyusutan_2016_11.01.01.01', NULL, '2016-12-31 00:00:00', '1595012583.0000', '50', NULL, 1, 50, '158134529.0000', '1436878054.0000', '31900252.0000', '126234277.0000', '1468778306.0000', '46190977.0000', NULL, 48, 2016, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', 0, 'NULL', 'NULL', NULL);
