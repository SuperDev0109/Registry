<html>

<head>
     <title>Registry App</title> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="./assets/css/editProfile.css" rel="stylesheet">
</head>

<body>
     <?php include('./include/loggedHeader.php') ?>

     <!-- nav -->
     <div class="nav_section">
          <div class="container">
               <div class="panel">
                    <a href="/registry_design.php" class="boxPadding">
                         <div class="box">
                              <span class="title1">Registry Design</span>
                              <span class="title2">Edit registry settings</span>
                         </div>
                    </a>
                    <a href="/items.php" class="boxPadding">
                         <div class="box">
                              <span class="title1">Items</span>
                              <span class="title2">8 Items - $0 Goal</span>
                         </div>
                    </a>
                    <a href="/activate.php" class="boxPadding">
                         <div class="box">
                              <span class="title1">Activate</span>
                              <span class="title2">Not yet activated</span>
                         </div>
                    </a>
                    <a href="/invitation_options.php" class="boxPadding">
                         <div class="box">
                              <span class="title1">Guest & invitations</span>
                              <span class="title2">0 RSVPs - 0 Invited</span>
                         </div>
                    </a>
                    <a href="/contribution.php" class="boxPadding">
                         <div class="box">
                              <span class="title1">Contributions</span>
                              <span class="title2">0 Contributions - $0</span>
                         </div>
                    </a>
                    <a href="/withdraw.php" class="boxPadding">
                         <div class="box">
                              <span class="title1">Withdraw</span>
                              <span class="title2">Available 7 January</span>
                         </div>
                    </a>
               </div>
          </div>
     </div>
     <!-- nav end -->

     <div class="container">
          <div class="account_section">
               <span class="title1">Account details</span>
               <input type="text" class="firstnameInput" placeholder="First name*" />
               <input type="text" class="lastnameInput" placeholder="Last name*" />
               <span class="title2">This will be how your name will be displayed in the account section and in reviews</span>
               <input type="email" class="emailInput" placeholder="Email address*" />
               <span class="title3">Password Change</span>
               <span class="title4">Current password (leave blank to leave unchanged)</span>
               <input type="password" class="passwordInput" placeholder="Current Password" />
               <span class="title5">New password (leave blank to leave unchange</span>
               <input type="password" class="passwordInput" placeholder="New Password" />
               <span class="title6">Confirm new password</span>
               <input type="password" class="passwordInput" placeholder="Confirm Password" />
               <button class="saveBtn">Save Changes</button>
               <span class="title7">Two Factor Authentication</span>
               <span class="title8">Current one-time password (update) : 914372</span>
               <span class="title9">Setting up</span>
               <span class="title10">
                    For OTP apps that support using a camera to scan a setup code (below), that is the quickest way to set the 
                    app up (e.g. with Duo Mobile, Google Authenticator). Otherwise, you can type the textual private key (shown 
                    below) into your app. Always keep private keys secret. You are currently using TOTP, a time based 
                    algorithm.
               </span>
               <div class="QR_box">
                    <img src="./assets/img/editProfile/QR.png" />
                    <div class="QR_subbox">
                         <span class="title11">
                              Private key (base 32 - used by Google Authenticator and Authy): <br />
                              HFLEEUKHKRCECTJU <br />
                              Private key: <span class="title12">9VBQGTDAM4</span>
                         </span>
                         <span class="title13">Reset private key</span>
                         <div class="form-check">
                              <input class="form-check-input title13" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label title13" for="flexRadioDefault1">
                                   Default radio
                              </label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input title13" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                              <label class="form-check-label title13" for="flexRadioDefault2">
                                   Default checked radio
                              </label>
                         </div>
                    </div>
               </div>
               <button class="settingBtn">Save Settings</button>
          </div>
     </div>

     <?php include('./include/footer.php') ?>
</body>

</html>