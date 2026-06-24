<section id="contact" class="py-32 relative">
    <div class="max-w-7xl mx-auto px-6">
        <div class="glass-card rounded-[3rem] p-10 md:p-20 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-[300px] h-[300px] bg-accent1/20 rounded-full blur-[80px] pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-accent2/20 rounded-full blur-[80px] pointer-events-none"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 relative z-10">
                <div>
                    <h2 class="font-display text-5xl md:text-6xl font-bold tracking-tighter mb-6">
                        Let's Build <br><span class="text-gradient">Something Amazing.</span>
                    </h2>
                    <p class="text-muted text-lg mb-10">
                        Available for Laravel-focused web development, responsive UI work, admin panels, APIs, and
                        database-driven business applications.
                    </p>

                    <div class="space-y-6">
                        <a href="mailto:ashwanikumar6266@gmail.com"
                            class="flex items-center gap-4 text-textMain hover:text-accent1 transition-colors cursor-hover">
                            <div class="w-12 h-12 rounded-full glass-card flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <span class="font-medium">ashwanikumar6266@gmail.com</span>
                        </a>
                        <a href="tel:+916266195711" class="flex items-center gap-4 text-textMain hover:text-accent2 transition-colors cursor-hover">
                            <div class="w-12 h-12 rounded-full glass-card flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.68l1.5 4.49a1 1 0 01-.5 1.21l-2.26 1.13a11.04 11.04 0 005.52 5.52l1.13-2.26a1 1 0 011.21-.5l4.49 1.5a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C9.72 21 3 14.28 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <span class="font-medium">+91 62661 95711</span>
                        </a>
                        <div class="flex items-start gap-4 text-textMain">
                            <div class="w-12 h-12 rounded-full glass-card flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11a3 3 0 100-6 3 3 0 000 6zM19.5 8c0 7-7.5 13-7.5 13S4.5 15 4.5 8a7.5 7.5 0 1115 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Current Location</p>
                                <p class="text-muted">Raipur, Chhattisgarh, India 492001</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 text-textMain">
                            <div class="w-12 h-12 rounded-full glass-card flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-4M9 9h1M9 13h1M9 17h1M14 13h1M14 17h1">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Permanent Location</p>
                                <p class="text-muted">Ambikapur, Chhattisgarh, India 497001</p>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    @csrf

                    @if (session('contact_success'))
                        <div class="rounded-xl border border-success/20 bg-success/10 px-4 py-3 text-sm font-medium text-success">
                            {{ session('contact_success') }}
                        </div>
                    @endif

                    @if (session('contact_error'))
                        <div class="rounded-xl border border-accent3alt/20 bg-accent3alt/10 px-4 py-3 text-sm font-medium text-accent3alt">
                            {{ session('contact_error') }}
                        </div>
                    @endif

                    <div>
                        <label class="block text-sm font-medium text-muted mb-2">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            class="w-full bg-white/40 border border-borderCol rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent1/50 transition-shadow backdrop-blur-sm @error('name') border-accent3alt @enderror"
                            placeholder="John Doe">
                        @error('name')
                            <p class="mt-2 text-sm text-accent3alt">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-muted mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full bg-white/40 border border-borderCol rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent1/50 transition-shadow backdrop-blur-sm @error('email') border-accent3alt @enderror"
                            placeholder="john@example.com">
                        @error('email')
                            <p class="mt-2 text-sm text-accent3alt">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-muted mb-2">Phone</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}"
                            class="w-full bg-white/40 border border-borderCol rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent1/50 transition-shadow backdrop-blur-sm @error('phone') border-accent3alt @enderror"
                            placeholder="+91 98765 43210">
                        @error('phone')
                            <p class="mt-2 text-sm text-accent3alt">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-muted mb-2">Message</label>
                        <textarea rows="4" name="message" required
                            class="w-full bg-white/40 border border-borderCol rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-accent1/50 transition-shadow backdrop-blur-sm resize-none @error('message') border-accent3alt @enderror"
                            placeholder="Tell me about your project...">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-2 text-sm text-accent3alt">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="w-full bg-textMain text-white rounded-xl py-4 font-medium hover:bg-black transition-colors cursor-hover">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
