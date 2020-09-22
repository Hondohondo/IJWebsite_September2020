
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
                    <h5 class="heading-five">Miscellaneous | Endorse the Method</h5>
                    <h1 class="heading-one hr-overview">Endorse the Method</h1>
                  </div>
                  <div class="banner">
                    <div class="banner-img" id="banner-img-93">&nbsp;</div>
                  </div>

                <div id="my-content" class="section-inside-content cms-editable">
                  <h1>Endorse the Method</h1>

<!--
                  <p class="u-margin-top-small-2">
                    Do you know someone who would really benefit from attending an <em>Intensive Journal</em> workshop?
                  </p>
-->
                  <p>
                 Endorsements from workshop participants help us spread the word about the great value of the <em>Intensive Journal</em> method. We greatly appreciate your taking a few moments to write a statement summarizing your experience in the program. If you wish to discuss your statement or have any questions, please contact us at 800-221-5844 or email: info@intensivejournal.org.
                  </p>


<!--
                <p class="u-margin-top-small">
                  Many <em>Intensive Journal</em> workshops have been successful for larger groups including:
                   women's/ men's groups, writers, churches, and senior citizens. Consider these as well for referrals.
                </p>
-->

                <p>
                  Thanks for your cooperation!
                </p>


                <div class="login-form">
                    <h2 class="heading-secondary ma-bt-lg">Endorse the Method</h2>

                    <form action="https://getform.io/f/b4394b44-b89a-4f42-a6f4-22906115d255" class="form form--signup" method="POST">

                        <!-- <div class="form__group">
                            <label class="form__label" for="name">Your name</label>
                            <input class="form__input" id="name" type="text" name="name" placeholder="Your name" required>
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
                            <label class="form__label" for="email">Your email</label>
                            <input class="form__input" id="email" type="email" name="email" placeholder="Your email" required>
                        </div>

                        <div class="form__group">
                            <label class="form__label" for="address">Address</label>
                            <input class="form__input" id="address" type="text" name="address" placeholder="" required>
                        </div>


                          <div class="form__group">
                              <label class="form__label" for="city">City</label>
                              <input class="form__input half" id="city" type="text" name="city" placeholder="" required>
                          </div>


                        <div class="row">

                            <div class="col-1-of-2">
                              <div class="form__group nusu">
                                  <label class="form__label" for="state">State</label>
                                  <input class="form__input half" id="state" type="text" name="state" placeholder="" required>
                              </div>
                            </div>
                            <div class="col-1-of-2">
                              <div class="form__group nusu">
                                  <label class="form__label" for="state">Zip</label>
                                  <input class="form__input half" id="state" type="text" name="state" placeholder="" required>
                              </div>
                            </div>
                        </div>

                         <div class="form__group">
                            <label class="form__label" for="number">Phone number (Optional)</label>
                            <input class="form__input" id="number" type="tel" name="phone" placeholder="123-456-7890">
                        </div>

                           <div class="form__group">
                              <label class="form__label" for="message">Endorsements</label>
                               <textarea class="form__input" id="message" type="tel" name="message" placeholder="Please write your endorsement here" required></textarea>

                          </div>

<!--
                              <div class="form__group">
                            <label class="form__label" for="check">Please make checks payable to: <strong>The Foundation for Integral Research</strong></label>
                        </div>
-->

                        <div class="form__group">
<!--                            <label class="form__label" for="number">Please mail to:</label>-->
                            <p>

                                I authorize Dialogue House to use all or part of the statement in its publicity. Dialogue House reserves the right to make minor editorial changes where necessary
                            </p>

                            <!-- <p>I wish my name to be used: </p> -->
<!--                            <input class="form__input" id="number" type="tel" name="phone" placeholder="123-456-7890" required>-->
<div class="form__group">
   <label class="form__label1" for="wish-name">I wish my name to be used:</label>
   <!-- <input class="form__input" id="number" type="tel" name="phone" placeholder="123-456-7890"> -->
   <select name="wish-name" id="wish-name" class="select-css">
          <option value="yes" selected>YES</option>
          <option value="no">NO</option>
   </select>
</div>

<div class="form__group">
   <label class="form__label1" for="wish-city">I wish my city/state to be used:</label>
   <!-- <input class="form__input" id="number" type="tel" name="phone" placeholder="123-456-7890"> -->
   <select name="wish-name" id="wish-city" class="select-css">
          <option value="yes" selected>YES</option>
          <option value="no">NO</option>
   </select>
</div>
                        </div>

                        <div class="form__group">
                            <button class="bton bton--green" id="button">Submit</button>
                        </div>
                    </form>
                </div>


                       <p>
                 If you would like to write an extended endorsement, please see our <a href="Learnmore_LifeHistories-WriteLifeHistory.php" class="page-link">Life Histories section</a>

                  <!-- for information by clicking <a href=""> HERE</a> -->
                </p>

                <?php include "pop.php";?>
                </div>


                </section>

                <?php include "footer.php";?>
            </div>



        </div>


        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


    </body>
</html>
