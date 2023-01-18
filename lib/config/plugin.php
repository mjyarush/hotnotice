<?php
return array(
    'name' => 'Гибкие уведомления',
    'img'  => 'img/favicon.png',
    'description' => 'Позволяет настроить уведомления в разных местах сайта',
    'version' => '2022.07.01',
    'vendor' => '667213',
    'frontend' => true,
    'custom_settings' => true,
    'handlers' => array(
        'frontend_header' => 'headerNotice',
        'frontend_footer' => 'footerNotice',
        'frontend_homepage' => 'mainNotice',
        'frontend_order' => 'orderNotice',
        'frontend_category' => 'categoryNotice',
),
);