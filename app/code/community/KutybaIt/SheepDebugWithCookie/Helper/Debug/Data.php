<?php

class KutybaIt_SheepDebugWithCookie_Helper_Debug_Data extends Sheep_Debug_Helper_Data
{
    /**
     * Check if cookie is set
     *
     * @return bool
     */
    public function canShowToolbar()
    {
        $allow = parent::canShowToolbar();
        $cookie = Mage::getSingleton('core/cookie');
        $allow = $allow && ($cookie->get('toolbar') == '1');
        return $allow;
    }
}
