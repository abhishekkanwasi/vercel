<?php include 'header.php';?>
<div class="layout layout-header-fixed profilePage">
	<?php include 'navbar.php';?>
	<div class="layout-main">
		<?php include 'sidebar.php';?>
		<div class="layout-content">
			<div class="profile">
				<div class="profile-header">
					<div class="profile-cover">
						<div class="profile-container">
							<div class="profile-card">
								<div class="profile-avetar">
									<img class="profile-avetar-img" width="128" height="128" src="<?php echo base_url(); ?>/img/user_placeholder.jpeg" alt="Teddy Wilson" style="border-radius: 0">
								</div>
								<div class="profile-overview">
									<h1 class="profile-name">TeddyWilson</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="profile-body" style="margin-top: -15px;">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#overview" data-toggle="tab">
								<i class="glyphicon glyphicon-eye-open"></i> Overview
							</a>
						</li>
						<li class="">
							<a href="#itineary" data-toggle="tab">
								<i class="glyphicon glyphicon-list"></i> Itinerary
							</a>
						</li>
						<li class="">
							<a href="#dates" data-toggle="tab">
								<i class="glyphicon glyphicon-calendar"></i> Dates
							</a>
						</li>
						<li class="">
							<a href="#what-includes" data-toggle="tab">
								<i class="glyphicon glyphicon-ok"></i> Included
							</a>
						</li>
						<li class="">
							<a href="#equipment" data-toggle="tab">
								<i class="glyphicon glyphicon-wrench"></i> Equipment
							</a>
						</li>
						<li class="">
							<a href="#faq" data-toggle="tab">
								<i class="glyphicon glyphicon-compressed"></i> FAQ
							</a>
						</li>
						<li class="">
							<a href="#reviews" data-toggle="tab">
								<i class="glyphicon glyphicon-list-alt"></i> Reviews
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="overview">
							<div class="slider_image_wrap row">
								<h3>Slider Image</h3>
								<div class="col-md-3">
									<div class="slider_image" style="background: url('http://localhost/trekWeb/images/content__images/Kuaripass/1.png');" alt="Kuaripass Overview" class="img-responsive"></div>
								</div>
								<div class="col-md-3">
									<div class="slider_image" style="background: url('http://localhost/trekWeb/images/content__images/Kuaripass/1.png');" alt="Kuaripass Overview" class="img-responsive"></div>
								</div>
								<div class="col-md-3">
									<div class="slider_image" style="background: url('http://localhost/trekWeb/images/content__images/Kuaripass/1.png');" alt="Kuaripass Overview" class="img-responsive"></div>
								</div>
							</div>
							<div class="booking_image">
								<h3>Basic Info</h3>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-time"></i> Days:</td>
												<td style="font-weight: 600">6 Days</td>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-usd"></i> Cost:</td>
												<td style="font-weight: 600">7,599 INR</td>
											</tr>
											
											
											<tr>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-tasks"></i> Level:</td>
												<td style="font-weight: 600">Easy to Moderate</td>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-map-marker"></i> Altitude</td>
												<td style="font-weight: 600">12,516 ft.</td>
											</tr>
											<tr>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-dashboard"></i> Activity per Day:</td>
												<td style="font-weight: 600">Apprx. 4.5 hours walking per day</td>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-dashboard"></i> Activity:</td>
												<td style="font-weight: 600">Sightseeing and hight Altitude Trekking</td>
											</tr>
											<tr>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-globe"></i> State:</td>
												<td style="font-weight: 600">Uttarakhand</td>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-plane"></i> Length:</td>
												<td style="font-weight: 600">25Km</td>
											</tr>
											<tr>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-cloud"></i> Best Season:</td>
												<td style="font-weight: 600">April, May, June, September, October, November, December</td>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-road"></i> Trip Route:</td>
												<td style="font-weight: 600">Dehradun - Joshimath - Guling - <br>Khullara - Chitrakantha - Joshimath - <br>Dehradun</td>
											</tr>
											<tr>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-log-in"></i> Start at:</td>
												<td style="font-weight: 600">Joshimath</td>
												<td style="color:#e66a1f; font-weight: 600"><i class="glyphicon glyphicon-log-out"></i> Ends at:</td>
												<td style="font-weight: 600">Joshimath</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="booking_image">
								<h3>Trek Highlights</h3>
								<ul class="list-text" style="list-style-type:none;padding: 0px;">
									<li style="padding-bottom: 5px"><i class="icon icon-check" style="color:#e66a1f"></i> This trek has the most ancient and most beautiful forest trails.</li>
									<li style="padding-bottom: 5px"><i class="icon icon-check" style="color:#e66a1f"></i> You get to see a spectacular view of the forests.</li>
									<li style="padding-bottom: 5px"><i class="icon icon-check" style="color:#e66a1f"></i> The most interesting thing is that you interplay with two different landscapes i.e. you will get out of the forests towards a clearing or a meadow and then you will get back in.</li>
									<li style="padding-bottom: 5px"><i class="icon icon-check" style="color:#e66a1f"></i> It’s not always about trekking, camping is another fun part of a trek, so you get a chance to camp between the heart of the forest i.e. Chitrakantha.</li>
									<li style="padding-bottom: 5px"><i class="icon icon-check" style="color:#e66a1f"></i> Last but not the least, in this trek mountain views are what die for. You will see superb mountain views from the starting of this trek.</li>
									<li style="padding-bottom: 5px"><i class="icon icon-check" style="color:#e66a1f"></i> The trek is tough during January and February.</li>
									<li style="padding-bottom: 5px"><i class="icon icon-check" style="color:#e66a1f"></i> Camping and staying in comfortable tents.</li>
									<li style="padding-bottom: 5px"><i class="icon icon-check" style="color:#e66a1f"></i> Experienced leaders will guide you through this trek.</li>
								</ul>
							</div><div class="booking_image">
								<h3>Trek Introduction</h3>
								<p>The Kuari Pass is short and moderate level trek with spectacular view of Garhwal Himalayas. The word Kuari means “a gateway” and it is truly a door of exploring the routes for the splendid views of the Himalayas in the richest manners. This trek is well known for its views and is often considered as the best in Indian Himalayas, but it’s not hard to know the reason. </p>
								<p>Our meeting place will be Dehradun from where we will go to Joshimath which is the starting point of our trek. Joshimath has evolved now into a hub of trekkers. The next part of the trek is through the small remote villages of the Himalaya which gives us a peak into seeing and learning about the life and habitat of the people of this region. Most of the trek includes walking through the beautiful and enchanting views of meadows of the Himalayas, also known as 'Bugyals'. The trek also leads us to a town named Auli which is one of the most famous ski center of the region. Best time for this trek is between November till March.</p>
							</div>
							<div class="booking_image">
								<h3>What makes this trip different?</h3>
								<p>The name of this trek itself explains all, as it opens up the gateways for exploring which has not been witnessed yet. This trek is a bit tough which gives an opportunity to the trekkers of knowing their strength and brings you closer to the nature.</p>
								<p>The trekkers will experience the most exotic sights of Chaukhamba and Chitrakantha with their serenity and valuable views from the summits of the Himalayas. The winter views of this trek are mostly cited as the best views of Indian Himalayas. </p>
							</div>
							<div class="booking_image">
								<h3>Itinerary Overview</h3>
								<img src="http://localhost/trekWeb/images/content__images/kuaripass-itinerary.gif" class="img-responsive" alt="kuaripass map">
							</div>
							<div class="booking_image">
								<h3>Why Our Clients Like Us?</h3>
								<div class="col-md-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="glyphicon glyphicon-flag"></i>
										</div>
										<div class="feature-box-info">
											<h4>Our fantastic location</h4>
											<p>
												You will be always in a heaven which you can't express in words after get back to your home.
											</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="glyphicon glyphicon-briefcase"></i>
										</div>
										<div class="feature-box-info">
											<h4>Our expert Guides</h4>
											<p>
												Our experts will always help you to live like a bird with under expert advise.
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="glyphicon glyphicon-globe"></i>
										</div>
										<div class="feature-box-info">
											<h4>Our beautiful trekking area</h4>
											<p>
												Trekveda always tries to discover a beautiful place for trekking.
											</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="glyphicon glyphicon-ok"></i>
										</div>
										<div class="feature-box-info">
											<h4>Well-equipped Staff</h4>
											<p>
												A healthy, energetic and well equipped staff can give you best experience.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>