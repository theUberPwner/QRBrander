<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/qr.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="recent-sidebar">
            <h2>Example QR Codes</h2>

            <hr>

            <img src="server/examples/passport.png" class="sidebarImg"><br>
            <img src="server/examples/amazon.png" class="sidebarImg"><br>
        </div>

        <div id="container">

            <div id="header">
                <h1>QR Code Brander</h1>
            </div>

            <div id="input-container">
                <form id="input-form">
                    <div class="formline"><span class="formlabel">Upload Logo(.png): </span><input type="file" name="logo-file-input" id="logofile" accept="image/png"></div>
                    <div class="formline"><span class="formlabel">Data: </span><input type="text" name="data-to-encode" id="qrdata"></div>
                    <div class="formline"><button id="genBtn" class="btn">Generate QR</button></div>
                </form>
            </div>


            <div id="result-container">

            </div>
        </div>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/main.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-17775015-10', 'myeasyp.com');
      ga('send', 'pageview');

    </script>

    </body>
</html>
