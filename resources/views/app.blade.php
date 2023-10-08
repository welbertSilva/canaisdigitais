<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', '') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
    </head>
    <body class="antialiased scroll">
            <div class="navigation">           
                <div class="item1"></div> 
                <div class="item2">
                    <label> Canais Digitais</label>
                </div>
            </div>
            <div class="item3">
                <div>
                    <nav class="navbar">
                    <!-- LOGO -->
                        <!-- NAVEGAÇÃO MENU -->
                            <ul class="nav-links">
                                <!-- NAVEGAÇÃO MENUS -->
                                <div class="menu">
                                    <li><a href="/">Visão Geral</a></li>
                                    <li><a href="/">Caixa TEM</a></li>
                                    <li><a href="/">Gerenciador Financeiro</a></li>
                                    <li><a href="/">Internet Banking</a></li>
                                    <li><a href="{{ route('login') }}">Acessar ADM</a></li>
                                </div>
                            </ul>
                    </nav>    
                </div>
            </div>
            @inertia
    </body>
</html>

<!-- <img src="../images/logotipo3x.png">
                <label>Canais Digitais</label> -->
<style type="text/css">
       
/* This aligns items to the end line on main-axis */
    html, body {
    overflow: hidden;
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Inter;
    }
    a {
        text-decoration: none;
    }
    li {
        list-style: none;
    }
    .navigation {
        height: 8rem;
        width: 99.8%;
        display:flex;
        flex-direction: row;
        justify-content:  flex-start ;
        align-items: center;
        background: #005CA9;
        gap: 2rem;
        padding: 4rem 2rem 0rem 4rem;
        margin: 0.2rem 0.0rem 0.0rem 0.2rem;

    }
    .item1 {
        background-image: url("../images/logotipo_negativo.svg");
        background-size: 11rem;
        background-repeat: no-repeat, no-repeat;
        height: 7rem;
        width: 12rem;
    } 
    .item2 {
        height: 10.5rem;
        width: 15rem;
        margin-top:3.4rem;
    }
    .item2 label {
        color: #FFF;
        text-align: left;
        font-family: Inter;
        font-size: 2rem;
        font-style: normal;
        font-weight: 700;
    }

    .item2 a {
        color: #FFF;
        text-align: left;
        justify-content:  flex-end ;
        font-family: Inter;
        font-size: 0.8rem;
        font-style: normal;
        font-weight: 400;
    }
    .item3{
        width: 99.8%;
        background: #005CA9;
        display: flex;
        align-content: flex-end;
        flex-flow: column wrap;
        height: 2.2rem;
        margin: -2rem 0.0rem 0.0rem 0.2rem;

    }
/* NAVBAR ESTILO */
.navbar {
    display: flex;
    align-items: left;
    justify-content: space-between;
    background-color: transparent;
    color: #fff;
   }
   .nav-links a {
    color: #fff;
   }
   /* NAVBAR MENU */
   .menu {
    display: flex;
    gap: 1em;
    font-size: 0.9rem;
   }
   .menu li:hover {
    background-color: #4c9e9e;
    border-radius: 5px;
    transition: 0.3s ease;
   }
   .menu li {
    padding: 5px 14px;
   }
/* Medium screens When on medium sized screens, we center it by evenly distributing empty space around items */
@media (max-width: 1440px) {
    .navigation {
        height: 12rem;
        width: 100%;
        display:flex;
        flex-direction: row;
        justify-content:  flex-start ;
        align-items: center;
        background: #005CA9;
        gap: 1rem;
        padding: 2rem 0rem 0rem 6rem;
        margin: 0.1rem 0.0rem 0.0rem 0.2rem;
    }
    .item1 {
        background-image: url("../images/logotipo_negativo.svg");
        background-size: 18rem;
        background-repeat: no-repeat, no-repeat;
        height: 6rem;
        width: 18rem;
    } 
    .item2 {
        height: 8rem;
        width: 60rem;
        margin-top:1.5rem;
    }
    .item2 label {
        color: #FFF;
        text-align: left;
        font-family: Inter;
        font-size: 3rem;
        font-style: normal;
        font-weight: 700;
    }
}
@media (max-width: 1340px) {
    .navigation {
        height: 12rem;
        width: 100%;
        display:flex;
        flex-direction: row;
        justify-content:  flex-start ;
        align-items: center;
        background: #005CA9;
        gap: 1rem;
        padding: 2rem 0rem 0rem 6rem;
        margin: 0.1rem 0.0rem 0.0rem 0.2rem;
    }
    .item1 {
        background-image: url("../images/logotipo_negativo.svg");
        background-size: 13rem;
        background-repeat: no-repeat, no-repeat;
        height: 5rem;
        width: 13rem;
    } 
    .item2 {
        height: 8rem;
        width: 60rem;
        margin-top:3rem;
    }
    .item2 label {
        color: #FFF;
        text-align: left;
        font-family: Inter;
        font-size: 2rem;
        font-style: normal;
        font-weight: 400;
    }
}
@media (max-width: 800px) {
    .navigation {
        height: 5rem;
        width: 100%;
        display:flex;
        flex-direction: row;
        justify-content:  flex-start ;
        align-items: center;
        background: #005CA9;
        gap: 0.2rem;
        padding: 2rem 0rem 0rem 2rem;
        margin: 0rem 0.0rem 0.0rem 0rem;
    }
    .item1 {
        background-image: url("../images/logotipo_negativo.svg");
        background-size: 6rem;
        background-repeat: no-repeat, no-repeat;
        height: 3rem;
        width: 7rem;
    } 
    .item2 {
        height: 5rem;
        width: 40rem;
        margin-top:1.7rem;
    }
    .item2 label {
        color: #FFF;
        text-align: left;
        font-family: Inter;
        font-size: 1rem;
        font-style: normal;
        font-weight: 300;
    }
}
/* Small screens On small screens, we are no longer using row direction but column */
@media (max-width: 665px) {
    .navigation {
        height: 7rem;
        width: 100%; 
        display:flex;
        flex-direction: column;
        align-items: center;
        background: #005CA9;       
    }
    .item1 {
        flex: 1 auto;
        order: 1;
        background-image: url("../images/logotipo_negativo.svg");
        background-size: 4rem;
        background-repeat: no-repeat, no-repeat;
        height: 2rem;
        width: 7rem;
    } 
    .item2 {
        order: 2;
        height:2rem;
        width: 8rem;
        
    }
    .item2 label {
        color: #FFF;
        text-align: left;
        font-family: Inter;
        font-size: 1rem;
        font-style: normal;
        font-weight: 300;
    }
}
    
</style>