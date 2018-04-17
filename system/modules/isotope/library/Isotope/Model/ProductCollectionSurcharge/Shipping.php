<?php

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009-2016 terminal42 gmbh & Isotope eCommerce Workgroup
 *
 * @link       https://isotopeecommerce.org
 * @license    https://opensource.org/licenses/lgpl-3.0.html
 */

namespace Isotope\Model\ProductCollectionSurcharge;

use Isotope\Interfaces\IsotopeProductCollectionSurcharge;
use Isotope\Model\ProductCollectionSurcharge;
use Isotope\Model\Shipping as ShippingModel;

/**
 * Class Shipping
 *
 * Implements shipping surcharge in product collection
 * @copyright  Isotope eCommerce Workgroup 2009-2012
 * @author     Andreas Schempp <andreas.schempp@terminal42.ch>
 */
class Shipping extends ProductCollectionSurcharge implements IsotopeProductCollectionSurcharge
{

    /**
     * Get the source shipping model if available
     *
     * @return ShippingModel|null
     */
    public function getSource()
    {
        return ShippingModel::findByPk($this->source_id);
    }
}
