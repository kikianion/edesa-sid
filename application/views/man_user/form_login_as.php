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
<div class="ui-layout-north panel"><h3>Login Sebagai Admin Desa</h3>
</div>
<form id="validasi" action="<?php echo $form_action?>" method="POST" enctype="multipart/form-data">
<div class="ui-layout-center" id="maincontent" style="padding: 5px;">
<table class="form">
<tr>
<th>Desa</th>
<td>
<?php
//abdulrohman
?>
<select name="desa">

<?php  foreach($desa as $data){ ?>
<option value="<?php echo($data['desa']);?>">
<?php 
	echo($data['desa']); 
?> </option> 
<?php 
} 

?>
</select>

</td>
</tr>
</table>
</div>

<div class="ui-layout-south panel bottom">
<div class="left">
<a href="<?php echo site_url()?>hom_desa" class="uibutton icon prev">Kembali</a>
</div>
<div class="right">
<div class="uibutton-group">
<button class="uibutton confirm" type="submit" >LOGIN</button>
</div>
</div>
</div> </form>
</div>
</td></tr></table>
</div>
