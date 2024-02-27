<?php

declare (strict_types = 1);

namespace Shirish\US2\Plugin;

use Magento\Theme\Block\Html\Footer;

class ProductCopyrightPlugin
{
    public function afterGetCopyright(Footer $footer, $result)
    {
        $result = "Copyright © 2024-present SHIRISH, Inc. All rights reserved. ";
        return $result;
    }
}
