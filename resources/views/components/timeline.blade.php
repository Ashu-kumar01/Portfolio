<section class="py-24 relative">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="font-display text-4xl md:text-6xl font-bold tracking-tighter mb-16 text-center">
            Career <span class="text-gradient">Trajectory.</span>
        </h2>

        <div class="relative border-l border-borderCol ml-4 md:ml-0 md:pl-0">
            @foreach ([
        [
            'period' => 'November 2025 - Present',
            'role' => 'Web Developer - Laravel',
            'company' => 'Xampp India Software Pvt. Ltd.',
            'location' => 'Raipur, Chhattisgarh, India',
            'description' => 'Developing scalable web applications and custom business solutions using Laravel, PHP, MySQL, JavaScript, and RESTful APIs. Implementing user dashboards, admin panels, authentication systems, CRUD modules, and third-party API integrations while focusing on database optimization, secure backend architecture, SEO-friendly development, and application performance optimization.',
            'accent' => 'accent1',
            'reverse' => false,
        ],
        [
            'period' => 'October 2022 - October 2025',
            'role' => 'Web Developer | Web Designer',
            'company' => 'Reliable Services',
            'location' => 'Raipur, Chhattisgarh, India 492001',
            'description' => 'Designed, developed, and maintained responsive websites, educational ERP systems, business portals, and eCommerce platforms using HTML5, CSS3, JavaScript, jQuery, Bootstrap, Tailwind CSS, PHP, Laravel, and MySQL. Converted Figma designs into pixel-perfect interfaces while improving website speed, SEO, accessibility, Core Web Vitals, and cross-browser compatibility.',
            'accent' => 'accent2',
            'reverse' => true,
        ],
        [
            'period' => 'July 2018 - May 2022',
            'role' => 'Bachelor of Technology in Computer Science',
            'company' => 'Rungta College of Engineering and Technology',
            'location' => 'Raipur, Chhattisgarh, India',
            'description' => 'Graduated with a Bachelor of Technology in Computer Science (74.9%), gaining strong knowledge in software engineering, web development, database management systems, object-oriented programming, data structures, algorithms, and scalable application architecture.',
            'accent' => 'accent3',
            'reverse' => false,
        ],
    ] as $item)
                <div
                    class="timeline-item relative pl-10 md:pl-0 mb-16 md:flex md:justify-between {{ $item['reverse'] ? 'md:flex-row-reverse' : '' }} items-center w-full group">
                    <div class="hidden md:block w-5/12 {{ $item['reverse'] ? 'text-left pl-10' : 'text-right pr-10' }}">
                        <span class="text-{{ $item['accent'] }} font-bold text-lg">{{ $item['period'] }}</span>
                    </div>
                    <div
                        class="absolute left-[-5px] md:left-1/2 md:-ml-[5px] w-3 h-3 rounded-full bg-{{ $item['accent'] }} shadow-[0_0_15px_rgba(0,212,255,0.6)] z-10 group-hover:scale-150 transition-transform">
                    </div>
                    <div class="md:w-5/12 {{ $item['reverse'] ? 'md:pr-10 text-left md:text-right' : 'md:pl-10' }}">
                        <div class="glass-card p-6 rounded-2xl hover:shadow-2xl transition-shadow duration-500">
                            <span
                                class="md:hidden text-{{ $item['accent'] }} font-bold block mb-2">{{ $item['period'] }}</span>
                            <h3 class="font-display text-2xl font-bold">{{ $item['role'] }}</h3>
                            <h4 class="text-muted mb-2">{{ $item['company'] }}</h4>
                            <p class="text-xs uppercase tracking-wider text-muted mb-4">{{ $item['location'] }}</p>
                            <p class="text-sm text-textMain/70">{{ $item['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            <div
                class="absolute left-0 md:left-1/2 top-0 bottom-0 w-[1px] bg-gradient-to-b from-accent1 via-accent2 to-transparent z-0">
            </div>
        </div>


    </div>
    <div class="max-w-7xl mx-auto px-6">
        <div class="glass-card mt-10 p-6 md:p-8 rounded-3xl border border-white/10">
            <div class="mb-8">
                <span class="text-primary text-sm uppercase tracking-[0.2em]">
                    What I Do Best
                </span>
                <h3 class="font-display text-3xl font-bold mt-2">
                    Responsibilities & Expertise
                </h3>
                <p class="mt-3 text-textMain/70 max-w-3xl">
                    I build scalable digital products by combining robust backend architecture,
                    optimized databases, and modern user interfaces. My expertise spans the
                    complete development lifecycle—from requirement analysis, system design,
                    and custom web application development to deployment, maintenance,
                    SEO optimization, and website performance enhancement. I specialize in
                    Laravel, PHP, React.js, MySQL, RESTful APIs, ERP systems, eCommerce
                    solutions, and business-driven software development.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">

                <div class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 transition-all">
                    <div class="text-3xl mb-3">⚙️</div>
                    <h4 class="font-semibold mb-2">Backend Development</h4>
                    <p class="text-sm text-textMain/70">
                        Laravel, PHP, RESTful API development, authentication systems,
                        role-based access control, middleware, queues, payment gateway
                        integration, third-party APIs, and scalable backend architecture.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 transition-all">
                    <div class="text-3xl mb-3">🗄️</div>
                    <h4 class="font-semibold mb-2">Database Engineering</h4>
                    <p class="text-sm text-textMain/70">
                        MySQL database design, schema architecture, query optimization,
                        indexing strategies, stored procedures, data migration,
                        performance tuning, and scalable database management.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 transition-all">
                    <div class="text-3xl mb-3">💻</div>
                    <h4 class="font-semibold mb-2">Frontend Development</h4>
                    <p class="text-sm text-textMain/70">
                        React.js, JavaScript, Tailwind CSS, Bootstrap, HTML5, CSS3,
                        responsive web design, component-based UI development,
                        Figma to HTML conversion, and SEO-friendly interfaces.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-primary/40 transition-all">
                    <div class="text-3xl mb-3">🚀</div>
                    <h4 class="font-semibold mb-2">Performance & Delivery</h4>
                    <p class="text-sm text-textMain/70">
                        Website speed optimization, Core Web Vitals improvement,
                        Git workflows, CI/CD pipelines, debugging, testing,
                        cloud deployment, security best practices, and long-term
                        application maintenance.
                    </p>
                </div>

            </div>

            <div class="mt-8 grid md:grid-cols-3 gap-4">

                <div class="rounded-xl p-4 bg-primary/10 border border-primary/20">
                    <h5 class="font-semibold">3.8+ Years Experience</h5>
                    <p class="text-sm text-textMain/70 mt-1">
                        Developing Laravel applications, ERP systems, and custom business solutions.
                    </p>
                </div>

                <div class="rounded-xl p-4 bg-primary/10 border border-primary/20">
                    <h5 class="font-semibold">Full Stack Expertise</h5>
                    <p class="text-sm text-textMain/70 mt-1">
                        Laravel, PHP, React.js, MySQL, APIs, UI/UX, and deployment.
                    </p>
                </div>

                <div class="rounded-xl p-4 bg-primary/10 border border-primary/20">
                    <h5 class="font-semibold">Clean & Scalable Code</h5>
                    <p class="text-sm text-textMain/70 mt-1">
                        Portfolio websites, ERP systems, eCommerce stores, and web applications.
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>
