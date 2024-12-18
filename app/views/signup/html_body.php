<div class="content-container small">
	<div class="content-container-pad">
		<h1 class="section-title">
			Sign Up
		</h1>
		<div class="form-section-row">
			<div class="input-label-default">
				<label for="email">
					Email
				</label>
			</div>
			<input id="email" class="input-default signup-fh" type="text" placeholder="email" data-column="email" data-check="email" />
			<div class="input-error-message signup-fhe">
				Email invalid or already registered.
			</div>
		</div>
		<div class="form-section-row">
			<div class="input-label-default">
				<label for="username">
					Username
				</label>
			</div>
			<input id="username" class="input-default signup-fh" type="text" placeholder="username" data-column="username" data-check="username" />
			<div class="input-error-message signup-fhe">
				Username invalid or already taken. Min length 4. Alphanumeric only.
			</div>
		</div>
		<div class="form-section-row">
			<div class="input-label-default">
				<label for="first_name">
					First Name
				</label>
			</div>
			<input id="first_name" class="input-default signup-fh" type="text" placeholder="first name" data-column="first_name" data-check="name" />
			<div class="input-error-message signup-fhe">
				Invalid name.
			</div>
		</div>
		<div class="form-section-row">
			<div class="input-label-default">
				<label for="last_name">
					Last Name
				</label>
			</div>
			<input id="last_name" class="input-default signup-fh" type="text" placeholder="last name" data-column="last_name" data-check="name" />
			<div class="input-error-message signup-fhe">
				Invalid name.
			</div>
		</div>
		<div class="form-section-row">
			<div class="input-label-default">
				<label for="password">
					Password
				</label>
			</div>
			<input id="password" class="input-default signup-fh" type="password" placeholder="password" data-column="password" data-check="password" />
			<div class="input-error-message signup-fhe">
				Passwords do not match and or are not 8 characters long.
			</div>
		</div>
		<div class="form-section-row">
			<div class="input-label-default">
				<label for="confirm_password">
					Confirm Password
				</label>
			</div>
			<input id="confirm_password" class="input-default signup-fh" type="password" placeholder="confirm password" data-column="confirm_password" data-check="confirm_password" data-matches="password" />
			<div class="input-error-message signup-fhe">
				Passwords do not match and or are not 8 characters long.
			</div>
		</div>
		<div class="form-section-row">
			<div class="button-default blue button-signup">
				Sign Up
			</div>
		</div>
		<div class="or-divider">
			- OR -
		</div>
		<div class="form-section-row">
			<a href="<?php echo HREF_BASE_URL; ?>login">
				<div class="button-default blue">
					Log In
				</div>
			</a>
		</div>
	</div>
</div>