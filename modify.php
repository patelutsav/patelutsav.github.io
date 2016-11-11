<!doctype html>
<html ng-app="app">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Form Builder</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="css/angular-form-builder.css"/>
    <script>
	<?php 
		$filename = $_GET['formName'].'.txt';
		if (file_exists("forms/".$filename)) {
		//echo "The file $filename exists<br>";

		$current = file_get_contents("forms/".$filename);
		//$current = json_encode($current);
		echo "var formData=".$current.";";
		echo "var formName='".$_GET['formName']."';";
	} else {
		//$file = 'people.txt';
		// Open the file to get existing content
		//$current = file_get_contents($file);
		// Append a new person to the file
		//$current .= "John Smith\n";
		// Write the contents back to the file
		//file_put_contents($filename, $data);
		echo "var formData=[];";
		echo "var formName=''";
	}
	?>
    console.log(formData);
    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/angular-form-builder.js"></script>
    <script type="text/javascript" src="js/angular-form-builder-components.js"></script>
    <script type="text/javascript" src="js/angular-validator.min.js"></script>
    <script type="text/javascript" src="js/angular-validator-rules.min.js"></script>
    <script type="text/javascript" src="js/demo.js"></script>
    
</head>
<body class="container" ng-controller="DemoController">
    <div class="row">
    	<div class="col-md-10">
        	<h1 style="width:90%;float:left;">Editor</h1>
	        <span style="float: left;width: 10%;margin-top: 20px;"><a href="index.php">Home</a></span>
            <hr style="clear:both;"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Builder</h3>
                </div>
                <div fb-builder="default"></div>
                
            </div>
        </div>
        
		<div class="col-md-2">
        	<div class="sidebar-nav-fixed pull-right affix">
            	<h3 style="text-align:center">Tools</h3>
	            <div fb-components></div>
            </div>
        </div>
        
    </div>
	<div class="row">
    	<div class="col-md-10">
        <input type="text" name="formName" class="form-control" style="width:20%;display:inline;margin-right:5px;" disabled="disabled" ng-model="formName"/><button class="btn btn-primary" ng-click="saveForm()">Save &amp; Preview</button>
        </div>
    </div>
    

    <div class="row">
        <div class="col-md-12 footer">
        <hr/>
       
        </div>
    </div>

    </body>
</html>
