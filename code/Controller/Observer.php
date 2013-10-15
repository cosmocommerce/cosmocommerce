<?php

class CosmoCommerce_ThemeFix_Controller_Observer
{
	//Event: adminhtml_controller_action_predispatch_start
	public function overrideTheme()
	{
        (Mage::getSingleton('core/design_package')->setTheme('CosmoCommerce'));
        /*
        (Mage::getSingleton('core/design_package')->setPackageName('CosmoCommerce'));
        (Mage::getSingleton('core/design_package')->setTheme('default'));
        exit();
		Mage::getDesign()->setArea('adminhtml')
            ->setPackageName('CosmoCommerce') //Name of Package
			->setTheme('default');
        print_r(Mage::getDesign()->getArea());
        exit();
		Mage::getDesign()->setArea('adminhtml')
			->setTheme((string)Mage::getStoreConfig('design/admin/theme'));
        */
//		Mage::getDesign()->setArea('adminhtml')->setTheme('skin', 'enterprise');
	}
}
