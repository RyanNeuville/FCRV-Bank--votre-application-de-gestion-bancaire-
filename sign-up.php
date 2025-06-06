<?php
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.24/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/dist/boxicons.js' rel='stylesheet'>
    <title>FCRV-Bank Sign-up</title>
</head>

<body class="bg-[url(images/bg.jpg)] bg-cover bg-center p-2">
    <main class="flex flex-col items-center justify-center min-h-screen">
        <form action="" class="">
            <div class="flex flex-col items-center gap-3 mb-6 p-6 rounded-lg shadow-lg bg-white bg-opacity-80">
                <span class="flex items-center gap-2">
                    <i class='bx bxs-bank  bx-lg text-3xl text-blue-700'></i>
                    <span class="text-3xl font-bold text-blue-700">FCRV-Bank</span>
                </span>
                <span class="text-2xl font-bold">Creation de compte</span>
                <div class="flex items-center justify-center gap-2 w-full">
                    <label class="input input-bordered flex items-center gap-2 w-full">
                        <i class="fa fa-user text-sm text-gray-500"></i>

                        <input type="text" class="grow w-full" placeholder="Prenom" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 w-full">
                        <i class="fa fa-user text-sm text-gray-500"></i>
                        <input type="text" class="grow w-full" placeholder="Nom" required />
                    </label>
                </div>
                <label class="input input-bordered flex items-center gap-2 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="h-4 w-4 opacity-70">
                        <path
                            d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                        <path
                            d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                    </svg>
                    <input type="text" class="grow w-full" placeholder="Email" required />
                </label>
                <label class="input input-bordered flex items-center gap-2 w-full">
                    <i class="fa fa-phone text-sm text-gray-500"></i>
                    <input type="text" class="grow w-full" placeholder="Telephone" required />
                </label>
                <input type="file" class="file-input file-input-bordered file-input-primary w-full" />
                <label class="input input-bordered flex items-center gap-2 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="h-4 w-4 opacity-70">
                        <path fill-rule="evenodd"
                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                            clip-rule="evenodd" />
                    </svg>
                    <input type="password" class="grow w-full" required  placeholder="password"/>
                </label>
                <label class="input input-bordered flex items-center gap-2 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="h-4 w-4 opacity-70">
                        <path fill-rule="evenodd"
                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                            clip-rule="evenodd" />
                    </svg>
                    <input type="password" class="grow w-full" required  placeholder="confirm password"/>
                </label>
                <div class="">
                    <input type="checkbox" class="checkbox size-5 checkbox-primary" required />
                    <span class="text-sm text-gray-600">J'accepte les</span>
                    <span class="text-sm text-gray-900 font-bold">conditions d'utilisation</span>
                    <span class="text-sm text-gray-600">et la</span>
                    <span class="text-sm text-gray-900 font-bold">politique de confidentialité</span>
                </div>
                <button class="btn btn-primary w-full" type="submit">S'inscrire</button>
                <span class="text-sm text-gray-500">vous etes deja inscrit ? <a href="login.html"
                        class="text-blue-600 hover:underline">Se connecter</a></span>
                <div class="w-full border border-gray-600/50 rounded-full"></div>
                <div class="flex items-center justify-center gap-2 flex-col text-center">
                    <span class="text-sm text-gray-500">Ou connectez-vous avec</span>
                    <span class="flex items-center justify-center gap-4">
                        <a href="#" class="text-blue-600 hover:text-gray-600 hover:underline text-2xl"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="text-blue-600 hover:text-gray-600 hover:underline text-2xl"><i
                                class="fa-brands fa-google"></i></a>
                        <a href="#" class="text-blue-600 hover:text-gray-600 hover:underline text-2xl"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="text-blue-600 hover:text-gray-600 hover:underline text-2xl"><i
                                class="fa-brands fa-github"></i></a>
                    </span>
                </div>
            </div>
        </form>
    </main>
    <script src="js/login.js"></script>
</body>

</html>