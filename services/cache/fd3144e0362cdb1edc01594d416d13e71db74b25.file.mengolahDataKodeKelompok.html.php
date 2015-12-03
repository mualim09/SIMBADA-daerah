<?php /* Smarty version Smarty-3.1.15, created on 2015-12-03 10:25:02
         compiled from "app/view/module/mengolahDataKodeKelompok.html" */ ?>
<?php /*%%SmartyHeaderCode:461823915565fe9d9f305f3-87775556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd3144e0362cdb1edc01594d416d13e71db74b25' => 
    array (
      0 => 'app/view/module/mengolahDataKodeKelompok.html',
      1 => 1449138284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '461823915565fe9d9f305f3-87775556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_565fe9da0048e5_36431241',
  'variables' => 
  array (
    'basedomain' => 0,
    'JsonDecode' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565fe9da0048e5_36431241')) {function content_565fe9da0048e5_36431241($_smarty_tpl) {?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Mengolah Data Services Simbada <i>(Contoh)</i>
            <!-- <small>Daftar Aset Tetap</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <!-- <li><a href="#"> Daftar Aset Tetap</a></li> -->
            <li class="active">Kode Satker</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
         <div class="row">
              <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
home/mengolahData/?page=1">Penjelasan</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
home/mengolahData/?page=2">Daftar Aset Tetap</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
home/mengolahData/?page=3">Kode Satker</a></li>
                  <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
home/mengolahData/?page=4">Kode Kelompok</a></li>
                 
                </ul>
                <div class="tab-content">
                  <div id="tab_11" class="tab-pane active">
                    <div class="row">
                      <div class="col-md-12">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab_11">Get Data</a></li>
                            <li><a data-toggle="tab" href="#tab_21">Fetch Data</a></li>
                            <li><a data-toggle="tab" href="#tab_31">View Data</a></li>
                            
                          </ul>
                          <div class="tab-content">
                            <div id="tab_11" class="tab-pane active">
                              <b>Get Data Via Url:</b>
<pre style="font-weight: 600;">
&lt;?php
$url='http://localhost/simbadoetz/services/home/kelompok/?term=02.02';

$resultJsonEncode=file_get_contents($url);
?&gt;
</pre>
<b>Result :</b>

<pre style="font-weight: 600;">
[{"Kelompok_ID":"392","Golongan":"02","Bidang":"02","Kelompok":null,"Sub":null,"SubSub":null,"Kode":"02.02","Uraian":"Alat-alat Besar","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"393","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":null,"SubSub":null,"Kode":"02.02.01","Uraian":"Alat-Alat Besar Darat","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"394","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"01","SubSub":null,"Kode":"02.02.01.01","Uraian":"Tractor","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"395","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"01","SubSub":"01","Kode":"02.02.01.01.01","Uraian":"Crawler Tractor","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"396","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"01","SubSub":"02","Kode":"02.02.01.01.02","Uraian":"Wheel Tractor","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"397","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"01","SubSub":"03","Kode":"02.02.01.01.03","Uraian":"Swanp Tractor","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"398","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"01","SubSub":"04","Kode":"02.02.01.01.04","Uraian":"Tractor Lain-lain","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"399","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"02","SubSub":null,"Kode":"02.02.01.02","Uraian":"Grader","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"400","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"02","SubSub":"01","Kode":"02.02.01.02.01","Uraian":"Grader+Attachment","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"401","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"02","SubSub":"02","Kode":"02.02.01.02.02","Uraian":"Grader Towed Type","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"402","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"02","SubSub":"03","Kode":"02.02.01.02.03","Uraian":"Buldozer","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"403","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"02","SubSub":"04","Kode":"02.02.01.02.04","Uraian":"Draiglines","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"404","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"02","SubSub":"05","Kode":"02.02.01.02.05","Uraian":"Slovel Dozer","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"405","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"02","SubSub":"06","Kode":"02.02.01.02.06","Uraian":"Grader Lain-lain","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"406","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"03","SubSub":null,"Kode":"02.02.01.03","Uraian":"Excavator","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"407","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"03","SubSub":"01","Kode":"02.02.01.03.01","Uraian":"Clawler Excavator","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"408","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"03","SubSub":"02","Kode":"02.02.01.03.02","Uraian":"Wheel Exacvator","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"409","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"03","SubSub":"03","Kode":"02.02.01.03.03","Uraian":"Excavator Lain-lain","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"410","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"04","SubSub":null,"Kode":"02.02.01.04","Uraian":"Pile Driver","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"411","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"04","SubSub":"01","Kode":"02.02.01.04.01","Uraian":"Pile Driver","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"412","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"04","SubSub":"02","Kode":"02.02.01.04.02","Uraian":"Pile Driver Lain-lain","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"413","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"05","SubSub":null,"Kode":"02.02.01.05","Uraian":"Hauler","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"414","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"05","SubSub":"01","Kode":"02.02.01.05.01","Uraian":"Self Propelled Sraper","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"415","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"05","SubSub":"02","Kode":"02.02.01.05.02","Uraian":"Towed Scraper","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"416","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"05","SubSub":"03","Kode":"02.02.01.05.03","Uraian":"Dump Truck","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"417","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"05","SubSub":"04","Kode":"02.02.01.05.04","Uraian":"Lamp Wagen","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"418","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"05","SubSub":"05","Kode":"02.02.01.05.05","Uraian":"Lori","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"419","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"05","SubSub":"06","Kode":"02.02.01.05.06","Uraian":"Hauler Lain-lain","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"420","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"06","SubSub":null,"Kode":"02.02.01.06","Uraian":"Asphal Equipment","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"},{"Kelompok_ID":"421","Golongan":"02","Bidang":"02","Kelompok":"01","Sub":"06","SubSub":"01","Kode":"02.02.01.06.01","Uraian":"Asphal Mixing Plant","TipeAset":null,"FixAset":"0","Satuan":null,"Akt_KodeBarang":null,"Persediaan":"0"}]
</pre>

                            </div><!-- /.tab-pane -->
                            <div id="tab_21" class="tab-pane">
                            <b>Fetch Data dengan Json_decode :</b>
<pre style="font-weight: 600;">
&lt;?php
$url='http://localhost/simbadoetz/services/home/kelompok/?term=02.02';

$resultJsonEncode=file_get_contents($url);

$resultJsonDecode=json_decode($resultJson);
?&gt;
</pre>
                            <b>Result :</b>
<pre style="font-weight: 600;">
<?php echo pr($_smarty_tpl->tpl_vars['JsonDecode']->value);?>

</pre>

                            </div><!-- /.tab-pane -->
                            <div id="tab_31" class="tab-pane">
                              <pre style="font-weight: 600;">
&lt;?php
$url='http://localhost/simbadoetz/services/home/kelompok/?term=04.02';

$resultJsonEncode=file_get_contents($url);

$resultJsonDecode=json_decode($resultJson);

echo  "&lt;table border=&quot;1&quot; width=&quot;100%&quot;&gt;
            &lt;thead&gt;
              &lt;tr&gt;
                &lt;th&gt;Golongan&lt;/th&gt;
                &lt;th&gt;Bidang&lt;/th&gt;
                &lt;th&gt;Kode&lt;/th&gt;
                &lt;th&gt;Uraian&lt;/th&gt;
              &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
";
foreach ($resultJsonDecode as $key => $val){
        echo "&lt;tr&gt;";
        echo "&lt;td&gt;".$val->Golongan."&lt;/td&gt;";
        echo "&lt;td&gt;".$val->Bidang."&lt;/td&gt;";
        echo "&lt;td&gt;".$val->Kode."&lt;/td&gt;";
        echo "&lt;td&gt;".$val->Uraian."&lt;/td&gt;";
        echo "&lt;/tr&gt;";
}
echo "   &lt;tbody&gt;
      &lt;/table&gt;";
?&gt;
</pre>
                            <b>Result :</b>
          <table border="1" width="100%">
            <thead>
              <tr>
                <th>Golongan</th>
                <th>Bidang</th>
                <th>Kode</th>
                <th>Uraian</th>
              </tr>
            </thead>
            <tbody>
              
              <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['JsonDecode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['val']->value->Golongan;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['val']->value->Bidang;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['val']->value->Kode;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['val']->value->Uraian;?>
</td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
                            </div><!-- /.tab-pane -->
                          </div><!-- /.tab-content -->
                        </div><!-- nav-tabs-custom -->
                      </div><!-- /.col -->

                     
                    </div>
                  </div><!-- /.tab-pane -->
                  
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div>
         </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
  
<?php }} ?>
