<?php
?>

<!DOCTYPE html>
<html>
<head>
  <title>FILESYSTEM</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" >
</head>
<body>

  <div class="container">
    <div class="panel panel-default">
      <div class="panel-body">
        <form action="file.php" role="form" method="POST">
          <div class="form-group col-md-6">
            <label for="filename">File name:</label>
            <input type="text" class="form-control" name="filename" id="filename">
          </div>
          <div class="form-group col-md-6">
          <label for="sel1">Select file type:</label>
          <select name="file_ex" class="form-control" id="sel1">
            <option value=".txt">Text (.txt)</option>
            <option value=".html">HTML (.html)</option>
            <option value=".css">Style (.css)</option>
          </select>
        </div>
          <div class="form-group col-md-2 pull-right"> 
            <button type="submit" name="add" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-plus"></span> Add File</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>