<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/output.css" rel="stylesheet">
    <title>jekaHome <?= $pageTitle ?></title>
</head>

<body class='bg-[#1E3A8A]'>



    <nav class="bg-[#1E3A8A] text-white px-6 py-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-2xl font-bold tracking-wide">JekaHome</a>

            <!-- Menu -->
            <div class="hidden md:flex space-x-6 text-sm">
                <a href="#" class="hover:text-[#A8BDB3] transition">Accueil</a>
                <a href="#logements" class="hover:text-[#A8BDB3] transition">Logements</a>
                <a href="#meubles" class="hover:text-[#A8BDB3] transition">Meubles</a>
                <a href="about.php" class="hover:text-[#A8BDB3] transition">À propos</a>
                <a href="#contact" class="hover:text-[#A8BDB3] transition">Contact</a>
            </div>

            <!-- Boutons espace membre -->
            <div class="hidden md:flex space-x-4">
                <a href="connexion.php" class="bg-white text-[#1E3A8A] px-4 py-2 rounded hover:bg-[#A8BDB3] hover:text-white transition">Connexion</a>
                <a href="inscription.php" class="bg-[#A8BDB3] text-white px-4 py-2 rounded hover:bg-[#D9B08C] transition">Inscription</a>
            </div>

            <!-- Menu mobile -->
            <div class="md:hidden">
                <button id="menu-toggle" class="focus:outline-none">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu mobile -->
        <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2 px-6">
            <a href="#" class="block text-sm hover:text-[#A8BDB3]">Accueil</a>
            <a href="#logements" class="block text-sm hover:text-[#A8BDB3]">Logements</a>
            <a href="#meubles" class="block text-sm hover:text-[#A8BDB3]">Meubles</a>
            <a href="about.php" class="block text-sm hover:text-[#A8BDB3]">À propos</a>
            <a href="#contact" class="block text-sm hover:text-[#A8BDB3]">Contact</a>
            <a href="#connexion" class="block text-sm text-[#1E3A8A] bg-white rounded px-3 py-1 mt-2">Connexion</a>
            <a href="#inscription" class="block text-sm bg-[#A8BDB3] text-white rounded px-3 py-1">Inscription</a>
        </div>
    </nav>
    <?= $pageContent ?>
    <?php require_once 'footer_html.php'; ?>
    <script>
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>