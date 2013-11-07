<?php

class CosmoCommerce_ThemeFix_Model_Design_Package extends Mage_Core_Model_Design_Package
{
    protected function _fallback($file, array &$params, array $fallbackScheme = array(array()))
    {
        if($params['_area'] == 'frontend') {
            // add enterprise/default as one of fallback theme for skin/frontend
            array_push($fallbackScheme, array('_package' => 'enterprise', '_theme' => 'default'));
        } else if($params['_area'] == 'adminhtml') {
            // add default/enterprise as one of fallback theme for skin/adminhtml
            // make _theme enterprise perfer over default in skin/adminhtml
            // $empty is magento way to make theme config (package/theme) works
            // so there must have a empty array as $fallbackScheme[0]
            $empty = array_shift($fallbackScheme);
            if(count($empty) != 0) {
                array_unshift($fallbackScheme, $empty);
            }
            array_unshift($fallbackScheme, array('_theme' => 'enterprise'));
            array_unshift($fallbackScheme, array());
            // but if user changed their adminhtml package, we can still fall to default<package>/enterprise<theme>
            array_push($fallbackScheme, array('_package' => 'default', '_theme' => 'enterprise'));
        }
        return parent::_fallback($file, $params, $fallbackScheme);
    }
}
