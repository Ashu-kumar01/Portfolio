<section id="projects" class="bg-textMain text-white py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 mb-12">
        <h2 class="font-display text-5xl md:text-7xl font-bold tracking-tighter text-white">
            Selected <span class="bg-gradient-to-r from-accent1 to-accent2 bg-clip-text text-transparent">Works.</span>
        </h2>
    </div>

    <div class="horizontal-scroll-wrapper relative h-screen flex items-center">
        <div class="horizontal-scroll-container flex w-[300vw] h-[70vh]">
            @foreach ([
        [
            'image' => 'https://sruraipur.ac.in/sru/images/banner1_1.webp?w=800&q=80',
            'alt' => 'SRU Website',
            'tags' => ['Laravel', 'MySQL', 'Admin Panel'],
            'title' => 'SRU Website',
            'description' => 'A full-scale responsive website with CRUD operations, Examination Results, contact submissions, validation layers, and optimized database workflows.',
            'accent' => 'text-accent1',
            'link' => 'https://sruraipur.ac.in/sru/',
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop',
            'alt' => 'OpenCompas Eduction ERP',
            'tags' => ['PHP', 'MySQL', 'HTML5', 'CSS3', 'JavaScript', 'bootstrap'],
            'title' => 'OpenCompas Eduction ERP',
            'description' => 'student management system with features like student registration, attendance tracking, grade management, and communication tools for teachers and parents.',
            'accent' => 'text-accent2',
            'link' => '',
        ],
        [
            'image' => 'https://www.sainikschoolambikapur.org.in/sainik_image/2.jpg',
            'alt' => 'Sainik School Ambikapur Website',
            'tags' => ['PHP', 'MySQL', 'HTML5', 'CSS3', 'JavaScript', 'bootstrap'],
            'title' => 'Sainik School Ambikapur With Admin Panel',
            'description' => 'A responsive website with an admin panel for managing content, events, and student information, providing a seamless experience for visitors and administrators.',
            'accent' => 'text-accent3',
            'link' => 'https://www.sainikschoolambikapur.org.in',
        ],
    ] as $project)
                <div class="project-panel w-screen h-full flex-shrink-0 px-6 md:px-20 flex items-center">
                    <div class="w-full h-full rounded-3xl overflow-hidden relative group">
                        <img src="{{ $project['image'] }}" alt="{{ $project['alt'] }}"
                            class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-10 left-10 right-10">
                            <div class="flex gap-3 mb-4">
                                @foreach ($project['tags'] as $tag)
                                    <span
                                        class="px-4 py-1 text-xs border border-white/30 rounded-full backdrop-blur-md">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                            <h3 class="font-display text-4xl md:text-5xl font-bold mb-4">{{ $project['title'] }}</h3>
                            <p class="text-white/70 max-w-xl mb-6">{{ $project['description'] }}</p>
                            <a href="{{ $project['link'] }}" target="_blank"
                                class="inline-flex items-center gap-2 {{ $project['accent'] }} hover:text-white transition-colors cursor-hover">
                                View Case Study
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
