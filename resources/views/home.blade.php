
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adottaci!</title>    
        <link rel="stylesheet" href="{{asset('css/home.css')}}" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Satisfy&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        
        <script src="{{asset('js/load_posts.js')}}" defer="true"></script>
    </head>
    <body>
                <nav>
                    <div id="menu">
                    
                        @if($user == null)
                            <a href="{{route('home')}}">HOME</a>
                            <a class='login' href="{{route('log')}}">LOGIN</a>
                        @else
                            <span>Benvenuto {{ $user['nome'] }}<span>
                            <a href="{{route('home')}}">HOME</a>
                            <a class='community' href="{{route('community')}}">LA NOSTRA COMMUNITY</a>
                            <a href="{{route('customer')}}">AREA PERSONALE</a>
                        @endif

                    </div>
                    
                </nav>
            <section id='posts'></section>

        </body>
</html>