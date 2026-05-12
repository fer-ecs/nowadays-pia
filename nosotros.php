<?php
$page_title = "Nosotros | La Mente Detrás de Bloodshot";
include 'includes/header.php';
?>
<section class="relative pt-40 pb-20 px-6 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[300px] bg-brand-red rounded-full filter blur-[150px] opacity-[0.05]"></div>
    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
        <div class="reveal">
            <span class="text-brand-red font-bold tracking-[0.2em] text-sm uppercase mb-4 block">Nuestra Esencia</span>
            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6">
                No hacemos webs, <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-red to-red-800">forjamos</span> activos.
            </h1>
            <p class="text-gray-400 text-lg leading-relaxed mb-8">
                Bloodshot nació en Monterrey con una visión clara: eliminar las páginas web "bonitas pero inútiles". Combinamos ingeniería de software de alto nivel con psicología de conversión.
            </p>
        </div>
        <div class="relative reveal delay-200">
            <div class="aspect-square rounded-2xl overflow-hidden border border-white/10 relative">
                <img src="assets/img/bloodshot.png" alt="Bloodshot Studio" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
            </div>
            <div class="absolute -bottom-6 -left-6 bg-brand-red p-6 rounded-xl shadow-2xl hidden md:block">
                <p class="text-white font-bold text-2xl tracking-tighter">Monterrey, MX</p>
            </div>
        </div>
    </div>
</section>
<section class="py-24 bg-brand-gray border-y border-white/5 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Filosofía de Ingeniería</h2>
            <p class="text-gray-400">Nuestro stack no es casualidad; es rendimiento puro.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-12">
            <div class="reveal delay-100">
                <div class="text-brand-red mb-4"><i data-lucide="binary" class="w-10 h-10"></i></div>
                <h3 class="text-xl font-bold text-white mb-3">Código Limpio</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Evitamos el "bloatware". Escribimos código que las máquinas entienden rápido y los humanos pueden escalar.</p>
            </div>
            <div class="reveal delay-200">
                <div class="text-brand-red mb-4"><i data-lucide="gauge" class="w-10 h-10"></i></div>
                <h3 class="text-xl font-bold text-white mb-3">Obsesión por la Carga</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Cada milisegundo cuenta. Optimizamos assets y servidores para que tu sitio vuele, incluso en conexiones móviles.</p>
            </div>
            <div class="reveal delay-300">
                <div class="text-brand-red mb-4"><i data-lucide="shield-check" class="w-10 h-10"></i></div>
                <h3 class="text-xl font-bold text-white mb-3">Seguridad Nativa</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Desde SSL hasta protecciones a nivel de servidor. Tu negocio y los datos de tus clientes están blindados.</p>
            </div>
        </div>
    </div>
</section>
<section class="py-24 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-4 gap-6">
            <div class="lg:col-span-2 reveal">
                <h2 class="text-4xl font-bold text-white mb-6">Por qué Monterrey confía en nosotros.</h2>
                <p class="text-gray-400 mb-8">No somos una agencia de volumen, somos una boutique de calidad. Atendemos pocos proyectos al mes para asegurar que cada línea de código sea perfecta.</p>
                <a href="/proyectos" class="inline-flex items-center gap-2 text-brand-red font-bold hover:underline transition-all">
                    Ver nuestra trayectoria <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
            </div>
            <div class="bg-white/5 border border-white/10 p-8 rounded-2xl reveal delay-100">
                <h4 class="text-white font-bold mb-2">Transparencia</h4>
                <p class="text-gray-500 text-sm">Sin costos ocultos. Cotizaciones claras y entregas en tiempo real mediante paneles de control.</p>
            </div>
            <div class="bg-white/5 border border-white/10 p-8 rounded-2xl reveal delay-200">
                <h4 class="text-white font-bold mb-2">Retorno</h4>
                <p class="text-gray-500 text-sm">Si el sitio no te genera dinero o prospectos, fallamos. Diseñamos con el ROI en mente.</p>
            </div>
        </div>
    </div>
</section>
<section class="py-20 px-6">
    <div class="max-w-5xl mx-auto bg-gradient-to-br from-brand-red to-red-900 rounded-[2rem] p-12 text-center reveal">
        <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6 italic">¿Quieres dar el siguiente paso?</h2>
        <p class="text-white/80 mb-10 text-lg">Queremos acompañarte</p>
        <a href="/inicio#contacto" class="px-10 py-4 bg-white text-brand-red rounded-full font-extrabold hover:bg-black hover:text-white transition-all shadow-xl">
            Comenzar proyecto
        </a>
    </div>
</section>
<?php include 'includes/footer.php'; ?>