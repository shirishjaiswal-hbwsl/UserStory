<?php

declare(strict_types=1);

namespace Shirish\US16\Logger;

use Magento\Framework\Logger\Handler\Base; 

class Handler extends Base {
    protected $loggerType = Logger::INFO;

    protected $fileName = "/var/log/us16-noti.log";
}