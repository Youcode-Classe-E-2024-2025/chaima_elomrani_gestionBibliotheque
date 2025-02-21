<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNest Admin - Magical Management</title>
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
                        success: '#4CAF50',
                        danger: '#FF5252',
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
        .magic-input {
            background: rgba(74, 14, 78, 0.3);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 215, 0, 0.2);
            transition: all 0.3s ease;
        }
        .magic-input:focus {
            border-color: #FFD700;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
        }
    </style>
</head>
<body class="bg-background text-text">
    <div class=" fixed inset-0 pointer-events-none opacity-30"></div>

    <!-- Header -->
    <header class="bg-secondary bg-opacity-50 shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-3xl font-heading font-bold text-primary">BookNest Admin</a>
                <div class="flex items-center space-x-6">
                    <button onclick="openAddModal()" class="bg-primary text-background px-6 py-2 rounded-full font-bold hover:bg-opacity-80 transition-all duration-300 transform hover:scale-105">
                        Add New Book
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-12">
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="bg-secondary bg-opacity-50 rounded-xl p-6 text-center">
                <h3 class="text-2xl font-heading font-bold text-primary mb-2">Total Books</h3>
                <p class="text-4xl font-bold">324</p>
            </div>
            <div class="bg-secondary bg-opacity-50 rounded-xl p-6 text-center">
                <h3 class="text-2xl font-heading font-bold text-primary mb-2">Active Loans</h3>
                <p class="text-4xl font-bold">156</p>
            </div>
            <div class="bg-secondary bg-opacity-50 rounded-xl p-6 text-center">
                <h3 class="text-2xl font-heading font-bold text-primary mb-2">Categories</h3>
                <p class="text-4xl font-bold">12</p>
            </div>
        </div>

        <!-- Book Management Table -->
        <div class="bg-secondary bg-opacity-50 rounded-xl p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-heading font-bold text-primary">Book Inventory</h2>
                <input type="text" placeholder="Search books..." class="magic-input px-4 py-2 rounded-full text-text focus:outline-none">
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-primary border-opacity-20">
                            <th class="text-left py-4 px-4 font-heading text-primary">Title</th>
                            <th class="text-left py-4 px-4 font-heading text-primary">Author</th>
                            <th class="text-left py-4 px-4 font-heading text-primary">Cover</th>
                            <th class="text-left py-4 px-4 font-heading text-primary">description</th>
                            <th class="text-left py-4 px-4 font-heading text-primary">Status</th>
                            <th class="text-left py-4 px-4 font-heading text-primary">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-primary border-opacity-20 hover:bg-accent hover:bg-opacity-10">
                            <td class="py-4 px-4">
                                <div class="flex items-center gap-4">
                                    <img src="/api/placeholder/48/72" alt="Book cover" class="w-12 h-18 object-cover rounded">
                                    <span>Advanced Potion Making</span>
                                </div>
                            </td>
                            <td class="py-4 px-4">Libatius Borage</td>
                            <td class="py-4 px-4">Potions</td>
                            <td class="py-4 px-4">
                                <span class="px-3 py-1 rounded-full bg-success bg-opacity-20 text-success">Available</span>
                            </td>
                            <td class="py-4 px-4">
                                <div class="flex gap-2">
                                    <button onclick="openEditModal()" class="text-primary hover:text-accent">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    <button class="text-danger hover:text-red-400">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Add more book rows here -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Add Book Modal -->
    <div id="addModal" class="hidden fixed inset-0 z-50">
        <div class="absolute inset-0 bg-background bg-opacity-90 backdrop-blur-sm"></div>
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <div class="modal bg-secondary bg-opacity-95 rounded-xl shadow-2xl max-w-2xl w-full">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-heading font-bold text-primary">Add New Book</h2>
                        <button onclick="closeAddModal()" class="text-text hover:text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <form onsubmit="return false;">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2">Book Title</label>
                                <input type="text" class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Author</label>
                                <input type="text" class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Category</label>
                                <select class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none">
                                    <option>Potions</option>
                                    <option>Spells</option>
                                    <option>Magical Creatures</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Status</label>
                                <select class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none">
                                    <option>Available</option>
                                    <option>On Loan</option>
                                    <option>Reserved</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium mb-2">Description</label>
                                <textarea rows="4" class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none"></textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium mb-2">Cover Image</label>
                                <input type="file" accept="image/*" class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none">
                            </div>
                        </div>
                        <div class="flex justify-end gap-4 mt-6">
                            <button onclick="closeAddModal()" class="px-6 py-2 rounded-full border border-primary text-primary hover:bg-primary hover:text-background transition-colors duration-300">
                                Cancel
                            </button>
                            <button class="px-6 py-2 rounded-full bg-primary text-background hover:bg-opacity-80 transition-colors duration-300">
                                Add Book
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Book Modal -->
    <div id="editModal" class="hidden fixed inset-0 z-50">
        <div class="absolute inset-0 bg-background bg-opacity-90 backdrop-blur-sm"></div>
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <div class="modal bg-secondary bg-opacity-95 rounded-xl shadow-2xl max-w-2xl w-full">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-heading font-bold text-primary">Edit Book</h2>
                        <button onclick="closeEditModal()" class="text-text hover:text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <form onsubmit="return false;">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2">Book Title</label>
                                <input type="text" value="Advanced Potion Making" class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Author</label>
                                <input type="text" value="Libatius Borage" class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Category</label>
                                <select class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none">
                                    <option selected>Potions</option>
                                    <option>Spells</option>
                                    <option>Magical Creatures</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Status</label>
                                <select class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none">
                                    <option selected>Available</option>
                                    <option>On Loan</option>
                                    <option>Reserved</option>
                                </select>
                                </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium mb-2">Description</label>
                                <textarea rows="4" class="magic-input w-full px-4 py-2 rounded-lg text-text focus:outline-none">An advanced guide to potion-making, featuring complex recipes and magical brewing techniques.</textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium mb-2">Current Cover Image</label>
                                <div class="flex items-center gap-4">
                                    <img src="/api/placeholder/100/150" alt="Current cover" class="w-24 h-36 object-cover rounded">
                                    <input type="file" accept="image/*" class="magic-input flex-1 px-4 py-2 rounded-lg text-text focus:outline-none">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end gap-4 mt-6">
                            <button onclick="closeEditModal()" class="px-6 py-2 rounded-full border border-primary text-primary hover:bg-primary hover:text-background transition-colors duration-300">
                                Cancel
                            </button>
                            <button class="px-6 py-2 rounded-full bg-primary text-background hover:bg-opacity-80 transition-colors duration-300">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="hidden fixed inset-0 z-50">
        <div class="absolute inset-0 bg-background bg-opacity-90 backdrop-blur-sm"></div>
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <div class="modal bg-secondary bg-opacity-95 rounded-xl shadow-2xl max-w-md w-full">
                <div class="p-6">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-danger mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <h2 class="text-2xl font-heading font-bold text-primary mb-4">Confirm Deletion</h2>
                        <p class="mb-6">Are you sure you want to delete this book? This action cannot be undone.</p>
                        <div class="flex justify-center gap-4">
                            <button onclick="closeDeleteModal()" class="px-6 py-2 rounded-full border border-primary text-primary hover:bg-primary hover:text-background transition-colors duration-300">
                                Cancel
                            </button>
                            <button class="px-6 py-2 rounded-full bg-danger text-white hover:bg-opacity-80 transition-colors duration-300">
                                Delete Book
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-secondary bg-opacity-50 text-text py-8 mt-12">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 BookNest Admin Portal. All magical rights reserved.</p>
        </div>
    </footer>

    <script>
        // Modal Management
        const addModal = document.getElementById('addModal');
        const editModal = document.getElementById('editModal');
        const deleteModal = document.getElementById('deleteModal');

        function openAddModal() {
            addModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeAddModal() {
            addModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openEditModal() {
            editModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeEditModal() {
            editModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openDeleteModal() {
            deleteModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeDeleteModal() {
            deleteModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modals when clicking outside
        [addModal, editModal, deleteModal].forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal.querySelector('.absolute.inset-0')) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });
        });

        // Close modals on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                [addModal, editModal, deleteModal].forEach(modal => {
                    modal.classList.add('hidden');
                });
                document.body.style.overflow = 'auto';
            }
        });

        // Search functionality
        const searchInput = document.querySelector('input[placeholder="Search books..."]');
        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const tableRows = document.querySelectorAll('tbody tr');
            
            tableRows.forEach(row => {
                const title = row.querySelector('td:first-child').textContent.toLowerCase();
                const author = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || author.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Add magical hover effect to table rows
        document.querySelectorAll('tbody tr').forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.classList.add('transform', 'scale-[1.01]', 'transition-transform');
            });
            row.addEventListener('mouseleave', () => {
                row.classList.remove('transform', 'scale-[1.01]', 'transition-transform');
            });
        });

        // Add success notification function
        function showNotification(message, type = 'success') {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg ${
                type === 'success' ? 'bg-success' : 'bg-danger'
            } text-white transform transition-all duration-300 translate-y-[-100%]`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.transform = 'translateY(0)';
            }, 100);
            
            setTimeout(() => {
                notification.style.transform = 'translateY(-100%)';
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }

        // Form submission handling
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                showNotification('Changes saved successfully!');
                closeAddModal();
                closeEditModal();
            });
        });
    </script>
</body>
</html>