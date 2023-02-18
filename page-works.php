<?php get_header(); ?>

<div class="p-page-works p-page">
  <div class="p-page__top">
    <div class="p-page__title">
      <h1 class="l-wrapper"><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="p-mv__img-block">
    <img class="p-mv__page-img" src="<?php echo esc_url(get_theme_file_uri('dist/image/logo.svg')); ?>" alt="">
  </div>

  <div class="p-page-works__content l-wrapper">

    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'post', //投稿タイプ名
      'post_status' => 'publish',
      'order' => 'desc',
      'orderby' => 'post_date',
      'paged' => $paged,
      'posts_per_page' => 10
    );

    $my_query = new WP_Query($args); ?>

    <ul class="p-page-works__list">

      <?php if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <li class="p-page-works__list-item">

            <a href="<?php the_permalink(); ?>">
              <div class="p-page-works__image">
                <?php the_post_thumbnail('medium') ?>
              </div>
              <div class="p-page-works__text">
                <p class="p-page-works__text-title">
                  <?php the_title(); ?>様
                </p>
                <div class="p-page-works__text-bottom">
                  <?php the_meta(); ?>
                </div>
              </div>
            </a>
          </li>

      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </ul>
  </div>
</div>






<?php get_footer(); ?>