<?php

class ISM_DeliveryAt_Model_Mysql4_Quote_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('deliveryat/quote');
    }
}