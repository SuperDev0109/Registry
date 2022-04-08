<html>

<head>
     <title>Registry App</title> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="./assets/css/include/narrow.css" rel="stylesheet">
     <link href="./assets/css/blogDetail.css" rel="stylesheet">
</head>

<body>
     <?php include('./include/header.php') ?>
     <!-- narrow component -->
     <div class="narrow_section"> 
          <span class="title1">Blog Details</span> 
          <span class="title2">Home -> Blog Details</span>
     </div>
     <!-- narrow componet end -->

     <div class="container blogs_detail">
          <div class="row">
               <div class="col-md-8 panel">
                    <div class="detail_box">
                         <img src="./assets/img/blogs_detail/detail1.png" />
                         <span class="title1">Lorem ipsum dolor sit amet conse.</span>
                         <span class="title2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</span>
                         <span class="title2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</span>
                         <span class="title2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</span>
                         <img src="./assets/img/blogs_detail/detail2.png" />
                         <span class="title2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</span>
                         <span class="title2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</span>
                    </div>

                    <div class="arrow_section">
                         <span><< Previous Post</span>
                         <span>Next Post >></span>
                    </div>

                    <div class="comments_box">
                         <span class="title1">Comments</span>
                         <div class="user_comment">
                              <img src="./assets/img/blogs_detail/user1.png" />
                              <div class="comments">
                                   <span class="title2">Esther Oustin &nbsp;&nbsp;<span class="title3">20 May, 2020</span></span>
                                   <span class="title4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </span>
                              </div>
                              <hr />
                         </div>
                         <div class="user_comment">
                              <img src="./assets/img/blogs_detail/user2.png" />
                              <div class="comments">
                                   <span class="title2">Esther Oustin &nbsp;&nbsp;<span class="title3">20 May, 2020</span></span>
                                   <span class="title4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </span>
                              </div>
                         </div>
                    </div>
                    <div class="post_section">
                         <span class="title1">Post a comment</span>
                         <textarea rows="5" class="commentInput" placeholder="Your comment" /></textarea>
                         <div class="row">
                              <div class="col-md-6 rightPadding">
                                   <input type="text" class="nameInput" placeholder="Name" />
                              </div>
                              <div class="col-md-6 leftPadding">
                                   <input type="text" class="emailInput" placeholder="Email" />
                              </div>
                         </div>
                         <div class="check_box">
                              <input type="checkbox" /> &nbsp;&nbsp;<span class="title2">Save my name, email, and website in this browser for the next time I comment.</span>
                         </div>
                         <button class="postBtn">Post Comment</button>
                    </div>
               </div>
               <div class="col-md-4 panel_latest">
                    <div class="row latest_section">
                         <span class="title1">Latest Posts</span>
                         <div class="panel">
                              <div class="box">
                                   <img src="./assets/img/blogs_detail/sub1.png" />
                                   <div class="box_right">
                                        <span class="title2">What a Difference a Few months Make</span>
                                        <span class="title3">April 25, 2015</span>
                                   </div>
                              </div>
                         </div>
                         <div class="panel">
                              <div class="box">
                                   <img src="./assets/img/blogs_detail/sub2.png" />
                                   <div class="box_right">
                                        <span class="title2">What a Difference a Few months Make</span>
                                        <span class="title3">April 25, 2015</span>
                                   </div>
                              </div>
                         </div>
                         <div class="panel">
                              <div class="box">
                                   <img src="./assets/img/blogs_detail/sub3.png" />
                                   <div class="box_right">
                                        <span class="title2">What a Difference a Few months Make</span>
                                        <span class="title3">April 25, 2015</span>
                                   </div>
                              </div>
                         </div>
                         <div class="panel">
                              <div class="box">
                                   <img src="./assets/img/blogs_detail/sub4.png" />
                                   <div class="box_right">
                                        <span class="title2">What a Difference a Few months Make</span>
                                        <span class="title3">April 25, 2015</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="row category_section">
                         <div class="panel">
                              <span class="title1">Categories</span>
                              <div class="row box">
                                   <div class="col-md-4 subbox">
                                        <p class="title2">Build</p>
                                   </div>
                                   <div class="col-md-4 subbox">
                                        <p class="title2">Designs</p>
                                   </div>
                                   <div class="col-md-4 subbox">
                                        <p class="title2">Flooring</p>
                                   </div>
                                   <div class="col-md-4 subbox">
                                        <p class="title2">Painting</p>
                                   </div>
                                   <div class="col-md-4 subbox">
                                        <p class="title2">Renovation</p>
                                   </div>
                                   <div class="col-md-4 subbox">
                                        <p class="title2">Repairs</p>
                                   </div>
                                   <div class="col-md-4 subbox">
                                        <p class="title2">Tiling</p>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <?php include('./include/footer.php') ?>
</body>

</html>