<html>

<head>
     <title>Registry App</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="../assets/css/include/narrow.css" rel="stylesheet">
     <link href="../assets/css/register.css" rel="stylesheet">
</head>

<body>
     <?php include('./include/header.php') ?>
     <!-- narrow component -->
     <div class="narrow_section">
          <span class="title1">Register</span>
          <span class="title2">Home -> Register</span>
     </div>
     <!-- narrow componet end -->

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
                         <img src="../assets/img/login/upload_icon.png" />
                         <span class="upload_title">Avatar Image</span>
                    </div>
                    <div class="box">
                         <img src="../assets/img/login/upload_icon.png" />
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
                    <span class="title6">I agree to the terms & conditions</span>
               </div>
               <button class="saveBtn">Save</button>
          </div>
     </div>

     <?php include('./include/footer.php') ?>
</body>

</html>