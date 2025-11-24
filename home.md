# QDMS - Quality Data Management System
**Spec Driven Kit Documentation**

---

## 📋 Project Overview

### Basic Information
- **Project Name**: QDMS (Quality Data Management System)
- **Environment**: Laravel Blade + Bootstrap 5
- **Type**: Corporate Website + Quality Management Dashboard
- **Status**: Production

### 🎯 Project Purpose
Quality Data Management System untuk PT. Panarub Industry - divisi Quality Management

---

## 🏗️ Technical Specifications

### Tech Stack
| Component | Technology |
|-----------|------------|
| Backend | Laravel 8+ |
| Frontend | Bootstrap 5.3+ |
| Styling | Custom CSS + Bootstrap Utilities |
| Icons | Font Awesome 6 |
| Responsive | Mobile-First Approach |

### Browser Support
- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

---

## 📁 File Structure

```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php
│   └── home.blade.php
└── assets/
    ├── css/
    │   └── style.css
    └── img/
        ├── PWJ.png
        ├── background.jpg
        ├── QC.jpg
        ├── q-kpi score.png
        ├── audit.png
        ├── rft.png
        ├── kpi.png
        └── ambassador.jpg
```

---

## 🎨 Design System

### Color Palette
| Role | Color | HEX | Usage |
|------|-------|-----|--------|
| Primary | Green | `#2ecc71` | Buttons, Active States |
| Secondary | Blue | `#3498db` | Secondary Actions, Links |
| Dark | Navy | `#2c3e50` | Text, Headers |
| Light | White | `#ffffff` | Background, Text |
| Info | Info Blue | `#0dcaf0` | Section Headers |

### Typography Scale
```css
/* Desktop */
h1: 2.5rem (40px)
h2: 2rem (32px)  
h3: 1.75rem (28px)
h4: 1.5rem (24px)
Body: 1.1rem (17.6px)

/* Mobile */
h1: 1.75rem (28px)
h2: 1.5rem (24px)
h3: 1.25rem (20px)
h4: 1.1rem (17.6px)
```

### Spacing System
| Size | Value | Usage |
|------|-------|--------|
| xs | 0.25rem (4px) | Internal padding |
| sm | 0.5rem (8px) | Small margins |
| md | 1rem (16px) | Standard padding |
| lg | 1.5rem (24px) | Section spacing |
| xl | 3rem (48px) | Large sections |

---

## 📱 Component Specifications

### 1. Navigation Bar
**File**: `layouts/app.blade.php`
```html
<nav class="navbar navbar-expand-lg navbar-scrolled">
```
**Features**:
- Responsive collapse at `lg` breakpoint (992px)
- Sticky navigation with blur effect
- Mobile-optimized dropdown menus
- Brand logo with text

**Breakpoints**:
- `> 992px`: Horizontal menu
- `< 992px`: Hamburger menu with full-screen overlay

### 2. Hero Carousel
**File**: `home.blade.php` (Lines 5-40)
```html
<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
```
**Specifications**:
- Single slide configuration
- Auto-rotate disabled
- Full-width container
- Overlay text with animations
- Image: `/asset/PWJ.png`

### 3. Company Vision-Mission Section
**Structure**:
```html
Section Header → Background Image → Text Overlay
```

**Content Blocks**:
1. **Visi Perusahaan**
2. **Misi Perusahaan** 
3. **Value Perusahaan**

**Responsive Behavior**:
- Mobile: Stacked layout, reduced font sizes
- Tablet: Adjusted spacing, medium fonts
- Desktop: Full overlay with large typography

### 4. Quality Vision-Mission Section
**Similar structure to Company section but with:**
- Different background: `/asset/QC.jpg`
- Content focused on quality objectives
- Bilingual text (Indonesian + English)

### 5. Our Focus Section
**Layout**: 4:8 Grid (Image : Focus Items)
```html
<div class="row g-3 g-md-4">
  <div class="col-12 col-lg-4">KPI Score</div>
  <div class="col-12 col-lg-8">Focus Items Grid</div>
</div>
```

**Focus Items**:
1. **Audit** - `asset/audit.png`
2. **RFT** - `asset/rft.png` 
3. **Q-KPI** - `asset/kpi.png`
4. **Ambassador** - `asset/ambassador.jpg`

**Hover Effects**:
- Scale transform: `translateY(-5px)`
- Shadow elevation
- Overlay text reveal

### 6. Dashboard Embed
**Integration**: Google Drive Embed
```html
<iframe src="https://drive.google.com/file/d/1i8xSNojIfhgDLi9Oh2sPFC00ZHhbn0Ib/preview">
```
**Aspect Ratio**: 16:9 responsive container

---

## 📐 Responsive Breakpoints

| Breakpoint | Prefix | Width | Usage |
|------------|--------|-------|--------|
| X-Small | None | <576px | Mobile portrait |
| Small | `sm` | ≥576px | Mobile landscape |
| Medium | `md` | ≥768px | Tablet portrait |
| Large | `lg` | ≥992px | Tablet landscape |
| Extra Large | `xl` | ≥1200px | Desktop |
| XXL | `xxl` | ≥1400px | Large desktop |

---

## 🎯 Content Specifications

### Text Content Requirements

#### Company Vision-Mission
**Visi**:
```text
Menjadi perusahaan yang paling kreatif, dapat diandalkan dan dipercaya bagi mitra kami.
"Be the most creative, trusted and reliable manufacturing source for our partners".
```

**Misi**:
```text
(Same as Visi for now - requires content update)
```

**Value**:
```text
GOOD PEOPLE, GOOD CULTURE, GOOD COMPANY.
```

#### Quality Vision-Mission  
**Visi**:
```text
Menjadi perusahaan manufaktur Adidas nomor satu di dunia
"#1 Adidas manufacturer in the world"
```

**Misi**:
```text
Menyediakan Produk yang bagus dengan harga paling kompetitif di pasar
"Supply beautiful product with the most competitive price to the market"
```

---

## 🔧 Development Guidelines

### Image Specifications
| Section | Image | Dimensions | Aspect Ratio | Format |
|---------|-------|------------|--------------|--------|
| Hero | PWJ.png | 1920×1080 | 16:9 | PNG |
| Company BG | background.jpg | 1920×1080 | 16:9 | JPG |
| Quality BG | QC.jpg | 1920×1080 | 16:9 | JPG |
| Focus Items | Various | 400×300 | 4:3 | PNG/JPG |

### CSS Class Naming Convention
```css
/* Component-based */
.carousel-content {}
.project-item {}
.focus-card {}

/* Utility-based */
.bg-opacity-60 {}
.px-mobile-3 {}

/* State-based */
.navbar-scrolled {}
.show {}
```

### Animation Specifications
**Entry Animations**:
- `fadeInRight`: Right slide-in
- `fadeInUp`: Bottom slide-in  
- Duration: 1s
- Timing: `ease`

**Hover Animations**:
- Duration: 0.3s
- Properties: `transform`, `opacity`, `box-shadow`

---

## ✅ Quality Assurance Checklist

### Performance
- [ ] Images optimized for web
- [ ] CSS minified in production
- [ ] Bootstrap loaded via CDN
- [ ] Lazy loading for below-fold images

### Accessibility
- [ ] Alt texts for all images
- [ ] Proper heading hierarchy
- [ ] Color contrast ratio ≥ 4.5:1
- [ ] Keyboard navigation support

### SEO
- [ ] Semantic HTML structure
- [ ] Meta tags in layout
- [ ] Open Graph tags
- [ ] XML sitemap

### Cross-browser
- [ ] Chrome compatibility
- [ ] Firefox compatibility
- [ ] Safari compatibility
- [ ] Mobile browser testing

---

## 🚀 Deployment Notes

### Environment Variables Required
```env
APP_NAME="QDMS"
APP_ENV=production
APP_DEBUG=false
```

### Build Process
1. Run `npm run production` for asset compilation
2. Clear cache: `php artisan optimize:clear`
3. Set storage permissions
4. Verify .htaccess configuration

### Monitoring
- Google Analytics integration
- Error tracking setup
- Uptime monitoring
- Performance metrics

---

## 📞 Maintenance Contacts

| Role | Contact | Responsibilities |
|------|---------|------------------|
| Frontend Developer | [Dev Team] | UI Updates, Responsive fixes |
| Backend Developer | [Dev Team] | Laravel maintenance |
| Content Manager | [Quality Team] | Text content updates |
| System Admin | [IT Team] | Server, Deployment |

---

**Document Version**: 1.0  
**Last Updated**: December 2024  
**Maintainer**: Development Team