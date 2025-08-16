import './bootstrap';

// Advanced Parallax Effects
class ParallaxController {
    constructor() {
        this.parallaxElements = document.querySelectorAll('.parallax-element');
        this.mouseX = 0;
        this.mouseY = 0;
        this.scrollY = 0;
        this.init();
    }

    init() {
        this.bindEvents();
        this.animate();
    }

    bindEvents() {
        window.addEventListener('scroll', this.handleScroll.bind(this));
        window.addEventListener('mousemove', this.handleMouseMove.bind(this));
        window.addEventListener('resize', this.handleResize.bind(this));
    }

    handleScroll() {
        this.scrollY = window.pageYOffset;
        this.updateParallax();
    }

    handleMouseMove(e) {
        this.mouseX = (e.clientX / window.innerWidth - 0.5) * 2;
        this.mouseY = (e.clientY / window.innerHeight - 0.5) * 2;
        this.updateMouseParallax();
    }

    handleResize() {
        this.updateParallax();
    }

    updateParallax() {
        this.parallaxElements.forEach((element, index) => {
            const speed = element.dataset.speed || 0.5;
            const yPos = -(this.scrollY * speed);
            const scale = 1 + (this.scrollY * 0.0001);
            
            element.style.transform = `translateY(${yPos}px) scale(${scale})`;
        });
    }

    updateMouseParallax() {
        document.querySelectorAll('.mouse-parallax').forEach((element, index) => {
            const speed = element.dataset.mouseSpeed || 20;
            const x = this.mouseX * speed;
            const y = this.mouseY * speed;
            
            element.style.transform = `translate(${x}px, ${y}px)`;
        });
    }

    animate() {
        requestAnimationFrame(this.animate.bind(this));
    }
}

// Smooth Scroll Controller
class SmoothScrollController {
    constructor() {
        this.links = document.querySelectorAll('a[href^="#"]');
        this.init();
    }

    init() {
        this.bindEvents();
    }

    bindEvents() {
        this.links.forEach(link => {
            link.addEventListener('click', this.handleClick.bind(this));
        });
    }

    handleClick(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        if (targetElement) {
            const offsetTop = targetElement.offsetTop - 80;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    }
}

// Intersection Observer for Animations
class AnimationController {
    constructor() {
        this.animatedElements = document.querySelectorAll('.animate-on-scroll');
        this.init();
    }

    init() {
        this.createObserver();
    }

    createObserver() {
        const options = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        this.animatedElements.forEach(element => {
            observer.observe(element);
        });
    }
}

// Particle System
class ParticleSystem {
    constructor() {
        this.canvas = document.createElement('canvas');
        this.ctx = this.canvas.getContext('2d');
        this.particles = [];
        this.init();
    }

    init() {
        this.setupCanvas();
        this.createParticles();
        this.animate();
    }

    setupCanvas() {
        this.canvas.classList.add('particle-canvas');
        this.canvas.style.position = 'fixed';
        this.canvas.style.top = '0';
        this.canvas.style.left = '0';
        this.canvas.style.width = '100%';
        this.canvas.style.height = '100%';
        this.canvas.style.pointerEvents = 'none';
        this.canvas.style.zIndex = '-1';
        
        document.body.appendChild(this.canvas);
        this.resizeCanvas();
        
        window.addEventListener('resize', this.resizeCanvas.bind(this));
    }

    resizeCanvas() {
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
    }

    createParticles() {
        for (let i = 0; i < 50; i++) {
            this.particles.push({
                x: Math.random() * this.canvas.width,
                y: Math.random() * this.canvas.height,
                vx: (Math.random() - 0.5) * 0.5,
                vy: (Math.random() - 0.5) * 0.5,
                size: Math.random() * 3 + 1,
                opacity: Math.random() * 0.5 + 0.2
            });
        }
    }

    animate() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        
        this.particles.forEach(particle => {
            particle.x += particle.vx;
            particle.y += particle.vy;
            
            if (particle.x < 0 || particle.x > this.canvas.width) particle.vx *= -1;
            if (particle.y < 0 || particle.y > this.canvas.height) particle.vy *= -1;
            
            this.ctx.beginPath();
            this.ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
            this.ctx.fillStyle = `rgba(138, 72, 19, ${particle.opacity})`;
            this.ctx.fill();
        });
        
        requestAnimationFrame(this.animate.bind(this));
    }
}

// Typing Effect
class TypingEffect {
    constructor(element, text, speed = 100) {
        this.element = element;
        this.text = text;
        this.speed = speed;
        this.currentIndex = 0;
        this.init();
    }

    init() {
        this.type();
    }

    type() {
        if (this.currentIndex < this.text.length) {
            this.element.textContent += this.text.charAt(this.currentIndex);
            this.currentIndex++;
            setTimeout(() => this.type(), this.speed);
        }
    }
}

// Mobile Menu Controller
class MobileMenuController {
    constructor() {
        this.menuBtn = document.getElementById('menu-btn');
        this.mobileMenu = document.getElementById('mobile-menu');
        this.init();
    }

    init() {
        this.bindEvents();
    }

    bindEvents() {
        this.menuBtn.addEventListener('click', this.toggleMenu.bind(this));
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!this.menuBtn.contains(e.target) && !this.mobileMenu.contains(e.target)) {
                this.closeMenu();
            }
        });
    }

    toggleMenu() {
        this.mobileMenu.classList.toggle('hidden');
        this.menuBtn.classList.toggle('active');
    }

    closeMenu() {
        this.mobileMenu.classList.add('hidden');
        this.menuBtn.classList.remove('active');
    }
}

// Navbar Controller
class NavbarController {
    constructor() {
        this.navbar = document.querySelector('nav');
        this.lastScrollY = 0;
        this.init();
    }

    init() {
        this.bindEvents();
    }

    bindEvents() {
        window.addEventListener('scroll', this.handleScroll.bind(this));
    }

    handleScroll() {
        const currentScrollY = window.pageYOffset;
        
        if (currentScrollY > this.lastScrollY && currentScrollY > 100) {
            this.navbar.classList.add('navbar-hidden');
        } else {
            this.navbar.classList.remove('navbar-hidden');
        }
        
        if (currentScrollY > 50) {
            this.navbar.classList.add('navbar-scrolled');
        } else {
            this.navbar.classList.remove('navbar-scrolled');
        }
        
        this.lastScrollY = currentScrollY;
    }
}

// Initialize all controllers when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new ParallaxController();
    new SmoothScrollController();
    new AnimationController();
    new ParticleSystem();
    new MobileMenuController();
    new NavbarController();
    
    // Initialize typing effect if element exists
    const typingElement = document.querySelector('.typing-effect');
    if (typingElement) {
        new TypingEffect(typingElement, 'AD Mirror Photo Booth', 150);
    }
});

// Utility functions
window.utils = {
    debounce: (func, wait) => {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },
    
    throttle: (func, limit) => {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }
};
