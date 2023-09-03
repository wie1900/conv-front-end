<?php


namespace Conv\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Conv\App\Http\Requests\ConverterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConvController extends Controller
{
    public function index()
    {
        return view('conv::index');
    }

    public function getWords(ConverterRequest $request)
    {

        try {
            // $connection = Http::post('https://api.deadygo.com/api/conv/words', [
            $connection = Http::post('http://localhost:3000/api/conv/words', [
                'number'=>$request->number
            ]);
    
                $response = $connection->json();
                if(isset($response['words'])){
                    return view('conv::index', [
                        'words'=>$response['words'],
                        'number'=>$request->number
                    ]);
                }else{
                    return view('conv::index', [
                        'error'=>$response['errors']['number'][0],
                        'number'=>$request->number
                    ]);
                }
    
        } catch (\Throwable $th) {
            return view('conv::index', [
                'error'=>'Cannot connect to the API-Server, try later.',
                'number'=>$request->number
            ]);
        }


    }
}