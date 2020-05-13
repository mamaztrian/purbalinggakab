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
<?php foreach ($data_admin as $a ): ?>
<label>Nama Administrator</label>
<br>
<input type="text" name="NAMA_ADMIN" class="form-control" value="<?php echo $a->nama_admin ?>" required="required" placeholder="Nama Administator">
<br>
<label>Username</label>
<br>
<input type="text" name="USERNAME" class="form-control" value="<?php echo $a->username ?>" required="required" placeholder="Username">
<br>
<label>Password</label>
<br>
<input type="password" name="PASSWORD" class="form-control" value="" required="required" placeholder="Password">
<br>
<br>
<?php endforeach; ?>
<input type="submit" name="submit" class="btn btn-success" required="required" value="Perbarui">		
<?php echo form_close(); ?>

<br>
<br>


</body>
</html>
</body>
</html>