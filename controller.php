<?php
    //check if submit button is clicked
  If(isset($_POST['submit'])){
    try {
    $conn = new PDO("mysql:host=localhost;dbname=baza", "root", "");

  // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // prepare sql and bind parameters
   $stmt = $conn->prepare("INSERT INTO tab1 (name, tel, message)
    VALUES (:name, :tel, :message)");
    $stmt->bindParam(':name', $name);
   $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':message', $message);
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    $stmt->execute();
    echo "Сообщение успешно отправлено";
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>

