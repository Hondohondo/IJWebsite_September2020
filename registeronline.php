<!DOCTYPE html>
<html lang="en">
<?php include "headhtml.php";?>
<body>
<?php include "phone-nav.php";?>
<div class="expand">

<!--    --><?php //include "navigation.php";?>

<!--    <div class="col-3-of-3">-->
        <section class="section-house">
            <div class="section-house-header">
                <h5 class="heading-five">Intensive Journal Program</h5>
                <h1 class="heading-one hr-overview">Workshop Online Registration</h1>
            </div>
            <div class="banner">
<!--                <div class="banner-img" id="banner-img-17">&nbsp;</div>-->
<!--                <div class="banner-img" id="banner-img-10">&nbsp;</div>-->
<!--                <div class="banner-img" id="banner-img-13">&nbsp;</div>-->
<!--                <div class="banner-img" id="banner-img-14">&nbsp;</div>-->
<!--                <div class="banner-img" id="banner-img-23">&nbsp;</div>-->
                <div class="banner-img" id="banner-img-29">&nbsp;</div>
            </div>

            <div id="my-content" class="section-inside-content cms-editable">
                <h1>Register Online for our Workshops</h1>

                <p>
                    Use this form to register and pay for an Intensive Journal Workshop. Alternatively, if you can register by
                    calling <b>330-998-6000</b>  or emailing <b>info@intensivejournal.org</b>
                </p>
                <p>
                    <b>Register early:</b>  We need to ship you the Intensive Journal  workbook for the Life Context workshop.
                    Please allow two weeks for shipping within the United States and additional time for other countries.
                </p>

                <div class="login-form">
                    <h2 class="heading-secondary ma-bt-lg">Online Registration Form</h2>

                    <form action="" class="form form--signup" method="POST">
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
                                    <label class="form__label" for="state">State (If Applicable)</label>
                                    <input class="form__input half" id="state" type="text" name="state" placeholder="" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-1-of-2">
                                <div class="form__group nusu">
                                    <label class="form__label" for="zip">Zip Code (If Applicable)</label>
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
                            <label class="form__label" for="hear">How did you hear about the <em>Intensive Journal</em> Program?</label>
                            <input class="form__input" id="hear" type="text" name="hear" placeholder="" required>
                        </div>

                        <div class="form__group">
                            <label class="form__label1" for="journal">
                                <strong>
                                    Have you attended an <em>Intensive Journal</em> program before?
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
                            <label class="form__label" for="area"> If you answered 'Yes' to the previous question, what was the approximate year?</label>
                            <input class="form__input" id="area" type="text" name="area" placeholder="" required>
                        </div>

                        <div class="form__group">
                            <label class="form__label" for="amount">Workshops:</label>
                            <!-- <input type="radio"> -->
                            <div class="row">

                                <div class="col-1-of-2">
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="small" name="amount" value="$25">
                                        <label for="small" class="form__radio-label"><b>Part 1:</b> Life Context (LC)</label>
                                    </div>
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="big" name="amount" value="$50">
                                        <label for="big" class="form__radio-label"><b>Part 2:</b> Depth Contact (DC)</label>
                                    </div>
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="extra" name="amount" value="$100">
                                        <label for="extra" class="form__radio-label"><b>Part 3:</b> Life Integration (LI)</label>
                                    </div>
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="lcdc" name="amount" value="$100">
                                        <label for="lcdc" class="form__radio-label">LC / DC</label>
                                    </div>
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="lcli" name="amount" value="$1000">
                                        <label for="lcli" class="form__radio-label">LC / DC / LI</label>
                                    </div>

                                </div>
                                <div class="col-1-of-2">
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="twofifty" name="amount" value="$250">
                                        <label for="twofifty" class="form__radio-label"><b>Advanced:</b> Life Study (LS)</label>
                                    </div>
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="fivehund" name="amount" value="$500">
                                        <label for="fivehund" class="form__radio-label">Presentation (PRE)</label>
                                    </div>
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="thousand" name="amount" value="$1000">
                                        <label for="thousand" class="form__radio-label">Seminar (SEM)</label>
                                    </div>
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="dcli" name="amount" value="$1000">
                                        <label for="dcli" class="form__radio-label">DC / LI</label>
                                    </div>
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="lcls" name="amount" value="$1000">
                                        <label for="lcls" class="form__radio-label">LC / DC / LI / LS</label>
                                    </div>

                                </div>

                          <!--      <div class="col-1-of-3">


                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="other" name="amount">
                                        <label for="other" class="form__radio-label">Other</label>
                                    </div>

                                </div>-->
                            </div>

                        </div>

                        <div class="form__group">
                            <label class="form__label" for="fees">Payment:</label>
<!--                            <input class="form__input" id="fees" type="text" name="hear" placeholder="" required>-->
                        </div>

                        <div class="form__group">
                            <button class="bton bton--green" id="button">Submit & Pay</button>
                        </div>
                    </form>
                </div>


                <?php include "pop.php";?>





            </div>


        </section>

        <?php include "footer.php";?>
<!--    </div>-->



</div>




</body>
</html>

