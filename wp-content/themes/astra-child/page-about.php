<?php
/**
 * Template Name: ASPCV About
 */
get_header();
?>
<div class="aspcv-page-title">
  <div style="max-width:1200px;margin:0 auto;padding:0 40px;">
    <h1>About Us</h1>
    <div class="aspcv-breadcrumb"><a href="/">Home</a> → About Us</div>
  </div>
</div>

<!-- VISION SECTION -->
<section style="background:#f5f7ff;padding:100px 0;">
  <div style="max-width:1000px;margin:0 auto;padding:0 40px;">
    <div style="text-align:center;margin-bottom:48px;">
      <span style="font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;display:block;margin-bottom:12px;">Our Core Mission</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,3.5vw,2.8rem);color:#1a1a1a;margin-bottom:0;">Vision For The Future</h2>
    </div>
    <div style="background:#fff;padding:48px 56px;border-radius:20px;box-shadow:0 15px 40px rgba(0,0,0,0.06);border-top:4px solid #2b4ba0;position:relative;">
      <div style="position:absolute;top:28px;left:32px;font-size:4rem;color:rgba(45,106,79,0.08);font-family:serif;line-height:1;">"</div>
      <p style="color:#444;line-height:1.9;font-size:1.1rem;margin-bottom:24px;position:relative;">
        Aspiration Cleantech Ventures is dedicated to pioneering innovative clean technologies that address the pressing environmental challenges of our time. <strong>Our mission goes beyond merely reducing carbon emissions;</strong> we aim to create transformative, scalable solutions that empower industries to operate more sustainably, efficiently, and responsibly.
      </p>
      <p style="color:#555;line-height:1.85;font-size:1rem;margin-bottom:24px;">
        By integrating advanced technologies with a commitment to environmental stewardship, we strive to redefine the role of industries in combating climate change, reducing resource consumption, and fostering a greener, more resilient future for generations to come. We help industries transition with green energy solutions our expertise lies in converting unutilized spaces and addressing complex applications, effectively eliminating reliance on expensive and dirty fossil fuels.
      </p>
      <div style="background:#f9fafb;border-left:4px solid #e8650a;border-radius:0 10px 10px 0;padding:20px 24px;margin-bottom:24px;">
        <p style="color:#444;font-weight:500;margin:0;">Our offerings include <strong style="color:#e8650a;">Heat Pumps, High-Temperature Heat Pumps (up to 120°C)</strong>, Solar Dryers, Solar Thermal Systems, Heat Pump Dryers, Waste Heat Recovery Systems, Hydrogen Generators, Waste-to-Methanol Systems, and ORC Systems.</p>
      </div>
      <p style="color:#666;line-height:1.8;font-size:0.95rem;font-style:italic;margin:0;">
        Aspiration Cleantech Ventures was founded by the co-founders of Aspire Systems an ISO 9001:2008 certified software services company with 5000+ employees. Our journey is supported and seed-funded by the RE:Search program, a collaborative initiative by IIM Ahmedabad's CIIE and the Ministry of New and Renewable Energy (MNRE).
      </p>
    </div>
  </div>
</section>

<!-- TIMELINE -->
<section style="background:#eef0f8;padding:100px 0;overflow:hidden;">
  <div style="max-width:1200px;margin:0 auto;padding:0 40px;text-align:center;margin-bottom:56px;">
    <span style="font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;display:block;margin-bottom:12px;">Our Journey</span>
    <h2 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,3.5vw,2.8rem);color:#1a1a1a;">Company Milestones</h2>
  </div>
  <div style="max-width:1200px;margin:0 auto;padding:0 40px;position:relative;">
    <div style="position:absolute;top:36px;left:40px;right:40px;height:3px;background:linear-gradient(to right,#2b4ba0,#e8650a);opacity:0.3;border-radius:4px;"></div>
    <div style="display:grid;grid-template-columns:repeat(6,1fr);gap:20px;position:relative;">
      <?php
      $timeline = [
        ['2010','Establishment','Company established, launched renewable energy services.'],
        ['2015','R&D Phase','Dedicated research delivering innovative clean energy solutions.'],
        ['2017','Expansion','Expanded R&D capabilities and industrial partnerships.'],
        ['2019','90°C Heat Pump',"India's first 90°C heat pump delivered to leading automobile industry."],
        ['2021','120°C Heat Pump',"India's first 120°C heat pump a world-class industrial milestone."],
        ['2022','365 kW Install','Delivered 365 kW 120°C system to leading tyre manufacturer.'],
      ];
      foreach($timeline as $i => $t): $gold = ($i%2===0); ?>
      <div style="text-align:center;padding-top:70px;position:relative;">
        <div style="position:absolute;top:24px;left:50%;transform:translateX(-50%);width:24px;height:24px;background:<?= $gold?'#e8650a':'#2b4ba0' ?>;border-radius:50%;border:3px solid #eef0f8;box-shadow:0 0 0 3px <?= $gold?'rgba(232,101,10,0.3)':'rgba(45,106,79,0.3)' ?>;z-index:2;"></div>
        <div style="font-family:'Playfair Display',serif;font-size:1.5rem;font-weight:700;color:<?= $gold?'#e8650a':'#2b4ba0' ?>;margin-bottom:8px;"><?= $t[0] ?></div>
        <div style="font-weight:700;font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;color:#1a1a1a;margin-bottom:8px;"><?= $t[1] ?></div>
        <p style="font-size:0.82rem;color:#6b6560;line-height:1.5;margin:0;"><?= $t[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- LEADERSHIP TEAM -->
<section style="background:#f5f7ff;padding:100px 0;">
  <div style="max-width:1200px;margin:0 auto;padding:0 40px;">
    <div style="text-align:center;margin-bottom:60px;">
      <span style="font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;display:block;margin-bottom:12px;">The People</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,3.5vw,2.8rem);color:#1a1a1a;">Leadership Team</h2>
    </div>
    <?php
    $team = [
      ['Dr Bhoovarahan Thirumalai','CEO & Co-founder','/wp-content/uploads/2024/06/BHOOVARAHAN-THIRUMALAI.png','https://www.linkedin.com/in/smiler/','Bhoo defines the strategic direction for Aspiration Energy. Co-founder of Aspire Systems, MBA from Kellogg School of Management, Northwestern University.'],
      ['Mr Logesh Nagalingam','Director','/wp-content/uploads/2026/03/WhatsApp-Image-2026-03-27-at-4.18.24-PM-683x1024.jpeg','https://www.linkedin.com/in/logesh-n-867948133/','Leads integration of state-of-the-art clean technologies. MBA from University of Madras, BTech in Electrical & Electronics Engineering.'],
      ['Dr Madhavan Nampoothiri','Mentor','/wp-content/uploads/2024/06/IMG_9851edited-1.jpg','http://linkedin.com/in/madhavan-nampoothiri-95564a2','Decade of experience in Energy industry. MBA from Kelley School of Business, Indiana University. Expert on Indian solar sector.'],
      ['Mr Kannan Narayanaswamy','Mentor','/wp-content/uploads/2024/12/Kannan.png','https://www.linkedin.com/in/kannan-narayanaswamy-1759b51/','Mentor & coach for tech entrepreneurs. Visiting Professor at IIM Ahmedabad on VC & Private Equity.'],
      ['Mr Narasimhan Santhanam','Mentor','/wp-content/uploads/2024/12/Narasimhan-Santhanam.png','https://www.linkedin.com/in/narasimhan-santhanam/','Renewable energy professional, Co-Founder of EAI. B.Tech IIT Madras, MBA IIM Calcutta.'],
    ];
    ?>
    <!-- Top 3 -->
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:28px;">
      <?php foreach(array_slice($team,0,3) as $m): ?>
      <div style="background:#fff;border:1px solid #dde2f0;border-radius:20px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.05);transition:all 0.3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 20px 50px rgba(0,0,0,0.12)'" onmouseout="this.style.transform='';this.style.boxShadow='0 4px 20px rgba(0,0,0,0.05)'">
        <div style="height:280px;overflow:hidden;">
          <img src="<?= $m[2] ?>" alt="<?= esc_attr($m[0]) ?>" style="width:100%;height:100%;object-fit:cover;object-position:top;border-radius:0;" />
        </div>
        <div style="padding:24px 28px;">
          <div style="font-size:0.72rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:#e8650a;margin-bottom:6px;"><?= $m[1] ?></div>
          <h3 style="font-family:'Playfair Display',serif;font-size:1.15rem;color:#1a1a1a;margin-bottom:10px;"><?= $m[0] ?></h3>
          <p style="font-size:0.84rem;color:#6b6560;line-height:1.6;margin-bottom:16px;"><?= $m[4] ?></p>
          <a href="<?= $m[3] ?>" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:6px;color:#2b4ba0;font-size:0.82rem;font-weight:600;text-decoration:none;">LinkedIn Profile →</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <!-- Bottom 2 centered -->
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:28px;max-width:800px;margin:0 auto;">
      <?php foreach(array_slice($team,3,2) as $m): ?>
      <div style="background:#fff;border:1px solid #dde2f0;border-radius:20px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.05);transition:all 0.3s;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 20px 50px rgba(0,0,0,0.12)'" onmouseout="this.style.transform='';this.style.boxShadow='0 4px 20px rgba(0,0,0,0.05)'">
        <div style="height:260px;overflow:hidden;">
          <img src="<?= $m[2] ?>" alt="<?= esc_attr($m[0]) ?>" style="width:100%;height:100%;object-fit:cover;object-position:top;border-radius:0;" />
        </div>
        <div style="padding:24px 28px;">
          <div style="font-size:0.72rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:#e8650a;margin-bottom:6px;"><?= $m[1] ?></div>
          <h3 style="font-family:'Playfair Display',serif;font-size:1.15rem;color:#1a1a1a;margin-bottom:10px;"><?= $m[0] ?></h3>
          <p style="font-size:0.84rem;color:#6b6560;line-height:1.6;margin-bottom:16px;"><?= $m[4] ?></p>
          <a href="<?= $m[3] ?>" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:6px;color:#2b4ba0;font-size:0.82rem;font-weight:600;text-decoration:none;">LinkedIn Profile →</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FOUNDED BY / BACKED BY -->
<section style="background:#0d1530;padding:80px 0;">
  <div style="max-width:1200px;margin:0 auto;padding:0 40px;text-align:center;">
    <span style="font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;display:block;margin-bottom:16px;">Backed By</span>
    <h2 style="font-family:'Playfair Display',serif;font-size:1.8rem;color:#fff;margin-bottom:40px;">Built on a Foundation of Excellence</h2>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;max-width:900px;margin:0 auto;">
      <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(232,101,10,0.2);border-radius:16px;padding:28px 24px;">
        <div style="font-size:1.8rem;margin-bottom:12px;">🏛️</div>
        <div style="color:#f07c2a;font-weight:700;margin-bottom:6px;">IIM Ahmedabad</div>
        <div style="color:rgba(255,255,255,0.55);font-size:0.85rem;">Seed-funded via CIIE RE:Search Program</div>
      </div>
      <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(232,101,10,0.2);border-radius:16px;padding:28px 24px;">
        <div style="font-size:1.8rem;margin-bottom:12px;">⚡</div>
        <div style="color:#f07c2a;font-weight:700;margin-bottom:6px;">MNRE</div>
        <div style="color:rgba(255,255,255,0.55);font-size:0.85rem;">Ministry of New and Renewable Energy</div>
      </div>
      <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(232,101,10,0.2);border-radius:16px;padding:28px 24px;">
        <div style="font-size:1.8rem;margin-bottom:12px;">💻</div>
        <div style="color:#f07c2a;font-weight:700;margin-bottom:6px;">Aspire Systems</div>
        <div style="color:rgba(255,255,255,0.55);font-size:0.85rem;">ISO 9001:2008 5000+ employee tech company</div>
      </div>
    </div>
    <div style="margin-top:48px;">
      <a href="/contact-us" style="display:inline-flex;align-items:center;background:#e8650a;color:#fff;font-weight:600;padding:14px 36px;border-radius:100px;text-decoration:none;box-shadow:0 4px 20px rgba(232,101,10,0.4);">Work With Us →</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
