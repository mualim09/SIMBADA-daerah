<?php
ob_start();
include "../../config/config.php";

$PENGGUNAAN = new RETRIEVE_PENGGUNAAN;
      
        $menu_id = 30;
        $SessionUser = $SESSION->get_session_user();
		// pr($SessionUser);
        ($SessionUser['ses_uid']!='') ? $Session = $SessionUser : $Session = $SESSION->get_session(array('title'=>'GuestMenu', 'ses_name'=>'menu_without_login')); 
        // pr($SESSION);
		$USERAUTH->FrontEnd_check_akses_menu($menu_id, $SessionUser);
        // pr($USERAUTH);
        $paging = $LOAD_DATA->paging($_GET['pid']);    
        $ses_uid = $_SESSION['ses_uid'];
		// pr($_SESSION);
		if ($_POST['tampil2']){
            if ($_POST['penggu_penet_filt_add_nmaset'] =="" && $_POST['penggu_penet_filt_add_nokontrak']=="" && $_POST['skpd_id']==""){
		  ?>
        <script>
        // var r=confirm('Tidak ada isian filter');
        //     if (r==false){
        //     document.location='penggunaan_penetapan_filter2.php';
        //     }
        </script>
		<?php
            }
        }
        // pr($_POST);
        if (isset($_POST['tampil2'])){		

        	// pr($_POST);		
			// unset($_SESSION['ses_retrieve_filter_'.$menu_id.'_'.$SessionUser['ses_uid']]);
			// $parameter = array('menuID'=>$menu_id,'type'=>'checkbox','param'=>$_POST,'paging'=>$paging,'ses_uid'=>$ses_uid);
			// pr($parameter);
			// list($data,$dataAsetUser) = $RETRIEVE->retrieve_penetapan_penggunaan($parameter);
			// echo 'sini';
		}
		else {
			// $sessi = $_SESSION['ses_retrieve_filter_'.$menu_id.'_'.$SessionUser['ses_uid']];
			// $parameter = array('menuID'=>$menu_id,'type'=>'checkbox','param'=>$sessi,'paging'=>$paging,'ses_uid'=>$ses_uid);
			// list($data,$dataAsetUser) = $RETRIEVE->retrieve_penetapan_penggunaan($parameter);
			// echo'sana';
		}  
         ?>   
<?php
	include"$path/meta.php";
	include"$path/header.php";
	include"$path/menu.php";
	

	// pr($_POST);
	// exit;
	$data = $PENGGUNAAN->retrieve_penetapan_penggunaan($_POST);	
	// pr($data);
	// exit;
?>	

		
		<script language="Javascript" type="text/javascript">  
			$(document).ready(function() {
			
				
				var tes=document.getElementsByTagName('*');
				var button=document.getElementById('submit');
				var boxeschecked=0;
				for(k=0;k<tes.length;k++)
				{
					if(tes[k].className=='checkbox')
						{
							//
							tes[k].checked == true  ? boxeschecked++: null;
						}
				}
			//alert(boxeschecked);
				if(boxeschecked!=0){
					button.disabled=false;
				}
				else {
					button.disabled=true;
				}
			
			} );
			
			function enable(){  
			var tes=document.getElementsByTagName('*');
			var button=document.getElementById('submit');
			var boxeschecked=0;
			for(k=0;k<tes.length;k++)
			{
				if(tes[k].className=='checkbox')
					{
						//
						tes[k].checked == true  ? boxeschecked++: null;
					}
			}
			//alert(boxeschecked);
			if(boxeschecked!=0)
				button.disabled=false;
			else
				button.disabled=true;
			}
			function disable_submit(){
				var enable = document.getElementById('pilihHalamanIni');
				var disable = document.getElementById('kosongkanHalamanIni');
				var button=document.getElementById('submit');
				if (disable){
					button.disabled=true;
				} 
			}
			function enable_submit(){
				var enable = document.getElementById('pilihHalamanIni');
				var disable = document.getElementById('kosongkanHalamanIni');
				var button=document.getElementById('submit');
				if (enable){
					button.disabled=false;
				} 
			}
		</script>

          <section id="main">
			<ul class="breadcrumb">
			  <li><a href="#"><i class="fa fa-home fa-2x"></i>  Home</a> <span class="divider"><b>&raquo;</b></span></li>
			  <li><a href="#">Penggunaan</a><span class="divider"><b>&raquo;</b></span></li>
			  <li class="active">Penetapan Penggunaan</li>
			  <?php SignInOut();?>
			</ul>
			<div class="breadcrumb">
				<div class="title">Penetapan Penggunaan</div>
				<div class="subtitle">Daftar Data</div>
			</div>	
		<section class="formLegend">
			
			<div class="detailLeft">
					<span class="label label-success">Filter data: <?php echo $_SESSION['parameter_sql_total']?> filter (View seluruh data)</span>
			</div>
		
			<div class="detailRight" align="right">
						 <?php
								$offset = @$_POST['record'];
								$query_apl = "SELECT aset_list FROM apl_userasetlist WHERE aset_action = 'Penggunaan[]'";
										$result_apl = $DBVAR->query($query_apl) or die ($DBVAR->error());
										$data_apl = $DBVAR->fetch_object($result_apl);
										
										$array = explode(',',$data_apl->aset_list);
										
									foreach ($array as $id)
									{
										if ($id !='')
										{
										$dataAsetList[] = $id;
										}
									}
									
									if ($dataAsetList !='')
									{
										$explode = array_unique($dataAsetList);
									}
									
								?>
						<ul>
							<li>
								<a href="<?php echo"$url_rewrite/module/penggunaan/penggunaan_penetapan_filter2.php";?>" class="btn">
								Kembali ke halaman utama : Cari Aset</a>
							</li>
							<li>
								<input type="hidden" class="hiddenpid" value="<?php echo @$_GET['pid']?>">
								<input type="hidden" class="hiddenrecord" value="<?php echo @$_SESSION['parameter_sql_total']?>">
								   <ul class="pager">
										<li><a href="#" class="buttonprev" >Previous</a></li>
										<li>Page</li>
										<li><a href="#" class="buttonnext">Next</a></li>
									</ul>
							</li>
						</ul>
							
					</div>
			<div style="height:5px;width:100%;clear:both"></div>
			
			
			<div id="demo">
			<form name="myform" method="POST" action="<?php echo "$url_rewrite/module/penggunaan/"; ?>penggunaan_penetapan_eksekusi_data.php">
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
				<thead>
					<tr>
						<td width="130px"><span><a href="javascript:void(0)" onclick="enable_submit()" id="pilihHalamanIni"><u>Pilih halaman ini</u></a></span></td>
						<td  align="left"><a href="javascript:void(0)" onclick="disable_submit()" id="kosongkanHalamanIni" ><u>Kosongkan halaman ini</u></a></td>
						<td align="right" >
								<input type="submit" name="submit2" value="Penetapan Penggunaan" id="submit" disabled/>
							<input type="hidden" name="jenisaset" value="<?php echo implode(',', $_POST['jenisaset'])?>">
						</td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Kode Lokasi</th>
						<th>SKPD</th>
					</tr>
				</thead>
				<tbody>		
				<?php

				  if (!empty($data))
					{
					
						$no = 1;
						$page = @$_GET['pid'];
						if ($page > 1){
							$no = intval($page - 1 .'01');
						}else{
							$no = 1;
						}
						// pr($data);
						foreach ($data as $key => $value)
						{
						?>	  
					<tr class="gradeA">
						<td>
							<input type="checkbox" id="checkbox" class="checkbox" onchange="enable()" name="Penggunaan[]" value="<?php echo $value['Aset_ID'];?>" >
							
							
						</td>
						<td><?php echo $value['kodeKelompok']?></td>
						<td style="font-weight:bold;"><?php echo $value['Uraian']?></td>
						<td style="font-weight:bold;"><?php echo $value['kodeLokasi']?></td>
						<td style="font-weight:bold;"><?php echo $value['kodeSatker']?></td>
						
					</tr>

					 <?php 
					$no++; 
					//$pid++; 
					} 
				}
				 else
				{
					$disabled = 'disabled';
				}
				?>
				</tbody>
				<tfoot>
					<tr>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
					</tr>
				</tfoot>
			</table>
			</form>
			</div>
			<div class="spacer"></div>
			
			
		</section> 
	</section>
<?php
include "$path/footer.php";
?>