<?php include_once "../PostRequestManager.php"; 
session_start();
$users = new userRepo()->findAll();
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouGame Arena – Management Portal</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        bg: '#050505',
                        'bg-soft': '#0B0F19',
                        panel: 'rgba(20, 25, 40, 0.6)', // Glass
                        border: 'rgba(255, 255, 255, 0.1)',
                        crimson: '#DC143C',
                        cyan: '#00F0FF',
                        gold: '#FFD700',
                        violet: '#8B5CF6',
                        success: '#22C55E'
                    },
                    fontFamily: {
                        display: ['Teko', 'sans-serif'],
                        sans: ['Outfit', 'sans-serif']
                    },
                    boxShadow: {
                        'neon': '0 0 20px rgba(220, 20, 60, 0.5)',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #050505;
             background-image: 
                radial-gradient(circle at 15% 50%, rgba(220, 20, 60, 0.08) 0%, transparent 25%), 
                radial-gradient(circle at 85% 30%, rgba(0, 240, 255, 0.05) 0%, transparent 25%);
        }
        .glass {
            background: rgba(15, 20, 30, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
         .glass-card {
            background: linear-gradient(145deg, rgba(20, 25, 35, 0.7), rgba(10, 12, 18, 0.8));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .clip-path-slant {
            clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
        }
    </style>
</head>

<body class="font-sans min-h-screen relative flex text-gray-200 overflow-hidden">

    <!-- SIDEBAR -->
    <aside class="w-72 glass border-r border-white/5 flex flex-col fixed inset-y-0 left-0 z-20">
        <!-- Logo -->
        <div class="h-24 flex items-center justify-center border-b border-white/5">
             <div class="text-3xl font-display font-bold text-white tracking-widest">
                YOU<span class="text-crimson">ADMIN</span>
            </div>
        </div>

        <!-- Nav -->
        <nav class="flex-1 p-6 space-y-2">
            <div class="text-xs text-gray-500 font-bold uppercase tracking-widest mb-4">Core</div>
            
            <a class="flex items-center px-4 py-3 rounded-xl bg-crimson/10 border border-crimson/20 text-white group cursor-pointer">
                <span class="text-xl mr-3 group-hover:scale-110 transition">📊</span>
                <span class="font-bold tracking-wide">Overview</span>
            </a>

             <a class="flex items-center px-4 py-3 rounded-xl hover:bg-white/5 text-gray-400 hover:text-white transition cursor-pointer">
                <span class="text-xl mr-3">👥</span>
                <span class="font-bold tracking-wide">Users</span>
            </a>
            
            <a class="flex items-center px-4 py-3 rounded-xl hover:bg-white/5 text-gray-400 hover:text-white transition cursor-pointer">
                <span class="text-xl mr-3">🏆</span>
                <span class="font-bold tracking-wide">Tournaments</span>
            </a>

             <div class="text-xs text-gray-500 font-bold uppercase tracking-widest mt-8 mb-4">System</div>

             <a class="flex items-center px-4 py-3 rounded-xl hover:bg-white/5 text-gray-400 hover:text-white transition cursor-pointer">
                <span class="text-xl mr-3">⚙️</span>
                <span class="font-bold tracking-wide">Settings</span>
            </a>
            
            <a href="../index.php" class="flex items-center px-4 py-3 rounded-xl hover:bg-white/5 text-gray-400 hover:text-white transition cursor-pointer mt-10">
                <span class="text-xl mr-3">↩️</span>
                <span class="font-bold tracking-wide">Back to Hub</span>
            </a>
        </nav>

        <!-- Profile -->
        <div class="p-6 border-t border-white/5">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded bg-crimson flex items-center justify-center font-bold text-black font-display text-xl">
                    SA
                </div>
                <div>
                     <div class="text-sm font-bold text-white leading-none">Super Admin</div>
                     <div class="text-[10px] text-green-500 font-bold uppercase tracking-widest mt-1">● Online</div>
                </div>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 ml-72 p-10 overflow-y-auto h-screen relative z-10">
        
        <!-- Header -->
        <header class="flex justify-between items-end mb-12">
            <div>
                <h1 class="text-5xl font-display font-bold text-white tracking-wide">DASHBOARD</h1>
                <p class="text-gray-400 mt-2">Welcome back, Commander.</p>
            </div>
            <button class="px-6 py-3 bg-white/5 hover:bg-crimson/20 border border-white/10 hover:border-crimson text-crimson font-bold tracking-widest rounded transition-all flex items-center gap-2">
                <span class="animate-pulse">●</span> PURGE CACHE
            </button>
        </header>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="glass-card p-8 rounded-2xl relative overflow-hidden group">
                <div class="absolute right-0 top-0 p-8 opacity-10 group-hover:opacity-20 transition transform group-hover:scale-110">
                     <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <div class="text-5xl font-display font-bold text-white mb-2">1,240</div>
                <div class="text-xs text-gray-400 font-bold uppercase tracking-widest">Total Users</div>
                <div class="mt-4 text-green-500 text-sm font-mono">▲ 12% this week</div>
            </div>

             <div class="glass-card p-8 rounded-2xl relative overflow-hidden group">
                <div class="text-5xl font-display font-bold text-gold mb-2">8</div>
                <div class="text-xs text-gray-400 font-bold uppercase tracking-widest">Active Organizers</div>
                <div class="mt-4 text-gray-500 text-sm font-mono">All systems nominal</div>
            </div>

             <div class="glass-card p-8 rounded-2xl relative overflow-hidden group">
                <div class="text-5xl font-display font-bold text-crimson mb-2">3</div>
                <div class="text-xs text-gray-400 font-bold uppercase tracking-widest">Pending Reports</div>
                <div class="mt-4 text-crimson text-sm font-mono">Requires action</div>
            </div>
        </div>

        <!-- Recent Activity Table -->
        <section class="glass-card rounded-2xl overflow-hidden border border-white/5">
            <div class="p-6 border-b border-white/5 flex justify-between items-center">
                <h3 class="font-display font-bold text-xl text-white tracking-wide">RECENT REGISTRATIONS</h3>
                <div class="flex gap-2">
                    <button class="w-8 h-8 rounded bg-white/5 flex items-center justify-center text-gray-400 hover:text-white transition">←</button>
                    <button class="w-8 h-8 rounded bg-white/5 flex items-center justify-center text-gray-400 hover:text-white transition">→</button>
                </div>
            </div>
            
            <table class="w-full text-left">
                <thead class="bg-white/5 text-xs text-gray-500 uppercase tracking-widest font-bold">
                    <tr>
                        <th class="px-6 py-4">User</th>
                        <th class="px-6 py-4">Role</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5 text-sm text-gray-300">
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-4 font-bold text-white">Amine_Manager</td>
                        <td class="px-6 py-4 text-gold">Organizer</td>
                        <td class="px-6 py-4"><span class="bg-green-500/10 text-green-500 px-2 py-1 rounded text-xs font-bold uppercase border border-green-500/20">Active</span></td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-gray-500 hover:text-white transition mr-2">Edit</button>
                            <button class="text-crimson hover:text-red-400 transition">Ban</button>
                        </td>
                    </tr>
                     <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-4 font-bold text-white">Player_One</td>
                        <td class="px-6 py-4">User</td>
                        <td class="px-6 py-4"><span class="bg-green-500/10 text-green-500 px-2 py-1 rounded text-xs font-bold uppercase border border-green-500/20">Active</span></td>
                         <td class="px-6 py-4 text-right">
                            <button class="text-gray-500 hover:text-white transition mr-2">Edit</button>
                            <button class="text-crimson hover:text-red-400 transition">Ban</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-4 font-bold text-white">Suspicious_User</td>
                        <td class="px-6 py-4">User</td>
                        <td class="px-6 py-4"><span class="bg-crimson/10 text-crimson px-2 py-1 rounded text-xs font-bold uppercase border border-crimson/20">Flagged</span></td>
                         <td class="px-6 py-4 text-right">
                            <button class="text-gray-500 hover:text-white transition mr-2">Edit</button>
                            <button class="text-crimson hover:text-red-400 transition">Ban</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>

</body>
</html>
