<!DOCTYPE html>
<html lang="en">
  <?php include "headhtml.php";?>
    <body>
<?php include "phone-nav.php";?>
        <div class="expand">

            <?php include "navigation.php";?>

            <div class="col-3-of-3">
                <section class="section-inside">
                  <div class="section-inside-header">
                    <h5 class="heading-five">Miscellaneous | Join Mailing List</h5>
                    <h1 class="heading-one hr-overview">Mailing List</h1>
                  </div>
                  <div class="banner">
                    <div class="banner-img" id="banner-img-95">&nbsp;</div>
                  </div>

                <div id="my-content" class="section-inside-content cms-editable">
                  <h1>Join Our Mailing List </h1>

                     <p>
                    Receive updates on our program. Or refer a friend who might be interested in our program.
                Word-of-mouth referrals are an excellent way to share the program with the public. Please include complete mailing address.
                  </p>

                  <div class="login-form">
                      <h2 class="heading-secondary ma-bt-lg">Join Our Mailing List</h2>

                      <form action="https://getform.io/f/756eeead-2db1-42de-af93-176db13b7a9d" class="form form--signup" method="POST">
                          <!-- <div class="form__group">
                              <label class="form__label" for="name">Your name</label>
                              <input class="form__input" id="name" type="text" name="name" placeholder="" required>
                          </div> -->
                          <div class="row">
                              <div class="col-1-of-2">
                                <div class="form__group nusu">
                                    <label class="form__label" for="first">First Name</label>
                                    <input class="form__input half" id="first" type="text" name="first" placeholder="" required>
                                </div>
                              </div>
                              <div class="col-1-of-2">
                                <div class="form__group nusu">
                                    <label class="form__label" for="last">Last Name</label>
                                    <input class="form__input half" id="last" type="text" name="last" placeholder="" required>
                                </div>
                              </div>
                          </div>
                          <div class="form__group">
                              <label class="form__label" for="email">Email address</label>
                              <input class="form__input" id="email" type="email" name="email" placeholder="you@example.com" required>
                          </div>
                          <div class="form__group">
                              <label class="form__label" for="address">Your Address</label>
                              <input class="form__input" id="address" type="text" name="address" placeholder="" required>
                          </div>

                          <div class="row">
                              <div class="col-1-of-2">
                                <div class="form__group nusu">
                                    <label class="form__label" for="city">City</label>
                                    <input class="form__input half" id="city" type="text" name="city" placeholder="" required>
                                </div>
                              </div>
                              <div class="col-1-of-2">
                                <div class="form__group nusu">
                                    <label class="form__label" for="state">State</label>
                                    <input class="form__input half" id="state" type="text" name="state" placeholder="" required>
                                </div>
                              </div>
                          </div>


                          <div class="row">
                              <div class="col-1-of-2">
                                <div class="form__group nusu">
                                    <label class="form__label" for="zip">Zip Code</label>
                                    <input class="form__input half2" id="zip" type="text" name="zip" placeholder="" required>
                                </div>
                              </div>
                              <div class="col-1-of-2">
                                <div class="form__group nusu">
                                    <label class="form__label" for="country">Country</label>
                                    <input class="form__input half2" id="country" type="text" name="country" placeholder="" required>
                                </div>
                              </div>
                          </div>


                            <div class="form__group">
                              <label class="form__label" for="number">Phone number</label>
                              <input class="form__input" id="number" type="tel" name="phone" placeholder="123-456-7890" required>
                          </div>


                          <div class="form__group">
                              <label class="form__label" for="area">Plese specify your area of interest</label>
                              <input class="form__input" id="area" type="text" name="area" placeholder="" required>
                          </div>

                          <div class="form__group">
                              <label class="form__label" for="hear">How did you hear about us</label>
                              <input class="form__input" id="hear" type="text" name="hear" placeholder="" required>
                          </div>

                           <div class="form__group">
                            <label class="form__label1" for="journal">
<strong>
  Would you like us to mail you a complementary copy of the first chapter of At A Journal Workshop?
</strong>
                            </label>
                            &nbsp;
                            <select name="mail-chapter" id="mail-chapter" class="select-css">
                                   <option value="yes" selected>YES</option>
                                   <option value="no">NO</option>
                            </select>
<!--                            <input class="form__input" id="number" type="tel" name="phone" placeholder="123-456-7890" required>-->
                        </div>



                          <div class="form__group">
                              <button class="bton bton--green" id="button">Submit</button>
                          </div>
                      </form>
                  </div>


                  <?php include "pop.php";?>





                </div>


                </section>

                <?php include "footer.php";?>
            </div>



        </div>


        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    </body>
</html>
