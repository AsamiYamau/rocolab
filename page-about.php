<?php get_header(); ?>

<div class="p-page-about p-page p-section">

  <div class="p-page__top">
    <div class="p-page__title">
      <h1 class="l-wrapper"><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="p-mv__img-block">
    <img class="p-mv__page-img" src="<?php echo esc_url(get_theme_file_uri('dist/image/logo.svg')); ?>" alt="">
  </div>

  <div class="p-page-about__img">
      <img class="p-page-about__photo" src="<?php echo esc_url(get_theme_file_uri('dist/image/about.png')); ?>" alt="">
      <img class="p-page-about__photo-sp" src="<?php echo esc_url(get_theme_file_uri('dist/image/about-sp.png')); ?>" alt="">
  </div>


  <div class="p-page-about__content-box">

    <div class="p-page-about__content c-box ">
      <dl class="p-page-about__list l-wrapper">
        <dt class="p-page-about__left">
          事業名
        </dt>
        <dd class="p-page-about__right">
          ろこらぼ
        </dd>
        <dt class="p-page-about__left">
          代表
        </dt>
        <dd class="p-page-about__right">
          山内あさみ
        </dd>
        <dt class="p-page-about__left">
          設立
        </dt>
        <dd class="p-page-about__right">
          2023年1月
        </dd>
        <dt class="p-page-about__left">
          事業形態
        </dt>
        <dd class="p-page-about__right">
          個人事業主
        </dd>
        <dt class="p-page-about__left">
          所在地
        </dt>
        <dd class="p-page-about__right">
          千葉県松戸市（自宅兼用のため、一部省略しております。）
        </dd>


      </dl>



    </div>

    <div class="c-box">
      <div class="p-page-about__profile p-section-profile l-wrapper">
        <h2 class="p-page-about__profile-title">代表</h2>

        <div class="p-section-profile__top">
          <img class="p-section-profile__img" src="<?php echo esc_url(get_theme_file_uri('dist/image/2.png')); ?>" alt="">
          <h3 class="p-section-profile__title">
            ASAMI YAMAUCHI</h3>
        </div>
        <div class="p-section-profile__text-box">
      <p class="p-section-profile__text">
        千葉県松戸市でホームページ制作をしているフリーランスWebデザイナー<br>
        
      制作会社ではお願いしにくいこと・なんとなく相談しづらいことはありませんか？？<br>
      そんな時はこの人↑にご相談ください！！<br>
    皆様にとって最善のホームページを制作・提案いたします！！<br>

      趣味：わんこ・投資・パソコン・犬のお世話（わんこ）<br>
      対応可能時間：９：００〜１８：００<br>
      ※わんこのお散歩中はお返事が遅れる場合がありますのでご了承くださいませ。
    
    </p>
      
    </div>
      </div>

    </div>
  </div>
</div>

<?php get_footer(); ?>