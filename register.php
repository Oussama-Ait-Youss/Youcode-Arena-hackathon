<!DOCTYPE html>
<html lang="en" class="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YouCode Arena – Register</title>

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

<body class="bg-bg text-gray-100 font-sans min-h-screen flex items-center justify-center">

<!-- REGISTER CARD -->
<div class="bg-panel rounded-3xl p-12 w-full max-w-md shadow-xl border border-border">
  <div class="text-center mb-8">
    <h1 class="text-5xl font-display gradient-text tracking-wide">YOUCODE ARENA</h1>
    <p class="text-gray-400 mt-2">Create your account</p>
  </div>

  <form class="space-y-6" action="./PostRequestManager.php" method="POST">
    <!-- Username -->
    <div>
      <label class="block text-gray-400 text-sm mb-2" for="username">Username</label>
      <input type="text" id="username" placeholder="Your nickname" name="username"
        class="w-full p-4 rounded-xl bg-bg border border-border text-gray-100 placeholder-gray-500
               focus:outline-none focus:ring-2 focus:ring-accent1 focus:border-accent1 transition"/>
    </div>

    <!-- Email -->
    <div>
      <label class="block text-gray-400 text-sm mb-2" for="email">Email</label>
      <input type="email" id="email" placeholder="you@example.com" name="email"
        class="w-full p-4 rounded-xl bg-bg border border-border text-gray-100 placeholder-gray-500
               focus:outline-none focus:ring-2 focus:ring-accent1 focus:border-accent1 transition"/>
    </div>

    <!-- Password -->
    <div>
      <label class="block text-gray-400 text-sm mb-2" for="password">Password</label>
      <input type="password" id="password" placeholder="********" name="password"
        class="w-full p-4 rounded-xl bg-bg border border-border text-gray-100 placeholder-gray-500
               focus:outline-none focus:ring-2 focus:ring-accent1 focus:border-accent1 transition"/>
    </div>

    <!-- Confirm Password -->
    <div>
      <label class="block text-gray-400 text-sm mb-2" for="confirm-password">Confirm Password</label>
      <input type="password" id="confirm-password" placeholder="********"
        class="w-full p-4 rounded-xl bg-bg border border-border text-gray-100 placeholder-gray-500
               focus:outline-none focus:ring-2 focus:ring-accent1 focus:border-accent1 transition"/>
    </div>
    <input type="hidden" name="join" value="signup"/>
    <!-- Register Button -->
    <button type="submit"
      class="relative overflow-hidden group w-full py-4
             text-2xl font-display tracking-widest text-white
             bg-gradient-to-r from-accent1 to-accent3
             rounded-xl shadow-lg transition-all
             hover:-translate-y-1 active:scale-95">
      <span class="relative z-10">REGISTER</span>
      <span class="absolute left-1/2 bottom-1 h-[3px] w-0 -translate-x-1/2
             bg-gradient-to-r from-accent1 to-accent3 transition-all duration-300
             group-hover:w-2/3"></span>
    </button>

  </form>

  <div class="mt-6 text-center text-gray-400 text-sm">
    Already have an account?
    <a href="login.php" class="text-accent2 hover:underline">Login</a>
  </div>
</div>

</body>
</html>
