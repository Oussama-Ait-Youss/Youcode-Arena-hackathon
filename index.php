<!DOCTYPE html>
<html lang="en" class="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YouCode Arena – Competition Hub</title>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<script>
tailwind.config = {
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        bg: '#070A10',
        panel: '#0E1624',
        border: '#1E293B',
        accent1: '#38BDF8',
        accent2: '#8B5CF6',
        accent3: '#F472B6',
        accent4: '#FACC15',
        danger: '#EF4444',
        success: '#22C55E'
      },
      fontFamily: {
        display: ['Teko', 'sans-serif'],
        sans: ['Inter', 'sans-serif']
      }
    }
  }
}
</script>

<style>
.gradient-text {
  background: linear-gradient(90deg, #38BDF8, #8B5CF6, #F472B6, #ff3d91);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>

</head>
<body class="bg-bg text-gray-100 font-sans min-h-screen relative overflow-x-hidden">

<!-- Background gradient + subtle pattern -->
<div class="absolute inset-0 bg-gradient-to-br from-[#070A10] via-[#0B0F14] to-[#0E1624] -z-10"></div>
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')] opacity-10 -z-10"></div>

<!-- NAV -->
<nav class="border-b border-border bg-bg/90 backdrop-blur-sm">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <div class="text-3xl font-display tracking-widest text-white">
      YOU <span class="gradient-text drop-shadow-lg">WIN</span>
    </div>
    <div class="hidden md:flex gap-10 text-lg font-medium text-gray-400 font-sans">
      <a class="text-white border-b-2 border-accent1 pb-1">Hub</a>
      <a href="tournaments.html" class="hover:text-white transition">Tournaments</a>
      <a href="profile.html" class="hover:text-white transition">Profile</a>
    </div>
    <div class="w-10 h-10 rounded-full bg-gray-700 relative">
      <span class="absolute -top-1 -right-1 w-3 h-3 rounded-full bg-success border-2 border-bg"></span>
    </div>
  </div>
</nav>

<main class="max-w-7xl mx-auto px-6 py-12 space-y-16">

  <!-- HERO BANNER -->
  <section>
    <div class="bg-gradient-to-r from-accent1 to-accent2 rounded-3xl p-1">
      <div class="bg-panel rounded-3xl p-10 flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden">
        <div class="flex-1">
          <h1 class="text-5xl md:text-6xl font-display gradient-text tracking-wide">Welcome to the Competition Hub</h1>
          <p class="text-gray-300 mt-4 text-lg md:text-xl font-sans">Find tournaments, view announcements, and track winners all in one place.</p>
        </div>
        <div class="w-48 h-48 md:w-60 md:h-60 bg-gray-700 rounded-2xl border-4 border-accent1"></div>
      </div>
    </div>
  </section>

  <!-- ANNOUNCEMENTS -->
  <section>
    <h2 class="text-4xl font-display gradient-text mb-6">Announcements</h2>
    <div class="space-y-6">
      <div class="bg-panel rounded-3xl p-8 border border-border hover:scale-[1.02] transition-transform cursor-pointer">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-full bg-gray-700"></div>
          <div>
            <div class="font-bold text-lg font-sans">Admin</div>
            <div class="text-xs text-gray-500">2 mins ago • Chess</div>
          </div>
        </div>
        <p class="text-gray-300 text-lg">The semi-finals for the Chess Blitz start at 14:00 PM. Be ready!</p>
        <div class="flex gap-6 border-t border-border mt-4 pt-3 text-xs text-gray-400">
          <span class="hover:text-white cursor-pointer">❤️ 12 Likes</span>
          <span class="hover:text-white cursor-pointer">💬 4 Comments</span>
        </div>
      </div>

      <div class="bg-panel rounded-3xl p-8 border border-border hover:scale-[1.02] transition-transform cursor-pointer">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-full bg-indigo-500"></div>
          <div>
            <div class="font-bold text-lg font-sans">Oussama_Dev</div>
            <div class="text-xs text-gray-500">1 hour ago • FIFA</div>
          </div>
        </div>
        <p class="text-gray-300 text-lg">Looking for a practice partner before the tournament? I'm in the lobby.</p>
      </div>
    </div>
  </section>

  <!-- CATEGORIES + LAST WINNER -->
  <section class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <aside class="bg-panel rounded-3xl p-6 border border-border hidden md:block sticky top-24">
      <h3 class="font-bold text-gray-400 uppercase text-xs mb-4">Categories</h3>
      <ul class="space-y-2">
        <li class="p-3 bg-gradient-to-r from-accent1 to-accent2 text-white rounded-2xl cursor-pointer font-bold">♟️ Chess</li>
        <li class="p-3 hover:bg-gray-800 text-gray-400 rounded-2xl cursor-pointer transition">⚽ FIFA 24</li>
        <li class="p-3 hover:bg-gray-800 text-gray-400 rounded-2xl cursor-pointer transition">🎱 Billiards</li>
      </ul>
    </aside>

    <section class="col-span-1 md:col-span-2 space-y-6">
      <div class="bg-panel rounded-3xl p-8 border border-border hover:scale-[1.02] transition-transform cursor-pointer">
        <div class="flex items-center gap-3 mb-3">
          <div class="w-10 h-10 rounded-full bg-gray-700"></div>
          <div>
            <div class="font-bold text-lg font-sans">Tournament of Champions</div>
            <div class="text-xs text-gray-500">Starts in 1 hour • FIFA</div>
          </div>
        </div>
        <p class="text-gray-300 text-lg">Get ready to compete in the FIFA 24 Winter Cup. Prizes await the winners!</p>
      </div>

      <div class="bg-panel rounded-3xl p-8 border border-border hover:scale-[1.02] transition-transform cursor-pointer">
        <div class="flex items-center gap-3 mb-3">
          <div class="w-10 h-10 rounded-full bg-indigo-500"></div>
          <div>
            <div class="font-bold text-lg font-sans">Chess Blitz</div>
            <div class="text-xs text-gray-500">16 Players • Chess</div>
          </div>
        </div>
        <p class="text-gray-300 text-lg">The fastest minds in chess battle it out in the Blitz tournament!</p>
      </div>
    </section>

    <aside class="bg-gradient-to-br from-accent4/40 to-gray-900 border border-accent4/50 rounded-3xl p-6 text-center hidden md:block">
      <div class="text-yellow-500 text-3xl mb-2">👑</div>
      <h3 class="font-display font-bold text-xl text-white">Last Winner</h3>
      <div class="w-32 h-32 bg-gray-700 rounded-full mx-auto my-3 border-4 border-accent4"></div>
      <div class="font-bold text-yellow-200">AmineManager</div>
      <div class="text-xs text-gray-400">Won 8-Ball Pool</div>
    </aside>
  </section>

</main>
</body>
</html>
