@extends('layouts.checkin')

@section('content')
    <div class="row">
        <div class="small-12 columns">
            <p><img src="../images/ccu-logo.png"></p>
        <?php

        $mysql = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_schema, $mysql_port, $mysql_socket);
        $user_id_result = mysqli_query($mysql, "SELECT comic_id FROM checkins WHERE comic_id = '$_SESSION[session_id]' AND day = curdate()");

        @if (isset($user))
            <p>It looks like you've already signed up.</p>
            The list will be out at approximately 9:45pm and will be posted downstairs in the hall in front of the ticket booth, and at <a href=\"http://ccug.co/mic/list/\">here</a>.
Do you think the list is unfair? It might be. We try and be fair, and use an algorithm to help the humans make the list, but sometimes there are only 2 friggin women signed up and \they were on the last two weeks and what are we going to do? Just have a show with all dudes? What is this? 2012? All we're saying is, we might do something that seems like we're being dicks, and it's usually not on purpose.
            @endif
            mysqli_close($mysql);

            echo "<!--";
            print_r($_REQUEST);
            echo "-->";

            session_destroy();
            $facebook->destroySession();
        } else {
        $score = 0;
        $score = $_REQUEST[guests] * 5;
        $score += $_SESSION[weeks_in_a_row_without_time] * 25;
        if ($_REQUEST[first_time] == "is_first_time") {
            $score += 100;
            $first_time = 1;
        }
        else {
            $first_time = 0;
        }
        if ($_REQUEST[rooftop] == "rooftop_yes") {
            $rooftop = 1;
        }
        else {
            $rooftop = 0;
        }
        $score += $_SESSION[weight];

        $comment = addslashes($_REQUEST[comment]);

        echo "<!--";
        print_r($_REQUEST);
        echo "-->";

        $mysql = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_schema, $mysql_port, $mysql_socket);
        $result = mysqli_query($mysql, "INSERT INTO checkins (comic_id, guests, day, score, first_time, rooftop, comment) values ('$_SESSION[session_id]','$_REQUEST[guests]',curdate(), '$score', '$first_time', '$rooftop', '$comment')");
        if ($result) {
            // We're good.
        } else {
            print_r($result);
            print_r( mysql_error($mysql) );
            echo "Something bad happened here: " . mysqli_error($mysql);
        }
        $update_phone_result = mysqli_query($mysql, "UPDATE comics SET phone = '$_SESSION[phone]' where id = '$_SESSION[session_id]'");
        mysqli_close($mysql);
        echo "
            <p>If you're on this page, you've successfully signed up. You can check the list at ccug.co/mic/list or on the wall opposite from the ticket booth right about 9:30. If you can't make it text the club at 612-492-1197 RIGHT AWAY. <b>Not letting us know you can't make it after signing up will get you banned</b></p>
            <p>If you're looking for other open mics to try, <a href=\"http://www.mikebrody.com/twin-cities-open-mics.html\">THIS</a> is a pretty detailed list of them all. Remember, check <a href=\"http://ccug.co/mic/list/\">THIS LINK HERE</a> to see if you made the list.</p>
            ";

        session_destroy();
        $facebook->destroySession();

        ?><!-- <p>If you're on a shared computer/laptop/tablet please click the logout button below.</p>
        <p><a href="<?php echo $facebook_logout_url; ?>" class="button alert">Logout</a></p>--><?php
            }

            ?>
        </div>
    </div>
@endsection
