<div class="container main">
	<div class="row rent-out">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<form class="form-rentout linear-gradient-bg" id="rentout" action="#" method="post">

				<div class="form-group row">
					<label for="form-image" class="col-sm-2 text-right">Image</label>
					<div class="col-sm-10">
						<input type="file" name="listing-image" id="form-image" multiple>
					</div>

				</div>

				<div class="form-group row">
					<label for="form-price" class="col-sm-2 text-right">Price</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="listingprice" id="form-price" placeholder="Price">
					</div>
				</div>

				<div class="form-group row">
					<label for="form-address" class="col-sm-2 text-right">Address</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="listingaddress" id="form-address" placeholder="address">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 text-right">Approximate Address</label>
					<div class="col-sm-10">
						<label for="listing-internet">
							<input type="checkbox" name="listingaddressapprox" id="form-approx" value="approximate">
						</label>
					</div>
				</div>

				<div class="form-group row">
					<label for="form-city" class="col-sm-2 text-right">City</label>
					<div class="col-sm-3">
						<input class="form-control" type="text" name="listingcity" id="form-city" placeholder="city">
					</div>
					<label for="form-state" class="col-sm-1 text-right">State</label>
					<div class="col-sm-2">
						<select class="form-control" name="listingstate" id="form-state" style="width: auto;">
							<option value="">N/A</option>
							<option value="AK">Alaska</option>
							<option value="AL">Alabama</option>
							<option value="AR">Arkansas</option>
							<option value="AZ">Arizona</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DC">District of Columbia</option>
							<option value="DE">Delaware</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="IA">Iowa</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="MA">Massachusetts</option>
							<option value="MD">Maryland</option>
							<option value="ME">Maine</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MO">Missouri</option>
							<option value="MS">Mississippi</option>
							<option value="MT">Montana</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="NE">Nebraska</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NV">Nevada</option>
							<option value="NY">New York</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="PR">Puerto Rico</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VA">Virginia</option>
							<option value="VT">Vermont</option>
							<option value="WA">Washington</option>
							<option value="WI">Wisconsin</option>
							<option value="WV">West Virginia</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>
					<label for="form-zipcode" class="col-sm-2 text-right">Zip</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="listingzipcode" id="form-zipcode" placeholder="zip code">
					</div>

				</div>

				<div class="form-group row">
					<label for="form-numofbeds" class="col-sm-2 text-right">Number of Bedrooms</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="listingnumofbeds" id="form-numofbeds" placeholder="Number of Bedrooms">
					</div>
				</div>
				<div class="form-group row">
					<label for="form-numofbaths" class="col-sm-2 text-right">Number of Bathrooms</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="listingnumofbaths" id="form-numofbaths" placeholder="Number of Bathrooms">
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-sm-2 text-right">Type</label>
					<div class="col-sm-10">
						<label for="listing-apt">
							<input type="radio" name="listingtype" id="listing-apt" value="apartment">Apartment
						</label>
						<label for="listing-house">
							<input type="radio" name="listingtype" id="listing-house" value="house">House
						</label>
						<label for="listing-room">
							<input type="radio" name="listingtype" id="listing-room" value="room">Room
						</label>
						<label for="listing-shared-room">
							<input type="radio" name="listingtype" id="listing-shared-room" value="sharedroom">Shared room
						</label>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 text-right">Misc</label>
					<div class="col-sm-10">
						<label for="listing-internet">
							<input type="checkbox" name="listingmisc" id="listing-internet" value="internet">Internet
						</label>
						<label for="listing-pets">
							<input type="checkbox" name="listingmisc" id="listing-pets" value="pet">Pets
						</label>
						<label for="listing-elevator">
							<input type="checkbox" name="listingmisc" id="listing-elevator" value="elevator">Elevator
						</label>
						<label for="listing-furnished">
							<input type="checkbox" name="listingmisc" id="listing-furnished" value="furniture">Furnished
						</label>
						<label for="listing-ac">
							<input type="checkbox" name="listingmisc" id="listing-ac" value="airconditioning">Air Conditioning
						</label>
					</div>
				</div>

				<div class="form-group row">
					<label for="listing-description" class="col-sm-2 text-right">Description</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="listing-description" rows="4" placeholder="Description"></textarea>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3"></div>
					<button class="btn btn-primary col-sm-6" id="submit-listing" type="submit">Post Listing</button>
					<div class="col-sm-3"></div>
				</div>

			</form>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>

<script src = "<?php echo URL; ?>js/listings.js"></script>

<script>
	
	$(document).ready(function() {

		$.validator.addMethod("letters", function(value, element) 
			{
				return this.optional(element) || /^[a-z ]+$/i.test(value);
			}, "Alphabetical letters only!");

			$("#rentout").validate({
				rules: {
					listingaddress: {
						required: true,
						minlength: 1
					},
					listingcity: {
						required: true,
						letters: true,
						minlength: 2
					},
					listingstate: {
						required: true
					},
					listingprice: {
						required: true,
						number: true
					},
					listingzipcode: {
						required: true,
						number: true,
						minlength: 5,
						maxlength: 5
					},
					listingnumofbeds: {
						required: true,
						number: true
					},
					listingnumofbaths: {
						required: true,
						number: true
					},
					listingtype: {
						required: true
					}

				},
				messages: {
					listingaddress: {
						required: "required"
					},
					listingcity: {
						required: "required"
					},
					listingstate: {
						required: "required"
					},
					listingzipcode: {
						required: "required"
					},
					listingnumofbeds: {
						required: "required"
					},
					listingnumofbaths: {
						required: "required"
					},
					listingtype: {
						required: "required"
					}
				},
				highlight: function(element) {
					$(element).addClass("form-error");
				},
				unhighlight: function(element) {
					$(element).removeClass("form-error");
				},
				errorPlacement: function(error, element) {
					error.insertAfter(element);
					error.css('color', '#ff0000');
				}
				// submitHandler: function(form) {
				// 	form.submit();
				// }

			});
		});

</script>