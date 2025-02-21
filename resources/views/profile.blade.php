<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNest - Magical Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FFD700',
                        secondary: '#4A0E4E',
                        accent: '#8A2BE2',
                        background: '#1A0B2E',
                        text: '#E0E0E0',
                    },
                    fontFamily: {
                        sans: ['Raleway', 'sans-serif'],
                        heading: ['Cinzel', 'serif'],
                    },
                }
            }
        }
    </script>
    <style>
        .magic-sparkle {
            background-image: url('data:image/svg+xml;utf8,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="1" fill="%23FFD700" /></svg>');
            animation: sparkle 3s linear infinite;
        }
        @keyframes sparkle {
            0% { background-position: 0 0; }
            100% { background-position: 100px 100px; }
        }
        .progress-bar {
            background: linear-gradient(90deg, #FFD700, #8A2BE2);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }
        .stats-card {
            background: rgba(74, 14, 78, 0.5);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 215, 0, 0.2);
        }
        .achievement-badge {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body class="bg-background text-text">
    <div class="magic-sparkle fixed inset-0 pointer-events-none opacity-30"></div>

    <!-- Header -->
    <header class="bg-secondary bg-opacity-50 shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-3xl font-heading font-bold text-primary">BookNest</a>
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="text-text hover:text-primary transition-colors duration-300">Home</a>
                    <a href="#" class="text-text hover:text-primary transition-colors duration-300">Catalogue</a>
                    <a href="#" class="text-text hover:text-primary transition-colors duration-300">Spells</a>
                    <a href="#" class="text-text hover:text-primary transition-colors duration-300">Potions</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-12">
        <!-- Profile Header -->
        <div class="relative mb-12">
            <div class="bg-secondary bg-opacity-50 rounded-xl p-8 shadow-xl">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Profile Image -->
                    <div class="relative">
                        <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-primary shadow-lg">
                            <img src="/api/placeholder/192/192" alt="Profile" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-2 right-2 bg-primary rounded-full p-2 shadow-lg">
                            <svg class="w-6 h-6 text-background" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Profile Info -->
                    <div class="flex-1 text-center md:text-left">
                        <h1 class="text-4xl font-heading font-bold text-primary mb-2">Hermione Granger</h1>
                        <p class="text-xl mb-4">Advanced Spellbook Collector</p>
                        <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                            <span class="px-4 py-2 rounded-full bg-accent bg-opacity-30 text-primary border border-primary">
                                Level 42 Reader
                            </span>
                            <span class="px-4 py-2 rounded-full bg-accent bg-opacity-30 text-primary border border-primary">
                                Ancient Runes Expert
                            </span>
                            <span class="px-4 py-2 rounded-full bg-accent bg-opacity-30 text-primary border border-primary">
                                Book Whisperer
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="stats-card rounded-xl p-6 text-center transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-2xl font-heading font-bold text-primary mb-2">Books Read</h3>
                <p class="text-4xl font-bold">247</p>
            </div>
            <div class="stats-card rounded-xl p-6 text-center transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-2xl font-heading font-bold text-primary mb-2">Reading Hours</h3>
                <p class="text-4xl font-bold">1,842</p>
            </div>
            <div class="stats-card rounded-xl p-6 text-center transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-2xl font-heading font-bold text-primary mb-2">Achievements</h3>
                <p class="text-4xl font-bold">28</p>
            </div>
        </div>

        <!-- Current Reading -->
        <div class="bg-secondary bg-opacity-50 rounded-xl p-8 mb-12">
            <h2 class="text-3xl font-heading font-bold text-primary mb-6">Currently Reading</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="flex gap-4 items-center bg-background bg-opacity-50 rounded-lg p-4">
                    <img src="/api/placeholder/100/150" alt="Book cover" class="w-24 h-36 object-cover rounded shadow-lg">
                    <div>
                        <h3 class="font-heading font-bold text-primary mb-1">Advanced Potion Making</h3>
                        <p class="text-sm mb-2">by Libatius Borage</p>
                        <div class="w-full bg-background rounded-full h-2">
                            <div class="progress-bar w-3/4 h-full rounded-full"></div>
                        </div>
                        <p class="text-sm mt-2">75% Complete</p>
                    </div>
                </div>
                <!-- Add more currently reading books as needed -->
            </div>
        </div>

        <!-- Recent Achievements -->
        <div class="bg-secondary bg-opacity-50 rounded-xl p-8 mb-12">
            <h2 class="text-3xl font-heading font-bold text-primary mb-6">Recent Achievements</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="achievement-badge text-center">
                    <div class="w-24 h-24 mx-auto bg-accent bg-opacity-30 rounded-full flex items-center justify-center border-2 border-primary">
                        <svg class="w-12 h-12 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="font-heading font-bold text-primary mt-4">Night Owl</h3>
                    <p class="text-sm">Read for 100 hours at night</p>
                </div>
                <!-- Add more achievements as needed -->
            </div>
        </div>

        <!-- Reading History -->
        <div class="bg-secondary bg-opacity-50 rounded-xl p-8">
            <h2 class="text-3xl font-heading font-bold text-primary mb-6">Reading History</h2>
            <div class="space-y-6">
                <div class="flex items-center gap-4 p-4 bg-background bg-opacity-50 rounded-lg">
                    <img src="/api/placeholder/80/120" alt="Book cover" class="w-16 h-24 object-cover rounded shadow-lg">
                    <div class="flex-1">
                        <h3 class="font-heading font-bold text-primary">Magical Theory</h3>
                        <p class="text-sm">by Adalbert Waffling</p>
                        <p class="text-sm text-text opacity-75">Completed on March 15, 2024</p>
                    </div>
                    <div class="text-right">
                        <span class="text-primary font-bold">⭐ 4.5</span>
                    </div>
                </div>
                <!-- Add more reading history items as needed -->
            </div>
        </div>
    </main>

    <footer class="bg-secondary bg-opacity-50 text-text py-8 mt-12">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 BookNest. All magical rights reserved.</p>
        </div>
    </footer>

    <script>
        // Add hover effects to stats cards
        document.querySelectorAll('.stats-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.boxShadow = '0 0 20px rgba(255, 215, 0, 0.3)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.boxShadow = 'none';
            });
        });

        // Animate achievement badges on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'float 3s ease-in-out infinite';
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.achievement-badge').forEach(badge => {
            observer.observe(badge);
        });
    </script>
</body>
</html>