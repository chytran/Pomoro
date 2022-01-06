<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header1.php';
?>
	<h1 class="text-white text-center text-2xl md:text-3xl lg:text-4xl font-bold p-4 bg-red-700" style="font-family: poppins, sans-serif;">Signed-Out</h1>

	<script src="<?=ASSETS ?>"></script>

	<div id="left" class="grid place-items-center h-screen absolute w-full">
				<div class="bg-white relative w-6/12 h-3/6 object-cover">
					<div class="text-red-500 text-6xl left-16 absolute text-center">You've been successfully signed out</div>
					<div class="text-red-500 text-1xl top-32 left-96 absolute">You'll be redirected back shortly.</div>
				</div>
			</div>


<?php
    include_once '../app/components/footer.php';
?>