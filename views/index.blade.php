<!-- Pagina Master Blade -->

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- yeld(title) recebe o conteudo definido como titulo na pagina-->
        <title>@yield('title')</title>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="_token" content="{{ csrf_token() }}"/>
        <meta name="_page" content="{{ Route::current()->getPath() }}">
        <script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.maskMoney.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>

        



        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
        
         <!-- fonte padrão small via google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'> 
        
    </head>
    

    <body class="@yield('body-class')">

        <!-- recebe os dados da seção(section) content -->           
            <div class="content">
                 @yield('content')
            </div>
        </div>
        
        
        
        
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>    

    </body>
</html>
