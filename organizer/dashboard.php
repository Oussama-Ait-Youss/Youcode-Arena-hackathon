<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouGame Arena – My Tournaments</title>

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
                        success: '#22C55E',
                        warning: '#FACC15'
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
            transition: all 0.3s ease;
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
                YOU<span class="text-crimson">GAME</span>
            </div>
        </div>

        <!-- Nav -->
        <nav class="flex-1 p-6 space-y-2">
            <a href="#" class="flex items-center px-4 py-3 rounded-xl bg-crimson/10 border border-crimson/20 text-white group cursor-pointer">
                <span class="text-xl mr-3">🏆</span>
                <span class="font-bold tracking-wide">My Tournaments</span>
            </a>
            
            <a href="createTour.php" class="flex items-center px-4 py-3 rounded-xl hover:bg-white/5 text-gray-400 hover:text-white transition cursor-pointer">
                <span class="text-xl mr-3 group-hover:scale-110 transition">➕</span>
                <span class="font-bold tracking-wide">Create Tournament</span>
            </a>

            <a href="index.php" class="flex items-center px-4 py-3 rounded-xl hover:bg-white/5 text-gray-400 hover:text-white transition cursor-pointer mt-10">
                <span class="text-xl mr-3">↩️</span>
                <span class="font-bold tracking-wide">Back to Hub</span>
            </a>
        </nav>

        <!-- Profile -->
        <div class="p-6 border-t border-white/5">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded bg-gray-800 flex items-center justify-center font-bold text-gray-400 font-display text-xl border border-white/10">
                    AM
                </div>
                <div>
                     <div class="text-sm font-bold text-white leading-none">Amine Manager</div>
                     <div class="text-[10px] text-violet font-bold uppercase tracking-widest mt-1">Organizer</div>
                </div>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 ml-72 p-12 overflow-y-auto h-screen relative z-10">
        
        <!-- HEADER -->
        <header class="flex justify-between items-center mb-12">
            <div>
                <h1 class="text-6xl font-display font-bold text-white tracking-wide">
                    MY <span class="text-crimson">TOURNAMENTS</span>
                </h1>
                <p class="text-gray-400 text-lg mt-2 font-light">
                    Manage your competitions and brackets
                </p>
            </div>

            <a href="createTour.php" class="px-8 py-4 bg-crimson hover:bg-red-700 text-white font-display font-bold text-2xl tracking-widest clip-path-slant shadow-neon transition transform hover:-translate-y-1">
                CREATE NEW
            </a>
        </header>

        <!-- STATS -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div class="glass-card p-6 rounded-2xl border-l-4 border-crimson">
                <div class="text-4xl font-display font-bold text-white">3</div>
                <div class="text-xs text-gray-400 uppercase tracking-widest mt-1">Total Events</div>
            </div>
             <div class="glass-card p-6 rounded-2xl border-l-4 border-success">
                <div class="text-4xl font-display font-bold text-success">1</div>
                <div class="text-xs text-gray-400 uppercase tracking-widest mt-1">In Progress</div>
            </div>
             <div class="glass-card p-6 rounded-2xl border-l-4 border-warning">
                <div class="text-4xl font-display font-bold text-warning">1</div>
                <div class="text-xs text-gray-400 uppercase tracking-widest mt-1">Open</div>
            </div>
             <div class="glass-card p-6 rounded-2xl border-l-4 border-gray-500">
                <div class="text-4xl font-display font-bold text-gray-400">1</div>
                <div class="text-xs text-gray-500 uppercase tracking-widest mt-1">Completed</div>
            </div>
        </section>

        <!-- TOURNAMENT LIST -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- CARD 1 -->
            <div class="glass-card p-8 rounded-2xl group relative hover:border-crimson/50 transition duration-300">
                <div class="absolute top-4 right-4 bg-success/10 text-success border border-success/20 px-3 py-1 rounded text-[10px] font-bold uppercase tracking-widest">
                    In Progress
                </div>
                
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-gray-800 rounded-lg flex items-center justify-center text-3xl border border-white/10">
                        ♟️
                    </div>
                    <div>
                        <h3 class="text-3xl font-display font-bold text-white group-hover:text-crimson transition">Chess Blitz Arena</h3>
                        <div class="text-gray-500 text-sm">Strategy • On-site</div>
                    </div>
                </div>

                <div class="w-full bg-gray-800 h-1.5 rounded-full mb-6 overflow-hidden">
                    <div class="h-full bg-success w-full"></div>
                </div>

                <div class="flex justify-between items-center border-t border-white/5 pt-4">
                     <div class="text-sm">
                        <span class="text-gray-500 uppercase text-[10px] tracking-widest block">Prize Pool</span>
                        <span class="text-gold font-bold">2,000 MAD</span>
                    </div>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 bg-white/5 hover:text-white text-gray-400 text-sm font-bold tracking-wider rounded border border-white/5 transition">VIEW</button>
                        <button class="px-4 py-2 bg-crimson/10 text-crimson hover:bg-crimson hover:text-white text-sm font-bold tracking-wider rounded border border-crimson/20 transition">MANAGE</button>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="glass-card p-8 rounded-2xl group relative hover:border-crimson/50 transition duration-300">
                <div class="absolute top-4 right-4 bg-warning/10 text-warning border border-warning/20 px-3 py-1 rounded text-[10px] font-bold uppercase tracking-widest">
                    Open
                </div>
                
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-gray-800 rounded-lg flex items-center justify-center text-3xl border border-white/10">
                        🎯
                    </div>
                    <div>
                        <h3 class="text-3xl font-display font-bold text-white group-hover:text-crimson transition">Valorant Night Cup</h3>
                        <div class="text-gray-500 text-sm">FPS • Online</div>
                    </div>
                </div>

                 <div class="w-full bg-gray-800 h-1.5 rounded-full mb-6 overflow-hidden">
                    <div class="h-full bg-warning w-[60%]"></div>
                </div>

                <div class="flex justify-between items-center border-t border-white/5 pt-4">
                     <div class="text-sm">
                        <span class="text-gray-500 uppercase text-[10px] tracking-widest block">Prize Pool</span>
                        <span class="text-gold font-bold">5,000 MAD</span>
                    </div>
                    <div class="flex gap-2">
                         <button class="px-4 py-2 bg-white/5 hover:text-white text-gray-400 text-sm font-bold tracking-wider rounded border border-white/5 transition">EDIT</button>
                        <button class="px-4 py-2 bg-crimson/10 text-crimson hover:bg-crimson hover:text-white text-sm font-bold tracking-wider rounded border border-crimson/20 transition">MANAGE</button>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="glass-card p-8 rounded-2xl group relative opacity-70 hover:opacity-100 transition duration-300">
                 <div class="absolute top-4 right-4 bg-gray-700/50 text-gray-400 border border-white/5 px-3 py-1 rounded text-[10px] font-bold uppercase tracking-widest">
                    Completed
                </div>
                
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-gray-800 rounded-lg flex items-center justify-center text-3xl border border-white/10">
                        ⚽
                    </div>
                    <div>
                        <h3 class="text-3xl font-display font-bold text-white group-hover:text-gray-300 transition">FIFA Winter Cup</h3>
                        <div class="text-gray-500 text-sm">Sports • On-site</div>
                    </div>
                </div>

                <div class="bg-gray-800/50 p-3 rounded mb-6 flex items-center gap-3 border border-white/5">
                    <span class="text-xl">👑</span>
                    <div>
                        <div class="text-[10px] text-gray-500 uppercase tracking-widest">Winner</div>
                        <div class="font-bold text-white">Yassine</div>
                    </div>
                </div>

                <div class="flex justify-between items-center border-t border-white/5 pt-4">
                     <div class="text-sm">
                        <span class="text-gray-500 uppercase text-[10px] tracking-widest block">Prize Pool</span>
                        <span class="text-gray-400 font-bold">1,000 MAD</span>
                    </div>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 bg-white/5 hover:text-white text-gray-400 text-sm font-bold tracking-wider rounded border border-white/5 transition">RESULTS</button>
                    </div>
                </div>
            </div>

        </div>

    </main>
</body>
</html>
