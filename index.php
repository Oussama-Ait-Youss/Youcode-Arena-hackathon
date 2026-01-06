<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouGame Arena – The Ultimate Esports Battlefield</title>

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

        .text-stroke {
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.1);
            color: transparent;
        }

        .text-glow {
            text-shadow: 0 0 10px rgba(220, 20, 60, 0.5);
        }

        .clip-path-slant {
            clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
        }
        
        .border-gradient {
            position: relative;
        }
        .border-gradient::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit; 
            padding: 1px;
            background: linear-gradient(45deg, #DC143C, transparent, #00F0FF); 
            -webkit-mask: 
                linear-gradient(#fff 0 0) content-box, 
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
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
                <a href="index.php" class="text-white font-display tracking-wider text-lg relative">
                    HUB
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-crimson shadow-neon"></span>
                </a>
                <a href="tournament.php" class="text-gray-400 hover:text-white font-display tracking-wider text-lg transition-colors">TOURNAMENTS</a>
                <a href="profile.php" class="text-gray-400 hover:text-white font-display tracking-wider text-lg transition-colors">RANKING</a>
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
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white text-2xl">☰</button>
            </div>
        </div>
    </nav>

    <main class="relative z-10 pt-24 pb-20">
        
        <!-- HERO SECTION -->
        <section class="max-w-7xl mx-auto px-6 mb-24">
            <div class="relative w-full h-[500px] rounded-2xl overflow-hidden border border-white/10 group">
                <!-- Background Image (Interactive) -->
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2670&auto=format&fit=crop')] bg-cover bg-center transition-transform duration-700 group-hover:scale-105"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/80 to-transparent"></div>
                
                <!-- Content -->
                <div class="absolute bottom-0 left-0 p-10 md:p-16 w-full">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-crimson/20 border border-crimson/50 text-crimson text-xs font-bold tracking-widest uppercase mb-6 backdrop-blur-sm">
                        <span class="animate-pulse">●</span> Live Tournament
                    </div>
                    <h1 class="text-6xl md:text-8xl font-display font-bold text-white leading-none mb-4 drop-shadow-lg">
                        WINTER <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-crimson to-violet text-glow">CHAMPIONSHIP</span>
                    </h1>
                    <p class="text-gray-400 text-lg md:text-xl max-w-2xl mb-8 font-light border-l-2 border-crimson pl-6">
                        The arena awaits. Prove your worth in the ultimate competitive showdown. 
                        Prize pool: <span class="text-gold font-bold">$50,000</span>
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button class="px-8 py-4 bg-crimson hover:bg-red-700 text-white font-display font-bold text-xl tracking-widest clip-path-slant transition-all transform hover:-translate-y-1 shadow-neon">
                            ENTER ARENA
                        </button>
                        <button class="px-8 py-4 glass text-white hover:bg-white/10 font-display font-bold text-xl tracking-widest clip-path-slant transition-all border border-white/10">
                            VIEW BRACKET
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATS TICKER -->
        <div class="border-y border-white/5 bg-white/5 backdrop-blur-sm mb-24 overflow-hidden relative">
            <div class="max-w-7xl mx-auto flex justify-between items-center py-6 px-6 relative z-10">
                <div class="text-center md:text-left">
                    <div class="text-3xl font-display font-bold text-white">1,248</div>
                    <div class="text-xs text-gray-500 uppercase tracking-widest">Active Players</div>
                </div>
                <!-- Divider -->
                <div class="w-px h-10 bg-white/10 hidden md:block"></div>
                
                <div class="text-center md:text-left">
                    <div class="text-3xl font-display font-bold text-crimson">86</div>
                    <div class="text-xs text-gray-500 uppercase tracking-widest">Live Matches</div>
                </div>
                 <!-- Divider -->
                <div class="w-px h-10 bg-white/10 hidden md:block"></div>

                <div class="text-center md:text-left">
                    <div class="text-3xl font-display font-bold text-cyan">24/7</div>
                    <div class="text-xs text-gray-500 uppercase tracking-widest">Server Uptime</div>
                </div>
                
                <div class="hidden lg:block">
                     <div class="px-4 py-2 border border-green-500/30 bg-green-500/10 rounded text-green-400 text-xs font-mono">
                        SYSTEM ONLINE • V 2.4.0
                     </div>
                </div>
            </div>
        </div>

        <!-- CONTENT GRID -->
        <section class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- MAIN COLUMN -->
            <div class="lg:col-span-8 space-y-12">
                
                <!-- SECTION HEADER -->
                <div class="flex items-end justify-between border-b border-white/10 pb-4">
                    <h2 class="text-4xl font-display font-bold text-white">LATEST <span class="text-crimson">NEWS</span></h2>
                    <a href="#" class="text-crimson hover:text-white text-sm tracking-widest font-bold transition-colors">VIEW ALL</a>
                </div>

                <!-- NEWS ITEM 1 -->
                <article class="glass-card p-6 md:p-8 rounded-xl flex flex-col md:flex-row gap-8 items-start group">
                    <div class="w-full md:w-64 h-48 bg-gray-800 rounded-lg overflow-hidden relative border border-white/10">
                        <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=2671&auto=format&fit=crop" class="w-full h-full object-cover transition duration-500 group-hover:scale-110 opacity-80 group-hover:opacity-100" alt="News">
                        <div class="absolute top-2 left-2 bg-black/80 px-2 py-1 text-[10px] font-bold text-cyan border border-cyan/30 uppercase">
                            Update
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-3 text-xs font-mono text-gray-500">
                            <span>ADMIN</span>
                            <span class="text-crimson">•</span>
                            <span>2 HOURS AGO</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-white mb-3 group-hover:text-crimson transition-colors">Season 5 Finals: What You Need to Know</h3>
                        <p class="text-gray-400 font-light leading-relaxed mb-6">
                            The grand finals are approaching. We've updated the ruleset for the FPS category and increased the prize pool distribution for the top 8 teams.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-white border-b border-crimson pb-1 hover:text-crimson transition-colors">
                            READ MORE <span class="text-lg">→</span>
                        </a>
                    </div>
                </article>

                <!-- NEWS ITEM 2 -->
                <article class="glass-card p-6 md:p-8 rounded-xl flex flex-col md:flex-row gap-8 items-start group">
                    <div class="w-full md:w-64 h-48 bg-gray-800 rounded-lg overflow-hidden relative border border-white/10">
                        <img src="https://images.unsplash.com/photo-1542751110-97427bbecf20?q=80&w=2574&auto=format&fit=crop" class="w-full h-full object-cover transition duration-500 group-hover:scale-110 opacity-80 group-hover:opacity-100" alt="News">
                        <div class="absolute top-2 left-2 bg-black/80 px-2 py-1 text-[10px] font-bold text-gray-300 border border-gray-600 uppercase">
                            Community
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-3 text-xs font-mono text-gray-500">
                            <span>MODERATOR</span>
                            <span class="text-crimson">•</span>
                            <span>5 HOURS AGO</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-white mb-3 group-hover:text-crimson transition-colors">New 'Pro League' Scrims Added</h3>
                        <p class="text-gray-400 font-light leading-relaxed mb-6">
                            Looking for high-level practice? We've added a new scrim finder for Diamond+ ranked players. Join the lobby now.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-white border-b border-crimson pb-1 hover:text-crimson transition-colors">
                            READ MORE <span class="text-lg">→</span>
                        </a>
                    </div>
                </article>

            </div>

            <!-- SIDEBAR -->
            <aside class="lg:col-span-4 space-y-8">
                
                <!-- UPCOMING MATCHES WIDGET -->
                <div class="glass border border-white/10 rounded-xl overflow-hidden p-6">
                    <h3 class="font-display font-bold text-xl text-white mb-6 flex items-center gap-2">
                        <span class="w-1.5 h-6 bg-crimson block"></span>
                        UPCOMING MATCHES
                    </h3>
                    
                    <div class="space-y-4">
                        <!-- Match 1 -->
                        <div class="p-3 bg-white/5 rounded border border-white/5 hover:border-crimson/50 transition-colors cursor-pointer group">
                            <div class="flex justify-between items-center text-xs text-gray-400 mb-2 font-mono">
                                <span>14:00 PM</span>
                                <span class="text-cyan">FIFA 24</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-white group-hover:text-crimson transition text-lg font-display">DRAGON</span>
                                <span class="text-[10px] text-gray-600">VS</span>
                                <span class="font-bold text-white group-hover:text-crimson transition text-lg font-display">PHOENIX</span>
                            </div>
                        </div>

                         <!-- Match 2 -->
                        <div class="p-3 bg-white/5 rounded border border-white/5 hover:border-crimson/50 transition-colors cursor-pointer group">
                            <div class="flex justify-between items-center text-xs text-gray-400 mb-2 font-mono">
                                <span>15:30 PM</span>
                                <span class="text-violet">VALORANT</span>
                            </div>
                             <div class="flex justify-between items-center">
                                <span class="font-bold text-white group-hover:text-crimson transition text-lg font-display">TEAM A</span>
                                <span class="text-[10px] text-gray-600">VS</span>
                                <span class="font-bold text-white group-hover:text-crimson transition text-lg font-display">TEAM B</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CATEGORIES -->
                <div class="glass border border-white/10 rounded-xl overflow-hidden p-6">
                    <h3 class="font-display font-bold text-xl text-white mb-6 flex items-center gap-2">
                        <span class="w-1.5 h-6 bg-gold block"></span>
                        GAME ZONES
                    </h3>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="h-20 bg-gradient-to-br from-gray-800 to-black border border-white/10 rounded-lg flex items-center justify-center hover:border-crimson transition cursor-pointer relative group overflow-hidden">
                            <div class="absolute inset-0 bg-crimson/10 opacity-0 group-hover:opacity-100 transition"></div>
                            <span class="relative z-10 font-bold font-display text-xl tracking-wider">FPS</span>
                        </div>
                        <div class="h-20 bg-gradient-to-br from-gray-800 to-black border border-white/10 rounded-lg flex items-center justify-center hover:border-cyan transition cursor-pointer relative group overflow-hidden">
                             <div class="absolute inset-0 bg-cyan/10 opacity-0 group-hover:opacity-100 transition"></div>
                            <span class="relative z-10 font-bold font-display text-xl tracking-wider">MOBA</span>
                        </div>
                        <div class="h-20 bg-gradient-to-br from-gray-800 to-black border border-white/10 rounded-lg flex items-center justify-center hover:border-violet transition cursor-pointer relative group overflow-hidden">
                             <div class="absolute inset-0 bg-violet/10 opacity-0 group-hover:opacity-100 transition"></div>
                            <span class="relative z-10 font-bold font-display text-xl tracking-wider">SPORTS</span>
                        </div>
                        <div class="h-20 bg-gradient-to-br from-gray-800 to-black border border-white/10 rounded-lg flex items-center justify-center hover:border-gold transition cursor-pointer relative group overflow-hidden">
                             <div class="absolute inset-0 bg-gold/10 opacity-0 group-hover:opacity-100 transition"></div>
                            <span class="relative z-10 font-bold font-display text-xl tracking-wider">RTS</span>
                        </div>
                    </div>
                </div>

            </aside>
        </section>

    </main>

    <footer class="border-t border-white/5 bg-black py-12">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2">
                 <div class="w-8 h-8 bg-crimson flex items-center justify-center transform skew-x-[-10deg]">
                    <span class="font-display font-bold text-black text-xl transform skew-x-[10deg]">Y</span>
                </div>
                <span class="text-xl font-display font-bold tracking-widest text-gray-500">YOUGAME TOURNAMENTS</span>
            </div>
            <div class="text-gray-600 text-sm font-light">
                © 2024 YouCode Arena. designed for champions.
            </div>
        </div>
    </footer>

</body>
</html>
