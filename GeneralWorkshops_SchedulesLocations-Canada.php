<!DOCTYPE html>
<html lang="en">
  <?php include "headhtml.php";?>
    <body>
<?php include "phone-nav.php";?>
        <div class="expand">

            <?php include "navigation.php";?>

            <div class="col-3-of-3">
<!--              <div id="content" class="cms-editable">-->
  <!-- Everything inside is editable -->

                <section class="section-inside">
                  <div class="section-inside-header sticky">
                    <h5 class="heading-five">General Workshops</h5>
                    <!-- <h1 class="heading-one hr-overview">Schedules & Locations</h1> -->
                    <div class="inside-nav-container">
                      <hr class="work-hr">
                    <ul class="inside-nav">
                      <li><a href="GeneralWorkshops_SchedulesLocations-Schedules.php">&larr; Schedules & Locations</a></li>
                    </ul>
                    <hr class="work-hr">
                  </div>
                  </div>
                  <div class="banner">
                    <div class="banner-img" id="banner-img-34">&nbsp;</div>
                  </div>


<!--                <div class="section-inside-content schedules">-->
                <div class="section-inside-content">
                    <p class=print-para>
                        <a href="GeneralWorkshops_SchedulesLocations-Canada-print.php" class="btn-text no-margin orange-link print">Print this page <ion-icon name="print-outline" class="icon-ig"></ion-icon></a>
                    </p>
                  <h1>Canada</h1>


                    <?php include "workshop_steps.php";?>

<!--                    --><?php //include "CanadaTable.php";?>
                    <?php include "Data_Canada.php";?>

                    <br> <br>

                    <?php include "modules_table.php";?>


                    <!--  version-cache 1-->

                    <br>


                    <!-- <hr class="trademark-line u-margin-top-small"> -->


                </div>


                </section>
<!--</div>-->
                <?php include "footer.php";?>
            </div>



        </div>




    </body>
</html>
