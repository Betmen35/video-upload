<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>file upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>


<form action="javascript:void(0);" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="exampleFormControlFile1">Video dosyanızı yükleyin</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file" value="deniz">
  </div>

	<button type="submit" class="btn btn-danger"  id="yukle">Yükle</button>
</form>

<div id="sonuc"></div>


<script type="text/javascript" src="upload.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>