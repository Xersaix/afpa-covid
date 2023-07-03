<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>
<main class="is-flex is-flex-direction-row is-justify-content-center is-align-items-center">


<table class="table">
<tr>
<th>Id region</th>
<th>Nom de region</th>
<th>1er dose</th>
<th>2ème dose</th>
</tr>



<?php        foreach ($table_result as $row) {?>

    <tr>
    <th> <?=$row["ID region"] ?></th>
    <th> <?=$row["Nom de la region"] ?></th>
    <th> <?=$row["1er dose"] ?></th>
    <th> <?=$row["2ème dose"] ?></th>
    
    </tr>


<?php    }  ?>





</table>


</main>




<?php include "components/footer.php" ?>