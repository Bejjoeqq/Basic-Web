<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
	<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
<table border="1" id="customers" style="margin: auto;">
	<thead>
		<a title="Tambah" class="btn btn-success" style="margin: 10px"
					href="<?php echo site_url('Mailtype/index/'); ?>">
					Tambah
				</a>
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th width="70">Aksi</th>
		</tr>
	</thead>
<tbody>
<?php
	$x=1;
	foreach ($data->result() as $row) 
	{
		?>
		<tr>
			<td><?php echo $x ?></td>
			<td><?php echo $row->fullname; ?></td>
			<td><?php echo $row->username; ?></td>
			<td><?php echo $row->password; ?></td>
			<td><?php echo $row->level; ?></td>
			<td>
				<a title="Edit" class='btn btn-success'
					href="<?php echo site_url('Mailtype/edit/'. 
					$row->id); ?>">
					Edit
				</a>
				<a title="Hapus" class='btn btn-warning'
					onclick="return alertDelete();"
					href="<?php echo site_url('Mailtype/delete/'. 
					$row->id); ?>">
					Hapus
				</a>
			</td>
		</tr>
	<?php
	$x++;
	}
	?>
</tbody>
</table>
<script type="text/javascript">
	function alertDelete()
	{
		var ret = confirm("Yakin ingin menghapus ?");
		if (!ret) 
		{
			return false;
		}
	}
</script>
</body>
</html>