<style>
    /*Yes we don't use template in our websites,just move along.
       Nothing special just css3,html5 and Jquery.
       #WeGotYou @ipfsoftwares.
       Oct. 2016
       www.ipfsoftwares.com
       */
    .ipf-home{
        width: 100%;
        height: auto;
        min-height: 100vh;
        display: table;
        background-image:  url("<?=base_url('assets/images/seaview.png')?>");
        background-size: cover;
        background-repeat: no-repeat;
        z-index: 1;
    }
    .ipf-home:after{
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top:0;
        left: 0;
        background-image: url(<?=base_url('assets/images/landingpagemap.png')?>);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: left bottom;
        z-index: 2;
    }

    .home-contents{
        width: 35%;
        height: 300px;
        position:absolute;
        padding-left:50px;
        top:150px;
        right: 50px;
        z-index: 3;
    }
    .home-title{
        font-size: 2.5em;
        text-transform: uppercase;
        color: white;
        font-family: "Montserrat Bold",sans-serif;
    }
    .home-contents .btn-container{
        width: 100%;
        height: auto;
        display: table;
        margin-top: 30px;



    }
    .e-date{
        font-size: 2.5em;
        color: white;
        font-family: "Montserrat Bold",sans-serif;
        float: left;
        margin-left: -170px;
    }
    .register-btn{
        width: auto;
        padding: 10px 50px;
        border: solid 1px white;
        border-radius: 3px;
        color: white;
        font-family: "Lato bold",sans-serif;
        font-size: 1.3em;
        cursor: pointer!important;
        display: block;
        max-width: 300px;
        float: left;
        margin-left: 10px;

    }

    .fa-facebook{ color: #3b5998;}
    .fa-youtube{ color: #bb0000;}
    .fa-twitter{ color: #00aced;}
    .fa-instagram{ color: #517fa4;}
    .fa-flickr{ color: #ff0084;}

    @media only screen and (max-width: 780px) {
        .ipf-home:after{

        }
        .home-contents{
            width: 70%;
            left: 50%;
            top:200px;
            transform: translateX(-50%);
            right: 0;
        }
        .home-contents >h2{
            transform: translateX(0);
        }
    }
    @media only screen and (max-width: 520px) {
        .ipf-home:after{
            display: none;
        }
        .home-contents{
            width: 100%;
            top:120px;
            left: 0;
            right: 0;
            transform: translateX(0);
        }
        .home-title{
            font-size: 2em;
        }

        .e-date{
            line-height: 2;
            margin-left: 0;
            font-size: 2em;
        }
    }
</style>


<section class="ipf-home ">
    <div class="home-contents">
        <h1 class="home-title">
            dar ramani<br/>
            huria workshop
        </h1>
        <div class="btn-container">
            <span class="e-date"> 7,8 Nov </span>
            <a href="https://www.eventbrite.com/e/dar-ramani-huria-reflection-new-direction-tickets-28755419233" target="_blank" class="register-btn">Register Now <a/>
        </div>
    </div>




</section>


<script>




</script>
