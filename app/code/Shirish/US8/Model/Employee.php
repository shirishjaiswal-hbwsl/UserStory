<?php

namespace Shirish\US8\Model;

use Magento\Framework\Model\AbstractModel;


class Employee extends AbstractModel
{
    public function __toString()
    {
        return "Customer: First Name = '" . $this->getFirstName() . ", Last Name = " . $this->getLastName() . " , Email " . $this->getEmailId();
    }
}
