<!DOCTYPE html>
<html lang="en">
    <?php include "headhtml.php";?>
    <body>
<?php include "phone-nav.php";?>
        <div class="expand">

            <?php include "navigation.php";?>

            <div class="col-3-of-3">
              <div id="content" class="cms-editable">
  <!-- Everything inside is editable -->

                <section class="section-inside">
                  <div class="section-inside-header">
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
                    <div class="banner-img" id="banner-img-28">&nbsp;</div>
                  </div>

                <div id="my-content" class="section-inside-content cms-editable">

                  <h1>Southeastern Region</h1>

                    <?php include "workshop_steps.php";?>

                    <?php include "SouthEastTable.php";?>

                    <?php include "modules_table.php";?>


                    <!--                        version-cache-->

                    <!-- <hr class="trademark-line u-margin-top-small"> -->

                </div>

                </section>
              </div>

                <?php include "footer.php";?>
            </div>



        </div>


        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    </body>
</html>