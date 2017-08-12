
<div id="pageC">
<table class="inner">
<tr style="vertical-align:top">
<td class="side-menu">


</td>

<td style="background:#fff;padding:0px;"> 
<div class="content-header">
<h3>Permohonan Cetak Surat</h3>
</div>


<div id="contentpane">
<form id="validasi" action="<?php echo $form_action?>" method="POST" enctype="multipart/form-data">
<div class="ui-layout-center" id="maincontent" style="padding: 5px;">


<table class="form">

<tr>
<th width="150 px">Permohonan Cetak Surat</th>
<td>
<select name="permohonan">
	<option value="Keterangan Pengantar">Keterangan Pengantar</option>
	<option value="Keterangan Penduduk">Keterangan Penduduk</option>
	<option value="Biodata Penduduk">Biodata Penduduk</option>
	<option value="Keterangan Pindah Penduduk">Keterangan Pindah Penduduk</option>
	<option value="Keterangan Jual Beli">Keterangan Jual Beli</option>
	<option value="Pengantar Surat Ket Catatan Kepolisian">Pengantar Surat Ket Catatan Kepolisian</option>
	<option value="Keterangan KTP Dalam Proses">Keterangan KTP Dalam Proses</option>
	<option value="Keterangan Beda Identitas">Keterangan Beda Identitas</option>
	<option value="Keterangan Bepergian/Jalan">Keterangan Bepergian/Jalan</option>
	<option value="Keterangan Kurang Mampu">Keterangan Kurang Mampu</option>
	<option value="Pengantar Izin Keramaian">Pengantar Izin Keramaian</option>
	<option value="Pengantar Laporan Kehilangan">Pengantar Laporan Kehilangan</option>
	<option value="Keterangan Usaha">Keterangan Usaha</option>
	<option value="Keterangan Jamkesos">Keterangan Jamkesos</option>
	<option value="Keterangan Domisili Usaha">Keterangan Domisili Usaha</option>
	<option value="Keterangan Kelahiran">Keterangan Kelahiran</option>
	<option value="Permohonan Akta Lahir">Permohonan Akta Lahir</option>
	<option value="Pernyataan Belum Memiliki Akta Lahir">Pernyataan Belum Memiliki Akta Lahir</option>
	<option value="Permohonan Duplikat Akta Lahir">Permohonan Duplikat Kelahiran</option>
	<option value="Keterangan Kematian">Keterangan Kematian</option>
	<option value="Keterangan Lahir Mati">Keterangan Lahir Mati</option>
	<option value="Keterangan Untuk Nikah (N-1 s/d N-7)">Keterangan Untuk Nikah (N-1 s/d N-7)</option>
	<option value="Keterangan Pergi Kawin">Keterangan Pergi Kawin</option>
	<option value="Keterangan Wali Hakim">Keterangan Wali Hakim</option>
	<option value="Permohonan Duplikat Surat Nikah">Permohonan Duplikat Surat Nikah</option>
	<option value="Permohonan Cerai">Permohonan Cerai</option>
	<option value="Keterangan Pengantar Rujuk/Cerai">Keterangan Pengantar Rujuk/Cerai</option>
	<option value="Permohonan Kartu Keluarga">Permohonan Kartu Keluarga</option>
	<option value="Domisili Usaha">Domisili Usaha</option>
</select>
</td>

</tr>

<tr>
<th>
Keterangan tambahan
</th>
</tr>
<tr>
<td colspan="2">
<textarea name="ket" rows="10" cols="30" style="width: 100%; height: 100%">
<?php echo $anjungan['ket']?>
</textarea>
</td>
</tr>


</table>

   
<div class="ui-layout-south panel bottom">
<div class="left">
<a href="<?php echo site_url()?>hom_desa" class="uibutton icon prev">Kembali</a>
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
