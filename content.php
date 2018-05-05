<section class="b-post b-post-1 b-post-1_mod-a clearfix">
  <div class="entry-media"><a class="js-zoom-images img-responsive" href="<?php the_permalink();?>"><?php the_post_thumbnail('post-image');?></a>
    <div class="entry-date"><?php the_time('d');?><span class="entry-date__month"><?php the_time('F‘ y');?></span></div>
  </div>
  <div class="entry-main">
    <div class="entry-header">
      <div class="entry-meta"><span class="entry-meta__item">by<a class="entry-meta__link text-primary" href="<?php the_author();?>"><?php the_author();?></a></span><span class="entry-meta__item">--<a class="entry-meta__link entry-meta__link_color" href="<?php the_permalink();?>"><?php the_category( ' ,' ); ?></a></span><span class="entry-meta__item"><i class="entry-meta__icon fa fa-share-alt"></i>53</span></div>
      <h2 class="entry-title entry-title_spacing ui-title-inner"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    </div>
    <div class="entry-content">
      <p><?php the_content();?></p>
    </div>
  </div>
</section>