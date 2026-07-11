<?php
/**
 * Template Name: ASPCV ESCO
 */
get_header();
?>
<style>
.esco-steps{display:grid;grid-template-columns:repeat(5,1fr);gap:0;position:relative;}
.esco-steps::before{content:'';position:absolute;top:32px;left:10%;right:10%;height:2px;background:linear-gradient(90deg,#e8650a,#2b4ba0);z-index:0;}
.esco-step{text-align:center;position:relative;z-index:1;padding:0 8px;}
.esco-step-icon{width:64px;height:64px;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;border:3px solid #e8650a;}
.esco-options{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
.esco-option{border-radius:20px;padding:36px 32px;border:2px solid #dde2f0;background:#fff;transition:all 0.3s;cursor:default;}
.esco-option:hover{border-color:#e8650a;box-shadow:0 16px 48px rgba(232,101,10,0.12);transform:translateY(-4px);}
.esco-option.featured{background:#0d1530;border-color:#e8650a;}
.esco-benefits{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;}
.esco-benefit{background:#fff;border:1px solid #dde2f0;border-radius:16px;padding:28px 24px;display:flex;gap:16px;align-items:flex-start;}
.esco-faq{display:flex;flex-direction:column;gap:12px;}
.esco-faq-item{background:#fff;border:1px solid #dde2f0;border-radius:14px;padding:24px 28px;}
.esco-compare{width:100%;border-collapse:collapse;border-radius:16px;overflow:hidden;}
.esco-compare th{background:#0d1530;color:#fff;padding:16px 20px;text-align:left;font-size:0.85rem;font-weight:600;letter-spacing:0.05em;}
.esco-compare td{padding:14px 20px;border-bottom:1px solid #eef0f8;font-size:0.9rem;color:#3a3a5a;}
.esco-compare tr:last-child td{border-bottom:none;}
.esco-compare tr:nth-child(even) td{background:rgba(255,255,255,0.04);}
@media(max-width:900px){
  .esco-steps{grid-template-columns:1fr 1fr;gap:24px;}
  .esco-steps::before{display:none;}
  .esco-options{grid-template-columns:1fr;}
  .esco-benefits{grid-template-columns:1fr 1fr;}
}
@media(max-width:600px){
  .esco-benefits{grid-template-columns:1fr;}
  .esco-steps{grid-template-columns:1fr 1fr;}
  div[style*='max-width:1200px'],div[style*='max-width:1100px'],div[style*='max-width:900px']{padding-left:16px!important;padding-right:16px!important;}
  section{padding:52px 0!important;}
  .esco-compare th,.esco-compare td{padding:10px 12px;font-size:0.8rem;}
}
</style>

<!-- HERO -->
<div style="background:linear-gradient(135deg,#0d1530 0%,#1a2a5e 100%);padding:90px 0 70px;position:relative;overflow:hidden;">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 80% 50%,rgba(232,101,10,0.2) 0%,transparent 60%);"></div>
  <div style="position:absolute;right:40px;bottom:24px;display:flex;flex-direction:column;align-items:flex-end;gap:6px;z-index:3;">
    <span style="font-size:0.62rem;letter-spacing:0.14em;text-transform:uppercase;color:rgba(255,255,255,0.4);">Powered By</span>
    <img src="https://aspcv.com/wp-content/uploads/2026/07/Thermagen-2X-Logo-scaled-1-1.jpg" alt="Thermagen" style="height:38px;width:auto;border-radius:6px;" />
  </div>
  <div style="max-width:1200px;margin:0 auto;padding:0 24px;position:relative;z-index:2;display:grid;grid-template-columns:1.2fr 1fr;gap:60px;align-items:center;" class="esco-hero-grid">
    <div>
      <span style="display:inline-block;font-size:0.7rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;border:1px solid rgba(232,101,10,0.4);padding:5px 16px;border-radius:100px;margin-bottom:20px;">Energy Service Company</span>
      <h1 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,4vw,3.4rem);color:#fff;line-height:1.15;margin-bottom:20px;">Pay as You <em style="font-style:italic;color:#f07c2a;">Save</em>. Zero Upfront Cost</h1>
      <p style="color:rgba(255,255,255,0.68);font-size:1.05rem;line-height:1.8;margin-bottom:36px;">Aspiration Cleantech Ventures funds the entire clean energy project. You pay only from the energy savings generated. The system pays for itself. No capital expenditure, no financial risk.</p>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a href="/contact-us" style="display:inline-flex;align-items:center;background:#e8650a;color:#fff;font-weight:600;padding:14px 32px;border-radius:100px;text-decoration:none;box-shadow:0 4px 20px rgba(232,101,10,0.4);">Get Free Energy Audit →</a>
        <a href="#how-it-works" style="display:inline-flex;align-items:center;background:transparent;color:rgba(255,255,255,0.8);padding:14px 24px;border-radius:100px;border:1px solid rgba(255,255,255,0.25);text-decoration:none;font-size:0.9rem;">How It Works ↓</a>
      </div>
    </div>
    <!-- Stats -->
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <?php foreach([
        ['40 to 60%','Typical Energy Savings'],
        ['18 to 36','Month Payback'],
        ['₹0','Upfront Investment'],
        ['15+','Year System Life'],
      ] as $s): ?>
      <div style="background:rgba(255,255,255,0.06);border:1px solid rgba(232,101,10,0.25);border-radius:16px;padding:24px;text-align:center;">
        <div style="font-family:'Playfair Display',serif;font-size:2rem;font-weight:700;color:#e8650a;line-height:1;"><?= $s[0] ?></div>
        <div style="font-size:0.75rem;color:rgba(255,255,255,0.55);letter-spacing:0.08em;text-transform:uppercase;margin-top:8px;"><?= $s[1] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- WHAT IS ESCO -->
<section style="background:#f5f7ff;padding:80px 0;">
  <div style="max-width:1100px;margin:0 auto;padding:0 24px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;" class="esco-what-grid">
    <div>
      <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:14px;">What is ESCO?</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3vw,2.4rem);color:#1a1a2e;margin-bottom:20px;">An Energy Service Company That Eliminates Your Risk</h2>
      <p style="color:#5a6080;line-height:1.8;margin-bottom:16px;">An ESCO (Energy Service Company) designs, finances, installs, and maintains energy-efficiency systems. Unlike traditional procurement, you pay nothing upfront. Repayment comes directly from the savings your new system generates.</p>
      <p style="color:#5a6080;line-height:1.8;margin-bottom:28px;">ASPCV acts as your ESCO partner. We take on the project risk, you get the savings. If the system doesn't save what we promised, <strong style="color:#1a2a5e;">you don't pay the difference.</strong></p>
      <div style="display:flex;flex-direction:column;gap:12px;">
        <?php foreach(['Guaranteed energy savings contract','We handle design, procurement & installation','We manage O&M throughout contract period','You own the system at contract end'] as $p): ?>
        <div style="display:flex;gap:12px;align-items:center;">
          <div style="width:22px;height:22px;min-width:22px;background:#e8650a;border-radius:50%;display:flex;align-items:center;justify-content:center;">
            <svg width="10" height="8" viewBox="0 0 10 8" fill="none"><path d="M1 4L3.5 6.5L9 1" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <span style="color:#3a3a5a;font-size:0.95rem;"><?= $p ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div style="background:#0d1530;border-radius:24px;padding:40px;border:1px solid rgba(232,101,10,0.2);">
      <h3 style="font-family:'Playfair Display',serif;color:#fff;font-size:1.3rem;margin-bottom:24px;">Traditional vs ESCO Model</h3>
      <table class="esco-compare">
        <thead><tr>
          <th style="background:#111b3e;">Aspect</th>
          <th style="background:#111b3e;">Traditional</th>
          <th style="background:#e8650a;">ESCO Model</th>
        </tr></thead>
        <tbody style="background:#0d1530;">
          <?php foreach([
            ['Upfront Cost','High CapEx','₹0'],
            ['Financial Risk','Company bears all','ASPCV bears risk'],
            ['O&M','Company manages','ASPCV manages'],
            ['Savings Guarantee','None','Contractual'],
            ['Ownership','Immediate','After contract'],
          ] as $r): ?>
          <tr>
            <td style="color:rgba(255,255,255,0.7);border-bottom:1px solid rgba(255,255,255,0.06);"><?= $r[0] ?></td>
            <td style="color:rgba(255,255,255,0.45);border-bottom:1px solid rgba(255,255,255,0.06);"><?= $r[1] ?></td>
            <td style="color:#f07c2a;font-weight:600;border-bottom:1px solid rgba(255,255,255,0.06);"><?= $r[2] ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section id="how-it-works" style="background:#fff;padding:80px 0;">
  <div style="max-width:1100px;margin:0 auto;padding:0 24px;">
    <div style="text-align:center;margin-bottom:56px;">
      <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:12px;">The Process</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3vw,2.4rem);color:#1a1a2e;">How the ESCO Model Works</h2>
    </div>
    <div class="esco-steps">
      <?php foreach([
        ['#e8650a','#fff','01','Agreement','Sign contract with deemed savings by customer & ASPCV',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>'],
        ['#2b4ba0','#fff','02','Delivery','ASPCV handles full design, procurement & installation',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>'],
        ['#e8650a','#fff','03','Savings','Customer pays monthly share of actual energy savings',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>'],
        ['#2b4ba0','#fff','04','Maintenance','O&M including replacement done by ASPCV throughout',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>'],
        ['#e8650a','#fff','05','Ownership','At contract end: extend, upgrade, or own the asset outright',
          '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>'],
      ] as $step): ?>
      <div class="esco-step">
        <div class="esco-step-icon" style="background:<?= $step[0] ?>;border-color:<?= $step[0] ?>;color:<?= $step[1] ?>;"><?= $step[5] ?></div>
        <div style="font-size:0.68rem;font-weight:700;color:#e8650a;letter-spacing:0.15em;margin-bottom:6px;">STEP <?= $step[2] ?></div>
        <h4 style="font-family:'Playfair Display',serif;font-size:1rem;color:#1a1a2e;margin-bottom:8px;"><?= $step[3] ?></h4>
        <p style="font-size:0.82rem;color:#5a6080;line-height:1.6;"><?= $step[4] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CONTRACT OPTIONS -->
<section style="background:#eef0f8;padding:80px 0;">
  <div style="max-width:1000px;margin:0 auto;padding:0 24px;">
    <div style="text-align:center;margin-bottom:48px;">
      <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:12px;">Flexible Plans</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3vw,2.4rem);color:#1a1a2e;">Contract Options</h2>
      <p style="color:#5a6080;max-width:500px;margin:12px auto 0;">Choose the contract duration that fits your financial goals. Shorter contracts mean a higher savings share to you.</p>
    </div>
    <div class="esco-options">
      <?php foreach([
        ['3 Years','35 to 50%','Per Year to Customer','Best for quick ownership. Highest immediate savings share. Ideal for facilities with strong balance sheet.', false],
        ['7 Years','25 to 35%','Per Year to Customer','Most popular choice. Balanced savings and contract length. Optimal for most industrial facilities.', true],
        ['5 Years','15 to 25%','Per Year to Customer','Longest term, lowest monthly obligation. Best for facilities wanting maximum cash flow flexibility.', false],
      ] as $o): ?>
      <div class="esco-option <?= $o[4] ? 'featured' : '' ?>">
        <div style="font-family:'Playfair Display',serif;font-size:2.2rem;font-weight:700;color:<?= $o[4] ? '#e8650a' : '#1a2a5e' ?>;margin-bottom:4px;"><?= $o[0] ?></div>
        <div style="font-size:0.75rem;font-weight:600;color:<?= $o[4] ? 'rgba(255,255,255,0.5)' : '#5a6080' ?>;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:20px;">Contract Duration</div>
        <?php if($o[4]): ?>
        <div style="display:inline-block;background:#e8650a;color:#fff;font-size:0.72rem;font-weight:700;padding:4px 14px;border-radius:100px;margin-bottom:16px;">Most Popular</div>
        <?php endif; ?>
        <div style="font-family:'Playfair Display',serif;font-size:2.6rem;font-weight:700;color:#e8650a;line-height:1;"><?= $o[1] ?></div>
        <div style="font-size:0.8rem;color:<?= $o[4] ? 'rgba(255,255,255,0.5)' : '#5a6080' ?>;margin-bottom:20px;"><?= $o[2] ?></div>
        <p style="font-size:0.88rem;color:<?= $o[4] ? 'rgba(255,255,255,0.65)' : '#5a6080' ?>;line-height:1.65;margin-bottom:28px;"><?= $o[3] ?></p>
        <a href="/contact-us" style="display:block;background:#e8650a;color:#fff;font-weight:600;text-align:center;padding:13px;border-radius:12px;text-decoration:none;">Get a Quote →</a>
      </div>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center;font-size:0.82rem;color:#5a6080;margin-top:20px;">* Savings percentages are based on actual energy saved. All options include guaranteed savings contracts.</p>
  </div>
</section>

<!-- BENEFITS -->
<section style="background:#fff;padding:80px 0;">
  <div style="max-width:1100px;margin:0 auto;padding:0 24px;">
    <div style="text-align:center;margin-bottom:48px;">
      <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:12px;">Why Choose ESCO</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3vw,2.4rem);color:#1a1a2e;">Benefits to Your Business</h2>
    </div>
    <div class="esco-benefits">
      <?php foreach([
        ['<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8650a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>','Zero Upfront Capital','No capital expenditure required. ASPCV funds the entire project equipment, installation, and commissioning.'],
        ['<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8650a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>','Guaranteed Savings','Contractual energy savings guarantee. If targets aren\'t met, you pay less the risk is ours, not yours.'],
        ['<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8650a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>','Zero Maintenance Burden','ASPCV handles all O&M, repairs, and replacements throughout the contract so your team stays focused on production.'],
        ['<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8650a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>','Positive Cash Flow from Day 1','You start saving from day one. Monthly ESCO payments are always less than your energy savings net positive always.'],
        ['<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8650a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>','Fast Implementation','Turnkey delivery by ASPCV engineering team from audit to commissioning in 8 to 16 weeks with minimal downtime.'],
        ['<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8650a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>','Full Asset Ownership After','At contract end, the system is yours outright continue saving with zero obligations and a fully paid-off asset.'],
      ] as $b): ?>
      <div class="esco-benefit">
        <div style="width:44px;height:44px;min-width:44px;background:#fff4ee;border-radius:12px;display:flex;align-items:center;justify-content:center;"><?= $b[0] ?></div>
        <div>
          <h4 style="font-size:1rem;font-weight:700;color:#1a1a2e;margin-bottom:6px;"><?= $b[1] ?></h4>
          <p style="font-size:0.86rem;color:#5a6080;line-height:1.6;margin:0;"><?= $b[2] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FAQ -->
<section style="background:#f5f7ff;padding:80px 0;">
  <div style="max-width:820px;margin:0 auto;padding:0 24px;">
    <div style="text-align:center;margin-bottom:48px;">
      <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:12px;">Common Questions</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3vw,2.4rem);color:#1a1a2e;">Frequently Asked Questions</h2>
    </div>
    <div class="esco-faq">
      <?php foreach([
        ['Who owns the equipment during the ESCO contract?','ASPCV owns the equipment during the contract period and is responsible for all maintenance and performance. At the end of the contract, full ownership transfers to you at no additional cost.'],
        ['What if the system saves more than expected?','If actual savings exceed the projected baseline, you benefit from the additional savings the ESCO payment remains fixed to the agreed deemed savings value.'],
        ['What technologies are available under ESCO?','Heat Pumps (60°C to 120°C), Solar Thermal Systems, Waste Heat Recovery Systems, ORC Power Generation, Heat Pump Dryers, and Solar Dryers: all available under the ESCO model.'],
        ['How is the baseline energy consumption measured?','We conduct a detailed energy audit before project commencement to establish a baseline. Savings are calculated against this audited baseline, verified by an independent third party if required.'],
        ['Is there any penalty if ASPCV does not deliver promised savings?','Yes. The contract includes a savings guarantee clause. If savings fall short of targets, your ESCO payment is reduced proportionally. Our risk, not yours.'],
      ] as $faq): ?>
      <div class="esco-faq-item">
        <h4 style="font-size:0.97rem;font-weight:700;color:#1a1a2e;margin-bottom:10px;"><?= $faq[0] ?></h4>
        <p style="font-size:0.88rem;color:#5a6080;line-height:1.7;margin:0;"><?= $faq[1] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section style="background:linear-gradient(135deg,#0d1530 0%,#1a2a5e 100%);padding:80px 0;text-align:center;">
  <div style="max-width:680px;margin:0 auto;padding:0 24px;">
    <h2 style="font-family:'Playfair Display',serif;color:#fff;font-size:clamp(1.6rem,3vw,2.4rem);margin-bottom:16px;">Ready to Start Saving with Zero Investment?</h2>
    <p style="color:rgba(255,255,255,0.65);margin-bottom:36px;font-size:1rem;">Our team will audit your plant, design the system, and present a savings projection completely free of charge.</p>
    <div style="display:flex;gap:16px;flex-wrap:wrap;justify-content:center;">
      <a href="/contact-us" style="display:inline-flex;align-items:center;background:#e8650a;color:#fff;font-weight:600;padding:14px 32px;border-radius:100px;text-decoration:none;box-shadow:0 4px 20px rgba(232,101,10,0.4);">Get Free Energy Audit →</a>
      <a href="/technologies" style="display:inline-flex;align-items:center;background:transparent;color:rgba(255,255,255,0.8);padding:14px 24px;border-radius:100px;border:1px solid rgba(255,255,255,0.25);text-decoration:none;font-size:0.9rem;">View Technologies</a>
    </div>
  </div>
</section>

<style>
@media(max-width:768px){
  .esco-hero-grid,.esco-what-grid{display:block!important;}
  .esco-hero-grid > div:last-child,.esco-what-grid > div:last-child{margin-top:32px;}
  .aspcv-page-title [style*="Powered By"],
  div[style*="right:40px;bottom:24px"]{position:static!important;align-items:flex-start!important;margin-top:20px!important;}
}
</style>

<?php get_footer(); ?>
