<?php

namespace Conv\Domain\PortsOut;

use Conv\Domain\DTOs\ConversionResult;

interface ConverterInterface
{
    function getApiResult(string $number): ConversionResult;
}