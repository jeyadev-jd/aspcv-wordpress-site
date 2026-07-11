<?php
/**
 * Template Name: ASPCV Technologies
 */
get_header();
?>
<style>
@media(max-width:768px){
  .tp-alt-row{display:flex!important;flex-direction:column!important;gap:28px!important;}
  div[style*='max-width:1200px']{padding-left:16px!important;padding-right:16px!important;}
  section[style*='padding:100px'],section[style*='padding:80px']{padding:52px 0!important;}
  div[style*='grid-template-columns:1fr 1fr;gap:10px']{grid-template-columns:1fr!important;}
  div[style*='grid-template-columns:1fr 1fr;gap:20px']{grid-template-columns:1fr!important;}
}
@media(max-width:480px){
  h3[style*='font-size:1.8rem']{font-size:1.35rem!important;}
}
</style>

<section style="background:#f5f7ff;padding:80px 0 100px;">
  <div style="max-width:1200px;margin:0 auto;padding:0 40px;">
    <div style="text-align:center;margin-bottom:64px;">
      <span style="font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;display:block;margin-bottom:12px;">Industrial Clean Energy</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(2rem,3.5vw,2.8rem);color:#1a1a1a;margin-bottom:14px;">Proven Technologies, Measurable Results</h2>
      <p style="color:#6b6560;font-size:1.05rem;max-width:560px;margin:0 auto;">Each system is engineered for Indian industrial conditions reducing energy costs by 40 to 60% while eliminating fossil fuel dependency.</p>
    </div>

    <?php
    $techs = [
      [
        'img' => '/wp-content/uploads/2024/06/RE-ORAGADAM-13-scaled-1.jpg',
        'title' => 'High-Temperature Heat Pumps (60°C  to  120°C)',
        'tag' => 'India\'s First CII-Validated',
        'desc' => 'Our flagship product India\'s first 90°C and 120°C industrial heat pump, validated by CII. Replaces boilers, thermic fluid heaters, and steam systems for process heating. Delivers up to 60% energy savings with zero direct emissions.',
        'specs' => ['Capacity: 10 kW  to  1 MW+', 'Temp: 60°C  to  120°C', 'COP: 3.5  to  5.5', 'Refrigerant: R134a / R245fa'],
        'link' => '/heat-pumps',
        'color' => '#2b4ba0',
      ],
      [
        'img' => '/wp-content/uploads/2024/06/low-angle-solar-pannels-arrangement-scaled-1.jpg',
        'title' => 'Solar Thermal Systems',
        'tag' => '3,000+ kW Installed',
        'desc' => 'Industry-scale solar thermal systems for process heat up to 150°C. Flat plate, evacuated tube, and parabolic trough collectors for diverse industrial applications. Grid-connected or standalone configurations.',
        'specs' => ['Applications: Food, Pharma, Textile', 'Temp: up to 150°C', '3,000+ kW deployed', 'Pan India installation'],
        'link' => '/solar-thermal-system',
        'color' => '#e8650a',
      ],
      [
        'img' => '/wp-content/uploads/2024/06/aerial-shot-two-power-plant-sunset-vilnius-1-scaled-1.jpg',
        'title' => 'Waste Heat Recovery Systems',
        'tag' => 'Zero-Cost Energy',
        'desc' => 'Capture and reuse industrial exhaust heat from furnaces, compressors, chillers, and generators. Convert otherwise wasted heat into process heat, hot water, or electricity. Typical payback: 18 to 36 months.',
        'specs' => ['Heat source: 80°C  to  400°C', 'Applications: All industries', 'ROI: 18 to 36 months', 'Custom engineered'],
        'link' => '/waste-heat-recovery-system',
        'color' => '#2b4ba0',
      ],
      [
        'img' => '/wp-content/uploads/2024/06/ORC-IMAGE.jpg',
        'title' => 'Organic Rankine Cycle (ORC)',
        'tag' => 'Power from Waste Heat',
        'desc' => 'Generate clean electricity from low-grade industrial waste heat (80°C  to  300°C). ORC technology converts thermal energy into power using organic working fluids with low boiling points. Ideal for cement, glass, steel, and chemical industries.',
        'specs' => ['Input: 80°C  to  300°C', 'Output: 10 kW  to  500 kW', 'Efficiency: 8 to 20%', 'Working fluid: R245fa / Toluene'],
        'link' => '/organic-rankine-cycle-orc',
        'color' => '#e8650a',
      ],
      [
        'img' => '/wp-content/uploads/2024/07/Heat-pump-dryer.1-scaled-1.jpg',
        'title' => 'Heat Pump Dryers',
        'tag' => 'Energy-Efficient Drying',
        'desc' => 'Replace conventional hot-air dryers with heat pump-based systems. Operates at lower temperatures (40°C  to  75°C) preserving product quality while consuming 50 to 70% less energy than electric resistance or gas dryers.',
        'specs' => ['Temp: 40°C  to  75°C', 'Energy saving: 50 to 70%', 'Industries: Food, Pharma, Wood', 'Capacity: custom'],
        'link' => '/heat-pump-dryer',
        'color' => '#2b4ba0',
      ],
      [
        'img' => '/wp-content/uploads/2024/12/Solar-dryer-1.4-scaled-1.jpg',
        'title' => 'Solar Dryers',
        'tag' => 'Zero Energy Drying',
        'desc' => 'Solar-powered drying systems for agricultural and industrial use. Indirect, direct, and hybrid configurations available. Eliminates fuel cost entirely for low-temperature drying applications (35°C  to  70°C).',
        'specs' => ['Temp: 35°C  to  70°C', 'Fuel cost: Zero', 'Applications: Agri, Food, Wood', 'Hybrid solar+heat pump option'],
        'link' => '/solar-dryer',
        'color' => '#e8650a',
      ],
    ];

    foreach($techs as $i => $t):
      $rev = ($i%2 !== 0);
    ?>
    <div class="tp-alt-row" style="display:grid;grid-template-columns:<?= $rev?'1fr 1.2fr':'1.2fr 1fr' ?>;gap:60px;align-items:center;margin-bottom:80px;<?= $i<count($techs)-1?'padding-bottom:80px;border-bottom:1px solid #dde2f0;':'' ?>">
      <?php if($rev): ?>
      <div>
        <span style="display:inline-block;font-size:0.68rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;color:<?= $t['color'] ?>;border:1px solid <?= $t['color'] ?>33;padding:5px 14px;border-radius:100px;margin-bottom:16px;"><?= $t['tag'] ?></span>
        <h3 style="font-family:'Playfair Display',serif;font-size:1.8rem;color:#1a1a1a;margin-bottom:16px;line-height:1.2;"><?= $t['title'] ?></h3>
        <p style="color:#6b6560;line-height:1.75;margin-bottom:28px;font-size:1rem;"><?= $t['desc'] ?></p>
        <div class="tp-alt-row" style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:28px;">
          <?php foreach($t['specs'] as $s): ?>
          <div style="background:#eef0f8;border-radius:8px;padding:10px 14px;font-size:0.82rem;color:#444;font-weight:500;">✓ <?= $s ?></div>
          <?php endforeach; ?>
        </div>
        <a href="<?= $t['link'] ?>" style="display:inline-flex;align-items:center;background:<?= $t['color'] ?>;color:#fff;font-weight:600;font-size:0.9rem;padding:13px 28px;border-radius:100px;text-decoration:none;">Learn More →</a>
      </div>
      <div style="border-radius:20px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.12);">
        <img src="<?= $t['img'] ?>" alt="<?= esc_attr($t['title']) ?>" style="width:100%;height:380px;object-fit:cover;display:block;border-radius:0;" />
      </div>
      <?php else: ?>
      <div style="border-radius:20px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.12);">
        <img src="<?= $t['img'] ?>" alt="<?= esc_attr($t['title']) ?>" style="width:100%;height:380px;object-fit:cover;display:block;border-radius:0;" />
      </div>
      <div>
        <span style="display:inline-block;font-size:0.68rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;color:<?= $t['color'] ?>;border:1px solid <?= $t['color'] ?>33;padding:5px 14px;border-radius:100px;margin-bottom:16px;"><?= $t['tag'] ?></span>
        <h3 style="font-family:'Playfair Display',serif;font-size:1.8rem;color:#1a1a1a;margin-bottom:16px;line-height:1.2;"><?= $t['title'] ?></h3>
        <p style="color:#6b6560;line-height:1.75;margin-bottom:28px;font-size:1rem;"><?= $t['desc'] ?></p>
        <div class="tp-alt-row" style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:28px;">
          <?php foreach($t['specs'] as $s): ?>
          <div style="background:#eef0f8;border-radius:8px;padding:10px 14px;font-size:0.82rem;color:#444;font-weight:500;">✓ <?= $s ?></div>
          <?php endforeach; ?>
        </div>
        <a href="<?= $t['link'] ?>" style="display:inline-flex;align-items:center;background:<?= $t['color'] ?>;color:#fff;font-weight:600;font-size:0.9rem;padding:13px 28px;border-radius:100px;text-decoration:none;">Learn More →</a>
      </div>
      <?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section style="background:linear-gradient(135deg,#0d1530 0%,#1a2a5e 100%);padding:80px 0;text-align:center;">
  <div style="max-width:700px;margin:0 auto;padding:0 40px;">
    <h2 style="font-family:'Playfair Display',serif;color:#fff;font-size:2.2rem;margin-bottom:16px;">Not sure which technology fits your plant?</h2>
    <p style="color:rgba(255,255,255,0.65);font-size:1rem;margin-bottom:36px;">Our engineers will audit your processes and recommend the right solution free of charge.</p>
    <a href="/contact-us" style="display:inline-flex;align-items:center;background:#e8650a;color:#fff;font-weight:600;padding:14px 36px;border-radius:100px;text-decoration:none;box-shadow:0 4px 20px rgba(232,101,10,0.4);">Request Free Energy Audit →</a>
  </div>
</section>

<?php get_footer(); ?>
