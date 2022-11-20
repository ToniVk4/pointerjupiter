<?php
/**
 * 
 * 
 */

 ?>

 <article id="post-<?php the_ID() ?>">

<div class="pj-hero-container">
    <?php
    $img_value = get_the_post_thumbnail_url();
    $title = get_the_title(); 
    $content = get_the_content(); 
    ?>
    <img class="featured-img" src="<?php echo $img_value?>">
    <div class="main-hero-title"><?php echo $title;  ?></div>
    <div class="main-hero-excerpt"><?php echo $content;  ?></div>
</div>
<div class="subpages-content">
    <div class="sub-wrapper">
        <div class="sub-title">Our Mission</div>
        <div class="sub-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
        <div class="sub-btn"><a href="/our-mission">Explore</a></div>
    </div>
    <div class="sub-wrapper">
        <div class="sub-title">Take Action</div>
        <div class="sub-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
        <div class="sub-btn"><a href="/take-action">Explore</a></div>
    </div>
    <div class="sub-wrapper">
        <div class="sub-title">Knowledge Centre</div>
        <div class="sub-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
        <div class="sub-btn"><a href="/knowledge-centre">Explore</a></div>
    </div>
</div>
</article>