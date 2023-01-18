<?php
return array(
    'pageStatus' => array(
        'title' =>'Отображение в поселениях',
        'control_type' => waHtmlControl::GROUPBOX,
        'options_callback' => array('shopHotnoticePlugin', 'settingCheckBoxValues'),
        'value' => array(),
    ),
    'noticePersonal' => array(
        'title' => 'Собственное уведомление с помощью хэлпера',
        'description'=> '{shopHotnoticeViewHelper::personalBanner()}',
        'control_type'=> waHtmlControl::GROUPBOX,
        'value' => 0,
        'option' => array(),
    ),
    'personalMobile' => array(
        'title' => 'Видимость на мобильных устройствах',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'personalUser' => array(
        'title' => 'Видимость только для авторизованных пользователей',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'personalH1Size'=> array(
        'title' => 'Размер заголовка',
        'description' =>'Размер кнопки .rem, по умолчанию 2.5',
        'control_type' => waHtmlControl::INPUT,
        'value' => '2.5',
    ),
    'personalH1Color'=> array(
        'title' => 'Цвет текста',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'personalBG'=> array(
        'title' => 'Цвет фона',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#009999',
    ),
    'personalSVG'=>array(
        'title' => 'Цвет крестика',
        'description' =>'Цвет в формате HEX, по умолчанию #ffffff',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'personalH1Text' => array(
        'title' => 'Текст заголовка',
        'control_type' => waHtmlControl::TEXTAREA,
        'value' => 'Уведомление по хэлперу',
    ),
    'noticeHeader' => array(
        'title' => 'Уведомление в шапке',
        'value' => 0,
        'control_type'=>waHtmlControl::GROUPBOX,
        'option' => array(
        ),
    ),
    'headerStatus' => array(
        'title' => 'Статус',
        'description' => 'Включите для отображения на страницах',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            array(
                'value' => 1,
                'title' => 'Включен',
            ),
            array(
                'value' => 0,
                'title' => 'Выключен',
            ),
        ),
        'value' => 0    ,
    ),
    'headerMobile' => array(
        'title' => 'Видимость на мобильных устройствах',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'headerUser' => array(
        'title' => 'Видимость только для авторизованных пользователей',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'headerH1Size'=> array(
        'title' => 'Размер заголовка',
        'description' =>'Размер кнопки .rem, по умолчанию 2.5',
        'control_type' => waHtmlControl::INPUT,
        'value' => '2.5',
    ),
    'headerH1Color'=> array(
        'title' => 'Цвет текста',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'headerBG'=> array(
        'title' => 'Цвет фона',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#009999',
    ),
    'headerSVG'=>array(
        'title' => 'Цвет крестика',
        'description' =>'Цвет в формате HEX, по умолчанию #ffffff',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'headerH1Text' => array(
        'title' => 'Текст заголовка',
        'control_type' => waHtmlControl::TEXTAREA,
        'value' => 'Уведомление в шапке сайта!',
    ),
    'noticeMain' => array(
        'title' => 'Уведомление на главной странице',
        'value' => 0,
        'control_type'=>waHtmlControl::GROUPBOX,
        'option' => array(),
    ),
    'mainStatus' => array(
        'title' => 'Статус',
        'description' => 'Включите для отображения на страницах',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            array(
                'value' => 1,
                'title' => 'Включен',
            ),
            array(
                'value' => 0,
                'title' => 'Выключен',
            ),
        ),
        'value' => 0,
    ),
    'mainMobile' => array(
        'title' => 'Видимость на мобильных устройствах',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'mainUser' => array(
        'title' => 'Видимость только для авторизованных пользователей',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'mainH1Size'=> array(
        'title' => 'Размер заголовка',
        'description' =>'Размер кнопки .rem, по умолчанию 2.5',
        'control_type' => waHtmlControl::INPUT,
        'value' => '2.5',
    ),
    'mainH1Color'=> array(
        'title' => 'Цвет текста',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'mainBG'=> array(
        'title' => 'Цвет фона',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#009999',
    ),
    'mainSVG'=>array(
        'title' => 'Цвет крестика',
        'description' =>'Цвет в формате HEX, по умолчанию #ffffff',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'mainH1Text' => array(
        'title' => 'Текст заголовка',
        'control_type' => waHtmlControl::TEXTAREA,
        'value' => 'Уведомление на главной странице!',
    ),

    'noticeCategory' => array(
        'title' => 'Уведомление на странице категории',
        'value' => 0,
        'control_type'=>waHtmlControl::GROUPBOX,
        'option' => array(

        ),
    ),
    'categoryStatus' => array(
        'title' => 'Статус',
        'description' => 'Включите для отображения на страницах',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            array(
                'value' => 1,
                'title' => 'Включен',
            ),
            array(
                'value' => 0,
                'title' => 'Выключен',
            ),
        ),
        'value' => 0,
    ),
    'categoryMobile' => array(
        'title' => 'Видимость на мобильных устройствах',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'categoryUser' => array(
        'title' => 'Видимость только для авторизованных пользователей',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'categoryID'=> array(
        'title' => 'ID категории',
        'description' =>'Укажите номер',
        'control_type' => waHtmlControl::INPUT,
        'value' => '0',
    ),
    'categoryH1Size'=> array(
        'title' => 'Размер заголовка',
        'description' =>'Размер кнопки .rem, по умолчанию 2.5',
        'control_type' => waHtmlControl::INPUT,
        'value' => '2.5',
    ),
    'categoryH1Color'=> array(
        'title' => 'Цвет текста',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'categoryBG'=> array(
        'title' => 'Цвет фона',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#009999',
    ),
    'categorySVG'=>array(
        'title' => 'Цвет крестика',
        'description' =>'Цвет в формате HEX, по умолчанию #ffffff',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'categoryH1Text' => array(
        'title' => 'Текст заголовка',
        'control_type' => waHtmlControl::TEXTAREA,
        'value' => 'Уведомление на странице категории!',
    ),

    'noticeOrder' => array(
        'title' => 'Уведомление при оформлении заказа',
        'value' => 0,
        'control_type'=>waHtmlControl::GROUPBOX,
        'option' => array(
        ),
    ),
    'orderStatus' => array(
        'title' => 'Статус',
        'description' => 'Включите для отображения на страницах',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            array(
                'value' => 1,
                'title' => 'Включен',
            ),
            array(
                'value' => 0,
                'title' => 'Выключен',
            ),
        ),
        'value' => 0,
    ),
    'orderMobile' => array(
        'title' => 'Видимость на мобильных устройствах',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'orderUser' => array(
        'title' => 'Видимость только для авторизованных пользователей',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'orderH1Size'=> array(
        'title' => 'Размер заголовка',
        'description' =>'Размер кнопки .rem, по умолчанию 2.5',
        'control_type' => waHtmlControl::INPUT,
        'value' => '2.5',
    ),
    'orderH1Color'=> array(
        'title' => 'Цвет текста',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'orderBG'=> array(
        'title' => 'Цвет фона',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#009999',
    ),
    'orderSVG'=>array(
        'title' => 'Цвет крестика',
        'description' =>'Цвет в формате HEX, по умолчанию #ffffff',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'orderH1Text' => array(
        'title' => 'Текст заголовка',
        'control_type' => waHtmlControl::TEXTAREA,
        'value' => 'Уведомление на странице заказа!',
    ),

    'noticeFooter' => array(
        'title' => 'Уведомление в подвале',
        'value' => 0,
        'control_type'=>waHtmlControl::GROUPBOX,
        'option' => array(
        ),
    ),
    'footerStatus' => array(
        'title' => 'Статус',
        'description' => 'Включите для отображения на страницах',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            array(
                'value' => 1,
                'title' => 'Включен',
            ),
            array(
                'value' => 0,
                'title' => 'Выключен',
            ),
        ),
        'value' => 0,
    ),
    'footerMobile' => array(
        'title' => 'Видимость на мобильных устройствах',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'footerUser' => array(
        'title' => 'Видимость только для авторизованных пользователей',
        'control_type' => waHtmlControl::CHECKBOX,
        'value' => '0',
    ),
    'footerH1Size'=> array(
        'title' => 'Размер заголовка',
        'description' =>'Размер кнопки .rem, по умолчанию 2.5',
        'control_type' => waHtmlControl::INPUT,
        'value' => '2.5',
    ),
    'footerH1Color'=> array(
        'title' => 'Цвет текста',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'footerBG'=> array(
        'title' => 'Цвет фона',
        'description' =>'Цвет в формате HEX, по умолчанию #009999',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#009999',
    ),
    'footerSVG'=>array(
        'title' => 'Цвет крестика',
        'description' =>'Цвет в формате HEX, по умолчанию #ffffff',
        'control_type' => waHtmlControl::INPUT,
        'value' => '#ffffff',
    ),
    'footerH1Text' => array(
        'title' => 'Текст заголовка',
        'control_type' => waHtmlControl::TEXTAREA,
        'value' => 'Уведомление в футере!',
    ),
);