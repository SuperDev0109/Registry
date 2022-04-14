<html>

<head>
     <title>Registry App</title> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="./assets/css/withdraw.css" rel="stylesheet">
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
                         <div class="box active">
                              <span class="title1">Withdraw</span>
                              <span class="title2">Available 7 January</span>
                         </div>
                    </a>
               </div>
          </div>
     </div>
     <!-- nav end -->

     <div class="container">
          <div class="main_section">
               <div class="box">
                    <img src="./assets/img/withdraw/calendar.png" />
                    <div class="subbox">
                         <span class="title1">It’s not yet time!</span>
                         <span class="title2">Guests have an extra week after the event date to contribute. We will then close the registry and you can access your contributions in e-gift cards and visa debit cards. Learn more</span>
                    </div>
               </div>
               <img src="./assets/img/withdraw/error.png" />
               <div class="active_box">
                    <span class="title1">Don't forget to activate</span>
                    <span class="title2">You need to activate to be able to send invitiations and receive contributions.</span>
                    <button class="activateBtn">Activate</button>
               </div>
          </div>
     </div>

     <?php include('./include/footer.php') ?>
</body>

</html>