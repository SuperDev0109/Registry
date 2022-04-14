<html>

<head>
     <title>Registry App</title> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="./assets/css/invitation_options.css" rel="stylesheet">
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
                    <a href="/activate" class="boxPadding">
                         <div class="box">
                              <span class="title1">Activate</span>
                              <span class="title2">Not yet activated</span>
                         </div>
                    </a>
                    <a href="/invitation_options.php" class="boxPadding">
                         <div class="box active">
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
          <div class="guest_section">
               <span class="title1">Guest & invitations</span>
               <span class="title2">Send invitations to all of your guests, and track their RSVPs all in once place!</span>
               <input class="emailInput" type="text" placeholder="Email subject" />
               <textarea rows="10" class="inviteInput" placeholder="Invitation message"></textarea>
               <span class="title3">A message welcoming your guests to your gift registry, or any information you want to add. Stuck for ideas? Get some ideas here!</span>
               <div class="togglePanel">
                    <div class="form-check form-switch">
                         <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked1" >
                         <label class="form-check-label" for="flexSwitchCheckChecked1">Checked switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                         <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked2" checked>
                         <label class="form-check-label" for="flexSwitchCheckChecked2">Add an additional RSVP question for your guests to answer. Great for getting dietary requirements and other details.</label>
                    </div>
                    <div class="form-check form-switch">
                         <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked3" >
                         <label class="form-check-label" for="flexSwitchCheckChecked3">Ask guests for their mailing address so you can send thank you cards</label>
                    </div>
                    <div class="form-check form-switch">
                         <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked4" checked>
                         <label class="form-check-label" for="flexSwitchCheckChecked4">Send guests who haven’t contributed a free reminder SMS 7 days before your event More info</label>
                    </div>
                    <div class="form-check form-switch">
                         <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked5" checked>
                         <label class="form-check-label" for="flexSwitchCheckChecked5">Allow guests to bring additional guests (children and partners etc)</label>
                    </div>
               </div>
          </div>
          
          <div class="savePanel">
               <button class="sendBtn">Send</button>
          </div>
     </div>

     </div>

     <?php include('./include/footer.php') ?>
</body>

</html>