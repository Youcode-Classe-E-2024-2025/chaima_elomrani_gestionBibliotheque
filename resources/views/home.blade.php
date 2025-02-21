<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNest - Discover, Exchange, Connect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Crimson+Pro:wght@500;600&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

        .book-card:hover .book-cover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        .gradient-text {
            background: linear-gradient(45deg, #4A90E2, #5AB9EA);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        serif: ['Crimson Pro', 'serif'],
                    },
                    colors: {
                        'primary': '#2D3142',
                        'secondary': '#4F5D75',
                        'accent': '#5AB9EA',
                        'light': '#D8D5DB',
                        'dark': '#1C1F2A',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-primary font-sans text-light">
    <div x-data="{ mobileMenuOpen: false, searchOpen: false }">
        <header class="bg-dark/80 backdrop-blur-md shadow-md fixed w-full z-50">
            <nav class="container mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <a href="#" class="text-3xl font-bold text-accent font-serif tracking-tight">BookNest</a>
                    <div class="hidden md:flex space-x-8">
                        <a href="#"
                            class="text-light hover:text-accent transition-all duration-300 font-medium">Discover</a>
                        <a href="#"
                            class="text-light hover:text-accent transition-all duration-300 font-medium">Community</a>
                        <a href="#"
                            class="text-light hover:text-accent transition-all duration-300 font-medium">Blog</a>
                    </div>
                    <div class="hidden md:flex space-x-4 items-center">
                        <button @click="searchOpen = !searchOpen"
                            class="text-light hover:text-accent transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                        <a href="/register"
                            class="bg-accent hover:bg-secondary text-primary font-medium py-2.5 px-6 rounded-full transition-all duration-300 shadow-sm hover:shadow-md">Join
                            Now</a>
                    </div>
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-light">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </nav>
            <div x-show="mobileMenuOpen" x-cloak class="md:hidden bg-dark/95 py-4 px-6 space-y-3">
                <a href="#" class="block text-light hover:text-accent font-medium">Discover</a>
                <a href="#" class="block text-light hover:text-accent font-medium">Community</a>
                <a href="#" class="block text-light hover:text-accent font-medium">Blog</a>
                <a href="/register"
                    class="block mt-4 bg-accent text-primary font-medium py-2 text-center rounded-lg">Join Now</a>
            </div>
            <div x-show="searchOpen" x-cloak class="absolute inset-x-0 top-full bg-dark shadow-lg p-6">
                <form class="max-w-4xl mx-auto">
                    <div class="relative">
                        <input type="text" placeholder="Search titles, authors, or genres..."
                            class="w-full px-6 py-4 rounded-xl border-2 border-secondary focus:border-accent focus:ring-0 text-light bg-primary placeholder-secondary text-lg">
                        <button type="submit"
                            class="absolute right-5 top-1/2 -translate-y-1/2 text-accent hover:text-light">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </header>

        <main class="pt-20">
            <section class="relative bg-dark text-light py-[12%] overflow-hidden">
                <div class="absolute opacity-50 inset-0 bg-cover bg-center" style="background-image: url('https://i.pinimg.com/736x/b7/03/a8/b703a870c09fe136b5d14fc8872dcd95.jpg');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-dark/80 via-dark/50 to-dark/30"></div>

           
                <div class="container mx-auto px-6 text-center relative z-10">
                    <h1 class="text-5xl md:text-6xl font-serif font-bold mb-6 leading-tight">
                        <span class="gradient-text">Discover & Share</span><br>
                        The World Through Books
                    </h1>
                    <p class="text-xl text-secondary mb-10 max-w-2xl mx-auto">
                        Join our vibrant community of readers. Exchange stories, gain insights, and connect through the
                        magic of books.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="/register"
                            class="bg-accent hover:bg-secondary text-primary font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Start Exploring
                        </a>
                        <a href="#"
                            class="border-2 border-light/20 hover:border-accent text-light hover:text-accent font-semibold py-4 px-8 rounded-full transition-all duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
            </section>

            <section class="py-20 bg-primary">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-accent font-semibold">How it works</span>
                        <h2 class="text-4xl font-serif font-bold text-light mt-4">Begin Your Literary Journey</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div
                            class="p-6 rounded-xl bg-secondary/30 hover:bg-dark transition-all duration-300 border border-secondary hover:border-accent/20 hover:shadow-lg">
                            <div class="w-16 h-16 bg-accent rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-light mb-3">Create Profile</h3>
                            <p class="text-secondary">Build your personal library and share your reading preferences</p>
                        </div>
                        <div
                            class="p-6 rounded-xl bg-secondary/30 hover:bg-dark transition-all duration-300 border border-secondary hover:border-accent/20 hover:shadow-lg">
                            <div class="w-16 h-16 bg-accent rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-light mb-3">Discover Books</h3>
                            <p class="text-secondary">Explore a vast collection of books from various genres</p>
                        </div>
                        <div
                            class="p-6 rounded-xl bg-secondary/30 hover:bg-dark transition-all duration-300 border border-secondary hover:border-accent/20 hover:shadow-lg">
                            <div class="w-16 h-16 bg-accent rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-light mb-3">Exchange & Connect</h3>
                            <p class="text-secondary">Swap books with other members and engage in literary discussions
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-20 bg-dark">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="text-accent font-semibold">Featured Collection</span>
                        <h2 class="text-4xl font-serif font-bold text-light mt-4">Recently Added Treasures</h2>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div
                            class="book-card group relative overflow-hidden rounded-2xl bg-primary shadow-md hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden h-80">
                                <img src="https://i.pinimg.com/736x/5e/ec/32/5eec32565552846b675c7cc47083ad99.jpg" alt="Book Cover"
                                    class="book-cover w-full h-full object-cover transition-all duration-500">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-dark/80 via-transparent p-6 flex items-end">
                                    <div class="text-light">
                                        <h3 class="font-serif text-xl font-bold mb-1">The Great Adventure</h3>
                                        <p class="text-sm opacity-90">J.K. Rowling</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="book-card group relative overflow-hidden rounded-2xl bg-primary shadow-md hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden h-80">
                                <img src="https://i.pinimg.com/736x/60/86/09/608609cb613363a4bec0992fd87c1f9f.jpg" alt="Book Cover"
                                    class="book-cover w-full h-full object-cover transition-all duration-500">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-dark/80 via-transparent p-6 flex items-end">
                                    <div class="text-light">
                                        <h3 class="font-serif text-xl font-bold mb-1">Midnight's Echo</h3>
                                        <p class="text-sm opacity-90">Haruki Murakami</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="book-card group relative overflow-hidden rounded-2xl bg-primary shadow-md hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden h-80">
                                <img src="https://i.pinimg.com/736x/d8/df/f0/d8dff0cbd3d58764cf8ba0fe86406ebe.jpg" alt="Book Cover"
                                    class="book-cover w-full h-full object-cover transition-all duration-500">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-dark/80 via-transparent p-6 flex items-end">
                                    <div class="text-light">
                                        <h3 class="font-serif text-xl font-bold mb-1">The Silent Whisper</h3>
                                        <p class="text-sm opacity-90">Gillian Flynn</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="book-card group relative overflow-hidden rounded-2xl bg-primary shadow-md hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden h-80">
                                <img src="https://i.pinimg.com/736x/f3/f8/1e/f3f81ec362de8f277272adaae1595ef2.jpg" alt="Book Cover"
                                    class="book-cover w-full h-full object-cover transition-all duration-500">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-dark/80 via-transparent p-6 flex items-end">
                                    <div class="text-light">
                                        <h3 class="font-serif text-xl font-bold mb-1">Echoes of Eternity</h3>
                                        <p class="text-sm opacity-90">Neil Gaiman</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="bg-dark py-12">
                <div class="container mx-auto px-6">
                    <div class="grid md:grid-cols-4 gap-8">
                        <div>
                            <h3 class="text-2xl font-bold text-accent mb-4">BookNest</h3>
                            <p class="text-secondary">Connecting readers, one book at a time.</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-light mb-4">Quick Links</h4>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-secondary hover:text-accent transition-colors">About Us</a>
                                </li>
                                <li><a href="#" class="text-secondary hover:text-accent transition-colors">How It
                                        Works</a></li>
                                <li><a href="#" class="text-secondary hover:text-accent transition-colors">FAQs</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-light mb-4">Legal</h4>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-secondary hover:text-accent transition-colors">Privacy
                                        Policy</a></li>
                                <li><a href="#" class="text-secondary hover:text-accent transition-colors">Terms of
                                        Service</a></li>
                                <li><a href="#" class="text-secondary hover:text-accent transition-colors">Cookie
                                        Policy</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-light mb-4">Connect With Us</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="text-secondary hover:text-accent transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </a>
                                <a href="#" class="text-secondary hover:text-accent transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </a>
                                <a href="#" class="text-secondary hover:text-accent transition-colors">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-secondary/30 mt-12 pt-8 text-center text-secondary">
                        <p>&copy; 2023 BookNest. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </main>
    </div>
</body>

</html>