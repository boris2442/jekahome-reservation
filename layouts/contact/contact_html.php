<section class=" flex items-center justify-center p-4 max-w-[700px] mx-auto">
    <div class=" shadow-lg rounded-lg w-full max-w-lg mx-auto p-6 sm:p-8">
        <h1 class="text-3xl font-extrabold text-white text-center mb-8">Contactez-nous</h1>

        <!-- Informations de contact de l'entreprise -->
        <div class="mb-8 space-y-4">
            <div class="flex items-center space-x-4">
                <span class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l1.664 1.664a4 4 0 005.656 0L12 9.328l1.68 1.336a4 4 0 005.656 0L21 10M3 10v10a2 2 0 002 2h14a2 2 0 002-2V10M3 10l9-7 9 7" />
                    </svg>
                </span>
                <p class="text-white text-sm sm:text-base">
                    <strong>Email :</strong> gestionevent@gmail.com
                </p>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l1.664 1.664a4 4 0 005.656 0L12 9.328l1.68 1.336a4 4 0 005.656 0L21 10M3 10v10a2 2 0 002 2h14a2 2 0 002-2V10M3 10l9-7 9 7" />
                    </svg>
                </span>
                <p class="text-white text-sm sm:text-base">
                    <strong>Téléphone :</strong> +237 694 22 35 03
                </p>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12m0 0L9.172 7.757m4.242 4.243L7.757 3.343m9.9 9.9a8 8 0 11-11.314 0 8 8 0 0111.314 0z" />
                    </svg>
                </span>
                <p class="text-white text-sm sm:text-base">
                    <strong>Adresse :</strong> 123 Rue de l'Entreprise, 75001 Cameroun, Douala
                </p>
            </div>
        </div>

        <!-- Formulaire de contact -->
        <form method="POST" class="space-y-6">
            <!-- Message -->
            <div>
                <label for="message" class="block text-sm font-medium text-white mb-2">Message</label>
                <textarea id="message" name="message" rows="5" required
                    class="resize-none w-full px-4 py-2 border-2 border-white rounded-lg focus:outline-none outline-none focus:ring-2 focus:white"></textarea>
            </div>

            <!-- Bouton d'envoi -->
            <div class="text-center">
                <button type="submit" name="contact"
                    class="w-full sm:w-auto px-6 py-3 bg-white text-[#1E3A8A] font-semibold rounded-lg hover:bg-indigo-700 transition">
                    Envoyer le message
                </button>
            </div>
        </form>
    </div>
</section>