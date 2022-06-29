<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <!-- <script src="{{asset('javascript/login.js')}}" defer="true"></script> -->
</head>

<body>
    <nav>
        <div id="menu">
            <a href="{{route('home')}}">HOME</a>
            <a href="">CHI SIAMO?</a>
        </div>                
    </nav>
    <section>
    <h1 class="comp">Benvenuto!</h1>
        <div class="logo">
            <img class="logoimg" src="img/logo.jpg">
            <div class="comp">Adottaci!</div>
        </div>
        @if($error == 'errore')
            <div class = error> Campi errati </div>
        @endif
        <form name='login' method='post' action = "{{route('loginUser')}}">
        @csrf
        <div class = "parent">
            <div class="email">
                <label for="email">Email</label>
                <input type="text" name="email" id = 'email'>
            </div>
            </div>
            <div class = "parent">
            <div class="password">
                <label for='password'>Password</label>
                <input type='password' name='password' id = 'password'>   
            </div>
            </div>

            <div class = "parent">
            <div class="submit">
                <input type='submit' value="Login">
            </div>
            </div>
        </form>
        <div class="signup">Non hai un account ? <a href="{{asset('/signup')}}">Registrati</a></div>
    </section>

    <footer>
        <div id="author">
            <p>Lorenzo Basile</p>
            <p>1000005358</p>
        </div>
        </div>
    </footer>

</body>

</html>