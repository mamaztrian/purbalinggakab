<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>

<br>
	<?php if ($this->session->flashdata('alert')): ?>
    <div class="alert alert-success">
    <?php echo $this->session->flashdata('alert'); ?>
    </div>
	<?php endif; ?>

<?php echo form_open(''); ?>

<label>Nama Kategori</label>
<br>
<input type="text" name="NAMA_KATEGORI" class="form-control" value="<?php echo $editdata->nama_kategori; ?>" required="required" placeholder="Nama Kategori">
<br>
<input type="submit" name="submit" class="btn btn-success" required="required" value="Perbarui">		
<?php echo form_close(); ?>

<br>
<br>


</body>
</html>
</body>
</html>