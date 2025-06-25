<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu - MaaserAPP</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 to-blue-600 min-h-screen flex items-center justify-center">
  <div class="bg-white p-10 rounded-2xl shadow-xl text-center w-full max-w-md">
    <h1 class="text-3xl font-bold text-indigo-600 mb-8">Menu MaaserAPP</h1>
     <h3 class="text-lg text-gray-700 mb-6">Bienvenue  <?php echo htmlspecialchars($_SESSION['user']['prenom']); ?> !</h3>
    <div class="space-y-4">
      <a href="index.php?uc=declarer_revenu" class="block w-full bg-indigo-600 text-white py-2 rounded-xl text-lg hover:bg-indigo-700 transition">Déclarer Mes Revenus</a>

      <a href="index.php?uc=declarer_don" class="block w-full bg-indigo-500 text-white py-2 rounded-xl text-lg hover:bg-indigo-600 transition">Déclarer Don</a>

      <a href="index.php?uc=personnaliser" class="block w-full bg-blue-500 text-white py-2 rounded-xl text-lg hover:bg-blue-600 transition">Personnaliser</a>

      <a href="index.php?uc=recap" class="block w-full bg-blue-400 text-white py-2 rounded-xl text-lg hover:bg-blue-500 transition">Visualiser le tableau de Synthèse</a>
    </div>
  </div>
</body>
</html>

