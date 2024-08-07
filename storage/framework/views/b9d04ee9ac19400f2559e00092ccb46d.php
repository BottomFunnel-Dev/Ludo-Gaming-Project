<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	var auto_refresh = setInterval(
		function() {
			$('#openBattle').load('<?php echo url('/openbet'); ?>');
		}, 600);

</script>



<div id="openBattle"></div><?php /**PATH C:\Web\sample-project\resources\views\user\runningbet.blade.php ENDPATH**/ ?>