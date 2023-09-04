<?php

namespace Conv\Domain\PortsIn;

use Conv\Domain\DTOs\ConversionResult;

interface ConvServiceInterface
{
    function getConversionResult(string $number): ConversionResult;
}