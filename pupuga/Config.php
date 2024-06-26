<?php

namespace Pupuga;

abstract class Config
{
    protected $config;

    protected function __construct()
    {
        $this->config = array(
            // theme | modules | restapi | array('Correct', 'Media', 'SetConfig', 'PageMain', 'PageLogin', 'PageAdmin')
            'mode' => array('Correct', 'Media', 'SetConfig', 'PageMain', 'PageLogin', 'PageAdmin'),
            //'mode' => 'theme',

            /**
             * Register block
             */
            'registerCarbonFields' => array(
                // slug must start with common_pupuga_
                //    'common' => array(
                //        'Configuration' => array(
                //            'Parameters' => 'config',
                //            'Test edit' => 'textarea',
                //            'Loop edit' => array(
                //                'type' => 'complex',
                //                'set_layout' => 'tabbed-horizontal',
                //                'add_fields' => array(
                //                    array('text', 'title', 'Title'),
                //                    array('color', 'title_color', 'Title Color'),
                //                    array('image', 'image', 'Image')
                //                ),
                //            )
                //        )
                //    )       
                // false | array
                //'sidebar' => array('page', 'post')
                'common' => array(
                    'Configuration' => array(
                        'Home image' => 'image',
                        //'Flag' => 'image',
                        'Help page id' => 'text'
                    )
                )
            ),

            // Example - add postType & taxonomy
            //
            // 'Single post type' => array(
            //      'many' => 'Many post types',
            //      'icon' => 'dashicons-calendar-alt',
            //      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            //      'taxonomies' => array('post_tag', 'category'),
            //      'addTaxonomies' => array(array('single' => 'Single taxonomy', 'many' => 'Many taxonomies')),
            //      'parameters' => array('publicly_queryable' => false)
            // )
            'registerPostTypesTaxonomies' => array(
                'Media data' => array(
                    'many' => 'Media data',
                    'icon' => 'dashicons-playlist-video',
                    'supports' => array('title', /*'page-attributes'*/),
                    'taxonomies' => array(),
                    'addTaxonomies' => array(
                        array('single' => 'Lang', 'many' => 'Langs'),
                        array('single' => 'Scope', 'many' => 'Scope'),
                        array('single' => 'Cat', 'many' => 'Cats'),
                        array('single' => 'Medium', 'many' => 'Mediums'),
                    ),
                    'parameters' => array()
                 )
            ),

            // boolean | array '140x50' => boolean,
            'registerThumbnails' => array(
            ),

            // boolean | array
            'registerWidgets' => false,

            // boolean
            'registerHeaderImage' => false,

            /**
             * Remove block
             */
            'removeRestApi' => true,
            'removeAdminMenuItems' =>
                array(
                    'menu' => array(
                        'edit.php',
                        //'edit.php?post_type=page',
                        //'edit-comments.php',
                        //'tools.php',
                        //'plugins.php',
                        //'index.php',
                        //'users.php',
                        //'options-general.php',
                        //'separator1',
                        //'separator2',
                        //'separator-last',
                    ),
                    'submenu' => array(
                        'options-general.php' => array(
                            //'options-reading.php',
                            //'options-writing.php',
                            //'options-discussion.php',
                            //'options-permalink.php',
                            //'options-privacy.php',
                            'wp-font-awesome-settings',
                            'ayecode-ui-settings'
                        ),
                    )
                ),
            'removeAdminPluginItems' => array()
        );
    }
}