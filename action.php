<?php
include('connection.php');

$name= $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$note = $_POST['note'];

if(isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['note'])){
$sql = $conn->prepare("INSERT INTO booking(name,email,phone,note)VALUES(:name,:email,:phone,:note)");

 $result = $sql->execute([
    ':name' => $name,
    ':email' => $email,
    ':phone' => $phone,
    ':note' => $note
]);
if($result){
   echo "Your appointment has been booked now! ";

}else{
   echo  "Error occured while booking your appointment ";
 
}


}else{
      echo  "fields are required ";
}

?>