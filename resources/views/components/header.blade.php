<header id="site-header" class="site-header fixed top-0 left-0 w-full z-50 p-6">
    <nav class="flex justify-between items-center max-w-7xl mx-auto">
        <a href="{{ route('home') }}" class="font-display font-bold text-2xl tracking-tighter cursor-hover">AK.</a>
        <ul class="hidden md:flex gap-8 font-sans text-sm font-medium">
            <li><a href="{{ route('about') }}" class="cursor-hover hover:opacity-70 transition-opacity">About</a></li>
            <li><a href="{{ route('projects') }}" class="cursor-hover hover:opacity-70 transition-opacity">Work</a></li>
            <li><a href="{{ route('skills') }}" class="cursor-hover hover:opacity-70 transition-opacity">Skills</a></li>
            <li><a href="{{ route('experience') }}" class="cursor-hover hover:opacity-70 transition-opacity">Experience</a></li>
            <li><a href="{{ route('contact') }}" class="cursor-hover hover:opacity-70 transition-opacity">Contact</a></li>
        </ul>
        <a href="{{ route('contact') }}"
            class="hidden md:block header-cta border px-6 py-2 rounded-full cursor-hover transition-colors duration-300">
            Let's Talk
        </a>
    </nav>
</header>
