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

        </script>
        <style>

            body {
                background: #004776; /* Old browsers */
                background: -moz-linear-gradient(top, #004776 0%, #004e6a 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#004776), color-stop(100%,#004e6a)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top, #004776 0%,#004e6a 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top, #004776 0%,#004e6a 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top, #004776 0%,#004e6a 100%); /* IE10+ */

                color:rgba(255, 255, 255, 0.95);
            }

            .main {
                left:50%;
                position: absolute;
                top:50%;
                transform:translateX(-50%) translateY(-50%);
                -webkit-transform:translateX(-50%) translateY(-50%);
                -moz-transform:translateX(-50%) translateY(-50%);
                width:80%;
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

            .thankyou {
                color:#CEA145;
            }

            form input {
                font-size:18px !important;
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
    <body>
        <section class="main">
            <h1>Measure. Convert. Optimize. Repeat.</h1>
            <h3>Introducing an A/B testing platform for mobile and web that lets you spend more time succeeding and less time wondering.</h3>
            <?php
                if (isset($_POST['email'])) {

                    $to      = 'abtest@bytemagik.com';
                    $subject = 'AB Test leed';
                    $message = $_POST['email'];
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
                    <p>Sign up now to get notified when we launch. You can rest assured, you’re email is safe with us.</p>
                    <div class="col-xs-12 col-sm-9">
                        <input class="form-control" type="text" name="email" placeholder="E-Mail address" />
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <input class="btn btn-success pull-right" type="submit" value="Sign up" />
                    </div>
                </form>
            <?php } ?>
        </section>
    </body>
</html>