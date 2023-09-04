<?php

namespace Conv\Infra\Api;

use Conv\Domain\DTOs\ConversionResult;
use Conv\Domain\PortsOut\ConverterInterface;
use Illuminate\Support\Facades\Http;

class ApiConverter implements ConverterInterface
{

    public function getApiResult(string $number): ConversionResult
    {

        try {
            $connection = Http::post('https://api.deadygo.com/api/conv/words', [
            // $connection = Http::post('http://localhost:3000/api/conv/words', [
                'number' => $number
            ]);

            $response = $connection->json();
            if (isset($response['words'])) {
                return new ConversionResult(
                    $response['words'],
                    null
                );
            } else {
                return new ConversionResult(
                    null,
                    $response['error']
                );
            }
        } catch (\Throwable $th) {
            return new ConversionResult(
                null,
                'Cannot connect to the API-Server, try later.'
            );
        }
    }
}
