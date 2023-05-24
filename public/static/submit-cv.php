<?php
include 'vendor/autoload.php';
include 'linkedin/config.php';

use Hybridauth\Hybridauth;
$hybridauth = new Hybridauth($hybridauthConfig);
$adapters = $hybridauth->getConnectedAdapters();
include('inc/header.php');
?>

        <?php if ($adapters) :
            $userInfoLinkedIn = $adapters['LinkedIn']->getUserProfile() ;
            $id = $userInfoLinkedIn->identifier ;
            $photo = $userInfoLinkedIn->photoURL;
            $name = $userInfoLinkedIn->displayName;
            $firstname = $userInfoLinkedIn->firstName;
            $lastname = $userInfoLinkedIn->lastName;
            $email = $userInfoLinkedIn->email;
        endif; ?>

        <section class="content-1">
          <div class="container d-flex flex-column gap-2 pt-4">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10 d-flex flex-column text-center gap-1">
                  <h6>SEND A RESUME</h6>
                  <h2><strong>To submit your CV please complete the form below.</strong></h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10 d-flex flex-column text-center gap-1">
                <div class="bg-white border-radius p-3">
                  <form action="send-cv-email.php" method="POST" enctype="multipart/form-data">

                    <fieldset class="d-flex flex-wrap">
                      <div class="form-group d-flex flex-column w-50">
                        <input name="firstName" type="text" class="form-control" id="firstName"  value="<?php echo (isset($firstname) ? $firstname : '');?>" required>
                        <label for="firstName">First name <span>*</span></label>
                      </div>
                      <div class="form-group d-flex flex-column w-50">
                        <input name="lastName" type="text" class="form-control" id="lastName" value="<?php echo (isset($lastname) ? $lastname : '');?>" required>
                        <label for="lastName">Last name <span>*</span></label>
                      </div>
                      <div class="form-group d-flex flex-column w-50">
                        <input name="email" type="text" class="form-control" id="email"  value="<?php echo (isset($email) ? $email : '');?>" required>
                        <label for="email">Email <span>*</span></label>
                      </div>
                      <div class="form-group d-flex flex-column w-50">
                        <input name="phoneNumber" type="text" class="form-control" id="phoneNumber" required>
                        <label for="phoneNumber">Phone number <span>*</span></label>
                      </div>

                    <div class="form-group d-flex flex-column w-100">
                        <textarea name="bio" type="text" class="form-control" id="bio" placeholder=" " required></textarea>
                        <label for="bio">Tell us about you <span>*</span></label>
                    </div>

                      <div class="form-group d-flex flex-column w-100 pt-2">

                          <!--default html file upload button-->
                             <input type="file" name="resume" id="resume" style="display: none;"/>
                            <label for="resume" href="#!" class="btn btn-5"><img src="img/ico-clip.png">&nbsp;<strong>Upload your resume</strong></label>

                      </div>
                      <div class="form-group d-flex flex-column w-100">
                        <button type="submit" class="btn"><strong>Submit</strong></button>
                      </div>
                    <?php if (!$adapters) : ?>
                      <div class="form-group align-items-center d-flex flex-column w-100">
                          <a href="<?php print $hybridauthConfig['callback'];?>" class="d-flex txt-blue"><img src="img/ico-linkedin-2.svg" class="h-1"> <strong>Connect with Linkedin</strong></a>
                      </div>
                    <?php else: ?>
                        <div class="form-group align-items-center d-flex flex-column w-100">
                            <a href="<?php print $hybridauthConfig['callback'] . "?logout=true"; ?>" class="d-flex txt-blue"><img src="img/ico-linkedin-2.svg" class="h-1"> <strong>Logout from Linkedin</strong></a>
                        </div>
                    <?php endif; ?>
                    </fieldset>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </section>



        <div class="h-4"></div>


<?php include('inc/footer.php'); ?>
