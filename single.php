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

  <div class="p-page-works__single">

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

    <?php if ($my_query->have_posts()) :
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="c-box">

          <ul class="p-page-works__single-list l-wrapper">
            <li class="p-page-works__single-list-item">
              <div class="p-page-works__single-image">
                <?php the_post_thumbnail() ?>
              </div>
            </li>
            <li class="p-page-works__single-list-item">
              <?php the_meta(); ?>
            </li>
          </ul>
        </div>
<div class="c-box">

  <div class="p-page-works__single-content l-wrapper">
<?php the_content(); ?>
  </div>
</div>

    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
  </div>


  <a class="p-page-works__single-link" href="<?php echo esc_url(home_url('/works/')); ?>">一覧へ戻る >></a>
</div>






<?php get_footer(); ?>