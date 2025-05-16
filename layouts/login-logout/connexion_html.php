<section class="bg-[#1E3A8A] min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-xl w-full max-w-md p-8 border border-[#D9B08C]">
        <h2 class="text-3xl font-bold text-[#1E3A8A] mb-6 text-center">Connexion au compte</h2>

        <form method="POST" class="space-y-4">


            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-[#1E3A8A] focus:border-[#1E3A8A] focus:border-2">
            </div>

            <!-- Mot de passe -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-[#A8BDB3] focus:border-[#A8BDB3]">
            </div>



            <!-- Bouton -->
            <div>
                <button type="submit"
                    class="w-full bg-[#1E3A8A] text-white font-semibold py-2 px-4 rounded-md hover:bg-[#A8BDB3] transition duration-300">
                    Se connecter
                </button>
            </div>
        </form>


    </div>
</section>