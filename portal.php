<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="portal.css">
    <title>Document</title>
</head>

<body>
    <?php
    $role = "user";

    if ($role === "admin") {
        echo "you can make changes to the portal";
    } elseif ($role === "editor") {
        echo "You have pending post to approve";
    } elseif ($role === "contributor") {
        echo "Do you want to post an article";
    } else {
        echo "You are welcome to our portal! You can read our articles";
    }
    ?>

    <div class="portalContainer">
        <div class="centralCont">
            <div class="top">
                <img src="calendar.png">
                <h3>DAILY ROUTINE PLANNER</h3>
                <p>Plan Your Day. Stay Productive.</p>
            </div>

            <div class="middle">
                <p>The Day</p>
                <form method="post">
                    <select name="day">
                        <option disabled selected>Select Day</option>
                        <option value="sunday">Sunday</option>
                        <option value="monday">Monday</option>
                        <option value="tuesday">Tuesday</option>
                        <option value="wednesday">Wednesday</option>
                        <option value="thursday">Thursday</option>
                        <option value="friday">Friday</option>
                        <option value="saturday">Saturday</option>
                    </select>
                </form>
                <button class="btn">View Routine</button>
            </div>

            <div class="bottom">
                <p class="mark">✓</p>
                <div class="routine">

                    <?php
                    $day = "Sunday";


                    switch ($day) {
                        case "Monday":
                            echo "
                      <h4>Routine for Monday</h4>
                      <ol>
                      <li>Do Murajah </li>
                      <li>Memorise Mutoon </li>
                      <li>Attend PHP Class</li>
                      <li>Go to Madrasa </li>
                      <li>Do Murajah </li>
                       </0l>
                       ";
                            break;

                        case "Tuesday":
                            echo "
                            <h4>Routine for Tuesday</h4>
                        <ol>
                          <li>Do Murajah </li>
                          <li>Attend Shaykh Abu Naasir class </li>
                          <li>Attend PHP Class </li>
                          <li>Go to Madrasa </li>
                          <li>Go For shaykh Ajia Halqoh </li>
                        </0l>";
                            break;

                        case "Wednesday":
                            echo "
                                <h4>Routine for Wednesday</h4>
                                <ol>
                                   <li>Do Murajah </li>
                                   <li>Memorise Mutoon </li>
                                   <li>Attend PHP Class </li>
                                   <li>Go to Madrasa </li>
                                   <li>Meet with Abu Abdulhaleem </li>
                                </0l>";
                            break;

                        case "Thursday":
                            echo "
                                <h4>Routine for Thursday</h4>
                                <ol>
                                    <li>Do Murajah </li>
                                    <li>Memorise Mutoon </li>
                                    <li>Meet with Abu Abdulhaleem </li>
                                </0l>";
                            break;


                        case "Friday":
                            echo "
                                <h4>Routine for Friday</h4>
                                <ol>
                                    <li>Do Murajah </li>
                                    <li>Go to Babamole Mosque </li>
                                    <li>Go to Abu khadeejah Halqoh </li>
                                </0l>";
                            break;

                        default:
                            echo " <h4> No Schedule for Today </h4>";
                    }

                    ?>
                </div>

            </div>
        </div>
        <footer>
            <p> &copy; <?php echo date("Y"); ?> Kredeable Tech. All right reserved </p>
        </footer>
    </div>

</body>

</html>