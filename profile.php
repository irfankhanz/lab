
<?php include "inc/header.php";
error_reporting(0);?>

<!-- Main Content -->
<main >
         <!-- Navigation Bar -->
         <?php
         //-----------GETTING UPDATED DATA FROM DATABASE ACCORDING TO SESSION--------------- 
         $select =  "select * From register where email='" . $_SESSION["user_email"]. "'and status='Accepted'";
         $result = mysqli_query($con,$select);
         $row = mysqli_fetch_array($result);
         ?>
         <!-- Body Content Wrapper -->
         <div class="ms-content-wrapper">
            <div class="ms-profile-overview">
               <div class="ms-profile-cover">
                  <img class="ms-profile-img" src="./assets/img/dashboard/Engineer-4.jpg" alt="people">
                  <div class="ms-profile-user-info">
            <h3 class="ms-profile-username text-white"><?php echo $row["name"] ?></h3>
            <h6 class="ms-profile-role text-white"><?php echo $row["role"]?></h6>
                  </div>
                  <div class="ms-profile-user-buttons">
                     <a href="#" class="btn btn-primary"> <i class="material-icons">person_add</i> Follow</a>
                     <a href="#" class="btn btn-light"> <i class="material-icons">file_download</i> Download Resume</a>
                  </div>
               </div>
               <ul class="ms-profile-navigation nav nav-tabs tabs-bordered" role="tablist">
                  <li role="presentation"><a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> Overview </a></li>
                 
               </ul>
               <div class="tab-content">
                  <div class="tab-pane" id="tab1">
                  </div>
                  <div class="tab-pane" id="tab2">
                  </div>
                  <div class="tab-pane" id="tab3">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-7 col-md-12">
                  <div class="ms-panel ms-panel-fh">
                     <div class="ms-panel-body">
                        <h2 class="section-title">About Me</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                           Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                           Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                           Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.
                        </p>
                        <div class="ms-profile-skills">
                           <h2 class="section-title">Professional Skills</h2>
                           <ul class="ms-skill-list">
                              <li class="ms-skill">Web Design</li>
                              <li class="ms-skill">Development</li>
                              <li class="ms-skill">Interface Design</li>
                              <li class="ms-skill">Illustration</li>
                              <li class="ms-skill">Brand Design</li>
                              <li class="ms-skill">Adobe</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-5 col-md-12">
                  <div class="ms-panel ms-panel-fh">
                     <div class="ms-panel-body">
                        
                        <h2 class="section-title">Basic Information</h2>
                        <table class="table ms-profile-information">
                           <tbody>
                              <tr>
                                 <th scope="row">Full Name</th>
                                 <td><?php echo $row["name"]?></td>
                              </tr>
                              <tr>
                                 <th scope="row">Email</th>
                                 <td><?php echo $row["email"]?></td>
                              </tr>
                              <tr>

                              <tr>
                                  <td>
                                  <!-- ?EDIT= WILL HELP US TO GET THE ID IN EDIT PAGE, EDIT IS THE NAME WHERE ID STORE-->
                                  <a href="edit.php?edit=<?php echo $row['Id'];?>" class="btn btn-primary mt-4 d-block w-5">Edit Profile</a>
                                  </td>
                              </tr>
                                 
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            
            </div>
         </div>
      </main>



<?php include "inc/footer.php"?>