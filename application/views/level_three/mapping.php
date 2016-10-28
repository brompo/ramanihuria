<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 14/10/2016
 * Time: 5:50 PM
 */?>


<style>

    .ipf-mapping{
        width: 100%;
        height: 700px;
        padding-bottom: 50px;
        display: table;
        background-image: url(<?=base_url('assets/images/videobg.jpg')?>);
        background-size: cover;
    }
    .ipf-mapping:after{
        content: "";
        width: 100%;
        height: 100%;
        background-color: rgba(28, 125, 184, 0.95);
        position: absolute;
        top:0;
        left: 0;
    }
    .mapping-title{
        position: absolute;
        top: 0;
        left: 0;
        width: 200px;
        height: 100%;
        padding: 50px 25px;
        font-size: 1.5em;
    }
   
    .mapping-text h1{
        font-size: 1.2em;
        margin-top: 50px;
        margin-bottom: 80px;
    }
    .mapping-text p{
        font-size: 0.9em;
        margin-bottom: 10px;
        text-align: justify;
        color: #3d4e4d;


    }
    .video-btn{
        width: 80px;
        height: 80px;
        border-radius: 50%;
        float: left;
        transform: translate(-60px,180px);
        background-position: center ;
        background-repeat: no-repeat;
        z-index: 4;
        cursor: pointer;
        font-size: 4.5em;
        text-align: center;
    }

    .ipf-mapping .mapping-title-container{
        margin-bottom: 20px;
        float: left;
        height: 100px;
        display: table;
        width: 100%;

    }

    .mapping-title{
        font-size: 40px;
        text-transform: uppercase;
        background: #fff;
        line-height: 1;
        padding: 10px 30px 10px 30px;
        height: auto;
        color: #000;
        text-align: center;
        letter-spacing: 0.015em;
        font-family: "Montserrat Bold",sans-serif;
        width: auto;

    }
    .mapping-text{
        width: 100%;
        height: auto;
        display: table;
        float: left;


    }
    .mapping-text >div{
        width: 33.333333%;
        height: auto;
        display:inline-block;
        font-size: 1.1em;
        padding: 10px 30px;
        color: white;
       text-align: justify;
        vertical-align: top;
    }
    .mapping-text >div:last-child{
        width: 66.66666%;
    }
    .mapping-text >div h1{
        text-align: left;
        font-size: 2.5em;
        width: 50%;
        float: left;
        font-family: "Lato Hairline",sans-serif;

    }
</style>



<section class="ipf-mapping z-2" >
    <div style="width: 100%;height: 100%;padding-top: 100px" class="z-3">
    <h1 class="mapping-title-container">
        <span class="mapping-title brand-blue">Mapping for Flood Resilience.</span>
    </h1>
    <div class="mapping-text">
        <div>Every year during the rainy season, Dar suffers from devastating floods that wipe out roads, take out houses, and result in many deaths and millions of dollars worth of damages. The damage these floods cause could be prevented with adequate planning, but much of the city is made up of unplanned and informal settlements.</div>
        <div>This is where Dar Ramani Huria comes in. By helping communities to map residential areas, roads, streams, floodplains, and other relevant features, the project will bring disaster prevention and response to areas that were previously off the map, literally. The project will also bring awareness of the need for flood prevention and risk reduction to the local level, while teaching participants valuable computer and mapping skills that they can put to use elsewhere.</div>
        <div>In the words of one ward official - “Now we have a map and a map is something to start with. We can identify different areas to restructure and improve. It is a roadmap for us to set up new plans, to organize ourselves while involving the community.”</div>
        <div>
            <h1>Video on how Ramani Huria has successfully addressed flood resilience.</h1>
            <span class="video-btn"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
        </div>
    </div>
    </div>









<!--    <div class="mapping-title">-->
<!--        <h1 class="brand-yellow">Mapping for Flood Resilience.</h1>-->
<!--    </div>-->
<!--    <div class="mapping-contents">-->
<!--        <div class="mapping-deco"></div>-->
<!--        <div class="mapping-text">-->
<!--            <h1>How Ramani Huria has successfully addressed flood resilience.</h1>-->
<!--            <p>Every year during the rainy season, Dar suffers from devastating floods that wipe out roads, take out houses, and result in many deaths and millions of dollars worth of damages. The damage these floods cause could be prevented with adequate planning, but much of the city is made up of unplanned and informal settlements.</p>-->
<!--            <p>This is where Dar Ramani Huria comes in. By helping communities to map residential areas, roads, streams, floodplains, and other relevant features, the project will bring disaster prevention and response to areas that were previously off the map, literally. The project will also bring awareness of the need for flood prevention and risk reduction to the local level, while teaching participants valuable computer and mapping skills that they can put to use elsewhere.</p>-->
<!--            <p>In the words of one ward official - “Now we have a map and a map is something to start with. We can identify different areas to restructure and improve. It is a roadmap for us to set up new plans, to organize ourselves while involving the community.” </p>-->
<!--        </div>-->
<!--        <div class="mapping-video">-->
<!--            <span class="video-btn"></span>-->
<!--        </div>-->
<!--    </div>-->

</section>