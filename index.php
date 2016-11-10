<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List Forms</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="css/angular-form-builder.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body class="container">
	<div class="row">
    	<h3 style="text-align:center;">Available Forms</h3>
        <hr/>
    </div>
	<div class="row">
    
    	<div class="col-md-4 col-md-offset-4">
    	<ul class="list-group">
        	<?php
				$dir  = 'forms';
				$files = scandir($dir);
				for($i=2;$i<count($files);$i++)
				{
					$filename=str_replace('.txt','',$files[$i]);
					echo '<a href="formView.php?formName='.$filename.'"><li class="list-group-item">'.$filename.'</li></a>';
				}
			?>
        </ul>
        <a class="success" href="create.html" style="text-align:center">Create New Form</a> 
        </div>
    </div>
</body>
</html>