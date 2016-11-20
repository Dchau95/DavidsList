<?php
	//Remove this after page is complete.
	echo "count is " . count($listingResponse["listing_images"]);
 ?>

<div class="container main">

	<div class="row">

		<div class="col-sm-4">

			<div id="listingCarousel" class="col-sm-8 carousel slide" style="width: 350px; height: 350px" data-ride="carousel" data-interval="false">

				<ol class="carousel-indicators">
					<li data-target="#listingCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#listingCarousel" data-slide-to="1"></li>
					<li data-target="#listingCarousel" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src= <?php echo 'data:text/html;base64,' . base64_encode($listingResponse["listing_images"][0]->getImage()) ?> alt="placeholder img.">
					</div>
					<div class="item">
						<img src= "http://placehold.it/700x700" alt="placeholder img.">
					</div>
					<div class="item">
						<img src="http://placehold.it/700x700" alt="placeholder img.">
					</div>
				</div>

				<a class="left carousel-control" href="#listingCarousel" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				</a>

				<a class="right carousel-control" href="#listingCarousel" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</a>

			</div>	

		</div>


		<div class="col-sm-8">

			<div class="listing-map">
				<p>Google maps.</p>
			</div>

		</div>

	</div>

	<div class="row">

		<div class="col-sm-8">

			<div class="listing-details">

				<div class="row">
					<div class="col-sm-12">


						<h3 class="listing-title">Listing Name</h3>
						<p class="listing-price"><?php echo $listingResponse["listing"]->getPrice() ?></p>
						<div style="clear: both">
								
							<p class="listing-street-name"><?php echo $listingResponse["address"]->getStreetName() ?></p>
							<p class="listing-city"><?php echo $listingResponse["address"]->getCity() ?></p>
							<p class="listing-state"><?php echo $listingResponse["address"]->getState() ?></p>
							<p class=listing-zipcode><?php echo $listingResponse["address"]->getZipcode() ?></p>

							<br>

							<p class="listing-beds">Bed: <?php echo $listingResponse["listing_detail"]->getNumberOfBedrooms() ?></p>
							<p class="listing-baths">Bath: <?php echo $listingResponse["listing_detail"]->getNumberOfBathrooms() ?></p>
							<p class="listing-internet">Internet: <?php echo $listingResponse["listing_detail"]->getInternet() ? "Yes" : "No" ?></p>
							<p class="listing-pets">Pets: <?php echo $listingResponse["listing_detail"]->getPetPolicy() ?></p>
							<p class="listing-elevator">Elevator: <?php echo $listingResponse["listing_detail"]->getElevatorAccess() ?></p>
							<p class="listing-furnished">Furnished: <?php echo $listingResponse["listing_detail"]->getFurnishing() ? "Yes" : "No" ?></p>
							<p class="listing-ac">A/C: <?php echo $listingResponse["listing_detail"]->getAirConditioning() ? "Yes" : "No" ?></p>

							<p class="listing-desc">
								Description:<br>
								<?php echo $listingResponse["listing_detail"]->getDescription() ?>
							</p>

							<button type="button" class="btn btn-primary rent-button">Rent</button>

							<button type="button" class="btn btn-primary listing-favorite-btn">
								<span class="glyphicon glyphicon-heart"></span> Favorite
							</button>
							
						</div>


					</div>
				</div>

			</div>

		</div>

		<div class="col-sm-4">

			<div class="owner-info">
				<p style="font-size:24px; font-weight: bold">Landlord</p>
				<p class="owner-username">Name: <?php echo $userResponse->getUsername(); ?></p>
				<p class="owner-email">EMail: <?php echo $userResponse->getEmail(); ?></p>

			</div>

		</div>

	</div>

</div>
