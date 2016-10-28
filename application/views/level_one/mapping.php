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
        display: table;
        background-image: url(<?=base_url('assets/images/videobg.jpg')?>);
        background-size: cover;
        padding-right: 10%;
        padding-bottom: 50px;
    }
    .ipf-mapping:after{
        content: "";
        width: 100%;
        height: 100%;
        background-color: rgba(36, 57, 83, 0.95);
        position: absolute;
        top:0;
        left: 0;
    }
    .ipf-mapping:before{
        content: "";
        width: 40%;
        height: 100%;
        right: 0;
        top:0;
        position: absolute;
        background-image: url(<?=base_url('assets/images/workshopmap.png')?>);
        background-size: contain;
        background-position: top right;
        z-index: 2;
        background-repeat: no-repeat;
    }

    .mapping-text p{
        font-size: 0.9em;
        margin-bottom: 10px;
        text-align: justify;
        color: #3d4e4d;


    }
    .video-btn{
        width: 70px;
        height: 70px;
        border-radius: 50%;
        float: left;
        transform: translate(0,30px);
        background-position: center ;
        background-repeat: no-repeat;
        z-index: 4;
        cursor: pointer;
        font-size: 4.5em;
        text-align: center;
        background-image: url(<?=base_url('assets/images/playbutton.png')?>);
        background-size: contain;
    }

    .mapping-title{
        font-size: 2em;
        text-transform: uppercase;
        line-height: 1;
        height: auto;
        color: #000;
        text-align: left;
        font-family: "Montserrat Bold",sans-serif;
        width: auto;
        padding-left: 30px;

    }
    .mapping-text{
        width: 50%;
        height: auto;
        display: table;
        float: left;


    }
    .mapping-text >div{
        width: 100%;
        height: auto;
        display:inline-block;
        font-size: 1em;
        padding: 10px 10% 10px 30px;
        color: white;
       text-align: justify;
        vertical-align: top;
    }

    .mapping-text >div h1{
        text-align: left;
        font-size: 2.5em;
        width: 50%;
        float: left;
        font-family: "Lato Hairline",sans-serif;

    }
    .mapping-video-btn{
        float: left;
        height: auto;
        display: table;
        width: 35%;
    }
    .mapping-video-btn{
        color: white;
        font-size: 2em;
        text-transform: uppercase;
        padding-top: 70px;
    }
    .video-player-container{
        width: 100%;
        height: 100vh;
        position: fixed;
        z-index: 100;
        background-color: rgba(36, 57, 83, 0.98);
        top:0;
        left: 0;
        display: none;
    }
    .video-player-container iframe{
        width: 80%;
        height: 80%;
        margin: 5% auto;
        display: block;

    }
    .close-btn{
        position: absolute;
        font-size: 1.2em;
        padding: 10px;
        background-color: white;
        color: red;
        border-radius: 50%;
        right: 120px;
        top:50px;
        line-height: 0;
        z-index: 10;
        cursor: pointer;
    }
    @media only screen and (max-width: 780px) {
        .ipf-mapping:before{
            background-position: bottom right;
        }
        .ipf-mapping{
            padding-right: 20px;
        }
    }
    @media only screen and (max-width: 520px) {
        .ipf-mapping:before{
            display: none;
        }
        .ipf-mapping{
            padding-right: 20px;
        }
        .mapping-text{
            width: 100%;
        }
        .mapping-video-btn{
            width: 100%;
            padding: 0 8%;
        }
    }
</style>



<section class="ipf-mapping z-2" >
    <div style="width: 100%;height: 100%;padding-top: 50px" class="z-3">

    <div class="mapping-text">
        <h1 class="mapping-title brand-yellow" >Mapping for<br/> Flood Resilience.</h1>
        <div>Every year during the rainy season, Dar suffers from devastating floods that wipe out roads, take out houses, and result in many deaths and millions of dollars worth of damages. The damage these floods cause could be prevented with adequate planning, but much of the city is made up of unplanned and informal settlements.</div>
        <div>This is where Dar Ramani Huria comes in. By helping communities to map residential areas, roads, streams, floodplains, and other relevant features, the project will bring disaster prevention and response to areas that were previously off the map, literally. The project will also bring awareness of the need for flood prevention and risk reduction to the local level, while teaching participants valuable computer and mapping skills that they can put to use elsewhere.</div>
        <div>In the words of one ward official - “Now we have a map and a map is something to start with. We can identify different areas to restructure and improve. It is a roadmap for us to set up new plans, to organize ourselves while involving the community.”</div>

    </div>
    <div class="mapping-video-btn">
        <h1>Video on how Ramani Huria has successfully addressed flood resilience.</h1>
        <span class="video-btn"></span>
    </div>
    </div>

</section>
<div class="video-player-container">
    <span class="close-btn"><i class="fa fa-close"></i></span>
    <iframe  src="https://www.youtube.com/embed/Lz75aHQpmf8?rel=0" frameborder="0" allowfullscreen></iframe>
</div>


<script>
    $(".video-btn").on("click",function(){
        $(".video-player-container").show().addClass("animated fadeIn");
        $(".video-player-container iframe").addClass("animated zoomIn");

    });
    $(".close-btn").on("click",function(){
        $(".video-player-container").hide().removeClass("animated fadeIn");
        $(".video-player-container iframe").removeClass("animated zoomIn");

    });


</script>