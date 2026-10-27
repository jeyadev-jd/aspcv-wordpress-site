# Aspiration Cleantech Ventures — WordPress Site

> 🔗 **[Project page, demo and write-up on jeyadev.dev](https://jeyadev.dev/projects/aspcv-wordpress-site)**: Custom Astra child theme and mu-plugins for a cleantech company site, by [Jeyadev R](https://jeyadev.dev), AI engineer in Chennai.

Source-controlled snapshot of the custom theme and site-level code for **[aspcv.com](https://aspcv.com)** — the corporate site for Aspiration Cleantech Ventures (ASPCV), an industrial cleantech company specializing in high-temperature heat pumps, solar thermal systems, waste heat recovery, and ESCO (Energy Service Company) financing models.

This repo tracks the **custom code only** — the Astra child theme, custom page templates, and must-use plugins that implement ASPCV's brand, navigation, and page layouts on top of the Astra parent theme. It does not include WordPress core, the Astra parent theme, or third-party plugins (Elementor, LiteSpeed Cache, WPForms, etc.), which are managed through the WordPress admin / hosting panel.

## Stack

- **CMS**: WordPress (hosted on Hostinger, LiteSpeed server)
- **Base theme**: Astra
- **Child theme**: `astra-child` — custom PHP page templates + CSS, no build step
- **Page builder**: Elementor is used for some pages; custom templates below bypass it entirely for full design control
- **Caching**: LiteSpeed Cache (WordPress plugin) + Hostinger-managed edge cache

## Structure

```
wp-content/
├── themes/
│   └── astra-child/
│       ├── style.css                  # Theme stylesheet (enqueued via functions.php, NOT the active <link>)
│       ├── style-v3.css                # Active enqueued stylesheet (see "Cache-busting" below)
│       ├── functions.php               # Theme setup, custom template body-class/layout filters
│       ├── page-home-premium.php       # Homepage — full custom hero, tech grid, stats, CTAs
│       ├── page-about.php              # About Us — mission, leadership team
│       ├── page-service.php            # Services — service cards, Thermagen co-brand badge
│       ├── page-esco.php               # ESCO model — pay-as-you-save explainer, contract options
│       ├── page-technologies.php       # Technologies overview/index
│       ├── page-tech-detail.php        # Reusable template for individual technology pages
│       └── page-contact.php            # Contact page
└── mu-plugins/
    ├── mobile-nav-fix.php              # Loader — requires uploads/nav-system.php
    ├── dropdown-fix.php                # Loader — requires uploads/dropdown-fix.php
    ├── badge-fix.php                   # Retired/no-op (kept as a placeholder)
    └── draft-redirects.php             # 302-redirects drafted/unused page slugs to the homepage
```

The **navigation system** (desktop menu, mobile drawer, hamburger↔close morph animation, dropdown/expand behavior) lives in `wp-content/uploads/nav-system.php`, injected globally via `wp_head` through the `mobile-nav-fix.php` mu-plugin loader. It is the single source of truth for header markup/CSS/JS across every page — see the file header comment for the design-token list (spacing, colors, breakpoints).

## Why must-use plugins instead of theme edits?

Several fixes (navbar redesign, draft-page redirects) are shipped as **mu-plugins** rather than baked into the theme, because:

1. They need to run on *every* page regardless of which template is active.
2. Mu-plugins can't be accidentally deactivated from the admin UI — appropriate for site-wide, load-bearing behavior like the nav system.
3. It kept iteration fast during the redesign without repeatedly touching `functions.php`.

## Cache-busting note

`functions.php` enqueues `style-v3.css` (not `style.css`) as the theme's active stylesheet. This is intentional: earlier iterations kept getting served stale by browser/mobile-carrier caches even after bumping the `?ver=` query string, because some intermediate caches key purely on the file path and ignore query strings. Renaming the actual file guarantees a clean cache miss. If you edit theme CSS, either bump the version string in `functions.php` **and** consider renaming the file again if you hit the same issue.

## Custom templates pattern

Every custom page template (`page-*.php`) follows the same shape:

- `Template Name:` docblock so it's selectable in the WordPress page editor
- `get_header(); ... get_footer();` — still renders the shared Astra header/footer chrome
- Elementor and Astra's page-builder layout are explicitly disabled for these templates via filters in `functions.php` (`astra_is_page_builder_page`, `elementor/page/should_use_page_template`, etc.), so the template's own inline-styled HTML renders full-width with no sidebar
- All styling is inline `<style>` blocks + inline element `style=""` attributes — no build step, no compiled CSS

## Local development

This theme has no npm/build dependencies. To work on it locally:

1. Stand up a local WordPress install (e.g. via [Local](https://localwp.com/) or Docker) with the Astra parent theme installed and activated as the parent.
2. Copy `wp-content/themes/astra-child` and `wp-content/mu-plugins` from this repo into your local `wp-content/`.
3. Fetch `wp-content/uploads/nav-system.php` from the live site (or recreate it — see git history) into your local uploads folder, since generated/uploaded content isn't tracked here.
4. Activate the "Astra Child - ASPCV Premium" theme.

## Deployment

Changes are deployed directly to the production file system on Hostinger. There is currently no CI/CD pipeline — after editing files in this repo, copy the changed file(s) to the corresponding path on the live server via the hosting file manager, SFTP, or WP-CLI, then commit and push here to keep the two in sync.
