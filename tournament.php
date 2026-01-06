<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouGame Arena – Tournaments</title>

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
                    },
                    fontFamily: {
                        display: ['Teko', 'sans-serif'],
                        sans: ['Outfit', 'sans-serif']
                    },
                    backgroundImage: {
                        'grid-pattern': "url('https://www.transparenttextures.com/patterns/carbon-fibre.png')",
                        'neon-gradient': 'linear-gradient(135deg, rgba(220, 20, 60, 0.1), rgba(0, 0, 0, 0))',
                    },
                    boxShadow: {
                        'neon': '0 0 20px rgba(220, 20, 60, 0.5)',
                        'cyan-glow': '0 0 15px rgba(0, 240, 255, 0.4)',
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

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #050505;
        }
        ::-webkit-scrollbar-thumb {
            background: #1f2937;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #DC143C;
        }

        .glass {
            background: rgba(15, 20, 30, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .glass-card {
            background: linear-gradient(145deg, rgba(20, 25, 35, 0.7), rgba(10, 12, 18, 0.8));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            border-color: rgba(220, 20, 60, 0.4);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5), 0 0 20px rgba(220, 20, 60, 0.2);
        }

        .text-glow {
            text-shadow: 0 0 10px rgba(220, 20, 60, 0.5);
        }

        .clip-path-slant {
            clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
        }
    </style>
</head>

<body class="text-gray-200 font-sans min-h-screen relative selection:bg-crimson selection:text-white overflow-x-hidden">

    <!-- HEX PATTERN OVERLAY -->
    <div class="fixed inset-0 z-0 opacity-20 pointer-events-none" 
         style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');">
    </div>

    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50 glass border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <!-- LOGO -->
            <a href="index.php" class="flex items-center gap-2 group">
                <div class="w-10 h-10 bg-crimson flex items-center justify-center transform skew-x-[-10deg]">
                    <span class="font-display font-bold text-black text-2xl transform skew-x-[10deg]">Y</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-display font-bold tracking-widest leading-none text-white group-hover:text-crimson transition-colors">YOUGAME</span>
                    <span class="text-xs font-display tracking-[0.3em] text-gray-500 group-hover:text-white transition-colors">ARENA</span>
                </div>
            </a>

            <!-- LINKS -->
            <div class="hidden md:flex items-center gap-8">
                <a href="index.php" class="text-gray-400 hover:text-white font-display tracking-wider text-lg transition-colors">HUB</a>
                <a href="tournament.php" class="text-white font-display tracking-wider text-lg relative">
                    TOURNAMENTS
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-crimson shadow-neon"></span>
                </a>
                <a href="profile.php" class="text-gray-400 hover:text-white font-display tracking-wider text-lg transition-colors">PROFILE</a>
            </div>

            <!-- USER MENU -->
            <div class="flex items-center gap-4">
                 <div class="hidden md:block text-right mr-2">
                    <div class="text-xs text-crimson font-bold tracking-wider">ONLINE</div>
                    <div class="text-sm font-bold text-white font-display tracking-wide">PLAYER_ONE</div>
                </div>
                <div class="w-12 h-12 rounded-sm border border-gray-700 p-0.5 relative cursor-pointer hover:border-crimson transition-colors">
                    <img src="https://ui-avatars.com/api/?name=Player+One&background=0D0D0D&color=fff" alt="User" class="w-full h-full object-cover">
                    <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 border-2 border-black transform rotate-45"></div>
                </div>
            </div>
        </div>
    </nav>

    <main class="relative z-10 pt-32 pb-20 max-w-7xl mx-auto px-6">
        
        <!-- HEADER -->
        <header class="mb-16 flex flex-col md:flex-row justify-between items-end gap-6">
            <div>
                 <h1 class="text-6xl md:text-8xl font-display font-bold text-white leading-none drop-shadow-lg">
                    ACTIVE <span class="text-transparent bg-clip-text bg-gradient-to-r from-crimson to-violet text-glow">EVENTS</span>
                </h1>
                <p class="text-gray-400 text-xl mt-4 font-light max-w-2xl">
                    Join the battle. Climb the ladder. Become a legend.
                </p>
            </div>
            
            <!-- Filter Toggles -->
            <div class="flex bg-black/40 backdrop-blur rounded p-1 border border-white/5">
                <button class="px-6 py-2 bg-crimson text-white font-display font-bold tracking-wider rounded-sm shadow-neon">ALL</button>
                <button class="px-6 py-2 text-gray-400 hover:text-white font-display font-bold tracking-wider transition-colors">FPS</button>
                <button class="px-6 py-2 text-gray-400 hover:text-white font-display font-bold tracking-wider transition-colors">MOBA</button>
                <button class="px-6 py-2 text-gray-400 hover:text-white font-display font-bold tracking-wider transition-colors">SPORTS</button>
            </div>
        </header>

        <!-- TOURNAMENT GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- CARD 1: OPEN -->
            <div class="glass-card rounded-2xl overflow-hidden group relative">
                <!-- Image -->
                <div class="h-48 relative overflow-hidden bg-gray-900 border-b border-white/5">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2670&auto=format&fit=crop" class="w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-100" alt="Game">
                    <div class="absolute top-4 right-4 bg-green-500/20 border border-green-500 text-green-400 text-[10px] font-bold px-2 py-1 uppercase tracking-widest backdrop-blur-md">
                        Open for Entry
                    </div>
                </div>
                
                <!-- Body -->
                <div class="p-6 relative">
                     <div class="absolute -top-3 left-6">
                        <div class="w-10 h-10 bg-black border border-white/10 flex items-center justify-center rounded">
                             <span class="text-xl">⚽</span>
                        </div>
                    </div>

                    <h3 class="text-3xl font-display font-bold text-white mt-4 group-hover:text-crimson transition-colors">FIFA Winter Cup</h3>
                    <p class="text-gray-500 text-sm font-light mb-6">Ranked Knockout • 32 Slots</p>

                    <div class="space-y-4">
                        <!-- Progress -->
                        <div>
                            <div class="flex justify-between text-xs font-mono text-gray-400 mb-1">
                                <span>PLAYERS</span>
                                <span class="text-white">12 / 32</span>
                            </div>
                            <div class="h-1.5 w-full bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-emerald-400 w-[37%]"></div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between border-t border-white/5 pt-4">
                            <span class="text-gold font-display text-xl font-bold">$500 PRIZE</span>
                            <button class="px-4 py-2 bg-white/5 hover:bg-crimson text-white text-sm font-bold tracking-widest border border-white/10 hover:border-crimson transition-all clip-path-slant">
                                JOIN NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2: STARTING SOON -->
            <div class="glass-card rounded-2xl overflow-hidden group relative">
                 <div class="h-48 relative overflow-hidden bg-gray-900 border-b border-white/5">
                     <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent z-10"></div>
                     <img src="https://images.unsplash.com/photo-1610890716271-e2fe9e9b0d6b?q=80&w=2670&auto=format&fit=crop" class="w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-100" alt="Chess">
                      <div class="absolute top-4 right-4 bg-gold/20 border border-gold text-gold text-[10px] font-bold px-2 py-1 uppercase tracking-widest backdrop-blur-md z-20">
                        Starting Soon
                    </div>
                </div>

                <div class="p-6 relative">
                     <div class="absolute -top-3 left-6 z-20">
                        <div class="w-10 h-10 bg-black border border-white/10 flex items-center justify-center rounded">
                             <span class="text-xl">♟️</span>
                        </div>
                    </div>

                    <h3 class="text-3xl font-display font-bold text-white mt-4 group-hover:text-crimson transition-colors relative z-20">Chess Blitz</h3>
                    <p class="text-gray-500 text-sm font-light mb-6">Rapid Format • 16 Slots</p>

                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-xs font-mono text-gray-400 mb-1">
                                <span>PLAYERS</span>
                                <span class="text-crimson">FULL</span>
                            </div>
                            <div class="h-1.5 w-full bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-crimson w-full"></div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between border-t border-white/5 pt-4">
                            <span class="text-gold font-display text-xl font-bold">$100 PRIZE</span>
                            <button class="px-4 py-2 bg-gray-800 text-gray-500 text-sm font-bold tracking-widest border border-white/5 cursor-not-allowed clip-path-slant" disabled>
                                LOCKED
                            </button>
                        </div>
                    </div>
                </div>
            </div>

             <!-- CARD 3: UPCOMING -->
            <div class="glass-card rounded-2xl overflow-hidden group relative">
                 <div class="h-48 relative overflow-hidden bg-gray-900 border-b border-white/5">
                     <img src="https://images.unsplash.com/photo-1542751110-97427bbecf20?q=80&w=2574&auto=format&fit=crop" class="w-full h-full object-cover transition duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-100 grayscale hover:grayscale-0" alt="Valorant">
                      <div class="absolute top-4 right-4 bg-purple-500/20 border border-purple-500 text-purple-400 text-[10px] font-bold px-2 py-1 uppercase tracking-widest backdrop-blur-md">
                        Registration Closed
                    </div>
                </div>

                <div class="p-6 relative">
                     <div class="absolute -top-3 left-6">
                        <div class="w-10 h-10 bg-black border border-white/10 flex items-center justify-center rounded">
                             <span class="text-xl">🎯</span>
                        </div>
                    </div>

                    <h3 class="text-3xl font-display font-bold text-white mt-4 group-hover:text-cyan transition-colors">Valorant Night</h3>
                    <p class="text-gray-500 text-sm font-light mb-6">5v5 Teams • 8 Slots</p>

                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-xs font-mono text-gray-400 mb-1">
                                <span>TEAMS</span>
                                <span class="text-white">8 / 8</span>
                            </div>
                            <div class="h-1.5 w-full bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-purple-500 w-full"></div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between border-t border-white/5 pt-4">
                            <span class="text-gold font-display text-xl font-bold">$1000 PRIZE</span>
                            <button class="px-4 py-2 bg-white/5 text-gray-400 text-sm font-bold tracking-widest border border-white/10 hover:text-white transition-all clip-path-slant">
                                DETAILS
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- LOAD MORE -->
        <div class="mt-16 text-center">
            <button class="px-8 py-3 rounded-full border border-white/10 text-gray-400 font-bold hover:bg-white/5 hover:text-white transition-all hover:border-crimson/50">
                LOAD MORE EVENTS
            </button>
        </div>

    </main>

    <footer class="border-t border-white/5 bg-black py-12">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="text-gray-600 text-sm font-light">
                © 2024 YouGame Arena
            </div>
        </div>
    </footer>

</body>
</html>
