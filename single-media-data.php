<?php get_header() ?>
<div class="skeleton">
    <div class="general-content general-content--with-sidebar media-data media-data--single">
        <h3 class="general-sidebar-title general-sidebar-title--left"><?php set_pll_e('Reviews') ?></h3>
        <h2 class="general-subtitle order-before"><?php set_pll_e('Detail') ?></h2>
        <div class="general-sidebar general-sidebar--left">
            <div class="media-product-reviews">
                <?php if ($ratingFields = Pupuga\Custom\MediaData\Single::app()->getRatingFields()) : ?>
                    <div class="media-product-reviews__rating">
                        <div class="media-product-rating">
                            <?php foreach ($ratingFields as $key => $field) : ?>
                                <?php if (isset($field['field']) && $field['field'] == 'rating' && !empty($field['value'])) : ?>
                                    <div class="media-product-rating__row">
                                        <div class="media-product-rating__title"><?php set_pll_e($field['title']) ?></div>
                                        <div class="media-product-rating__rating">
                                            <?php Pupuga\Libs\Files\Files::getTemplate(__DIR__ . '/pupuga/Custom/MediaData/templates/fields/rating-static.php', true,
                                                array('current' => $field['value']))
                                            ?>
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endif ?>
                <?php if (!is_user_logged_in()) : ?>
                    <div class="media-product-reviews__login">
                        <div class="please-login">
                            <div class="please-login__title"><?php set_pll_e('Rate product') ?></div>
                            <div class="please-login__text"><?php set_pll_e('You know the product and would like to rate it, log in and take part?') ?></div>
                            <a class="simple-button simple-button--left" href="<?php echo get_home_url() . '/' . Pupuga\Custom\Account\Pages::app()->getLogin() . '/' ?>"><?php set_pll_e('Login')?></a>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
        <?php if ($dataFields = Pupuga\Custom\MediaData\Single::app()->getDataFields()) : ?>
            <section class="media-data__fields media-data__fields--info order-before">
                <?php foreach ($dataFields as $key => $field) : ?>
                    <?php if($field['value'] != '') : ?>
                        <div class="media-data__field-row media-data__field-row--info">
                            <?php if (empty($first)) : $first = true ?>
                                <h1 class="media-data__field-label-name"><?php echo $field['value'] ?></h1>
                            <?php else: ?>
                            <div class="media-data__field-label media-data__field-label--info media-data__field-label--<?php echo $field['type'] ?>">
                                <?php set_pll_e($field['title']) ?>
                            </div>
                            <div class="media-data__field media-data__field--info media-data__field--<?php echo $field['type'] ?>">
                                <?php echo $field['value'] ?>
                            </div>
                            <?php endif ?>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </section>
        <?php endif ?>
        <section class="media-product-comments order-after remove-side-padding">
            <?php if (is_user_logged_in() && count($ratingFields)) : ?>
                <div class="media-product-comments__add-area">
                    <?php Pupuga\Libs\Files\Files::getTemplate(__DIR__ . '/pupuga/Custom/MediaData/templates/add-rating', true,
                        array('rating-fields' => $ratingFields, 'submit' => true, 'id' => $post->ID, 'ok' => set_pll__('Your review has been added'))) ?>
                </div>
            <?php endif ?>
            <div class="media-product-comments__listing">
                <?php comments_template(); ?>
            </div>
        </section>
    </div>
</div>
<?php get_footer() ?>