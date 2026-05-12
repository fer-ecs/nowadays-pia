<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'NØWADAYS Studio | Desarrollo Estratégico'; ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            black: '#050505',
                            dark: '#0a0a0a',
                            gray: '#171717',
                            red: '#DC2626', 
                            redDark: '#991b1b',
                            white: '#f5f5f5'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="antialiased flex flex-col min-h-screen"> 

    <nav class="fixed w-full z-50 glass-header transition-all duration-300 h-20" id="navbar">
        <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-center md:justify-between relative">
            
            <a href="inicio" class="text-2xl font-bold tracking-tighter hover:text-brand-red transition-colors flex items-center gap-1 group z-50">
                NØWADAYS<span class="font-light text-gray-400 group-hover:text-white transition-colors"> Studio</span>
                <span class="w-1.5 h-1.5 rounded-full bg-brand-red ml-0.5 animate-pulse"></span>
            </a>
            
            <div class="hidden md:flex space-x-8 text-sm font-medium items-center">
                
                <div class="relative group h-full flex items-center">
                    <button class="text-gray-400 group-hover:text-brand-red transition-colors flex items-center gap-1">
                        Productos
                        <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover:rotate-180"></i>
                    </button>
                    
                    <div class="dropdown-menu">
                        <a href="cro" class="block px-4 py-3 text-gray-300 hover:bg-white/5 hover:text-brand-red transition-colors">Guía CRO</a>
                        <a href="esg" class="block px-4 py-3 text-gray-300 hover:bg-white/5 hover:text-brand-red transition-colors">Datos Verdes ESG</a>
                    </div>
                </div>
                
                <div class="relative group h-full flex items-center">
                    <button class="text-gray-400 group-hover:text-brand-red transition-colors flex items-center gap-1">
                        Servicios
                        <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover:rotate-180"></i>
                    </button>
                    
                    <div class="dropdown-menu">
                        <a href="diseno-web" class="block px-4 py-3 text-gray-300 hover:bg-white/5 hover:text-brand-red transition-colors">Diseño Web</a>
                        <a href="ecommerce" class="block px-4 py-3 text-gray-300 hover:bg-white/5 hover:text-brand-red transition-colors">E-commerce</a>
                    </div>
                </div>

                <a href="nosotros" class="text-gray-400 hover:text-brand-red transition-colors">Nosotros</a>
                
                <a href="inicio#contacto" class="bg-white text-black px-5 py-2 rounded-full font-bold hover:bg-brand-red hover:text-white transition-all transform hover:scale-105">
                    Empezar Proyecto
                </a>
            </div>

        </div>
    </nav>

    <nav id="mobile-subnav" class="md:hidden fixed top-20 w-full z-40 bg-brand-dark/95 border-b border-white/5 backdrop-blur-md transition-all duration-500 ease-in-out flex flex-col">
        
        <div class="flex justify-around items-center h-12 px-4 text-xs font-medium uppercase tracking-wider text-gray-400">
            <button id="mobile-productos-btn" class="hover:text-white transition-colors py-2 w-full flex items-center justify-center gap-1 outline-none text-xs font-medium uppercase tracking-wider">
                Productos <i data-lucide="chevron-down" id="mobile-productos-icon" class="w-3 h-3 transition-transform duration-300"></i>
            </button>

            <div class="w-px h-3 bg-white/10 shrink-0"></div>
            
            <button id="mobile-services-btn" class="hover:text-white transition-colors py-2 w-full flex items-center justify-center gap-1 outline-none text-xs font-medium uppercase tracking-wider">
                Servicios <i data-lucide="chevron-down" id="mobile-services-icon" class="w-3 h-3 transition-transform duration-300"></i>
            </button>
            
            <div class="w-px h-3 bg-white/10 shrink-0"></div>
            <a href="nosotros" class="hover:text-white transition-colors py-2 w-full text-center">Nosotros</a>
        </div>

        <div id="mobile-productos-menu" class="hidden justify-around items-center h-12 px-4 text-xs font-medium uppercase tracking-wider text-gray-400 border-t border-white/5">
            <a href="cro" class="hover:text-white transition-colors py-2 w-full text-center">Guía CRO</a>
            <div class="w-px h-3 bg-white/10 shrink-0"></div>
            <a href="esg" class="hover:text-white transition-colors py-2 w-full text-center">Datos ESG</a>
        </div>

        <div id="mobile-services-menu" class="hidden justify-around items-center h-12 px-4 text-xs font-medium uppercase tracking-wider text-gray-400 border-t border-white/5">
            <a href="diseno-web" class="hover:text-white transition-colors py-2 w-full text-center">Diseño Web</a>
            <div class="w-px h-3 bg-white/10 shrink-0"></div>
            <a href="ecommerce" class="hover:text-white transition-colors py-2 w-full text-center">E-commerce</a>
        </div>

    </nav>

    <script>
        const subnav = document.getElementById('mobile-subnav');
        
        // Elementos de Servicios
        const mobileServicesBtn = document.getElementById('mobile-services-btn');
        const mobileServicesMenu = document.getElementById('mobile-services-menu');
        const mobileServicesIcon = document.getElementById('mobile-services-icon');
        
        // Elementos de Productos
        const mobileProductosBtn = document.getElementById('mobile-productos-btn');
        const mobileProductosMenu = document.getElementById('mobile-productos-menu');
        const mobileProductosIcon = document.getElementById('mobile-productos-icon');
        
        let lastScrollY = window.scrollY;

        // Función para cerrar todos los menús desplegables
        function closeAllMobileMenus() {
            if (!mobileServicesMenu.classList.contains('hidden')) {
                mobileServicesMenu.classList.add('hidden');
                mobileServicesMenu.classList.remove('flex');
                mobileServicesIcon.classList.remove('rotate-180');
            }
            if (!mobileProductosMenu.classList.contains('hidden')) {
                mobileProductosMenu.classList.add('hidden');
                mobileProductosMenu.classList.remove('flex');
                mobileProductosIcon.classList.remove('rotate-180');
            }
        }

        // Lógica de scroll y auto-ocultación
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50 && window.scrollY > lastScrollY) {
                // Ocultar header
                subnav.style.transform = "translateY(-100%)";
                subnav.style.opacity = "0";
                
                // Cerrar cualquier menú abierto al scrollear hacia abajo
                closeAllMobileMenus();
            } else {
                // Mostrar header
                subnav.style.transform = "translateY(0)";
                subnav.style.opacity = "1";
            }
            lastScrollY = window.scrollY;
        });

        // Toggle de Servicios
        if (mobileServicesBtn) {
            mobileServicesBtn.addEventListener('click', () => {
                const isClosed = mobileServicesMenu.classList.contains('hidden');
                closeAllMobileMenus(); // Cierra el otro si está abierto
                
                if (isClosed) {
                    mobileServicesMenu.classList.remove('hidden');
                    mobileServicesMenu.classList.add('flex');
                    mobileServicesIcon.classList.add('rotate-180');
                }
            });
        }

        // Toggle de Productos
        if (mobileProductosBtn) {
            mobileProductosBtn.addEventListener('click', () => {
                const isClosed = mobileProductosMenu.classList.contains('hidden');
                closeAllMobileMenus(); // Cierra el otro si está abierto
                
                if (isClosed) {
                    mobileProductosMenu.classList.remove('hidden');
                    mobileProductosMenu.classList.add('flex');
                    mobileProductosIcon.classList.add('rotate-180');
                }
            });
        }
    </script>