<?php

declare (strict_types = 1);
namespace Shirish\US2\Plugin;

use Magento\Theme\Block\Html\Breadcrumbs;

class BreadcrumbPlugin
{
    public function beforeAddCrumb(Breadcrumbs $breadcrumbs, $crumbName, $crumbInfo)
    {
        $crumbInfo["label"] = "Hummingbird " . $crumbInfo["label"];
        return [$crumbName, $crumbInfo];
    }
}
