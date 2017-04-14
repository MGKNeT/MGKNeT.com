<?php include"header.php"; ?> 
    <!--Mask-->
    <div class="view view-contact hm-black-strong">
        <div class="full-bg-img flex-center">
            <ul>
                <li>
                    <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s"><?php echo $lang['Contact_slider'] ?></h1></li>
                <li>
                    <p class="wow fadeInDown"><?php echo $lang['Contact_slider_sub'] ?></p>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->
    <!-- Main container-->
    <div class="container">
<!--Section: Contact v.2-->
<section class="section">
    <!--Section heading-->
    <h1 class="section-heading"><?php echo $lang['About_main_heading1'] ?></h1>
    <!--Section sescription-->
    <p class="section-description mb-5"><?php echo $lang['Contact_main_heading1_sub'] ?></p>
    <div class="row">
        <!--First column-->
        <div class="col-md-8">
		<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'MGKNeT Contact Form'; 
		$to = 'bgwolf971@gmail.com'; 
		$subject = 'The contact form from MGKNeT';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 8) {
			$errHuman = 'Your anti-spam is incorrect';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>
<form class="form-horizontal" role="form" method="post" action="contact.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label"><?php echo $lang['Contact_form_name'] ?></label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $lang['Contact_form_name_holder'] ?>" value="<?php echo htmlspecialchars($_POST['name']); ?>">
			<?php echo "<p class='text-danger'>$errName</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label"><?php echo $lang['Contact_form_email'] ?></label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $lang['Contact_form_email_holder'] ?>" value="<?php echo htmlspecialchars($_POST['email']); ?>">
			<?php echo "<p class='text-danger'>$errEmail</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label"><?php echo $lang['Contact_form_message'] ?></label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="human" class="col-sm-2 control-label">5 + 3 = ?</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="human" name="human" placeholder="<?php echo $lang['Contact_form_secanswer'] ?>">
			<?php echo "<p class='text-danger'>$errHuman</p>";?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="<?php echo $lang['Send'] ?>" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php echo $result; ?>	
		</div>
	</div>
</form> 
        </div>
        <!--.First column-->
        <!--Second column-->
        <div class="col-md-4">
            <ul class="contact-icons">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p><?php echo $lang['Contact_location'] ?></p>
                </li>
                <li><i class="fa fa-phone fa-2x"></i>
                    <p>+359 89 682 9477</p>
                </li>
                <li><i class="fa fa-envelope fa-2x"></i>
                    <p>@mgknet.com</p>
                </li>
            </ul>
        </div>
        <!--.Second column-->
    </div>
</section>
<!--/Section: Contact v.2-->
    </div>
    <!--/ Main container-->
<?php include"footer.php"; ?>