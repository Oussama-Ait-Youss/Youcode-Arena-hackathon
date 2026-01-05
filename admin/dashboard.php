<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>YouCode Arena – Management Portal</title>

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
      background: linear-gradient(90deg, #38BDF8, #8B5CF6, #F472B6);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>

<body class="bg-bg text-gray-100 font-sans min-h-screen flex">

<?php include '../includes/header.php'; ?>

<!-- MAIN -->
<main class="ml-64 flex-1 p-10 space-y-12">

  <!-- HEADER -->
  <div class="flex justify-between items-center">
    <div>
      <h1 class="text-6xl font-display tracking-wide gradient-text">
        System Overview
      </h1>
      <p class="text-gray-400 text-lg">
        Monitoring users, roles and platform activity
      </p>
    </div>

    <!-- ACTION BUTTON -->
    <button
  class="relative overflow-hidden group px-8 py-4
         text-2xl font-display tracking-widest text-white
         transition-all duration-300
         hover:-translate-y-1 active:scale-95">

  <span class="relative z-10 flex items-center gap-2">
    ⚡ SYSTEM PURGE
  </span>

  <!-- underline INSIDE button -->
  <span
    class="pointer-events-none absolute left-1/2 bottom-2 h-[3px] w-0
           -translate-x-1/2
           bg-gradient-to-r from-accent1 to-accent3
           transition-all duration-300
           group-hover:w-2/3">
  </span>

</button>

  </div>

  <!-- STATS -->
  <section class="grid grid-cols-1 md:grid-cols-4 gap-8">
    <div class="bg-panel border border-border rounded-xl p-8 hover:scale-105 transition">
      <div class="text-5xl font-display text-accent1">1,240</div>
      <div class="uppercase tracking-widest text-gray-400 mt-2">Total Users</div>
    </div>

    <div class="bg-panel border border-border rounded-xl p-8 hover:scale-105 transition">
      <div class="text-5xl font-display text-accent2">8</div>
      <div class="uppercase tracking-widest text-gray-400 mt-2">Organizers</div>
    </div>

    <div class="bg-panel border border-border rounded-xl p-8 hover:scale-105 transition">
      <div class="text-5xl font-display text-danger">3</div>
      <div class="uppercase tracking-widest text-gray-400 mt-2">Reports</div>
    </div>
  </section>

  <!-- TABLE -->
  <section class="bg-panel border border-border rounded-2xl overflow-hidden">
    <div class="px-6 py-4 font-display text-2xl tracking-wide">
      Recent Registrations
    </div>

    <table class="w-full text-left text-sm">
      <thead class="bg-white/5 uppercase tracking-widest text-gray-400">
        <tr>
          <th class="px-6 py-3">User</th>
          <th class="px-6 py-3">Role</th>
          <th class="px-6 py-3">Status</th>
          <th class="px-6 py-3 text-right">Action</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-border">
        <tr class="hover:bg-white/5 transition">
          <td class="px-6 py-4">Amine_Manager</td>
          <td class="px-6 py-4 text-accent2">Organizer</td>
          <td class="px-6 py-4 text-success">Active</td>
          <td class="px-6 py-4 text-right text-danger cursor-pointer hover:underline">
            Ban
          </td>
        </tr>

        <tr class="hover:bg-white/5 transition">
          <td class="px-6 py-4">Player_One</td>
          <td class="px-6 py-4">User</td>
          <td class="px-6 py-4 text-success">Active</td>
          <td class="px-6 py-4 text-right text-danger cursor-pointer hover:underline">
            Ban
          </td>
        </tr>
      </tbody>
    </table>
  </section>

</main>

</body>
</html>
