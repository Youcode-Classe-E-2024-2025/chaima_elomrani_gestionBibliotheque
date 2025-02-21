<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNest Magical Catalogue - Discover Enchanted Reads</title>
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
    </style>
</head>
<body class="bg-background text-text">
    <div class="magic-sparkle fixed inset-0 pointer-events-none opacity-30"></div>
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
        <h1 class="text-5xl font-heading font-bold mb-8 text-center text-primary">Enchanted Tomes</h1>
        
        <div class="mb-12 relative">
            <input type="text" placeholder="Search for magical books..." class="w-full p-4 rounded-full bg-secondary bg-opacity-50 text-text placeholder-text placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-primary transition-all duration-300 hover:shadow-lg">
            <svg class="w-6 h-6 text-primary absolute right-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Book Card 1 -->
            <div class="bg-secondary bg-opacity-50 rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                <div class="relative h-96">
                    <img src="https://source.unsplash.com/random/400x600?magic-book" alt="The Sorcerer's Stone" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h3 class="text-xl font-heading font-bold text-primary">The Sorcerer's Stone</h3>
                        <p class="text-sm text-text opacity-80">Albus Dumbledore</p>
                    </div>
                </div>
            </div>

            <!-- Book Card 2 -->
            <div class="bg-secondary bg-opacity-50 rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                <div class="relative h-96">
                    <img src="https://source.unsplash.com/random/400x600?spell-book" alt="Advanced Potion Making" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h3 class="text-xl font-heading font-bold text-primary">Advanced Potion Making</h3>
                        <p class="text-sm text-text opacity-80">Severus Snape</p>
                    </div>
                </div>
            </div>

            <!-- Book Card 3 -->
            <div class="bg-secondary bg-opacity-50 rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                <div class="relative h-96">
                    <img src="https://source.unsplash.com/random/400x600?wizard" alt="Fantastic Beasts and Where to Find Them" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h3 class="text-xl font-heading font-bold text-primary">Fantastic Beasts</h3>
                        <p class="text-sm text-text opacity-80">Newt Scamander</p>
                    </div>
                </div>
            </div>

            <!-- Book Card 4 -->
            <div class="bg-secondary bg-opacity-50 rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                <div class="relative h-96">
                    <img src="https://source.unsplash.com/random/400x600?crystal-ball" alt="Unfogging the Future" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h3 class="text-xl font-heading font-bold text-primary">Unfogging the Future</h3>
                        <p class="text-sm text-text opacity-80">Sybill Trelawney</p>
                    </div>
                </div>
            </div>

            <!-- Book Card 5 -->
            <div class="bg-secondary bg-opacity-50 rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                <div class="relative h-96">
                    <img src="https://source.unsplash.com/random/400x600?wand" alt="The Standard Book of Spells" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h3 class="text-xl font-heading font-bold text-primary">Standard Book of Spells</h3>
                        <p class="text-sm text-text opacity-80">Miranda Goshawk</p>
                    </div>
                </div>
            </div>

            <!-- Book Card 6 -->
            <div class="bg-secondary bg-opacity-50 rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                <div class="relative h-96">
                    <img src="https://source.unsplash.com/random/400x600?magical-creatures" alt="Care of Magical Creatures" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h3 class="text-xl font-heading font-bold text-primary">Magical Creatures</h3>
                        <p class="text-sm text-text opacity-80">Rubeus Hagrid</p>
                    </div>
                </div>
            </div>

            <!-- Book Card 7 -->
            <div class="bg-secondary bg-opacity-50 rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                <div class="relative h-96">
                    <img src="https://source.unsplash.com/random/400x600?dark-arts" alt="Defense Against the Dark Arts" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h3 class="text-xl font-heading font-bold text-primary">Dark Arts Defense</h3>
                        <p class="text-sm text-text opacity-80">Remus Lupin</p>
                    </div>
                </div>
            </div>

            <!-- Book Card 8 -->
            <div class="bg-secondary bg-opacity-50 rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                <div class="relative h-96">
                    <img src="https://source.unsplash.com/random/400x600?herbology" alt="One Thousand Magical Herbs and Fungi" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h3 class="text-xl font-heading font-bold text-primary">Magical Herbs & Fungi</h3>
                        <p class="text-sm text-text opacity-80">Pomona Sprout</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-secondary bg-opacity-50 text-text py-8 mt-12">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 BookNest. All magical rights reserved.</p>
        </div>
    </footer>

    <script>
        // Add a magical hover effect to book cards
        document.querySelectorAll('.grid > div').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });

        // Add a magical glow effect to the search input
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('focus', () => {
            searchInput.classList.add('ring-4', 'ring-primary', 'ring-opacity-50');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.classList.remove('ring-4', 'ring-primary', 'ring-opacity-50');
        });
    </script>
</body>
</html>

