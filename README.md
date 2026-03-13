# Asabis Consulting Services - WordPress Theme

A modern, professional WordPress theme for Asabis Consulting Services — an accounting training and consultancy firm based in Edmonton, Alberta, Canada.

## Theme Structure

```
├── style.css                    # WordPress theme metadata
├── functions.php                # Theme setup, enqueues, customizer
├── header.php                   # WP header wrapper
├── footer.php                   # WP footer wrapper
├── front-page.php               # Homepage template
├── index.php                    # Blog listing
├── page.php                     # Default page template
├── single.php                   # Single post template
├── 404.php                      # 404 error page
├── sidebar.php                  # Sidebar widget area
├── preview.html                 # Static HTML preview (no WP needed)
├── template-parts/
│   ├── header.php               # Top bar + navigation partial
│   └── footer.php               # Footer partial
├── page-templates/
│   ├── about-us.php             # About Us page template
│   ├── our-services.php         # Services page template
│   ├── contact-us.php           # Contact Us page template
│   └── careers.php              # Careers page template
└── assets/
    ├── css/
    │   └── main.css             # Main stylesheet
    ├── js/
    │   └── main.js              # Mobile nav, scroll animations
    └── images/                  # Theme images
```

## Installation

1. Upload this theme folder to `/wp-content/themes/asabis/`
2. Activate through **Appearance > Themes** in WordPress admin
3. Set the static front page: **Settings > Reading > A static page > Homepage**
4. Create pages and assign the page templates from `page-templates/`
5. Set up navigation: **Appearance > Menus** (Primary Menu + Footer Menu)
6. Customize contact info: **Appearance > Customize > Contact Information**

## Page Templates

- **Homepage** (`front-page.php`) — Hero, services, offerings, about, testimonials, CTA
- **About Us** — Mission, vision, story
- **Our Services** — Core services, detailed accounting services, training programs
- **Contact Us** — Contact info cards + form (supports WPForms or Contact Form 7)
- **Careers** — Company values, talent network CTA, equal opportunity policy

## Customizer Options

- Hero Section (heading, text)
- Contact Information (phone, email, address, hours, talent email)
- Custom Logo support

## Preview

Open `preview.html` in any browser to see the full homepage design without WordPress.
