<?php
// Mock Data for Categories
$categories = [
    ['name' => 'All', 'slug' => 'all', 'icon' => '🔥'],
    ['name' => 'Chess', 'slug' => 'chess', 'icon' => '♟️'],
    ['name' => 'FIFA 24', 'slug' => 'fifa', 'icon' => '⚽'],
    ['name' => 'Billiards', 'slug' => 'billiards', 'icon' => '🎱'],
    ['name' => 'Valorant', 'slug' => 'valorant', 'icon' => '🎮'],
    ['name' => 'League of Legends', 'slug' => 'lol', 'icon' => '⚔️'],
];

// Mock Data for Posts
$posts = [
    [
        'id' => 1,
        'user' => 'Admin System',
        'avatar' => '📢',
        'role' => 'admin',
        'time' => '2 mins ago',
        'category' => 'chess',
        'content' => 'The semi-finals for the Chess Blitz will start at 14:00 PM in the cafeteria zone. Please be on time! Late arrivals will be disqualified.',
        'image' => null,
        'likes' => 12,
        'comments' => 4,
        'is_announcement' => true
    ],
    [
        'id' => 2,
        'user' => 'Oussama_Dev',
        'avatar' => 'https://ui-avatars.com/api/?name=Oussama+Dev&background=transparent&color=fff',
        'role' => 'user',
        'time' => '1 hour ago',
        'category' => 'fifa',
        'content' => 'Looking for a practice partner before the tournament? I\'m in the lobby right now. Standard rules, friendly match.',
        'image' => null,
        'likes' => 3,
        'comments' => 8,
        'is_announcement' => false
    ],
    [
        'id' => 3,
        'user' => 'ProGamer123',
        'avatar' => 'https://ui-avatars.com/api/?name=Pro+Gamer&background=transparent&color=fff',
        'role' => 'user',
        'time' => '3 hours ago',
        'category' => 'billiards',
        'content' => 'Just won my first match against <span class="text-cyan">@RocketMan</span>! Close game, GG.',
        'image' => 'https://images.unsplash.com/photo-1533561052604-c3beb6d55760?q=80&w=2574&auto=format&fit=crop',
        'likes' => 45,
        'comments' => 12,
        'is_announcement' => false
    ],
    [
        'id' => 4,
        'user' => 'JinxMain',
        'avatar' => 'https://ui-avatars.com/api/?name=Jinx+Main&background=transparent&color=fff',
        'role' => 'user',
        'time' => '4 hours ago',
        'category' => 'lol',
        'content' => 'Got my first Pentakill in the YouCode Arena scrims! This platform is insane.',
        'image' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2670&auto=format&fit=crop',
        'likes' => 89,
        'comments' => 23,
        'is_announcement' => false
    ],
     [
        'id' => 5,
        'user' => 'Viper_Main',
        'avatar' => 'https://ui-avatars.com/api/?name=Viper&background=transparent&color=fff',
        'role' => 'user',
        'time' => '5 hours ago',
        'category' => 'valorant',
        'content' => 'Lineups for multiple maps available. DM me if you want to trade strats before the big game.',
        'image' => 'https://images.unsplash.com/photo-1542751110-97427bbecf20?q=80&w=2574&auto=format&fit=crop',
        'likes' => 15,
        'comments' => 2,
        'is_announcement' => false
    ]
];

// Content Filtering Logic
$active_category = isset($_GET['category']) ? $_GET['category'] : 'all';

$filtered_posts = array_filter($posts, function($post) use ($active_category) {
    if ($active_category === 'all') return true;
    return $post['category'] === $active_category;
});
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode Arena - Competition Hub</title>

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

        .glass-card:hover {
            border-color: rgba(220, 20, 60, 0.4);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5), 0 0 20px rgba(220, 20, 60, 0.2);
        }

        .clip-path-slant {
            clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
        }
    </style>
</head>

<body class="text-gray-200 font-sans min-h-screen relative selection:bg-crimson selection:text-white overflow-x-hidden flex flex-col">

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
                    <span class="text-2xl font-display font-bold tracking-widest leading-none text-white group-hover:text-crimson transition-colors">YOUCODE</span>
                    <span class="text-xs font-display tracking-[0.3em] text-gray-500 group-hover:text-white transition-colors">ARENA</span>
                </div>
            </a>

            <!-- LINKS -->
            <div class="hidden md:flex items-center gap-8">
                <a href="hub.php" class="text-white font-display tracking-wider text-lg relative">
                    COMPETITION HUB
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-crimson shadow-neon"></span>
                </a>
                <a href="tournament.php" class="text-gray-400 hover:text-white font-display tracking-wider text-lg transition-colors">TOURNAMENTS</a>
                <a href="profile.php" class="text-gray-400 hover:text-white font-display tracking-wider text-lg transition-colors">PROFILE</a>
            </div>

            <!-- USER MENU -->
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-crimson to-violet border-2 border-white/20 cursor-pointer relative hover:scale-105 transition">
                    <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full border-2 border-gray-900"></span>
                    <img src="https://ui-avatars.com/api/?name=User&background=transparent&color=fff" class="w-full h-full object-cover rounded-full">
                </div>
            </div>
        </div>
    </nav>

    <main class="relative z-10 flex-grow max-w-7xl mx-auto w-full p-6 pt-24 grid grid-cols-1 md:grid-cols-4 gap-6">
        
        <!-- LEFT SIDEBAR -->
        <aside class="hidden md:block col-span-1">
            <div class="glass-card rounded-xl p-4 sticky top-24">
                <h3 class="font-display font-bold text-gray-400 uppercase text-lg tracking-wider mb-4 border-b border-white/10 pb-2">Categories</h3>
                <ul class="space-y-2">
                    <?php foreach ($categories as $cat): ?>
                        <?php 
                            $isActive = $active_category === $cat['slug'];
                            $activeClass = $isActive ? 'bg-white/5 text-crimson border-l-4 border-crimson' : 'text-gray-400 hover:text-white hover:bg-white/5'; 
                        ?>
                        <li class="rounded cursor-pointer transition font-display tracking-wide text-lg">
                            <a href="?category=<?= $cat['slug'] ?>" class="flex items-center gap-2 p-3 <?= $activeClass ?>">
                                <span><?= $cat['icon'] ?></span> <?= $cat['name'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>

        <!-- MAIN FEED -->
        <section class="col-span-1 md:col-span-2 space-y-6">
            
            <?php if (empty($filtered_posts)): ?>
                <div class="glass-card rounded-xl p-12 text-center text-gray-500">
                    <div class="text-4xl mb-4">📭</div>
                    <div class="font-display font-bold text-xl">No posts found in this category.</div>
                </div>
            <?php else: ?>
                <?php foreach ($filtered_posts as $post): ?>
                    <div class="glass-card rounded-xl p-6 group">
                        <!-- HEADER -->
                        <div class="flex items-center gap-4 mb-4">
                            <?php if ($post['is_announcement']): ?>
                                <div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center border border-white/10">
                                    <span class="text-xl"><?= $post['avatar'] ?></span>
                                </div>
                            <?php else: ?>
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-purple-500 flex items-center justify-center ring-2 ring-indigo-500/20">
                                    <img src="<?= $post['avatar'] ?>" class="rounded-full w-full h-full object-cover">
                                </div>
                            <?php endif; ?>
                            
                            <div>
                                <div class="font-display font-bold text-xl text-white"><?= $post['user'] ?></div>
                                <div class="text-xs text-gray-400 font-bold tracking-widest uppercase">
                                    <?= $post['time'] ?> • <span class="<?= $post['is_announcement'] ? 'text-crimson' : '' ?>"><?= ucfirst($post['category']) ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- CONTENT -->
                        <p class="text-gray-300 text-base mb-4 leading-relaxed <?= $post['is_announcement'] ? 'bg-black/20 p-4 rounded border-l-2 border-crimson' : '' ?>">
                            <?= $post['content'] ?>
                        </p>

                        <!-- IMAGE -->
                        <?php if ($post['image']): ?>
                            <div class="h-64 w-full rounded-lg bg-gray-800 mb-4 overflow-hidden relative">
                                <img src="<?= $post['image'] ?>" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            </div>
                        <?php endif; ?>

                        <!-- FOOTER -->
                        <div class="flex gap-6 border-t border-white/5 pt-4 text-xs text-gray-500 font-bold uppercase tracking-wider">
                            <span class="hover:text-crimson cursor-pointer transition flex items-center gap-1">❤️ <?= $post['likes'] ?> Likes</span>
                            <span class="hover:text-crimson cursor-pointer transition flex items-center gap-1">💬 <?= $post['comments'] ?> Comments</span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </section>

        <!-- RIGHT SIDEBAR -->
        <aside class="hidden md:block col-span-1">
            <div class="glass-card border border-gold/30 rounded-xl p-6 text-center sticky top-24 relative overflow-hidden">
                <div class="absolute inset-0 bg-gold/5 animate-pulse"></div>
                <div class="text-gold text-4xl mb-2 drop-shadow-lg">👑</div>
                <h3 class="font-display font-bold text-2xl text-white mb-4">LAST WINNER</h3>
                
                <div class="w-20 h-20 bg-gray-700 rounded-full mx-auto my-4 border-2 border-gold p-1 relative z-10">
                    <img src="https://ui-avatars.com/api/?name=Amine+Manager&background=000&color=FFD700" class="w-full h-full rounded-full object-cover">
                </div>
                
                <div class="font-display font-bold text-xl text-gold tracking-wider">AmineManager</div>
                <div class="text-xs text-gray-400 font-bold uppercase tracking-widest mt-1">Won 8-Ball Pool</div>
                
                <div class="mt-6 pt-4 border-t border-white/10">
                    <button class="w-full py-2 bg-gold/10 hover:bg-gold hover:text-black border border-gold text-gold text-sm font-bold tracking-widest rounded transition-all">
                        VIEW PROFILE
                    </button>
                </div>
            </div>
            
             <div class="glass-card rounded-xl p-6 mt-6 sticky top-[450px]">
                <h3 class="font-display font-bold text-lg text-white mb-4 uppercase tracking-wider">Trending</h3>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 group cursor-pointer">
                        <div class="text-gray-500 text-xs font-mono">01</div>
                        <div class="text-sm text-gray-300 group-hover:text-crimson transition">#YouCodeHackathon</div>
                    </li>
                    <li class="flex items-center gap-3 group cursor-pointer">
                         <div class="text-gray-500 text-xs font-mono">02</div>
                        <div class="text-sm text-gray-300 group-hover:text-crimson transition">#FIFA24Finals</div>
                    </li>
                    <li class="flex items-center gap-3 group cursor-pointer">
                         <div class="text-gray-500 text-xs font-mono">03</div>
                        <div class="text-sm text-gray-300 group-hover:text-crimson transition">#ChessMaster</div>
                    </li>
                </ul>
            </div>
        </aside>

    </main>

    <footer class="glass border-t border-white/5 py-8 mt-12">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center text-xs text-gray-500">
            <p>© 2024 YouCode Arena. All rights reserved.</p>
            <div class="flex gap-4">
                <a href="#" class="hover:text-white transition">Privacy</a>
                <a href="#" class="hover:text-white transition">Terms</a>
            </div>
        </div>
    </footer>

</body>
</html>