<!doctype html>
<html ng-app="app">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Form Builder</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="css/angular-form-builder.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/angular-form-builder.js"></script>
    <script type="text/javascript" src="js/angular-form-builder-components.js"></script>
    <script type="text/javascript" src="js/angular-validator.min.js"></script>
    <script type="text/javascript" src="js/angular-validator-rules.min.js"></script>
    <script type="text/javascript" src="js/demo.js"></script>
    <script type="text/javascript" src="js/formView.js"></script>
    <script><?php 
		$filename = $_GET['formName'].'.txt';
		if (file_exists("forms/".$filename)) {
		//echo "The file $filename exists<br>";

		$current = file_get_contents("forms/".$filename);
		//$current = json_encode($current);
		echo "var formData=".$current.";";
	} else {
		//$file = 'people.txt';
		// Open the file to get existing content
		//$current = file_get_contents($file);
		// Append a new person to the file
		//$current .= "John Smith\n";
		// Write the contents back to the file
		//file_put_contents($filename, $data);
		echo "var formData=[];";
	}
	?>
    console.log(formData);
    </script>
</head>
<body class="container" ng-controller="DemoController">
    
    <div class="row">
    	<div>
            <h2 style="width:90%;float:left;"><?php echo $_GET['formName'];?></h2>
            <span style="float: left;width: 10%;margin-top: 20px;"><a href="index.php">Home</a></span>
            <hr style="clear:both;"/>
            <form class="form-horizontal">
                <div ng-model="input" fb-form="default" fb-default="defaultValue"></div>
                <div class="form-group">
                    <div class="col-md-12 col-md-offset-2">
                        <input type="submit" ng-click="submit()" class="btn btn-default"/>
                    </div>
                </div>
            </form>
            
       </div>
    </div>

    <div class="row">
        <div class="footer">
        <hr/>
        
        </div>
    </div>

    </body>
</html>
