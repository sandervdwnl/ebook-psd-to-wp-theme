<?php
/**
 * Template Name: Page Template
 * Description: Page template with Sidebar on the left side
 *
 */

get_header();


?>
<div class="header" id="ebook-header">
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-5">
                    <div id="mockup-img-wrapper">
                        <img id="mockup-img" src="<?php echo get_stylesheet_directory_uri() . '/assets/img\slice2.png' ?>" alt="">
                    </div>
                </div>

                <div class="col-md-7 text-center">
                    <h1 class="display-4"><?php echo get_field('jumbotron_heading'); ?></h1>
                    <p class="lead"><?php echo get_field('jumbotron_text'); ?></p>

                    <div class="buttons">
                        <button class="black-bg white mr-1"><?php echo get_field('jumbotron_button_text_left'); ?></button>
                        <button class="yellow-bg"><?php echo get_field('jumbotron_button_text_right'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Book Features -->

<section class="book-features">

    <h2 class="text-center section-title"><?php echo get_field('book_features_section_title'); ?></h2>
    <p class="text-center section-sub-title"><?php echo get_field('book_features_section_subtitle'); ?></p>

    <div class="container">
        <div class="row">

        <?php
        
        for ($i = 1; $i < 7; ++$i) { ?>

        <?php 
        $icon = 'book_feature_'.$i.'_icon';
        $title = 'book_feature_'.$i.'_title';
        $text = 'book_feature_'.$i.'_text';
        ?>

        <div class="col-12 col-sm-6 col-md-4 book-feature text-center">
        <img src="<?php echo get_field("$icon") ?>" alt="icon">
        <h3 class="book-feature-title mb-3"><?php echo get_field("$title") ?></h3>
        <p class="text-center"><?php echo get_field("$text") ?></p>
        </div>
        <?php
        }
        ?>
        </div>
    </div>
</section>

<!-- About the writer -->

<section class="writer">

    <h2 class="text-center section-title"><?php echo get_field('writer_section_title'); ?></h2>
    <p class="text-center section-sub-title"><?php echo get_field('writer_section_subtitle'); ?></p>

    <div class="section-wrapper dark-bg">

        <div class="container writer-container">
            <div class="row">
                <div class="col-md-6 writer-text">
                    <img src="<?php echo get_field('writer_balloon'); ?>" alt="text balloon" id="writer-text-balloon">
                    <p class="writer-bold-text"><?php echo get_field('writer_bold_text'); ?></p>
                    <p class="writer-paragraph"><?php echo get_field('writer_paragraph'); ?></p>
                    <img src="<?php echo get_field('writer_autograph'); ?>" alt="writer's autograph" id="writer-autograph">
                </div>
                <div class="col-md-6 writer-pic">
                    <img src="<?php echo get_field('writer_picture'); ?>" alt="writer's picture" id="writer-picture">
                </div>
            </div>
        </div>
    </div>

</section>


<!-- Chapters Included -->

<section class="chapters">

    <h2 class="text-center section-title"><?php echo get_field('chapters_title'); ?></h2>
    <p class="text-center section-sub-title"><?php echo get_field('chapters_subtitle'); ?></p>

    <div class="container writer-container">
        <div class="row">
            <div class="col-md-6">
                <?php
                
                    for ($i = 1;$i < 4;++$i) { 
                        
                        $icon = 'chapter_box_img_'.$i;
                        $title = 'chapter_box_title_'.$i;
                        $text = 'chapter_box_text_'.$i;
                        ?>
                        <div class="chapter-box row">
                            <div class="chapter-box-img col-md-3">
                                <img src="<?php echo get_field("$icon");  ?>" alt="icon">
                            </div>

                            <div class="col-md-9">
                                <h2 class="chapter-box-title"><?php echo get_field("$title");?></h2>
                                <p class="chapter-box-text"><?php echo get_field("$text");?></p>
                            </div>
                        </div>
                    <?php
                    }
                ?>
            </div>
            <div class="col-md-5 offset-1">
                <img src="<?php echo get_field('chapters_image'); ?>" alt="tablet">
            </div>
        </div>
    </div>

</section>


<!-- Testimonial -->

<section class="testimonial">

        <div class="container-fluid testimonial-container">
            <div class="row reversed">
                <div class="col-12 col-md-6 testimonial-text dark-bg">
                    <div class="col-md-8 my-auto offset-md-2">
                    <h3>
                        <span class="white"><?php echo get_field('testimonial_heading_white'); ?></span>
                        <span class="yellow"><?php echo get_field('testimonial_heading_yellow'); ?></span>
                    </h3>
                    <p class="testimonial-paragraph white"><?php echo get_field('testimonial_paragraph'); ?></p>
                    <div class="row">
                        
                            <div class="col-12 col-lg-2 text-center testimonial-icon">
                                <?php if( get_field('testimonial_writer_icon')) : ?>
                                <img src="<?php echo get_field('testimonial_writer_icon'); ?>" alt="">
                                <?php else : ?>
                                <span id="yellow-dot" class="yellow-bg"></span>
                                <?php
                                endif;
                                ?>
                            </div>
                            <div class="col-12 col-lg-10 col-xl-6 text-center testimonial-writer">
                                <span class="white"><?php echo get_field('testimonial_writer_name') . ' - '; ?></span>
                                <span class="yellow"><?php echo get_field('testimonial_writer_job_title'); ?></span>
                            </div>
                        
                    </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 skewed-section testimonial-title yellow-bg white py-4">
                   
                </div>
            </div>
        </div>
   

</section>

<!-- Pricing Table -->

<section class="pricing">

    <h2 class="text-center section-title"><?php echo get_field('pricing_section_title'); ?></h2>
    <p class="text-center section-sub-title"><?php echo get_field('pricing_section_subtitle'); ?></p>

    <div class="container pricing-container">
        <div class="row">

        <?php
        

        for ( $i = 1; $i < 4; ++$i ) { ?>

            <div class="col-12 col-md-6 col-no-<?php echo $i; ?> pricing-table text-center">
            <div class="pricing-wrapper">
                <span class="usd">$</span><span class="price"><?php echo get_field("price_$i"); ?></span>
                <h4 class="pricing-table-title yellow"><?php echo get_field("price_title_$i"); ?></h4>
                <span class="pricing-table-text"><?php echo get_field("price_text_$i"); ?></span><br>
                <button class="dark-bg white"><?php echo get_field('pricing_button_text'); ?></button>
                </div>
            </div>

        <?php
        }
        ?>

        </div>

        <!-- brands section -->

        <div class="row brands-row">

        <?php
        for ($i = 1; $i < 6; ++$i) { ?>

            <div class="col text-center" id="brand-wrap_<?php echo $i; ?>">
            <img src="<?php echo get_field("brand_$i"); ?>" alt="brand logo">
            </div>

        <?php
        }
        ?>

        </div>
    </div>
</section>

<!-- Bottom -->

<section class="final">
<div class="container-fluid dark-bg">
            <div class="row">
                <div class="col-md-8 offset-2 text-center">
                    <h3 class="display-4 text-center yellow"><?php echo get_field('final_heading'); ?></h1>
                <p class="text-center white"><?php echo get_field('final_text'); ?></p>
                <button class="yellow-bg">
                <?php echo get_field('final_button_text'); ?>
                </button>
                
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
