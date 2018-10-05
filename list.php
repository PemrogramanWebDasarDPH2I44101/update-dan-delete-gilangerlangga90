<?php
require_once("db.php");
?>
<table border="1">
	<thead>
		<th> Nama </th>
		<th> NIM </th>
		<th> Tanggal Lahir</th>
		<th> Aksi </th>
	</thead>

	<body>
		<?php
		$sql = "SELECT * FROM mahasiswa";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
				 <tr>
				 <td><?php echo $row["nim"] ?></td>
				 <td><?php echo $row["nama"] ?></td>
				 <td><?php echo $row["tgl_lahir"] ?></td>
				 <td><a href='update.php?id= <?php echo $row['id']?>'>Update</a> 
				&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
				<a href='delete.php?id=<?php echo $row['id']?>'> Delete </a></td>
				</tr>
				<?php
			}
		}else{
			echo "0 results";
		}
		mysqli_close($conn);
		?>
	</body>
</table>
