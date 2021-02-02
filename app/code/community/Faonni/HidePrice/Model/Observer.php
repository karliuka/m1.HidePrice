<?php
/**
 * Faonni
 *  
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 * 
 * @package     Faonni_HidePrice
 * @copyright   Copyright (c) 2015 Karliuka Vitalii(karliuka.vitalii@gmail.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Faonni_HidePrice_Model_Observer
{
    /**
     * Check available product price from collection
     *
     * @param Varien_Event_Observer $observer
     * @return void
     */
    public function collectionLoadAfter(Varien_Event_Observer $observer)
    {
        if (!Mage::helper('faonni_hideprice')->isEnabled()) {
            return;
        }

        if (!Mage::helper('faonni_hideprice')->isAvailable()) {
            /** @var Mage_Catalog_Model_Resource_Product_Collection $collection */
            $collection = $observer->getEvent()->getCollection();
            foreach ($collection as $product) {
                $product->setCanShowPrice(false);
            }
        }
    }

    /**
     * Check available product price
     *
     * @param Varien_Event_Observer $observer
     * @return void
     */
    public function productLoadAfter(Varien_Event_Observer $observer)
    {
        if (!Mage::helper('faonni_hideprice')->isEnabled()) {
            return;
        }

        if (!Mage::helper('faonni_hideprice')->isAvailable()) { 
            /** @var Mage_Catalog_Model_Product $product */
            $product = $observer->getEvent()->getProduct();
            $product->setCanShowPrice(false);
        }
    }
}
