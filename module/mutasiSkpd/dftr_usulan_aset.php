<?php
include "../../config/config.php";

$MUTASI = new RETRIEVE_MUTASI;
$menu_id = 78;
$SessionUser = $SESSION->get_session_user();
($SessionUser['ses_uid']!='') ? $Session = $SessionUser : $Session = $SESSION->get_session(array('title'=>'GuestMenu', 'ses_name'=>'menu_without_login')); 
$USERAUTH->FrontEnd_check_akses_menu($menu_id, $Session);
//pr($_POST);

?>

<?php
	include"$path/meta.php";
	include"$path/header.php";
	include"$path/menu.php";
	
?>
	<!-- SQL Sementara -->
	<?php
	//pr($_POST);
	$Mutasi_ID	= $_POST['Mutasi_ID'];
	$par_data_table="bup_pp_sp_tglusul={$_POST['bup_pp_sp_tglusul']}&bup_pp_sp_nousulan={$_POST['bup_pp_sp_nousulan']}&kodeSatker={$_POST['kodeSatker']}";
	//pr($par_data_table);
	
	?>
	<!-- End Sql -->
	<script>
		function AreAnyCheckboxesChecked () 
		{
			setTimeout(function() {
		  if ($("#Form2 input:checkbox:checked").length > 0)
			{
			    $("#submit").removeAttr("disabled");
			    updDataCheckbox('RVWPTUSMTS');
			}
			else
			{
			   $('#submit').attr("disabled","disabled");
			    updDataCheckbox('RVWPTUSMTS');
			}}, 300);
		}
		</script>
		<script>
    $(document).ready(function() {
    	  AreAnyCheckboxesChecked () 
          $('#usulan_aset_mts').dataTable(
                   {
                    "aoColumnDefs": [
                         { "aTargets": [2] }
                    ],
                    "aoColumns":[
                         {"bSortable": false},
                         {"bSortable": false,"sClass": "checkbox-column" },
                         {"bSortable": true},
                         {"bSortable": false},
                         // {"bSortable": false},
                         {"bSortable": false},
                         {"bSortable": false},
                         {"bSortable": false},
                         // {"bSortable": false},
                         {"bSortable": false}],
                    "sPaginationType": "full_numbers",

                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "<?=$url_rewrite?>/api_list/list_usulan_mutasi.php?<?php echo $par_data_table?>"
               }
                  );
      });
    </script>
	<section id="main">
		<ul class="breadcrumb">
			  <li><a href="#"><i class="fa fa-home fa-2x"></i>  Home</a> <span class="divider"><b>&raquo;</b></span></li>
			  <li><a href="#">Transfer SKPD</a><span class="divider"><b>&raquo;</b></span></li>
			  <li class="active">Daftar Penetapan Transfer SKPD</li>
			  <?php SignInOut();?>
			</ul>
			<div class="breadcrumb">
				<div class="title">Penetapan Transfer SKPD</div>
				<div class="subtitle">Daftar Penetapan Transfer SKPD</div>
			</div>	

		<div class="grey-container shortcut-wrapper">
				<a class="shortcut-link " href="<?=$url_rewrite?>/module/mutasiSkpd/list_usulan.php">
					<span class="fa-stack fa-lg">
				      <i class="fa fa-circle fa-stack-2x"></i>
				      <i class="fa fa-inverse fa-stack-1x">1</i>
				    </span>
					<span class="text">Usulan Transfer SKPD</span>
				</a>
				<a class="shortcut-link active" href="<?=$url_rewrite?>/module/mutasiSkpd/list_penetapan.php">
					<span class="fa-stack fa-lg">
				      <i class="fa fa-circle fa-stack-2x"></i>
				      <i class="fa fa-inverse fa-stack-1x">2</i>
				    </span>
					<span class="text">Penetapan Transfer SKPD</span>
				</a>
				<a class="shortcut-link" href="<?=$url_rewrite?>/module/mutasiSkpd/list_validasi.php">
					<span class="fa-stack fa-lg">
				      <i class="fa fa-circle fa-stack-2x"></i>
				      <i class="fa fa-inverse fa-stack-1x">3</i>
				    </span>
					<span class="text">Validasi Transfer SKPD</span>
				</a>
			</div>		

		<section class="formLegend">
		
			<div id="demo">
			<form name="myform" method="POST" ID="Form2" action="<?php echo "$url_rewrite/module/mutasiSkpd/"; ?>dftr_review_penetapan_usulan.php">
			<input type="hidden" name="Mutasi_ID" value="<?=$Mutasi_ID?>" />
			<table cellpadding="0" cellspacing="0" border="0" class="display table-checkable" id="usulan_aset_mts">
				<thead>
					<tr>
						
						<td align="left" colspan="6">
								<span><button type="submit" name="submit"  class="btn btn-info " id="submit" disabled/><i class="icon-plus-sign icon-white"></i>&nbsp;&nbsp;Penetapan Transfer SKPD</button></span>
						</td>
						<td align="right" colspan="2">
							<a href="<?php echo "$url_rewrite/module/mutasiSkpd/"; ?>filter_usulan.php" class="btn">Kembali Ke Pencarian</a>
						</td>
					</tr>
					<tr>
						<th>No</th>
						<th class="checkbox-column"><input type="checkbox" class="icheck-input" onchange="return AreAnyCheckboxesChecked();"></th>
						<th>Nomor Usulan</th>
						<th>Satker</th>
						<th>Jumlah Aset</th>
						<th>Tgl Usulan</th>
						<th>Nilai</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>			
					 <tr>
                        <td colspan="8">Data Tidak di temukkan</td>
                     </tr>
				</tbody>
				<tfoot>
					<tr>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
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
	include"$path/footer.php";
?>