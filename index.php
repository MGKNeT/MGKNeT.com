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
			<?php include "testemonials.php"; ?>	
	</div>
</main>
  <?php include "include/footer.php"; ?>