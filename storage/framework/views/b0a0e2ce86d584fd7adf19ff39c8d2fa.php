<script src="<?php echo e(asset('all.js')); ?>"></script>

<script>
    var app_path    =   "<?php echo e(env('APP_URL')); ?>"; 
</script>
<!-- Stack array for including inline js or scripts -->
<?php echo $__env->yieldPushContent('script'); ?>

<script src="<?php echo e(asset('dist/js/theme.js')); ?>"></script>
<script src="<?php echo e(asset('js/chat.js')); ?>"></script>

<?php /**PATH C:\Web\sample-project\resources\views\include\script.blade.php ENDPATH**/ ?>