<?php
/**
 * Template Name: ASPCV Home Premium
 */
get_header();
?>
<style>
.hp-hero-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;width:100%;}
.hp-hero-imgs{display:grid;grid-template-columns:1fr 1fr;gap:14px;align-content:start;}
.hp-hero-imgs .hp-img-wide{grid-column:1/-1;height:260px;object-fit:cover;border-radius:16px;width:100%;}
.hp-hero-imgs .hp-img-half{border-radius:12px;height:180px;object-fit:cover;width:100%;}
.hp-mini-stats{display:flex;gap:40px;margin-top:48px;padding-top:32px;border-top:1px solid rgba(255,255,255,0.1);flex-wrap:wrap;}
.hp-stats-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:32px;text-align:center;}
.hp-tech-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
.hp-why-grid{display:grid;grid-template-columns:1fr 1fr;gap:72px;align-items:center;}
.hp-achieve-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
.hp-industries-pills{display:flex;flex-wrap:wrap;gap:12px;justify-content:center;}
.hp-cta-btns{display:flex;gap:16px;flex-wrap:wrap;}

@media(max-width:900px){
  .hp-hero-grid{grid-template-columns:1fr;gap:36px;}
  .hp-why-grid{grid-template-columns:1fr;gap:36px;}
  .hp-tech-grid{grid-template-columns:1fr 1fr;gap:16px;}
  .hp-stats-grid{grid-template-columns:repeat(3,1fr);gap:20px;}
}
@media(max-width:600px){
  .hp-hero-imgs{display:none;}
  .hp-mini-stats{gap:20px;}
  .hp-stats-grid{grid-template-columns:repeat(2,1fr);gap:14px;}
  .hp-tech-grid{grid-template-columns:1fr;gap:16px;}
  .hp-why-grid{grid-template-columns:1fr;}
  .hp-achieve-grid{grid-template-columns:1fr;}
  .hp-hero-grid{gap:24px;}
  .hp-hero-grid > div:first-child{display:flex;flex-direction:column;align-items:flex-start;}
  .hp-hero-grid > div:first-child > span:first-child{max-width:fit-content !important;white-space:nowrap !important;display:inline-block !important;width:auto !important;}
  .hp-cta-btns a{white-space:nowrap;}
  .hp-hero-section{padding-top:180px !important;}
  .hp-hero-outer{padding-top:40px !important;}
  .hp-cta-btns{flex-direction:row !important;flex-wrap:nowrap !important;gap:10px !important;}
  .hp-cta-btns a{flex:1 1 0 !important;text-align:center !important;padding:12px 14px !important;font-size:0.82rem !important;white-space:nowrap !important;}
}
@media(max-width:400px){
  .hp-stats-grid{grid-template-columns:1fr 1fr;}
  .hp-mini-stats > div{min-width:70px;}
}
</style>

<!-- HERO -->
<section class="hp-hero-section" style="background:#0d1530;min-height:90vh;display:flex;align-items:center;position:relative;overflow:hidden;padding:100px 0 80px 0;">
  <div style="position:absolute;inset:0;background-image:url('/wp-content/uploads/2024/06/RE-ORAGADAM-13-scaled-1.jpg');background-size:cover;background-position:center;opacity:0.1;"></div>
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 70% 50%,rgba(43,75,160,0.35) 0%,transparent 60%),radial-gradient(ellipse at 20% 80%,rgba(232,101,10,0.18) 0%,transparent 50%);"></div>
  <div style="max-width:1200px;margin:0 auto;padding:80px 24px 0;position:relative;z-index:2;" class="hp-hero-outer">
    <div class="hp-hero-grid">
      <div>
        <span style="display:inline-block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;border:1px solid rgba(232,101,10,0.4);padding:6px 18px;border-radius:100px;margin-bottom:24px;">India's #1 Industrial Cleantech Company</span>
        <h1 style="font-family:'Playfair Display',Georgia,serif;font-size:clamp(2rem,4.5vw,4rem);color:#ffffff;line-height:1.15;margin-bottom:20px;font-weight:700;">Transforming Industry<br>with <em style="font-style:italic;color:#f07c2a;">Sustainable Energy</em></h1>
        <p style="font-size:1.05rem;color:rgba(255,255,255,0.68);max-width:520px;margin-bottom:36px;line-height:1.75;">We design and deploy High-Temperature Heat Pumps, Solar Thermal Systems, and Waste Heat Recovery, making Indian industry energy-efficient and carbon-neutral.</p>
        <div class="hp-cta-btns">
          <a href="/technologies" style="display:inline-flex;align-items:center;gap:8px;background:#e8650a;color:#fff;font-weight:600;font-size:0.9rem;padding:14px 28px;border-radius:100px;text-decoration:none;box-shadow:0 4px 20px rgba(232,101,10,0.4);">Explore Technologies →</a>
          <a href="/contact-us" style="display:inline-flex;align-items:center;background:transparent;color:rgba(255,255,255,0.85);font-size:0.9rem;padding:14px 28px;border-radius:100px;border:1px solid rgba(255,255,255,0.25);text-decoration:none;">Talk to an Expert</a>
        </div>
        <div class="hp-mini-stats">
          <div><div style="font-size:1.8rem;font-weight:700;color:#e8650a;font-family:'Playfair Display',serif;">5,000+</div><div style="font-size:0.7rem;color:rgba(255,255,255,0.5);letter-spacing:0.1em;text-transform:uppercase;margin-top:4px;">kW Installed</div></div>
          <div><div style="font-size:1.8rem;font-weight:700;color:#e8650a;font-family:'Playfair Display',serif;">CII</div><div style="font-size:0.7rem;color:rgba(255,255,255,0.5);letter-spacing:0.1em;text-transform:uppercase;margin-top:4px;">Validated</div></div>
          <div><div style="font-size:1.8rem;font-weight:700;color:#e8650a;font-family:'Playfair Display',serif;">Pan India</div><div style="font-size:0.7rem;color:rgba(255,255,255,0.5);letter-spacing:0.1em;text-transform:uppercase;margin-top:4px;">Reach</div></div>
        </div>
      </div>
      <div class="hp-hero-imgs">
        <img src="/wp-content/uploads/2024/06/RE-ORAGADAM-13-scaled-1.jpg" alt="Heat Pump Installation" class="hp-img-wide" />
        <img src="/wp-content/uploads/2024/06/TKAP-16-scaled-1.jpg" alt="Industrial Heat Pump" class="hp-img-half" />
        <img src="/wp-content/uploads/2024/06/low-angle-solar-pannels-arrangement-scaled-1.jpg" alt="Solar Thermal" class="hp-img-half" />
      </div>
    </div>
  </div>
</section>

<!-- STATS STRIP -->
<section style="background:#111b3e;padding:56px 0;border-top:1px solid rgba(232,101,10,0.2);border-bottom:1px solid rgba(232,101,10,0.2);">
  <div style="max-width:1200px;margin:0 auto;padding:0 24px;">
    <div class="hp-stats-grid">
      <?php foreach([['15+','Years Experience'],['20+','States Served'],['500+','Clients'],['5,000+','kW Installed'],['10,000+','Ton CO₂ Eliminated']] as $s): ?>
      <div>
        <div style="font-family:'Playfair Display',serif;font-size:2.2rem;font-weight:700;color:#e8650a;line-height:1;"><?= $s[0] ?></div>
        <div style="font-size:0.7rem;letter-spacing:0.1em;text-transform:uppercase;color:rgba(255,255,255,0.5);margin-top:10px;"><?= $s[1] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TECHNOLOGIES -->
<section style="background:#f5f7ff;padding:90px 0;">
  <div style="max-width:1200px;margin:0 auto;padding:0 24px;">
    <div style="margin-bottom:48px;">
      <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:12px;">What We Build</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.8rem,3vw,2.8rem);color:#1a1a2e;margin-bottom:12px;">Our Technologies</h2>
      <p style="color:#5a6080;font-size:1rem;max-width:520px;">Proven, industrial-grade sustainable energy systems deployed across India.</p>
    </div>
    <div class="hp-tech-grid">
      <?php foreach([
        ['/wp-content/uploads/2024/06/RE-ORAGADAM-13-scaled-1.jpg','High-Temperature Heat Pumps','Up to 120°C. India\'s first CII-validated industrial heat pump.','/heat-pumps'],
        ['/wp-content/uploads/2024/06/low-angle-solar-pannels-arrangement-scaled-1.jpg','Solar Thermal Systems','3,000+ kW industry-scale solar thermal installed across India.','/solar-thermal-system'],
        ['/wp-content/uploads/2024/06/aerial-shot-two-power-plant-sunset-vilnius-1-scaled-1.jpg','Waste Heat Recovery','Convert industrial exhaust heat into usable energy.','/waste-heat-recovery-system'],
        ['/wp-content/uploads/2024/06/ORC-IMAGE.jpg','Organic Rankine Cycle','Generate clean power from low-grade heat sources.','/organic-rankine-cycle-orc'],
        ['/wp-content/uploads/2024/07/Heat-pump-dryer.1-scaled-1.jpg','Heat Pump Dryers','Energy-efficient drying for food, pharma, and textile.','/heat-pump-dryer'],
        ['/wp-content/uploads/2024/12/Solar-dryer-1.4-scaled-1.jpg','Solar Dryers','Zero-energy drying using solar energy.','/solar-dryer'],
      ] as $t): ?>
      <div style="position:relative;border-radius:20px;overflow:hidden;aspect-ratio:4/3;">
        <img src="<?= $t[0] ?>" alt="<?= esc_attr($t[1]) ?>" style="width:100%;height:100%;object-fit:cover;display:block;" />
        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(13,21,48,0.93) 0%,transparent 55%);display:flex;flex-direction:column;justify-content:flex-end;padding:24px;">
          <h3 style="color:#fff;font-family:'Playfair Display',serif;font-size:1rem;margin-bottom:6px;"><?= $t[1] ?></h3>
          <p style="color:rgba(255,255,255,0.65);font-size:0.8rem;margin-bottom:10px;line-height:1.5;"><?= $t[2] ?></p>
          <a href="<?= $t[3] ?>" style="color:#f07c2a;font-size:0.8rem;font-weight:600;text-decoration:none;">Learn More →</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- WHY US -->
<section style="background:#0d1530;padding:90px 0;">
  <div style="max-width:1200px;margin:0 auto;padding:0 24px;">
    <div class="hp-why-grid">
      <div>
        <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:16px;">Why Choose Us</span>
        <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.8rem,3vw,2.6rem);color:#fff;margin-bottom:16px;">Why Aspiration Cleantech Ventures?</h2>
        <p style="color:rgba(255,255,255,0.6);margin-bottom:32px;line-height:1.75;">We don't just sell equipment. We partner with industries to deliver measurable energy savings.</p>
        <div class="hp-achieve-grid">
          <?php foreach([
            '5,000+ kW Industrial Heat Pumps Installed across India',
            'Introduced India\'s First 90°C & 120°C Heat Pump, validated by CII',
            '3,000+ kW Industry-Scale Solar Thermal Installed',
            'Collaboration with IITs for cutting-edge innovation',
            '"Pay as You Save" model. Zero upfront investment',
            'Pan India reach with dedicated service team',
          ] as $a): ?>
          <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(232,101,10,0.2);border-radius:12px;padding:20px;display:flex;gap:12px;align-items:flex-start;">
            <div style="width:8px;height:8px;min-width:8px;background:#e8650a;border-radius:50%;margin-top:6px;"></div>
            <p style="color:rgba(255,255,255,0.8);font-size:0.9rem;line-height:1.5;margin:0;"><?= $a ?></p>
          </div>
          <?php endforeach; ?>
        </div>
        <a href="/about-us" style="display:inline-flex;align-items:center;background:#e8650a;color:#fff;font-weight:600;padding:13px 28px;border-radius:100px;text-decoration:none;margin-top:32px;">Our Story →</a>
      </div>
      <div>
        <div style="border-radius:20px;overflow:hidden;margin-bottom:16px;">
          <img src="/wp-content/uploads/2024/07/Heat-pump-dryer.1-scaled-1.jpg" alt="Installation" style="width:100%;height:320px;object-fit:cover;display:block;border-radius:20px;" />
        </div>
        <div style="background:rgba(232,101,10,0.1);border:1px solid rgba(232,101,10,0.3);border-radius:14px;padding:20px 24px;display:flex;align-items:center;gap:16px;">
          <div style="width:40px;height:40px;min-width:40px;background:#e8650a;border-radius:10px;display:flex;align-items:center;justify-content:center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22V12"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/><path d="M8 6l4-4 4 4"/></svg>
          </div>
          <div>
            <div style="color:#fff;font-weight:600;font-size:0.9rem;">We plant a tree for every kW of Heat Pump sold</div>
            <div style="color:rgba(255,255,255,0.5);font-size:0.8rem;margin-top:2px;">Carbon neutral commitment since day one</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- INDUSTRIES -->
<section style="background:#eef0f8;padding:80px 0;text-align:center;">
  <div style="max-width:1000px;margin:0 auto;padding:0 24px;">
    <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:12px;">Sectors We Serve</span>
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.8rem,3vw,2.6rem);color:#1a1a2e;margin-bottom:12px;">Industries We Power</h2>
    <p style="color:#5a6080;font-size:1rem;max-width:480px;margin:0 auto 40px;">From automotive to food processing. If your industry uses heat, we can make it sustainable.</p>
    <div class="hp-industries-pills">
      <?php foreach(['Automotive','Pharmaceutical','Chemical','Machinery & Equipment','Food & Dairy','Textile','Wood','Paper','Rubber & Plastics'] as $ind): ?>
      <span style="background:#fff;border:1px solid #dde2f0;border-radius:100px;padding:10px 22px;font-size:0.875rem;font-weight:500;color:#1a1a2e;"><?= $ind ?></span>
      <?php endforeach; ?>
    </div>
    <a href="/service" style="display:inline-flex;align-items:center;background:#2b4ba0;color:#fff;font-weight:600;padding:13px 32px;border-radius:100px;text-decoration:none;margin-top:40px;">View Our Services →</a>
  </div>
</section>

<!-- CTA -->
<section style="background:linear-gradient(135deg,#1a2a5e 0%,#0d1530 100%);padding:80px 0;text-align:center;">
  <div style="max-width:700px;margin:0 auto;padding:0 24px;">
    <h2 style="font-family:'Playfair Display',serif;color:#fff;font-size:clamp(1.6rem,3vw,2.4rem);margin-bottom:16px;">Ready to Cut Your Energy Bills by 40 to 60%?</h2>
    <p style="color:rgba(255,255,255,0.65);font-size:1rem;margin-bottom:36px;">Our engineers will audit your plant and design a custom energy solution, free of charge.</p>
    <div class="hp-cta-btns" style="justify-content:center;">
      <a href="/contact-us" style="display:inline-flex;align-items:center;background:#e8650a;color:#fff;font-weight:600;padding:14px 32px;border-radius:100px;text-decoration:none;box-shadow:0 4px 20px rgba(232,101,10,0.4);">Get Free Energy Audit →</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
