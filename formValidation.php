<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale-1.0">
<title>Form Validation</title>


</head>
<body>
    <h1>Form Validation</h1>
<form action="formValidation.php" method="post">

<label for="">User Name: </label><br>
<input type="text" name="username" id="username"><br>
<label for="">Email: </label><br>
<input type="email" name="email" id="email"><br>
<label for="">Age: </label><br>
<input type="text" name="age" id="age"><br>
<input type="submit" name="submit" value="SignUp">


</form>

<?php
if(isset($_POST['submit'])){
 
    $username = $_POST['username'];
$username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
$Email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$Age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

//  validate
 
if(empty($_POST['username']))
{ ecHo "Please fill the information";
}else{
echo "Thanks for submission" . "<br>";
}


echo $username;
 echo "<br>";
 echo $Age;
echo "<br>";
echo $Email;
echo "<br>";

}
?>