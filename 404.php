<?php

global $post;
$post = get_page_by_path( '404' );
echo Pupuga\Libs\Files\Files::getTemplate(__DIR__ . '/page', true);