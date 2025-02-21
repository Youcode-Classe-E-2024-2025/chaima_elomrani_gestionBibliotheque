<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNest - Magical Library of Wonders</title>
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
            animation: sparkle 10s linear infinite;
        }
        @keyframes sparkle {
            0% { background-position: 0 0; }
            100% { background-position: 1000px 1000px; }
        }
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
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

    <main>
        <!-- Hero Section -->
        <section class="py-20 relative overflow-hidden">
            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center">
                    <h1 class="text-5xl md:text-7xl font-heading font-bold mb-8 text-primary">Welcome to BookNest</h1>
                    <p class="text-xl md:text-2xl mb-12 max-w-3xl mx-auto">Discover a world of magical literature where every page turn is an adventure</p>
                    <a href="#" class="bg-primary text-background px-8 py-4 rounded-full font-bold text-lg hover:bg-opacity-80 transition-all duration-300 inline-block">Begin Your Magical Journey</a>
                </div>
            </div>
            <div class="absolute inset-0 z-0">
                <img src="https://i.pinimg.com/736x/c5/17/20/c5172086ae91a1c253b6e556b89d0176.jpg" alt="Magical Library" class="w-full h-full object-cover opacity-20">
            </div>
        </section>

        <!-- Featured Books Section -->
        <section class="py-20 bg-secondary bg-opacity-30">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-heading font-bold mb-12 text-center text-primary">Enchanted Selections</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                    <!-- Featured Book 1 -->
                    <div class="bg-background rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                        <img src="https://i.pinimg.com/736x/0a/44/c0/0a44c0696c44088bd7966aff4431a461.jpg" alt="The Grand Grimoire" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-heading font-bold mb-2 text-primary">The Grand Grimoire</h3>
                            <p class="text-sm mb-4">Unlock the secrets of ancient spells and incantations</p>
                            <a href="#" class="text-accent hover:text-primary transition-colors duration-300">Explore the tome →</a>
                        </div>
                    </div>
                    <!-- Featured Book 2 -->
                    <div class="bg-background rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                        <img src="https://i.pinimg.com/736x/4d/63/7d/4d637de115e622fa3564d811539a6e68.jpg" alt="Potions for Beginners" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-heading font-bold mb-2 text-primary">Potions for Beginners</h3>
                            <p class="text-sm mb-4">Master the art of brewing magical elixirs</p>
                            <a href="#" class="text-accent hover:text-primary transition-colors duration-300">Brew your first potion →</a>
                        </div>
                    </div>
                    <!-- Featured Book 3 -->
                    <div class="bg-background rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105">
                        <img src="https://i.pinimg.com/736x/d1/00/3a/d1003a5c9cf260cb86adb96022ee9d84.jpg" alt="Fantastic Beasts Encyclopedia" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-heading font-bold mb-2 text-primary">Fantastic Beasts Encyclopedia</h3>
                            <p class="text-sm mb-4">Discover the wondrous creatures of the magical world</p>
                            <a href="#" class="text-accent hover:text-primary transition-colors duration-300">Meet the beasts →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Magical Quote Section -->
        <section class="py-20 relative overflow-hidden">
            <div class="container mx-auto px-6 relative z-10">
                <blockquote class="text-2xl md:text-4xl font-heading italic text-center max-w-4xl mx-auto">
                    <p class="mb-4">"Words are, in my not-so-humble opinion, our most inexhaustible source of magic."</p>
                    <footer class="text-lg text-primary">- Albus Dumbledore</footer>
                </blockquote>
            </div>
            <div class="absolute inset-0 z-0 flex items-center justify-center opacity-10">
                <img src="https://i.pinimg.com/736x/fa/15/ed/fa15ed94d595a13bbe886a7ceb5731b8.jpg" alt="Magic Wand" class="w-1/2 h-auto object-contain floating">
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="py-20 bg-secondary bg-opacity-30">
            <div class="container mx-auto px-6">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-heading font-bold mb-8 text-primary">Join Our Magical Community</h2>
                    <p class="mb-8">Subscribe to receive enchanted book recommendations and exclusive magical content</p>
                    <form class="flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="Enter your email address" class="flex-grow px-4 py-2 rounded-full bg-background border border-accent focus:outline-none focus:ring-2 focus:ring-primary">
                        <button type="submit" class="bg-accent hover:bg-primary text-background px-6 py-2 rounded-full font-bold transition-colors duration-300">Subscribe</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-secondary bg-opacity-50 text-text py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/3 mb-8 md:mb-0">
                    <h3 class="text-2xl font-heading font-bold mb-4 text-primary">BookNest</h3>
                    <p class="mb-4">Unleashing the magic of literature, one page at a time.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-text hover:text-primary transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="text-text hover:text-primary transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="#" class="text-text hover:text-primary transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-1/3 mb-8 md:mb-0">
                    <h3 class="text-xl font-heading font-bold mb-4 text-primary">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-primary transition-colors duration-300">Home</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors duration-300">Catalogue</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors duration-300">Spells</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors duration-300">Potions</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors duration-300">About Us</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3">
                    <h3 class="text-xl font-heading font-bold mb-4 text-primary">Contact Us</h3>
                    <p class="mb-2">123 Diagon Alley, London</p>
                    <p class="mb-2">Email: magic@booknest.com</p>
                    <p>Phone: (123) 456-7890</p>
                </div>
            </div>
            <div class="border-t border-text border-opacity-20 mt-8 pt-8 text-center">
                <p>&copy; 2024 BookNest. All magical rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Add a magical hover effect to featured books
        document.querySelectorAll('.grid > div').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });

        // Add a magical glow effect to the newsletter input
        const emailInput = document.querySelector('input[type="email"]');
        emailInput.addEventListener('focus', () => {
            emailInput.classList.add('ring-2', 'ring-primary', 'ring-opacity-50');
        });
        emailInput.addEventListener('blur', () => {
            emailInput.classList.remove('ring-2', 'ring-primary', 'ring-opacity-50');
        });

        // Animate the hero text on page load
        window.addEventListener('load', () => {
            const heroText = document.querySelector('h1');
            heroText.style.opacity = '0';
            heroText.style.transform = 'translateY(20px)';
            setTimeout(() => {
                heroText.style.transition = 'opacity 1s ease-out, transform 1s ease-out';
                heroText.style.opacity = '1';
                heroText.style.transform = 'translateY(0)';
            }, 500);
        });
    </script>
</body>
</html>

