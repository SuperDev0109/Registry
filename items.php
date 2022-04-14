<html>

<head>
     <title>Registry App</title> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="./assets/css/items.css" rel="stylesheet">
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
                         <div class="box active">
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
          <div class="headerBox_section">
               <span class="title1">Registry Design</span>
               <div class="panel">
                    <div class="box">
                         <span class="title2">8</span>
                         <span class="title3">Items</span>
                    </div>
                    <div class="box">
                         <span class="title2">$0</span>
                         <span class="title3">Goal</span>
                    </div>
               </div>
          </div>

          <div class="items_section">
               <div class="row">
                    <p class="title1">Registry items</p>
               </div>
               <div class="row">
                    <p class="title2">To save you time we’ve added some of the most popular items people like to include in their gift registry. <br />You can make changes to this list at any time.</p>
               </div>
               <div class="row">
                    <div class="col-md-3 boxPadding panel">
                         <div class="box">
                              <button class="addBtn">+&nbsp;&nbsp;Add image</button>
                              <img src="./assets/img/items/gift.png" />
                         </div>
                         <input type="type" class="nameInput" placeholder="Item Name" />
                         <textarea rows="5" class="descInput" placeholder="Optional Description"></textarea>
                         <div class="goalGroup">
                              <span class="symbol">$</span>
                              <input type="number" class="goalInput" placeholder="Goal" />
                         </div>
                    </div>
                    <div class="col-md-3 boxPadding panel">
                         <div class="box">
                              <button class="addBtn">+&nbsp;&nbsp;Add image</button>
                              <img src="./assets/img/items/gift.png" />
                         </div>
                         <input type="type" class="nameInput" placeholder="Item Name" />
                         <textarea rows="5" class="descInput" placeholder="Optional Description"></textarea>
                         <div class="goalGroup">
                              <span class="symbol">$</span>
                              <input type="number" class="goalInput" placeholder="Goal" />
                         </div>
                    </div>
                    <div class="col-md-3 boxPadding panel">
                         <div class="box">
                              <button class="addBtn">+&nbsp;&nbsp;Add image</button>
                              <img src="./assets/img/items/gift.png" />
                         </div>
                         <input type="type" class="nameInput" placeholder="Item Name" />
                         <textarea rows="5" class="descInput" placeholder="Optional Description"></textarea>
                         <div class="goalGroup">
                              <span class="symbol">$</span>
                              <input type="number" class="goalInput" placeholder="Goal" />
                         </div>
                    </div>
                    <div class="col-md-3 boxPadding panel">
                         <div class="box">
                              <button class="addBtn">+&nbsp;&nbsp;Add image</button>
                              <img src="./assets/img/items/gift.png" />
                         </div>
                         <input type="type" class="nameInput" placeholder="Item Name" />
                         <textarea rows="5" class="descInput" placeholder="Optional Description"></textarea>
                         <div class="goalGroup">
                              <span class="symbol">$</span>
                              <input type="number" class="goalInput" placeholder="Goal" />
                         </div>
                    </div>
                    <div class="col-md-3 boxPadding panel">
                         <div class="box">
                              <button class="addBtn">+&nbsp;&nbsp;Add image</button>
                              <img src="./assets/img/items/gift.png" />
                         </div>
                         <input type="type" class="nameInput" placeholder="Item Name" />
                         <textarea rows="5" class="descInput" placeholder="Optional Description"></textarea>
                         <div class="goalGroup">
                              <span class="symbol">$</span>
                              <input type="number" class="goalInput" placeholder="Goal" />
                         </div>
                    </div>
                    <div class="col-md-3 boxPadding panel">
                         <div class="box">
                              <button class="addBtn">+&nbsp;&nbsp;Add image</button>
                              <img src="./assets/img/items/gift.png" />
                         </div>
                         <input type="type" class="nameInput" placeholder="Item Name" />
                         <textarea rows="5" class="descInput" placeholder="Optional Description"></textarea>
                         <div class="goalGroup">
                              <span class="symbol">$</span>
                              <input type="number" class="goalInput" placeholder="Goal" />
                         </div>
                    </div>
                    <div class="col-md-3 boxPadding panel">
                         <div class="box">
                              <button class="addBtn">+&nbsp;&nbsp;Add image</button>
                              <img src="./assets/img/items/gift.png" />
                         </div>
                         <input type="type" class="nameInput" placeholder="Item Name" />
                         <textarea rows="5" class="descInput" placeholder="Optional Description"></textarea>
                         <div class="goalGroup">
                              <span class="symbol">$</span>
                              <input type="number" class="goalInput" placeholder="Goal" />
                         </div>
                    </div>
                    <div class="col-md-3 boxPadding panel">
                         <div class="box">
                              <button class="addBtn">+&nbsp;&nbsp;Add image</button>
                              <img src="./assets/img/items/gift.png" />
                         </div>
                         <input type="type" class="nameInput" placeholder="Item Name" />
                         <textarea rows="5" class="descInput" placeholder="Optional Description"></textarea>
                         <div class="goalGroup">
                              <span class="symbol">$</span>
                              <input type="number" class="goalInput" placeholder="Goal" />
                         </div>
                    </div>
               </div>
          </div>

          <div class="registry_form">
               <div class="box">
                    <img src="./assets/img/items/plusIcon.png" >
                    <span class="title1">Add registry item</span>
               </div>
               <div class="btnForm">
                    <button class="saveBtn">Save</button>
                    <button class="skipBtn">Skip</button>
               </div>
          </div>
     </div>

     <?php include('./include/footer.php') ?>
</body>

</html>