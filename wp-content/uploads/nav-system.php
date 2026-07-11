<?php
/**
 * ASPCV — Unified Navigation System
 * Single source of truth for navbar (desktop + mobile).
 * Loaded globally via mu-plugin, so every page shares identical markup+styles.
 */
add_action("wp_head", function () { ?>
<style id="aspcv-nav-system">
/* ═══════════════════════════════════════════════════════════
   DESIGN TOKENS (8px system)
   ═══════════════════════════════════════════════════════════ */
:root {
  --nav-h: 116px;              /* desktop bar height */
  --nav-h-mobile: 90px;      /* mobile bar height  */
  --nav-max: 1320px;         /* container max width */
  --nav-pad-x: 40px;         /* desktop side padding */
  --nav-pad-x-mobile: 20px;
  --nav-logo-h: 100px;
  --nav-logo-h-mobile: 72px;

  --c-navy: #0d1530;
  --c-ink: #1a1a2e;
  --c-orange: #e8650a;
  --c-orange-soft: #fdf6f0;
  --c-blue: #2b4ba0;
  --c-line: #eef0f4;
  --c-white: #ffffff;

  --radius: 8px;
  --radius-lg: 14px;
  --shadow-nav: 0 2px 12px rgba(13,21,48,.06);
  --shadow-pop: 0 12px 32px rgba(13,21,48,.14);
  --shadow-drawer: -8px 0 40px rgba(13,21,48,.18);
  --ease: cubic-bezier(.4,0,.2,1);
  --ease-out: cubic-bezier(.16,1,.3,1);
  --dur: .25s;
  --dur-slow: .38s;
}

/* ═══════════════════════════════════════════════════════════
   FULL-WIDTH BAR + ACCENT
   ═══════════════════════════════════════════════════════════ */
#masthead {
  background: var(--c-white) !important;
  border-bottom: 2px solid var(--c-orange) !important;
  box-shadow: var(--shadow-nav) !important;
}
/* Prevent dropdown from ever causing horizontal scroll */
html, body { overflow-x: clip; }
#masthead .ast-main-header-wrap,
#masthead .main-header-bar-wrap,
#masthead .ast-primary-header-bar,
.ast-mobile-header-wrap {
  background: var(--c-white) !important;
  border-bottom: 0 !important;
  box-shadow: none !important;
}

/* Container: identical on every page */
.site-primary-header-wrap.ast-container,
.ast-primary-header-bar > .ast-container {
  max-width: var(--nav-max) !important;
  width: 100% !important;
  margin: 0 auto !important;
  padding-left: var(--nav-pad-x) !important;
  padding-right: var(--nav-pad-x) !important;
  box-sizing: border-box !important;
}

/* Row: flex, vertically centered, fixed height (no CLS) */
.ast-builder-grid-row.ast-builder-grid-row-has-sides {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  width: 100% !important;
  min-height: var(--nav-h) !important;
}

/* Left: logo, locked position */
.site-header-primary-section-left {
  flex: 0 0 auto !important;
  display: flex !important;
  align-items: center !important;
}
#masthead .site-title,
#masthead .site-description { display: none !important; }
#masthead .custom-logo-link { display: flex !important; align-items: center !important; line-height: 0 !important; }
#masthead .custom-logo {
  height: var(--nav-logo-h) !important;
  width: auto !important; max-width: none !important; display: block !important;
}

/* Right: nav */
.site-header-primary-section-right {
  flex: 1 1 auto !important;
  display: flex !important;
  align-items: center !important;
  justify-content: flex-end !important;
}

/* ═══════════════════════════════════════════════════════════
   DESKTOP MENU (>=922px)
   ═══════════════════════════════════════════════════════════ */
@media (min-width: 922px) {
  .ast-builder-menu-1 .main-header-menu {
    display: flex !important; align-items: center !important; height: var(--nav-h) !important; gap: 0 !important;
  }
  .ast-builder-menu-1 .main-header-menu > .menu-item {
    display: flex !important; align-items: center !important; height: var(--nav-h) !important; position: relative !important;
  }
  .ast-builder-menu-1 .main-header-menu > .menu-item > .menu-link {
    display: flex !important; align-items: center !important; height: var(--nav-h) !important;
    padding: 0 16px !important;
    font-size: .9rem !important; font-weight: 600 !important; letter-spacing: .01em !important;
    color: var(--c-ink) !important; text-decoration: none !important; white-space: nowrap !important;
    position: relative !important; box-sizing: border-box !important;
    transition: color var(--dur) var(--ease) !important;
  }
  /* Animated underline (grows from center) */
  .ast-builder-menu-1 .main-header-menu > .menu-item > .menu-link::after {
    content: ""; position: absolute; left: 16px; right: 16px; bottom: 0; height: 2px;
    background: var(--c-orange); transform: scaleX(0); transform-origin: center;
    transition: transform var(--dur) var(--ease);
  }
  .ast-builder-menu-1 .main-header-menu > .menu-item > .menu-link:hover { color: var(--c-orange) !important; }
  .ast-builder-menu-1 .main-header-menu > .menu-item > .menu-link:hover::after { transform: scaleX(1); }
  .ast-builder-menu-1 .main-header-menu > .menu-item.current-menu-item > .menu-link,
  .ast-builder-menu-1 .main-header-menu > .menu-item.current-menu-ancestor > .menu-link { color: var(--c-orange) !important; }
  .ast-builder-menu-1 .main-header-menu > .menu-item.current-menu-item > .menu-link::after,
  .ast-builder-menu-1 .main-header-menu > .menu-item.current-menu-ancestor > .menu-link::after { transform: scaleX(1); }
  .ast-builder-menu-1 .main-header-menu > .menu-item > .menu-link:focus-visible {
    outline: 2px solid var(--c-blue) !important; outline-offset: -2px !important; border-radius: 4px;
  }
  /* Chevron */
  .ast-builder-menu-1 .main-header-menu > .menu-item > .menu-link svg {
    margin-left: 4px !important; width: 12px !important; height: 12px !important; fill: currentColor !important;
    transition: transform var(--dur) var(--ease);
  }
  .ast-builder-menu-1 .main-header-menu > .menu-item:hover > .menu-link svg { transform: rotate(180deg); }

  /* Dropdown — premium fade+rise */
  .ast-builder-menu-1 .main-header-menu .sub-menu {
    position: absolute !important; top: 100% !important; left: auto !important; right: 0 !important; min-width: 240px !important;
    background: var(--c-white) !important; border-top: 2px solid var(--c-orange) !important;
    border-radius: 0 0 var(--radius) var(--radius) !important; box-shadow: var(--shadow-pop) !important;
    margin-top: 0 !important; padding: 8px 0 !important; z-index: 9999 !important;
    opacity: 0 !important; visibility: hidden !important; transform: translateY(8px) !important;
    transition: opacity var(--dur) var(--ease), transform var(--dur) var(--ease), visibility var(--dur) !important;
    display: block !important;
  }
  .ast-builder-menu-1 .main-header-menu > .menu-item:hover > .sub-menu,
  .ast-builder-menu-1 .main-header-menu > .menu-item:focus-within > .sub-menu {
    opacity: 1 !important; visibility: visible !important; transform: translateY(0) !important;
  }
  .ast-builder-menu-1 .main-header-menu .sub-menu .menu-item { height: auto !important; }
  .ast-builder-menu-1 .main-header-menu .sub-menu .menu-item > .menu-link {
    display: block !important; padding: 10px 20px !important; height: auto !important;
    font-size: .85rem !important; font-weight: 500 !important; color: var(--c-ink) !important;
    white-space: nowrap !important; transition: color .15s var(--ease), background .15s var(--ease) !important;
  }
  .ast-builder-menu-1 .main-header-menu .sub-menu .menu-item > .menu-link::after { display: none !important; }
  .ast-builder-menu-1 .main-header-menu .sub-menu .menu-item > .menu-link:hover { color: var(--c-orange) !important; background: var(--c-orange-soft) !important; }
}

/* ═══════════════════════════════════════════════════════════
   MOBILE BAR (<=921px)
   ═══════════════════════════════════════════════════════════ */
@media (max-width: 921px) {
  .ast-builder-grid-row.ast-builder-grid-row-has-sides { min-height: 100px !important; max-height: 100px !important; padding: 14px 0 !important; }
  .site-primary-header-wrap.ast-container,
  .ast-primary-header-bar > .ast-container { padding-left: 20px !important; padding-right: 20px !important; }
  #masthead .custom-logo,
  #masthead img.custom-logo,
  #masthead .custom-logo-link img {
    height: 62px !important; max-height: 62px !important;
    width: auto !important; max-width: 200px !important;
  }

  /* Hamburger — clean, 44px touch target */
  .site-header-primary-section-right { flex: 0 0 auto !important; margin-left: auto !important; }
  .menu-toggle, .ast-mobile-menu-trigger-fill, .ast-mobile-menu-trigger-minimal {
    width: 44px !important; height: 44px !important;
    display: inline-flex !important; align-items: center !important; justify-content: center !important;
    border: 1.5px solid #eef0f4 !important; border-radius: 8px !important;
    background-color: #ffffff !important; background-image: none !important; padding: 0 !important; cursor: pointer !important;
    transition: border-color var(--dur) var(--ease), background var(--dur) var(--ease) !important;
  }
  .menu-toggle:active { background-color: #fdf6f0 !important; border-color: #e8650a !important; }
  /* Kill any plugin/theme pseudo-element overlay painting on the trigger button */
  .menu-toggle::before, .menu-toggle::after,
  .ast-mobile-menu-trigger-fill::before, .ast-mobile-menu-trigger-fill::after,
  .ast-mobile-menu-trigger-minimal::before, .ast-mobile-menu-trigger-minimal::after {
    content: none !important; display: none !important; background: none !important;
  }
  #masthead svg path, #masthead .ast-mobile-svg { fill: var(--c-ink) !important; stroke: var(--c-ink) !important; }

  .aspcv-trigger-reset { position: relative !important; overflow: hidden !important; background: none !important; }

  /* Opaque plate owns its own paint — immune to Astra's runtime rewriting the button's inline "background" */
  .aspcv-trigger-plate {
    position: absolute !important; inset: 0 !important; display: flex !important; align-items: center !important; justify-content: center !important;
    background-color: #ffffff !important; z-index: 1 !important;
  }

  /* Hamburger ↔ X morph (three bars → X) */
  .aspcv-bars { display: flex !important; flex-direction: column !important; justify-content: center !important; align-items: center !important; width: 20px !important; height: 16px !important; position: relative !important; background: transparent !important; }
  .aspcv-bars span {
    position: absolute !important; left: 0 !important; width: 20px !important; height: 2px !important; border-radius: 1px !important;
    background-color: #1a1a2e !important; transition: transform var(--dur) var(--ease), opacity var(--dur) var(--ease), top var(--dur) var(--ease);
  }
  .aspcv-bars span:nth-child(1) { top: 0; }
  .aspcv-bars span:nth-child(2) { top: 7px; }
  .aspcv-bars span:nth-child(3) { top: 14px; }
  .menu-toggle.aspcv-open .aspcv-bars span:nth-child(1) { top: 7px; transform: rotate(45deg); }
  .menu-toggle.aspcv-open .aspcv-bars span:nth-child(2) { opacity: 0; }
  .menu-toggle.aspcv-open .aspcv-bars span:nth-child(3) { top: 7px; transform: rotate(-45deg); }

  /* Kill Astra's native dropdown menu on mobile — we use custom drawer */
  #ast-mobile-header .main-navigation,
  .ast-mobile-header-wrap .main-navigation { display: none !important; }
}

/* ═══════════════════════════════════════════════════════════
   CUSTOM PREMIUM DRAWER
   ═══════════════════════════════════════════════════════════ */
#aspcv-drawer-root { position: fixed; inset: 0; z-index: 100000; pointer-events: none; }
#aspcv-drawer-root svg { max-width: none !important; vertical-align: middle; }
#aspcv-drawer-root.open { pointer-events: auto; }

/* Backdrop with blur */
.aspcv-backdrop {
  position: absolute; inset: 0; background: rgba(13,21,48,.28);
  -webkit-backdrop-filter: blur(4px); backdrop-filter: blur(4px);
  opacity: 0; transition: opacity var(--dur-slow) var(--ease);
}
#aspcv-drawer-root.open .aspcv-backdrop { opacity: 1; }

/* Panel — slides from right, rounded leading edge */
.aspcv-panel {
  position: absolute; top: 0; right: 0; height: 100%;
  width: 86vw; max-width: 380px;
  background: var(--c-white); box-shadow: var(--shadow-drawer);
  border-top-left-radius: var(--radius-lg); border-bottom-left-radius: var(--radius-lg);
  transform: translateX(100%); transition: transform var(--dur-slow) var(--ease-out);
  display: flex; flex-direction: column;
  padding-top: env(safe-area-inset-top); padding-bottom: env(safe-area-inset-bottom);
  overscroll-behavior: contain;
}
#aspcv-drawer-root.open .aspcv-panel { transform: translateX(0); }

/* Drawer header */
.aspcv-drawer-head {
  display: flex; align-items: center; justify-content: space-between;
  padding: 16px 20px; border-bottom: 1px solid var(--c-line); flex: 0 0 auto;
}
.aspcv-drawer-head img { height: 40px; width: auto; display: block; }
.aspcv-close {
  width: 44px !important; height: 44px !important; flex: 0 0 44px !important;
  border: 1.5px solid #eef0f4 !important; border-radius: 8px !important;
  background: #ffffff !important; box-shadow: none !important;
  display: inline-flex !important; align-items: center !important; justify-content: center !important;
  cursor: pointer; color: #1a1a2e !important; -webkit-appearance: none; appearance: none;
  transition: border-color var(--dur) var(--ease), color var(--dur) var(--ease);
}
.aspcv-close:hover, .aspcv-close:focus-visible { border-color: #e8650a !important; color: #e8650a !important; outline: none; }
.aspcv-close svg {
  width: 18px !important; height: 18px !important; min-width: 18px !important; flex: 0 0 18px !important; display: block !important;
  stroke: currentColor !important; color: inherit !important;
}
.aspcv-close svg line { stroke: currentColor !important; }

/* Nav list */
.aspcv-drawer-nav { flex: 1 1 auto; overflow-y: auto; padding: 8px 0; -webkit-overflow-scrolling: touch; }
.aspcv-drawer-nav ul { list-style: none; margin: 0; padding: 0; }
.aspcv-item { border-bottom: 1px solid #eef0f4; position: relative; }
.aspcv-row { display: flex; align-items: center; position: relative; }
.aspcv-link {
  flex: 1 1 auto; display: flex; align-items: center;
  min-height: 52px; padding: 0 20px;
  font-size: .98rem; font-weight: 500 !important; color: #1a1a2e !important; text-decoration: none !important;
  transition: color var(--dur) var(--ease), background var(--dur) var(--ease);
}
.aspcv-link:hover, .aspcv-link:active { background: #fdf6f0 !important; color: #e8650a !important; }
.aspcv-item.current > .aspcv-row > .aspcv-link { color: #e8650a !important; font-weight: 600 !important; }
.aspcv-item.current > .aspcv-row::before {
  content: ""; position: absolute; left: 0; top: 50%; transform: translateY(-50%);
  width: 3px; height: 24px; background: #e8650a; border-radius: 0 2px 2px 0;
}

/* Expandable toggle (sibling of link, never inside <a>) */
.aspcv-toggle {
  width: 44px !important; height: 52px !important; margin: 0 !important; flex: 0 0 44px !important;
  display: inline-flex !important; align-items: center !important; justify-content: center !important;
  background: transparent !important; border: 0 !important; box-shadow: none !important;
  cursor: pointer; color: #1a1a2e !important; -webkit-appearance: none; appearance: none;
}
.aspcv-toggle:hover, .aspcv-toggle:focus-visible { color: #e8650a !important; outline: none; }
.aspcv-toggle svg {
  width: 16px !important; height: 16px !important; min-width: 16px !important; flex: 0 0 16px !important; display: block !important;
  stroke: currentColor !important; color: inherit !important;
  transition: transform var(--dur-slow) var(--ease-out);
}
.aspcv-toggle svg polyline { stroke: currentColor !important; }
.aspcv-item.expanded > .aspcv-row .aspcv-toggle svg { transform: rotate(180deg); }

/* Submenu — smooth height expand */
.aspcv-sub {
  overflow: hidden; max-height: 0;
  transition: max-height var(--dur-slow) var(--ease-out);
  background: #fafbfc;
}
.aspcv-sub a {
  display: flex; align-items: center; min-height: 46px;
  padding: 0 20px 0 36px; font-size: .9rem; font-weight: 400 !important; color: #4a5068 !important; text-decoration: none !important;
  border-top: 1px solid #eef0f4;
  transition: color var(--dur) var(--ease), background var(--dur) var(--ease);
}
.aspcv-sub a:hover, .aspcv-sub a:active { color: #e8650a !important; background: #fdf6f0 !important; }

@media (prefers-reduced-motion: reduce) {
  .aspcv-panel, .aspcv-backdrop, .aspcv-sub, .aspcv-toggle svg { transition: none !important; }
}
</style>

<script id="aspcv-nav-js">
(function () {
  "use strict";
  if (window.__aspcvNav) return; window.__aspcvNav = true;

  var NS = "http://www.w3.org/2000/svg";
  function svgEl(paths, size, strokeColor) {
    var s = document.createElementNS(NS, "svg");
    s.setAttribute("viewBox", "0 0 24 24");
    s.setAttribute("width", size || 18);
    s.setAttribute("height", size || 18);
    s.setAttribute("fill", "none");
    s.setAttribute("stroke", strokeColor || "#1a1a2e");
    s.setAttribute("stroke-width", "2");
    s.setAttribute("stroke-linecap", "round");
    s.setAttribute("stroke-linejoin", "round");
    s.style.cssText = "width:" + (size || 18) + "px;height:" + (size || 18) + "px;min-width:" + (size || 18) + "px;display:block;stroke:" + (strokeColor || "#1a1a2e") + ";";
    paths.forEach(function (p) {
      var el = document.createElementNS(NS, p.t);
      for (var k in p) { if (k !== "t") el.setAttribute(k, p[k]); }
      s.appendChild(el);
    });
    return s;
  }
  function chevron(color) { return svgEl([{ t: "polyline", points: "6 9 12 15 18 9" }], 16, color); }
  function closeIcon(color) { return svgEl([{ t: "line", x1: "18", y1: "6", x2: "6", y2: "18" }, { t: "line", x1: "6", y1: "6", x2: "18", y2: "18" }], 18, color); }

  function build() {
    var srcMenu = document.querySelector(".main-header-menu, .ast-nav-menu");
    if (!srcMenu) return;
    var logo = document.querySelector("#masthead .custom-logo");

    var root = document.createElement("div");
    root.id = "aspcv-drawer-root";
    root.setAttribute("role", "dialog");
    root.setAttribute("aria-modal", "true");
    root.setAttribute("aria-label", "Main menu");
    root.hidden = true;

    var backdrop = document.createElement("div");
    backdrop.className = "aspcv-backdrop";

    var panel = document.createElement("div");
    panel.className = "aspcv-panel";

    // Header
    var head = document.createElement("div");
    head.className = "aspcv-drawer-head";
    var brand = document.createElement("img");
    brand.src = logo ? logo.currentSrc || logo.src : "";
    brand.alt = "Aspiration Cleantech Ventures";
    var close = document.createElement("button");
    close.className = "aspcv-close"; close.type = "button";
    close.style.cssText = "width:44px;height:44px;border:1.5px solid #eef0f4;border-radius:8px;background-color:#ffffff;display:inline-flex;align-items:center;justify-content:center;cursor:pointer;color:#1a1a2e;";
    close.setAttribute("aria-label", "Close menu"); close.appendChild(closeIcon("#1a1a2e"));
    head.appendChild(brand); head.appendChild(close);

    // Nav — clone from source menu (preserves routing/links)
    var nav = document.createElement("nav");
    nav.className = "aspcv-drawer-nav";
    var ul = document.createElement("ul");

    srcMenu.querySelectorAll(":scope > li").forEach(function (li) {
      var a = li.querySelector(":scope > a"); if (!a) return;
      var kids = li.querySelectorAll(":scope > .sub-menu > li > a, :scope > ul > li > a");
      var item = document.createElement("li");
      item.className = "aspcv-item" + (li.className.indexOf("current-menu-item") > -1 || li.className.indexOf("current-menu-ancestor") > -1 ? " current" : "");

      var parentHref = a.getAttribute("href");
      var hasKids = kids.length > 0;

      // Row wrapper: link + optional toggle are SIBLINGS (toggle never inside <a>)
      var row = document.createElement("div");
      row.className = "aspcv-row";

      var link = document.createElement("a");
      link.className = "aspcv-link";
      link.href = parentHref;
      link.appendChild(document.createTextNode(a.textContent.trim()));
      row.appendChild(link);

      if (hasKids) {
        var tgl = document.createElement("button");
        tgl.className = "aspcv-toggle"; tgl.type = "button";
        tgl.style.cssText = "width:44px;height:52px;flex:0 0 44px;display:inline-flex;align-items:center;justify-content:center;background:transparent;border:0;cursor:pointer;color:#1a1a2e;";
        tgl.setAttribute("aria-expanded", "false");
        tgl.setAttribute("aria-label", "Toggle " + a.textContent.trim() + " submenu");
        tgl.appendChild(chevron("#1a1a2e"));
        row.appendChild(tgl);
        item.appendChild(row);

        var sub = document.createElement("div");
        sub.className = "aspcv-sub";
        var subUl = document.createElement("ul");
        kids.forEach(function (c) {
          var cli = document.createElement("li");
          var ca = document.createElement("a");
          ca.href = c.getAttribute("href");
          ca.textContent = c.textContent.trim();
          cli.appendChild(ca); subUl.appendChild(cli);
        });
        sub.appendChild(subUl);
        item.appendChild(sub);

        var doExpand = function (e) {
          if (e) { e.preventDefault(); e.stopPropagation(); }
          var isOpen = item.classList.toggle("expanded");
          tgl.setAttribute("aria-expanded", isOpen ? "true" : "false");
          sub.style.maxHeight = isOpen ? (subUl.scrollHeight + "px") : "0px";
        };
        tgl.addEventListener("click", doExpand);
        // If parent link is a placeholder (#), the whole label also expands
        if (!parentHref || parentHref === "#") {
          link.addEventListener("click", doExpand);
        }
      } else {
        item.appendChild(row);
      }
      ul.appendChild(item);
    });

    nav.appendChild(ul);
    panel.appendChild(head); panel.appendChild(nav);
    root.appendChild(backdrop); root.appendChild(panel);
    document.body.appendChild(root);

    // ── Open/close logic ──
    var lastFocus = null;
    function focusables() { return panel.querySelectorAll('a[href], button:not([disabled])'); }
    function setTriggersMorph(isOpen) {
      document.querySelectorAll(".menu-toggle").forEach(function (btn) {
        btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
        btn.setAttribute("aria-label", isOpen ? "Close menu" : "Open menu");
        var spans = btn.querySelectorAll(".aspcv-bars span");
        if (!spans.length) return;
        if (isOpen) {
          spans[0].style.top = "7px"; spans[0].style.transform = "rotate(45deg)";
          spans[1].style.opacity = "0";
          spans[2].style.top = "7px"; spans[2].style.transform = "rotate(-45deg)";
        } else {
          spans[0].style.top = "0px"; spans[0].style.transform = "none";
          spans[1].style.opacity = "1"; spans[1].style.top = "7px";
          spans[2].style.top = "14px"; spans[2].style.transform = "none";
        }
      });
    }
    function open() {
      lastFocus = document.activeElement;
      root.hidden = false;
      requestAnimationFrame(function () { root.classList.add("open"); });
      document.documentElement.style.overflow = "hidden";
      setTriggersMorph(true);
      close.focus();
      document.addEventListener("keydown", onKey);
    }
    function doClose() {
      root.classList.remove("open");
      document.documentElement.style.overflow = "";
      setTriggersMorph(false);
      document.removeEventListener("keydown", onKey);
      setTimeout(function () { root.hidden = true; }, 380);
      if (lastFocus) lastFocus.focus();
    }
    function onKey(e) {
      if (e.key === "Escape") { doClose(); return; }
      if (e.key === "Tab") {
        var f = focusables(); if (!f.length) return;
        var first = f[0], last = f[f.length - 1];
        if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
        else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
      }
    }
    close.addEventListener("click", doClose);
    backdrop.addEventListener("click", doClose);
    // Close after navigating to same-page hash / any link tap
    nav.addEventListener("click", function (e) {
      if (e.target.closest(".aspcv-toggle")) return;
      var a = e.target.closest("a.aspcv-link, .aspcv-sub a");
      if (a && a.getAttribute("href") && a.getAttribute("href") !== "#") doClose();
    });

    // Intercept Astra hamburger → open our drawer; replace its icon with a morphing 3-bar/X
    function bindTriggers() {
      document.querySelectorAll(".menu-toggle, .ast-mobile-menu-trigger-fill, .ast-mobile-menu-trigger-minimal").forEach(function (btn) {
        if (btn.__aspcvBound) return; btn.__aspcvBound = true;
        btn.innerHTML = "";
        btn.classList.add("aspcv-trigger-reset");
        // Wrapper carries its own opaque white plate so it renders correctly
        // even if Astra's runtime JS rewrites the button's own inline "background" shorthand.
        var plate = document.createElement("span");
        plate.className = "aspcv-trigger-plate";
        // setProperty(...,'important') wins over any stylesheet rule short of
        // another inline style — used because plain class-based CSS here kept
        // losing to an unidentified higher-priority rule on this theme.
        plate.style.setProperty("position", "absolute", "important");
        plate.style.setProperty("inset", "0", "important");
        plate.style.setProperty("display", "flex", "important");
        plate.style.setProperty("align-items", "center", "important");
        plate.style.setProperty("justify-content", "center", "important");
        plate.style.setProperty("background-color", "#ffffff", "important");
        plate.style.setProperty("background-image", "none", "important");
        plate.style.setProperty("z-index", "1", "important");
        var bars = document.createElement("span");
        bars.className = "aspcv-bars";
        bars.style.setProperty("display", "flex", "important");
        bars.style.setProperty("flex-direction", "column", "important");
        bars.style.setProperty("justify-content", "center", "important");
        bars.style.setProperty("align-items", "center", "important");
        bars.style.setProperty("width", "20px", "important");
        bars.style.setProperty("height", "16px", "important");
        bars.style.setProperty("position", "relative", "important");
        bars.style.setProperty("background", "transparent", "important");
        for (var i = 0; i < 3; i++) {
          var bar = document.createElement("span");
          bar.style.setProperty("position", "absolute", "important");
          bar.style.setProperty("left", "0", "important");
          bar.style.setProperty("width", "20px", "important");
          bar.style.setProperty("height", "2px", "important");
          bar.style.setProperty("border-radius", "1px", "important");
          bar.style.setProperty("background-color", "#1a1a2e", "important");
          bar.style.setProperty("background-image", "none", "important");
          bar.style.setProperty("top", (i * 7) + "px", "important");
          bars.appendChild(bar);
        }
        plate.appendChild(bars);
        btn.appendChild(plate);
        btn.setAttribute("aria-label", "Open menu");
        btn.setAttribute("aria-expanded", "false");
        btn.addEventListener("click", function (e) {
          e.preventDefault(); e.stopPropagation();
          if (root.classList.contains("open")) doClose(); else open();
        }, true);
      });
    }
    bindTriggers();
    // Re-bind if Astra re-renders header
    new MutationObserver(bindTriggers).observe(document.body, { childList: true, subtree: true });
  }

  if (document.readyState !== "loading") build();
  else document.addEventListener("DOMContentLoaded", build);
})();
</script>
<?php }, 9999);
