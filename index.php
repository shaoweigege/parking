<?php
    include 'data.php';

    $url = "https://netviet.kr/domain/";
    $noframe = FALSE;
    $title = $_SERVER['SERVER_NAME'];
    foreach ($data as $key => $value) {
        if (stristr($_SERVER['SERVER_NAME'], $key)) {
            $url = $value["url"];
            $noframe = $value["noframe"];
            $title = $value["title"];
            break;
        }
    }

    if ($noframe === TRUE) {
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: $url");
        exit();
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title><?php echo $title ?></title>
    <style>
    iframe {
        position: absolute;
        top: 64px;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        z-index: 999;
    }
    </style>
</head>

<body>
    <div class="wrapper">
    <?php 
    if ($noframe === TRUE) {
        ?>
        <iframe src="<?php echo $url ?>" allowfullscreen="true">
            Your browser doesn't support iframes
        </iframe>
        <?php
    } else {
        ?>
        <nav>
            <div class="nav-wrapper">
                <a id="domainname" href="#" class="brand-logo" style="padding-left: 10px"><?php echo $title ?></a>
                <ul id="nav-mobile" class="right" style="padding-right: 10px">
                    <li>
                        <a id="sendmail">
                            <i class="material-icons left">mail</i>Let's work together!</a>
                    </li>
                </ul>
            </div>
        </nav>
        <iframe src="<?php echo $url ?>">
            Your browser doesn't support iframes
        </iframe>
        <script>
            $('#sendmail').click(function () {
                window.open('mailto:domains@netviet.kr?subject=Domain offer for ' + window.location.hostname);
            });
        </script>
        <?php
    }
    ?>
    </div>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108055015-8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-108055015-8');
    </script>
</body>
</html>