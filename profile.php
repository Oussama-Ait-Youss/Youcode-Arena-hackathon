<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouGame Arena – Player Profile</title>

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
                    backgroundImage: {
                        'grid-pattern': "url('https://www.transparenttextures.com/patterns/carbon-fibre.png')",
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

        .text-glow {
            text-shadow: 0 0 10px rgba(220, 20, 60, 0.5);
        }

        .clip-path-slant {
            clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
        }

         .clip-path-hex {
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
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
                <a href="tournament.php" class="text-gray-400 hover:text-white font-display tracking-wider text-lg transition-colors">TOURNAMENTS</a>
                <a href="profile.php" class="text-white font-display tracking-wider text-lg relative">
                    PROFILE
                     <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-crimson shadow-neon"></span>
                </a>
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

        <!-- PLAYER HEADER CARD -->
        <section class="glass-card rounded-3xl p-8 md:p-12 mb-12 border-l-4 border-crimson relative overflow-hidden group">
            
            <!-- Bg Glow -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-crimson/10 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3"></div>

            <div class="relative z-10 flex flex-col md:flex-row items-center gap-10">
                
                <!-- Avatar -->
                <div class="relative">
                    <div class="w-40 h-40 clip-path-hex bg-gray-800 p-1">
                         <img src="https://ui-avatars.com/api/?name=Otmane+Mellouki&background=111&color=DC143C" class="w-full h-full object-cover clip-path-hex" alt="Profile">
                    </div>
                    <!-- Level Badge -->
                    <div class="absolute -bottom-2 -right-2 bg-black border border-crimson text-crimson px-3 py-1 font-display font-bold text-xl rounded shadow-neon">
                        LVL 5
                    </div>
                </div>

                <!-- Info -->
                <div class="text-center md:text-left flex-1">
                    <div class="inline-block px-3 py-0.5 border border-cyan/30 bg-cyan/10 text-cyan text-[10px] items-center tracking-[0.2em] font-bold rounded mb-2">
                        PRO PLAYER
                    </div>
                    <h1 class="text-5xl md:text-7xl font-display font-bold text-white tracking-wide">OTMANE MELLOUKI</h1>
                    <p class="text-gray-400 text-lg font-light tracking-wider">CASABLANCA, MOROCCO • <span class="text-crimson">STRIKER</span></p>
                </div>

                <!-- Rank -->
                <div class="text-center bg-black/40 p-4 rounded-xl border border-white/5 backdrop-blur-md">
                    <div class="text-gray-500 text-xs tracking-widest uppercase mb-1">Current Rank</div>
                    <div class="text-4xl">👑</div>
                    <div class="text-2xl font-display font-bold text-gold mt-1">DIAMOND II</div>
                    <div class="text-xs text-gray-500 mt-1">Top 2%</div>
                </div>

            </div>
        </section>

        <!-- GRID LAYOUT -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- STATS COLUMN -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- KEY STATS -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="glass-card p-6 rounded-xl text-center border-t-2 border-crimson hover:bg-white/5 transition">
                        <div class="text-4xl font-display font-bold text-white mb-1">12</div>
                         <div class="text-xs text-gray-400 tracking-widest uppercase">Matches</div>
                    </div>
                    <div class="glass-card p-6 rounded-xl text-center border-t-2 border-cyan hover:bg-white/5 transition">
                        <div class="text-4xl font-display font-bold text-white mb-1">5</div>
                         <div class="text-xs text-gray-400 tracking-widest uppercase">Wins</div>
                    </div>
                    <div class="glass-card p-6 rounded-xl text-center border-t-2 border-gold hover:bg-white/5 transition">
                        <div class="text-4xl font-display font-bold text-white mb-1">8</div>
                         <div class="text-xs text-gray-400 tracking-widest uppercase">Badges</div>
                    </div>
                     <div class="glass-card p-6 rounded-xl text-center border-t-2 border-violet hover:bg-white/5 transition">
                        <div class="text-4xl font-display font-bold text-white mb-1">94%</div>
                         <div class="text-xs text-gray-400 tracking-widest uppercase">Winrate</div>
                    </div>
                </div>

                <!-- MATCH HISTORY -->
                <div class="glass rounded-2xl overflow-hidden">
                    <div class="p-6 border-b border-white/5 flex justify-between items-center">
                        <h3 class="font-display font-bold text-2xl text-white">MATCH HISTORY</h3>
                        <a href="#" class="text-xs text-gray-500 hover:text-white transition">VIEW ALL</a>
                    </div>
                    
                    <div class="divide-y divide-white/5">
                        
                        <!-- WIN -->
                        <div class="p-6 flex items-center justify-between hover:bg-white/5 transition group border-l-4 border-green-500">
                             <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gray-800 rounded flex items-center justify-center text-2xl">⚽</div>
                                <div>
                                    <div class="font-display font-bold text-xl text-white">FIFA WINTER CUP</div>
                                    <div class="text-xs text-gray-400">vs <span class="text-white">Player_Two</span></div>
                                </div>
                             </div>
                             <div class="text-right">
                                <div class="text-green-400 font-bold font-display text-xl tracking-wider">VICTORY</div>
                                <div class="text-xs text-gray-500">3 - 1</div>
                             </div>
                        </div>

                         <!-- LOSS -->
                        <div class="p-6 flex items-center justify-between hover:bg-white/5 transition group border-l-4 border-crimson">
                             <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gray-800 rounded flex items-center justify-center text-2xl">♟️</div>
                                <div>
                                    <div class="font-display font-bold text-xl text-white">CHESS BLITZ</div>
                                    <div class="text-xs text-gray-400">vs <span class="text-white">GrandMaster</span></div>
                                </div>
                             </div>
                             <div class="text-right">
                                <div class="text-crimson font-bold font-display text-xl tracking-wider">DEFEAT</div>
                                <div class="text-xs text-gray-500">0 - 1</div>
                             </div>
                        </div>

                    </div>
                </div>

            </div>

             <!-- SIDEBAR: NEXT MATCH -->
            <div class="space-y-8">
                
                <div class="glass-card p-8 rounded-2xl text-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-crimson/10 to-transparent opacity-50"></div>
                    
                    <h3 class="font-display font-bold text-2xl text-white mb-6 relative z-10">NEXT MATCH</h3>
                    
                    <div class="flex justify-between items-center mb-8 relative z-10">
                        <div class="flex flex-col items-center">
                             <img src="https://ui-avatars.com/api/?name=Otmane&background=111&color=fff" class="w-16 h-16 rounded-full border-2 border-white/20 mb-2">
                             <span class="font-bold text-sm">YOU</span>
                        </div>
                        <div class="text-2xl font-display font-bold text-crimson italic">VS</div>
                         <div class="flex flex-col items-center">
                             <img src="https://ui-avatars.com/api/?name=Yassine&background=111&color=fff" class="w-16 h-16 rounded-full border-2 border-crimson mb-2">
                             <span class="font-bold text-sm text-crimson">YASSINE</span>
                        </div>
                    </div>

                    <div class="bg-black/40 rounded p-4 mb-6 relative z-10">
                        <div class="text-xs text-gray-400 uppercase tracking-widest mb-1">Tournament</div>
                        <div class="font-display font-bold text-xl text-cyan">FIFA 24 CUP</div>
                        <div class="text-xs text-gray-500 mt-2">Starts in 30 mins</div>
                    </div>

                    <button class="w-full py-4 bg-crimson hover:bg-red-600 text-white font-display font-bold text-xl tracking-widest clip-path-slant shadow-neon transition relative z-10">
                        CHECK IN
                    </button>
                </div>

                <!-- ACHIEVEMENTS -->
                <div class="glass border border-white/10 rounded-2xl p-6">
                     <h3 class="font-display font-bold text-xl text-white mb-4">RECENT AWARDS</h3>
                     <div class="flex gap-4">
                         <div class="w-12 h-12 bg-gold/10 border border-gold/30 rounded flex items-center justify-center text-xl tooltip" title="Winner">🏆</div>
                         <div class="w-12 h-12 bg-cyan/10 border border-cyan/30 rounded flex items-center justify-center text-xl tooltip" title="Sharpshooter">🎯</div>
                         <div class="w-12 h-12 bg-violet/10 border border-violet/30 rounded flex items-center justify-center text-xl tooltip" title="MVP">⭐</div>
                     </div>
                </div>

            </div>

        </div>

    </main>

</body>
</html>
