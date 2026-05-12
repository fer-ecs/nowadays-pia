<footer class="py-8 bg-black text-center text-gray-600 text-sm border-t border-white/5">
        <div class="flex justify-center gap-6 mb-4">
            <a href="https://www.instagram.com/bloodshot.io/" target="_blank" class="hover:text-white transition-colors">Instagram</a>
            <a href="#" class="hover:text-white transition-colors" target="_blank" >LinkedIn</a>
            <a href="https://www.facebook.com/profile.php?id=61588946308146&locale=es_LA" target="_blank" class="hover:text-white transition-colors">Facebook</a>
        </div>
        <p>&copy; <?php echo date('Y'); ?> Bloodshot. Monterrey, NL.</p>
    </footer>

    <script>
        lucide.createIcons();

        // Scroll Reveal
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>
</html>