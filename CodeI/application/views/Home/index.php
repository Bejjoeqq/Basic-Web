<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
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
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->tempat_lahir; ?></td>
			<td><?php echo $row->tanggal_lahir; ?></td>
			<td><?php echo $row->alamat; ?></td>
			<td>
				<a title="Edit" 
					href="<?php echo site_url('Home/edit/'. 
					$row->ID); ?>">
					Edit
				</a>
				<a title="Hapus" 
					onclick="return alertDelete();"
					href="<?php echo site_url('Home/delete/'. 
					$row->ID); ?>">
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