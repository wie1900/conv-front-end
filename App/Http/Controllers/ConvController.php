<?php


namespace Conv\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Conv\App\Http\Requests\ConverterRequest;
use Conv\Domain\PortsIn\ConvServiceInterface;

class ConvController extends Controller
{

    public function __construct(protected ConvServiceInterface $convServiceInterface)
    {
        
    }

    public function index()
    {
        return view('conv::index');
    }

    public function getWords(ConverterRequest $request)
    {

        if($this->convServiceInterface->getConversionResult($request->number)->getWords()){
            return view('conv::index', [
                'words'=>$this->convServiceInterface->getConversionResult($request->number)->getWords(),
                'number'=>$request->number]);
        }

        return view('conv::index', [
            'error'=>$this->convServiceInterface->getConversionResult($request->number)->getError(),
            'number'=>$request->number
        ]);

    }
}