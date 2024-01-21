<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Import Excel or CSV File into Database Example</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<form action="<?php echo base_url('Upload/importCsvToDb');?>import/importFile" method="post" enctype="multipart/form-data">
    Upload excel file : 
    <input type="file" name="uploadFile" value="" /><br><br>
    <input type="submit" name="submit" value="Upload" />
</form>
</body>
</html>