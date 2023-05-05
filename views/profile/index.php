<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document </title>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Bootstrap 4 CSS -->
    <link rel='stylesheet' href='/css/onboard.css'>
    <!-- Telephone Input CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
    <!-- Icons CSS -->
    <link rel='stylesheet' href='/css/ionicons.min.css'>
    <!-- Nice Select CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/main.css">
    
  </head>
  <body>
    <header class="intro">
      <!-- <h1>Bootstrap Multi Step Form with Progress Bar Example </h1><p> A Bootstrap multi-step form with progress bar.</p> -->
      <!-- <div class="action"><a href="https://www.codehim.com/bootstrap/bootstrap-forms/bootstrap-multi-step-form-with-progress-bar/" title="Back to download and tutorial page" class="btn back">Back to Tutorial</a></div> -->
    </header>
    <main>
      <article>
        <!-- Start Multiform HTML -->
        <section class="multi_step_form">
          <form id="msform">
            <!-- Tittle -->
            <div class="tittle">
              <h2>Complete Your Onboarding Process, <?= Yii::$app->user->identity->firstname ?> <br>
                <b>Please Fill-in all fields</b>
              </h2>
              <p>In order to use this service, you have to complete this verification process</p>
            </div>
            <!-- progressbar -->
            <ul id="progressbar">
              <li class="active">About Yourself</li>
              <li>Upload Documents</li>
              <li>Confirmation</li>
            </ul>
            <!-- fieldsets -->
            
            <fieldset>
              <h3>Tell us about yourself</h3>
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="name">Legal first name</label>
                  <br>
                  <input type="text" id="firstname" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group col-md-5">
                  <label for="name">Legal last name</label>
                  <br>
                  <input type="text" id="lastname" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group col-md-5">
                  <label for="name">Email Address</label>
                  <br>
                  <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group col-md-5">
                  <label for="name">Phone Number</label>
                  <br>
                  <input type="tel" id="phone" class="form-control" placeholder="Phone Number">
                  <br>
                </div>
               
                <div class="form-group col-md-5">
                  <label for="name">Gender</label>
                  <br>
                  <select name="gender" id="gender" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="form-group col-md-5">
                  <label for="birthday">Date of Birth:</label>
                  <input type="date" id="birthday" class="form-control" name="birthday">
                </div>
                <div class="form-group col-md-5">
                  <label for="location">Location:</label>
                  <br>
                  <input id="places" type="text" size="50" class="form-control">
                </div>
                <div class="form-group col-md-5">
                  <label for="res_county">County/State:</label>
                  <br>
                  <input type="text" id="res_county" class="form-control" name="res_county">
                </div>
               
              </div>
              <br>
              <button type="button" class="action-button previous previous_button">Back</button>
              <button type="button" class="next action-button">Continue</button>
            </fieldset>
            <fieldset>
              <h3>Submit your documents</h3>
              <!-- <h6>Please provide additional business information and upload business documents</h6> -->
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="identification">Form of ID:</label>
                  <select name="identification" id="identification" class="form-control" required>
                    <option value="passport">International Passport</option>
                    <option value="DL">Driver's License</option>
                    <option value="voter Card">Voter's Card</option>
                    <option value="ID Card">National ID Card</option>
                  </select>
                </div>
                
                <div class="form-group col-md-5">
                  <label for="identification_number">ID Number:</label>
                  <br>
                  <input type="id_number" id="id_number" class="form-control" name="number">
                </div>
                <div class="form-group col-mdID_Image-5">
                  <label for="identity">Attach your ID:</label>
                  <input type="file" id="identity"  name="identity" class="form-control">
                </div>

                
                <div class="form-group col-mdID_Image-5">
                  <label for="registration">Attach Your Registration Document:</label>
                  <input type="file" id="registration"  name="registration" class="form-control">
                </div>
              </div>
              <br>
              <button type="button" class="action-button previous previous_button">Back</button>
              <button type="button" class="next action-button">Continue</button>
            </fieldset>
            <fieldset>
              <h3>Setting up your account</h3>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <input type="radio" id="understood" name="understood" value="30">
                  <label for="understood">I/We confirm that the information provided are accurate and truthful.</label>
                  <br>
                </div>
              </div>
              <button type="button" class="action-button previous previous_button">Back</button>
              <input type="submit" class="btn btn-success" id="submitform" value="Submit">
              <br><br><br>
              <label for="understood">Click  
              <input type="button" class="btn btn-primary" onclick="location.href='/dashboard'" value="Go Home" />
              to access your dashboard.
              </label>
            </fieldset>
          </form>
        </section>
        <!-- END Multiform HTML -->      
      </article>
    </main>
    <footer class="credit"></footer>
    <script src='/js/core/jquery.min.js'></script>
    <script src="https://www.gstatic.com/firebasejs/6.4.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.4.2/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.4.2/firebase-storage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApVYr8P9Lna37G3xkSw3eczjuM_AdY8XU&amp;sensor=false&&libraries=places&v=weekly&callback=initService"></script>
    <script>
       window.uuid = '<?= \Yii::$app->user->uuid ?>';
    </script>
    <script src='/js/firebase.js'></script>
    <script src='/js/investor.js'></script>
  </body>
</html>

