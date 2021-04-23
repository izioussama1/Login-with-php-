<?php
  session_start();
  $var = $_SESSION['user'];
?>
<html>
<head>
<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Arizonia&display=swap');
body{
  background-image: url(pic/58015.jpg);
  background-position:center;
}
.p{
  font-family: 'Arizonia', cursive;
  font-size: 200px;
  color:#e99b13; 
  text-align: center;
  

}
.pp{
  font-family: 'Arizonia', cursive;
  font-size: 150px;
  color: #f2f3f5;
  text-align: center;
  margin-top: -100px;


}
img{
  width: 50px;
  height: 40px;
}
</style>
<body>
<?php
  include "head.php";
?>


<nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a href="#" class="navbar-brand">
      <img src="https://res.cloudinary.com/mhmd/image/upload/v1557368579/logo_iqjuay.png" width="45" alt="" class="d-inline-block align-middle mr-2">
      <span class="text-uppercase font-weight-bold">Company</span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="index1.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
    <p class="p">Welcome</p>
    <p class="pp"><?php echo $var; ?> </p>

</div>

</body>
</html>