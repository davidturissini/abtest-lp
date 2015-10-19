<?php
    $bucket_cookie_name = '__bucket';
    $bucket = $_COOKIE[$bucket_cookie_name];

    if (!isset($bucket)) {
        $bucket = rand(0, 1);
        setcookie($bucket_cookie_name, $bucket);
    }
?>

<html>
    <head>
        <meta charset="utf8" />
        <title>A/B Testing Platform</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-20511675-2', 'auto');
          ga('send', 'pageview');
          ga('set', 'bucket', '<?php echo $bucket; ?>');

        </script>
        <style>

            html, body {
                height:100%;
            }

            .section {
                margin-bottom:20px;
            }

            .section .section-inner {
                margin:0 auto;
                max-width:1024px;
                padding:0 40px;
                position:relative;
            }

            .page-header {
                margin-bottom:0;
            }

            .page-footer {
                border-top:1px solid #ccc;
                padding-top:20px;
            }

            .hero {

                background: #004776; /* Old browsers */
                background: -moz-linear-gradient(top, #004776 0%, #004e6a 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#004776), color-stop(100%,#004e6a)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top, #004776 0%,#004e6a 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top, #004776 0%,#004e6a 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top, #004776 0%,#004e6a 100%); /* IE10+ */

                color:rgba(255, 255, 255, 0.95);

                padding:40px 0;
            }


            h1 {
                font-size:38px;
            }


            h1, h2, h3 {
                line-height: 1.3;
            }

            form {
                margin-top:40px;
            }

            form div {
                padding:0 !important;
            }

            input[type=submit] {
                color:#fff;
                border:0;
                margin-top:-1px;
            }

            .glyphicon {
                font-size:48px;
            }

            .cell-icon {
                margin-bottom:20px;
            }

            .thankyou {
                color:#CEA145;
            }

            form input {
                font-size:18px !important;
            }

            .page-header {
                background:#fff;
                color:#333;
                margin-top:0;
            }


            @media (max-width: 768px) {
                h1 {
                    font-size:30px;
                }

                h3 {
                    font-size:18px;
                }

                input[type=submit] {

                    margin-top:10px;
                    width:100%;
                }
            }
        </style>
    </head>
    <body class="container-fluid">
        <header class="page-header row section">
            <div class="section-inner">
                <header class="col-xs-12">
                    <h1>Data-Driven Design</h1>
                </header>
            </div>
        </header>
        <section class="section hero row">
            <div class="section-inner">
                <div class="hero-inner col-xs-12 col-md-10">
                    <?php
                        if ($bucket == 0) {
                    ?>
                        <header>
                            <h1>Introducing Data-Driven Design</h1>
                        </header>
                        <h3>An A/B testing platform for mobile and web designed to make it easy for you to measure, convert, optimize and repeat. Spend less time wondering and more time converting.</h3>
                    <?php } else { ?>
                        <header>
                            <h1>Measure. Convert. Optimize. Repeat.</h1>
                        </header>
                        <h3>Introducing an A/B testing platform for mobile and web that lets you spend more time succeeding and less time wondering.</h3>
                    <?php 
                        }

                        if (isset($_POST['email'])) {

                            $to      = 'abtest@bytemagik.com';
                            $subject = 'AB Test leed';
                            $message = 'email: ' . $_POST['email'] . ' \n bucket: ' . $bucket;
                            $headers = 'From: dave@bytemagik.com' . "\r\n" .
                                'Reply-To: dave@bytemagik.com' . "\r\n" .
                                'X-Mailer: PHP/' . phpversion();

                            mail($to, $subject, $message, $headers);
                    ?>
                        <h3 class="thankyou">
                            Thank you! We will get in contact with you shortly.
                        </h3>
                    <?php } else { ?>
                        <form method="POST" action="/" class="clearfix">
                            <p>Sign up now to get notified when we launch.</p>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" type="email" name="email" placeholder="e-mail address" />
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <input class="btn btn-success pull-right" type="submit" value="Sign up" />
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="section row clearfix">
            <div class="section-inner">
                <aside class="col-xs-12 col-sm-4">
                    <div class="cell-icon">
                        <i class="glyphicon glyphicon-stats"></i>
                    </div>
                    <h4>Optimize your Analytics</h4>
                    <p>Go beyond your numbers by experimenting with ways to optimize your numbers. Stop wondering if you are maximizing your conversions and get numbers to back it up! Our A/B Testing tech allows you to optimize your apps.</p>
                </aside>
                <aside class="col-xs-12 col-sm-4">
                    <div class="cell-icon">
                        <i class="glyphicon glyphicon-send"></i>
                    </div>
                    <h4>Interpret your results</h4>
                    <p>Eliminate guessing with clear and fast reporting. With our clean charts and fast e-mail updates you'll always know how your tests are performing and where you can make further optimizations.</p>
                </aside>
                <aside class="col-xs-12 col-sm-4">
                    <div class="cell-icon">
                        <i class="glyphicon glyphicon-time"></i>
                    </div>
                    <h4>Get your data fast</h4>
                    <p>Why wait around for the results of your A/B tests? Get real-time reports delivered as results come in. The more time you have to wait to get your results, the less time you know if your app is optimized. Get your data delivered quickly.</p>
                </aside>
            </div>
        </section>
        <header class="page-footer row section">
            <div class="section-inner">
                <div class="col-xs-12 text-right">
                    © 2015
                </div>
            </div>
        </header>
    </body>
</html>