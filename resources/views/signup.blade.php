<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <script src="{{ asset('js/signup.js') }}" defer="true"></script>

</head>

<body>
    <nav>
        <div id="menu">
            <a href="home.php">HOME</a>
            <a href="">CHI SIAMO?</a>
        </div>                
    </nav>

    <!-- SECTION -->
    <section>
    <h1 class="comp">Registrati!</h1>
        <div class="logo">
            <img class="logoimg" src="img/logo.jpg">
            <div class="comp">Adottaci!</div>
        </div>

        <div id="errore">
        <!-- FORM -->

        <form name='signup' method='post' id = 'form' action="{{route('createUser')}}">
            @csrf
            <!-- NAME -->
            <div class = "parent">
            <div class="name">
                <label for="name">Nome</label>
                <input type="text" name="name">
            </div>

            </div>
            <!-- SURNAME -->
            <div class = "parent">
            <div class="surname">
                <label for="surname">Cognome</label>
                <input type="text" name="surname">
            </div>
            </div>
            <!-- BIRTHDATE -->
            <div class = "parent">
            <div class="birthdate">
                <label for="birthdate">Data di Nascita</label>
                <input type="date" name="birthdate">
            </div>
            </div>
            <!-- EMAIL -->
            <div class = "parent">
            <div class="email">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            </div>
            <!-- PASSWORD  -->
            <div class = "parent">
            <div class="password">
                <label for='password'>Password</label>
                <input type='password' name='password'>
            </div>
            </div>
            <!-- CONFIRM PASSWORD  -->
            <div class = "parent">
            <div class="confirm_password">
                <label for='confirm_password'>Ripeti la Password</label>
                <input type='password' name='confirm_password'>
            </div>
            </div>
            <div class = "parent">
            <div class="submit">
                <input type='submit' value="Registrati">
            </div>
            </div>
        </form>
        <div class="signup">Hai già un account ? <a href="{{asset('/login')}} ">Fai il login !</a></div>
    </div>
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