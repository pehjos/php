
<?php
$msg='';
$msgclass='';
if(filter_has_var(INPUT_POST,'submit')){
$name=$_POST['name'];
$name=$_POST['telephone'];
$email=$_POST['email'];
$message=$_POST['message'];
if(!empty($name)&& !empty($email)&& !empty($message)&& !empty($telephone)){
  if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
   
    $msg="please use valid email adress";
    $msgclass='alert-danger';
  }
else{
 
$toemail='pehjos4@gail.com';
$subject='<h3>message requet from</h3>'.$name;
$body="<h4>message from</h4>
<h4>name:</h4><p>'.$name.'</p>
<h4>name:</h4><p>'.$telephone.'</p>
<h4>name:</h4><p>'.$email.'</p>
<h4>name:</h4><p>'.$message.'</p>
";
$headers="MIME-Version:1.0" ."\r\n";
$headers.="content-type:text/html;charset=utf-8" ."\r\n";
 $headers.="from:".$name." <".$email."><".$telephone.">"."\r\n";
if(mail($toemail,$subject,$body,$headers)){
  $msg='your email has been sent'; 
$msgclass='alert-success';
}
else{

  $msg='your email was not sent'; 
$msgclass='alert-danger';
}
}
}

}

else
{

 
  $msg="please filled in all fields";
  $msgclass='alert-danger';
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>new cite</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="Authors"content="PEH JOSEPH">
    <meta name="description"content="awesome">
    <link rel="stylesheet" href="local.css">
    <link rel="stylesheet" href="botstrap.css">
    <link rel="stylesheet"href="w3.css"> 
    <link rel="stylesheet"href="font.css"> 
</head>
<body>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
<div class="container">
<?php if($msg !=""):?>
<div class="alert <?php echo $msgclass;?>"><?php echo $msg;?></div>
<?php endif;?>


<label>enter your name</label>
<input type="text"name="name"class="form-control"value="<?php echo isset($_POST['name'])?$name:'';?>">
<label>enter your email</label>
<input type="text"name="email"class="form-control"value="<?php echo isset($_POST['email'])? $name:'';?>">
<label>enter your message</label>
<textarea name='message'id='mess'class="form-control"> <?php echo isset($_POST['message'])? $name:'';?>  </textarea>
<button id="button"class="btn btn-primary"class="form-control"name="submit">submit</button>
</div>
</body>
</html>