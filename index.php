<!--
Pallets: http://paletton.com/#uid=13x0u0kllllev-GhVrsoLfesb97
Animations Lists: https://daneden.github.io/animate.css/

Todo:
- Add a config.php
- Add a live counter players
- Add a theme selector
-->
<?php
error_reporting(0);

include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $webTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/<?php echo $theme; ?>.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script type="text/javascript">
        smoothScroll.init();
        new WOW().init();
    </script>
</head>
<body>

<!-- NavBar -->
<nav class="navbar navbar-default" id="top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navcol">
                <span><i class="fa fa-times" aria-hidden="true"></i></span>
            </button>
            <!-- You can remove the tag if you want a branding
            <a href="#" class="navbar-brand">PLANETBRUNEI</a>-->
        </div>
        <div class="collapse navbar-collapse" id="navcol">
            <ul class="nav navbar-nav">
                <!-- You can select the fa fa-home class on http://fontawesome.io/icons/ -->
                <li><a data-scroll href="#top" class="hvr-forward"><strong><i class="fa fa-home"></i> Home</strong></a></li>
                <li><a data-scroll href="#about" class="hvr-forward"><strong><i class="fa fa-book"></i> About</strong></a></li>
                <li><a data-scroll href="#vote" class="hvr-forward"><strong><i class="fa fa-check"></i> Vote</strong></a></li>
                <li><a data-scroll href="#staff" class="hvr-forward"><strong><i class="fa fa-user"></i> Staff</strong></a></li>
                <li><a href="<?php echo $storelink;?>" class="hvr-forward"><strong><i class="fa fa-cart-plus"></i> Store</strong></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><button class="copypaste btn btn-danger btn-lg" data-clipboard-text="<?php echo strtoupper($serverip).':'.$serverport;?>" ><strong><?php echo strtoupper($serverip);?></strong></button></li>
            </ul>
        </div>
    </div>
</nav>
<!-- The End of NavBar -->

<!-- P1 -->
<div class="container-fluid p-1 text-center" id="counter">
    <!-- Image is 600x600, you also can try other size but it will not work properly! -->
    <img src="img/logo.png" alt="#" class="img-responsive wow fadeInDown">
    <button id="onlineplayers" class="copypaste btn btn-danger btn-lg hvr-bounce-in" data-clipboard-text="<?php echo strtoupper($serverip).':'.$serverport;?>" >Join with -/- Others!</button>

</div>
<!-- The End of P1 -->

<!-- About -->
<div class="container p-2" id="about">
    <div class="well well-inside text-center">
        <h1>About The Server</h1>
    </div>
    <div class="well">
        <div class="row wow fadeInDown">
            <div class="col-md-6 title">
                <h2 class="btn btn-danger btn-lg">About the server</h2>
                <hr>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere efficitur urna non vehicula. Fusce rutrum augue nec erat faucibus, id porta nisl aliquam. Vivamus consectetur ex faucibus sapien lobortis dapibus. Pellentesque id dignissim turpis, eget facilisis turpis. Phasellus a justo mauris. In tempor, mi et porta tincidunt, quam velit luctus nulla, ut tincidunt est enim non ipsum. Morbi pulvinar tellus non nisl maximus aliquam. Nam vitae sem dui. Etiam fringilla arcu eros, non pulvinar leo accumsan non. Pellentesque non iaculis nibh. Ut ut est vulputate sem mollis tincidunt. Praesent diam magna, mattis id ipsum cursus, elementum pharetra odio. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut convallis sed massa eu mollis. Donec a facilisis tellus. Nullam condimentum gravida nunc, non ornare nulla porttitor non. Etiam suscipit elit ac semper ullamcorper. Curabitur varius libero lacus, quis tristique metus efficitur id. Curabitur sit amet tincidunt turpis, at lacinia erat. Donec a enim sit amet massa lacinia tempus ut a lorem. Phasellus fringilla id ex euismod malesuada. Proin aliquam imperdiet dui et dignissim. Proin accumsan vulputate justo, et facilisis nibh.</p>
            </div>
            <div class="col-md-6 title">
                <h2 class="btn btn-danger btn-lg"><?php echo strtoupper($serverip);?></h2>
                <hr>
                <img src="img/pic-1.jpg" class="img-responsive" alt="#">
            </div>
        </div>
    </div>
</div>
<!-- The End of About -->

<!-- Voting -->
<div class="container-fluid p-3 text-center" id="vote">
    <div class="container">
        <div class="well well-inside">
            <h1>Voting Info</h1>
        </div>
        <div class="row">
            <div class="col-md-4 sam-height wow bounceInDown">
                <div class="well">
                    <div class="well well-inside">
                        <h1>Vote Rewards</h1>
                    </div>
                    <h4>1 Balance</h4>
                    <br>
                    <h4>10 Claim Land</h4>
                    <br>
                    <h4>1 LuckyBlocks</h4>
                    <br>
                    <h4>1 RareKey</h4>
                    <br>
                    <h4>and More!</h4>
                </div>
            </div>
            <div class="col-md-4 sam-height wow bounceInDown">
                <div class="well vote-button">
                    <div class="well well-inside">
                        <h1>Vote Links</h1>
                    </div>
                    <a href="<?php echo $voteone;?>" class="btn btn-danger btn-lg hvr-grow" target="_blank">Vote #1</a>
                    <br>
                    <a href="<?php echo $votetwo;?>" class="btn btn-danger btn-lg hvr-grow" target="_blank">Vote #1</a>
                    <br>
                    <a href="<?php echo $votethree;?>" class="btn btn-danger btn-lg hvr-grow" target="_blank">Vote #1</a>
                    <br>
                    <a href="<?php echo $votefour;?>" class="btn btn-danger btn-lg hvr-grow" target="_blank">Vote #1</a>
                </div>
            </div>
            <div class="col-md-4 sam-height wow bounceInDown">
                <div class="well">
                    <div class="well well-inside">
                        <h1>Top Rewards</h1>
                    </div>
                    <h4>100 Balance</h4>
                    <br>
                    <h4>MVP+ Ranks</h4>
                    <br>
                    <h4>100 LuckyBlocks</h4>
                    <br>
                    <h4>100 RareKey</h4>
                    <br>
                    <h4>and More!</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- The End of Voting -->

<!-- Staff -->
<div class="container p-4 text-center" id="staff">
    <div class="well">
        <h1>Staff Members</h1>
    </div>
    <div class="row">
        <div class="col-md-4 wow fadeInDown">
            <div class="well">
                <img src="http://minotar.net/helm/DoomGary/200.png" class="img-responsive img-circle">
                <h2>DoomGary</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere efficitur urna non vehicula.</p>
            </div>
        </div>
        <div class="col-md-4 wow fadeInDown">
            <div class="well">
                <img src="http://minotar.net/helm/HeroBrine/200.png" class="img-responsive img-circle">
                <h2>HeroBrine</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere efficitur urna non vehicula.</p>
            </div>
        </div>
        <div class="col-md-4 wow fadeInDown">
            <div class="well">
                <img src="http://minotar.net/helm/BruneiDarussalam/200.png" class="img-responsive img-circle">
                <h2>BruneiDarussalam</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere efficitur urna non vehicula.</p>
            </div>
        </div>
        <div class="col-md-4 wow fadeInDown">
            <div class="well">
                <img src="http://minotar.net/helm/GamingKidBN/200.png" class="img-responsive img-circle">
                <h2>GamingKidBN</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere efficitur urna non vehicula.</p>
            </div>
        </div>
        <div class="col-md-4 wow fadeInDown">
            <div class="well">
                <img src="http://minotar.net/helm/Hypixel/200.png" class="img-responsive img-circle">
                <h2>Hypixel</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere efficitur urna non vehicula.</p>
            </div>
        </div>
        <div class="col-md-4 wow fadeInDown">
            <div class="well">
                <img src="http://minotar.net/helm/Notch/200.png" class="img-responsive img-circle">
                <h2>Notch</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere efficitur urna non vehicula.</p>
            </div>
        </div>
    </div>
</div>
<!-- The End of Staff -->

<!-- Footer -->
<footer>
    <div class="container-fluid footer-down text-center">
        <p>Copyrighted by <?php echo $servername;?> &copy; 2017.</p>
    </div>
</footer>
<!-- The End of Footer -->

<!-- Scripts (Meh)-->
<script type="text/javascript">
    //Clicky event
    $('.copypaste').tooltip({
        trigger: 'click',
        placement: 'bottom'
    });

    //Setting up the tooltip
    function setTooltip(btn, msg) {
        btn.tooltip('hide').attr('data-original-title', msg).tooltip('show');
    }

    //Hiding back the tooltip
    function hideTooptip(btn) {
        setTimeout(function() {
            btn.tooltip('hide');
        }, 1000);
    }

    //Clipboard.js scripts
    var btn = document.getElementById('copypaste');
    var clipboard = new Clipboard(".btn");

    //If success, show the tooltip for a moments
    clipboard.on('success', function(e) {
        var btn = $(e.trigger);
        setTooltip(btn, 'Copied!');
        hideTooptip(btn);
    });

    //If failed, do nothing. Welp
    clipboard.on('error', function(e) {
        console.log(e);
    });

    //onlineplayers live counter scripts
    var ref = setInterval(function() {
        $('#onlineplayers').load('onlineplayers.php');
    }, 1000);
</script>

</body>
</html>