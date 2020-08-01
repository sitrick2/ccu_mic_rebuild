@extends('layouts.signup')

@section('content')
            <fieldset>
                <legend>CCU Open Mic Signup!</legend>
                <p>This is the Comedy Corner's mic sign up. Sign up DAY OF SHOW, any time after 2am CST. List is getting made at 3pm for the time being, with an 8pm show. Times are fucking weird. The open mic is back with a stage, lights, all that jazz, livestreamed on facebook with also an audience joining via zoom so you can hear some laughs. Big thing is we’ve got some super serious rules you gotta follow.
                </p>

                <p>1.	We’re asking if you work in a high-risk field, you skip signing up for a bit here. We’re doing our best to work with the state to find the safest way to safely do this, and this is one of the biggest ways to reduce risk. We will still have a few comics drop by off of zoom, so if you’re super interested, we’ll let you get in that way! (reach out to bob) </p>

                <p>a.	Anyone in the medial field actively working with patients, or with those who are actively working with those who work with patients.
                </p>

                <p>b.	Anyone working at elder-care facilities, or in a job that works specifically with the elderly.
                </p>

                <p>c.	Anyone in high volume, high touch customer service jobs (grocery stores, daycares, convivence stores)
                </p>

                <p>d.	Anyone who has come in contact with or knows someone who has come in contact with Corey Adam.
                </p>


                <p>2.	You gotta have a mask on till you are on stage. If you don’t do this, you don’t get in the building. Don’t be a dick. As soon as you leave stage, please replace your mask as well.
                </p>

                <p>3.	One comic in, one comic out. Wait in your car till you are on deck (you’ll get a text).
                </p>

                <p>4.	On entry, maintain social distance. We all get this, you gotta do it. Wash your hands or use the provided sanitizer immediately.
                </p>

                <p>5.	On the table near the sound booth there will be individually bagged mic slip covers. Take the first one you touch. This is yours forever now. You may remove your mask.
                </p>

                <p>
                    6.	Host will say your name and exit stage left. Enter from center of stage, put on your mic cover. Do your 5 or so, take off your mic cover. Exit center stage, host will sanitize everything with a spray on sanitizer and do a minute or so of jokes while we get the next comic in the building. Host changes gloves between each sanitization, so next comic is going up to a sterile mic.

                </p>

                <p>7.	Cry about what the fuck comedy is right now.
                </p>

                <p>We use your email to identify you, so make sure you use the same one every week, even a typo can fuck up our very NOT-FAIL-PROOF system.

                </p>

                <p>
                    Enter your all your info below, and follow the steps on the next page. First few weeks like this we’re for sure gonna be selective of who gets time.

                </p>


                <form action="#" method="post">
                    <label>First name:</label><input type="text" name="first_name" id="first_name">
                    <label>Last name:</label><input type="text" name="last_name" id="last_name">
                    <label>Email:</label><input type="text" name="email_address" id="email_address">
                    <label>Phone number:</label><input type="text" name="phone" id="phone">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>

                <p><i>If you can’t make the open mic, text 612-492-1197 to say that to us, or you might get banned!</i></p>
            </fieldset>
@endsection
