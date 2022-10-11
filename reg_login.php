    <!-- login modal starts here -->
	<div id="loginModal" class="modal-style-2 modal">
		<div class="modal-dialog modal-login modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0">				
					<h4 class="modal-title">Login</h4>
	                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<div class="modal-body">
					<!-- dont forget to add action and action method  -->
                    <h4 class="sLogo bg-primary p-2"><i class="fa-sharp fa-solid fa-house-medical" style="color: greenyellow;"></i>&nbsp;<span style="color: greenyellow;">GreatCare&nbsp;</span><span style="color: white;">Hospital</span></h4><br><br>
					<form action="" method="" class="mt-3">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="username" placeholder="Enter your username" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
							</div>
						</div>
						<div class="row pl-1 pr-1">
                            <div class="col text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                    <span class="custom-control-label">&nbsp;Remember Me</span>
                                </label>
                            </div>
                            <div class="col text-right hint-text pt-0">
                                <a href="" class="text-danger">Forgot Password?</a>
                            </div>
                        </div>
						<div class="form-group text-center mt-2 mb-0">
							<button type="submit" class="btn btn-primary btn-sm">Login</button>
						</div>
						<p class="hint-text mt-0">or login with</p>
						<div class="social-login text-center mr-4">
							<a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
							<a class=" btn-facebook  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
							<a class=" btn-facebook  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
						</div>
					</form>
				</div>
				<div class="modal-footer">Don't have an account? <a href="#registerModal" data-bs-dismiss="modal" data-bs-toggle="modal"> Register</a></div>
			</div>
		</div>
	</div> 
     <!-- Login modal ends here -->
	<!-- registration modal starts here -->
	<div id="registerModal" class="modal-style-2 modal">
		<div class="modal-dialog modal-login modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0">				
					<h4 class="modal-title">Register</h4>
	                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>

				</div>    
				<div class="modal-body">
                    <h4 class="sLogo bg-primary p-2"><i class="fa-sharp fa-solid fa-house-medical" style="color: greenyellow;"></i>&nbsp;<span style="color: greenyellow;">GreatCare&nbsp;</span><span style="color: white;"> Hospital</span></h4>
					<form action="" method="post" class="mt-3">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="name" placeholder="Enter your name" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="text" class="form-control" name="email" placeholder="Enter email address" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>
								<input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required="required" autocomplete="on">
							</div>
						</div>
                        <div class="row usercategory">
                            <p class="form-check-label pl-5">Specify your staff category below</p>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="doctor" name="userType" value="doctor" checked>
                                <label class="form-check-label" for="doctor">Doctor</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="nurse" name="userType" value="nurse">
                                <label class="form-check-label" for="nurse">Nurse</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="assistant" name="userType" value="assistant">
                                <label class="form-check-label" for="assistant">Assistant</label>
                            </div>
                        </div>
                        

						<div class="form-group text-center">
							<button id="signup-button" type="submit" class="btn btn-primary btn-sm">Register</button>
							
						</div>
					</form>
				</div>

				<!-- social media icons -->
				<p class="hint-text">or register with</p>
				<div class="social-login text-center mb-2 mr-4">
					<a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
					<a class=" btn-facebook  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
					<a class=" btn-facebook  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
				</div>
				<div class="modal-footer">Already have an account? <a href="#loginModal" data-bs-dismiss="modal" data-bs-toggle="modal"> Login</a></div>
			</div>
		</div>
	</div> 
    <!-- registration modal ends here -->
    <!-- main section of body ends -->