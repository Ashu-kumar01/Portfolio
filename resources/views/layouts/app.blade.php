<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashwani | Premium Laravel Developer</title>

    <meta name="description"
        content="Award-winning portfolio of Ashwani, a Premium Laravel & Full-Stack Developer creating luxurious web experiences.">
    <meta property="og:title" content="Ashwani | Premium Laravel Developer">
    <meta property="og:description" content="Award-winning portfolio of Ashwani, a Premium Laravel Developer.">
    <meta property="og:type" content="website">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Syne:wght@400;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Syne', 'sans-serif'],
                    },
                    colors: {
                        primary: '#FFFFFF',
                        secondary: '#F8FAFC',
                        accent1: '#00D4FF',
                        accent1alt: '#5B7FFF',
                        accent2: '#8B5CF6',
                        accent2alt: '#EC4899',
                        accent3: '#FFB347',
                        accent3alt: '#FF6B6B',
                        textMain: '#0F172A',
                        muted: '#64748B',
                        success: '#10B981',
                        borderCol: 'rgba(15,23,42,0.08)',
                        glass: 'rgba(255,255,255,0.65)'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-secondary text-textMain overflow-x-hidden selection:bg-accent1 selection:text-white">
    @include('components.preloader')
    @include('components.cursor')

    @yield('content')

    @include('components.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="{{ asset('build/assets/app.js') }}"></script>
</body>

</html>
