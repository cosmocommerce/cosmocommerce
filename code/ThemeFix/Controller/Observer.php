<?php

class CosmoCommerce_ThemeFix_Controller_Observer
{
	//Event: adminhtml_controller_action_predispatch_start
	public function overrideTheme()
	{
		Mage::getDesign()->setArea('adminhtml')
			->setTheme((string)Mage::getStoreConfig('design/admin/theme'));
//		Mage::getDesign()->setArea('adminhtml')->setTheme('skin', 'enterprise');
	}
}
