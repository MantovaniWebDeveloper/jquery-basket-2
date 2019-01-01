<?php get_header(); ?>
<main>
  <section id="wrapIntro" >
    <div class="container">
      <div id="wrapIntroContent">
        <div class="logo">
          <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logocampionatoTEXT.png" alt="logo-campionato">
        </div>
        <div class="frasePromozionale">
          <h2>IL CAMPIONATO DI KART RENTAL APERTO A TUTTI</h2>
        </div>
        <div class="wrapButton">
          <a class="btnIscriviti white" href="#">ISCRIVITI AL CAMPIONATO</a>
        </div>
        <div class="wrapArrow">
          <smal>info</smal>
          <div><i class="fas fa-angle-down"></i></div>
        </div>
      </div>
    </div>
  </section>
  <section id="wrapSpiegazioneGenerale">
    <div class="container">
      <?php $the_query = new WP_Query( 'cat=6' ); ?>
      <?php while ( $the_query->have_posts() ) :
	       $the_query->the_post(); ?>
      <div class="wrapSpiegazioneGeneraleContent">
        <div class="wrapImgKart">
          <?php the_post_thumbnail(); ?>
        </div>
        <div>
          <div class="wrapSpiegazioneText">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <div class="wrapButton">
              <a class="btnIscriviti black" href="<?php the_permalink(); ?>">VOGLIO PARTECIPARE</a>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile;
          // Ripristina Query & Post Data originali
          wp_reset_query();
          wp_reset_postdata();
      ?>
    </div>
  </section>
  <section id="categoriePiloti">
    <div class="container">
      <div class="categoriePilotiContent">
        <?php $the_query = new WP_Query( 'cat=7' ); ?>
        <?php while ( $the_query->have_posts() ) :
           $the_query->the_post(); ?>
        <div id="wrapTitoloCategoriePiloti">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="wrapContent">
          <div id="wrapImgCat">
            <div class="riga1">
              <i class="far fa-star yellow"></i>
            </div>
            <div class="riga1">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/pro.png" alt="">
            </div>
            <div class="riga1">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/whel.png" alt="">

            </div>
            <div class="riga1">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/r.png" alt="">

            </div>
            <div class="riga1">
              <small>Star</small>
            </div>
            <div class="riga1">
              <small>Pro</small>

            </div>
            <div class="riga1">
              <small>Amateur</small>

            </div>
            <div class="riga1">
              <small>Rookie</small>

            </div>
          </div>
          <div id="wrapTextCat">

               <p><?php the_content(); ?></p>
            <div class="wrapButton">
              <a class="btnIscriviti black" href="#">REGISTRAMI AL CAMPIONATO</a>
            </div>

          </div>
        </div>
      <?php endwhile;
          // Ripristina Query & Post Data originali
          wp_reset_query();
          wp_reset_postdata();
      ?>
      </div>
    </div>
  </section>
  <section id="circuiti">
    <div class="container">
      <?php $the_query = new WP_Query( 'cat=5' ); ?>
      <?php while ( $the_query->have_posts() ) :
         $the_query->the_post(); ?>
      <div id="wrapTitoloCircuiti">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="wrapContent">
        <div id="wrapTextCircuiti">
          <?php the_content(); ?>
          <div class="wrapButton">
            <a class="btnIscriviti white" href="#">VOGLIO ISCRIVERMI</a>
          </div>
        </div>
        <div id="wrapLogoCircuiti">
          <div class="rigaLogoCircuiti">
            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logoRastellino.png" alt="">
          </div>
          <div class="rigaLogoCircuiti">
            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logoExtrema.png" alt="">
          </div>
          <div class="rigaLogoCircuiti">
            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logoMisano.png" alt="">
          </div>
          <div class="rigaLogoCircuiti">
            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logoChioggia.jpg" alt="">
          </div>
        </div>
      </div>
    <?php endwhile;
        // Ripristina Query & Post Data originali
        wp_reset_query();
        wp_reset_postdata();
    ?>
    </div>
  </section>
  <section id="modalita">
    <div class="container">
      <div id="wrapModalitaContent">

        <div id="wrapPagamenti">
          <?php $the_query = new WP_Query( 'cat=' ); ?>
          <?php while ( $the_query->have_posts() ) :
             $the_query->the_post(); ?>

             <h2><?php the_title(); ?></h2>
             <?php the_content(); ?>

           <?php endwhile;
               // Ripristina Query & Post Data originali
               wp_reset_query();
               wp_reset_postdata();
           ?>
      </div>

    </div>
  </section>

</main>
<?php get_footer(); ?>
