<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# AD Mirror Photo Booth - Enhanced with Parallax Design

A modern, responsive Laravel-based photo booth website featuring advanced parallax effects, smooth animations, and interactive design elements.

## ✨ New Features & Improvements

### 🎨 Advanced Parallax Effects
- **Multi-layer parallax backgrounds** with different scroll speeds
- **Mouse-following parallax elements** that respond to cursor movement
- **3D perspective transforms** for depth and immersion
- **Smooth scroll-based animations** with optimized performance

### 🚀 Enhanced Animations
- **Staggered entrance animations** using Intersection Observer API
- **Hover lift effects** with smooth transitions and shadows
- **Floating elements** with custom keyframe animations
- **Morphing shapes** that continuously transform
- **3D rotation effects** for interactive elements

### 🎯 Interactive Elements
- **Enhanced navbar** with glass morphism and scroll effects
- **Animated CTA buttons** with hover states and glow effects
- **Typing effect** for dynamic text animation
- **Smooth scrolling** navigation with offset adjustments
- **Mobile-responsive** menu with enhanced interactions

### 🎨 Modern Design System
- **Glass morphism effects** with backdrop blur
- **Gradient overlays** and dynamic color schemes
- **Custom scrollbars** with brand colors
- **Enhanced typography** using Inter font family
- **Responsive grid layouts** with hover animations

## 🛠️ Technical Implementation

### CSS Features
- Custom keyframe animations for floating, morphing, and sliding effects
- CSS Grid and Flexbox for responsive layouts
- CSS custom properties for consistent theming
- Backdrop filters for glass morphism effects
- Optimized transitions using cubic-bezier easing

### JavaScript Features
- **ParallaxController**: Handles scroll and mouse-based parallax effects
- **AnimationController**: Manages intersection observer animations
- **MobileMenuController**: Enhanced mobile navigation
- **NavbarController**: Smart navbar behavior on scroll
- **TypingEffect**: Dynamic text animation system

### Performance Optimizations
- `will-change` CSS properties for GPU acceleration
- RequestAnimationFrame for smooth animations
- Debounced and throttled event handlers
- Efficient DOM querying and caching
- Optimized scroll event handling

## 🎨 Animation Classes

### Available Animation Classes
- `.animate-float-slow` - Slow floating animation (8s)
- `.animate-float-medium` - Medium floating animation (6s)
- `.animate-float-fast` - Fast floating animation (4s)
- `.animate-pulse-glow` - Pulsing glow effect (3s)
- `.animate-slide-in-left` - Slide in from left
- `.animate-slide-in-right` - Slide in from right
- `.animate-slide-in-up` - Slide in from bottom
- `.animate-fade-in-scale` - Fade in with scale
- `.animate-rotate-3d` - 3D rotation (20s)
- `.animate-morph-shape` - Morphing shape (8s)

### Hover Effects
- `.hover-lift` - Lifts element on hover with shadow
- `.hover-glow` - Adds glow effect on hover
- `.glass-effect` - Glass morphism background
- `.glass-dark` - Dark glass morphism variant

## 🚀 Getting Started

1. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

2. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database Setup**
   ```bash
   php artisan migrate
   php artisan serve
   ```

4. **Asset Compilation**
   ```bash
   npm run dev
   ```

## 📱 Responsive Design

The website is fully responsive with:
- Mobile-first approach
- Touch-friendly interactions
- Optimized animations for mobile devices
- Adaptive parallax effects based on screen size
- Enhanced mobile navigation

## 🎯 Browser Support

- Chrome 80+
- Firefox 75+
- Safari 13+
- Edge 80+
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🔧 Customization

### Colors
Update the color scheme in `tailwind.config.js`:
```javascript
colors: {
  primary: '#8a4813ff',
  secondary: '#e97313ff',
  accent: '#f39c12ff',
}
```

### Animation Speeds
Modify animation durations in CSS:
```css
.animate-float-slow { animation: float-slow 8s ease-in-out infinite; }
.animate-float-medium { animation: float-medium 6s ease-in-out infinite; }
.animate-float-fast { animation: float-fast 4s ease-in-out infinite; }
```

### Parallax Sensitivity
Adjust parallax speeds using data attributes:
```html
<div class="parallax-element" data-speed="0.3"></div>
<div class="mouse-parallax" data-mouse-speed="20"></div>
```

## 📈 Performance Tips

1. **Optimize Images**: Use WebP format and appropriate sizes
2. **Lazy Loading**: Implement for gallery images
3. **CSS Optimization**: Minimize repaints and reflows
4. **JavaScript**: Use throttling for scroll events
5. **Assets**: Compress and minify CSS/JS files

## 🎨 Design Inspiration

This enhanced design draws inspiration from:
- Modern web design trends
- Glass morphism effects
- Smooth parallax implementations
- Interactive hover states
- Professional photo booth aesthetics

## 🤝 Contributing

Feel free to contribute by:
- Adding new animation effects
- Optimizing performance
- Enhancing mobile experience
- Adding new interactive features
- Improving accessibility

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

**Built with ❤️ using Laravel, Tailwind CSS, and modern web technologies**
