<!DOCTYPE html>
<html>
<head>
	<title>Upload dan resize image</title>
</head>
<body>
	<form action="<?php echo base_url().'index.php/c_project/upload_image'?>" method="post" enctype="multipart/form-data">
		<input type="text" name="xjudul" placeholder="Judul">
		<input type="file" name="filefoto">
		<input type="text" name="desc_project" placeholder="Deskripsi">
		<button type="submit">Upload</button>
	</form>
</body>
</html>