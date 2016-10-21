$(document).ready(function () {
    // Set target date need counting down to
    var target_date = new Date('Dec, 31, 2016').getTime();

    // set variables time unit
    var days, hours, minutes, seconds, ms_step = 10;

    // get tag element
    var countdown = document.getElementById('countdown');

    //function countdown
    setInterval(function () {
        //set & get current date
        var current_date = new Date().getTime();
        var seconds_left = (target_date - current_date) / 1000;
        days = parseInt(seconds_left / 86400);
        seconds_left = seconds_left % 86400;
        hours = parseInt(seconds_left / 3600);
        seconds_left = seconds_left % 3600;
        minutes = parseInt(seconds_left / 60);
        seconds = parseInt(seconds_left % 60);
        //ms = parseInt(target_date - current_date);

        // format countdown string + set tag value
        countdown.innerHTML = '' +
            '<div> ' + days + ' <span>Days</span></div>' +
            '<div> ' + hours + ' <span>Hours</span></div>' +
            '<div> ' + minutes + ' <span>Min</span></div>' +
            '<div> ' + seconds + ' <span>Sec</span></div>';

        // this is just for milliseconds only
        /* countdown.innerHTML =
         '<div class="ms">'+ms+' ms</div>'; */
        $("#countdown").attr({"title": "" + days + " Days and " + hours + " Hours to the end of this offer"});
    }, ms_step);
});
