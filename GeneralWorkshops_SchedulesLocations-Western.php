<!DOCTYPE html>
<html lang="en">

<?php include "headhtml.php";?>

<body>
    <?php include "phone-nav.php";?>
    <div class="expand">

        <?php include "navigation.php";?>

        <div class="col-3-of-3">
<!--            <div id="content" class="cms-editable">-->
                <section class="section-inside">
                    <!-- <div class="section-inside-header sticky">
                    <h5 class="heading-five">General Workshops</h5>
                    <h1 class="heading-one hr-overview">Schedules & Locations</h1>
                  </div> -->
                    <div class="section-inside-header sticky">
                        <h5 class="heading-five">General Workshops</h5>
                        <!-- <h1 class="heading-one hr-overview">Schedules & Locations</h1> -->
                        <div class="inside-nav-container">
                            <hr class="work-hr">
                            <ul class="inside-nav">
                                <li><a href="GeneralWorkshops_SchedulesLocations-Schedules.php">← Schedules &amp;
                                        Locations</a></li>
                            </ul>
                            <hr class="work-hr">
                        </div>
                    </div>
                    <div class="banner">
                        <div id="banner-img-2" class="banner-img"> </div>
                    </div>

                    <div id="my-content" class="section-inside-content">
                        <p class=print-para>
                            <a href="GeneralWorkshops_SchedulesLocations-Western-print.php" class="btn-text no-margin orange-link print">Print this page <ion-icon name="print-outline" class="icon-ig"></ion-icon></a>
                        </p>
                        <h1>Western Region</h1>

                        <?php include "workshop_steps.php";?>

                        <?php include "Data_Western.php";?>

                        <br> <br>

<!--                        --><?php //include "WesternTable.php";?>

                        <?php include "modules_table.php";?>

<!--                        version-cache-->

                        <!-- <hr class="trademark-line u-margin-top-small"> -->
                    </div>
                </section>
<!--            </div>-->

            <?php include "footer.php";?>
        </div>

    </div>



</body>
</html>
