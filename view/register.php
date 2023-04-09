<div class="container register-container">
  <div class="row">
    <div class="register-form-container">
      <form method = "post">
        <h3 id="register-form-header">What are you waiting for?<br/>Join us now!</h3>
        <div class="row name-row">
        <div style = "display:none" class="form-group col-12 company-group">
            <label  for="company-field">Company Name</label>
            <input
              type="text"
              name="company"
              id="company-field"
              placeholder="Company Name"
            />
          </div>
          <div class="form-group col-6 name-group">
            <label for="firstname-field">First Name</label>
            <input
              type="text"
              name="firstname"
              id="firstname-field"
              placeholder="First Name"
            />
          </div>
          <div class="form-group col-6 name-group">
            <label for="lastname-field">Last Name</label>
            <input
              type="text"
              name="lastname"
              id="lastname-field"
              placeholder="Last Name"
            />
          </div>
        </div>
        <div class="form-group">
          <label for="email-field">Email Address</label>
          <input
            type="email"
            name="email"
            id="email-field"
            placeholder="Email"
          />
        </div>
        <div class="form-group">
          <label for="birth-date-field">Birth Date</label>
          <input
            type="date"
            name="birth-date"
            id="birth-date-field"
          />
        </div>
        <div class="form-group">
          <label for="password-field">Password</label>
          <input
            type="password"
            name="pwd"
            id="password-field"
            placeholder="Password"
          />
        </div>
        <div class="form-group">
          <label for="confirm-password-field">Confirm Password</label>
          <input
            type="password"
            name="confirm-pwd"
            id="confirm-password-field"
            placeholder="Password"
          />
        </div>
        <div class="form-group">
          <label for="city-field">City</label>
          <select id = "city-field" name = "city">
          </select>
        </div>
        <div class = "option-row-wrapper">
          <h4>Account Type</h4>
          <div class="row option-row">
            <div class="form-group col-6">
              <input
                onchange = "changeMode()"
                type="radio"
                name="type"
                id="seeker-option"
                value="seeker"
                checked
              />
              <label for="seeker-option">Seeker</label>
            </div>
            <div class="form-group col-6">
                <input
                  onchange = "changeMode()"
                  type="radio"
                  name="type"
                  id="company-option"
                  value="company"
                />
                <label for="company-option">Company</label>
            </div>
            <div class = "btn-group">
              <input type = "hidden" name = "action" value = "register" id = "action-input-field">
              <button type = "submit" class = "btn btn-fill btn-account-register">Submit</button>
              <button type = "reset" class = "btn btn-outline reset-info-btn" >Reset Information</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
