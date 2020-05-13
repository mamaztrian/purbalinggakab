<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php if ($this->session->flashdata('alert')): ?>
    <div class="alert alert-success">
    <?php echo $this->session->flashdata('alert'); ?>
    </div>
	<?php endif; ?>

<?php echo form_open('Xxdmin/tambah_kategori'); ?>
<label>Nama Kategori</label>
<br>
<input type="text" name="NAMA" value="" placeholder="Nama Kategori" class="form-control">

<br>
<br>
<input type="submit" name="submit" class="btn btn-success"   required="required" value="Tambah">		
<input type="reset" name="reset" class="btn btn-success"   required="required" value="Reset">
<?php echo form_close(); ?>

<br>
<br>
<fieldset><legend><h2><center>Daftar Seluruh Kategori</center></h2></legend></fieldset>
<br/>
<br/>
<table width="100%" cellspacing="0" class="table table-striped table-bordered" id="datatables-1" >
<br>
<br>
	<thead>
		<tr>
			<th>Nama Kategori</th>
			<th><center>Action</center></th>
		</tr>
	</thead>
	<thead>
	 <tbody>

	 <?php foreach ($data as $v): ?>
		<tr>
			<td><?php echo $v->nama_kategori ?></td>
			<td align="center">
					<a href="<?php echo base_url('Xxdmin/updt_kategori/'.$v->id_kategori) ?>"><button class="btn btn-success btn-xs"> Ubah</button></a>
			</td>
		</tr>
	  <?php endforeach; ?>

		</tbody>
	</thead>
</table>


</body>
</html>