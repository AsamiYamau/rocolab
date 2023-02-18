<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php echo bloginfo('description'); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <?php $tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>

    <<?php echo $tag ?> class="l-header__logo">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img class="l-header__logoimg" src="<?php echo esc_url(get_theme_file_uri('dist/image/logo.svg')); ?>" alt="">
      </a>
    </<?php echo $tag ?>>

 

    <nav>
      <ul class="l-header__list">


        <li class="l-header__list-item">
          <a href="<?php echo esc_url(home_url('/rocolab/')); ?>">ろこらぼに出来ること</a>
        </li>
        <li class="l-header__list-item">
          <a href="<?php echo esc_url(home_url('/works/')); ?>">制作実績</a>
        </li>

        <li class="l-header__list-item">
          <a href="<?php echo esc_url(home_url('/about/')); ?>">事業概要</a>
        </li>

        <li class="l-header__list-item">
          <a href="<?php echo esc_url(home_url('/order/')); ?>">ご注文の流れ</a>
        </li>

        <li class="l-header__list-item">
          <a href="<?php echo esc_url(home_url('/price/')); ?>">料金</a>
        </li>

        <li class="l-header__list-item">
          <a href="https://lin.ee/CzUJkEB">お問い合せ</a>
        </li>

      </ul>
    </nav>

    
    <div class="l-header__btn">
      <span class="l-header__line"></span>
      <span class="l-header__line"></span>
      <span class="l-header__line"></span>
      
    </div>
    
    
    <div class="l-header__mask"></div>
  </header>