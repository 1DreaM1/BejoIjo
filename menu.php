<?php $page = basename($_SERVER['PHP_SELF']); ?>
<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 text-left">
                <div id="fh5co-logo"><a href="index.php">Bejo Ijo<span>.</span></a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <li <?php echo $page == 'index.php' ? 'class="active"' : null; ?>><a href="index.php">Home</a></li>
                    <li class="has-dropdown <?php echo $page == 'plugins.php' ? 'active' : null; ?>">
                        <a href="plugins.php">LSPDFR Plugins</a>
                        <ul class="dropdown">
                            <li><a href="stoptheped.php">Stop The Ped</a></li>
                            <li><a href="#">Ultimate Backup </a></li>
                            <li><a href="#">CompuLite</a></li>
                            <li><a href="#">Simple Callouts </a></li>
                            <li><a href="#">Speed Radar Lite </a></li>
                            <li><a href="#">ALPR Lite</a></li>
                            <li><a href="#">Attempted Crime Callouts</a></li>
                        </ul>
                    </li>
                    <li <?php echo $page == 'contact.php' ? 'class="active"' : null; ?>><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>