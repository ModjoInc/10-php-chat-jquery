<?php
include('errors.php');
include('pdo.php');

$connection = new Connection();

$cnn = $connection->getConnection();
$sql = "SELECT * FROM message";
// INNER JOIN user ON message.user_id = user.id ";
$statement = $cnn->prepare( $sql );
$value = $statement->execute();

if ( $value ) {
  while ($result = $statement->fetch(PDO::FETCH_ASSOC)){
    $data["data"][] = $result;
  }
  echo json_encode( $data );
} else {
  echo "erreur";
}
$statement->closeCursor();
$connection = null;


?>
