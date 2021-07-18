<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scarlet
 */

get_header();
?>

	<!-- START BLOK MAIN WITH PHOTO!-->

        <div class="container-fluid ihui "> 
            <div class="container ihui">
                <div class=" rekt453 ckRnNp ">
                    <div class="name_1">
                        <div class="name">
                            <h1 class="fontname  _anim-items _anim-no-hide "><?php the_field('hey');?></h1>
                            <p class="fonpartfolio _anim-items _anim-no-hide "><?php the_field('name');?></p>
                        </div>
                        <div class="social-icons">
                            <p class="fontname_2"><?php the_field('text_1');?></p>
                        </div>
                    </div> 
                </div> 
                <div class="PreFooterstyle__PreFooterColumn-kyt7q0-2 PreFooterstyle__ImageColumn-kyt7q0-3 ftTJUg iuaWVW">
                    <div class="figure_one">   
                        <img class="frote " src="<?php the_field('main_image');?>">
                    </div>
                </div>
            </div><!-- END ROW ROV!-->
        </div><!-- END container-fluid!-->
        <!-- END BLOK MAIN WITH PHOTO!-->

        <!-- Start BLOK text about me!-->

        <div id="aboutme" class="d-flex justify-content-center heading _anim-items _anim-no-hide">About me</div>

        <div class="container abutme_blok">
            <div class="flex_2">

                <div class="photo_2   _anim-items _anim-no-hide ">           
                    <div class="figure ">           
                        <img class="img" src="<?php the_field('one_blok_image');?>">

                    </div>
                </div>
                <div class="textpo  _anim-items _anim-no-hide">  
                    <p><?php the_field('text_about_me');?>
                    </p>  
                </div>
            </div>
            <div class="flex_3">
                <div class="textp">
                    <h4 class="skills _anim-items _anim-no-hide" ><?php the_field('language_sheading');?></h4>
                    <div class="skills_1 _anim-items _anim-no-hide">
                        <p>
                           <?php the_field('languages');?>
                        </p>  
                    </div>
                </div>  
                <div class="photo_3  _anim-items _anim-no-hide">  
                    <div class="figure_1">   
                        <img src="<?php the_field('two_blok_image');?>"> 
                    </div>
                </div>
            </div> 

            <div class="flex_4">
                <div class="photo_3  _anim-items _anim-no-hide">
                    <div class="figure ">   
                        <img src="https://www.film.ru/sites/default/files/images/%D1%81%D0%BA%D0%B0%D1%80%D0%BB%D0%B5%D1%82%D1%82.jpg">
                    </div>
                </div>
                <div class="textp">  
                    <h4>Languages</h4>
                    <p>
                        Russian  — colloquial<br>
                        English  — native<br>
                        Ukrainian  — colloquial<br>
                    </p>  
                </div>     
            </div>
            <div class="flex_5">
                <div class="photo_4 _anim-items _anim-no-hide">
                    <div class="figure_2">   
                        <img src="<?php the_field('three_blok_image');?>">
                    </div>
                </div>
                <div class="textpo_1 _anim-items _anim-no-hide">
                    <h4 class="skills _anim-items _anim-no-hide"><?php the_field('skills_heading');?></h4>
                    <div class="skills_1 _anim-items _anim-no-hide">
                        <p><?php the_field('skateboard');?></p> 
                        <p><?php the_field('car_driving');?></p> 
                        <p><?php the_field('snowboard');?></p> 
                        <p><?php the_field('hip-hop');?></p> 
                        <p><?php the_field('roller-skates');?></p> 
                        <p><?php the_field('surfing');?></p> 
                        <p><?php the_field('skiing');?></p> 
                        <p><?php the_field('skates');?></p> 
                    </div>
                </div>
            </div>
        </div>

        <!-- END BLOK text about me!-->

        <!-- START BLOK TEXT VIDEO!-->

        <div id="video" class="d-flex justify-content-center heading_thee _anim-items _anim-no-hide">Video</div>


        <div class="container video_top">
            <div class="dflex">
                <div class="text _anim-items _anim-no-hide"><h4 class="pad_1"><?php the_field('video_headink_one');?></h4> 
                    <p class="riht">
                       <?php the_field('description_video_one');?>
						
                    <p class="pad"> <?php the_field('director_film_one');?></p>
                    </p>
                </div>
                <div class="ratio video  _anim-items _anim-no-hide">
                    <iframe src="<?php the_field('video_media');?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="dflex">
                <div class="text  _anim-items _anim-no-hide">
                    <h4 class="pad_1"><?php the_field('video_headink_two');?></h4>
                    <p class="riht">
                        <?php the_field('description_video_two');?>
                    <p class="pad"><?php the_field('director_film_two');?></p>
                    </p>
                </div>
                <div class="ratio video  _anim-items _anim-no-hide">
                    <iframe  src="https://www.youtube.com/embed/M44ZHmPoLSU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="dflex_1">
                <div class="text_1  _anim-items _anim-no-hide">
                    <h4 class="pad_1"><?php the_field('video_headink_thee');?></h4>
                    <p class="riht">
                      <?php the_field('description_video_thee');?>
                    <p class="pad"> <?php the_field('director_film_thee');?></p>
                    </p>    
                </div>
                <div class="ratio video_1  _anim-items _anim-no-hide">
                    <iframe src="https://www.youtube.com/embed/MVt32qoyhi0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>          

        <!-- END BLOK TEXT VIDEO!-->


        <!-- START GALERRY PHOTO!-->
        <div id="photos" class="d-flex justify-content-center heading_two _anim-items _anim-no-hide">Photos</div>
        <div class="container gallery_top">
            <div class="gallery">
                <figure class="gallery__item gallery__item--3 _anim-items _anim-no-hide">
                    <img src=" <?php the_field('photos_1');?>" alt="Gallery image 3" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4  _anim-items _anim-no-hide">
                    <img src="<?php the_field('photos_2');?>" alt="Gallery image 4" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5  _anim-items _anim-no-hide">
                    <img src="<?php the_field('photos_3');?>" alt="Gallery image 5" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6  _anim-items _anim-no-hide">
                    <img src="<?php the_field('photos_4');?>" alt="Gallery image 6" class="gallery__img">
                </figure>

            </div>
        </div>
        <!-- END GALERRY PHOTO!-->

        <div class="container container-top">
            <div class="flex_flex gallery">      
                <figure class=" content gallery__item gallery__item--12 _anim-items _anim-no-hide">
					<img src="<?php the_field('photos_5');?>" alt="Gallery image 3" class="gallery__img">
                </figure>
                <figure class=" content gallery__item gallery__item--13  _anim-items _anim-no-hide">
                    <img src="<?php the_field('photos_6');?>" alt="Gallery image 4" class="gallery__img">
                </figure>
                <figure class=" content gallery__item gallery__item--14  _anim-items _anim-no-hide">
                    <img src="<?php the_field('photos_7');?>" alt="Gallery image 5" class="gallery__img">
                </figure>
                <figure class=" content gallery__item gallery__item--15  _anim-items _anim-no-hide">
                    <img src="<?php the_field('photos_8');?>" alt="Gallery image 6" class="gallery__img">
                </figure>
                <figure class=" content gallery__item gallery__item--16  _anim-items _anim-no-hide">
                    <img src="<?php the_field('photos_9');?>" alt="Gallery image 6" class="gallery__img">
                </figure>
                <figure class=" content gallery__item gallery__item--18  _anim-items _anim-no-hide">
                    <img src="<?php the_field('photos_10');?>" alt="Gallery image 6" class="gallery__img">
                </figure>
                
                <figure class=" content gallery__item gallery__item--17  _anim-items _anim-no-hide">
                    <img src="<?php the_field('photos_11');?>" alt="Gallery image 6" class="gallery__img">
                </figure>         
            </div>

            <a href="#" class="loadMore" id="loadMore"><?php the_field('load_more');?></a> 
        </div>
<?php
get_footer();
