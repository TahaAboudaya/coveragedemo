@extends('layouts.master')
<style>
    
</style>
@section('content')
<div class="container text-center">
   <!--  @if ($errors->any())
    <div class="w-4/8 m-auto text-center">
        @foreach ($errors->all() as $error)
        <li class="text-red-500 list-none">
            {{ $error }}
        </li>
        @endforeach
    </div>
    @endif -->
    <form action="{{ route('store') }}" method="post" id="feedback">
        {!! csrf_field() !!}

        @if(session('message'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert" id="successMessage">
            <span class="font-medium">{{ session('message') }}</span>
        </div>
        @endif
        <h1 class="text-5xl font-bold mt-10 mb-6"> LTT Coverage</h1>
        <div class="container mx-auto p-16">
            <div class="flex flex-nowrap flex-row-reverse -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 text-right" for="grid-first-name">
                        First Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-full  py-3 px-4  leading-tight focus:outline-none focus:bg-white text-right" id="name" type="text" required placeholder="name" name="name">
                    <p class="text-red-500 text-xs italic text-right">{{ $errors->first('name')}}</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase text-right tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        service number
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-right" required id="service_num" type="text" placeholder="service_num" name="service_num">
                    <p class="text-red-500 text-xs italic text-right">{{ $errors->first('service_num')}}</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase text-right tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Phone number
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-right" required id="phone" type="text" placeholder="phone" name="phone">
                    <p class="text-red-500 text-xs italic text-right">{{ $errors->first('phone')}}</p>
                </div>

            </div>
            <div id="map">
            </div>
            <br>
            <div class="flex flex-nowrap -mx-3 mb-6">
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-right" id="lat" type="text" placeholder="lat" name="lat" readonly>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-right" id="lng" type="text" placeholder="lng" name="lng" readonly>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full">
                    <button class="shadow-none bg-blue-700 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-4 px-10 rounded-full" type="submit">
                        Submit
                    </button>
                    <button class="shadow-none bg-blue-700 hover:bg-blue-400 text-white font-bold py-4 px-4 rounded inline-flex rounded-full items-center">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                        <a href="/export">
                            Download
                        </a>
                    </button>
                </div>
            </div>
        </div>

    </form>
</div>
<script>
    setTimeout(function() {
        $('#successMessage').fadeOut('fast');
    }, 7000);
</script>

@endsection


<!-- --- -->