<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouGame Arena – Register</title>

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
        }
        .glass-card {
            background: rgba(10, 12, 18, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .clip-path-slant {
            clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
        }
        .bg-grid {
             background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');
             opacity: 0.1;
        }
    </style>
</head>

<body class="font-sans min-h-screen relative flex items-center justify-center overflow-hidden">

    <!-- BACKGROUND -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1538481199705-c710c4e965fc?q=80&w=2670&auto=format&fit=crop')] bg-cover bg-center opacity-30"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/80 to-transparent"></div>
    <div class="absolute inset-0 bg-grid pointer-events-none"></div>

    <!-- MAIN CONTAINER -->
    <div class="glass-card w-full max-w-lg p-12 rounded-2xl relative z-10 border-t border-white/10 shadow-2xl">
        
        <!-- Header -->
        <div class="text-center mb-10">
            <h1 class="text-6xl font-display font-bold text-white tracking-widest leading-none mb-2">
                <span class="text-crimson">INIT</span>IATE
            </h1>
            <p class="text-gray-400 text-sm tracking-widest uppercase">Create Player ID</p>
        </div>

        <!-- Form -->
        <form class="space-y-5">
            
            <div class="space-y-2">
                <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Username</label>
                <input type="text" placeholder="PlayerOne" 
                    class="w-full bg-black/40 border border-white/10 rounded p-4 text-white placeholder-gray-700 focus:outline-none focus:border-crimson transition-colors font-mono">
            </div>

            <div class="space-y-2">
                <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Email Address</label>
                <input type="email" placeholder="agent@yougame.arena" 
                    class="w-full bg-black/40 border border-white/10 rounded p-4 text-white placeholder-gray-700 focus:outline-none focus:border-crimson transition-colors font-mono">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Password</label>
                    <input type="password" placeholder="••••••••" 
                        class="w-full bg-black/40 border border-white/10 rounded p-4 text-white placeholder-gray-700 focus:outline-none focus:border-crimson transition-colors font-mono">
                </div>
                 <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Confirm</label>
                    <input type="password" placeholder="••••••••" 
                        class="w-full bg-black/40 border border-white/10 rounded p-4 text-white placeholder-gray-700 focus:outline-none focus:border-crimson transition-colors font-mono">
                </div>
            </div>

            <!-- Action -->
            <button type="submit" class="w-full py-4 bg-crimson hover:bg-red-700 text-white font-display font-bold text-2xl tracking-widest clip-path-slant shadow-neon transition-all transform hover:-translate-y-1 mt-6">
                START CAREER
            </button>

        </form>

        <!-- Footer -->
        <div class="mt-8 text-center border-t border-white/5 pt-6">
            <p class="text-gray-500 text-sm">
                Already registered? <a href="login.php" class="text-white font-bold hover:text-crimson transition">LOGIN</a>
            </p>
        </div>

    </div>

</body>
</html>
