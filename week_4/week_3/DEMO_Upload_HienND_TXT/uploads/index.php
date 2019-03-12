<!doctype html>
<html lang="en">
<head>
<head>
  <title>Form Submit</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/php_ajax.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
</head>
<body>
<div class="container">
  <div class="panel panel-success">
    <div class="panel-body">
      <form action="upload.php" method="post" enctype="multipart/form-data" id="js-form">
        <legend>Upload</legend>

        <div class="form-group">
          <label >Chọn file</label>
          <input id="js-file" type="file" name="Hinh" >
        </div>
        <div class="form-group">
          <button id="js-btSubmit" class="btn btn-primary" type="Submit">Upload</button>
        </div>  
        <div class="progress" id="js-progress">
          <div class="progress-bar" id="js-progress_bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
      </div>
      <div id="target" style="display: none;"></div>
      </form>
      <div id="load_icon" style="display: none;"></div>
        
    </div>
  </div>

</div>
</body>
</html>