<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body class="font-sans">
    <div class="container_head bg-white w-full fixed top-0">
        <header class="header flex items-center justify-between h-16 px-6 shadow">
            <div class="logo font-bold">
                <img src="{{ asset("Insigne-GN-1.png") }}" alt="">
            </div>
    
            <div class="section flex">
                <p><a href="/login">Se connecter</a></p>
                <p><a href="/register">S'inscrire</a></p>
            </div>
        </header>
    </div>
    

    <div class="contenu mt-20 flex justify-between">
        <div class="txt1 w-1/2 ml-6 mt-8">
            <h1 class="text-5xl">
                Votre satisfaction c'est <span class="text-blue-700">notre priorité</span>
            </h1>
            <br />

            <div class="aide mt-16">
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <button class="btn-cherche bg-white border border-blue-500 rounded px-4 py-1 mr-3"><a href="/login" style="color: black">Chercher</a></button>
                <button class="btn-send bg-blue-700 text-white border border-blue-700 rounded px-4 py-1"><a href="/login" style="color: white">Envoyer Ticket</a></button>
            </div>
        </div>

        <div class="image1 w-1/2">
            <img src="/assistant@2x.png" alt="">
        </div>
    </div>

    <div class="problem text-center mt-20">
        <div class="type inline-block w-1/6 m-1 h-20 shadow rounded">
            <h4 class="mt-6">Probleme avec mon souris (10)</h4>
        </div>
        <div class="type inline-block w-1/6 m-1 h-20 shadow rounded">
            <h4 class="mt-6">Probleme avec mon l'imprimante (10)</h4>
        </div>
        <div class="type inline-block w-1/6 m-1 h-20 shadow rounded">
            <h4 class="mt-6">Probleme avec mon ordinateur (10)</h4>
        </div>
        <div class="type inline-block w-1/6 m-1 h-20 shadow rounded">
            <h4 class="mt-6">Problemesur cable RJ45 (10)</h4>
        </div>
        <div class="type inline-block w-1/6 m-1 h-20 shadow rounded">
            <h4 class="mt-6">Probleme materiel (10)</h4>
        </div>
        <div class="type inline-block w-1/6 m-1 h-20 shadow rounded">
            <h4 class="mt-6">Probleme Ecran (10)</h4>
        </div>
    </div>

    <div class="informer bg-blue-700 text-white rounded-lg text-center mt-20 ml-6 mr-6">
        <br />
        <h2 class="mt-6 text-3xl">Laissez nous votre email pour informer chaque nouvelle</h2>
        <br />
        <br />
        <p class="ml-20 mr-20">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis eos exercitationem consectetur, est necessitatibus magnam ducimus pariatur. Odit voluptas atque rem et aut.Eveniet, commodi sed? Assumenda veniam porro repudiandae?</p>
        <br />

        <form class="mt-8 ml-24 mr-24 mb-8">
            <input type="text" placeholder="Entrez votre email" name="email" class="w-2/3 h-10 rounded-l-lg" />
            <button type="submit" class="w-1/3 h-10 bg-blue-900 text-white rounded-r-lg">Restez informer</button>
        </form>
        <br />
    </div>
</body>

</html>
