<?php include "include/header.php"; ?>
    <!--Carousel Wrapper-->
    <div id="carousel" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('img/slider/img-02.jpg'); background-repeat: no-repeat; background-size: cover;">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="h1-responsive flex-item"><?php echo $lang['Index_slaider1'] ?></h1>
                            <li>
                                <p class="flex-item sub"><?php echo $lang['Index_slaider1_pod'] ?></p>
                            </li>
                    </ul>
                </div>
                <!-- /.Caption -->
            </div>
            <!-- /.First slide -->
            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('img/slider/img-03.jpg'); background-repeat: no-repeat; background-size: cover;">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="h1-responsive"><?php echo $lang['Index_slaider2'] ?></h1>
                        </li>
                        <li>
                            <p class="flex-item sub"><?php echo $lang['Index_slaider2_pod'] ?></p>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
            </div>
            <!-- /.Second slide -->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    <!--/.Main layout-->
<main>
	<div class="container">
			<!--Section: Features v.1-->
			<section class="section feature-box">
				<!--Section heading-->
				<h1 class="section-heading"><?php echo $lang['Index_main_heading1'] ?></h1>
				<!--First row-->
				<div class="row features-big">
					<!--First column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-bars blue-text"></i>
						<h4 class="feature-title"><?php echo $lang['Index_main_subheading1'] ?></h4>
						<p class="grey-text"><?php echo $lang['Index_main_content1'] ?></p>
					</div>
					<!--/First column-->
					<!--Second column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-globe green-text"></i>
						<h4 class="feature-title"><?php echo $lang['Index_main_subheading2'] ?></h4>
						<p class="grey-text"><?php echo $lang['Index_main_content2'] ?></p>
					</div>
					<!--/Second column-->
					<!--Third column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-clone red-text"></i>
						<h4 class="feature-title"><?php echo $lang['Index_main_subheading3'] ?></h4>
						<p class="grey-text"><?php echo $lang['Index_main_content3'] ?></p>
					</div>
					<!--/Third column-->
				</div>
				<!--/First row-->
				<!--First row-->
				<div class="row features-big">
					<!--First column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-fire blue-text"></i>
						<h4 class="feature-title"><?php echo $lang['Index_main_subheading4'] ?></h4>
						<p class="grey-text"><?php echo $lang['Index_main_content4'] ?></p>
					</div>
					<!--/First column-->
					<!--Second column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-thumbs-o-up green-text"></i>
						<h4 class="feature-title"><?php echo $lang['Index_main_subheading5'] ?></h4>
						<p class="grey-text"><?php echo $lang['Index_main_content5'] ?></p>
					</div>
					<!--/Second column-->
					<!--Third column-->
					<div class="col-md-4 mb-r">
						<i class="fa fa-file-text red-text"></i>
						<h4 class="feature-title"><?php echo $lang['Index_main_subheading6'] ?></h4>
						<p class="grey-text"><?php echo $lang['Index_main_content6'] ?></p>
					</div>
					<!--/Third column-->
				</div>
				<!--/First row-->
			</section>
			<!--/Section: Features v.1-->
			<!--Section: Testimonials v.2-->
			<section class="section">
				<!--Section heading-->
				<h1 class="section-heading"><?php echo $lang['Index_main_heading2'] ?></h1>
				<!--Section sescription-->
				<!--Carousel Wrapper-->
				<div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel" data-interval="false">
					<!--Slides-->
					<div class="carousel-inner" role="listbox">
						<!--First slide-->
						<div class="carousel-item active">
							<div class="testimonial">
								<!--Avatar-->
								<div class="avatar">
									<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle img-fluid" alt="First sample avatar image">
								</div>
								<!--Content-->
								<p><i class="fa fa-quote-left"></i><?php echo $lang['Index_users_quote1'] ?></p>
								<h4><?php echo $lang['Index_users_name1'] ?></h4>
								<h5><?php echo $lang['Index_users_profession1'] ?></h5>
								<!--Review-->
								<i class="fa fa-star"> </i>
								<i class="fa fa-star"> </i>
								<i class="fa fa-star"> </i>
								<i class="fa fa-star"> </i>
								<i class="fa fa-star-half-full"> </i>
							</div>
						</div>
						<!--/First slide-->
						<!--Second slide-->
						<div class="carousel-item">
							<div class="testimonial">
								<!--Avatar-->
								<div class="avatar">
									<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" class="rounded-circle img-fluid" alt="Second sample avatar image">
								</div>
								<!--Content-->
								<p><i class="fa fa-quote-left"></i> <?php echo $lang['Index_users_quote2'] ?> </p>
								<h4><?php echo $lang['Index_users_name2'] ?></h4>
								<h5><?php echo $lang['Index_users_profession2'] ?></h5>
								<!--Review-->
								<i class="fa fa-star"> </i>
								<i class="fa fa-star"> </i>
								<i class="fa fa-star"> </i>
								<i class="fa fa-star"> </i>
								<i class="fa fa-star"> </i>
							</div>
						</div>
						<!--/Second slide-->
						<!--Third slide-->
						<div class="carousel-item">
							<div class="testimonial">
								<!--Avatar-->
								<div class="avatar">
									<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle img-fluid" alt="Third sample avatar image">
								</div>
								<!--Content-->
								<p><i class="fa fa-quote-left"></i> <?php echo $lang['Index_users_quote3'] ?></p>
								<h4><?php echo $lang['Index_users_name3'] ?></h4>
								<h5><?php echo $lang['Index_users_profession3'] ?></h5>
								<!--Review-->
								<i class="fa fa-star"> </i>
								<i class="fa fa-star"> </i>
								<i class="fa fa-star"> </i>
								<i class="fa fa-star"> </i>
								<i class="fa fa-star-o"> </i>
							</div>
						</div>
						<!--/Third slide-->
					</div>
					<!--/.Slides-->
					<!--Controls-->
					<a class="carousel-item-prev left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
						<span class="icon-prev" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-item-next right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
						<span class="icon-next" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					<!--/.Controls-->
				</div>
				<!--/.Carousel Wrapper-->
			</section>
			<!--Section: Testimonials v.2-->
	</div>
</main>
  <?php include "include/footer.php"; ?>