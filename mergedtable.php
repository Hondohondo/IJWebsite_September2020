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
                    <div class="banner-img" id="banner-img-72">&nbsp;</div>
                </div>


                <div class="section-inside-content schedules">

                    <h1>Merged Table (Canada and US)</h1>
                    <br>
                    <!-- <h6>Using Dreams and Imagery to Develop Your Life</h6> -->
                    <table class="table-credits table-praises table-schedules">
                        <tr>
                            <th>Code</th>
                            <th>Module</th>
                            <th>Description</th>
                        </tr>

                        <tr>
                            <td>LC</td>
                            <td> <a href="GeneralWorkshops_WorkshopModules-LifeContext.php" class="page-link">Life Context</a></td>
                            <td>Part One - No Prerequisites</td>
                        </tr>

                        <tr>
                            <td>DC</td>
                            <td> <a href="GeneralWorkshops_WorkshopModules-DepthContext.php" class="page-link">Depth Contact</a></td>
                            <td>Part Two - Prerequisite - Life Context</td>
                        </tr>

                        <tr>
                            <td>LE</td>
                            <td> <a href="GeneralWorkshops_WorkshopModules-LifeExperience.php" class="page-link">Life Experience</a></td>
                            <td>Combines Parts One and Two - No Prerequisites</td>
                        </tr>

                        <tr>
                            <td>LI</td>
                            <td> <a href="GeneralWorkshops_WorkshopModules-LifeIntegration.php" class="page-link">Life Integration</a></td>
                            <td>Part Three - Prerequisites - Either LC and DC or LE</td>
                        </tr>

                        <tr>
                            <td>LS</td>
                            <td> <a href="GeneralWorkshops_WorkshopModules-LifeStudy.php" class="page-link">Life Study</a></td>
                            <td>Learning from another's life - Prerequisite - Life Context
<!--                                <h2 class="orange">See West-Oregon - online workshop November 16-17, 2020.</h2>-->
                            </td>
                        </tr>

                        <tr>
                            <td>SEM</td>
                            <td> <a>Seminar</a></td>
                            <td>Learn the theories behind the <em>Intensive Journal</em>- Prerequisites-Life Context</td>
                        </tr>

                        <tr>
                            <td>PRE</td>
                            <td> <a>Intro Course</a></td>
                            <td>Experience a sampling of <em>Intensive Journal</em> exercises - Prerequisite - None</td>
                        </tr>

                    </table>
                    <br>

                    <h2 class="orange">Notice: Online Workshops</h2>

                    <p class="u-margin-bottom-small-1">
                        The "location" for our online workshops using Zoom means that the primary source of participants will likely be from that area.
                        Any module that has the letters "ONL" designates that the workshop is being held online.  Example:  LC-ONL is a Life Context module that is held online.   Please register early.  We have to ship you the Intensive Journal workbook prior to the conference. Thank you for your cooperation.
                    </p>

                    <h2 class="orange">Online 3-Part Series</h2>
                    <p>We urge you to read about the format of the <a href="Intensive_online-series.php" class="page-link">3-Part Online Series</a>
                    </p>

                    <p>
                        Click on the <strong>city name</strong> to see details of that workshop.
                    </p>

                    <h1>Merged Table (Filtering)</h1>
                    <p class="u-margin-bottom-small-1">
                        The following table is a combination of all the US regions and Canada. Use the filtering search box to filter
                        for the data that you want you can filter by a specific leader, by month, etc.
                    </p>

                    <div class="form__group">
                        <input type="search" placeholder="Filter the table by leader, month, etc." class="form__input" required>
                    </div>

                    <h2 class="orange">Western Region </h2>
                    <?php include "WesternTable.php";?>

                    <br>
                    <h2 class="orange">Midwest Region</h2>
                    <?php include "MidWestTable.php";?>

<!--                    --><?php //include "NorthEastTable.php";?>

<!--                    --><?php //include "SouthEastTable.php";?>

<!--                    --><?php //include "CanadaTable.php";?>


                    <!-- <hr class="trademark-line u-margin-top-small"> -->


                </div>


            </section>
        </div>
        <?php include "footer.php";?>
    </div>



</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="tablefilter.js"></script>
<!--<script src="table.js"></script>-->
<script src="table2.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>
</html>
