<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>RAPNEWS</title>
  <link href="css/materialize.css" rel="stylesheet">
<link href="css/magnific-popup.css" rel="stylesheet">
  <link href="css/materialize.min.css" rel="stylesheet">
  <link href="css/materiallize1.0.0.css" rel="stylesheet">
  <link href="css/materiallize0.97.7.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
   <link href="css/hover.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css"  media="screen,projection"/>
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
   </head>
   <body style="overflow: hidden;">
<?php
  if(empty($_COOKIE['username5'])) {
?>           
           <div class="ground" style="background-image: url(https://wmpics.pics/dl-QND1.gif);    height: 1000px;">
<div class="container">
 <div class="row" style="background-color: white;">                       
  <h2 class="center-align" style="font-size: 40px;    padding: 18px;font-family: 'Roboto Condensed', sans-serif;">Вход в админ панель</h2>            
            <form  action="admin_sign.php" method="POST" id="contactForm" data-toggle="validator">
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                
                <div class="input-field col m12 s12 wow fadeIn a2" data-wow-delay="0.2s">
                  <i class="material-icons prefix">account_circle</i>
                    <label for="name" class="h4">Введите ваш логин</label>

                    <input type="text" name="username5" class="form-control validate" id="name" required data-error="NEW ERROR MESSAGE">
                </div>
                <div class="input-field col m12 s12 wow fadeIn a6" data-wow-delay="0.6s">
                  <i class="material-icons prefix">lock</i>
                    <label for="message" class="h4 ">Введите пароль </label>
                     <input type="password" name="password5" class="form-control validate" id="tel"  required>
        
                    <button class="btn waves-effect waves-light grey darken-4" type="submit" name="submit" value="submit"style="float: right;">Войти
    <i class="material-icons right">mouse</i>
  </button>  
  </form>    
</div>
</div>
</div>
<?php
}
else {
  ?>
  <nav>
    <div class="nav-wrapper grey darken-4">
      <div class="row">
      <div class="container">
      <a href="index.php" class="brand-logo">RAP NEWS</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
          <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a  href="admin_exit.php">Выйти из админки <?php echo $_COOKIE['username5'];?></a></li>
        <li><a  href="#">Редактировать контент</a></li>
        <li><a  href="#">Редактировать футер</a></li>
        <li><a  href="#">Редактировать хидер</a></li>
      </ul>
<ul class="side-nav" id="mobile-demo">
        <li><a href="#">Редактировать контент</a></li>
        <li><a href="#">Редактировать футер</a></li>
        <li><a href="#p">Редактировать хидер</a></li>
      </ul>
   </div>
  </nav>
<?php 
}
?>



<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="js/materiallize0.97.7.js"></script>
<script src="js/materiallize1.0.0.js"></script>
<script src="js/materialize.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>