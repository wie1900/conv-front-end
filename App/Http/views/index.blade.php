@extends('conv::layouts.main')

@section('convcontent')
    <div class="text-xl font-bold text-center">Number to Words Converter</div>
    <div class="px-5">

        <form action="/conv" method="POST">
            @csrf
            <div class="font-bold mt-8">Number</div>
            
            <div class="">
                    <input type="text" class="form-control field p-2 border border-gray-300 rounded-md focus:outline-none focus:border-slate-600 text-slate-500 " name="number" value="@isset($number){{ $number }}@endisset{{old('number')}}" required/>
            </div>
            <div class="h-6 pt-1 text-sm italic text-red-600">
                <span class="text-danger error">
                    @isset($error){{ $error }}@endisset
                </span>
            </div>

            <div>
                <div class="font-bold">Result: The Number in Words</div>
            </div>
            <div>
                <textarea class="form-control field p-2 rounded-md bg-slate-100 border border-gray-300" rows="5" cols="50" @disabled(true) >@isset($words){{ $words }}@endisset</textarea>
            </div>

            <div class="flex flex-wrap mt-5">
                <label for="security">The field below must stay empty</label>
            </div>

            <input type="text" name="security" value="{{old('security')}}" class="w-1/4 py-2 px-4 field border border-gray-300 rounded-md focus:outline-none focus:border-slate-600 text-slate-500 mt-2 mb-2" spellcheck="false" />

            @if($errors->has('security'))
                <div class="text-red-500 italic field error">{{ $errors->first('security') }}</div>
            @else
                <div class="error">&nbsp;</div>
            @endif

            <div class="flex flex-row justify-between mb-5">
                <div class="border border-slate-400 text-slate-600 hover:text-red-600 hover:bg-slate-100 select-none rounded-md shadow-sm py-1 px-2  mt-2" onclick="clearFields()">Clear fields</div>
                <div class="text-end"><button type="submit" class="border border-slate-600 rounded-md shadow-sm hover:bg-slate-100 py-1 px-2  mt-2">Convert!</button></div>
            </div>

            <div class="italic text-sm">
                <b>Note:</b> as number insert 1-30 digits + optionally 2 decimals separated by '.'
            </div>

        </form>
    </div>
    <script>
        clearFields = function (){
            document.querySelectorAll('.field').forEach(field =>{
                field.value = "";
            });
            document.querySelectorAll('.error').forEach(div =>{
                div.innerHTML = "&nbsp;";
            });
        }
    </script>

@endsection
