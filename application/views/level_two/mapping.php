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
        height: auto;
        padding-bottom: 50px;
        display: table;
        background-color: white;
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
    .mapping-contents{
        width: 100%;
        height: 100vh;

    }
    .mapping-deco{

        float: left;
        width: 20%;
        height: 100%;
     
    }
    .mapping-text{
        float: left;
        width: 40%;
        height: 100%;

        padding-left: 50px;
        padding-right: 80px;
    }
    .mapping-video{
        float: left;
        width: 40%;
        height: 100%;
        background-image: url("<?=base_url('assets/images/floodrelience.jpg')?>");
    }
    .mapping-video:after{
        content: "";
        width: 100%;
        height: 100%;
        background-color: rgba(94, 74, 15, 0.64);
        position: absolute;
        top:0;
        left: 0;
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
        position: absolute;
        left: 50%;
        top:50%;
        transform: translate(-50%,-50%);
        background-image: url("<?=base_url('assets/images/playyoutube.png')?>");
        background-position: center ;
        background-repeat: no-repeat;
        z-index: 4;
        cursor: pointer;
    }

</style>



<section class="ipf-mapping z-2" >
    
    <div class="mapping-title">
        <h1 class="brand-yellow">Mapping for Flood Resilience.</h1>
    </div>
    <div class="mapping-contents">
        <div class="mapping-deco"></div>
        <div class="mapping-text">
            <h1>How Ramani Huria has successfully addressed flood resilience.</h1>
            <p>Every year during the rainy season, Dar suffers from devastating floods that wipe out roads, take out houses, and result in many deaths and millions of dollars worth of damages. The damage these floods cause could be prevented with adequate planning, but much of the city is made up of unplanned and informal settlements.</p>
            <p>This is where Dar Ramani Huria comes in. By helping communities to map residential areas, roads, streams, floodplains, and other relevant features, the project will bring disaster prevention and response to areas that were previously off the map, literally. The project will also bring awareness of the need for flood prevention and risk reduction to the local level, while teaching participants valuable computer and mapping skills that they can put to use elsewhere.</p>
            <p>In the words of one ward official - “Now we have a map and a map is something to start with. We can identify different areas to restructure and improve. It is a roadmap for us to set up new plans, to organize ourselves while involving the community.” </p>
        </div>
        <div class="mapping-video">
            <span class="video-btn"></span>
        </div>
    </div>

</section>