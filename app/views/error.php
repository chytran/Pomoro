
<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header1.php';
?>
	<h1 class="text-white text-center text-2xl md:text-3xl lg:text-4xl font-bold p-4 bg-red-700" style="font-family: poppins, sans-serif;">404 Error</h1>

	<script src="<?=ASSETS ?>"></script>

	<div id="left" class="grid place-items-center h-screen absolute w-full">
				<div class="bg-white relative w-full h-3/6 object-cover">
					<div class="text-4xl text-red-500 sm:w-full sm:text-6xl sm:left-22 absolute text-center md:-t-10">Oops! Page not found</div>
					<div class="text-red-500 text-2xl top-24 left-4 w-full absolute text-center">The page you're looking for doesn't exist, or an error has occurred. Go back, or try refreshing your page.</div>
				</div>
			</div>


<?php
    include_once '../app/components/footer.php';
?>