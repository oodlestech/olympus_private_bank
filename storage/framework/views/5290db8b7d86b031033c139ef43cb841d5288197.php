<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo e($settings->site_title); ?> - <?php echo e($settings->site_descr); ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/img/<?php echo e($settings->site_logo); ?>" type="image/x-icon"/>
	<!-- Fonts and icons -->
	<script src="/atlantis/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/atlantis/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&amp;display=swap" rel="stylesheet">

	<!-- CSS Files -->
	<link rel="stylesheet" href="/atlantis/css/bootstrap.min.css">
	<link rel="stylesheet" href="/atlantis/css/atlantis.min.css">
	<link rel="stylesheet" href="/atlantis/style.css">

	<style>
		@import  url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
	</style>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	
	<!-- jquery lib -->
	<script src="/atlantis/js/core/jquery.3.2.1.min.js"></script>


</head>

<body>

<?php echo $__env->make('layouts.atlantis.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.atlantis.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!--Start of Tawk.to Script-->
	<!--<script type="text/javascript">-->
	<!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
	<!--(function(){-->
	<!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
	<!--s1.async=true;-->
	<!--s1.src='https://embed.tawk.to/6371b1dab0d6371309ced71a/1ghq1tkcm';-->
	<!--s1.charset='UTF-8';-->
	<!--s1.setAttribute('crossorigin','*');-->
	<!--s0.parentNode.insertBefore(s1,s0);-->
	<!--})();-->
	<!--</script>-->
	<!--End of Tawk.to Script-->

	<script src="//code.tidio.co/ienzec50gzcfruzv4o2r6neyhmf1iflv.js" async></script>
</body>

</html><?php /**PATH /Users/amarachiugwu/Work/laravel/olympuspb-back/resources/views/layouts/atlantis/layout.blade.php ENDPATH**/ ?>