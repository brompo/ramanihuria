<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 13/10/2016
 * Time: 6:54 PM
 * 
 */?>



<style>
    .ipf-about{
        width: 100%;
        height: auto;
        min-height: 300px;
        display: table;
        background-color: #f9f9f9;
        padding-top: 80px;
        padding-bottom: 80px;
        overflow: hidden;
    }
    .ipf-about:after{
        content:"\f041" ;
        font-family: FontAwesome;
        width: 100%;
        height: auto;
        top:50%;
        left: 0;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        position: absolute;
        text-align: center;
        align-content: center;
        color: #eeeeee;
        font-size: 40em;
        z-index: 1;
        opacity: 0.4;
    }

    .ipf-about .about-title{
        font-size: 40px;
        text-transform: uppercase;
        background: #fff300;
        line-height: 1;
        padding: 10px 30px 10px 30px;
        height: auto;
        color: #000;
        text-align: center;
        letter-spacing: 0.015em;
        font-family: "Montserrat Bold",sans-serif;

        width: auto;


    }
    .ipf-about .about-text{

        height: auto;
        display: table;
        margin: 10px 0;
        margin-left: 40px;
        text-align: left;
        font-size: 1.5em;
        color: #333;
        word-spacing: 0.15em;
        line-height: 1.4;


    }
    .ipf-about > h1{
        margin-bottom: 20px;
    }
    .ipf-about > h2 {
        width: 60%;
        text-align: justify;
    }
    .about-ramani-huria{
        width: 400px;
        height: 300px;
        position: absolute;
        right: 0;
        top:50%;
        transform: translate(100%,-50%);
        padding: 20px;
        transition: all 0.6s ease-in-out;
    }
    .about-ramani-huria.is_visible{
        transform: translate(0,-50%);
    }
    .about-ramani-huria h1{
        font-family: "Montserrat Bold",sans-serif;
        font-size: 1em;
        color: white;
        margin-bottom: 10px;
    }
    .about-ramani-huria h2{
        font-size: 1em;
        color: white;
        text-align: justify;
    }
    .about-ramani-huria h2 a{
        text-decoration: underline;
    }
    
</style>


<section class="ipf-about">
    <h1><span class="about-title z-2">THE WORKSHOP</span></h1><br/>
    <h2><span class="about-text z-2">
            November 7th and 8th will mark the beginning of a new era for Dar Ramani Huria – a community mapping project that launched last year with a focus on improving Dar es Salaam’s flood resilience. 
            <br/> <br/>
            <span class="brand-blue">As articulated by Osiligi Lossai, Ward Officer of the largely unplanned settlement of Tandale, “Now we have a map and a map is something to start with. It is a roadmap for us to set up new plans, to organize ourselves while involving the community - and the community can have a sense of ownership over our new plan for development. Let’s not end here, because this is just the beginning.” Acting upon this advice, Dar Ramani Huria will be scaling up and expanding its horizons. </span>
            <br/> <br/>This workshop will address what happened, what we have learned, and where we are headed.
    </span></h2>
    <div class="about-ramani-huria brand-blue-bg z-2">
        <h1>ABOUT DAR RAMANI HURIA</h1>
        <h2>Dar Ramani Huria (Swahili for Dar Open Map) is a community-based mapping project that began in Dar es Salaam, Tanzania, training university students and local community members to create highly accurate maps of the most flood-prone areas of the city. As the maps took shape - their benefits multiplied and their potential magnified, now ready to serve as foundational tools for development within all socio-economic spheres.
            <br/> <br/>
            <a href="http://ramanihuria.org" target="_blank">read more</a>
        </h2>
    </div>
</section>


<script>

    jQuery(window).on('scroll', function() {

        var height = jQuery(window).scrollTop();

        var about_reached_top = $('.ipf-about');

        if (height > about_reached_top.offset().top-100) {
            $(".about-ramani-huria").addClass("is_visible");
        }



    });
</script>