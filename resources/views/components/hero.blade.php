<section class="hero-shell relative min-h-screen flex items-center pt-24 overflow-hidden">
    <div
        class="hero-grid max-w-7xl mx-auto px-6 w-full grid grid-cols-1 lg:grid-cols-[1.05fr_0.95fr] gap-14 items-center z-10">
        <div class="text-left">
            <div class="inline-block glass-card px-4 py-1.5 rounded-full mb-8 hero-element">
                <span
                    class="bg-gradient-to-r from-accent1 to-accent2 bg-clip-text text-transparent font-medium text-sm tracking-wide">
                    Laravel Developer | Web Developer
                </span>
            </div>

            <h1
                class="font-display text-5xl md:text-7xl lg:text-8xl font-bold tracking-tighter leading-[0.9] hero-title">
                Ashwani &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kushwaha..
            </h1>

            <p class="mt-8 max-w-2xl text-lg md:text-xl text-muted font-sans font-light hero-element">
                Building scalable web applications, secure RESTful APIs, and modern user experiences using Laravel, PHP,
                React.js, and MySQL. Delivering clean, efficient, and business-driven solutions that scale with growth.
            </p>

            {{-- <div class="mt-10 grid grid-cols-2 gap-4 max-w-xl hero-element">
                <div class="glass-card rounded-2xl p-5">
                    <div class="font-display text-4xl font-bold text-textMain">70%</div>
                    <p class="mt-1 text-sm uppercase tracking-wider text-muted">Laravel Backend</p>
                </div>
                <div class="glass-card rounded-2xl p-5">
                    <div class="font-display text-4xl font-bold text-textMain">30%</div>
                    <p class="mt-1 text-sm uppercase tracking-wider text-muted">Frontend UI</p>
                </div>
            </div> --}}

            <div class="mt-12 flex flex-col md:flex-row gap-6 hero-element">
                <a href="{{ route('projects') }}"
                    class="group relative px-8 py-4 bg-textMain text-white rounded-full overflow-hidden cursor-hover">
                    <span class="relative z-10 flex items-center gap-2">Explore Work
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </span>
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-accent2 to-accent2alt translate-y-full group-hover:translate-y-0 transition-transform duration-500 z-0">
                    </div>
                </a>
                <a href="{{ route('contact') }}"
                    class="px-8 py-4 glass-card rounded-full font-medium hover:bg-white/80 transition-colors cursor-hover">
                    Start a Project
                </a>
            </div>
        </div>

        <div class="hero-visual relative min-h-[520px] hidden md:block">
            <div
                class="hero-photo absolute right-0 top-0 w-[88%] aspect-[4/5] overflow-hidden rounded-[2rem] glass-card p-2">
                <img src="{{ asset('profile_image.png') }}" alt="Premium Laravel web development workspace"
                    class="h-full w-full rounded-[1.5rem] object-cover">
            </div>
            {{-- <div class="hero-code-card glass-card absolute left-0 top-28 w-[64%] rounded-2xl p-6">
                <p class="font-mono text-xs uppercase tracking-[0.3em] text-muted">Laravel Stack</p>
                <div class="mt-5 space-y-3 font-mono text-sm text-textMain">
                    <div><span class="text-accent2">Route::</span>post('/contact')</div>
                    <div><span class="text-accent1">Controller</span> -> validate()</div>
                    <div><span class="text-success">Mail</span>::to($client)->send()</div>
                </div>
            </div>
            <div class="hero-project-card glass-card absolute bottom-10 right-8 w-[58%] rounded-2xl p-6">
                <p class="text-sm font-medium text-muted">Featured Focus</p>
                <h3 class="mt-2 font-display text-3xl font-bold">Admin Panels, APIs & ERP Systems</h3>
                <p class="mt-3 text-sm text-muted">Secure Laravel modules, clean database flows, and responsive UI.</p>
            </div> --}}
        </div>
    </div>

    {{-- <div class="absolute inset-0 pointer-events-none z-0">
        @foreach ([['name' => 'Laravel', 'position' => 'top-[18%] left-[6%]'], ['name' => 'PHP + SQL', 'position' => 'bottom-[14%] left-[8%]'], ['name' => 'Tailwind CSS', 'position' => 'top-[18%] right-[8%]'], ['name' => 'React.js', 'position' => 'bottom-[18%] right-[10%]']] as $badge)
            <div class="floating-badge {{ $badge['position'] }}">{{ $badge['name'] }}</div>
        @endforeach
    </div> --}}
</section>
