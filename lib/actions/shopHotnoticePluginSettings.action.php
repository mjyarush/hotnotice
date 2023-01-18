<?php
    class shopHotnoticePluginSettingsAction extends waViewAction
  {
          public function execute()
          {
              $plugin = wa('shop')->getPlugin('hotnotice');
              $settings = $plugin->getSettings();
              $settings['Posel'] = self::settingCheckBoxValues('shop');
              $this->view->assign('settings', $settings);
          }

        public static function settingCheckBoxValues($app_id)
        {
            $result = self::staticGetRoutes($app_id);
            $settings=array();

            if(count($result) == 1){
                $settings[]= $result[0];
            }else{
                foreach ($result as $key=>$path){
                    $settings[] = $path;
                }
            }
            return $settings;
        }

        public static function staticGetRoutes($app_id)
        {
            $result = array();
            $domain_routes = wa()->getRouting()->getByApp($app_id);
            foreach ($domain_routes as $domain => $mass) {
                    $result[] = $domain;
            }
            return $result;
        }
  }