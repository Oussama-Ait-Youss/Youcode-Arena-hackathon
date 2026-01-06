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

    
            

           
        </div>
    </nav>

    <main class="relative z-10 pt-24 pb-20">
        
        <!-- HERO SECTION (Introduction to Platform) -->
        <section class="max-w-7xl mx-auto px-6 mb-24">
            <div class="relative w-full h-[600px] rounded-2xl overflow-hidden border border-white/10 group">
                <!-- Background Image -->
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2670&auto=format&fit=crop')] bg-cover bg-center transition-transform duration-700 group-hover:scale-105"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/60 to-transparent"></div>
                
                <!-- Content -->
                <div class="absolute bottom-0 left-0 p-10 md:p-16 w-full max-w-4xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-crimson/20 border border-crimson/50 text-crimson text-xs font-bold tracking-widest uppercase mb-6 backdrop-blur-sm">
                        <span class="animate-pulse">●</span> The Future of Esports
                    </div>
                    <h1 class="text-6xl md:text-8xl font-display font-bold text-white leading-none mb-6 drop-shadow-lg">
                        FORGE YOUR <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-crimson to-violet text-glow">LEGACY</span>
                    </h1>
                    <p class="text-gray-300 text-lg md:text-xl mb-8 font-light border-l-4 border-crimson pl-6 leading-relaxed">
                        Welcome to the ultimate competitive ecosystem. Join thousands of players, compete in daily tournaments, and climb the global rankings. Your journey to pro status begins here.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="register.php" class="px-8 py-4 bg-crimson hover:bg-red-700 text-white font-display font-bold text-xl tracking-widest clip-path-slant transition-all transform hover:-translate-y-1 shadow-neon">
                            START COMPETING
                        </a>
                        <a href="#tournaments" class="px-8 py-4 glass text-white hover:bg-white/10 font-display font-bold text-xl tracking-widest clip-path-slant transition-all border border-white/10">
                            BROWSE EVENTS
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- TOURNAMENTS SECTION (Current & Upcoming) -->
        <section id="tournaments" class="max-w-7xl mx-auto px-6 mb-24">
            <div class="flex items-end justify-between mb-10 border-b border-white/10 pb-4">
                 <div>
                    <h2 class="text-5xl font-display font-bold text-white mb-2">LIVE <span class="text-crimson">&</span> UPCOMING</h2>
                    <p class="text-gray-400 font-light">Join the action in our featured events.</p>
                 </div>
                 <a href="tournament.php" class="text-crimson hover:text-white text-sm tracking-widest font-bold transition-colors">VIEW FULL CALENDAR</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Event Card 1 (Active) -->
                <div class="glass-card rounded-xl overflow-hidden group">
                    <div class="h-48 bg-gray-800 relative">
                        <img src="https://images.unsplash.com/photo-1542751110-97427bbecf20?q=80&w=2574&auto=format&fit=crop" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition duration-500">
                        <div class="absolute top-4 right-4 bg-crimson text-white text-xs font-bold px-2 py-1 uppercase tracking-wider rounded animate-pulse">
                            ● Live Now
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-cyan font-bold tracking-widest uppercase mb-2">Valorant</div>
                        <h3 class="text-2xl font-display font-bold text-white mb-2 group-hover:text-crimson transition">WINTER BLITZ</h3>
                        <div class="flex justify-between items-center text-gray-400 text-sm font-mono mb-6">
                            <span>5v5 Competitive</span>
                            <span>Prize: $500</span>
                        </div>
                         <a href="login.php" class="block w-full py-3 bg-white/5 hover:bg-crimson border border-white/10 hover:border-crimson text-white text-center font-bold tracking-widest rounded transition-all">
                            WATCH STREAM
                        </a>
                    </div>
                </div>

                <!-- Event Card 2 (Upcoming) -->
                <div class="glass-card rounded-xl overflow-hidden group">
                     <div class="h-48 bg-gray-800 relative">
                        <img src="https://images.unsplash.com/photo-1538481199705-c710c4e965fc?q=80&w=2665&auto=format&fit=crop" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition duration-500">
                        <div class="absolute top-4 right-4 bg-gold text-black text-xs font-bold px-2 py-1 uppercase tracking-wider rounded">
                            In 2 Days
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-gold font-bold tracking-widest uppercase mb-2">League of Legends</div>
                        <h3 class="text-2xl font-display font-bold text-white mb-2 group-hover:text-gold transition">SUMMER SHOWDOWN</h3>
                        <div class="flex justify-between items-center text-gray-400 text-sm font-mono mb-6">
                            <span>Summoner's Rift</span>
                            <span>Prize: $1,000</span>
                        </div>
                        <a href="login.php" class="block w-full py-3 bg-white/5 hover:bg-gold hover:text-black border border-white/10 hover:border-gold text-white text-center font-bold tracking-widest rounded transition-all">
                            REGISTER NOW
                        </a>
                    </div>
                </div>

                <!-- Event Card 3 (Upcoming) -->
                <div class="glass-card rounded-xl overflow-hidden group">
                     <div class="h-48 bg-gray-800 relative">
                        <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=2671&auto=format&fit=crop" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition duration-500">
                         <div class="absolute top-4 right-4 bg-violet text-white text-xs font-bold px-2 py-1 uppercase tracking-wider rounded">
                            Registration Open
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="text-xs text-violet font-bold tracking-widest uppercase mb-2">CS2</div>
                        <h3 class="text-2xl font-display font-bold text-white mb-2 group-hover:text-violet transition">TACTICAL OPS</h3>
                        <div class="flex justify-between items-center text-gray-400 text-sm font-mono mb-6">
                            <span>Wingman 2v2</span>
                            <span>Prize: Skins</span>
                        </div>
                         <a href="login.php" class="block w-full py-3 bg-white/5 hover:bg-violet border border-white/10 hover:border-violet text-white text-center font-bold tracking-widest rounded transition-all">
                            JOIN LOBBY
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- HALL OF FAME (Winners) -->
        <section id="winners" class="bg-white/5 border-y border-white/5 py-20 mb-24 relative overflow-hidden">
             <!-- Bg Decor -->
            <div class="absolute -left-20 top-0 w-96 h-96 bg-gold/10 rounded-full blur-[100px]"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="text-center mb-16">
                     <h2 class="text-5xl font-display font-bold text-white mb-4">HALL OF <span class="text-gold">FAME</span></h2>
                     <p class="text-gray-400 max-w-xl mx-auto">Celebrating the champions who rose to the challenge and claimed victory in our monthly finals.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Winner 1 -->
                    <div class="glass-card p-1 rounded-xl relative transform md:-translate-y-4">
                        <div class="p-8 text-center bg-gradient-to-b from-gray-900 to-black rounded-lg h-full">
                            <div class="w-24 h-24 mx-auto mb-6 relative">
                                <div class="absolute inset-0 bg-gold/20 rounded-full animate-pulse"></div>
                                <img src="https://ui-avatars.com/api/?name=King+Slayer&background=FFD700&color=000" class="w-full h-full object-cover rounded-full border-2 border-gold relative z-10">
                                <div class="absolute -bottom-2 translate-x-1/2 right-1/2 bg-gold text-black text-[10px] font-bold px-2 py-0.5 rounded shadow-lg">#1 RANK</div>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-white mb-1">KingSlayer</h3>
                            <div class="text-gold text-sm font-bold tracking-widest mb-4">FPS CHAMPION</div>
                            <p class="text-gray-500 text-xs italic">"Victory favors the bold. Join me at the top."</p>
                        </div>
                    </div>

                    <!-- Winner 2 -->
                    <div class="glass-card p-1 rounded-xl">
                        <div class="p-8 text-center bg-gradient-to-b from-gray-900 to-black rounded-lg h-full">
                             <div class="w-20 h-20 mx-auto mb-6 relative">
                                <img src="https://ui-avatars.com/api/?name=Mid+Goddess&background=333&color=fff" class="w-full h-full object-cover rounded-full border-2 border-gray-600">
                             </div>
                            <h3 class="text-xl font-display font-bold text-white mb-1">Mid_Goddess</h3>
                            <div class="text-gray-400 text-sm font-bold tracking-widest mb-4">MOBA FINALIST</div>
                             <p class="text-gray-500 text-xs italic">"Support diff."</p>
                        </div>
                    </div>

                     <!-- Winner 3 -->
                    <div class="glass-card p-1 rounded-xl">
                        <div class="p-8 text-center bg-gradient-to-b from-gray-900 to-black rounded-lg h-full">
                             <div class="w-20 h-20 mx-auto mb-6 relative">
                                <img src="https://ui-avatars.com/api/?name=Speed+Demon&background=333&color=fff" class="w-full h-full object-cover rounded-full border-2 border-gray-600">
                             </div>
                            <h3 class="text-xl font-display font-bold text-white mb-1">SpeedDemon</h3>
                            <div class="text-gray-400 text-sm font-bold tracking-widest mb-4">RACING ELITE</div>
                             <p class="text-gray-500 text-xs italic">"Catch me if you can."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWS / BLOG SECTION -->
        <section id="news" class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <div>
                <h2 class="text-4xl font-display font-bold text-white mb-8 border-l-4 border-crimson pl-4">LATEST <span class="text-crimson">INTEL</span></h2>
                
                <div class="space-y-6">
                    <!-- News Item -->
                    <a href="#" class="flex gap-4 group">
                        <div class="w-32 h-24 bg-gray-800 rounded overflow-hidden flex-shrink-0">
                             <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2670&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div>
                            <div class="text-[10px] text-gray-500 font-bold uppercase tracking-widest mb-1">Patch Notes • 2 Hours Ago</div>
                            <h3 class="text-xl font-display font-bold text-white group-hover:text-crimson transition leading-tight mb-2">Platform Update v2.4: New Matchmaking System</h3>
                            <p class="text-sm text-gray-400 line-clamp-2">We've completely overhauled the ranking algorithm to ensure fairer matches and faster queue times.</p>
                        </div>
                    </a>

                     <!-- News Item -->
                    <a href="#" class="flex gap-4 group">
                        <div class="w-32 h-24 bg-gray-800 rounded overflow-hidden flex-shrink-0">
                             <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=2671&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div>
                            <div class="text-[10px] text-gray-500 font-bold uppercase tracking-widest mb-1">Community • Yesterday</div>
                            <h3 class="text-xl font-display font-bold text-white group-hover:text-crimson transition leading-tight mb-2">Spotlight: How Team Liquid Won the Winter Cup</h3>
                            <p class="text-sm text-gray-400 line-clamp-2">An in-depth breakdown of the strategies that led to their dominant 3-0 victory in the finals.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="glass-card p-8 rounded-2xl relative overflow-hidden bg-[url('https://images.unsplash.com/photo-1542751110-97427bbecf20?q=80&w=2574&auto=format&fit=crop')] bg-cover bg-center">
                 <div class="absolute inset-0 bg-black/80"></div>
                 <div class="relative z-10 flex flex-col items-center justify-center h-full text-center">
                     <h3 class="text-3xl font-display font-bold text-white mb-4">NEVER MISS A MATCH</h3>
                     <p class="text-gray-400 mb-8 max-w-sm">Subscribe to our newsletter for exclusive tournament invites, pro tips, and rewards.</p>
                     
                     <form class="flex w-full max-w-sm gap-2">
                         <input type="email" placeholder="Enter your email" class="flex-1 bg-white/10 border border-white/20 rounded px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-crimson transition">
                         <button class="bg-crimson hover:bg-red-700 text-white font-bold px-6 py-3 rounded tracking-wider transition">JOIN</button>
                     </form>
                 </div>
            </div>

        </section>

    </main>

    <footer class="border-t border-white/5 bg-black py-16 mt-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                         <div class="w-8 h-8 bg-crimson flex items-center justify-center transform skew-x-[-10deg]">
                            <span class="font-display font-bold text-black text-xl transform skew-x-[10deg]">Y</span>
                        </div>
                        <span class="text-2xl font-display font-bold tracking-widest text-white">YOUGAME</span>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed max-w-sm">
                        The world's premier esports tournament platform. Built for gamers, by gamers. Compete, win prizes, and build your legacy.
                    </p>
                </div>
                
                <div>
                     <h4 class="text-white font-bold tracking-widest text-sm mb-6">PLATFORM</h4>
                     <ul class="space-y-4 text-sm text-gray-500">
                         <li><a href="#" class="hover:text-crimson transition">Tournaments</a></li>
                         <li><a href="#" class="hover:text-crimson transition">Leaderboards</a></li>
                         <li><a href="#" class="hover:text-crimson transition">Premium Pass</a></li>
                         <li><a href="#" class="hover:text-crimson transition">Mobile App</a></li>
                     </ul>
                </div>

                <div>
                     <h4 class="text-white font-bold tracking-widest text-sm mb-6">SUPPORT</h4>
                     <ul class="space-y-4 text-sm text-gray-500">
                         <li><a href="#" class="hover:text-crimson transition">Help Center</a></li>
                         <li><a href="#" class="hover:text-crimson transition">Rules & Regulations</a></li>
                         <li><a href="#" class="hover:text-crimson transition">Contact Us</a></li>
                         <li><a href="#" class="hover:text-crimson transition">Terms of Service</a></li>
                     </ul>
                </div>
            </div>
            
            <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-600 text-xs">© 2024 YouCode Arena. All rights reserved.</p>
                <div class="flex gap-4">
                    <a href="#" class="text-gray-600 hover:text-white transition text-lg">🐦</a>
                    <a href="#" class="text-gray-600 hover:text-white transition text-lg">👾</a>
                    <a href="#" class="text-gray-600 hover:text-white transition text-lg">📸</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
