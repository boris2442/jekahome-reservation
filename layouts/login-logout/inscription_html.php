<section class="bg-[#F3F4F6] min-h-screen flex items-center justify-center">
  <div class="bg-white shadow-lg rounded-xl w-full max-w-md p-8 border border-[#D9B08C]">
    <h2 class="text-3xl font-bold text-[#1E3A8A] mb-6 text-center">Créer un compte JekaHome</h2>

    <form  method="POST" class="space-y-4">
      <!-- Nom complet -->
      <div>
        <label for="fullname" class="block text-sm font-medium text-gray-700">Nom complet</label>
        <input type="text" id="fullname" name="name" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-[#A8BDB3] focus:border-[#A8BDB3]">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
        <input type="email" id="email" name="email" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-[#A8BDB3] focus:border-[#A8BDB3]">
      </div>

      <!-- Mot de passe -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
        <input type="password" id="password" name="password" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-[#A8BDB3] focus:border-[#A8BDB3]">
      </div>

      <!-- Confirmation mot de passe -->
      <div>
        <label for="confirm" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
        <input type="password" id="confirm" name="confirm_password" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-[#A8BDB3] focus:border-[#A8BDB3]">
      </div>

      <!-- Bouton -->
      <div>
        <button type="submit"
          class="w-full bg-[#1E3A8A] text-white font-semibold py-2 px-4 rounded-md hover:bg-[#A8BDB3] transition duration-300">
          S'inscrire
        </button>
      </div>
    </form>

    <p class="mt-4 text-center text-sm text-gray-600">
      Vous avez déjà un compte ?
      <a href="login.html" class="text-[#1E3A8A] font-medium hover:underline">Connectez-vous</a>
    </p>
  </div>
</section>