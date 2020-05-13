<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
<h2><center>Ubah Data Portal </center></h2>
<br>
<br>
	<?php if ($this->session->flashdata('alert')): ?>
    <div class="alert alert-success">
    <?php echo $this->session->flashdata('alert'); ?>
    </div>
	<?php endif; ?>

<?php echo form_open(''); ?>

<label>Nama Website</label>
<br>
<input type="text" name="NAMA" class="form-control" value="<?php echo $editdata->nama_web; ?>" required="required" placeholder="Nama Website">
<br>
<label>Nama Lengkap Instansi</label>
<br>
<input type="text" name="DESKRIPSI" class="form-control" value="<?php echo $editdata->deskripsi_lengkap; ?>" placeholder="Nama Lengkap Instansi">
<br>
<label>Link Website</label>
<br>
<textarea name="LINK" value="" required="required" class="form-control" ><?php echo $editdata->alamat_web ?></textarea>
<br>
<label>Deskripsi</label>
<br>
<input type="text" name="KETERANGAN" class="form-control" value="<?php echo $editdata->keterangan; ?>" placeholder="Deskripsi ( Boleh Dikosongkan )">
<br>
<label>Pilih Kategori</label>
<br>


<?php 
		$data1 = $this->db->query('SELECT * FROM tbl_kategori');
		foreach ($data1->result() as $row) 
		{
			$id = $row->id_kategori;
			if ($editdata->id_kategori == $id) {
				$nama = $row->nama_kategori;
		    }
		}
 ?>

<select name="KATEGORI" class="form-control" >
	<option value="<?php echo $editdata->id_kategori ?>" selected="selected"><?php echo $nama;  ?></option>
	<?php foreach ($data as $v): ?>
	<option value="<?php echo $kd1 = $v->id_kategori ?>"><?php echo $v->nama_kategori ?></option>
	<br>
    <?php endforeach; ?>

</select>
<br>
<br>
<input type="submit" name="submit" class="btn btn-success"   required="required" value="Perbarui">		
<?php echo form_close(); ?>

</body>
</html>