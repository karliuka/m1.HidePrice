<?php
/**
 * Copyright © Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * See COPYING.txt for license details.
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
