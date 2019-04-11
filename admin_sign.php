<?php
$dbc = mysqli_connect('localhost', 'root', '', 'rega');
if(!isset($_COOKIE['user_id'])) {
  if(isset($_POST['submit'])) {
    $user_username5 = mysqli_real_escape_string($dbc, trim($_POST['username5']));
    $user_password5 = mysqli_real_escape_string($dbc, trim($_POST['password5']));
    if(!empty($user_username5) && !empty($user_password5)) {
      $query = "SELECT `user_id` , `username5` FROM `adminka` WHERE username5 = '$user_username5' AND password5 = SHA('$user_password5')";
      $data = mysqli_query($dbc,$query);
      if(mysqli_num_rows($data) == 1) {
        $row = mysqli_fetch_assoc($data);
        setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
        setcookie('username5', $row['username5'], time() + (60*60*24*30));
        $home_url = 'admin.php';
        header('Location: '. $home_url);
      }
      else {
         echo "<img src='https://memepedia.ru/wp-content/uploads/2019/02/obladaet-mem-4.jpg'>"; 
      }
    }
  }
}
?>
