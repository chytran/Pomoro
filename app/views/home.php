<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header1.php';
?>

    <!--==================== MAIN  ====================-->
    <main id="main">
        <div id="account" class="h-screen w-full bg-black">
        <!-- Link to account -->
        </div>
        <div id="advertisement" class="h-screen w-full bg-red-300">
        <!-- Advertisement -->
        </div>
    </main>

    <!--==================== FOOTER  ====================-->
    <footer id="footer">
        <div id="social-media"></div>
        <div id="description-footer"></div>
    </footer>

    <!--==================== HEADER  ====================-->
    <script src="<?=ASSETS ?>/pomoro/javascript/main.js"></script>
<?php
    include_once '../app/components/footer.php';
?>