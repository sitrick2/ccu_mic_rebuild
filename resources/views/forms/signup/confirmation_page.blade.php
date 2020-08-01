@extends('layouts.signup')

@section('content')
<form action="checkin/index.php" method="post">
    <fieldset>
        <legend>CCU Open Mic Signup!</legend>
        <p>Before we finish signing you up, just a quick rundown of the rules:</p>

        <p>#1 Do not sign up and not show up. You gotta let us know if you can't make it.</p>

        <p>#2 Don't go over your time. Ask if you need to know where the clock and red light are. We use a stop watch and cut mics at 15 seconds over time. If you see a flashing red light you have less than 15 seconds till we cut your mic.</p>

        <p>#3 Don't be a dick or be creepy. We try to be a super nice, friendly place for everyone and if you get violent, seem to be sexually harassing someone or racist we're gonna kick you out.</p>

        <p>#4 Sign up only on Fridays after 10am - doing it outside of that can screw up your points, and make us think you're trying to be all shitty and devious. We've banned people for purposely signing up on the wrong days.</p>

        <p>The show starts at 10:15pm, try and get here 20 minutes ahead of time when the people running the place don't really know you.</p>

        @if(isset($user))
            <label>Is it your first time performing here? (this is so we know to try and get you on stage, we'll know if you are lying as our computer is super smart)</label>
        @else
            <label>If this is your first time signing up here, please click this button to change it to say Yes.</label>
        @endif
            <div class="switch large">
            <input id="first-time-switch-x" name="first_time" value="is_returning" type="radio" checked>
            <label for="first-time-switch-x">No</label>
            <input id="first-time-switch" name="first_time" value="is_first_time" type="radio">
            <label for="first-time-switch">Yes</label>
            <span></span>
        </div>

        <label>Unless you've been specifically told so, you aren't allowed to use this field.</label>
        <input type="text" name="comment" id="comment" maxlength="64">

        <button type="submit" class="btn btn-primary btn-block">Sign up!</button>
    </fieldset>
</form>
@endsection
