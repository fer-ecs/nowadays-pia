<?php
$page_title = "Nosotros | NØWADAYS Studio";
include 'includes/header.php';
?>

<section class="relative pt-44 pb-16 md:pt-40 md:pb-24 px-6 overflow-hidden border-b border-white/5">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-red rounded-full filter blur-[180px] opacity-[0.08] animate-pulse pointer-events-none"></div>
    <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-brand-red rounded-full filter blur-[180px] opacity-[0.05] animate-pulse pointer-events-none" style="animation-delay: 1s;"></div>
    
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="flex items-center justify-center gap-1.5 mb-6 reveal">
            <span class="text-brand-red font-bold tracking-[0.2em] text-sm uppercase">Nuestra Esencia</span>
        </div>

        <h1 class="text-5xl md:text-7xl font-extrabold text-white tracking-tight leading-[1.1] mb-6 reveal delay-100 drop-shadow-[0_0_15px_rgba(255,255,255,0.2)]">
            No hacemos webs, <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-red to-red-800">forjamos</span> activos.
        </h1>
        
        <p class="text-base md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed reveal delay-200">
            NØWADAYS Studio nació en Monterrey con una visión clara: eliminar las páginas web "bonitas pero inútiles". Combinamos ingeniería de software de alto nivel con psicología de conversión y sostenibilidad digital.
        </p>
    </div>
</section>

<section class="py-20 md:py-32 px-6 bg-brand-dark relative z-20">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-stretch">
        
        <div class="reveal delay-100 flex flex-col h-full bg-black border-2 border-brand-red/30 hover:border-brand-red/80 rounded-3xl p-10 transition-all duration-500 shadow-[0_0_30px_rgba(220,38,38,0.05)] hover:shadow-[0_0_40px_rgba(220,38,38,0.15)] relative group overflow-hidden">
            <div class="absolute -top-10 -right-10 p-8 opacity-[0.03] group-hover:scale-110 group-hover:opacity-10 transition-all duration-500 pointer-events-none">
                <i data-lucide="target" class="w-64 h-64 text-brand-red"></i>
            </div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="w-16 h-16 bg-brand-red/10 border border-brand-red/20 rounded-2xl flex items-center justify-center text-brand-red mb-8">
                    <i data-lucide="target" class="w-8 h-8"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestra Misión</h2>
                <p class="text-gray-400 leading-relaxed text-lg flex-grow">
                    Construir infraestructuras digitales de alto rendimiento. Transformamos la presencia online de nuestros clientes en herramientas técnicas precisas, enfocadas en maximizar la conversión, la retención y la escalabilidad de sus negocios.
                </p>
            </div>
        </div>

        <div class="reveal delay-200 flex flex-col h-full bg-brand-gray border border-white/10 hover:border-brand-red/50 rounded-3xl p-10 transition-all duration-500 shadow-xl relative group overflow-hidden">
            <div class="absolute -top-10 -right-10 p-8 opacity-[0.03] group-hover:scale-110 group-hover:opacity-10 transition-all duration-500 pointer-events-none">
                <i data-lucide="eye" class="w-64 h-64 text-white"></i>
            </div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="w-16 h-16 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center text-white mb-8">
                    <i data-lucide="eye" class="w-8 h-8"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestra Visión</h2>
                <p class="text-gray-400 leading-relaxed text-lg flex-grow">
                    Ser el estudio digital de referencia para empresas que buscan innovación técnica y sostenibilidad. Liderar el estándar de diseño enfocado a ventas, acompañando a corporativos en su transición hacia un cumplimiento normativo ESG en la web.
                </p>
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
            <div class="reveal delay-100 text-center md:text-left">
                <div class="text-brand-red mb-4 flex justify-center md:justify-start"><i data-lucide="binary" class="w-10 h-10"></i></div>
                <h3 class="text-xl font-bold text-white mb-3">Código Limpio</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Evitamos el "bloatware". Escribimos código que las máquinas entienden rápido y los humanos pueden escalar.</p>
            </div>
            <div class="reveal delay-200 text-center md:text-left">
                <div class="text-brand-red mb-4 flex justify-center md:justify-start"><i data-lucide="gauge" class="w-10 h-10"></i></div>
                <h3 class="text-xl font-bold text-white mb-3">Obsesión por la Carga</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Cada milisegundo cuenta. Optimizamos assets y servidores para que tu sitio vuele, incluso en conexiones móviles.</p>
            </div>
            <div class="reveal delay-300 text-center md:text-left">
                <div class="text-brand-red mb-4 flex justify-center md:justify-start"><i data-lucide="shield-check" class="w-10 h-10"></i></div>
                <h3 class="text-xl font-bold text-white mb-3">Seguridad Nativa</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Desde SSL hasta protecciones a nivel de servidor. Tu negocio y los datos de tus clientes están blindados.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-6">
    <div class="max-w-5xl mx-auto bg-gradient-to-br from-brand-red to-red-900 rounded-[2rem] p-12 text-center reveal">
        <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6 italic">¿Quieres dar el siguiente paso?</h2>
        <p class="text-white/80 mb-10 text-lg">Queremos acompañarte</p>
        <a href="inicio#contacto" class="px-10 py-4 bg-white text-brand-red rounded-full font-extrabold hover:bg-black hover:text-white transition-all shadow-xl inline-block">
            Comenzar proyecto
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>