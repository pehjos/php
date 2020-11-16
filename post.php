
<?php
if (isset($_POST['submit'])){
$target="image/".basename($_FILES['image']['name']);
$conn = mysqli_connect('localhost','root','mypassword','news');
 if(mysqli_connect_errno()){
 echo"fail to connect to database";
}
$image=$_FILES['image']['name'];
$_description=$_POST['text'];
}
$querry="INSERT INTO news(image,description)Values('$image','$description')";
mysqli_query($conn,$querry);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="post.css">
</head>
<body>
	<form method="post"action="he.php">
	<div class="post">
 <p class="title">Add Post<p>
 	<p class="description">Your description</p>
<textarea class="input1"  name="description"></textarea>
<p class="text">choose image</p>
<input class="input" type="file" name="image">
</form>
<button name="submit">submit</button>
<div class="postb">
<div class="postbody">
<img id="postimg" src="T10.jpg"/>
<p id="textbody">
	<strong id="time">time.....</strong><br/>
 the boy is going to scoool, co he boy is going to scoool, co 
	he boy is going to scoool, co 
	he boy is going to scoool, co 
	he boy is going to scoool, co 
</p>
</div>
<div class="btn">
<button>Delete</button>
<button>Edit</button>
</div>
</div>
<div class="postb">
<div class="postbody">
<img id="postimg" src="T10.jpg"/>
<p id="textbody">
	<strong id="time">time.....</strong><br/>
 the boy is going to scoool, co he boy is going to scoool, co 
	he boy is going to scoool, co 
	he boy is going to scoool, co 
	he boy is going to scoool, co 
</p>
</div>
<div class="btn">
<button>Delete</button>
<button>Edit</button>
</div>
</div>
<div class="postb">
<div class="postbody">
<img id="postimg" src="T10.jpg"/>
<p id="textbody">
	<strong id="time">time.....</strong><br/>
 the boy is going to scoool, co he boy is going to scoool, co 
	he boy is going to scoool, co 
	he boy is going to scoool, co 
	he boy is going to scoool, co 
</p>
</div>
<div class="btn">
<button>Delete</button>
<button>Edit</button>
</div>
</div>

</div>

</body>
</html>
