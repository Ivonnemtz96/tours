<?
    include('indexController.php');   
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include('includes/head.php');
?>
<body class="custom-cursor">
    <div class="page-wrapper">
        <?php
            include('includes/preloader.php');
            include('modules/'.$lenguaje.'/header.php');
            include('modules/'.$lenguaje.'/arco.php');
            include('includes/redes.php'); 
            include('modules/'.$lenguaje.'/footer.php'); 
        ?>
    </div>
    <?
        include('includes/scripts.php');
    ?>
</body>
</html>