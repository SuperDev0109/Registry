<html>

<head>
     <title>Registry App</title> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="./assets/css/include/narrow.css" rel="stylesheet">
     <link href="./assets/css/login.css" rel="stylesheet">
</head>

<body>
     <?php include('./include/header.php') ?>
     <!-- narrow component -->
     <div class="narrow_section"> 
          <span class="title1">Login</span> 
          <span class="title2">Home -> Login</span>
     </div>
     <!-- narrow componet end -->

     <div class="login_section">
          <div class="email_form">
               <img src="./assets/img/login/login_icon1.png" class="email_icon" />
               <input type="email" id="email_input" placeholder="Email" />
          </div>
          <div class="password_form">
               <img src="./assets/img/login/login_icon2.png" class="password_icon" />
               <input type="password" id="password_input" placeholder="Password" />
          </div>
          <span class="title1">Forgot Password?</span>
          <button class="loginBtn">Login</button>
     </div>

     <?php include('./include/footer.php') ?>
</body>

</html>