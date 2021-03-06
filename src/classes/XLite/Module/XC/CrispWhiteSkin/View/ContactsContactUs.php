<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\CrispWhiteSkin\View;

/**
 * Contact Us
 *
 * @Decorator\Depend ("CDev\ContactUs")
 */
class ContactsContactUs extends \XLite\Module\XC\CrispWhiteSkin\View\Contacts implements \XLite\Base\IDecorator
{
    public function getEmail()
    {
        return \XLite\Core\Config::getInstance()->CDev->ContactUs->showEmail
            ? parent::getEmail()
            : '';
    }
}
