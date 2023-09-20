<?php

/*
 * This file is part of bus-stage.sntinvest.ru project
 * Copyright 2022 dimay.
 */

namespace Sntinvest\Integration\Orm\Order;

use Bitrix\Sale\Order as BX_Order;
use Bitrix\Sale\Fuser;
use Bitrix\Currency\CurrencyManager;

/**
 * Description of Company
 *
 * @author dimay
 */
class OrderTable extends BX_Order
{
    private static $field_xml_id = 'XML_ID';
    
    /**
     * Override parent method to get object
     * @return string
     */
    public static function getObjectClass()
    {
        return EO_Order::class;
    }
    
    /**
     * Override parent method to get collection
     * @return string
     */
    public static function getCollectionClass(){
        return EO_Order_Collection::class;
    }
    
    /**
     * Override parent method to get map
     * @return array
     */
    public static function getMap()
    {
        $arMap = parent::getMap();
        
        return array_merge($arMap ?? [], []);
    }
    
    /**
     * Getting a new object
     * @return \Sntinvest\Integration\Orm\Company\Company
     */
    public static function newObject()
    {
        $ob = static::create("s1", Fuser::getIdByUserId(9), CurrencyManager::getBaseCurrency());
        return $ob;
    }
    
    /**
     * 
     * @param type $xmlId
     */
    public static function findOrCreated($xmlId)
    {
        $item = static::find($xmlId);
        
        if (is_null($item))
        {
            $item = static::newObject();
        }
        
        return $item;
    }
    
    /**
     * 
     * @param type $xmlId
     */
    public static function find($xmlId)
    {
        $item = static::getList([
            'filter' => [
                "=".static::$field_xml_id => $xmlId
            ]
        ])->fetchObject();
        
        if (!is_null($item) && intval($item->getId()) > 0)
        {
            $item = static::load($item->getId());

            return $item;
        }
    }
}
