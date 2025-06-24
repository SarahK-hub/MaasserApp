<!DOCTYPE html>
 <html lang="fr"> 
    <head> 
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>Connexion - MaaserAPP</title>
         <script src="https://cdn.tailwindcss.com">
         </script> 
        </head>
         <body class="bg-gray-100 flex items-center justify-center min-h-screen"> 
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-semibold text-indigo-700 mb-6 text-center">Connexion</h2> 
            <form action="#" method="POST"> <div class="mb-4"> 
            <label for="email" class="block mb-1 text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400" required />
         </div> <div class="mb-6"> <label for="password" class="block mb-1 text-gray-600">
            Mot de passe</label>
             <input type="password" id="password" name="password" 
             class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400" 
             required /> 
            </div> 
            <button type="submit"
             class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition">
             Se connecter</button>
             </form>
              <p class="text-sm text-center text-gray-500 mt-4"> Pas encore de compte ? 
                <a href="register.html" class="text-indigo-600 hover:underline">S'inscrire</a>
             </p> 
            </div>
         </body> 
         </html>