<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XCart\Marketplace;

interface IConnector
{
    /**
     * @param IRequest $request
     *
     * @return mixed
     */
    public function getData($request);
}
