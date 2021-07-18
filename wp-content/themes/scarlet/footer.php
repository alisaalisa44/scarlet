<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scarlet
 */

?>

	<!-- START FOOTER!-->
        <div  id="contact" class="footer container  _anim-items _anim-no-hide"> 
            <div class="fot d-flex">      
                <div class="colum-footer" >
                    <h4 class="pading">Navigation</h4>
                    <p><a href="#aboutme" class="hover"><?php the_field('footer_about_me');?></a></p>
                    <p><a href="#photos" class="hover"><?php the_field('footer_photos');?></a></p>
                    <p><a href="#video" class="hover"><?php the_field('foorter_video');?></a></p>
                </div>
                <div class="colum-footer">
                    <h4 class="pading">Contacts</h4> 
                    <p><svg width="14" height="16" xmlns="http://www.w3.org/2000/svg" alt="Person Icon"><g stroke="#111" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M3.318 9C1.59404106 9.83615816.49952632 11.5839638.49999985 13.5c0 0 2 2 6.5 2 4.49999995 0 6.49999995-2 6.49999995-2C13.5002879 11.5837377 12.4053481 9.83587359 10.681 9M10.5 4c0 1.933-1.567 4.5-3.5 4.5S3.5 5.933 3.5 4C3.5 2.06700338 5.06700338.5 7 .5s3.5 1.56700338 3.5 3.5z"></path></g></svg><?php the_field('user');?></p>
                    <p><svg width="16" height="15" xmlns="http://www.w3.org/2000/svg" alt="Telephone Icon"><path d="M12 9l-2 2-6-6 2-2-3-3-2 2c0 6.627 5.373 12 12 12l2-2-3-3z" stroke="#111" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg><?php the_field('phone');?></p>
                    <p><svg width="16" height="14" xmlns="http://www.w3.org/2000/svg" alt="Email Icon"><g stroke="#111" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 13.5h-13c-.552 0-1-.448-1-1v-11c0-.552.448-1 1-1h13c.552 0 1 .448 1 1v11c0 .552-.448 1-1 1z"></path> <polyline points="2.5 3.5 8 8 13.5 3.5"></polyline></g></svg><?php the_field('email');?></p>   
                </div>
                <div class="colum-footer_3">              
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5 6c0 4.5-5.5 9.5-5.5 9.5s-5.5-5-5.5-9.5a5.5 5.5 0 0111 0z"></path> <circle cx="8" cy="6" r="2.5" data-color="color-2"></circle></g></svg>
                       <?php the_field('current_city');?></p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><path d="M15 6.438c.318-.574.5-1.235.5-1.938 0-2.209-1.791-4-4-4-1.263 0-2.389.585-3.123 1.5" data-color="color-2"></path> <path d="M12 7.5c-.238 0-.47.025-.694.07C10.675 5.227 8.542 3.5 6 3.5 2.962 3.5.5 5.962.5 9s2.462 5.5 5.5 5.5h6c1.933 0 3.5-1.567 3.5-3.5S13.933 7.5 12 7.5z"></path></g></svg>
                       <?php the_field('clouds');?> </p> 
                </div>
            </div>
            <div class="d-flex icons">
                <p><a href="#"><i class="fab fa-instagram"></i></a></p>
                <p><a href="#"><i class="fab fa-google-plus-g"></i></a></p>
            </div>
            <div  class="d-flex justify-content-center font"> <?php the_field('copyright');?></div>
            <div  class="d-flex justify-content-center font__2"> Developed by :
                <a class="link" href="#">Undina </a></div>
        </div>



        <!-- END FOOTER!-->

         <script src="<?php echo get_template_directory_uri();?>/vendor/jquery.js"></script>
         <script src="<?php echo get_template_directory_uri();?>/dist/lity.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/acterport.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body>
</html>
