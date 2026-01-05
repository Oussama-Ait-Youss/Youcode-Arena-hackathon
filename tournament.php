<!DOCTYPE html>
<html lang="en" class="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YouCode Arena – Tournaments</title>

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

<!-- background -->
<div class="absolute inset-0 bg-gradient-to-br from-[#070A10] via-[#0B0F14] to-[#0E1624] -z-10"></div>
<div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')] opacity-10 -z-10"></div>

<!-- NAV -->
<nav class="border-b border-border bg-bg/90 backdrop-blur-sm">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <div class="text-3xl font-display tracking-widest">
      YOU <span class="gradient-text">WIN</span>
    </div>

    <div class="hidden md:flex gap-10 text-lg font-medium text-gray-400">
      <a href="hub.html" class="hover:text-white transition">Hub</a>
      <a class="text-white border-b-2 border-accent1 pb-1">Tournaments</a>
      <a href="profile.html" class="hover:text-white transition">Profile</a>
    </div>

    <div class="w-10 h-10 rounded-full bg-gray-700 relative">
      <span class="absolute -top-1 -right-1 w-3 h-3 rounded-full bg-success border-2 border-bg"></span>
    </div>
  </div>
</nav>

<main class="max-w-7xl mx-auto px-6 py-12 space-y-12">

  <!-- HEADER -->
  <section class="space-y-4">
    <h1 class="text-6xl font-display tracking-widest gradient-text">
      TOURNAMENTS
    </h1>
    <p class="text-xl text-gray-400 max-w-2xl">
      Enter competitive events, test your skills, and climb the arena rankings.
    </p>

    <!-- FILTERS -->
    
  </section>

  <!-- TOURNAMENT GRID -->
  <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

    <!-- CARD : OPEN -->
    <div class="group bg-panel border border-border rounded-3xl overflow-hidden
                hover:-translate-y-1 transition-all duration-300">

      <!-- top gradient edge -->
      <div class="h-1 bg-gradient-to-r from-accent1 to-accent3"></div>

      <div class="p-8 space-y-6">

        <span class="inline-block px-4 py-1 text-sm font-bold tracking-widest
                     border border-success text-success rounded-lg">
          OPEN
        </span>

        <h3 class="text-4xl font-display tracking-wide gradient-text">
          FIFA 24 WINTER CUP
        </h3>

        <p class="text-gray-400">
          Ranked knockout • Competitive format
        </p>

        <div class="flex justify-between items-center pt-4 text-gray-300 text-sm">
          <span>12 / 32 Players</span>
          <span>⚽ Sports</span>
        </div>

        <div class="pt-4">
          <button
            class="relative group font-display tracking-widest text-lg
                   transition-all duration-300
                   hover:-translate-y-1 active:scale-95">

            JOIN

            <span
              class="absolute left-1/2 -bottom-1 h-[3px] w-0
                     bg-gradient-to-r from-accent1 to-accent3
                     transition-all duration-300
                     group-hover:w-full group-hover:left-0">
            </span>
          </button>
        </div>

      </div>
    </div>

    <!-- CARD : STARTING -->
    <div class="bg-panel border border-border rounded-3xl overflow-hidden">

      <div class="h-1 bg-gradient-to-r from-accent4 to-accent2"></div>

      <div class="p-8 space-y-6">

        <span class="inline-block px-4 py-1 text-sm font-bold tracking-widest
                     border border-accent4 text-accent4 rounded-lg">
          STARTING
        </span>

        <h3 class="text-4xl font-display tracking-wide text-white">
          CHESS BLITZ
        </h3>

        <p class="text-gray-400">
          High-speed 3-minute rounds
        </p>

        <div class="flex justify-between items-center pt-4 text-gray-300 text-sm">
          <span>16 / 16 Players</span>
          <span>♟ Strategy</span>
        </div>

        <div class="pt-4 text-gray-500 font-display tracking-widest">
          FULL
        </div>

      </div>
    </div>

    <!-- CARD : UPCOMING -->
    <div class="bg-panel border border-border rounded-3xl overflow-hidden">

      <div class="h-1 bg-gradient-to-r from-accent2 to-accent3"></div>

      <div class="p-8 space-y-6">

        <span class="inline-block px-4 py-1 text-sm font-bold tracking-widest
                     border border-accent2 text-accent2 rounded-lg">
          UPCOMING
        </span>

        <h3 class="text-4xl font-display tracking-wide text-white">
          VALORANT NIGHT CUP
        </h3>

        <p class="text-gray-400">
          Team-based elimination
        </p>

        <div class="flex justify-between items-center pt-4 text-gray-300 text-sm">
          <span>8 / 16 Teams</span>
          <span>🎯 FPS</span>
        </div>

        <div class="pt-4 text-gray-400 font-display tracking-widest">
          REGISTRATION SOON
        </div>

      </div>
    </div>

  </section>

</main>
</body>
</html>
