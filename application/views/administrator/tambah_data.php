<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
<h2><center>Tambah Data Portal </center></h2>
<br>
<br>
	<?php if ($this->session->flashdata('alert')): ?>
    <div class="alert alert-success">
    <?php echo $this->session->flashdata('alert'); ?>
    </div>
	<?php endif; ?>

<?php echo form_open('Xxdmin/tambah_data'); ?>
<label>Nama Website</label>
<br>
<input type="text" name="NAMA" class="form-control" value="" required="required" placeholder="Nama Website">
<br>
<label>Nama Lengkap Instansi</label>
<br>
<input type="text" name="DESKRIPSI" class="form-control" value="" required="required" placeholder="Nama Lengkap Instansi">
<br>
<label>Link Website</label>
<br>
<textarea name="LINK" value="" required="required" class="form-control" ></textarea>
<br>
<label>Deskripsi</label>
<br>
<input type="text" name="KETERANGAN" class="form-control" value="" placeholder="Deskripsi ( Boleh Dikosongkan )">
<br>
<label>Pilih Kategori</label>
<br>

<select name="KATEGORI" class="form-control" >

	<option value="none" selected="selected">-- Pilihan --</option>
	<?php foreach ($data as $v): ?>
	<option value="<?php echo $v->id_kategori ?>"><?php echo $v->nama_kategori ?></option>
	<br>
    <?php endforeach; ?>

</select>
<br>
<a href="<?php echo base_url('Xxdmin/tambah_kategori') ?>">(+) Tambah Kategori</a>
<br>
<br>
<input type="submit" name="submit" class="btn btn-success"   required="required" value="Submit">		
<input type="reset" name="reset" class="btn btn-success"   required="required" value="Reset">
<?php echo form_close(); ?>

<br>
<br>


</body>
</html>