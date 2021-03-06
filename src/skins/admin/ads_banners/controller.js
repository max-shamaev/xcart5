/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Dashboard info block notifications controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

jQuery(function () {
  jQuery('body').on('click', '.ads-banners .promo-banner-close', function () {
    const parent = jQuery(this).parent('.promo-banner').hide();

    jQuery.cookie(parent.data('id'), 'closed');
  });
});
