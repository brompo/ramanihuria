<?php
/**
 * Created by PhpStorm.
 * User: graysonjulius
 * Date: 17/10/2016
 * Time: 9:26 AM
 */?>



<style>
 .ipf-speaker{
     width: 100%;
     height: auto;
     display: table;
     padding: 80px 10% 0;
     background-color: #ece8de;

 }
 .ipf-speaker >h1{
     text-align: center;
     margin-bottom: 50px;
     z-index: 2;
     font-family: "Montserrat Bold",sans-serif;
     font-size: 1.5em;
     text-transform: uppercase;
     color: #243953;
 }
 .ipf-speaker >h1:after{
     content: "";
     left: 8%;
     top:14px;
     position: absolute;
     height: 3px;
     width: 30%;
     background-color:#243953; ;
 }
 .ipf-speaker >h1:before{
     content: "";
     right: 8%;
     top:14px;
     position: absolute;
     height: 3px;
     width: 30%;
     background-color:#f2c71a; ;
 }
 .speakers-container{
     width: 100%;
     height: auto;
     display: table;
 }
 .speaker{
     width: calc(33.33333% - 20px);
     height: auto;
     min-height: 300px;
     display: table;
     float: left;
     overflow: hidden;
     margin-right: 20px;
     margin-bottom: 20px;

 }
.speaker-image{
    width: 100%;
    height: 380px;
    background-size: cover;
    background-color: lightgrey;
}
.speaker-desc{
    position: absolute;
    top:0;
    left: 0;
    width: calc(100% );
    height: calc(100% );
    background-color: rgba(36, 57, 83, 0.8);
    text-align: center;
    padding-top: 100px;
    padding-left: 20px;
    padding-right: 20px;

    color: #fff;
    display: none;
    animation-duration: 0.4s;

}
.speaker .speaker-image{
    background-image: url('<?=base_url("assets/images/sapmle1.jpg")?>');

}
.speaker:nth-child(odd) .speaker-image{
    /*background-image: url('http://placehold.it/427x427?text=SPEAKER IMAGE 427 X 427');*/
}
 .speaker:nth-child(odd) .speaker-desc{
     display: none;
}
.speaker-desc .speaker-name{
    font-size: 1.2em;
    line-height: 2;
    text-transform: uppercase;
    font-family: "Lato bold", sans-serif;
    border-bottom: solid 2px white;
    text-align: left;

}
.speaker-desc .speaker-title{
    font-size: 1em;
    text-align: left;
    padding-top: 10px;

}
.speaker-desc .speaker-social{
    font-size: 1.5em;
    padding-top: 50px;
    display: block;
    text-align: left;


}
 .speaker-desc .speaker-social a i{
     transition: all 0.4s ease-in;
     color: white!important;
 }
.speaker-desc .speaker-social .fa-linkedin:hover{
    color:#007bb6; ;
}
.plus-icon{
    position: absolute;
    right: 20px;
    top:0;
    color: white;
    font-size: 3.5em;
}
 @media only screen and (max-width: 780px) {
     .ipf-speaker >h1:after,.ipf-speaker >h1:before{
         display: none;
     }
     .speaker{
         width: calc(50% - 20px);
     }
     .ipf-speaker{
         padding: 80px 20px 0;
     }
 }

 @media only screen and (max-width: 520px) {
     .ipf-speaker >h1:after,.ipf-speaker >h1:before{
         display: none;
     }
     .speaker{
         width: 100%;
     }
     .ipf-speaker{
         padding: 80px 20px 0;
     }
     .speaker{
         margin-right: 0;
         background-position: center;
     }
 }
</style>


<section class="ipf-speaker z-2">
    <h1>OUR SPEAKERS</h1>
    <div class="speakers-container">
        <?for($x=0;$x<6;$x++){?>
        <div class="speaker">
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Mr.Peter Msechu</h1>
                <h1 class="speaker-title">Every year during the rainy season, Dar suffers from devastating floods that wipe out roads, take out houses, and result in many </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">

            </div>


        </div>
        <?}?>
    </div>


</section>

<script>
    $(document).ready(function(){
        $(".speaker").hover(function(){

            $(this).find(".speaker-desc").css({display:"block"}).addClass("fadeIn");
        }, function(){
            $(this).find(".speaker-desc").css({display:"none"}).removeClass("fadeIn");
        });
    });
</script>