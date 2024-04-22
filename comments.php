<div class="comments-list" id="comments">
    <h3 class="comments-list__title"><?php set_pll_e('Comments') ?></h3>
    <?php wp_list_comments(array(
            'callback' => function($comment, $args, $depth) {
                Pupuga\Libs\Files\Files::getTemplate(__DIR__ . '/comment', true, array('comment' => $comment));
            },
            'page' => $current = $_REQUEST['comments-page'] ?? 1
    )) ?>
    <div class="pagination">
        <?php echo paginate_comments_links(array(
            'base'    => add_query_arg( 'comments-page', '%#%' ),
            'total'   => get_comment_pages_count(),
            'current' => $current,
            'add_fragment' => '#comments',
            'prev_text' => set_pll__('Previous'),
            'next_text' => set_pll__('Next')
        )) ?>
    </div>
</div>