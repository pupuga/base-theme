<?php
    $month = Pupuga\Libs\Data\Date::getLangMonth(LANG_CODE, date_format(date_create($params['comment']->comment_date),'n'));
    $date = str_replace('{{}}', $month, date_format(date_create($params['comment']->comment_date),'d {{}} Y'));
    $rating = (intval(get_comment_meta( $params['comment']->comment_ID, '_rating_total', true ))) ?: 1;
?>
<div class="comments-list__item" id="comment-<?php echo $params['comment']->comment_ID ?>">
    <?php if ( $params['comment']->comment_approved == '0' ) : ?>
        <div class="comments-list__moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></div>
    <?php endif ?>
    <div class="comments-list__date">
        <span><?php set_pll_e('Reviewed on') ?><span>
        <span><?php echo $date ?></span>
        <span><?php edit_comment_link( __('(Edit)'), '', '' ); ?></span>
    </div>
    <div class="comments-list__rating">
        <div class="field-rating field-rating--static">
            <?php for ($i = 5; $i >= 1; $i--) : ?>
                <div class="field-rating__item<?php if ($i == $rating) : ?> current<?php endif ?>"></div>
            <?php endfor ?>
        </div>
    </div>
    <div class="comments-list__text">
        <?php comment_text() ?>
    </div>
</div>
