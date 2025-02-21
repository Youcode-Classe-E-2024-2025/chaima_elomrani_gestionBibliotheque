<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNest Magical Catalogue - Discover Enchanted Reads</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Raleway:wght@300;400;600;700&display=swap"
        rel="stylesheet">
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
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 100px 100px;
            }
        }

        .modal-backdrop {
            backdrop-filter: blur(8px);
            background-color: rgba(26, 11, 46, 0.85);
        }

        .modal {
            animation: modalAppear 0.3s ease-out;
        }

        @keyframes modalAppear {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }

            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .book-card:hover .card-overlay {
            opacity: 1;
        }
    </style>
</head>

<body class="bg-background text-text">
    <div class="magic-sparkle fixed inset-0 pointer-events-none opacity-30"></div>

    <!-- Header Section -->
    <header class="bg-secondary bg-opacity-50 shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-3xl font-heading font-bold text-primary">BookNest</a>
                <div class="hidden md:flex space-x-6">
                    <a href="/" class="text-text hover:text-primary transition-colors duration-300">Home</a>
                    <a href="/books" class="text-text hover:text-primary transition-colors duration-300">Catalogue</a>
                    <a href="/addPage" class="text-text hover:text-primary transition-colors duration-300">Add Books</a>
                    <a href="/profile" class="text-text hover:text-primary transition-colors duration-300">Profile</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-12">
        <h1 class="text-5xl font-heading font-bold mb-8 text-center text-primary">Enchanted Tomes</h1>

        <!-- Search Bar -->
        <div class="mb-12 relative">
            <input type="text" placeholder="Search for magical books..."
                class="w-full p-4 rounded-full bg-secondary bg-opacity-50 text-text placeholder-text placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-primary transition-all duration-300 hover:shadow-lg">
            <svg class="w-6 h-6 text-primary absolute right-4 top-1/2 transform -translate-y-1/2" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>

        <!-- Book Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($books as $book)
                <div class="book-card cursor-pointer bg-secondary bg-opacity-50 rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:scale-105"
                    data-book-id="{{ $book['id'] }}" data-book-title="{{ $book['title'] }}"
                    data-book-author="{{ $book['author'] }}" data-book-description="{{ $book['description'] }}"
                    data-book-image="{{ $book['image'] }}">
                    <div class="relative h-96">
                        <img src="{{ $book['image'] }}" alt="{{ $book['title'] }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="text-xl font-heading font-bold text-primary">{{ $book['title'] }}</h3>
                            <p class="text-sm text-text opacity-80">{{ $book['author'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <!-- Modal -->
    <div id="bookModal" class="hidden fixed inset-0 z-50">
        <div class="modal-backdrop absolute inset-0 flex items-center justify-center p-4">
            <div
                class="modal bg-secondary bg-opacity-95 rounded-xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
                <div class="relative p-6">
                    <!-- Close Button -->
                    <button class="absolute top-4 right-4 text-text hover:text-primary transition-colors duration-300"
                        onclick="closeModal()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <!-- Modal Content -->
                    <div class="flex flex-col md:flex-row gap-8">
                        <!-- Book Image -->
                        <div class="md:w-1/3">
                            <img id="modalImage" src="" alt="" class="w-full h-auto rounded-lg shadow-lg">
                        </div>

                        <!-- Book Details -->
                        <div class="md:w-2/3">
                            <h2 id="modalTitle" class="text-3xl font-heading font-bold text-primary mb-4"></h2>
                            <p id="modalAuthor" class="text-xl text-text mb-6"></p>
                            <div class="space-y-4">
                                <p id="modalDescription" class="text-text leading-relaxed"></p>
                                <div class="flex flex-wrap gap-4 mt-8">
                                    <button
                                        class="bg-primary text-background font-bold py-3 px-6 rounded-full hover:bg-opacity-80 transition-all duration-300 transform hover:scale-105">
                                        Reserve Now
                                    </button>
                                    <button
                                        class="border-2 border-primary text-primary font-bold py-3 px-6 rounded-full hover:bg-primary hover:text-background transition-all duration-300 transform hover:scale-105">
                                        Add to Wishlist
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-secondary bg-opacity-50 text-text py-8 mt-12">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 BookNest. All magical rights reserved.</p>
        </div>
    </footer>

    <script>
        // Modal functionality
        const modal = document.getElementById('bookModal');
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.getElementById('modalTitle');
        const modalAuthor = document.getElementById('modalAuthor');
        const modalDescription = document.getElementById('modalDescription');

        // Add click event listeners to all book cards
        document.querySelectorAll('.book-card').forEach(card => {
            card.addEventListener('click', () => {
                const { bookTitle, bookAuthor, bookDescription, bookImage } = card.dataset;

                // Update modal content
                modalImage.src = bookImage;
                modalImage.alt = bookTitle;
                modalTitle.textContent = bookTitle;
                modalAuthor.textContent = `By ${bookAuthor}`;
                modalDescription.textContent = bookDescription;

                // Show modal with animation
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close modal function
        function closeModal() {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        modal.addEventListener('click', (e) => {
            if (e.target === modal.querySelector('.modal-backdrop')) {
                closeModal();
            }
        });

        // Close modal on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Add magical hover effect to book cards
        document.querySelectorAll('.book-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });

        // Magical glow effect for search input
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