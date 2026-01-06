<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouGame Arena – Create Tournament</title>

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
                YOU<span class="text-crimson">GAME</span>
            </div>
        </div>

        <!-- Nav -->
        <nav class="flex-1 p-6 space-y-2">
            <a href="myTour.php" class="flex items-center px-4 py-3 rounded-xl hover:bg-white/5 text-gray-400 hover:text-white transition cursor-pointer">
                <span class="text-xl mr-3">🏆</span>
                <span class="font-bold tracking-wide">My Tournaments</span>
            </a>
            
            <a class="flex items-center px-4 py-3 rounded-xl bg-crimson/10 border border-crimson/20 text-white group cursor-pointer">
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
        <header class="mb-12">
            <h1 class="text-6xl font-display font-bold text-white tracking-wide">
                CREATE <span class="text-crimson">TOURNAMENT</span>
            </h1>
            <p class="text-gray-400 text-lg mt-2 font-light">
                Configure rules, prizes and competition details
            </p>
        </header>

        <!-- FORM -->
        <form class="space-y-8 max-w-5xl pb-12">

            <!-- BASIC INFO -->
            <section class="glass-card p-8 rounded-2xl border border-white/5">
                <h2 class="text-3xl font-display font-bold text-white mb-6 flex items-center gap-2">
                     <span class="w-1.5 h-6 bg-cyan block"></span> BASIC INFORMATION
                </h2>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Tournament Name</label>
                         <input type="text" placeholder="Enter name..."
                           class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-cyan transition font-mono">
                    </div>

                    <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Game Category</label>
                        <select class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-gray-300 focus:outline-none focus:border-cyan transition font-mono">
                            <option>FPS</option>
                            <option>MOBA</option>
                            <option>Sports</option>
                            <option>Fighting</option>
                            <option>Strategy</option>
                            <option>Card / Board</option>
                            <option>Other</option>
                        </select>
                    </div>

                     <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Game Name</label>
                         <input type="text" placeholder="e.g. Valorant, FIFA 24"
                           class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-cyan transition font-mono">
                    </div>

                     <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Banner Image</label>
                         <input type="file"
                           class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-gray-400 file:mr-4 file:py-1 file:px-3 file:rounded file:border-0 file:text-xs file:bg-white/10 file:text-white hover:file:bg-white/20 transition">
                    </div>
                </div>
            </section>

             <!-- STRUCTURE -->
            <section class="glass-card p-8 rounded-2xl border border-white/5">
                <h2 class="text-3xl font-display font-bold text-white mb-6 flex items-center gap-2">
                     <span class="w-1.5 h-6 bg-crimson block"></span> STRUCTURE
                </h2>

                <div class="grid md:grid-cols-3 gap-6">
                     <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Competition Type</label>
                        <select class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-gray-300 focus:outline-none focus:border-crimson transition font-mono">
                            <option>Online</option>
                            <option>On-site</option>
                            <option>Hybrid</option>
                        </select>
                    </div>

                     <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Format</label>
                        <select class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-gray-300 focus:outline-none focus:border-crimson transition font-mono">
                            <option>Solo</option>
                            <option>2v2</option>
                            <option>3v3</option>
                            <option>5v5</option>
                        </select>
                    </div>

                     <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Bracket Type</label>
                        <select class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-gray-300 focus:outline-none focus:border-crimson transition font-mono">
                            <option>Single Elimination</option>
                            <option>Double Elimination</option>
                            <option>Round Robin</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Max Participants</label>
                        <input type="number" placeholder="32"
                           class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-crimson transition font-mono">
                    </div>

                     <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Start Date & Time</label>
                        <input type="datetime-local"
                           class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-crimson transition font-mono">
                    </div>

                     <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Status</label>
                        <select class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-gray-300 focus:outline-none focus:border-crimson transition font-mono">
                             <option>Draft</option>
                            <option>Open</option>
                            <option>In Progress</option>
                            <option>Completed</option>
                        </select>
                    </div>
                </div>
            </section>

             <!-- PRIZE & FEES -->
            <section class="glass-card p-8 rounded-2xl border border-white/5">
                <h2 class="text-3xl font-display font-bold text-white mb-6 flex items-center gap-2">
                     <span class="w-1.5 h-6 bg-gold block"></span> PRIZE & ENTRY
                </h2>

                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Prize Pool</label>
                        <input type="text" placeholder="e.g. 5000 MAD"
                           class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-gold transition font-mono">
                    </div>

                    <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Entry Fee</label>
                        <select class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-gray-300 focus:outline-none focus:border-gold transition font-mono">
                            <option>Free</option>
                            <option>Paid</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2 block">Distribution</label>
                        <input type="text" placeholder="e.g. 60/30/10"
                           class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-gold transition font-mono">
                    </div>
                </div>
            </section>

            <!-- RULES -->
            <section class="glass-card p-8 rounded-2xl border border-white/5">
                <h2 class="text-3xl font-display font-bold text-white mb-6 flex items-center gap-2">
                     <span class="w-1.5 h-6 bg-violet block"></span> RULES
                </h2>

                <textarea rows="5" placeholder="Tournament rules, maps, bans, behavior, etc."
                    class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-violet transition font-mono resize-none"></textarea>
            </section>

             <!-- ACTION -->
            <div class="flex justify-end pt-4">
                <button onclick="window.location.href='myTour.php'" type="button" class="px-8 py-4 bg-transparent hover:bg-white/5 text-gray-400 font-bold tracking-widest mr-4 transition rounded">CANCEL</button>
                <button onclick="window.location.href='myTour.php'" type="submit" class="px-12 py-4 bg-crimson hover:bg-red-700 text-white font-display font-bold text-3xl tracking-widest clip-path-slant shadow-neon transition transform hover:-translate-y-1">
                    PUBLISH EVENT
                </button>
            </div>

        </form>

    </main>
</body>
</html>
