<!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">
               <img src="img/logo.png">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>">
                        <a class="nav-link" href="index.php"><?php echo $lang['MENU_HOME']; ?></a>
                    </li>
                    <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'about.php'){echo 'active'; }else { echo ''; } ?>">
                        <a class="nav-link" href="/about">About</a> 
                    </li>
                    <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'portfolio.php'){echo 'active'; }else { echo ''; } ?>">
                        <a class="nav-link"  href="/portfolio">Portfolio </a>
                    </li>
					<li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'services.php'){echo 'active'; }else { echo ''; } ?>">
                        <a class="nav-link"  href="/services">Services </a>
                    </li>
					<li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'blog.php'){echo 'active'; }else { echo ''; } ?>">
                        <a class="nav-link" href="/blog">Blog </a>
                    </li>
                    <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'contact.php'){echo 'active'; }else { echo ''; } ?>">
                        <a class="nav-link" href="/contact">Contact </a>
                    </li>
					
                </ul>
				<ul class="nav navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="" class="nav-link waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/mgknetwork" class="nav-link waves-effect waves-light"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.instagram.com/mgknet/" class="nav-link waves-effect waves-light"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->