<!DOCTYPE html>

<html>
<head>
    <title>Everyman 2 - Polyphasic sleep</title>
    <link rel="icon"
          type="image/png"
          href="/resources/images/favicon.png">
    <link rel="stylesheet" href="/genstyles.css">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <script src="/scripts.js"></script>
</head>
<body>

<?php

require_once("../../classes/siteSession.php");
$session = new siteSession();
$session->startSession();

require_once("../../classes/layout.php");
layout::header();

?>

<main>
    <?php
    layout::patternMenu();

    ?>
    <div class="patterncontent col-9">
        <h2>Everyman 2 sleep</h2>
        <p>
            Everyman 2 sleep consists of a comparably long nocturnal sleep period of five hours, because there are just
            two naps to complement it. Compared to other Everyman sleep variations, this one provides the most amount
            of deep sleep. However, the total sleep time is increased as well.
        </p>

        <table class="statstable">
            <tr>
                <th>Total sleep time</th>
                <th>5h 40min</th>
            </tr>
            <tr>
                <th>Total number of sleep periods</th>
                <th>3</th>
            </tr>
            <tr>
                <th>Total awake time</th>
                <th>18h 20min</th>
            </tr>
            <tr>
                <th>Sleep time saved <span class="addinfo"><sup>&#x24D8</sup><span>compared to the average sleep time of a 20-year-old (7.5h)</span></span></th>
                <th>1h 50min (&#x2248 24%)</th>
            </tr>
            <tr>
                <th>Difficulty level <span class="addinfo"><sup>&#x24D8</sup><span>
                Different polyphasic sleep patterns require varying amounts of discipline and consistency,
                so some patterns are more difficult to successfully maintain than others.
                <br><br>Possible values in ascending order:
                <br>- easy
                <br>- medium
                <br>- advanced
                <br>- hard
                <br>- extreme
                </span></span></th>
                <th class="adv">advanced</th>
            </tr>

        </table>

        <?php
        layout::scheduleButton("Everyman sleep (2 naps)");
        ?>
    </div>

</main>

<?php
layout::footer();
?>


</body>
</html>