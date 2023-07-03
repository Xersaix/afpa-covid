<?php





function getAllVaccination()
{
$servername = "localhost";
$dbname = "school";
$username = "covid";
$password = "covid";
try{
$pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);


$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('SELECT lpecom_covid.id_region as "ID region", lpecom_cities.name as "Nom de la region", SUM(lpecom_covid.n_dose1) as "1er dose" , SUM(lpecom_covid.n_dose2) as "2ème dose" FROM lpecom_covid JOIN lpecom_cities ON lpecom_cities.department_code = lpecom_covid.id_region GROUP BY lpecom_cities.name;');
$stmt->execute();
// echo "Connection reussi";

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result =  $stmt->fetchAll();
return $result;
}catch(PDOException $e)
{
    echo "Connaection failed:". $e->getMessage();
}





}

?>