<?php
/**
 * Template Name: ASPCV Service
 */
get_header();
?>
<div class="aspcv-page-title" style="position:relative;">
  <div style="max-width:1200px;margin:0 auto;padding:0 40px;">
    <h1>Our Services</h1>
    <div class="aspcv-breadcrumb"><a href="/">Home</a> → Services</div>
  </div>
  <div style="position:absolute;right:40px;top:50%;transform:translateY(-50%);display:flex;flex-direction:column;align-items:flex-end;gap:6px;z-index:3;">
    <span style="font-size:0.65rem;letter-spacing:0.14em;text-transform:uppercase;color:rgba(255,255,255,0.45);">Powered By</span>
    <img src="https://aspcv.com/wp-content/uploads/2026/07/Thermagen-2X-Logo-scaled-1-1.jpg" alt="Thermagen" style="height:44px;width:auto;border-radius:6px;" />
  </div>
</div>

<!-- SERVICES GRID -->
<section style="background:#f5f7ff;padding:100px 0;">
  <div style="max-width:1200px;margin:0 auto;padding:0 40px;">
    <div style="text-align:center;margin-bottom:64px;">
      <span style="font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;display:block;margin-bottom:12px;">Services We Offer</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,3.5vw,2.8rem);color:#1a1a1a;margin-bottom:14px;">Industrial Energy Solutions</h2>
      <p style="color:#6b6560;font-size:1.05rem;max-width:560px;margin:0 auto;">End-to-end clean energy services from energy audit to installation, commissioning, and maintenance.</p>
    </div>
    <?php
    $services = [
      [
        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
        'color' => '#e85d04',
        'bg' => '#fff4ee',
        'title' => 'Industrial Heat Pumps (60°C  to  120°C)',
        'desc' => 'High-efficiency heat pump systems for industrial process heating and decarbonization. Replace boilers and thermic fluid heaters with zero-emission alternatives.',
        'link' => '/heat-pumps',
      ],
      [
        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>',
        'color' => '#e8650a',
        'bg' => '#fdf8f0',
        'title' => 'Solar Thermal Systems',
        'desc' => 'Industry-scale solar thermal systems for process heat up to 150°C. 3,000+ kW deployed across India.',
        'link' => '/solar-thermal-system',
      ],
      [
        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>',
        'color' => '#2b4ba0',
        'bg' => '#f0f7f4',
        'title' => 'Waste-to-Energy Systems',
        'desc' => 'Transform industrial waste streams flue gases, effluents, biomass into valuable thermal and power outputs.',
        'link' => '/waste-heat-recovery-system',
      ],
      [
        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"/></svg>',
        'color' => '#c1121f',
        'bg' => '#fff0f0',
        'title' => 'Heat Pump Dryers',
        'desc' => 'Energy-efficient drying for food, pharma, textile, and agriculture. 50 to 70% less energy than conventional dryers.',
        'link' => '/heat-pump-dryer',
      ],
      [
        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>',
        'color' => '#0077b6',
        'bg' => '#eef6fb',
        'title' => 'Organic Rankine Cycle (ORC)',
        'desc' => 'Convert low-grade waste heat (80°C to 300°C) into usable electrical power for improved energy efficiency and ROI.',
        'link' => '/organic-rankine-cycle-orc',
      ],
      [
        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22V12"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/><path d="M8 6l4-4 4 4"/><path d="M2 9.5a10 10 0 0 0 0 3"/><path d="M22 9.5a10 10 0 0 0 0 3"/></svg>',
        'color' => '#52b788',
        'bg' => '#f0faf4',
        'title' => 'Solar Dryers',
        'desc' => 'Zero-cost solar drying for agricultural and industrial applications. Hybrid configurations available.',
        'link' => '/solar-dryer',
      ],
      [
        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'color' => '#e8650a',
        'bg' => '#fdf8f0',
        'title' => 'ESCO Model (Pay as You Save)',
        'desc' => 'We fund, install, and maintain the system you pay from energy savings. Zero upfront investment for your facility.',
        'link' => '/esco',
      ],
      [
        'icon' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>',
        'color' => '#2b4ba0',
        'bg' => '#f0f7f4',
        'title' => 'Energy Audits & Consulting',
        'desc' => 'Our engineers conduct detailed plant energy audits and identify the highest-ROI decarbonization opportunities.',
        'link' => '/contact-us',
      ],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px;">
      <?php foreach($services as $s): ?>
      <a href="<?= $s['link'] ?>" style="display:block;text-decoration:none;background:#fff;border:1px solid #dde2f0;border-radius:20px;padding:32px 28px;transition:all 0.3s;box-shadow:0 2px 10px rgba(0,0,0,0.04);" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 20px 50px rgba(0,0,0,0.1)';this.style.borderColor='<?= $s['color'] ?>'" onmouseout="this.style.transform='';this.style.boxShadow='0 2px 10px rgba(0,0,0,0.04)';this.style.borderColor='#dde2f0'">
        <div style="width:54px;height:54px;background:<?= $s['bg'] ?>;border-radius:14px;display:flex;align-items:center;justify-content:center;margin-bottom:18px;color:<?= $s['color'] ?>;">
          <?= $s['icon'] ?>
        </div>
        <h3 style="font-family:'Playfair Display',serif;font-size:1.05rem;color:#1a1a1a;margin-bottom:12px;line-height:1.3;"><?= $s['title'] ?></h3>
        <p style="font-size:0.85rem;color:#6b6560;line-height:1.6;margin-bottom:20px;"><?= $s['desc'] ?></p>
        <span style="display:inline-flex;align-items:center;gap:6px;color:<?= $s['color'] ?>;font-size:0.82rem;font-weight:600;">Learn More
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- HOW WE WORK -->
<section style="background:#eef0f8;padding:100px 0;">
  <div style="max-width:1200px;margin:0 auto;padding:0 40px;">
    <div style="text-align:center;margin-bottom:60px;">
      <span style="font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;display:block;margin-bottom:12px;">Our Process</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,3.5vw,2.8rem);color:#1a1a1a;">How We Work</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:32px;">
      <?php
      $steps = [
        ['01','Energy Audit','We study your plant processes, identify heat requirements, and quantify potential savings.'],
        ['02','Solution Design','Our engineers design a custom system tailored to your specific process temperatures and capacity.'],
        ['03','Installation','Turnkey installation by our certified team minimal downtime, no disruption to production.'],
        ['04','Monitoring & Support','Remote monitoring, preventive maintenance, and 24/7 support throughout system life.'],
      ];
      foreach($steps as $step): ?>
      <div style="position:relative;padding-top:20px;">
        <div style="font-family:'Playfair Display',serif;font-size:4rem;font-weight:700;color:rgba(232,101,10,0.15);line-height:1;margin-bottom:16px;"><?= $step[0] ?></div>
        <h3 style="font-size:1.1rem;color:#1a1a1a;margin-bottom:10px;"><?= $step[1] ?></h3>
        <p style="font-size:0.88rem;color:#6b6560;line-height:1.65;"><?= $step[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ESCO HIGHLIGHT -->
<section style="background:#0d1530;padding:80px 0;">
  <div style="max-width:1100px;margin:0 auto;padding:0 40px;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;">
    <div>
      <span style="font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;display:block;margin-bottom:16px;">ESCO Model</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:2.2rem;color:#fff;margin-bottom:20px;">"Pay as You Save" Zero Upfront Cost</h2>
      <p style="color:rgba(255,255,255,0.65);line-height:1.8;margin-bottom:32px;">Under our ESCO model, Aspiration Cleantech Ventures funds the entire project. You pay only from the energy savings generated meaning the system pays for itself. No capital expenditure, no financial risk.</p>
      <div style="display:flex;flex-direction:column;gap:14px;margin-bottom:36px;">
        <?php foreach(['Zero upfront capital investment','Guaranteed energy savings','We handle design, installation & maintenance','You benefit from day one'] as $b): ?>
        <div style="display:flex;align-items:center;gap:12px;">
          <div style="width:20px;height:20px;min-width:20px;background:#e8650a;border-radius:50%;display:flex;align-items:center;justify-content:center;">
            <svg width="10" height="8" viewBox="0 0 10 8" fill="none"><path d="M1 4L3.5 6.5L9 1" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <span style="color:rgba(255,255,255,0.8);font-size:0.95rem;"><?= $b ?></span>
        </div>
        <?php endforeach; ?>
      </div>
      <a href="/esco" style="display:inline-flex;align-items:center;background:#e8650a;color:#fff;font-weight:600;padding:14px 32px;border-radius:100px;text-decoration:none;">Learn About ESCO →</a>
    </div>
    <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(232,101,10,0.2);border-radius:24px;padding:40px;">
      <div style="text-align:center;margin-bottom:28px;">
        <div style="font-family:'Playfair Display',serif;font-size:3.5rem;font-weight:700;color:#e8650a;">40 to 60%</div>
        <div style="color:rgba(255,255,255,0.6);font-size:0.85rem;letter-spacing:0.08em;text-transform:uppercase;margin-top:8px;">Typical Energy Savings</div>
      </div>
      <div style="border-top:1px solid rgba(255,255,255,0.08);padding-top:24px;display:grid;grid-template-columns:1fr 1fr;gap:20px;text-align:center;">
        <div><div style="font-family:'Playfair Display',serif;font-size:1.8rem;color:#f07c2a;">18 to 36</div><div style="color:rgba(255,255,255,0.45);font-size:0.75rem;text-transform:uppercase;letter-spacing:0.1em;margin-top:4px;">Month Payback</div></div>
        <div><div style="font-family:'Playfair Display',serif;font-size:1.8rem;color:#f07c2a;">15+</div><div style="color:rgba(255,255,255,0.45);font-size:0.75rem;text-transform:uppercase;letter-spacing:0.1em;margin-top:4px;">Year System Life</div></div>
      </div>
    </div>
  </div>
</section>

<section style="padding:80px 0;text-align:center;background:#f5f7ff;">

<!-- RESULTS SECTION -->
<section style="background:#fff;padding:80px 0;">
  <div style="max-width:1100px;margin:0 auto;padding:0 40px;">
    <div style="text-align:center;margin-bottom:56px;">
      <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:12px;">Proven Results</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3vw,2.4rem);color:#1a1a2e;">What Our Clients Achieve</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px;">
      <?php foreach([
        ['40 to 60%','Energy Cost Reduction','Average across all ESCO projects'],
        ['18 to 36 mo','Payback Period','On direct purchase installations'],
        ['5,000+ kW','Capacity Installed','Heat pumps deployed across India'],
        ['500+','Happy Clients','Across 20+ states in India'],
      ] as $r): ?>
      <div style="text-align:center;padding:32px 20px;background:#f5f7ff;border-radius:20px;border:1px solid #dde2f0;">
        <div style="font-family:'Playfair Display',serif;font-size:2rem;font-weight:700;color:#e8650a;margin-bottom:8px;"><?= $r[0] ?></div>
        <div style="font-weight:700;color:#1a2a5e;font-size:0.95rem;margin-bottom:6px;"><?= $r[1] ?></div>
        <div style="color:#5a6080;font-size:0.82rem;"><?= $r[2] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- INDUSTRIES SECTION -->
<section style="background:#f5f7ff;padding:80px 0;">
  <div style="max-width:1100px;margin:0 auto;padding:0 40px;">
    <div style="text-align:center;margin-bottom:48px;">
      <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:12px;">Sectors We Power</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3vw,2.4rem);color:#1a1a2e;">Industries We Serve</h2>
      <p style="color:#5a6080;max-width:480px;margin:12px auto 0;">If your process uses heat, we can make it sustainable and cost-effective.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;">
      <?php foreach([
        ['Automotive','Paint drying, component heating, surface treatment'],
        ['Pharmaceutical','Sterilization, process heating, clean steam'],
        ['Chemical','Reactor heating, distillation, evaporation'],
        ['Food & Dairy','Pasteurization, fermentation, bottle washing'],
        ['Textile','Dyeing, washing, drying processes'],
        ['Paper & Pulp','Dryer section heating, steam generation'],
        ['Rubber & Plastics','Vulcanization, mold heating'],
        ['Cement','Kiln heating, waste heat recovery'],
      ] as $ind): ?>
      <div style="background:#fff;border:1px solid #dde2f0;border-radius:14px;padding:20px;">
        <div style="font-weight:700;color:#1a2a5e;font-size:0.95rem;margin-bottom:8px;"><?= $ind[0] ?></div>
        <div style="color:#5a6080;font-size:0.82rem;line-height:1.5;"><?= $ind[1] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- WHY ASPCV SECTION -->
<section style="background:#0d1530;padding:80px 0;">
  <div style="max-width:1100px;margin:0 auto;padding:0 40px;">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;">
      <div>
        <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:16px;">Why Choose Us</span>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3vw,2.4rem);color:#fff;margin-bottom:20px;">Engineering Partners, Not Just Equipment Vendors</h2>
        <p style="color:rgba(255,255,255,0.65);line-height:1.8;margin-bottom:32px;">We do not just supply hardware. We audit, design, install, commission, and maintain your energy system for its full lifetime. You focus on production; we handle the energy.</p>
        <a href="/contact-us" style="display:inline-flex;align-items:center;background:#e8650a;color:#fff;font-weight:600;padding:14px 32px;border-radius:100px;text-decoration:none;box-shadow:0 4px 20px rgba(232,101,10,0.4);">Book Free Audit</a>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <?php foreach([
          ['In-House Engineering','Full design and engineering team, no subcontracting'],
          ['CII Validated','India\'s first CII-validated industrial heat pump deployments'],
          ['IIT Collaboration','Research partnerships with IIT institutions'],
          ['Lifetime Support','O&M contracts with guaranteed uptime SLAs'],
          ['Pan India Reach','Service teams across 20+ states'],
          ['ESCO Financing','Zero upfront cost option for all projects'],
        ] as $w): ?>
        <div style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:14px;padding:20px;">
          <div style="font-weight:700;color:#f07c2a;font-size:0.9rem;margin-bottom:6px;"><?= $w[0] ?></div>
          <div style="color:rgba(255,255,255,0.55);font-size:0.8rem;line-height:1.5;"><?= $w[1] ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
  <div style="max-width:600px;margin:0 auto;padding:0 40px;">
    <h2 style="font-family:'Playfair Display',serif;font-size:2rem;color:#1a1a1a;margin-bottom:16px;">Ready to Reduce Your Energy Bills?</h2>
    <p style="color:#6b6560;margin-bottom:36px;">Talk to our engineering team today. Free plant audit, no obligation.</p>
    <a href="/contact-us" style="display:inline-flex;align-items:center;background:#2b4ba0;color:#fff;font-weight:600;padding:14px 36px;border-radius:100px;text-decoration:none;box-shadow:0 4px 20px rgba(45,106,79,0.3);">Get Free Energy Audit →</a>
  </div>
</section>

<style>
@media(max-width:768px){
  .aspcv-page-title{padding-bottom:20px;}
  .aspcv-page-title > div[style*="right:40px"]{position:static!important;transform:none!important;align-items:flex-start!important;margin-top:16px;padding:0 40px;}
}
</style>
<?php get_footer(); ?>
