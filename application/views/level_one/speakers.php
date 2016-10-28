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
     /*padding: 80px 10% 0;*/
     padding-top:10%;
     padding-right:50px;
     padding-left:50px;
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
   width: calc(25% - 5px);
   /*width:25px;*/
       height: auto;
       max-height: 300px;
       display: table;
       float: left;
       overflow: hidden;
       margin-right: 5px;
       margin-bottom: 5px;

 }
.speaker-image{
    width: 100%;
    height: 300px;
    background-size: cover;
    background-color: lightgrey;
}
.image_speaker{
    width:100%;
    height:inherit;
}
.speaker-desc{
    position: absolute;
    top:0;
    left: 0;
    width: calc(100% );
    height: calc(100% );
    background-color: rgba(36, 57, 83, 0.8);
    text-align: center;
    padding-top: 140px;
    padding-left: 20px;
    padding-right: 20px;

    color: #fff;
    display: none;
    animation-duration: 0.4s;

}
.speaker .speaker-image{
  
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
    padding-top: 10px;
    display: block;
    text-align: left;
}
.speaker-social
{
    float:right;
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

@media only screen and (max-width: 1050px)
{
    .speaker{
         width: calc(33.3% - 5px);
     }
     .ipf-speaker{
         padding: 0px 20px 0;
     }
}


 @media only screen and (max-width: 780px) {
     .ipf-speaker >h1:after,.ipf-speaker >h1:before{
         display: none;
     }
     .speaker{
         width: calc(50% - 5px);
     }
     .ipf-speaker{
         padding: 0px 20px 0;
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
         padding: 0px 20px 0;
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
       <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Bella Bird</h1>
                <h1 class="speaker-title"><p>Country Director for the World Bank in Tanzania, Burundi, Malawi, and Somalia.</p></br>
<p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
            <img class="image_speaker" src="assets/images/speakers/bella.jpg">

            </div>
         </div> <!-- End of Speaker Div -->
        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Dr Hassan Mshinda</h1>
                <h1 class="speaker-title">
                <p>Director General of Tanzania Commission for Science and Technology in Tanzania
                </p></br>
                <p></p> 
                </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/mshinda.png">
            </div>
        </div><!-- End of Speaker Div -->
        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Innocent Maholi</h1>
                <h1 class="speaker-title">
                <p>Mapping Supervisor, Tanzania Humanitarian OpenStreetMap Team 
                </p></br>
                <p>
                </p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/maholi.jpg">
            </div>
        </div><!-- End of Speaker Div -->

         <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Julie Arrighi</h1>
                <h1 class="speaker-title"><p>Resilience Advisor for American Red Cross in Africa</p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/arrighi.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Nyambiri Kimacha</h1>
                <h1 class="speaker-title"><p></p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/kimacha.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Juliana Letara</h1>
                <h1 class="speaker-title"><p>Head of Urban Planning Department for Kinondoni Municipal Council </p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/letara.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Deogratias Minja</h1>
                <h1 class="speaker-title"><p>Community Mapping Analyst, World Bank  </p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/minja.jpg">
            </div>
        </div><!-- End of Speaker Div -->
        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Osiligi Lossai</h1>
                <h1 class="speaker-title"><p>Ward Executive Officer of Tandale </p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/lossai.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Charles Msangi</h1>
                <h1 class="speaker-title"><p>Disaster Focal Point, Disaster Management Department </p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/msangi.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Elizabeth Mrema</h1>
                <h1 class="speaker-title"><p>Senior Mapping Officer, Tanzanian Ministry of Lands </p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/mrema.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Denise McKenzie</h1>
                <h1 class="speaker-title"><p>Executive Director Communications and Outreach for the Open Geospatial Consortium  </p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/mckenzie.png">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Edward Anderson </h1>
                <h1 class="speaker-title"><p>Senior Disaster Risk Management Specialist at the World Bank</p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/anderson.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Freddy Mbuya</h1>
                <h1 class="speaker-title"><p>Consultant for World Bank - Tanzania Open Data Initiative (TODI)  </p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/mbuya.png">
            </div>
        </div><!-- End of Speaker Div -->
        
        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Devotha Laurent</h1>
                <h1 class="speaker-title"><p>Consultant for World Bank - Tanzania Open Data Initiative (TODI)  </p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/laurent.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Primoz Kovacic</h1>
                <h1 class="speaker-title"><p>Co-Founder & Director of Operations, Spatial Collective</p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/kovacic.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Professor Joseph Mayunga</h1>
                <h1 class="speaker-title"><p>Professor of Disaster Risk Management, Ardhi University</p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/mayunga.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Brigadier General Mbazi Msuya</h1>
                <h1 class="speaker-title"><p>Director of Disaster Management Department Tanzania</p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/msuya.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Rhinnan Price</h1>
                <h1 class="speaker-title"><p>Senior Manager, Global Development Program, Digital Globe</p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/price.jpg">
            </div>
        </div><!-- End of Speaker Div -->


        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Dr. Mohammed Juma</h1>
                <h1 class="speaker-title"><p>Director of Urban Planning, Zanzibar Commission for Lands</p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/juma.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Meenal Pore</h1>
                <h1 class="speaker-title"><p>Research Lead, IBM Africa</p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/pore.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">Steve Mather</h1>
                <h1 class="speaker-title"><p>City of Portland</p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/mather.jpg">
            </div>
        </div><!-- End of Speaker Div -->

        <div class="speaker"> <!-- Start of Speakers Div -->
            <div class="speaker-desc z-2 animated">

                <h1 class="speaker-name">David Rovira</h1>
                <h1 class="speaker-title"><p>Sensefly </p></br>
                <p></p> </h1>
                <span class="speaker-social">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square"></i></a>
                </span>
            </div>
            <div class="speaker-image">
                <img class="image_speaker" src="assets/images/speakers/rovira.jpg">
            </div>
        </div><!-- End of Speaker Div -->

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