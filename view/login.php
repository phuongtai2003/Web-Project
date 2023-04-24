<div class="container login-container">
  <img class = "loading-image" src = "./images/loading-gif.gif">
  <div class="row">
    <div class="login-form-container">
      <?php 
        if(!empty($error)){
          ?>
            <div class = "alert">
              <?=$error?>
            </div>
          <?php
        }
        else if(!empty($msg)){
          ?>
            <div class = "alert">
              <?=$msg?>
            </div>
          <?php
        }
      ?>
    <form method = "post">
        <h3 id="login-form-header">Login now!</h3>
        <div class="form-group">
          <label for="email-field">Email</label>
          <input
            type="email"
            name="email"
            id="email-field"
            placeholder="Email"
            required
          />
        </div>
        <div class="form-group">
          <label for="password-field">Password</label>
          <input
            type="password"
            name="pwd"
            id="password-field"
            placeholder="Password"
            required
          />
        </div>
        <div class = "option-row-wrapper">
          <h4>Login For</h4>
          <div class="row option-row">
            <div class="form-group col-6">
              <input
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
                  type="radio"
                  name="type"
                  id="company-option"
                  value="company"
                />
                <label for="company-option">Company</label>
            </div>
            <div class = "btn-group">
                <input type = "hidden" name = "action" value = "login" id = "action-input-field">
                <button type = "button" class = "btn btn-fill btn-account-login">Login</button>
                <button type = "reset" class = "btn btn-outline reset-info-btn" >Reset Information</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  function displayMessage(message){
    let messageAlert = $(".alert");
    if(messageAlert.length === 0){
      $(".login-container").append(`<div class = "alert">${message}</div>`);
    }
    else{
      messageAlert.html(message);
    }
  }

  $(".btn-account-login").on("click", function(){
    let typeOfAccount = $("input[name='type']:checked").val();
    let email = $("#email-field").val().trim();
    let password = $("#password-field").val().trim();
    if(!email || !password){
      displayMessage("Please enter all of the fields");
    }
    else{
      if(typeOfAccount === "seeker"){
        $.ajax({
          type: "post",
          url: "http://localhost/models/api/login/seekerLogin.php",
          data: JSON.stringify({
            email: email,
            password: password,
          }),
          contentType: "application/json",
          success: function (res) {
            location.reload();
          },
          error: function(xhr, status, err){
            displayMessage(xhr.responseJSON['error']);
          },
          beforeSend: function(){
            $(".loading-image").show();
          },
          complete: function(){
            $(".loading-image").hide();
          },
        });
      }
      else if(typeOfAccount === "company"){
        $.ajax({
          type: "post",
          url: "http://localhost/models/api/login/companyLogin.php",
          data: JSON.stringify({
            email: email,
            password: password,
          }),
          contentType: "application/json",
          success: function (res) {
            location.reload();
          },
          error: function(xhr, status, err){
            displayMessage(xhr.responseJSON['error']);
          },
          beforeSend: function(){
            $(".loading-image").show();
          },
          complete: function(){
            $(".loading-image").hide();
          },
        });
      }
    }
    
  });
</script>