<?php
    include "../../config/config.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$MUTASI = new RETRIEVE_MUTASI_KAPITALISASI;
    
$menu_id = 79;
($SessionUser['ses_uid']!='') ? $Session = $SessionUser : $Session = $SESSION->get_session(array('title'=>'GuestMenu', 'ses_name'=>'menu_without_login')); 
$SessionUser = $SESSION->get_session_user();
$USERAUTH->FrontEnd_check_akses_menu($menu_id, $SessionUser);

if($_POST['cekAll'] == 1){
    $id = $_POST['usulanID'];
    $log = "hapus_aset_usulan_mtskptls_".$id;

    $status=exec("php hapus_aset_usulan_mts_helper_all.php $id > ../../log/$log.txt 2>&1 &");
    echo "<meta http-equiv=\"Refresh\" content=\"0; url={$url_rewrite}/module/mutasiKptls/list_usulan.php?id=$id\">";    
    exit;
}else{
    $id = $_POST['usulanID'];
    $log = "hapus_aset_usulan_mtskptls_".$id;

    $apl_userasetlistHPS = $MUTASI->apl_userasetlistHPS("DELUSMTSKPTLS");
    //pr($apl_userasetlistHPS);
    $addExplode = explode(",",$apl_userasetlistHPS[0]['aset_list']);
    $cleanArray = array_filter($addExplode);
    $implodeAset_ID = implode(",",$cleanArray);
    $arr = array("0"=>$implodeAset_ID);
    /*pr($apl_userasetlistHPS);
    pr($cleanArray);
    pr($implodeAset_ID);
    pr($data);*/
    $data = $arr['0'];
    //pr($data);
    //$data = $apl_userasetlistHPS['0']['aset_list'];
    //pr($data);
    //exit;
    $data_delete=$MUTASI->apl_userasetlistHPS_del("DELUSMTSKPTLS");
    

    $status=exec("php hapus_aset_usulan_mts_helper.php $id $data > ../../log/$log.txt 2>&1 &");
    echo "<meta http-equiv=\"Refresh\" content=\"0; url={$url_rewrite}/module/mutasiKptls/list_usulan.php?id=$id\">";    
    exit;
}
    
?>
