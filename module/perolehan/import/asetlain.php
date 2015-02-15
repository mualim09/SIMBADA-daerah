<?php
include "../../../config/config.php";
include "excel_reader.php";
$menu_id = 10;
            $SessionUser = $SESSION->get_session_user();
            ($SessionUser['ses_uid']!='') ? $Session = $SessionUser : $Session = $SESSION->get_session(array('title'=>'GuestMenu', 'ses_name'=>'menu_without_login')); 
            $USERAUTH->FrontEnd_check_akses_menu($menu_id, $Session);
$RETRIEVE_PEROLEHAN = new RETRIEVE_PEROLEHAN;
if(isset($_GET['id'])){
	$dataArr = $RETRIEVE_PEROLEHAN->get_kontrak($_GET['id']);
	// $xlsData = $RETRIEVE_PEROLEHAN->get_tmpData('tmp_asetlain');
	
	$POST['page'] = intval($_GET['pid']);
	$par_data_table="bup_tahun={$POST['bup_tahun']}&bup_nokontrak={$POST['bup_nokontrak']}&jenisaset={$POST['jenisaset'][0]}&kodeSatker={$POST['kodeSatker']}&page={$POST['page']}";

} else{
	$dataArr = $RETRIEVE_PEROLEHAN->importing_xls2html($_FILES,$_POST);
}

?>

<?php
	include"$path/meta.php";
	include"$path/header.php";
	include"$path/menu.php";
	
?>
	<script>
		$(document).ready(function() {
	        $('#totalxls').autoNumeric('init', {mDec:0});
	        setTimeout(function() {
			    	getTotalValue('XLSIMP');
				}, 500);
          $('#importxls').dataTable(
                   {
                    "aoColumnDefs": [
                         { "aTargets": [2] }
                    ],
                    "aoColumns":[
                         {"bSortable": false},
                         {"bSortable": false,"sClass": "checkbox-column" },
                         {"bSortable": true},
                         {"bSortable": true},
                         {"bSortable": true},
                         {"bSortable": true},
                         {"bSortable": true},
                         {"bSortable": true}],
                    "sPaginationType": "full_numbers",

                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "<?=$url_rewrite?>/api_list/api_import_xls.php?<?php echo $par_data_table?>"
               }
                  );
	        
	    });

		function getCurrency(item){
	      $('#totalxls').val($(item).autoNumeric('get'));
	    }

	    function getTotalValue(item){
	    	$.post('<?=$url_rewrite?>/function/api/getapplist.php', {UserNm:'<?=$_SESSION['ses_uoperatorid']?>',act:item,sess:'<?=$_SESSION['ses_utoken']?>'}, function(data){
					var tmp;
					var nilai = 0;
					if(data){
						$.each(data, function(index, element) {
				            var raw = element.split(",");
							for(var i=0;i<raw.length;i++){
								tmp = raw[i].split("|");
								nilai = parseInt(nilai) + parseInt(tmp[1]*tmp[2]);
							}
				        });
					} else {
						nilai = 0;
					}
					
				    $("#totalxls").val(nilai);
				     $('#totalxls').autoNumeric('set', nilai);

				     var rule = nilai + parseInt($("#totalRBreal").val());
						if(rule > $("#spkreal").val()){
							$('#info').html('Nilai melebihin total SPK'); 
		                	$('#info').css("color","red");
							$('#btn-dis').attr("disabled","disabled");		
						} else {
							$('#info').html('');
						}
				 }, "JSON")
	    }

		function AreAnyCheckboxesChecked () 
		{
			setTimeout(function() {
			var totalnilai = 0;	
		  if ($("#Form2 input:checkbox:checked").length > 0)
			{
			    $("#btn-dis").removeAttr("disabled");
			    updDataCheckbox('XLSIMP');

			    setTimeout(function() {
			    	getTotalValue('XLSIMP');
				}, 500);
			}
			else
			{
			   $('#btn-dis').attr("disabled","disabled");
			   updDataCheckbox('XLSIMP');
			   setTimeout(function() {
			    	getTotalValue('XLSIMP');
				}, 500);
			}}, 100);
		}
	</script>
	<section id="main">
		<ul class="breadcrumb">
			  <li><a href="#"><i class="fa fa-home fa-2x"></i>  Home</a> <span class="divider"><b>&raquo;</b></span></li>
			  <li><a href="#">Perolehan Aset</a><span class="divider"><b>&raquo;</b></span></li>
			  <li><a href="#">Kontrak</a><span class="divider"><b>&raquo;</b></span></li>
			  <li><a href="#">Rincian Barang</a><span class="divider"><b>&raquo;</b></span></li>
			  <li class="active">Import xls</li>
			  <?php SignInOut();?>
			</ul>
			<div class="breadcrumb">
				<div class="title">Rincian Barang</div>
				<div class="subtitle">Import Data xls</div>
			</div>		

		<section class="formLegend">
			
		<div class="detailLeft">
						
						<ul>
							<li>
								<span class="labelInfo">No. Kontrak</span>
								<input type="text" value="<?=$dataArr['kontrak']['noKontrak']?>" disabled/>
							</li>
							<li>
								<span class="labelInfo">Tgl. Kontrak</span>
								<input type="text" value="<?=$dataArr['kontrak']['tglKontrak']?>" disabled/>
							</li>
						</ul>
							
					</div>
			<div class="detailRight">
						
						<ul>
							<li>
								<span class="labelInfo">Nilai SPK</span>
								<input type="text" id="spk" value="<?=number_format($dataArr['kontrak']['nilai'])?>" disabled/>
								<input type="hidden" id="spkreal" value="<?=$dataArr['kontrak']['nilai']?>" disabled/>
							</li>
							<li>
								<span  class="labelInfo">Total Rincian Barang</span>
								<input type="text" id="totalRB" value="<?=isset($dataArr['sumTotal']) ? number_format($dataArr['sumTotal']['total']) : '0'?>" disabled/>
								<input type="hidden" id="totalRBreal" value="<?=isset($dataArr['sumTotal']) ? $dataArr['sumTotal']['total'] : '0'?>" disabled/>
							</li>
							<li>
								<span  class="labelInfo">Total Nilai Data yang dipilih</span>
								<input type="text" id="totalxls" data-a-sep="," value="<?=number_format(0)?>" disabled/>
							</li>
							<li>
				                <span  class="span2">&nbsp;</span>
				                <div class="checkbox">
				                  <em id="info">
				                  </em>
				                </div>
				            </li>
						</ul>
							
					</div>
			<div style="height:5px;width:100%;clear:both"></div>
				<form action="hasil_kibe.php" method=POST name="checks" ID="Form2">
					<p><button type="submit" class="btn btn-success btn-small" id="btn-dis" disabled><i class="icon-plus-sign icon-white"></i>&nbsp;&nbsp;Pilih</button>
							&nbsp;</p>

						<div id="demo">
							
						<table cellpadding="0" cellspacing="0" border="0" class="display table-checkable" id="importxls">
							<thead>
								<tr>
									<th>No</th>
									<th class="checkbox-column"><input type="checkbox" class="icheck-input" onchange="return AreAnyCheckboxesChecked();"></th>
									<th>Kode Kelompok</th>
									<th>Nama Barang</th>
									<th>Kode Lokasi</th>
									<th>Jumlah</th>
									<th>Nilai</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
                                        <td colspan="10">Data Tidak di temukkan</td>
                                   </tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="8">&nbsp;</th>
									<!-- <th><label id=""><?=number_format($total)?></label></th> -->
								</tr>
							</tfoot>
						</table>
					
						</div>
						<input type="hidden" name="kontrakid" value="<?=$_POST['kontrakid']?>">
						<input type="hidden" name="jenisaset" value="<?=$_POST['jenisaset']?>">
						</form>
			<div class="spacer"></div>
			    
		</section> 
		     
	</section>
	
<?php
	include"$path/footer.php";
?>

