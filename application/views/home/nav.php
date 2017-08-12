<div id="nav">
<ul>
<?php if($_SESSION['grup']==1){?>
<li <?php if($act==1){?>class="selected"<?php }?>>
<a href="<?php echo site_url('hom_desa/tambah_desa')?>">Tambah Desa</a>
</li>
<li <?php if($act==2){?>class="selected"<?php }?>>
<a href="<?php echo site_url('desa')?>">Daftar Desa</a>
</li>
<?php }?>

<?php if($_SESSION['grup']==2){?>
<li <?php if($act==3){?>class="selected"<?php }?>>
<a href="<?php echo site_url('hom_desa/form')?>">Identitas <?php echo ucwords(config_item('sebutan_desa'))?></a>
</li>
<?php }?>


<?php if($_SESSION['grup'] == 1 OR $_SESSION['grup'] == 2) { ?>
<li <?php if($act==4){?>class="selected"<?php }?>>
<a href="<?php echo site_url('pengurus')?>">Pemerintah <?php echo ucwords(config_item('sebutan_desa'))?></a>
</li>
<li <?php if($act==5){?>class="selected"<?php }?>>
<a href="<?php echo site_url('hom_desa/about')?>">SID</a>
</li>
<?php } ?>


<?php if($_SESSION['grup'] == 5) { ?>
<li <?php if($act==6){?>class="selected"<?php }?>>
<a href="<?php echo site_url('anjungan/form')?>">Pengajuan Permohonan</a>
</li>
<?php } ?>
</ul>
</div>
