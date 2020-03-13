<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <?php 

    include 'data.php';

    $url = "https://netviet.kr/domain/";
    $noframe = FALSE;
    foreach ($data as $key => $value) {
        if (stristr($_SERVER['SERVER_NAME'], $key)) {
            $url = $value["url"];
            $noframe = $value["noframe"];
            break;
        }
    }
    if ($noframe) {
        ?>
        <iframe src="<?php echo $url ?>"
            style="position:fixed; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden;">
            Your browser doesn't support iframes
        </iframe>
        <?php
    } else {
        ?>
        <nav>
            <div class="nav-wrapper">
                <a id="domainname" href="#" class="brand-logo" style="padding-left: 10px">Domain name</a>
                <ul id="nav-mobile" class="right" style="padding-right: 10px">
                    <li>
                        <a id="sendmail">
                            <i class="material-icons left">mail</i>Let's work together!</a>
                    </li>
                </ul>
            </div>
        </nav>
        <iframe src="<?php echo $url ?>"
            style="position:fixed; top:64px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;">
            Your browser doesn't support iframes
        </iframe>
        <script>
            $(document).ready(function () {
                $('#domainname').text(window.location.hostname);
            });
            $('#sendmail').click(function () {
                window.open('mailto:domains@netviet.kr?subject=Domain offer for ' + window.location.hostname);
            });
        </script>
        <?php
    }
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108055015-8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-108055015-8');
    </script>
</body>