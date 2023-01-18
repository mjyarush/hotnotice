<?php
class shopHotnoticeViewHelper extends waPluginViewHelper
{
    public static function personalBanner()
    {
            $settings = wa('shop')->getPlugin('hotnotice')->getSettings();
            $path = wa()->getConfig()->getRootPath();
            foreach ($settings as $key => $value) {
                if (preg_match("/personal/", $key)) {
                    $key = preg_replace("/personal/", '', $key);
                    $toView[$key] = $value;
                }
            }
            $view = wa()->getView();
            $view->assign('settings', $toView);

            return $view->fetch($path.'/wa-apps/shop/plugins/hotnotice/templates/noticeMain.html');

    }

}