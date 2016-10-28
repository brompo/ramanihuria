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
     padding: 80px 0 80px;
     background-color: #f8f8f8;
     border-top: solid 1px #e1e1e1;
 }
 .ipf-speaker >h1{
     text-align: center;
     margin-bottom: 40px;
 }

 .ipf-speaker >h1 span{
     font-size: 40px;
     text-transform: uppercase;
     background: #2091d5;
     line-height: 1;
     padding: 10px 30px 10px 30px;
     height: auto;
     color: #fff;
     text-align: center;
     letter-spacing: 0.015em;
     font-family: "Montserrat Bold",sans-serif;
     width: auto;

 }
 .speakers-container{
     width: 100%;
     height: auto;
     display: table;
 }
 .speaker{
     width: 33.333333%;
     height: auto;
     min-height: 400px;
     display: table;
     float: left;
     overflow: hidden;
     padding: 40px;
 }
.speaker-image{
    width: 100%;
    height: 380px;
    background-size: cover;
    background-color: lightgrey;
}
.speaker-desc{
    position: absolute;
    top:40px;
    left: 40px;
    width: calc(100% - 80px);
    height: calc(100% - 80px);
    background: rgba(32, 145, 213, 0.9);
    text-align: center;
    padding-top: 30%;
    color: #fff;
    display: none;
    animation-duration: 0.4s;

}
.speaker:nth-child(even) .speaker-image{
    background-image: url('<?=base_url("assets/images/sapmle1.jpg")?>');

}
.speaker:nth-child(odd) .speaker-image{
    /*background-image: url('http://placehold.it/427x427?text=SPEAKER IMAGE 427 X 427');*/
}
 .speaker:nth-child(odd) .speaker-desc{
     display: none;
}
.speaker-desc .speaker-name{
    font-size: 2em;
    line-height: 2;
    text-transform: uppercase;
    letter-spacing: 0.15em;

}
.speaker-desc .speaker-title{
    font-size: 1.2em;
    text-transform: uppercase;
    letter-spacing: 0.15em;

}
.speaker-desc .speaker-social{
    font-size: 1.5em;
   padding-top: 50px;
    display: block;


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
</style>


<section class="ipf-speaker z-2">
    <h1><span>OUR SPEAKERS</span></h1>
    <div class="speakers-container">
        <?for($x=0;$x<6;$x++):?>
        <div class="speaker">
            <div class="speaker-desc z-2 animated">
                <span class="plus-icon">+</span>
                <h1 class="speaker-name">John Doe</h1>
                <h1 class="speaker-title">C.E.O @<a href="http://ramanihuria.org/" target="_blank">Ramani Huria</a></h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                </span>
            </div>
            <div class="speaker-image">

            </div>


        </div>
        <?endfor;?>
    </div>


</section>

<script>
    $(document).ready(function(){
        $(".speaker").hover(function(){

            $(this).find(".speaker-desc").css({display:"block"}).addClass("flipInX");
        }, function(){
            $(this).find(".speaker-desc").css({display:"none"}).removeClass("flipInX");
        });
    });
</script>