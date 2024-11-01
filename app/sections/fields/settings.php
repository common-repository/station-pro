<?php

/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package StationPro.co
 */


Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__('Announcement', 'stationpro'),
        'desc'             => esc_html__('Shower announcement or information for your program radio users.', 'stationpro') . ('<br></br>'),
        'id'               => 'annunciations',
        'subsection'       => true,
        'customizer_width' => '900px',
        'fields'           => array(
            array(
                'id' => 'toggle_marqueet',
                'type' => 'switch',
                'title' => esc_attr('Show/hide announcement', 'stationpro'),
                'default'  => true,

            ),

            array(
                'id' => 'marqueet_one',
                'type' => 'textarea',
                'rows' => 4,
                'title' => esc_attr('Announcement', 'station_desciption'),
                'placeholder' => esc_attr('Description a small annunciation in yout player', 'stationpro'),
            ),


        ),
    )
);



Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__('Settings your player', 'stationpro'),
        'desc'             => esc_html__('You can adjust the settings of your player with bottons and a link.', 'stationpro') . ('<br></br>'),
        'id'               => 'items_menu',
        'subsection'       => true,
        'customizer_width' => '900px',
        'fields'           => array(



            // coming soon
            // array(
            //     'id' => 'animation',
            //     'type' => 'switch',
            //     'title' => esc_attr('Show/hide animation your player', 'stationpro'),
            //     'default'  => true,

            // ),

            array(
                'id' => 'btn_status',
                'type' => 'switch',
                'title' => esc_attr('Show/hide Offline / On AIR', 'stationpro'),
                'subtitle' => esc_html__('Display either offline or on air, depending on the content being played.', 'stationpro'),
                'default'  => esc_html__('on'),
            ),
            array(
                'id' => 'toggle_action',
                'type' => 'switch',
                'title' => esc_attr('Show/hide Schedule', 'stationpro') . '<span class="mt-2">',
                'subtitle' => esc_attr('Display button for your schedule', 'stationpro'),
                'default'  => 'on',
            ),

            array(
                'id' => 'schedule_link',
                'type' => 'select',
                'title' => esc_attr('Select your schedule page ', 'stationpro'),
                'desc' => esc_attr('Shower your program with schedule link to page', 'stationpro'),
                'data' => 'pages',
                'default' => '0',
            ),


            array(
                'id' => 'toggle_favorite',
                'type' => 'switch',
                'title' => esc_attr('Show/hide Favorite', 'stationpro'),
                'default'  => true,
            ),


            array(
                'id' => 'screen',
                'type' => 'switch',
                'title' => esc_attr('Show player first', 'stationpro'),
                'desc' => esc_attr('You can start your player by displaying only the widget icon. You might find this intriguing if you employ the shortcut on your web pages.', 'stationpro'),
                'default'  => true,
            ),

            array(
                'id' => 'hidden_player',
                'type' => 'switch',
                'title' => esc_attr('Hidden navbar player', 'stationpro'),
                'desc' => esc_attr('hidden full navbar player display on page.', 'stationpro'),
                'default'  => false,
            ),

            array(
                'id' => 'toggle_brand',
                'type' => 'switch',
                'title' => esc_attr('Show/hide Brand Widget', 'stationpro'),
                'desc' => esc_attr('Please, remember that your version is free and I hope you can remember us when you disable this feature', 'stationpro'),
                'default'  => true,
                'disabled' => stationpro()->is__premium_only() ? false : true,
            ),

            array(
                'id' => 'plugin_id',
                'title' => esc_attr('Plugin Token', 'stationpro'),
                'subtitle' => esc_attr('This token will be used for tracking purposes.', 'stationpro'),
                'desc' => esc_attr('This TOKEN is automatically generated and should not be changed.', 'stationpro'),
                'type' => 'text',
                'readonly' => true,
                'default' => wp_generate_uuid4(),
            ),

        ),
    )
);
