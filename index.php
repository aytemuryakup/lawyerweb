<?php 

include 'header.php';


include 'nedmin/netting/baglan.php';


$hakkimizdasor = $db->prepare("SELECT * FROM about WHERE about_id=:id");
$hakkimizdasor-> execute(array(

"id"=> 1
));

$hakkimizdacek = $hakkimizdasor-> fetch(PDO::FETCH_ASSOC); 






 ?>

    <section id="gtco-hero" class="gtco-cover" style="background-image: url(images/img_bg_4.jpg);"  data-section="home"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeIn">The Greatest Firm You Can Trust</h1>
							<p class="gtco-video-link animate-box" data-animate-effect="fadeIn"><a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-controller-play"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<section id="gtco-about" data-section="about">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1><?php echo $hakkimizdacek['about_welcome'] ?></h1>
					<p class="sub"><?php echo $hakkimizdacek['about_minidesc'] ?></p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">HOŞGELDİNİZ</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="images/img_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="heading-colored"><?php echo $hakkimizdacek['about_title'] ?></h2>
					<p><?php echo $hakkimizdacek['about_content'] ?></p>
					<h3 class="heading-colored">İlkelerimiz</h3>
					<p><?php echo $hakkimizdacek['about_mission'] ?></p>
					<!--<p><a href="#" class="read-more">Read more <i class="icon-chevron-right"></i></a></p>-->
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-practice-areas" data-section="practice-areas">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Practice Areas</h1>
					<p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Practice <span>Areas</span></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Criminal Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Industrial Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Financial Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

				</div>
				<div class="col-md-6">
					
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Divorce Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Corporate Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Accident Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>



	<section id="gtco-our-team" data-section="our-team">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Our Team</h1>
					<p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Our Team</p>
				</div>
			</div>
			<div class="row team-item gtco-team-reverse">
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="images/img_team_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<h2>Jeff Finley</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

			<div class="row team-item gtco-team">
				<div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="images/img_team_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2>Craig Campbell</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

		</div>
	</section>

	<section id="gtco-contact" data-section="contact">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>Bizimle İletişime Geçmek İster misiniz?</h1>
					<p class="sub"><?php echo $ayarcek['settings_contact'] ?></p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">İLETİŞİM</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-push-6 animate-box">
					<form action="#">
						<div class="form-group">
							<label for="name" class="sr-only">İsim-Soyisim</label>
							<input type="text" class="form-control" placeholder="İsim-Soyisim" id="name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="text" class="form-control" placeholder="Email" id="email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Mesajımız</label>
							<textarea name="message" id="message" class="form-control" cols="30" rows="7" placeholder="Mesajınız"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>
					</form>
				</div>
				<div class="col-md-4 col-md-pull-6 animate-box">
					<div class="gtco-contact-info">
						<ul>
							<li class="address"><?php echo $ayarcek['settings_adress'] ?></li>
							<li class="phone"><a href="tel://<?php echo $ayarcek['settings_mobile'] ?>"><?php echo $ayarcek['settings_mobile'] ?></a></li>
							<li class="email"><a href="mailto:<?php echo $ayarcek['settings_email'] ?>"><?php echo $ayarcek['settings_email'] ?></a></li>
							<li class="url"><a href="#"><?php echo $ayarcek['settings_webadress'] ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php 

	include 'footer.php';


	 ?>