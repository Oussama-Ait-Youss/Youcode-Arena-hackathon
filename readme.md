/youcode-arena
│
├── 📁 assets/                  # CSS, JS, and Images
│   ├── 📁 css/
│   │   └── style.css           # Custom styles (if Tailwind isn't enough)
│   ├── 📁 js/
│   │   └── script.js           # Frontend logic (Mobile menu, etc.)
│   └── 📁 images/              # Default avatars, game posters
│
├── 📁 config/
│   └── db.php                  # 🔌 Database Connection (PDO)
│
├── 📁 includes/                # Reusable PHP blocks
│   ├── functions.php           # 🧠 The "Brain" (Global functions)
│   ├── header.php              # 🔴 Navbar + Notification Logic + HTML Head
│   └── footer.php              # Closing Body tags + Scripts
│
├── 📁 admin/                   # 👑 PROTECTED: Super Admin Pages
│   ├── dashboard.php           # Global Stats & User List
│   └── users.php               # Ban/Promote users
│
├── 📁 organizer/               # 👔 PROTECTED: Organizer Pages
│   ├── dashboard.php           # "My Tournaments" List
│   ├── create.php              # Form to add a tournament
│   └── edit.php                # Edit details / Generate Bracket button
│
├── index.php                   # 🏠 The "Hub" (Homepage)
├── login.php                   # Login Page (Logic + View)
├── register.php                # Register Page (Logic + View)
├── logout.php                  # Destroys session & redirects
├── tournament.php              # ⚔️ Details Page + Visual Bracket
├── profile.php                 # 👤 User Profile (History + Next Match)
│
├── .gitignore                  # Ignore /vendor, .env, etc.
└── README.md    