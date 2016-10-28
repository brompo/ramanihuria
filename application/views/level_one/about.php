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
        background-color: #ece8de;
        padding-top: 80px;
        padding-bottom: 80px;
        padding-left: 30%;
        padding-right: 5%;
        overflow: hidden;
    }
    .ipf-about:after{
        content: "";
        width: 30%;
        height: 100%;
        top:0;
        left: 0;
        position: absolute;
        text-align: center;
        font-size: 40em;
        z-index: 2;
        opacity: 0.4;
        background-image: url("<?=base_url('assets/images/aboutworkshopminmapleft.png')?>");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center top;
        
    }

   .ipf-about >div{
       width: 50%;
       height: auto;
       min-height: 300px;
       display: table;
       float: left;
   }
   .about-left{
        border-right: solid 2px rgb(36,57,83);
       padding-right: 5%;

   }
   .about-right{
        padding-left: 5%;
   }
   .about-title{
       font-size: 1.3em;
       font-family: "Lato bold",sans-serif;
       line-height: 1.3;
       color: #243953;
       margin-bottom: 20px;

   }
    .about-text{
        display: block;
        text-align: justify;
    }
    .about-text a{
        text-decoration: underline;
    }

    @media only screen and (max-width: 780px) {
        .ipf-about:after{
            display: none;
        }
        .ipf-about{
            padding-left: 20px;
        }
        .ipf-about >div{

        }
    }
    @media only screen and (max-width: 520px) {
        .ipf-about >div{
            width: 100%;
        }
        .ipf-about{
            padding-left: 20px;
        }
        .about-left {
            margin-bottom: 50px;
            padding-bottom: 50px;
            border-right: none;
            border-bottom: solid 2px rgb(36, 57, 83);
        }
        .about-right{
            padding-left: 0;
        }

    }
</style>


<section class="ipf-about">
    <div class="about-left">
        <h1 class="about-title">
            THE WORKSHOP
        </h1>
        <h2><span class="about-text z-2">
            November 7th and 8th will mark the beginning of a new era for Dar Ramani Huria – a community mapping project that launched last year with a focus on improving Dar es Salaam’s flood resilience. 
            <br/> <br/>
            <span class="brand-blue">As articulated by Osiligi Lossai, Ward Officer of the largely unplanned settlement of Tandale, “Now we have a map and a map is something to start with. It is a roadmap for us to set up new plans, to organize ourselves while involving the community - and the community can have a sense of ownership over our new plan for development. Let’s not end here, because this is just the beginning.” Acting upon this advice, Dar Ramani Huria will be scaling up and expanding its horizons. </span>
            <br/> <br/>This workshop will address what happened, what we have learned, and where we are headed.
    </span></h2>
    </div>
    <div class="about-right">
        <h1 class="about-title">
            ABOUT US
        </h1>
        <h2 class="about-text">Dar Ramani Huria (Swahili for Dar Open Map) is a community-based mapping project that began in Dar es Salaam, Tanzania, training university students and local community members to create highly accurate maps of the most flood-prone areas of the city. As the maps took shape - their benefits multiplied and their potential magnified, now ready to serve as foundational tools for development within all socio-economic spheres.
            <br/> <br/>
            <a href="http://ramanihuria.org" target="_blank">read more</a>
        </h2>
    </div>
</section>


<script>

</script>