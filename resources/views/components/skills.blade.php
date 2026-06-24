<section id="skills" class="py-32 relative z-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="font-display text-4xl md:text-6xl font-bold tracking-tighter mb-16">
            Technical <span class="text-gradient">Ecosystem.</span>
        </h2>

        <div class="flex flex-wrap justify-center gap-6 max-w-4xl mx-auto">
            @foreach ([
                ['name' => 'Laravel', 'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg'],
                ['name' => 'HTML5', 'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg'],
                ['name' => 'CSS3', 'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg'],
                ['name' => 'JavaScript', 'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg'],
                ['name' => 'jQuery', 'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg'],
                ['name' => 'Bootstrap', 'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg'],
                ['name' => 'Tailwind CSS', 'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original-wordmark.svg'],
                ['name' => 'React.js', 'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg'],
                ['name' => 'PHP', 'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg'],
            ] as $skill)
                <div
                    class="skill-node glass-card px-8 py-6 rounded-2xl flex flex-col items-center gap-4 cursor-hover hover:scale-105 transition-transform {{ $skill['name'] === 'Laravel' ? 'ring-2 ring-accent1/40 shadow-[0_18px_50px_rgba(0,212,255,0.16)]' : '' }}">
                    <img src="{{ $skill['image'] }}" class="w-12 h-12" alt="{{ $skill['name'] }}">
                    <span class="font-medium text-textMain">{{ $skill['name'] }}</span>
                    @if ($skill['name'] === 'Laravel')
                        <span class="text-xs font-semibold uppercase tracking-wider text-accent1">Main Focus</span>
                    @endif
                </div>
            @endforeach

            <div
                class="skill-node glass-card px-8 py-6 rounded-2xl flex flex-col items-center gap-4 cursor-hover hover:scale-105 transition-transform">
                <div class="w-12 h-12 flex items-center justify-center font-bold text-sm bg-textMain text-white rounded-full">SQL</div>
                <span class="font-medium text-textMain">SQL</span>
            </div>
        </div>
    </div>
</section>
