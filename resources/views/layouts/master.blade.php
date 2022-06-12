<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                LTT Coverage
            </title>
           
        </meta>
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
         <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
            </link> -->
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.4/tailwind.min.css'>
            


            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    </head>
    <body>
        @yield('content')
        <script crossorigin="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" src="https://code.jquery.com/jquery-3.1.0.min.js">
        </script>
        {{-- Google map api  --}}

        <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDReL4OYOMjTMjCbOCdXH5ZhqAztXksd8M&libraries=places">
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
        <script src="{{asset('js/script.js')}}"></script>
        <script src="{{asset('ajaxsearch.js')}}"></script>
        <script src="{{asset('js/rules.js')}}"></script>

@yield('js')

    </body>
</html>