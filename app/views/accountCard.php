<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header1.php';
?>
<!-- <header>  -->

<!-- Left side header of account -->
<?php
    require_once '../app/components/accountHeader.php';
?>

<!-- Right side of account -->
<div id="account-right">
    <div id="content">
        <!-- Show with php start-->
        <!-- If statement for repitition -->
        <div class="card-components">Card 1</div>
        <div class="card-components">Card 2</div>
        <div class="card-components">Card 3</div>
        <div class="card-components">Card 4</div>
        <div class="card-components">Card 5</div>
        <!-- Show with php end -->
    </div>
</div>
<!-- </body> -->
<?php
    include_once '../app/components/footer.php';
?>