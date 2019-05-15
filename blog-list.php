<?php
/*
 * Template Name: Community Template
 */


get_header();
?>

<div class="container designer_template_container">
     <?php

                $editorial_posts = get_posts( array(
    'category' => 63
) );
if(!empty($editorial_posts)){
//                
//            echo '<pre>';
//            print_r($editorial_posts);
                ?>
    <h3 class="text-center">Editorial</h3><a class="pull-right" href="#">View all</a>
   
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide1" data-ride="carousel">
                
                
       <?php /* <div class="editorial-img">
            <?php $i=0; foreach ( $editorial_posts as $post1 ) : setup_postdata( $post1 );
                    $f_image = wp_get_attachment_url( get_post_thumbnail_id($post1->ID, 'featured_image'));
                    
                    
                    ?>
            <?php//endforeach; ?>
            <div class="editorial-section-img">
                <img class="img-responsive" src="<?php echo $f_image; ?>" />
            </div>
            <h3 class="text-center"><?php echo $post1->post_title; ?> </h3>
            <p class="text-center"><?php the_content(); ?></p>
            
            <?php $i++; endforeach; wp_reset_postdata(); ?>
        </div>  */?>
               
      <?php /*          <ol class="carousel-indicators">
                    <?php $i=0; foreach ( $editorial_posts as $post1 ) :?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i=='0')?:'active'; ?>"></li>
                    <?php $i++; endforeach; ?>
                   
                </ol>
                <div class="carousel-inner">
                    <?php $j=0; foreach ( $editorial_posts as $post2 ) : setup_postdata( $post2 );
                    $f_image = wp_get_attachment_url( get_post_thumbnail_id($post2->ID, 'featured_image'));
                    
                    
                    ?>
                    <div class="item <?php echo ($j=='0')?:'active'; ?>">
                        <img src="<?php echo $f_image; ?>" alt="<?php the_title(); ?>">
                        <div class="carousel-caption">
                            <h3><?php echo $post2->post_title; ?></h3>
                            <p>
                                <?php the_content(); ?></p>
                        </div>
                    </div>
                    <?php $j++; endforeach; wp_reset_postdata(); ?>
                    
                    
                    
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>  */?>
            </div>

        </div>
    </div>
    <?php 
           echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="1" category="editorial" scroll="false"]');
    ?>
    
<?php } ?>
<div id="push">
</div>

    
    <div class="interview-section">
        
         <?php

                $interview_posts = get_posts( array(
    'category' => 58
) );
if(!empty($interview_posts)){ 
                
//echo '<pre>';
//print_r($interview_posts);
                ?>
        
        
        <div class="row">
            <div class="col-md-12">
        <h3 class="text-center">Interview and Articles</h3>
        
        <div class="col-md-6">
            <div class="inter-img">
                <?php $j=0; foreach ( $interview_posts as $post2 ) : setup_postdata( $post2 );
                        $f_image1 = wp_get_attachment_url( get_post_thumbnail_id($post2->ID, 'featured_image'));
                 //$video_posts_img = wp_get_attachment_url( get_post_thumbnail_id($post3->ID, 'featured_image'));
                        
//                         $front_display=get_field('front_display',$post3->ID); 
//                         $f_img=false;
//                        $video_format=false;
//                       
//                        if($front_display=='featured_image'){
//                            $f_img=true;
//                        }else{
//                            $video_format=true;
//                        }
//                        
                        


                        ?>
                        <?php//endforeach; ?>
                    <div class="interview-section-img">
                        
                        <img class="img-responsive" src="<?php echo $f_image1; ?>" />
                    </div>
                        <h3 class="text-center"><?php echo $post2->post_title; ?> </h3>
                            <p class="text-center"><?php the_content(); ?></p>
            </div>
        </div>
        <?php $j++; endforeach; wp_reset_postdata(); ?>
          <?php 
          // echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="2" category="interviews-and-articles"]');
    ?>
        
        <?php if ( have_posts() ) : ?>
 
    <!-- Add the pagination functions here. -->
 
    <!-- Start of the main loop. -->
    <?php while ( have_posts() ) : the_post(); ?>
 
    <!-- the rest of your theme's main loop -->
 
    <?php endwhile; ?>
    <!-- End of the main loop -->
 
    <!-- Add the pagination functions here. -->
 
 
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
 
 
 
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
 
 
<?php else : ?>
 
<?php _e('Sorry, no posts matched your criteria.'); ?>
 
<?php endif; ?>
        
<!--        <div class="col-md-6">
        <div class="inter-img">
            <div class="interview-section-img">
                <img class="img-responsive" src="http://ingits.com/verv/wp-content/uploads/2017/07/layer-20.png" />
            </div>
            <h3 class="text-center">Gong</h3>
            <p class="text-center">Our conversations with the designers behind</p>
        </div>
        </div>-->
        
        
            
            </div>
        </div>
        
        <?php } ?>
        
        
       
        
    </div>
   
    <div class="clearfix"></div>
    
    
    <div class=" container video-section">
        <?php

                $video_posts = get_posts( array(
    'category' => 60
) );

   if(!empty($video_posts)){      
       
     
       ?>
            <h3 class="text-center">Behind The Scenes </h3>
            <?php
            
            $k=0; foreach ( $video_posts as $post3 ) : setup_postdata( $post3 );
                        $video_posts_img = wp_get_attachment_url( get_post_thumbnail_id($post3->ID, 'featured_image'));
                        $front_display=get_field('front_display',$post3->ID); 
                        $f_img=false;
                        $video_format=false;
                       
                        if($front_display=='featured_image'){
                            $f_img=true;
                        }else{
                            $video_format=true;
                        }
            ?>
            
            <div class="col-md-6">
                <?php if($f_img){?>
                    <div class="image-inner-data">
                    <img src='<?php echo $video_posts_img; ?>' alt='<?php echo $post3->post_title; ?>' />
                
                 </div>
                    <h3 class="text-center"><?php echo $post3->post_title; ?></h3>
               <?php  }
                elseif ($video_format) {
                
            
                ?>
                <div class="vidoe-inner-data">
                    <?php $video_data=get_field('post_video',$post3->ID); 
                     $video_img=get_field('video_image',$post3->ID); 
                    if(isset($video_img['url'])){
                     if(!empty($video_img['url'])){
                         $video_img=$video_img['url'];
                     }
                 }
                   else{
                       $video_img=$video_posts_img;
                   }
                    ?>
                   
                <a class="mpopup_iframe" href="<?php echo  $video_data['url']; ?>"><img class="img-responsive" src="<?php echo $video_img; ?>" alt="<?php echo $post3->post_title; ?>" /></a>
                 </div>
                     <h3 class="text-center"><?php echo $post3->post_title; ?></h3>
                <?php } ?>
            </div>
           <?php $k++;     endforeach; wp_reset_postdata();?>
        
        
    <?php } ?>
    </div>
    
    
    
    
   
    
    
     
    
    
        <?php/* while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

			

<?php the_post_thumbnail(); ?>
           
      <div class="blog-data">
          <div class="comm-post">
         <?php
$lastposts = get_posts( array(
    'posts_per_page' => 3
) );
 
if ( $lastposts ) {
    foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    <?php
    endforeach; 
    wp_reset_postdata();
}
*/?>
<!--          </div>-->
      </div>
         
            
            
				

<!--</div>-->






<?php get_footer(); ?>
