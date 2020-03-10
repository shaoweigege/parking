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
    <iframe src="<?php 

    include 'redirect.php';

    ?>"
        style="position:fixed; top:64px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;">
        Your browser doesn't support iframes
    </iframe>
    <script>
        $(document).ready(function () {
            $('#domainname').text(window.location.hostname);
        });
        $('#sendmail').click(function () {
            var domain = 'netviet.kr';
            window.open('mailto:domains' + '@' + domain + '?subject=Domain offer for ' + window.location.hostname);
        });
    </script>
</body>