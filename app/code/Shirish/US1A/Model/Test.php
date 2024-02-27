<?php

declare (strict_types = 1);

namespace Shirish\US1A\Model;

use Magento\Catalog\Api\Data\CategoryInterface;

class Test
{

    protected $cateogry;
    protected array $arrParam;
    protected string $strParam;

    public function __construct(
        CategoryInterface $category) {
        $this->cateogry = $category;
        $this->arrParam = ['Will', 'Smith', 24];
        $this->strParam = "Hello User Story 1 A";
    }

    public function getArray(): array
    {
        return $this->arrParam;
    }

    public function getString(): string
    {
        return $this->strParam;
    }

    public function displayParams()
    {
        $wholeString = '';
        // echo "$this->strParam" . "\n";
        $wholeString .= $this->strParam;
        $wholeString .= "\n";
        foreach ($this->arrParam as $param) {
            // echo "" . $key . "" . $value . "";
            $wholeString .= $param;
            $wholeString .= "\n";
        }
        return $wholeString;
    }
}
