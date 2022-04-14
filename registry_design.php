<html>

<head>
     <title>Registry App</title> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="./assets/css/registry_design.css" rel="stylesheet">
</head>

<body>
     <?php include('./include/loggedHeader.php') ?>

     <!-- nav -->
     <div class="nav_section">
          <div class="container">
               <div class="panel">
                    <a href="/registry_design.php" class="boxPadding">
                         <div class="box active">
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
                    <a href="/activate" class="boxPadding">
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
          <div class="preview_section">
               <div class="row">
                    <div class="col-md-6">
                         <img class="backImg" src="./assets/img/registry_design/back.png" />
                    </div>
                    <div class="col-md-6 previewPanel">
                         <button class="previewBtn">Preview Registry</button>
                    </div>
               </div>
          </div>
     </div>

     <div class="container">
          <div class="register_section">
               <input type="email" placeholder="Email address" id="email_input" />
               <span class="title1">A secure password will be generated and sent to your inbox.</span>
               <span class="title2">Your personal data will be used to support your experience throughout
                    this website, to manage access to your account, and for other
                    purposes described in our privacy policy.</span>
               <span class="title3">Registry Details</span>
               <span class="title4">Fill out the details below and your gift registry will be up and running in no
                    time!</span>
               <div class="input_group">
                    <input class="input_form" type="text" placeholder="Registry title" />
                    <input class="input_form" type="text" placeholder="Registry URL" />
               </div>
               <div class="input_group">
                    <input class="input_form" type="text" placeholder="Registry owner" />
                    <input class="input_form" type="text" placeholder="Phone number" />
               </div>
               <div class="input_group">
                    <input class="input_form" type="text" placeholder="Event location" />
               </div>
               <div class="upload_group">
                    <div class="box">
                         <img src="./assets/img/login/upload_icon.png" />
                         <span class="upload_title">Avatar Image</span>
                    </div>
                    <div class="box">
                         <img src="./assets/img/login/upload_icon.png" />
                         <span class="upload_title">Header Image <br /> (optional)</span>
                    </div>
               </div>
               <div class="input_group">
                    <input class="input_form" type="text" placeholder="Video URL(optional)" />
               </div>
               <span class="title5">The URL of a YouTube or Vimeo vidoe</span>
               <div class="input_group">
                    <textarea class="input_form" rows="4" type="text" placeholder="Video URL(optional)"></textarea>
               </div>
               <span class="title4">A message welcoming your guests to your gift registry, or any information you want
                    to add</span>
               <div class="agree_group">
                    <input type="checkbox" />
                    <span class="title6">I agree to the <a class="termsText" href="/terms.php">terms & conditions</a></span>
               </div>
               <button class="saveBtn">Save</button>
          </div>
     </div>

     <?php include('./include/footer.php') ?>
</body>

</html>