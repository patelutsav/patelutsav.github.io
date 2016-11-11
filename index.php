<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List Forms</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="css/angular-form-builder.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>
		$(document).ready(function(){
			$('a.btn-danger').click(function(e){
				if($(this).text() == 'Save As')
				{
					$(this).text('Cancel');
				}
				else
				{
					$(this).text('Save As');
				}
				$(this).closest('div.row').next().toggle("slow");
			});	
			$('a#saveAsForm').click(function(e){
				var oldName = $(this).prev('input').val();
				var newName = $(this).closest('div').prev('div')[0].firstChild.value;
				$.get("saveAs.php?oldformName="+oldName+"&newformName="+newName,function(data){window.location.reload();});
				
				//alert(newName);
			});
		});
	</script>
</head>

<body class="container">
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
    	<h3 style="text-align:center;">Available Forms</h3>
        </div>
        <div class="col-md-2" style="margin-top:15px;">
            <a class="btn btn-primary btn-block" href="create.html" style="text-align:center"><span class="glyphicon glyphicon-plus"> Create New Form</span></a> 
        </div>
        
    </div>
    <hr style="margin-bottom:2px;"/><hr style="margin-top:2px;"/>
	<div class="row">
    
    	<div class="col-md-6 col-md-offset-3">
    	
        	<?php
				$dir  = 'forms';
				$files = scandir($dir);
				for($i=2;$i<count($files);$i++)
				{
					$filename=str_replace('.txt','',$files[$i]);
					echo '<div class="row" style="padding: 10px;border:1px solid #ccc;border-radius:5px;margin-bottom:2px;"><div class="col-md-6" style="font-size: large;"><a href="formView.php?formName='.$filename.'" style="vertical-align:middle;">'.$filename.'</a></div><div class="col-md-6" style="text-align:right;"><a href="formView.php?formName='.$filename.'" class="btn btn-default btn-sm">Open</a> <a href="modify.php?formName='.$filename.'" class="btn btn-primary btn-sm">Modify</a> <a class="btn btn-danger btn-sm">Save As</a></div></div><div class="row" style="background:#eee;padding: 10px;border:1px solid #ccc;border-radius:5px;margin-bottom:2px;display:none;margin-top:-5px;border-top:0px;border-top-left-radius:0px;border-top-right-radius:0px;"><div class="col-md-10"><input type="text" name="newFormName" placeholder="Form Name" class="form-control newFormName"/></div><div class="col-md-2"><input type="hidden" value="'.$filename.'" class="oldFormName"><a class="btn btn-primary" id="saveAsForm">Save</a></div></div>';
				}
			?>
        
        </div>
    </div>
    <hr/>
</body>
</html>