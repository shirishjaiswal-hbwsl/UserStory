<?php

declare (strict_types = 1);

namespace Shirish\US1A\ViewModel;

use Magento\Framework\Serialize\SerializerInterface;
use Shirish\US1A\Model\Test;

class ArrToJson
{
    protected $test;
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    protected string $json;
    public function __construct(Test $test, SerializerInterface $serializer)
    {
        $this->test = $test;
        $this->serializer = $serializer;
    }

    // public function toJson(): string
    // {
    //     $data = $this->test->getArray();
    //     return json_encode($data, JSON_THROW_ON_ERROR);
    // }

    public function arrayToJson()
    {
        $data = $this->test->getArray();
        $this->json = $this->serializer->serialize($data);
        return $this->json;
    }
}
