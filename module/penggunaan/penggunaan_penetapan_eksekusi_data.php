<?php
include "../../config/config.php";
 // pr($_SESSION);

$PENGGUNAAN = new RETRIEVE_PENGGUNAAN;

        $submit=$_POST['submit2'];
        
        $menu_id = 30;
        ($SessionUser['ses_uid']!='') ? $Session = $SessionUser : $Session = $SESSION->get_session(array('title'=>'GuestMenu', 'ses_name'=>'menu_without_login')); 
        $SessionUser = $SESSION->get_session_user();
        $USERAUTH->FrontEnd_check_akses_menu($menu_id, $SessionUser);
        
        if (isset($submit))
			{
		
						// unset($_SESSION['ses_retrieve_filter_'.$menu_id.'_'.$SessionUser['ses_uid']]);
						// $ses_uid=$_SESSION['ses_uid'];
						// $parameter=array('ses_uid'=>$ses_uid);
						// $data = $RETRIEVE->retrieve_penetapan_penggunaan_eksekusi($parameter);
			}
                                
		// echo '<pre>';
		// print_r($data['dataArr']);
		// echo '</pre>';
	?>


<?php
	include"$path/meta.php";
	include"$path/header.php";
	include"$path/menu.php";
	
	if (isset($_POST['submit2'])){
		$_POST['Penggunaan'] = $PENGGUNAAN->getAsetList('PNGGU');
		$_SESSION['ses_penggunaan_eksekusi'] = $_POST;
	}
	
		

	$dataPost = $_SESSION['ses_penggunaan_eksekusi'];

	// pr($dataPost);exit;
	$data = $PENGGUNAAN->retrieve_penetapan_penggunaan_eksekusi($dataPost);

?>

                    <!--buat date-->
                    <script type="text/javascript" src="<?php echo "$url_rewrite/"; ?>JS/jquery.min.js"></script>
                    <script type="text/javascript" src="<?php echo "$url_rewrite/"; ?>JS/jquery-ui.min.js"></script> 
                    <script type="text/javascript" src="<?php echo "$url_rewrite/"; ?>JS/jquery.ui.datepicker-id.js"></script>
                    <script>
                        $(function()
                        {
                        $('#tanggal1').datepicker($.datepicker.regional['id']);
                        $('#tanggal2').datepicker($.datepicker.regional['id']);
                        $('#tanggal3').datepicker($.datepicker.regional['id']);
                        $('#tanggal4').datepicker($.datepicker.regional['id']);
                        $('#tanggal5').datepicker($.datepicker.regional['id']);
                        $('#tanggal6').datepicker($.datepicker.regional['id']);
                        $('#tanggal7').datepicker($.datepicker.regional['id']);
                        $('#tanggal8').datepicker($.datepicker.regional['id']);
                        $('#tanggal9').datepicker($.datepicker.regional['id']);
                        $('#tanggal10').datepicker($.datepicker.regional['id']);
                        $('#tanggal11').datepicker($.datepicker.regional['id']);
                        $('#tanggal12').datepicker($.datepicker.regional['id']);
                        $('#tanggal13').datepicker($.datepicker.regional['id']);
                        $('#tanggal14').datepicker($.datepicker.regional['id']);
                        $('#tanggal15').datepicker($.datepicker.regional['id']);

                        }

                        );
                    </script> 
                    <link href="<?php echo "$url_rewrite/"; ?>css/jquery-ui.css" type="text/css" rel="stylesheet">
        
                    <!--buat number only-->
                    <style>
                        #errmsg { color:red; }
                    </style>
                    <script src="js/jquery-latest.js"></script>
                    <script src="js/jquery.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function(){

                            //called when key is pressed in textbox
                                $("#posisiKolom").keypress(function (e)  
                                { 
                                //if the letter is not digit then display error and don't type anything
                                if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
                                {
                                        //display error message
                                        $("#errmsg").html("Hanya Bisa Input Angka").show().fadeOut("slow"); 
                                    return false;
                            }	
                                });
                        });
                   
						function spoiler(obj)
						{
						var inner = obj.parentNode.parentNode.parentNode.parentNode.getElementsByTagName("tfoot")[0];
						//alert(obj.parentNode.parentNode.parentNode.parentNode.nodeName);
						if (inner.style.display =="none") {
						inner.style.display = "";
						document.getElementById(obj.id).value="Tutup Detail";}
						else {
						inner.style.display = "none";
						document.getElementById(obj.id).value="View Detail";}
						}
						
					function spoilsub(obj)
						{
						var inner = obj.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName("div")[1];
						//alert(obj.parentNode.parentNode.parentNode.parentNode.parentNode.nodeName);
						if (inner.style.display =="none") {
						inner.style.display = "";
						document.getElementById(obj.id).value="Tutup Sub Detail";}
						else {
						inner.style.display = "none";
						document.getElementById(obj.id).value="Sub Detail";}
						}

				function validasiTanggal()
				{
					var tanggal = $('#datepicker').val();
					//console.log(tanggal);

					if (tanggal == ''){
						alert('Tanggal penetapan tidak boleh kosong');
						return false;
					}
					
				}
				</script>
                 
	<section id="main">
		<ul class="breadcrumb">
		  <li><a href="#"><i class="fa fa-home fa-2x"></i>  Home</a> <span class="divider"><b>&raquo;</b></span></li>
		  <li><a href="#">Penggunaan </a><span class="divider"><b>&raquo;</b></span></li>
		  <li class="active">Penetapan Penggunaan</li>
		  <?php SignInOut();?>
		</ul>
		<div class="breadcrumb">
			<div class="title">Penetapan Penggunaan</div>
			<div class="subtitle">Filter Data</div>
		</div>
		<section class="formLegend">
			<form name="form" method="POST" action="<?php echo "$url_rewrite/module/penggunaan/"; ?>penggunaan_penetapan_eksekusi_data_proses.php" onsubmit="return validasiTanggal()">
			<h4>Daftar aset yang akan dibuatkan penetapan penggunaan :</h4>
			<div class="accordion-demo"> 

				<?php
					// $id =0;
					$no = 1;
					// pr($data);
					foreach ($data as $keys => $nilai)
					{
						
						if ($nilai['AsetOpr'] == 0)
						$select="selected='selected'";
						if ($nilai['AsetOpr'] ==1)
						$select2="selected='selected'";

						if($nilai['SumberAset'] =='sp2d')
						$pilih="selected='selected'";
						if($nilai['SumberAset'] =='hibah')
						$pilih2="selected='selected'";
						if ($nilai['Aset_ID'] !='')
						{
				?>
				<div class="accordion_in">
					<div class="acc_head"><?=$no?>.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?=$nilai[noRegister]?> - <?=$nilai[kodeSatker]?>
					</div>
					<div class="acc_content">
						<input type='hidden' name='penggu_nama_aset[]' value='<?=$nilai[Aset_ID]?>'>
						<input type='hidden' name='penggu_satker_aset[]' value='$nilai[kodeSatker]?>'>
						<div class="row">
							<div class="span12">
								<input type='text' value="<?php echo $nilai[Pemilik]?>" size='1px' style='text-align:center' readonly = 'readonly'> - 
								<input type='text' value="<?php echo $nilai[kodeSatker]?>" size='10px' style='text-align:center' readonly = 'readonly'> - 
								<input type='text' value="<?php echo $nilai[Kode]?>" size='20px' style='text-align:center' readonly = 'readonly'> - 
								<input type='text' value="<?php echo $nilai[Ruangan]?>" size='5px' style='text-align:center' readonly = 'readonly'>
								<input type='hidden' name='fromsatker' value='<?=$nilai[OrigSatker_ID]?>' size='5px' style='text-align:center' readonly = 'readonly'>
							</div>
						</div>
						<div class="row">
							<ul>
								<li>
									<span class="span2">Nama Aset</span>
									<input type="text" style="width:180px;" readonly value="<?=$nilai[NamaAset]?>">
								</li>
								<li>
									<span class="span2">Satuan Kerja</span>
									<input type="text" style="width:180px;" readonly value="<?=$nilai[NamaSatker]?>">
								</li>
								<li>
									<span class="span2">Jenis barang</span>
									<input type="text" style="width:180px;" readonly value="<?=$nilai[Uraian]?>">
								</li>
							</ul>
						</div>
						<h5>Informasi Tambahan</h5>
						<div class="row">
							<ul>
								<li>
									<span class="span2">Nomor Kontrak</span>
									<input type="text" style="width:180px;" readonly value="<?=$nilai[NoKontrak]?>">
								</li>
								<li>
									<span class="span2">Operasional/Program</span>
									
									<select style='width:130px' readonly>
										<option value=''></option>
										<option value='0' <?=$select?>>Program</option>
										<option value='1' <?=$select2?>>Operasional</option>
									</select>
								</li>
								<li>
									<span class="span2">Kuantitas</span>
									<input type='text' readonly='readonly' style='width:40px; text-align:right' value='<?=$nilai[Kuantitas]?>'>
									Satuan
									<input type='text' readonly='readonly' style='width:130px' value='<?=$nilai[Satuan]?>'>
								</li>
								<li>
									<span class="span2">Cara Perolehan</span>

									<select style='width:130px' readonly>
										<option value='-'>-</option>
										<option value='sp2d' <?=$pilih?>>Pengadaan</option>
										<option value='hibah' <?=$pilih2?>>Hibah</option>
									</select>
								</li>
								<li>
									<span class="span2">Tanggal Perolehan</span>

									<input type='text' readonly='readonly' style='width:130px' value='<?=$nilai[TglPerolehan]?>'>
								</li>
								<li>
									<span class="span2">Alamat</span>

									<textarea readonly><?=$nilai[Alamat]?></textarea>
								</li>
								<li>
									<span class="span2">Lokasi</span>

									<input type='text' readonly='readonly' style='width:100px' value='<?=$nilai[NamaLokasi]?>'>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<?php
					$no++;
					}
				}			
				?>

			</div>
			<table width="100%">
                                    <tr>
                                        <td style="border: 1px solid #004933; height:25px; padding:2px; font-weight:bold;"><u style="font-weight:bold;">Daftar aset yang akan dibuatkan penetapan penggunaan :</u></td>
									</tr>
									<?php
									// $id =0;
									$no = 1;
									// pr($data);
									foreach ($data as $keys => $nilai)
									{
										
										if ($nilai['AsetOpr'] == 0)
										$select="selected='selected'";
										if ($nilai['AsetOpr'] ==1)
										$select2="selected='selected'";

										if($nilai['SumberAset'] =='sp2d')
										$pilih="selected='selected'";
										if($nilai['SumberAset'] =='hibah')
										$pilih2="selected='selected'";
										if ($nilai['Aset_ID'] !='')
										{
										echo "<tr>
									<td style='border: 1px solid #004933; height:50px; padding:2px;'>
									<table width='100%'>
									<tr>
									<td></td>
									<td>$no.</td>
									<input type='hidden' name='penggu_nama_aset[]' value='$nilai[Aset_ID]'>
									<input type='hidden' name='penggu_satker_aset[]' value='$nilai[kodeSatker]'>
									<td>$nilai[noRegister] - $nilai[kodeSatker]</td>
									<td align='right'><input type='button' id ='$nilai[Aset_ID]' value='View Detail' onclick='spoiler(this);'></td>
									</tr>

									<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>$nilai->NamaAset</td>
									</tr>
									<tfoot style='display:none;'>
									<tr>
									<td></td>
									<td></td>
									<td colspan=2>
									<div style='padding:10px; width:98%; height:220px; overflow:auto; border: 1px solid #dddddd;'>

									<table border=0 width=100%>
									<tr>
									<td>
									<input type='text' value='$nilai[Pemilik]' size='1px' style='text-align:center' readonly = 'readonly'> - 
									<input type='text' value='$nilai[kodeSatker]' size='10px' style='text-align:center' readonly = 'readonly'> - 
									<input type='text' value='$nilai[Kode]' size='20px' style='text-align:center' readonly = 'readonly'> - 
									<input type='text' value='$nilai[Ruangan]' size='5px' style='text-align:center' readonly = 'readonly'>
									<input type='hidden' name='fromsatker' value='$nilai[OrigSatker_ID]' size='5px' style='text-align:center' readonly = 'readonly'>
									</td>
									<td align='right'><input type='button' id ='sub$nilai[Aset_ID]' value='Sub Detail' onclick='spoilsub(this);'></td>
									</tr>
									</table>

									<div id='idv_basicinfo' style='padding:5px; border:1px solid #999999;'>
									<table width=100%>
									<tr>
									<td valign='top' align='left' width=10%>Nama Aset</td>
									<td valign='top' align='left' style='font-weight:bold'>
									$nilai[NamaAset]
									</td>
									</tr>

									<tr>
									<td valign='top' align='left'>Satuan Kerja</td>
									<td valign='top' align='left' style='font-weight:bold'>
									$nilai[NamaSatker]
									</td>
									</tr>

									<tr>
									<td valign='top' align='left'>Jenis Barang</td>
									<td valign='top' align='left' style='font-weight:bold'>
									$nilai[Uraian]
									</td>
									</tr>

									</table>
									</div>

									<div style='display:none; padding:5px; border:1px solid #999999;'>
									<table width=100%>
									<tr>
									<td width='*' align='left' style='background-color: #cccccc; padding:2px 5px 1px 5px;'>Informasi Tambahan</td>
									</tr>
									</table>

									<table>
									<tr>
									<td valign='top' style='width:150px;'>Nomor Kontrak</td>
									<td valign='top'><input type='text' readonly='readonly' style='width:170px' value='$nilai[NoKontrak]'></td>
									</tr>

									<tr>
									<td valign='top' style='width:150px;'>Operasional/Program</td>
									<td valign='top'>
									<select style='width:130px' readonly>
									<option value=''></option>
									<option value='0' $select>Program</option>
									<option value='1' $select2>Operasional</option>
									</select>
									</td>
									</tr>

									<tr>
									<td valign='top' style='width:150px;'>Kuantitas</td>
									<td valign='top'><input type='text' readonly='readonly' style='width:40px; text-align:right' value='$nilai[Kuantitas]'>
									Satuan
									<input type='text' readonly='readonly' style='width:130px' value='$nilai[Satuan]'>
									</td>
									</tr>

									<tr>
									<td valign='top' style='width:150px;'>Cara Perolehan</td>
									<td valign='top'>
									<select style='width:130px' readonly>
									<option value='-'>-</option>
									<option value='sp2d' $pilih>Pengadaan</option>
									<option value='hibah' $pilih2>Hibah</option>
									</select>
									</td>
									</tr>

									<tr>
									<td valign='top' style='width:150px;'>Tanggal Perolehan</td>
									<td valign='top'><input type='text' readonly='readonly' style='width:130px' value='$nilai[TglPerolehan]'></td>
									</tr>

									<tr>
									<td valign='top' style='width:150px;'>Nilai Perolehan</td>
									<td valign='top'><input type='text' readonly='readonly' style='width:130px; text-align:right' value='$nilai[NilaiPerolehan]'></td>
									</tr>

									<tr>
									<td valign='top' style='width:150px;'>Alamat</td>
									<td valign='top'><textarea style='width:90%' readonly>$nilai[Alamat]</textarea><br>
									RT/RW
									<input type='text' readonly='readonly' style='width:50px' value='$nilai[RTRW]'></td>
									</tr>

									<tr>
									<td valign='top' style='width:150px;'>Lokasi</td>
									<td valign='top'><input type='text' readonly='readonly' style='width:100px' value='$nilai[NamaLokasi]'></td>
									</tr>

									
									</table>

									</div>

									</div>
									</td>
									</tr>
									</tfoot>
									</table>
									</td>
									</tr>";
									$no++;
									}
								}			
							 ?>
										
									
                                </table><br/>
			<ul>
							<li>
								<span class="span2">Nomor Penetapan</span>
								<input type="text" name="penggu_penet_eks_nopenet" required="required" id="" style="width:180px;">&nbsp;<span id="errmsg"></span>
							</li>
							<li>
								<span class="span2">Tanggal Penetapan</span>
								<input type="text" name="penggu_penet_eks_tglpenet" required="required" id="datepicker" style="width:180px;" readonly="readonly">
							</li>
							<li>
								<span class="span2">Keterangan</span>
								<textarea name="penggu_penet_eks_ket" cols="50" rows="2"  required="required"></textarea>
							</li>
							<li>
								<span class="span2">&nbsp;</span>
								<input type="submit" name="penggunaan_eks" class="btn btn-primary" value="Penetapan Penggunaan">&nbsp;<a href="<?php echo $url_rewrite?>/module/penggunaan/penggunaan_penetapan_tambah_data.php?pid=1"><input type="button" class="btn" value="Batal"></a>
							</li>
						</ul>
						<table border="0" cellspacing="6" style="display: none">
                                                <tr>
                                                    <td>Desa</td>
                                                    <td>Kecamatan</td> 
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="p_desa" name="p_desa" value="" size="45"  readonly="readonly">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="p_kecamatan" name="p_kecamatan" value="" size="45" readonly="readonly" >
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Kabupaten</td>
                                                    <td>Provinsi</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="p_kabupaten" name="p_kabupaten" value=""size="45" readonly="readonly" >
                                                    </td>
                                                    <td>
                                                        <input type="text" id="p_provinsi" name="p_provinsi" value=""size="45" readonly="readonly" >
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </table>
						</form>
			
		</section>     
	</section>
	
<?php
	include"$path/footer.php";
?>
