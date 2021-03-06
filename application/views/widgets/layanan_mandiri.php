<!-- widget Layanan Mandiri -->
<?php
if(!isset($_SESSION['mandiri']) OR $_SESSION['mandiri']<>1){

  if($_SESSION['mandiri_wait']==1){
  ?>
    <div class="box box-primary box-solid">
      <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i> Layanan Mandiri</h3><br />
        Silahkan datang atau hubungi operator kelurahan untuk mendapatkan kode PIN Anda.
      </div>
      <div class="box-body">
        <h4>Gagal 3 kali, silahkan coba kembali dalam <?php echo waktu_ind((time()- $_SESSION['mandiri_timeout'])*(-1));?> detik lagi</h4>
          <div id="note">
            Login Gagal. Username atau Password yang Anda masukkan salah!
          </div>
      </div>
    </div>
  <?php }else{ ?>
<div class="box box-primary box-solid">
  <div class="box-header">
    <h3 class="box-title"><i class="fa fa-user"></i> Layanan Mandiri</h3><br />
    Silahkan datang atau hubungi operator kelurahan untuk mendapatkan kode PIN Anda.
  </div>
  <div class="box-body">
    <h4>Masukan NIK dan PIN</h4>
    <form action="<?php echo site_url('first/auth')?>" method="post">
    <input name="nik" type="text" placeholder="NIK" value="" required>
    <input name="pin" type="password" placeholder="PIN" value="" required>
    <button type="submit" id="but">Masuk</button>
      <?php  if($_SESSION['mandiri_try'] AND isset($_SESSION['mandiri']) AND $_SESSION['mandiri']==-1){ ?>
      <div id="note">
        Kesempatan mencoba <?php echo ($_SESSION['mandiri_try']-1); ?> kali lagi.
      </div>
      <?php }?>
      <?php  if(isset($_SESSION['mandiri']) AND $_SESSION['mandiri']==-1){ ?>
      <div id="note">
        Login Gagal. Username atau Password yang Anda masukkan salah!
      </div>
      <?php }?>
    </form>
  </div>
</div>
<?php }
}else{
?>
<div class="box box-primary box-solid">
  <div class="box-header">
    <h3 class="box-title"><i class="fa fa-user"></i> Layanan Mandiri</h3>
  </div>
  <div class="box-body">
  <ul>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
    <td width="25%" height="30">&nbsp;&nbsp;Nama</td>
    <td width="2%" align="center" valign="middle">:</td>
    <td width="73%">&nbsp;&nbsp;<?php echo $_SESSION['nama'];?></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#eee">&nbsp;&nbsp;NIK</td>
    <td align="center" valign="middle" bgcolor="#eee">:</td>
    <td bgcolor="#eee">&nbsp;&nbsp;<?php echo $_SESSION['nik'];?></td>
  </tr>
  <tr>
    <td height="30">&nbsp;&nbsp;No KK</td>
    <td align="center" valign="middle">:</td>
    <td >&nbsp;&nbsp;<?php echo $penduduk['no_kk']?></td>
  </tr>
  <tr>
    <td colspan="3"><h4><a href="<?php echo site_url();?>first/mandiri/1/1" class=""><button type="button" class="btn btn-primary btn-block">PROFIL</button></a> </h4></td>
  </tr>
  <tr>
    <td colspan="3"><h4><a href="<?php echo site_url();?>first/mandiri/1/2" class=""><button type="button" class="btn btn-primary btn-block">LAYANAN</button></a> </h4></td>
  </tr>
  <tr>
    <td colspan="3"><h4><a href="<?php echo site_url();?>first/mandiri/1/3" class=""><button type="button" class="btn btn-primary btn-block">LAPOR</button></a> </h4></td>
  </tr>
  <tr>
    <td colspan="3"><h4><a href="<?php echo site_url();?>first/logout"  class=""><button type="button" class="btn btn-danger btn-block">KELUAR</button></a></h4></td>
  </tr>
</table>
  </div>
</div>
<?php
  if(isset($_SESSION['lg']) AND $_SESSION['lg']==1){
  ?>
    <div class="box box-primary box-solid">
      <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i> Layanan Mandiri</h3><br />
        Untuk keamanan silahkan ubah kode PIN Anda.
      </div>
      <div class="box-body">
        <h4>Masukkan PIN Baru</h4>
        <form action="<?php echo site_url('first/ganti')?>" method="post">
          <input name="pin1" type="password" placeholder="PIN" value="">
          <input name="pin2" type="password" placeholder="Ulangi PIN" value="">
          <button type="submit" id="but">Ganti</button>
        </form>
        <?php if ($flash_message) { ?>
          <div id="notification" class='box-header label-danger'><?php echo $flash_message ?></div>
          <script type="text/javascript">
          $('document').ready(function(){
            $('#notification').delay(4000).fadeOut();
          });
          </script>
        <?php } ?>

        <div id="note">
          Silahkan coba login kembali setelah PIN baru disimpan.
        </div>
      </div>
    </div>
  <?php }else if(isset($_SESSION['lg']) AND $_SESSION['lg']==2){?>


    <div class="box box-primary box-solid">
      <div class="box-header">
        <h3 class="box-title"><i class="fa fa-user"></i> Layanan Mandiri</h3><br />
        Untuk keamanan silahkan ubah kode PIN Anda.
      </div>
      <div class="box-body">
          <div id="note">
            PIN Baru berhasil Disimpan!
          </div>
      </div>
    </div>

    <?php
    unset($_SESSION['lg']);
  }


}
?>

