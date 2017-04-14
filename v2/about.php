<?php 
include_once "header.php";
?>
    <!--Mask-->
    <div class="view view-about hm-black-strong">
        <div class="full-bg-img flex-center">
            <ul>
                <li>
                    <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s"><?php echo $lang['About_slider'] ?></h1></li>
                <li>
                    <p class="wow fadeInDown"><?php echo $lang['About_slider_sub'] ?></p>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->

    <!-- Main container-->
    <div class="container">

        <!--Section: About-->
			<section class="section feature-box">

				<!--Section heading-->
				<h1 class="section-heading"><?php echo $lang['About_main_heading1'] ?></h1>
				
				<!--First row-->
				<div class="row features-big">
					<!--First column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-bars blue-text"></i>
						<h4 class="feature-title"><?php echo $lang['About_main_subheading1'] ?></h4>
						<p class="grey-text"><?php echo $lang['About_main_content1'] ?></p>
					</div>
					<!--/First column-->

					<!--Second column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-globe green-text"></i>
						<h4 class="feature-title"><?php echo $lang['About_main_subheading2'] ?></h4>
						<p class="grey-text"><?php echo $lang['About_main_content2'] ?></p>
					</div>
					<!--/Second column-->

					<!--Third column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-clone red-text"></i>
						<h4 class="feature-title"><?php echo $lang['About_main_subheading3'] ?></h4>
						<p class="grey-text"><?php echo $lang['About_main_content3'] ?></p>
					</div>
					<!--/Third column-->
				</div>
				<!--/First row-->

			</section>
			<!--/Section: Features v.1-->


<!--Section: Team v.4-->
<section class="section">

    <!--Section heading-->
    <h1 class="section-heading"><?php echo $lang['About_about_heading2'] ?></h1>
    <!--Section sescription-->
    <p class="section-description"><?php echo $lang['About_about_heading2_sub'] ?></p>
    <br>
    <div class="row">
        <!--First column-->
        <div class="col-lg-4 col-md-12">
            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-1" class="card-rotating effect__click">
                    <!--Front Side-->
                    <div class="face front">
                        <!-- Image-->
                        <div class="card-up">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(55).jpg">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="https://scontent.fsof3-1.fna.fbcdn.net/v/t1.0-9/13620273_1074474762635809_168440058747346248_n.jpg?oh=f33e128e75bc64a94caf2a04fa2f78d2&oe=590AC2FA" class="rounded-circle img-responsive">
                        </div>
                        <!--Content-->
                        <div class="card-block">
                            <h4><?php echo $lang['About_devs_name1'] ?></h4>
                            <p><?php echo $lang['About_devs_profession1'] ?></p>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i><?php echo $lang['About_btn_rotate'] ?></a>
                        </div>
                    </div>
                    <!--/.Front Side-->
                    <!--Back Side-->
                    <div class="face back">
                        <!--Content-->
                        <h4><?php echo $lang['About_devs_about'] ?></h4>
                        <hr>
                        <p><?php echo $lang['About_devs_bio1'] ?></p>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a href="https://www.facebook.com/mrgkanev.eu" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/mrgkanev" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/mrgkanev" class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
                            <li><a href="https://github.com/MrGKanev" class="icons-sm git-ic"><i class="fa fa-github"> </i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i><?php echo $lang['About_btn_rotateback'] ?></a>
                    </div>
                    <!--/.Back Side-->
                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/First column-->
        <!--Second column-->
        <div class="col-lg-4 col-md-12">
            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-2" class="card-rotating effect__click">
                    <!--Front Side-->
                    <div class="face front">
                        <!-- Image-->
                        <div class="card-up">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(64).jpg">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="https://scontent-otp1-1.xx.fbcdn.net/v/t1.0-9/14225396_1515493251810351_8443996557193278557_n.jpg?oh=a11081818640b18dc73120c14c20feaa&oe=5950C353" class="rounded-circle img-responsive">
                        </div>
                        <!--Content-->
                        <div class="card-block">
                            <h4><?php echo $lang['About_devs_name2'] ?></h4>
                            <p><?php echo $lang['About_devs_profession2'] ?></p>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-2"><i class="fa fa-repeat"></i><?php echo $lang['About_btn_rotate'] ?></a>
                        </div>
                    </div>
                    <!--/.Front Side-->
                    <!--Back Side-->
                    <div class="face back">
                        <!--Content-->
                        <h4><?php echo $lang['About_devs_about'] ?></h4>
                        <hr>
                        <p><?php echo $lang['About_devs_bio2'] ?></p>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a href="https://www.facebook.com/Krokits" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/Krokits" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.facebook.com/mrgkanev.eu" class="icons-sm drib-ic"><i class="fa fa-dribbble"> </i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-2"><i class="fa fa-undo"></i><?php echo $lang['About_btn_rotateback'] ?></a>
                    </div>
                    <!--/.Back Side-->
                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/Second column-->
        <!--Third column-->
        <div class="col-lg-4 col-md-12">
            <!--Rotating card-->
            <div class="card-wrapper">
                <div id="card-3" class="card-rotating effect__click">
                    <!--Front Side-->
                    <div class="face front">
                        <!-- Image-->
                        <div class="card-up">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(68).jpg">
                        </div>
                        <!--Avatar-->
                        <div class="avatar"><img src="https://scontent.fsof3-1.fna.fbcdn.net/v/t1.0-9/15698193_1056272474481238_469239035440261640_n.jpg?oh=242f59327f45bafabeca6f37183fafe8&oe=593AB767" class="rounded-circle img-responsive">
                        </div>
                        <!--Content-->
                        <div class="card-block">
                            <h4><?php echo $lang['About_devs_name3'] ?></h4>
                            <p><?php echo $lang['About_devs_profession3'] ?></p>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-3"><i class="fa fa-repeat"></i><?php echo $lang['About_btn_rotate'] ?></a>
                        </div>
                    </div>
                    <!--/.Front Side-->
                    <!--Back Side-->
                    <div class="face back">
                        <!--Content-->
                        <h4><?php echo $lang['About_devs_about'] ?></h4>
                        <hr>
                        <p><?php echo $lang['About_devs_bio3'] ?></p>
                        <hr>
                        <!--Social Icons-->
                        <ul class="inline-ul">
                            <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                            <li><a href="https://www.facebook.com/jstamby/" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                            <li><a href="#" class="icons-sm git-ic"><i class="fa fa-github"> </i></a></li>
                            <li><a href="#" class="icons-sm li-ic"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <!--Triggering button-->
                        <a class="rotate-btn" data-card="card-3"><i class="fa fa-undo"></i><?php echo $lang['About_btn_rotateback'] ?></a>
                    </div>
                    <!--/.Back Side-->
                </div>
            </div>
            <!--/.Rotating card-->
        </div>
        <!--/Third column-->
    </div>
</section>
<!--/Section: Team v.4-->
    </div>
    <!--/ Main container-->
<?php include"footer.php"; ?>