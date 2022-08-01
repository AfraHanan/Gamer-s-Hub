<!DOCTYPE html>
<html lang="en">

<?php  include('includes/header.php')  ?>

<section id="subheader" class="text-light" data-bgimage="url(images/background/subheader-dark.jpg) top">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center">
                    <h1>contact</h1>
                    <p>We are 24/7 available for our gamers</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>

<section aria-label="section">
                <div class="container">
						<div class="row">
							
							<div class="col-lg-8 mb-sm-30">
							<h3>Do you have any question?</h3>
							
							<form name="contactForm" id="contact_form" class="form-border" method="post" action="email.php">
								<div class="field-set">
									<input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
								</div>

								<div class="field-set">
									<input type="text" name="email" id="email" class="form-control" placeholder="Your Email" />
								</div>

								<div class="field-set">
									<input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" />
								</div>

								<div class="field-set">
									<textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
								</div>

								<div class="spacer-half"></div>

								<div id="submit">
									<input type="submit" id="send_message" value="Submit Form" class="btn btn-main" />
								</div>
								<div id="mail_success" class="success">Your message has been sent successfully.</div>
								<div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
							</form>
						</div>
						
						<div class="col-lg-4">

							<div class="padding40 box-rounded mb30" data-bgcolor="#292F45">
								<h3>Bangladesh Office</h3>
								<address class="s1">
									<span><i class="id-color fa fa-map-marker fa-lg"></i>Block C, Road 5, Basundhara R/A, Dhaka - 1229, Bangladesh.</span>
									<span><i class="id-color fa fa-phone fa-lg"></i>+18801711-225544</span>
									<span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@gamershub.com">contact@gamershub.com</a></span>
								</address>
							</div>


							<div class="padding40 bg-color text-light box-rounded">
								<h3>Japan Office</h3>
								<address class="s1">
									<span><i class="fa fa-map-marker fa-lg"></i>100 Mainstreet Center, Japan</span>
									<span><i class="fa fa-phone fa-lg"></i>+61 333 9296</span>
									<span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:contact@gamershub.com">contact@gamershub.com</a></span>
								</address>
							</div>

						</div>
							
						</div>
					</div>

            </section>



<?php  include('includes/footer.php')  ?>

<?php  include('includes/scripts.php')  ?>

</body>

</html>