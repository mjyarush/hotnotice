<?php
class shopHotnoticePlugin extends shopPlugin{

    public function headerNotice() {

        $status = $this->getSettings('headerStatus');
        $toView = array();
        $this->addJs('js/hotnotice.js');

        if ($status != 0 && self::getPageStatus()){
            $settings = $this->getSettings();
            foreach ($settings as $key => $value) {
                if (preg_match("/header/", $key)) {
                    $key = preg_replace("/header/", '', $key);
                    $toView[$key] = $value;
                }
            }
            $view = wa()->getView();
            $view->assign('settings', $toView);
            return $view->fetch($this->path.'/templates/noticeSign.html');
        }else{
            return;
        }
    }

    public function footerNotice() {

        $status = $this->getSettings('footerStatus');
        $toView = array();
        if ($status != 0 && self::getPageStatus()) {
            $settings = $this->getSettings();
            foreach ($settings as $key => $value) {
                if (preg_match("/footer/", $key)) {
                    $key = preg_replace("/footer/", '', $key);
                    $toView[$key] = $value;
                }
            }
            $view = wa()->getView();
            $view->assign('settings', $toView);
            return $view->fetch($this->path.'/templates/noticeFooter.html');
        }else{
            return;
        }
    }

    public function mainNotice() {

        $status = $this->getSettings('mainStatus');
        $toView = array();
        if ($status != 0 && self::getPageStatus()) {
            $settings = $this->getSettings();
            foreach ($settings as $key => $value) {
                if (preg_match("/main/", $key)) {
                    $key = preg_replace("/main/", '', $key);
                    $toView[$key] = $value;
                }
            }
            $view = wa()->getView();
            $view->assign('settings', $toView);
            return $view->fetch($this->path.'/templates/noticeMain.html');
        }else{
            return;
        }
    }

    public function orderNotice() {

        $status = $this->getSettings('orderStatus');
        $toView = array();
        if ($status != 0 && self::getPageStatus()) {
            $settings = $this->getSettings();
            foreach ($settings as $key => $value) {
                if (preg_match("/order/", $key)) {
                    $key = preg_replace("/order/", '', $key);
                    $toView[$key] = $value;
                }
            }
            $view = wa()->getView();
            $view->assign('settings', $toView);
            return $view->fetch($this->path.'/templates/noticeOrder.html');
        }else{
            return;
        }
    }
    public function categoryNotice() {

        $status = $this->getSettings('categoryStatus');
        $catID = $this->getSettings('categoryID');
        $toView = array();
        if ($status != 0 && !empty($catID) && self::getPageStatus()) {
            $settings = $this->getSettings();
            foreach ($settings as $key => $value) {
                if (preg_match("/category/", $key)) {
                    $key = preg_replace("/category/", '', $key);
                    $toView[$key] = $value;
                }
            }
            $view = wa()->getView();
            $view->assign('settings', $toView);
            return $view->fetch($this->path.'/templates/noticeCategory.html');
        }else{
            return;
        }
    }
    public function getPageStatus()
    {
        $domain = wa()->getRouting()->getDomain();
        $settings = $this->getSettings('pageStatus');

        if(array_key_exists($domain,$settings)){
            return true;
        }else{
            return false;
        }
    }

}

