<?php get_header(); ?>

<div class="container">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet"> 

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();

    $banner_background_img = get_field('banner_background_img');
    $banner_register_link = get_field ('banner_register_link');
    $section3_background_img = get_field ('section3_background_img');
    $section4_background_img = get_field ('section4_background_img');
    $section5_background_img1 = get_field ('section5_background_img1');
    $section5_background_img2 = get_field ('section5_background_img2');
    $section5_background_img3 = get_field ('section5_background_img3');
    $section5_background_img4 = get_field ('section5_background_img4');
    $section5_background_img5 = get_field ('section5_background_img5');
    $section5_background_img6 = get_field ('section5_background_img6');
    $section6_background_img = get_field ('section6_background_img');
    $section7_video = get_field('section7_video');
  }
}
?>

<!-- 1er PARTIE -->
  <section class="section1-banner" style="background-image: url(<?php echo $banner_background_img['url']; ?>)">
    <div class="section1-banner-content">
      <p class="section1-banner-baseline"><?php the_field('banniere_baseline') ?> </p>
      <p class="section1-banner-title-brown"><?php the_field('titre_marron') ?> </p>
      <p class="section1-banner-title-green"><?php the_field('titre_vert') ?> </p>
       <p class="section-banner-write-link"><?php the_field('banner_write_link') ?> </p
      <p class="section-banner-link"><?php echo $banner_link['title']; ?> </p>
    </div>
</section>
    
    
<!-- 2ème PARTIE -->
    <section class="section2-conference">
      <div class="section2-conference-content">
        <p class="section2-titre"><?php the_field("conference_titre") ?></p>
        <p class="section2-barre"><?php the_field("barre") ?></p>
        <p class="section2-conference-content"><?php the_field("conference_contenu") ?></p> 
      </div> 
    </section>

<!-- 3ème PARTIE -->
    <section class="section3-img" style="background-image: url(<?php echo $section3_background_img['url']; ?>)">
        </section>

<!-- 4ème PARTIE -->
    
      <div class="section4-content">
        <p class="section4-titre"><?php the_field("section4_titre") ?></p>
        <p class="section4-barre"><?php the_field("section4_barre") ?></p>
        <p class="section4-titre1"><?php the_field("section4_titre1") ?></p>
        <p class="section4-titre2"><?php the_field("section4_titre2") ?></p>
        <p class="section4-programme-1"><?php the_field("section4_programme_1") ?></p>
        <p class="section4-programme-2"><?php the_field("section4_programme_2") ?></p>
        <p class="section4-programme-3"><?php the_field("section4_programme_3") ?></p>
        <p class="section4-programme-4"><?php the_field("section4_programme_4") ?></p>
        <p class="section4-programme-5"><?php the_field("section4_programme_5") ?></p>
        <p class="section4-programme-6"><?php the_field("section4_programme_6") ?></p>
        <p class="section4-programme-7"><?php the_field("section4_programme_7") ?></p>
        <p class="section4-programme-8"><?php the_field("section4_programme_8") ?></p>
        <p class="section4-programme-9"><?php the_field("section4_programme_9") ?></p>
        <p class="section4-banner-write-link"><?php the_field('banner_write_link') ?> </p
        <p class="section-banner-link"><?php echo $banner_link['title']; ?> </p>
   <section class="section4-img" style="background-image: url(<?php echo $section4_background_img['url']; ?>)">
      </div> 
    </section> 
</div> 

<!-- 5ème PARTIE -->
    <section class="section5-content">
        <p class="section5-titre"><?php the_field("section5_titre") ?></p>
        <p class="section5-barre"><?php the_field("barre") ?></p>
        <p class="section5-descriptif"><?php the_field("section5_descriptif") ?></p>

         <section class="section5-content1">
            <section class="section5-img1" style="background-image: url(<?php echo $section5_background_img1['url']; ?>)">
         <p class="section5-bla1-bla1"><?php the_field("section5_bla1_bla1") ?></p>
         <p class="section5-bla1-bla2"><?php the_field("section5_bla1_bla2") ?></p>
         <p class="section5-banner-write-link1"><?php the_field('banner_write_link1') ?> </p
             </section>
        </section>
        
        <section class="section5-content2">
            <section class="section5-img2" style="background-image: url(<?php echo $section5_background_img2['url']; ?>)">
         <p class="section5-bla2-bla1"><?php the_field("section5_bla1_bla1") ?></p>
         <p class="section5-bla2-bla2"><?php the_field("section5_bla1_bla2") ?></p>
         <p class="section5-banner-write-link2"><?php the_field('banner_write_link2') ?> </p
            </section>
        </section>
            
          <section class="section5-content3">
            <section class="section5-img3" style="background-image: url(<?php echo $section5_background_img3['url']; ?>)">
         <p class="section5-bla3-bla1"><?php the_field("section5_bla3_bla1") ?></p>
         <p class="section5-bla3-bla2"><?php the_field("section5_bla3_bla2") ?></p>
         <p class="section5-banner-write-link3"><?php the_field('banner_write_link3') ?> </p
            </section> 
        </section>
              
                      
      <section class="section5-content4">
        <section class="section5-img4" style="background-image: url(<?php echo $section5_background_img4['url']; ?>)">
        <p class="section5-bla4-bla1"><?php the_field("section5_bla4_bla1") ?></p>
         <p class="section5-bla4-bla2"><?php the_field("section5_bla4_bla2") ?></p>
         <p class="section5-banner-write-link4"><?php the_field('banner_write_link4') ?> </p
            </section> 
        </section>
          
     <section class="section5-content5">
        <section class="section5-img5" style="background-image: url(<?php echo $section5_background_img5['url']; ?>)">
         <p class="section5-bla5-bla1"><?php the_field("section5_bla5_bla1") ?></p>
         <p class="section5-bla5-bla2"><?php the_field("section5_bla5_bla2") ?></p>
         <p class="section5-banner-write-link5"><?php the_field('banner_write_link5') ?> </p
            </section>
        </section>
             
    <section class="section5-content6">
        <section class="section5-img6" style="background-image: url(<?php echo $section5_background_img6['url']; ?>)">
         <p class="section5-bla6-bla1"><?php the_field("section5_bla6_bla1") ?></p>
         <p class="section5-bla6-bla2"><?php the_field("section5_bla6_bla2") ?></p>
         <p class="section5-banner-write-link6"><?php the_field('banner_write_link6') ?> </p
        </section>
        </section>
      </div> 
    </section>
</section>
          
<!-- 6ème PARTIE -->
          
    <div class="section6-content">
      <p class="section6-titre"><?php the_field("section6_titre") ?></p>
      <p class="section6-barre"><?php the_field("barre") ?></p>
      <p class="section6-text1"><?php the_field('section6_text1') ?> </p>
      <p class="section6-text2"><?php the_field('section6_text2') ?> </p>
      <p class="section6-text3"><?php the_field('section6_text3') ?> </p>
     <section class="section6-img" style="background-image: url(<?php echo $section6_background_img['url']; ?>)">
</section>
      <p class="section-banner-link"><?php echo $banner_link['title']; ?> </p>
        </div>
          

<?php get_footer(); ?>