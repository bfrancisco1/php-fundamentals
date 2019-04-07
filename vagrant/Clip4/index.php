<?php
include 'assets/include.php'
 

require 'assets/dbinfo.php';

$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";
$resultObject = $connection->query($query);

//check if $_POST is empty, if post is empty, don't do form validator since user has not entered anything yet
if (count($_POST) > 0 )
{
    //if POST property is not an empty string
    if($_POST['email'] != "")
    {
        //creating a session variable, populating with a yes to signify the form was posted
        $_SESSION['formWasPosted'] = 'yes';
        //setting a key equal to the post data so the post data can be transferred to the next page
        $_SESSION['formPostData'] = $_POST;
        //send the user to the final.php page, use the header function
        header('Location: final.php');
    }
    else
    {
        //set an email error variable, the contents of this variable will set the div class wrapper for for email address in css
        $emailError = "validation";
    }
}

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
Join Our Literature Mailing List
</h2>
</div>        
<div id="Body">
<!-- get method stores data in an associative array $_GET variable, variables in URL, this is insecure -->
<form method="post" action="index.php">
<!-- post method stores data in an associative array $_POST variable -->  
<!-- changing the action to send the user to index.php instead of final.php, index.php is where the form validation occurs -->          
<!--<form method="post" action="index.php" > -->
<div>
<label>Favorite Author:</label>
<select name="author">
<!--using shorthand syntax for while loop, can use regular if needed-->
<?php while($row = $resultObject->fetch_assoc()) : ?>
<!--using shorthand for php start line, inserting the value of id,firstname, lastname from each row -->
<option value="<?=$row['id']?>"><?=$row['first_name']?> <?=$row['last_name']?></option>
<?php endWhile; ?>
</select>
</div>		
<div class="multiple">
<label>Favorite Century:</label>
<!-- added a bracket to indicate an array value needed, otherwise only 1 value used-->
17th Century <input type="checkbox" name="century[]" value="17th">
18th Century <input type="checkbox" name="century[]" value="18th"> 
19th Century <input type="checkbox" name="century[]" value="19th"> 
</div>
<div>
<label>Comments:</label>
<textarea name="comments"></textarea>
</div>
<div>
<label>Name:</label>
<input type="text" name="name" />
</div>
<div class="<?=$emailError?>">
<label>E-mail Address:</label>
<input type="text" name="email" />
</div>
<div  class="multiple">
<label>Receive Newsletter:</label>
Yes <input type="radio" name="newsletter" value="no">
No <input type="radio" name="newsletter" value="yes">
</div>
<div class="multiple">
<label>&nbsp;</label>
<input type="submit" name="submit" value="Join Mailing List">
</div>
</form>
</div>
</body>
</html>