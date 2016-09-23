<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/2d7adbfe04.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <link rel="stylesheet" href="css/sticky-footer-navbar.css" />
    <link rel="stylesheet" href="css/search.css" />
    <link rel="stylesheet" href="css/card.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script src="js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
    <script src="js/animatedModal.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li id="search-btn"><a id="demo02" href="#modal-02"><i class="fa fa-search fa-2x"></i></a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <h1>Search Results <span>for "<?php echo $_POST['q']?>"</span></h1>
        </div>
        <div id="search-result">
            <div style="margin: 15px auto; text-align:center;"><img src="images/ajax-loader.gif"/></div>
        </div>
    </div>
    <div id="modal-02">
        <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
        <div id="closebt-container" class="close-modal-02 close-animatedModal">
            <img class="closebt" src="images/closebt.svg" />
        </div>
        <div id="search">
            <form id="search-form" action="search.php" method="POST" style="opacity: 1; bottom: 0px;">
                <input type="text" name="q" id="q" placeholder="Start Typing..." autocomplete="off">
            </form>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Place sticky footer content here.</p>
        </div>
    </footer>

    <script src="js/search.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        var q = '<?php echo $_POST['q']?>';
        performSearch(q);
    });

    //demo 02
    $("#demo02").animatedModal({
        modalTarget: 'modal-02',
        animatedIn: 'fadeIn',
        animatedOut: 'fadeOut',
        color: '#8c8c8c',
        top: '58px',
        // Callbacks
        beforeOpen: function() {
            console.log("The animation was called");
        },
        afterOpen: function() {
            $('#q').val('');
            $('#q').focus();
            console.log("The animation is completed");
        },
        beforeClose: function() {
            console.log("The animation was called");
        },
        afterClose: function() {
            console.log("The animation is completed");
        }
    });
    $('#search-form').on('submit', function() {
        console.log("Searching for " + $('#q').val());
        $('.closeBt').trigger('click');
    });
    </script>
</body>

</html>
