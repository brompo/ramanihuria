<style>
    /*Yes we don't use template in our websites,just move along.
       Nothing special just css3,html5 and Jquery.
       #WeGotYou @ipfsoftwares.
       Oct. 2016
       www.ipfsoftwares.com
       */
    .ipf-home{
        width: 100%;
        height: 100vh;

        background: rgb(0, 0, 0) url("assets/images/home-bg.jpg");
        background-size: 100%;
        z-index: 1;
    }
    .home-after{
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top:0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 2;
    }
    /*.ipf-home:after{*/
        /*content: "";*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*position: absolute;*/
        /*top:0;*/
        /*left: 0;*/
        /*background: rgba(0, 0, 0, 0.5);*/
        /*z-index: 1;*/
       /**/

    /*}*/
    .home-contents{
        width: 50%;
        height: 350px;
        top:50%;
        left: 50%;
        transform: translate(-50%,-50%);
        z-index: 3;

    }
    .home-contents h1{
        text-align: center;
        font-size: 2.5em;
        color: #fff;
        /*word-spacing: 0.35em;*/
        letter-spacing: 0.05em;
    }
    .home-contents h2{
        text-align: center;
        color: white;
        font-size: 0.9em;
        line-height: 2;

    }

    .events{
        width: 70%;
        height: auto;
        display: table;
        margin: 20px auto;
    }
     .events >div{
        float: left;
        width: 25%;
        height: auto;
        text-align: center;

    }
     .events >div .circle{
        width: 70px;
        height: 70px;
        /*border-radius: 50%;*/
        /*border:solid 2px white;*/
        color: #ffffff;
        /*text-shadow: 0 0 1px rgba(0, 0, 0, 0.3);*/
        padding-top: 15px;
        font-size: 1.6em;
        background-color: rgba(32, 145, 213, 0.31);
        margin: 0 auto;

    }

    .events >div span{
        display: block;
        width: 100%;
        color: white;
        text-align: center;
        line-height: 3;
        font-size: 1em;
        text-shadow: 0 0 1px rgba(0, 0, 0, 0.15);

    }
    .minutes-container{
        animation-delay: 0.4s
    }
    .hours-container{
        animation-delay: 0.5s
    }
    .days-container{
        animation-delay: 0.6s
    }
    .seconds-container{
        animation-delay: 0.3s
    }
    .loc-date{
        width: 300px;
        height: 80px;

        position: absolute;
        bottom: 0;
        left: 0;
        z-index: 2;
        text-transform: uppercase;
        font-size: 0.8em;
        line-height: 2;
        padding-left: 25px;
        color: white;
    }
    .loc-date i{
        font-size: 1.5em;
    }
    .social-media{
        width: 200px;
        height: 80px;
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 2;
        padding-right: 20px;
        padding-top: 20px;
    }
    .social-media a{
        display: block;
        float: left;
        margin-left: 15px;
        color: white;
        font-size: 1.2em;
        transition: all 0.4s ease-in;
    }
    .fa-facebook:hover{ color: #3b5998;}
    .fa-youtube:hover{ color: #bb0000;}
    .fa-twitter:hover{ color: #00aced;}
    .fa-instagram:hover{ color: #517fa4;}
    .fa-flickr:hover{ color: #ff0084;}
</style>


<section class="ipf-home ">
    <div class="home-after"></div>
    <div class="home-contents">

            <h1><span style='font-family: "Montserrat light",sans-serif;'>DAR </span><span style='font-family: "Montserrat Bold",sans-serif;'>RAMANI HURIA</span></h1>
            <h2>Closing Workshop & Scale Up - Relfection & New Direction.</h2>
        <div class="events" id="clockdiv">
            <div class="days-container ">
                <div class="circle days"></div>
                <span>days</span>
            </div>
            <div class="hours-container ">
                <div class="circle hours"></div>
                <span>hours</span>
            </div>
            <div class="minutes-container ">
                <div class="circle minutes"></div>
                <span>minutes</span>
            </div>
            <div class="seconds-container  ">
                <div class="circle seconds"></div>
                <span>seconds</span>
            </div>

        </div>
        <a ><button class="button button--ujarak button--border-medium button--text-thick button--text-upper button--size-m ">attendees registration</button></a>


    </div>

    <div class="loc-date">

        <div><i class="fa fa-clock-o brand-yellow"></i>&nbsp;&nbsp;&nbsp;<span>7 - 8 December, 2016</span></div>
        <div>&nbsp;<i class="fa fa-map-marker brand-yellow"></i>&nbsp;&nbsp;&nbsp;<span>Mlimani City,Dar Es Salaam</span></div>

    </div>

    <div class="social-media">
        <a href="https://www.facebook.com/ramanihuria" target="_blank"><i class="fa fa-facebook "></i></a>
        <a href="https://twitter.com/RamaniHuria" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UCRbySbeRonr7toWQfn7FlKA" target="_blank"><i class="fa fa-youtube"></i></a>
        <a href="https://www.instagram.com/ramani.huria/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://www.flickr.com/photos/ramanihuria/collections" target="_blank"><i class="fa fa-flickr"></i></a>
    </div>

</section>


<script>
    $(document).ready(function() {
        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function initializeClock(id, endtime) {
            var clock = document.getElementById(id);
            var daysSpan = clock.querySelector('.days');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');

            function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }

        var deadline ='Octber 24 2016';
        initializeClock('clockdiv', deadline);
    });




</script>
