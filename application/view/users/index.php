<div class="container" style="margin-top: 25px">
	<div class="row">
		<div class="col-md-2">
			<ul id="myPills" class="nav nav-pills nav-stacked" style="margin-top: 45PX">
				<li class="active"><a href="<?php echo URL. "users/getuser/{$userID}";?>"><h4>Overview</h4></a></li>
				<li><a href="<?php echo URL. "users/favorites/{$userID}";?>"><h4>Favorite</h4></a></li>
				<li><a href="<?php echo URL. "users/userlistings/{$userID}"?>"><h4>My Listing</h4></a></li>
			</ul>
		</div>

		<div class="col-md-10 user-overview custom-border linear-gradient-bg">
			<form id="accountoverview" action="#" method="post">
				<div class="form-group row">

					<div class="col-md-1"></div>
					<div class="col-md-3">
						<img src="http://placehold.it/175x175" alt="placeholder img.">
					</div>
					<div class="col-md-5">
						<div class="row">

							<div class="row">
								<div class="col-md-4"><label style="padding-left: 15px; padding-right: 15px;">Username</label></div>
								<div class="col-md-8"><p class="username">exampleUser1</p></div>
							</div>
							<div class="row">
								<div class="col-md-3"><label style="padding-left: 15px; padding-right: 15px;">Email</label></div>
								<div class="col-md-9"><p class="email">example@email.com</p></div>
							</div>


							<div class="panel-group col-md-12" id="accordion">
								<div class="panel">
									<div class="form-group row">

										<a href="#collapseOne" data-toggle="collapse" data-parent="#accordion" class="btn btn-primary user-change-pw">Change Password</a>

										<div class="row">
											<div class="col-md-12">
												<div id="collapseOne" class="panel-collapse collapse">
													<div class="panel-body">
														<form id="changepassword" action="#" method="post">

															<div class="row">
																<div class="col-md-6">
																	<label class="text-right">Current Password</label>
																</div>
																<div class="col-md-6">
																	<input type="password" name="currentpassword" placeholder="Current Password">
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">
																	<label class="text-right">New Password</label>
																</div>
																<div class="col-md-6">
																	<input type="password" name="newpassword" placeholder="New Password">
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">
																	<label class="text-right">Confirm Password</label>
																</div>
																<div class="col-md-6">
																	<input type="password" name="confirmpassword" placeholder="Confirm New Password">
																</div>
															</div>

															<div class="row">
																<div class="col-md-12">
																	<button class="btn btn-primary" id="changepassword" type="submit" style=" margin: 15px; float: right;">Submit</button>
																</div>
															</div>
														</form>
													</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>

						</div>

						<div class="col-md-3"></div>
					</div>
				</form>
		

				<form id="information" action="#" method="post">

					<div class="form-group row">

						<div class="col-md-4"></div>

						<div class="col-md-4">
							<label for="account-image">Profile Image</label>
							<input type="file" name="account-image" id="account-image">
						</div>

						<div class="col-md-4"></div>

					</div>
				

					<div class="form-group row">
						
						<div class="col-md-2"></div>

						<div class="col-md-8">
							<label for="form-address" class="text-right">Address</label>
							<input class="form-control" type="text" name="form-address" placeholder="Address" readonly>
						</div>

						<div class="col-md-2"></div>
					</div>

					<div class="form-group row">
						
						<div class="col-md-2"></div>

						<div class="col-md-8">
							<label for="form-city" class="text-right">City</label>
							<input class="form-control" type="text" name="form-city" placeholder="City" readonly>
						</div>

						<div class="col-md-2"></div>
						
					</div>

					<div class="form-group row">

						<div class="col-md-3"></div>

						<div class="col-md-2">
							<label for="form-state" class="text-right">State</label>
							<input class="form-control" type="text" name="form-state" placeholder="State" readonly>
						</div>
						
						<div class="col-md-4">
							<label for="form-phone" class="text-right">Phone</label>
							<input class="form-control" type="text" name="form-phone" placeholder="Phone" >
						</div>

						<div class="col-md-3"></div>
						
					</div>

					<div class="form-group row">

						
						<div class="col-md-12">
						<label for="form-biol">Bio</label>
							<textarea class="form-control" rows="4" readonly="">Bio</textarea>
						</div>

					</div>

					<div class="form-group row">


						<div class="col-md-6"></div>

						<div class="col-md-3">
							<button class="btn btn-primary" id="information" type="submit" style="width: 100%;">Edit</button>
						</div>

						<div class="col-md-3">
							<button class="btn btn-primary" id="information" type="submit" style="width: 100%;">Save</button>
						</div>

				</form>
			</div>
		</div>
		<!-- <div class="col-md-2"></div> -->
	</div>
</div>