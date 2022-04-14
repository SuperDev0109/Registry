<html>

<head>
     <title>Registry App</title> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="./assets/css/view_registry.css" rel="stylesheet"> 
</head>

<body>
     <?php include('./include/loggedheader.php') ?>

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

     <div class="gift_back_section">
          <img src="./assets/img/gift_registry/back.png" />
     </div>
     <div class="wishing_section">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 positionRelative">
                         <img class="circleImg" src="./assets/img/gift_registry/circle.png" />
                    </div>
                    <div class="col-md-8 wishing_right_section">
                         <span class="title1">Wishing Well</span>
                         <div class="panel">
                              <div class="box">
                                   <img src="./assets/img/gift_registry/icon_calendar.png" />
                                   <span class="title2">November 21, 2030</span>
                              </div>
                              <div class="box">
                                   <img src="./assets/img/gift_registry/icon_location.png" />
                                   <span class="title2">Sydney</span>
                              </div>
                         </div>
                         <div class="panel1">
                              <span class="title3">277 contributions </span>
                              <span class="title3">3250 days to go </span>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="wishing_below_section">
          <div class="container panel">
               <span class="title1">This is a demo wishing well which you can use to see how it might look for your event.</span>
               <span class="title1">Feel free to make a contribution, the system will not ask for your credit card details so you can simulate the entire experience from your guests point of view.</span>
          </div>
     </div>

     <div class="container aboveMargin">
          <div class="contribute_section">
               <div class="row">
                    <div class="col-md-4 panel">
                         <div class="box">
                              <img src="./assets/img/gift_registry/gift1.png" />
                              <div class="rect"></div>
                              <span class="title1">Funky named pillows</span>
                              <span class="title2">Pillows with our names on them which magically appear when you touch them!</span>
                              <span class="title1">5 contributions</span>
                              <button class="contributeBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Contribute</button>
                         </div>
                    </div>
                    <div class="col-md-4 panel">
                         <div class="box">
                              <img src="./assets/img/gift_registry/gift2.png" />
                              <div class="rect"></div>
                              <span class="title1">Funny couples T-shirts</span>
                              <span class="title2">This will be fun when we're out in public together.</span>
                              <span class="title1">6 contributions</span>
                              <button class="contributeBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Contribute</button>
                         </div>
                    </div>
                    <div class="col-md-4 panel">
                         <div class="box">
                              <img src="./assets/img/gift_registry/gift3.png" />
                              <div class="rect"></div>
                              <span class="title1">1 Night Luxury Hotel Stay</span>
                              <span class="title2">Planning the wedding will be stressful. Help us relax a little!</span>
                              <span class="title1">7 contributions</span>
                              <button class="contributeBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Contribute</button>
                         </div>
                    </div>
                    <div class="col-md-4 panel">
                         <div class="box">
                              <img src="./assets/img/gift_registry/gift1.png" />
                              <div class="rect"></div>
                              <span class="title1">Funky named pillows</span>
                              <span class="title2">Pillows with our names on them which magically appear when you touch them!</span>
                              <span class="title1">5 contributions</span>
                              <button class="contributeBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Contribute</button>
                         </div>
                    </div>
                    <div class="col-md-4 panel">
                         <div class="box">
                              <img src="./assets/img/gift_registry/gift2.png" />
                              <div class="rect"></div>
                              <span class="title1">Funny couples T-shirts</span>
                              <span class="title2">This will be fun when we're out in public together.</span>
                              <span class="title1">6 contributions</span>
                              <button class="contributeBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Contribute</button>
                         </div>
                    </div>
                    <div class="col-md-4 panel">
                         <div class="box">
                              <img src="./assets/img/gift_registry/gift3.png" />
                              <div class="rect"></div>
                              <span class="title1">1 Night Luxury Hotel Stay</span>
                              <span class="title2">Planning the wedding will be stressful. Help us relax a little!</span>
                              <span class="title1">7 contributions</span>
                              <button class="contributeBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Contribute</button>
                         </div>
                    </div>
                    <div class="col-md-4 panel">
                         <div class="box">
                              <img src="./assets/img/gift_registry/gift1.png" />
                              <div class="rect"></div>
                              <span class="title1">Funky named pillows</span>
                              <span class="title2">Pillows with our names on them which magically appear when you touch them!</span>
                              <span class="title1">5 contributions</span>
                              <button class="contributeBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Contribute</button>
                         </div>
                    </div>
                    <div class="col-md-4 panel">
                         <div class="box">
                              <img src="./assets/img/gift_registry/gift2.png" />
                              <div class="rect"></div>
                              <span class="title1">Funny couples T-shirts</span>
                              <span class="title2">This will be fun when we're out in public together.</span>
                              <span class="title1">6 contributions</span>
                              <button class="contributeBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Contribute</button>
                         </div>
                    </div>
                    <div class="col-md-4 panel">
                         <div class="box">
                              <img src="./assets/img/gift_registry/gift3.png" />
                              <div class="rect"></div>
                              <span class="title1">1 Night Luxury Hotel Stay</span>
                              <span class="title2">Planning the wedding will be stressful. Help us relax a little!</span>
                              <span class="title1">7 contributions</span>
                              <button class="contributeBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Contribute</button>
                         </div>
                    </div>
               </div>
          </div>

          <div class="msg_contribute">
               <span class="title1">Messages from Contributors</span>
               <div class="panel">
                    <div class="box">
                         <span class="title1">Aida Bugg.</span>
                         <span class="title2">Happy engagement guys, enjoy the mill-y”</span>
                         <hr />
                    </div>
                    <div class="box">
                         <span class="title1">Aida Bugg.</span>
                         <span class="title2">Happy engagement guys, enjoy the mill-y”</span>
                         <hr />
                    </div>
                    <div class="box">
                         <span class="title1">Aida Bugg.</span>
                         <span class="title2">Happy engagement guys, enjoy the mill-y”</span>
                         <hr />
                    </div>
               </div>
          </div>
     </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body modalBox">
           <span class="title1">Send Contribution</span>
           <span class="title2">Wishing Well for Wishing Well</span>
           <div class="amountBox">
                <div class="rect">$</div>
                <input type="number" class="amountInput" placeholder="Amount" />
           </div>
           
           <div class="row write_review_form">
               <div class="col-md-6 input_detail_padding_right">
                    <input type="text" placeholder="Full Name" class="nameInput" />
               </div>
               <div class="col-md-6 input_detail_padding_left">
                    <input type="text" placeholder="Email" class="emailInput" />
               </div>
               <div class="col-md-12 input_detail_padding_top">
                    <textarea rows="10" placeholder="Send a message with your contribution" class="reviewTextarea"></textarea>
               </div>
               <div class="col-md-12">
                    <button class="reviewWriteBtn">Send Contribute</button>
               </div>
          </div>
      </div>
    </div>
  </div>
</div>

     <?php include('./include/footer.php') ?>
</body>

</html>