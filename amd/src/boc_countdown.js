define(['jquery'], function($) {
    var t = {
        bocTime: 0,
        secsUntil: 0,
        init: function (bocTime) {
            t.bocTime = bocTime;
            t.secsUntil = t.getTimeLeft();
            t.calcTimeUntilBoc();
            window.setInterval(t.calcTimeUntilBoc, 1000);
        },
        getTimeLeft: function() {
            var now = new Date().getTime()/1000|0;
            return t.bocTime - now;
        },
        calcTimeUntilBoc: function() {
            t.secsUntil = t.getTimeLeft();
            if (t.secsUntil > 0) {
                var timeUntil = t.convertSecsToCountdown();
                $('.boc_timer').html(timeUntil);
            } else if (t.secsUntil <= 0 && t.secsUntil >= -3600) {
                $('.boc_timer').html("It's Beer O'Clock!!!");
            } else {
                $('.boc_timer').html("Have a great weekend!");
            }
        },
        convertSecsToCountdown: function() {
            var days = Math.floor(t.secsUntil / 86400);
            var _days;
            if (days == 1) {
                _days = days + ' day, ';
            } else {
                _days = days + ' days, ';
            }

            var hours = Math.floor(24 * (t.secsUntil / 86400 - days));
            if (hours < 0) {
                hours = 0;
            }
            var _hours;
            if (hours == 1) {
                _hours = hours + ' hour, ';
            } else {
                _hours = hours + ' hours, ';
            }

            var minutes = Math.floor((t.secsUntil / 60) % 60);
            var _minutes;
            if (minutes == 1) {
                _minutes = minutes + ' minute, and ';
            } else {
                _minutes = minutes + ' minutes, and ';
            }

            var seconds = t.secsUntil % 60;
            var _seconds;
            if (seconds == 1) {
                _seconds = seconds + ' second ';
            } else {
                _seconds = seconds + ' seconds ';
            }

            return _days + _hours + _minutes + _seconds + "until Beer O'Clock.";
        }
    };
    return t;
});
