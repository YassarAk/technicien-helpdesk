<?php
if(isset($_POST['submit'])){
  if( !empty($_POST['email']) && !empty($_POST['phone'])&& !empty($_POST['commantaire'])){
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = "yachaskillb@gmail.com";
    $subject = " objet :". $_POST['commantaire']." tel:".$_POST['phone']."Email:".$_POST['email'];
    $message = "votre reparateur 100% ";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
		echo "The email message was sent.";
    header('Location:merci.html');
    } else {
    	echo "The email message was not sent.";
    }  
  }
}
     
    

      //info Admin
      $serveur="localhost";
      $login="root";
      $dbname="reparation";
      $pass="";

      
                         
                                
 $emailErr  = $phoneErr =  "";
  $email  =   $phone  =  $commantaire  =  "";
      
          //formulaire complet securisation
if($_SERVER["REQUEST_METHOD"] == "POST"){



if(empty($_POST["email"])){
$emailErr="Email Obligatoire";

}else{
$email=test_input($_POST["email"]);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$emailErr="Format Email Invalid";
}
}
if(empty($_POST["phone"])){
$phoneErr="";

}else{
$phone=test_input($_POST["phone"]);

}
if(empty($_POST["commantaire"])){
$commantaire="";

}else{
$commantaire=test_input($_POST["commantaire"]);
}

}
//fonction pour la securisation notamant le xss
function test_input($donnees){
$donnees = trim($donnees);
$donnees = stripslashes($donnees);
$donnees = htmlspecialchars($donnees);

return $donnees;



}
try{
//on se connecte a la BDD
$connexion = new PDO("mysql:host=$serveur;dbname=$dbname",$login,$pass);
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//on insere les donnee recu 
$insertion= $connexion->prepare("INSERT INTO repair(email,phone,commantaire)
             VALUES(:email,:phone,:commantaire)");
$insertion->bindParam(':email',$email);
$insertion->bindParam(':phone',$phone);
$insertion->bindParam(':commantaire',$commantaire);

$insertion->execute();
// $retour = mail('yachaskillb@gmail.com','Envoi depuis la page de contact',$_POST["commantaire"],'From :yachaskillb@gmail.com');
// if($retour){
//    echo 'message  envoiyé avec success';
// }else{
//    echo ' erreur';
}

 
//page de remerciement


catch(PDOException $e){
echo 'ERREUR DE CONNEXION'.$e->getMessage();
}





?>