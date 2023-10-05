<!-- TOPBAR -->
<div class="beker_tm_topbar">
    <div class="in">
        <div class="container">
            <div class="topbar_inner">
                <div class="logo">
                    <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                </div>
                <div class="menu">
                    <ul class="anchor_nav">
                        <li <?= (isset($_REQUEST['hal']) && $_REQUEST['hal'] == 'home') ? 'class="current"' : '' ?>><a
                                href="index.php?hal=home">Home</a></li>
                        <li <?= (isset($_REQUEST['hal']) && $_REQUEST['hal'] == 'about') ? 'class="current"' : '' ?>><a
                                href="index.php?hal=about">About</a></li>
                        <li <?= (isset($_REQUEST['hal']) && $_REQUEST['hal'] == 'portfolio') ? 'class="current"' : '' ?>><a
                                href="index.php?hal=portfolio">Portfolio</a></li>
                        <li <?= (isset($_REQUEST['hal']) && $_REQUEST['hal'] == 'contact') ? 'class="current"' : '' ?>><a
                                href="index.php?hal=contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /TOPBAR -->

<!-- MOBILE MENU -->
<div class="beker_tm_mobile_menu">
    <div class="mobile_menu_inner">
        <div class="container">
            <div class="mobile_in">
                <div class="logo">
                    <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                </div>
                <div class="my_trigger">
                    <div class="hamburger hamburger--collapse-r">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown">
        <div class="container">
            <div class="dropdown_inner">
                <ul class="anchor_nav">
                    <li <?= (isset($_REQUEST['hal']) && $_REQUEST['hal'] == 'home') ? 'class="current"' : '' ?>><a
                            href="index.php?hal=home">Home</a></li>
                    <li <?= (isset($_REQUEST['hal']) && $_REQUEST['hal'] == 'about') ? 'class="current"' : '' ?>><a
                            href="index.php?hal=about">About</a></li>
                    <li <?= (isset($_REQUEST['hal']) && $_REQUEST['hal'] == 'portfolio') ? 'class="current"' : '' ?>><a
                            href="index.php?hal=portfolio">Portfolio</a></li>
                    <li <?= (isset($_REQUEST['hal']) && $_REQUEST['hal'] == 'contact') ? 'class="current"' : '' ?>><a
                            href="index.php?hal=contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /MOBILE MENU -->