<?php 

require_once "../models/Covid.php";

$table_result = getAllVaccination();

include "../views/suivi.php";




?>