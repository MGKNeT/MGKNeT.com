<? include"header.php"; ?>
    <body class="lt-layout-octaskin lt-page-home">
        <div id="lt-page-surround">
            <section id="lt-navigation" class="lt-section section lt-no-background">
                <div class="lt-row row">
                    <div class="lt-content lt-navigation-content">
                        <div class="lt-navbar navbar-fixed">
                            <nav class="lt-no-background">
                            <div class="nav-wrapper">
                                <div class="lt-container container">
                                    <a href="index.php" class="brand-logo white-text" title="MGKNeT">
										<img src="images/logo-white.png">
                                    </a>
                                    <a href="#" data-activates="mobile-menu" class="lt-mobile-toggle button-collapse"><i class="material-icons">menu</i></a>
                                    <ul class="right hide-on-med-and-down">
                                        <li class="">
											<a href="index.php" title="Homepage">Home</a>
                                        </li>
                                        <li class="">
											<a href="/about" title="About">About</a>
                                        </li>
										<!--<li class="">
											<a href="/services">Services</a>
                                        </li> -->
                                        <li class="">
											<a href="/portfolio" title="Portfolio">Portfolio</a>
                                        </li>
                                        <li class="active">
											<a href="/contact" title="Contact information">Contact</a>
                                        </li>
                                    </ul>
                                    <ul class="side-nav" id="mobile-menu" style="transform: translateX(-100%);">
                                        <li class=""><a href="index.php" title="Homepage">Home</a>
                                        </li>
                                        <li class=""><a href="/about" title="About">About</a>
                                        </li>
                                        <li class=""><a href="/portfolio" title="Portfolio">Portfolio</a>
                                        </li>
                                        <li class="active"><a href="/contact" title="Contact information">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section id="lt-header" class="lt-section lt-section-fullwidth section">
                <div class="lt-container container">
                    <div class="lt-content lt-header-content">
                        <div class="lt-row row">
                            <div class="lt-col col s12">
                                <div class="lt-parallax-header parallax-container" style="height: 400px;">
                                    <div class="lt-parallax parallax">
										<img src="https://mgknet.com/images/pages/contact/header/img-01.jpg" alt="Header image" style="display: block; transform: translate3d(-50%, 283px, 0px);">
									</div>
                                    <div class="lt-parallax-content">
                                        <div class="valign-wrapper" style="height: 400px;">
                                            <div class="valign">
                                                <h2 class="lt-title">Contact</h2>
                                                <p class="lt-subtitle flow-text">Keep in Touch with Us</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="lt-mainpage" class="lt-section section">
                <div class="lt-container container">
                    <div class="lt-content lt-mainpage-content">
                        <div class="lt-row row">
                            <div class="lt-col col s12">
                                <h2 class="lt-title">What We Do</h2>
                                <p class="flow-text">MGKNeT provides general customer service via email and aims to respond to all queries within 24 hours.</p>		
								<div class="lt-vertical-spacer"></div>
								<p><i class="fa fa-mobile" aria-hidden="true"></i> Mobile Phone: +359 89 682 9477</p>
                                <p>
                                    <?php
										$action=$_REQUEST['action'];
										if ($action=="")    /* display the contact form */
											{
									?>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="action" value="submit"> Your name:
                                            <p>
                                            <input name="name" type="text" value="" size="30" /></p>
                                            <br> Your email:
                                            <p>
                                            <input name="email" type="email" value="" size="30" /></p>
                                            <br> Your message:
                                            <p>
                                            <textarea name="message" rows="7" cols="30"></textarea></p>
                                            <p>
                                            <div class="g-recaptcha" data-sitekey="6Ld0SBgTAAAAAJAIOf5VViUZPxouZGjdpHoSdJZn"></div></p>
                                            <input type="submit" value="Send email" />
                                        </form>
                                        <?php
											} 
										else                /* send the submitted data */
											{
											$name=$_REQUEST['name'];
											$email=$_REQUEST['email'];
											$message=$_REQUEST['message'];
											if (($name=="")||($email=="")||($message==""))
												{
												echo "All fields are required, please fill the form again.";
												}
											else{		
												$from="From: $name<$email>\r\nReturn-path: $email";
												$subject="Message sent using your contact form";
												mail("mrgabrielkanev@gmail.com", $subject, $message, $from);
												echo "Email sent!";
												}
											}  
										?>
                                </p>
                            </div>
                        </div>
                    </div>
            </section>
            <? include"footer.php"; ?>