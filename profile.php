<!DOCTYPE html>
<html lang="en" class="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YouCode Arena – Player Profile</title>

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
        display: ['Teko', 'sans-serif'], // keep your display font
        sans: ['Inter', 'sans-serif']     // keep your body font
      }
    }
  }
}
</script>

<style>
.gradient-text {
  background: linear-gradient(90deg, #38BDF8, #8B5CF6, #F472B6, #ff3d91);-webkit-background-clip: text;
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
      <a href="hub.html" class="hover:text-white transition">Hub</a>
      <a href="tournaments.html" class="hover:text-white transition">Tournaments</a>
      <a class="text-white border-b-2 border-accent1 pb-1">Profile</a>
    </div>
    <div class="w-10 h-10 rounded-full bg-gray-700 relative">
      <span class="absolute -top-1 -right-1 w-3 h-3 rounded-full bg-success border-2 border-bg"></span>
    </div>
  </div>
</nav>

<main class="max-w-7xl mx-auto px-6 py-12 space-y-16">

  <!-- HERO PLAYER CARD -->
  <section class="relative">
    <div class="bg-gradient-to-r from-accent1 to-accent2 rounded-3xl p-1 relative z-10">
      <div class="bg-panel rounded-3xl flex items-center gap-10 p-10 relative overflow-hidden">
        <div class="relative w-36 h-36">
          <div class="w-36 h-36 rounded-full bg-gray-700 border-4 border-accent1"></div>
          <span class="absolute -bottom-2 -right-2 w-6 h-6 rounded-full bg-success border-2 border-panel"></span>
        </div>
        <div>
          <h1 class="text-7xl font-display tracking-wide gradient-text">Otmane Mellouki</h1>
          <p class="text-2xl text-gray-300 mt-2 font-sans">LEVEL 5 • STRIKER</p>
          <span class="inline-block mt-5 px-6 py-2 text-lg font-semibold tracking-widest border border-accent1 text-accent1 uppercase rounded-lg font-sans">
            Ranked Player
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="grid grid-cols-2 md:grid-cols-4 gap-8">
    <div class="bg-panel border border-border rounded-xl p-10 hover:scale-105 transition-transform cursor-pointer">
      <div class="text-7xl font-display text-accent1">5</div>
      <div class="text-xl uppercase tracking-widest text-gray-300 mt-3 font-sans">Wins</div>
    </div>
    <div class="bg-panel border border-border rounded-xl p-10 hover:scale-105 transition-transform cursor-pointer">
      <div class="text-7xl font-display text-danger">6</div>
      <div class="text-xl uppercase tracking-widest text-gray-300 mt-3 font-sans">Losses</div>
    </div>
    <div class="bg-panel border border-border rounded-xl p-10 hover:scale-105 transition-transform cursor-pointer">
      <div class="text-7xl font-display text-accent3">12</div>
      <div class="text-xl uppercase tracking-widest text-gray-300 mt-3 font-sans">Matches Played</div>
    </div>
    <div class="bg-panel border border-border rounded-xl p-10 hover:scale-105 transition-transform cursor-pointer">
      <div class="text-7xl font-display text-accent4">8</div>
      <div class="text-xl uppercase tracking-widest text-gray-300 mt-3 font-sans">Achievements</div>
    </div>
  </section>

  <!-- MATCH CARD -->
  <section>
    <h2 class="text-4xl font-display tracking-wide mb-6 gradient-text">Upcoming Match</h2>
    <div class="bg-gradient-to-r from-accent1 to-accent3 rounded-3xl p-1">
      <div class="bg-panel rounded-3xl p-12 flex flex-col md:flex-row items-center justify-between relative overflow-hidden gap-8">
        <!-- YOU -->
        <div class="text-center relative">
          <div class="w-36 h-36 rounded-full bg-gray-700 mx-auto mb-4 border-4 border-accent1"></div>
          <div class="text-3xl font-display tracking-wide gradient-text">YOU</div>
        </div>
        <!-- VS -->
        <div class="text-center">
          <div class="text-7xl font-display tracking-widest gradient-text drop-shadow-lg">VS</div>
          <div class="text-2xl uppercase tracking-wider text-gray-300 mt-3 font-sans">Chess • Table 3</div>
        </div>
        <!-- OPPONENT -->
        <div class="text-center relative">
          <div class="w-36 h-36 rounded-full bg-gray-700 mx-auto mb-4 border-4 border-danger"></div>
          <div class="text-3xl font-display tracking-wide text-danger">Yassine</div>
        </div>
      </div>


      <div class="mt-6 text-center">
       <button
  class="relative group w-2/3 md:w-1/3 py-5
         text-4xl font-display tracking-widest
         text-bg
         transition-all duration-300
         hover:-translate-y-1
         active:translate-y-0 active:scale-95 active:text-white">

  CONFIRM PRESENCE

  <!-- underline -->
  <span
    class="absolute left-1/2 -bottom-1 h-[3px] w-0
           bg-gradient-to-r from-accent1 to-accent3
           transition-all duration-300
           group-hover:w-2/3 group-hover:left-1/6">
  </span>

  <!-- glow -->
 

</button>


      </div>
    </div>
  </section>

</main>
</body>
</html>
