<script>
$(function(){
if ($('input[name=group]:checked').next('label').text()=='SKPD' || $('input[name=group]:checked').next('label').text()=='UPTD'){
$('tr.skpd_uptd').show();
}
$('input[name=group]').click(function(){
if ($(this).next('label').text()=='SKPD' || $(this).next('label').text()=='UPTD'){
$('tr.skpd_uptd').show();
} else {
$('tr.skpd_uptd').hide();
}
});
if ($('input[name=group]:checked').next('label').text()=='SKPD'){
$('tr.skpd').show();
}
$('input[name=group]').click(function(){
if ($(this).next('label').text()=='SKPD'){
$('tr.skpd').show();
} else {
$('tr.skpd').hide();
}
});
if ($('input[name=group]:checked').next('label').text()=='UPTD'){
$('tr.uptd').show();
}
$('input[name=group]').click(function(){
if ($(this).next('label').text()=='UPTD'){
$('tr.uptd').show();
} else {
$('tr.uptd').hide();
}
});
});
</script>

<div id="pageC">
<table class="inner">
<tr style="vertical-align:top">
<td style="background:#fff;padding:0px;">

<div class="content-header">

</div>
<div id="contentpane">
<div class="ui-layout-north panel"><h3>Form Manajemen User</h3>
</div>
<form id="validasi" action="<?php echo $form_action?>" method="POST" enctype="multipart/form-data">
<div class="ui-layout-center" id="maincontent" style="padding: 5px;">
<table class="form">
<tr>
<th width="100">Group</th>
<td>
<div class="uiradio">
<?php $ch='checked'; $sl='selected'?>
<?php if($_SESSION['grup'] == '2' || $_SESSION['grup'] == '1' ){?>
<input type="radio" id="group5" name="id_grup" value="5"/<?php if($user['id_grup'] == '5' OR $user['id_grup'] == ''){echo $ch;}?>><label for="group4">Penduduk</label>
<input type="radio" id="group2" name="id_grup" value="2"/<?php if($user['id_grup'] == '2'){echo $ch;}?>><label for="group2">Admin Desa</label>
<?php }?>
<?php if($_SESSION['grup'] == '1'){?>
<input type="radio" id="group1" name="id_grup" value="1"/<?php if($user['id_grup'] == '1'){echo $ch;}?>><label for="group1">Super Admin</label>
<?php }?>
</div>
</td>
</tr>
<tr>
<th>Desa</th>
<td>
<?php
//abdulrohman
?>
<select name="desa">

<?php  foreach($desa as $data){ ?>

<option value="<?php echo($data['desa']);?>"
<?php 
if($user['desa'] == $data['desa']){ 
	echo($sl);

}
?>
>
<?php 
	echo($data['desa']); 
?> </option> 
<?php 
} 

?>
</select>

</td>
</tr>
<tr>
<th>Username</th>
<td><input name="username" type="text" class="inputbox required" size="40" value="<?php echo $user['username']?>"/></td>
</tr>
<tr>
<th>Password</th>
<td><input name="password" type="password" class="inputbox" size="20" <?php if($user){?>value="radiisi"<?php }?>/></td>
</tr>
<tr>
<th>Nama</th>
<td><input name="nama" type="text" class="inputbox" size="40" value="<?php echo $user['nama']?>"/></td>
</tr>
<tr>
<th>Nomor HP</th>
<td><input name="phone" type="text" class="inputbox" size="20"  value="<?php echo $user['phone']?>"/></td>
</tr>
<tr>
<th>Mail</th>
<td><input name="email" type="text" class="inputbox" size="20"  value="<?php echo $user['email']?>"/></td>
</tr>

<tr>
<th class="top">Foto</th>
<td>
<div class="userbox-avatar">
<?php if($user['foto']){?>
<img src="<?php echo AmbilFoto($user['foto'])?>" alt=""/>
<?php }else{?>
<img src="<?php echo base_url()?>assets/files/user_pict/kuser.png" alt=""/>
<?php }?>
</div>
</td>
<input type="hidden" name="old_foto" value="<?php echo $user['foto']?>">
</tr>
<tr>
<th>Ganti Foto</th>
<td><input type="file" name="foto" /> <span style="color: #aaa;">(Kosongi jika tidak ingin merubah foto)</span></td>
</tr>
</table>
</div>

<div class="ui-layout-south panel bottom">
<div class="left">
<a href="<?php echo site_url()?>man_user" class="uibutton icon prev">Kembali</a>
</div>
<div class="right">
<div class="uibutton-group">
<button class="uibutton" type="reset">Clear</button>
<button class="uibutton confirm" type="submit" >Simpan</button>
</div>
</div>
</div> </form>
</div>
</td></tr></table>
</div>