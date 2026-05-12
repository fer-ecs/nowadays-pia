<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Bloodshot | Sitios Web de Alto Rendimiento'; ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="icon" type="image/png" href="assets/img/bloodshot.png">

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
                Bloodshot<span class="font-light text-gray-400 group-hover:text-white transition-colors">.io</span>
                <span class="w-1.5 h-1.5 rounded-full bg-brand-red ml-0.5 animate-pulse"></span>
            </a>
            
            <div class="hidden md:flex space-x-8 text-sm font-medium items-center">
                <a href="proyectos" class="text-gray-400 hover:text-brand-red transition-colors">Proyectos</a>
                
                <div class="relative group h-full flex items-center">
                    <button class="text-gray-400 group-hover:text-brand-red transition-colors flex items-center gap-1">
                        Servicios
                        <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover:rotate-180"></i>
                    </button>
                    
                    <div class="dropdown-menu">
                        <a href="diseno-web" class="block px-4 py-3 text-gray-300 hover:bg-white/5 hover:text-brand-red transition-colors">Diseño Web</a>
                        <a href="ecommerce" class="block px-4 py-3 text-gray-300 hover:bg-white/5 hover:text-brand-red transition-colors">E-commerce</a>
                        <a href="correos" class="block px-4 py-3 text-gray-300 hover:bg-white/5 hover:text-brand-red transition-colors">Correos Empresariales</a>
                    </div>
                </div>

                <a href="nosotros" class="text-gray-400 hover:text-brand-red transition-colors">Nosotros</a>
                
                <a href="contacto" class="bg-white text-black px-5 py-2 rounded-full font-bold hover:bg-brand-red hover:text-white transition-all transform hover:scale-105">
                    Empezar Proyecto
                </a>
            </div>

        </div>
    </nav>

    <nav id="mobile-subnav" class="md:hidden fixed top-20 w-full z-40 bg-brand-dark/95 border-b border-white/5 backdrop-blur-md transition-all duration-500 ease-in-out flex flex-col">
        
        <div class="flex justify-around items-center h-12 px-4 text-xs font-medium uppercase tracking-wider text-gray-400">
            <a href="proyectos" class="hover:text-white transition-colors py-2 w-full text-center">Proyectos</a>
            <div class="w-px h-3 bg-white/10 shrink-0"></div>
            
            <button id="mobile-services-btn" class="hover:text-white transition-colors py-2 w-full flex items-center justify-center gap-1 outline-none text-xs font-medium uppercase tracking-wider">
                Servicios <i data-lucide="chevron-down" id="mobile-services-icon" class="w-3 h-3 transition-transform duration-300"></i>
            </button>
            
            <div class="w-px h-3 bg-white/10 shrink-0"></div>
            <a href="nosotros" class="hover:text-white transition-colors py-2 w-full text-center">Nosotros</a>
        </div>

        <div id="mobile-services-menu" class="hidden justify-around items-center h-12 px-4 text-xs font-medium uppercase tracking-wider text-gray-400 border-t border-white/5">
            <a href="diseno-web" class="hover:text-white transition-colors py-2 w-full text-center">Diseño Web</a>
            <div class="w-px h-3 bg-white/10 shrink-0"></div>
            <a href="ecommerce" class="hover:text-white transition-colors py-2 w-full text-center">Ecommerce</a>
            <div class="w-px h-3 bg-white/10 shrink-0"></div>
            <a href="correos" class="hover:text-white transition-colors py-2 w-full text-center">Correos</a>
        </div>

    </nav>

    <script>
        const subnav = document.getElementById('mobile-subnav');
        const mobileServicesBtn = document.getElementById('mobile-services-btn');
        const mobileServicesMenu = document.getElementById('mobile-services-menu');
        const mobileServicesIcon = document.getElementById('mobile-services-icon');
        let lastScrollY = window.scrollY;

        // Lógica de scroll y auto-ocultación del dropdown
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50 && window.scrollY > lastScrollY) {
                // Ocultar header
                subnav.style.transform = "translateY(-100%)";
                subnav.style.opacity = "0";

                // Si el menú de servicios está abierto, cerrarlo al scrollear
                if (!mobileServicesMenu.classList.contains('hidden')) {
                    mobileServicesMenu.classList.add('hidden');
                    mobileServicesMenu.classList.remove('flex');
                    mobileServicesIcon.classList.remove('rotate-180');
                }
            } else {
                // Mostrar header
                subnav.style.transform = "translateY(0)";
                subnav.style.opacity = "1";
            }
            lastScrollY = window.scrollY;
        });

        // Lógica para el menú desplegable de servicios en móvil
        if (mobileServicesBtn) {
            mobileServicesBtn.addEventListener('click', () => {
                mobileServicesMenu.classList.toggle('hidden');
                mobileServicesMenu.classList.toggle('flex');
                mobileServicesIcon.classList.toggle('rotate-180');
            });
        }
    </script>