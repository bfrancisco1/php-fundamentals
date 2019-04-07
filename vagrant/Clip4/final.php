<?php
include 'assets/include.php'
//<!-- pre tag to make array look pretty -->
echo "<pre>";
print_r($_SESSION);
//print_r($_GET);
echo "</pre>";

//echo $_POST['author'];

//check if the formPostData variable has been set, if not, send the user back to the form page
if (isset($_SESSION['formPostData'])){
    $postedData = $_SESSION['formPostData'];
    //you destroy or unset the sessions variable after you've assigned it to the $postedData
    //this way, the user can only visit the final.php page once after submitting the form data
    //otherwise, the user could return to final.php without having submitted form data
    unset($_SESSION['formPostData']);
} else {
    header('Location: index.php');
}
//getting the formdata from the session variable rather than the post variable
$postedData = $_SESSION['formPostData'];


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
                <span> <?=$postedData['author']?>&nbsp;</span>
            </div>		
            <div>
                <label>Favorite Century:</label>
                <span> <?=$postedData['century']?>&nbsp;</span>
            </div>
            <div>
                <label>Comments:</label>
                <span> <?=$postedData['comments']?>&nbsp;</span>
            </div>
            <div>
                <label>Name:</label>
                <span> <?=$postedData['name']?>&nbsp;</span>
            </div>
            <div>
                <label>E-mail Address:</label>
                <span> <?=$postedData['email']?>&nbsp;</span>
            </div>
            <div>
                <label>Receive Newsletter:</label>
                <span> <?=$postedData['newsletter']?>&nbsp;</span>
            </div>
        </div>
	</body>
</html>