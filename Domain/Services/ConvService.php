<?php

namespace Conv\Domain\Services;

use Conv\Domain\DTOs\ConversionResult;
use Conv\Domain\PortsIn\ConvServiceInterface;
use Conv\Domain\PortsOut\ConverterInterface;

class ConvService implements ConvServiceInterface
{

    public function __construct(protected ConverterInterface $converterInterface)
    {
        
    }

    public function getConversionResult(string $number): ConversionResult
    {
        return $this->converterInterface->getApiResult($number);
    }
}