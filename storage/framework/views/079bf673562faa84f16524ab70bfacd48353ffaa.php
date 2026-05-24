<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="" xmlns="" xmlns="" xmlns="" xmlns="">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Kamrul H Supon">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Start of cornix Zendesk Widget script -->
    <script id="ze-snippet" src="../static.zdassets.com/ekr/snippetce08.js?key=297c3ad6-1cc8-4143-96b9-2f2469c28a10"> </script>
    <!-- End of cornix Zendesk Widget script -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137780722-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-137780722-1');
    </script>

    <link rel="icon" href="images/logo.png" type="image/png" sizes="32x32">

    <style>
      @import  url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');


      .pricing{
        border-radius: 5px;
        text-align: center;
        padding: 15px;
        margin: 10px 30px 30px;
        height: 430px;
        width: 150px;
        background: rgba(215, 232, 252, 0.36);
      }

      .pricing h4 {
        font-size: 22px;
        color: #0F183B;
        font-weight: 500;
        font-family: 'LexendDeca';
        text-align:left;
      }

      .pricing h5 {
          font-size: 16px;
          color: #598FFA;
          font-weight: 700;
          /* margin-bottom: 10px; */
          text-align:left;
      }

      .pricing ul {
          text-align: initial;
          margin-left: 20px;
      }

      .pricing li {
          line-height: 15px;
          margin-bottom: 15px;
          color: #0F183B;
          font-size: 11px;
          list-style: none;
      }

      .pricing li:before {
        content: '';
        display: inline-block;
        height: 17px;
        width: 17px;
        /* background-image: url(../images/checkmark-active.png); */
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
        left: 10px;
      }
    </style>

    <title>Intervest</title>
  </head>
  <body>
 
    
<?php echo $__env->make('inc.frontend_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('inc.frontend_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script>
    function openNav() {
      document.getElementById("myNav").style.height = "100%";
      document.getElementById("navbar-mobile").classList.add("remove");
    }

    function closeNav() {
      document.getElementById("myNav").style.height = "0%";
      setTimeout(function(){ document.getElementById("navbar-mobile").classList.remove("remove") }, 350);
    }

    function repeatAnimation() {
      for (let num = 1; num <= 7; num++) {
        let elm = document.getElementById("link-" + num);
        let newone = elm.cloneNode(true);
        elm.parentNode.replaceChild(newone, elm);
      }
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/wow.min.js"></script>
  <script src="/js/script.js"></script>

  <script src="//code.tidio.co/vdftmptcdkmhhftbnfk4qvwnozmutw5t.js" async></script>

</body>

</html>

<?php /**PATH /home/amarachi/Documents/laravel/intervest/resources/views/inc/frontend_layout.blade.php ENDPATH**/ ?>