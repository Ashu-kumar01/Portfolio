<section id="about" class="py-32 relative">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="about-text">
                <h2 class="font-display text-4xl md:text-6xl font-bold tracking-tighter mb-6">
                    About <br><span class="text-gradient">Ashwani Kushwaha.</span>
                </h2>
                <p class="text-muted text-lg leading-relaxed mb-6">
                    I am a passionate Full Stack Developer with expertise in Laravel, PHP, React.js, JavaScript,
                    MySQL, HTML5, CSS3, Bootstrap, and Tailwind CSS. I specialize in building scalable web
                    applications, secure RESTful APIs, custom web solutions, and responsive user interfaces that
                    deliver seamless user experiences. With a strong foundation in both backend and frontend
                    development, I focus on creating SEO-friendly websites, eCommerce platforms, CMS solutions,
                    and performance-driven applications that solve real-world business challenges.
                </p>

                <p class="text-muted text-lg leading-relaxed">
                    Over the years, I have worked on developing and optimizing web applications, designing
                    efficient database architectures, integrating third-party APIs and payment gateways,
                    implementing authentication systems, and improving website speed and performance. I enjoy
                    turning complex requirements into clean, user-friendly, mobile-responsive products while
                    following modern development standards, coding best practices, and search engine optimization
                    techniques. My goal is to continuously learn, innovate, and contribute to projects that
                    create meaningful value for businesses and users alike.
                </p>

                <div class="grid grid-cols-2 gap-8 mt-12">
                    <div>
                        <div class="text-4xl font-display font-bold text-textMain mb-2 counter" data-target="4">0</div>
                        <div class="text-sm text-muted uppercase tracking-wider">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-4xl font-display font-bold text-textMain mb-2 counter" data-target="10">0</div>
                        <div class="text-sm text-muted uppercase tracking-wider">Core Skills</div>
                    </div>
                </div>
            </div>
            <div class="relative about-image">
                <div
                    class="aspect-[4/5] rounded-3xl overflow-hidden glass-card p-2 transform rotate-2 hover:rotate-0 transition-transform duration-700">
                    <img src="{{ asset('about_image.jpeg') }}" alt="Ashwani Kushwaha working on a Laravel project"
                        class="h-full w-full object-cover rounded-2xl">
                    {{-- <div
                        class="w-full h-full bg-gradient-to-tr from-accent1/30 to-accent2/30 rounded-2xl flex items-center justify-center bg-[url('{{ asset('about_image.png') }}')] bg-cover bg-center mix-blend-multiply">
                    </div> --}}
                </div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-accent3/20 rounded-full blur-3xl z-[-1]"></div>
            </div>
        </div>
    </div>
</section>
