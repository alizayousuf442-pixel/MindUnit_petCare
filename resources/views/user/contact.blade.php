@extends('user.master')
@section('content')

<!-- Contact Hero Section with Gradient Background -->
<section class="py-5 text-white" style="background: var(--main-gradient); background-size: cover; background-attachment: fixed;">
    <div class="container text-center">
        <h1 class="display-4 mb-3">Get in Touch with Us</h1>
        <p class="lead mb-4">We’re here to answer your questions and help your pets</p>
        <a href="#contactForm" class="btn btn-warning btn-lg">Send Message</a>
    </div>
</section>


<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Contact Form #03</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="row mb-5">
						<div class="col-md-3">
							<div class="dbox text-center">
				        		<div class="icon">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
					          </div>
				          </div>
						</div>
						<div class="col-md-3">
							<div class="dbox text-center">
				        		<div class="icon">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="texts">
					            <p  class="texts"><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
					          </div>
				          </div>
						</div>
						<div class="col-md-3">
							<div class="dbox text-center">
				        		<div class="icon">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
					          </div>
				          </div>
						</div>
						<div class="col-md-3">
							<div class="dbox text-center">
				        		<div class="icon">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Website</span> <a href="#">yoursite.com</a></p>
					          </div>
				          </div>
						</div>
					</div>

					<div class="row no-gutters">
						<div class="col-md-7">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<h3 class="mb-4">Contact Us</h3>
								<form method="POST" id="contactForm" name="contactForm" class="contactForm">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="texts " for="name">Full Name</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Name">
											</div>
										</div>
										<div class="col-md-6"> 
											<div class="form-group">
												<label class="texts" for="email">Email Address</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Email">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="texts" for="subject">Subject</label>
												<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
											</div>
										</div>
										<div class="col-md-12">
											<div class="text">
												<label class="texts" for="#">Message</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12 mt-3">
											<div class="texts">
												<input type="submit" value="Send Message" class="btn btn-warning">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-5 d-flex align-items-stretch">
							<div class="info-wrap w-100 p-5 img" style="background-image: url(images/img.jpg);"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div style="height: 400px; width: 100%; border-radius: 15px; overflow: hidden;">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7057379.130721952!2d63.70826220438128!3d30.26598284214034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2s!4v1757466470115!5m2!1sen!2s"
    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
  </iframe>
</div>

</div>



@endsection
