// Register GSAP ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// 1. Scroll-aware header
const siteHeader = document.querySelector("#site-header");

function updateHeaderState() {
    siteHeader?.classList.toggle("is-scrolled", window.scrollY > 24);
}

updateHeaderState();
window.addEventListener("scroll", updateHeaderState, { passive: true });

// 2. Custom Cursor Logic
const cursorDot = document.querySelector(".cursor-dot");
const cursorOutline = document.querySelector(".cursor-outline");
const hoverElements = document.querySelectorAll("a, button, .cursor-hover");

if (cursorDot && cursorOutline) {
    const xToDot = gsap.quickTo(cursorDot, "x", { duration: 0.1, ease: "power3" });
    const yToDot = gsap.quickTo(cursorDot, "y", { duration: 0.1, ease: "power3" });
    const xToOutline = gsap.quickTo(cursorOutline, "x", { duration: 0.3, ease: "power3" });
    const yToOutline = gsap.quickTo(cursorOutline, "y", { duration: 0.3, ease: "power3" });

    window.addEventListener("mousemove", (e) => {
        xToDot(e.clientX);
        yToDot(e.clientY);
        xToOutline(e.clientX);
        yToOutline(e.clientY);
    });

    hoverElements.forEach((el) => {
        el.addEventListener("mouseenter", () => {
            cursorOutline.classList.add("hover");
        });
        el.addEventListener("mouseleave", () => {
            cursorOutline.classList.remove("hover");
        });
    });
}

// 3. Preloader Animation
window.addEventListener("load", () => {
    const counterElement = document.getElementById("loader-counter");

    if (!counterElement) {
        initHeroAnimations();
        return;
    }

    const tl = gsap.timeline();
    const progress = { value: 0 };

    tl.to(progress, {
        value: 100,
        duration: 2,
        ease: "power2.inOut",
        onUpdate: () => {
            counterElement.innerHTML = Math.round(progress.value) + "%";
            gsap.set("#loader-bar", { width: progress.value + "%" });
        }
    })
        .to(".preloader-text", { y: "-100%", opacity: 0, duration: 0.5, ease: "power2.in" })
        .to("#preloader", { y: "-100%", duration: 1, ease: "expo.inOut" }, "-=0.2")
        .call(initHeroAnimations);
});

// 4. Hero Entrance Animations
function initHeroAnimations() {
    const title = document.querySelector(".hero-title");

    if (!title || title.dataset.animated === "true") {
        return;
    }

    title.dataset.animated = "true";
    const heroTl = gsap.timeline();
    const text = title.textContent.trim();
    title.innerHTML = text.split("").map(char => `<span class="inline-block opacity-0 translate-y-10">${char}</span>`).join("");

    const chars = title.querySelectorAll("span");

    heroTl.to(chars, {
        y: 0,
        opacity: 1,
        stagger: 0.05,
        duration: 1,
        ease: "back.out(1.7)"
    })
        .fromTo(".hero-element",
            { y: 30, opacity: 0 },
            { y: 0, opacity: 1, stagger: 0.2, duration: 1, ease: "power3.out" },
            "-=0.5"
        )
        .fromTo(".hero-photo",
            { y: 70, scale: 0.88, opacity: 0, rotate: 4 },
            { y: 0, scale: 1, opacity: 1, rotate: 0, duration: 1.2, ease: "power3.out" },
            "-=0.9"
        )
        .fromTo(".hero-code-card, .hero-project-card",
            { y: 44, opacity: 0, rotate: -3 },
            { y: 0, opacity: 1, rotate: 0, stagger: 0.16, duration: 0.9, ease: "back.out(1.5)" },
            "-=0.7"
        )
        .fromTo(".floating-badge",
            { scale: 0, opacity: 0 },
            { scale: 1, opacity: 1, stagger: 0.1, duration: 0.8, ease: "back.out(2)" },
            "-=0.8"
        );

    gsap.to(".hero-photo", {
        y: -46,
        ease: "none",
        scrollTrigger: {
            trigger: ".hero-shell",
            start: "top top",
            end: "bottom top",
            scrub: true,
        }
    });

    gsap.to(".hero-code-card", {
        y: 34,
        x: -18,
        ease: "none",
        scrollTrigger: {
            trigger: ".hero-shell",
            start: "top top",
            end: "bottom top",
            scrub: true,
        }
    });

    gsap.to(".hero-project-card", {
        y: -28,
        x: 18,
        ease: "none",
        scrollTrigger: {
            trigger: ".hero-shell",
            start: "top top",
            end: "bottom top",
            scrub: true,
        }
    });
}

// 5. Horizontal Scroll (Projects Section)
const horizontalScrollContainer = document.querySelector(".horizontal-scroll-container");
const panels = gsap.utils.toArray(".project-panel");

if (horizontalScrollContainer && panels.length > 1) {
    gsap.to(panels, {
        xPercent: -100 * (panels.length - 1),
        ease: "none",
        scrollTrigger: {
            trigger: ".horizontal-scroll-wrapper",
            pin: true,
            scrub: 1,
            snap: 1 / (panels.length - 1),
            end: () => "+=" + horizontalScrollContainer.offsetWidth
        }
    });
}

// 6. Scroll Reveals & Counters (About Section)
if (document.querySelector("#about")) {
    gsap.from(".about-text > *", {
        y: 50,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        ease: "power3.out",
        scrollTrigger: {
            trigger: "#about",
            start: "top 70%",
        }
    });

    gsap.from(".about-image", {
        scale: 0.8,
        opacity: 0,
        rotation: -5,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: "#about",
            start: "top 70%",
        }
    });
}

const counters = document.querySelectorAll(".counter");
counters.forEach(counter => {
    const target = parseInt(counter.getAttribute("data-target"));
    ScrollTrigger.create({
        trigger: counter,
        start: "top 80%",
        onEnter: () => {
            gsap.to(counter, {
                innerHTML: target,
                duration: 2,
                snap: { innerHTML: 1 },
                ease: "power1.out"
            });
        },
        once: true
    });
});

// 7. Timeline Reveal
const timelineItems = gsap.utils.toArray(".timeline-item");
timelineItems.forEach((item, i) => {
    gsap.from(item, {
        x: i % 2 === 0 ? -50 : 50,
        opacity: 0,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
            trigger: item,
            start: "top 80%",
        }
    });
});

// 8. Skills Nodes Stagger
if (document.querySelector("#skills")) {
    gsap.from(".skill-node", {
        y: 30,
        scale: 0.8,
        opacity: 0,
        duration: 0.8,
        stagger: 0.1,
        ease: "back.out(1.5)",
        scrollTrigger: {
            trigger: "#skills",
            start: "top 75%",
        }
    });
}
