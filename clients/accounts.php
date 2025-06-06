<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.24/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/dist/boxicons.js' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>ACCOUNT</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-bank  bx-lg'></i>
            <span class="text">FCRV Bank</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="dashboard">
                    <i class='bx bxs-dashboard bx-sm'></i>
                    <span class="text">Tableau de Board</span>
                </a>
            </li>
            <li class="active">
                <a href="accounts">
                    <i class='bx bxs-credit-card-alt bx-sm'></i>
                    <span class="text">Comptes</span>
                </a>
            </li>
            <li>
                <a href="transactions">
                    <i class='bx bxs-bank bx-sm'></i>
                    <span class="text">Transactions</span>
                </a>
            </li>
            <li>
                <a href="investissement">
                    <i class='bx bx-trending-up bx-sm'></i>
                    <span class="text">Investissement</span>
                </a>
            </li>
            <li>
                <a href="clients">
                    <i class='bx bxs-group bx-sm'></i>
                    <span class="text">Services clients</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu bottom">
            <li>
                <a href="#">
                    <i class='bx bxs-cog bx-sm bx-spin-hover'></i>
                    <span class="text">Parametres</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bx-power-off bx-sm bx-burst-hover'></i>
                    <span class="text">Deconnexion</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu bx-sm'></i>
            <!-- <a href="#" class="nav-link">Categories</a> -->
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" class="checkbox" id="switch-mode" hidden />
            <label class="swith-lm" for="switch-mode">
                <i class="bx bxs-moon"></i>
                <i class="bx bx-sun"></i>
                <div class="ball"></div>
            </label>

            <!-- Notification Bell -->
            <a href="#" class="notification" id="notificationIcon">
                <i class='bx bxs-bell bx-tada-hover'></i>
                <span class="num">3</span>
            </a>
            <div class="notification-menu" id="notificationMenu">
                <ul>
                    <li>Nouveau message de John</li>
                    <li>Votre commande a été expédiée</li>
                    <li>Nouveau commentaire sur votre publication</li>
                    <li>Mise à jour disponible pour votre application</li>
                </ul>
            </div>

            <!-- Profile Menu -->
            <a href="#" class="profile" id="profileIcon">
                <img src="data:image/png;base64,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"
                    alt="Profile">
            </a>
            <div class="profile-menu" id="profileMenu">
                <ul>
                    <li><a href="#">Mon Profile</a></li>
                    <li><a href="#">Parametres</a></li>
                    <li class="flex items-center gap-2 text-red-400">
                        <i class='bx bx-power-off bx-sm bx-burst-hover'></i>
                        <a href="#" class="text-red-400">Deconnexion</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- NAVBAR -->


        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Mes Comptes</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">comptes</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Accueil</a>
                        </li>
                    </ul>
                </div>
                <form action="" method="post">
                    <button class="btn-add bg-blue-600 p-3 rounded-xl text-white">
                        <i class='bx bx-plus'></i>
                        <span class="text">Ajouter un compte</span>
                    </button>
                </form>
            </div>
            <div class="mt-4 mb-2">
                <span>Comment gagne de l'argent ?</span>
            </div>
            <center>
                <ul class="steps sm:steps-vertical lg:steps-horizontal">
                    <li class="step step-primary">inscription</li>
                    <li class="step step-primary">connexion</li>
                    <li class="step">Creation de compte</li>
                    <li class="step">Investissement</li>
                </ul>
            </center>
            <ul class="box-info">
                <li>
                    <div class="flex w-full items-center flex-col justify-between bg-blue-600/20 p-4 rounded-lg">
                        <div class="flex w-full items-center justify-between">
                            <h2 class="mr-auto text-2xl font-bold">FCRV Bank</h2>
                            <img src="../images/vise.png" alt="">
                        </div>
                        <div class="mt-auto flex w-full items-end">
                            <div class="mr-auto flex w-fit flex-col gap-2">
                                <div class="flex items-baseline">
                                    <p class="font-mono text-lg font-bold">ACC12263728</p>
                                </div>
                                <p class="uppercase">150 450 <span class="font-bold text-blue-600">FCFA</span></p>
                            </div>

                            <div class="w-16 rounded-md bg-blue-400/20 p-2">
                                <img src="../images/visa.png" />
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex w-full items-center flex-col justify-between bg-red-600/20 p-4 rounded-lg">
                        <div class="flex w-full items-center justify-between">
                            <h2 class="mr-auto text-2xl font-bold">FCRV Bank</h2>
                            <img src="../images/vise.png" alt="">
                        </div>
                        <div class="mt-auto flex w-full items-end">
                            <div class="mr-auto flex w-fit flex-col gap-2">
                                <div class="flex items-baseline">
                                    <p class="font-mono text-lg font-bold">ACC12463921</p>
                                </div>
                                <p class="uppercase">60 800 <span class="font-bold text-red-600">FCFA</span></p>
                            </div>

                            <div class="w-16 rounded-md bg-red-400/20 p-2">
                                <img src="../images/visa.png" />
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex w-full items-center flex-col justify-between bg-yellow-600/20 p-4 rounded-lg">
                        <div class="flex w-full items-center justify-between">
                            <h2 class="mr-auto text-2xl font-bold">FCRV Bank</h2>
                            <img src="../images/vise.png" alt="">
                        </div>
                        <div class="mt-auto flex w-full items-end">
                            <div class="mr-auto flex w-fit flex-col gap-2">
                                <div class="flex items-baseline">
                                    <p class="font-mono text-lg font-bold">ACC12263728</p>
                                </div>
                                <p class="uppercase">0 <span class="font-bold text-yellow-600">FCFA</span></p>
                            </div>

                            <div class="w-16 rounded-md bg-yellow-400/20 p-2">
                                <img src="../images/visa.png" />
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="../js/script.js"></script>
</body>

</html>