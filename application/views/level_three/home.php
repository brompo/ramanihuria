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
        background:  url("assets/images/homemap.png");
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
        background: rgba(255, 255, 255, 0.85);
        z-index: 2;
    }

    .home-contents{
        width: 100%;
        height: 600px;
        position:absolute;
        padding-left:50px;
        bottom:0;
        z-index: 3;
        /*background-color: red;*/


    }
    .home-contents .big-date{
        width:100%;
        height:auto;
        display:table;
        text-shadow:0 0 2px rgba(255,255,255,0.55);


    }
    .big-date >div{
        float:left;
    }
    #date{
        width:40%;
        height:70%;
        text-align: right;


    }
    #date >span{
        font-size:25em;
        font-family: "Oswald Bold",sans-serif;
        line-height:1;
    }
    #date >i{
        font-size: 5em;
        top: -150px;
        color: #f2c71a;


    }
    #month-year{
        width:60%;
        height:70%;
        padding-top:24px;
        font-family: "Montserrat Bold",sans-serif;
    }
    #month-year #month{
       font-size:5em;
    }
    #month-year #year{
        font-size:4.5em;
    }
    #month-year .event-title{
        color: #000;
        font-size: 40px;
        text-transform: uppercase;
        background: #fff300;
        line-height: 1;
        padding: 15px 30px 15px 10px;
        margin-top: 10px;
        display: block;
        position: absolute;
        /*left: 50%;*/
        right: 0;
        width: 100%;
        margin-left: -45px;
        word-spacing: 0.1em;
        text-align: right;
        /*letter-spacing: 0.015em;*/
    }
    #month-year .register-button{
        font-size: 40px;
        text-transform: uppercase;
        background: #000;
        line-height: 1;
        padding: 15px 30px 15px 30px;
        margin-top: 110px;
        display: block;
        position: absolute;
       right: 0;
        width: auto;
        margin-left: -45px;
        color: white;
        text-align: center;
        letter-spacing: 0.015em;
    }
    .events{
        width: 33%;
        height: auto;
        display: table;
        margin-left: 70px;
        /*margin: 20px auto;*/

    }
     .events >div{
        float: left;
        width: 25%;
        height: auto;
        text-align: center;
         /*background:red;*/

    }
     .events >div .circle{
        width: 70px;
        height: 70px;
        /*border-radius: 50%;*/
        /*border:solid 2px white;*/
         color: #f2c71a !important;
        /*text-shadow: 0 0 1px rgba(0, 0, 0, 0.3);*/
        padding-top: 20px;
        font-size: 2.5em;
        /*background-color: rgba(32, 145, 213, 0.31);*/
        margin: 0 auto;

    }
     .events .circle:after{
         content: ":";
         position: absolute;
         left: 120%;
          color: #f2c71a !important;
     }
    .events >div:last-child .circle:after{
        content: "";
    }

    .events >div span{
        display: block;
        width: 100%;
        color: #2091d5;
        text-align: center;
        line-height: 3;
        font-size: 1em;
        text-shadow: 0 0 1px rgba(0, 0, 0, 0.15);
        text-transform: uppercase;


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
        display: none;
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
        display: none;
    }
    .social-media a{
        display: block;
        float: left;
        margin-left: 15px;
        color: white;
        font-size: 1.2em;
        transition: all 0.4s ease-in;
    }
    .fa-facebook{ color: #3b5998;}
    .fa-youtube{ color: #bb0000;}
    .fa-twitter{ color: #00aced;}
    .fa-instagram{ color: #517fa4;}
    .fa-flickr{ color: #ff0084;}
</style>


<section class="ipf-home ">
    <div class="home-after"></div>
    <div class="home-contents">
        <h1 class="brand-blue">
            <div class="big-date">
                <div id="date">
                    <span>7</span>
                    <i>&</i>
                    <span>8</span>
                </div>
                <div id="month-year">
                    <span id="month">NOV</span><br/>
                    <span id="year">2016</span>
                    <span class="event-title">Dar Ramani huria workshop</span>
                    <a href=" https://www.eventbrite.com/e/dar-ramani-huria-reflection-new-direction-tickets-28755419233" target="_blank" class="register-button">REGISTER</span></a>
                </div>
            </div>


        </h1>

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
