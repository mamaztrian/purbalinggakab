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

<?php if ($this->session->flashdata('alert1')): ?>
<div class="alert alert-success">
<?php echo $this->session->flashdata('alert1'); ?>
</div>
<?php endif; ?>

<fieldset><legend><h2><center>Daftar Seluruh Website Portal</center></h2></legend></fieldset>
<br/>
<br/>
<table width="100%" cellspacing="0" class="table table-striped table-bordered" id="datatables-1" >
<br>
<br>
	<thead>
		<tr>
			<th>Nama Instansi</th>
			<th>Alamat Website</th>
			<th>Kategori</th>
			<th><center>Acton</center></th>
		</tr>
	</thead>
	<thead>
	 <tbody>

	 <?php foreach ($data as $v): ?>
		<tr>
			<td><?php echo $v->deskripsi_lengkap ?></td>
			<td><?php echo $v->alamat_web ?></td>
			<td><?php echo $v->nama_kategori ?></td>
			<td align="center">
					<a href="<?php echo base_url('Xxdmin/ubah_data/'.$v->id_web); ?>"> <button class="btn btn-success btn-xs">Ubah</button></a>
					<a href="<?php echo base_url('Xxdmin/delete_web/'.$v->id_web) ?>"><button class='btn btn-danger btn-xs'>Hapus</button></a>
			</td>
		</tr>
		<?php endforeach; ?>

		</tbody>
	</thead>
</table>
	
</body>
</html>