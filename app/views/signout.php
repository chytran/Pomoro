<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header1.php';
?>

<!-- <h1 class="text-white text-center text-2xl md:text-3xl lg:text-4xl font-bold p-4 bg-red-700" style="font-family: poppins, sans-serif;">Signed-Out</h1> -->

<script src="<?=ASSETS ?>"></script>

<div class="w-full h-screen flex flex-col justify-center content-center">


	<div id="left" class="grid place-items-center h-full relative w-full">
		<div class="bg-white relative w-full h-1/6 object-cover flex flex-col justify-center content-center">
			<div class="text-red-500 text-6xl relative text-center">You've been successfully signed out</div>
			<div class="text-red-500 text-xl pt-5 text-center relative">You'll be redirected back shortly.</div>
		</div>
	</div>


	<?php
		include_once '../app/components/footer.php';
	?>

</div>