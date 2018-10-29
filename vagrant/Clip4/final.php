<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo $_POST['author'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Fundamentals</title>
		<link href="assets/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<div id="Header">
			<img src="assets/Dickens_Gurney_head.jpg" border="0" alt="">
			<h2>
				Mailing List Information
			</h2>
		</div>        
        <div id="Body">
            <div>
                <label>Favorite Author:</label> 
                <!-- short hand php, entering the properties of the _POST varible (this was the object returned by the post call) -->
                <span> <?=$_POST['author']?>&nbsp;</span>
            </div>		
            <div>
                <label>Favorite Century:</label>
                <span> <?=$_POST['century']?>&nbsp;</span>
            </div>
            <div>
                <label>Comments:</label>
                <span> <?=$_POST['comments']?>&nbsp;</span>
            </div>
            <div>
                <label>Name:</label>
                <span> <?=$_POST['name']?>&nbsp;</span>
            </div>
            <div>
                <label>E-mail Address:</label>
                <span> <?=$_POST['email']?>&nbsp;</span>
            </div>
            <div>
                <label>Receive Newsletter:</label>
                <span> <?=$_POST['newsletter']?>&nbsp;</span>
            </div>
        </div>
	</body>
</html>