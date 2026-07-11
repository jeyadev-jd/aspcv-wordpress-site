<?php
/**
 * Template Name: ASPCV Tech Detail
 */
get_header();

$slug = get_post_field('post_name', get_post());

$techs = [
  'heat-pumps' => [
    'title' => 'High-Temperature Heat Pumps',
    'subtitle' => '60°C  to  120°C Industrial Process Heating',
    'tag' => "India's First CII-Validated",
    'img' => '/wp-content/uploads/2024/06/RE-ORAGADAM-13-scaled-1.jpg',
    'desc' => "ASPCV's industrial heat pumps deliver reliable high-temperature process heating up to 120°C for demanding industrial applications. Designed to replace conventional fossil-fuel-based boilers, these systems significantly reduce energy consumption, operating costs, and carbon emissions. By upgrading low-grade heat into usable thermal energy, they improve overall plant efficiency while ensuring stable and consistent performance.",
    'desc2' => "India's first 90°C and 120°C industrial heat pump validated by CII. Cascaded heat pump design with advanced LT and HT circuits, providing free cooling capability (air or water) with COP of 2.2 to 3.6.",
    'specs' => ['Capacity: 10 kW  to  1 MW+','Outlet Temp: 60°C  to  120°C','COP: 3.5  to  5.5','Refrigerant: R134a / R245fa','Working Hours: 24/7','Payback: ~1 year'],
    'features' => ['Operating temperature range: 60°C to 120°C','High energy efficiency COP 3.5 to 5.5','Integration with existing steam and heating systems','Automated control and monitoring capability','Designed for industrial-scale deployment','Free cooling mode available'],
    'benefits' => ['Reduced fossil fuel consumption','Lower operating costs by 40 to 60%','Zero direct carbon emissions','Payback period of approximately 1 year','Scalable from 10 kW to megawatt range','24/7 continuous operation capability'],
    'industries' => [
      'Automotive' => ['Paint drying and curing','Component preheating','Battery thermal management','Water heating for surface treatment'],
      'Pharmaceutical' => ['Process heating and drying','Clean steam generation','Sterilization and CIP water heating'],
      'Chemical' => ['Reactor temperature control','Distillation and evaporation','Steam generation'],
      'Food & Dairy' => ['Pasteurization','Fermentation temperature control','Steam generation for processing'],
      'Textile' => ['Dyeing process heating','Water heating for washing and bleaching'],
      'Rubber & Plastics' => ['Injection molding heating','Vulcanization heating','Thermoforming'],
    ],
  ],
  'heat-pump' => 'heat-pumps', // alias
  'solar-thermal-system' => [
    'title' => 'Solar Thermal Systems',
    'subtitle' => 'Industry-Scale Process Heat up to 150°C',
    'tag' => '3,000+ kW Installed Pan India',
    'img' => '/wp-content/uploads/2024/06/low-angle-solar-pannels-arrangement-scaled-1.jpg',
    'desc' => 'ASPCV deploys industrial-scale solar thermal systems that deliver clean process heat up to 150°C for a wide range of industrial applications. Using flat plate, evacuated tube, and parabolic trough collectors, our systems serve diverse sectors across India reducing energy bills while eliminating fossil fuel dependency.',
    'desc2' => 'With over 3,000 kW of capacity installed across India, our solar thermal systems are field-proven and designed for reliability in Indian climate conditions. Grid-connected or standalone configurations available.',
    'specs' => ['Heat Output: up to 150°C','Collector Types: FPC, ETC, Parabolic Trough','Capacity: 50 kW  to  5 MW+','Applications: Food, Pharma, Textile','Installed Base: 3,000+ kW','Coverage: Pan India'],
    'features' => ['Multiple collector types for different temperature ranges','Grid-connected and standalone configurations','Integration with existing boiler systems','Remote monitoring and SCADA','Turnkey EPC delivery','Designed for Indian climate conditions'],
    'benefits' => ['Zero fuel cost for solar hours','40 to 70% reduction in boiler fuel bills','Carbon credit eligibility','Payback period of 3 to 5 years','Minimal maintenance requirements','Long system life of 20+ years'],
    'industries' => [
      'Food & Dairy' => ['Pasteurization','Cooking and sterilization','CIP water heating'],
      'Pharmaceutical' => ['Process steam generation','Distilled water heating','Sterilization support'],
      'Textile' => ['Dyeing and bleaching water heating','Drying support'],
      'Chemical' => ['Process heat for reactions','Evaporation support'],
      'Hospitality' => ['Hot water for hotels and institutions','Swimming pool heating'],
    ],
  ],
  'waste-heat-recovery-system' => [
    'title' => 'Waste Heat Recovery Systems',
    'subtitle' => 'Capture Industrial Exhaust Heat Zero Fuel Cost',
    'tag' => 'Zero-Cost Energy Recovery',
    'img' => '/wp-content/uploads/2024/06/aerial-shot-two-power-plant-sunset-vilnius-1-scaled-1.jpg',
    'desc' => 'Industrial processes waste enormous amounts of heat through flue gases, exhaust streams, hot effluents, and cooling water. ASPCV\'s Waste Heat Recovery Systems capture this otherwise wasted energy and convert it into useful process heat, hot water, or electricity delivering significant savings with rapid payback.',
    'desc2' => 'Heat sources from 80°C to 400°C can be recovered. Custom-engineered for each application with payback periods of 18 to 36 months and zero ongoing fuel cost.',
    'specs' => ['Heat Source Temp: 80°C  to  400°C','Output: Process heat / Hot water / Power','Payback: 18 to 36 months','Applications: All industries','Custom engineered','Integration: Any boiler or furnace'],
    'features' => ['Heat exchangers for flue gas and exhaust recovery','Hot water and process heat output','Integration with ORC for power generation','Custom engineering for each heat source','Remote monitoring capability','Modular and scalable design'],
    'benefits' => ['Zero additional fuel cost','Immediate ROI from day one','18 to 36 month payback','Reduces cooling water load','Lower overall plant emissions','Qualifies for carbon credits'],
    'industries' => [
      'Steel & Metal' => ['Furnace flue gas recovery','Cooling water heat recovery'],
      'Glass' => ['Furnace exhaust heat recovery','Process heat for forming'],
      'Cement' => ['Kiln exhaust recovery','Power generation via ORC'],
      'Chemical' => ['Reactor exhaust recovery','Distillation condenser heat'],
      'Paper & Pulp' => ['Dryer section exhaust recovery','Black liquor heat recovery'],
    ],
  ],
  'organic-rankine-cycle-orc' => [
    'title' => 'Organic Rankine Cycle (ORC)',
    'subtitle' => 'Generate Clean Electricity from Waste Heat',
    'tag' => 'Power from Waste Heat',
    'img' => '/wp-content/uploads/2024/06/ORC-IMAGE.jpg',
    'desc' => 'The Organic Rankine Cycle (ORC) is a thermodynamic process that converts low- and medium-grade industrial waste heat (80°C to 300°C) into clean electricity. Unlike conventional steam turbines, ORC systems use organic working fluids with low boiling points, making them ideal for heat sources that would otherwise be too low-grade to exploit.',
    'desc2' => 'ASPCV engineers and deploys ORC systems for cement, glass, steel, chemical, and paper industries turning unavoidable process losses into a revenue-generating power source with no additional fuel input.',
    'specs' => ['Input Temp: 80°C  to  300°C','Power Output: 10 kW  to  500 kW','Electrical Efficiency: 8 to 20%','Working Fluid: R245fa / Toluene','Fuel Input: Zero','Payback: 2 to 4 years'],
    'features' => ['Utilizes low- and medium-temperature heat sources','Closed-loop thermodynamic cycle','Continuous and stable power generation','Integration with existing process heat systems','Automated control and monitoring','Grid-connected or off-grid operation'],
    'benefits' => ['Converts waste heat into valuable electricity','Reduces grid power dependency','Improves total plant energy efficiency','Enhances sustainability performance','Supports decarbonization initiatives','No additional fuel required'],
    'industries' => [
      'Chemical' => ['Power from reactor and distillation waste heat','Recovery of exhaust thermal energy'],
      'Paper & Pulp' => ['Electricity from dryer section waste heat','Recovery from steam condensate'],
      'Food & Dairy' => ['Power from pasteurization exhaust','Cooling system heat recovery'],
      'Steel & Metal' => ['Furnace waste heat to power','Cooling water heat recovery'],
      'Cement' => ['Kiln exhaust power generation','Clinker cooler heat recovery'],
    ],
  ],
  'heat-pump-dryer' => [
    'title' => 'Heat Pump Dryers',
    'subtitle' => 'Energy-Efficient Industrial Drying at 40°C to 75°C',
    'tag' => 'Energy Saving: 50 to 70%',
    'img' => '/wp-content/uploads/2024/07/Heat-pump-dryer.1-scaled-1.jpg',
    'desc' => 'Heat Pump Dryers replace conventional hot-air dryers with an energy-efficient heat pump-based system. Operating at lower temperatures (40°C to 75°C), they preserve product quality preventing heat damage to sensitive materials while consuming 50 to 70% less energy than electric resistance or gas-fired dryers.',
    'desc2' => 'Ideal for food, pharma, textile, and wood processing industries where product quality and energy cost are both critical. Custom capacities available.',
    'specs' => ['Drying Temp: 40°C  to  75°C','Energy Saving: 50 to 70%','Industries: Food, Pharma, Wood, Textile','Humidity Control: Precise','Capacity: Custom','Operation: Continuous or batch'],
    'features' => ['Heat pump-based closed-loop drying circuit','Precise temperature and humidity control','Gentle drying preserves product quality','50 to 70% less energy than conventional dryers','Custom chamber sizes and capacities','Integration with existing production lines'],
    'benefits' => ['Drastically lower electricity bills','Better product quality no overheating','Shorter drying cycles','Reduced carbon footprint','Payback period of 1 to 3 years','Works with wide range of materials'],
    'industries' => [
      'Food & Dairy' => ['Fruit and vegetable dehydration','Spice drying','Fish and meat drying','Dairy product drying'],
      'Pharmaceutical' => ['API and excipient drying','Granule and tablet drying','Temperature-sensitive compound processing'],
      'Textile' => ['Fabric and yarn moisture reduction','Finishing process drying'],
      'Wood Processing' => ['Timber and plywood moisture conditioning','Lumber pre-drying before kiln'],
    ],
  ],
  'solar-dryer' => [
    'title' => 'Solar Dryers',
    'subtitle' => 'Zero-Cost Drying Using Solar Energy',
    'tag' => 'Fuel Cost: Zero',
    'img' => '/wp-content/uploads/2024/12/Solar-dryer-1.4-scaled-1.jpg',
    'desc' => 'ASPCV\'s Solar Dryers are solar-powered drying systems for agricultural and industrial use. Available in direct, indirect, and hybrid configurations, they eliminate fuel cost entirely for low-temperature drying applications (35°C to 70°C). Suitable for food processing, agriculture, and light industrial drying needs.',
    'desc2' => 'Hybrid solar + heat pump option available for cloudy days and night operation, ensuring continuous drying regardless of weather. Modular design allows scaling from small farm use to industrial capacity.',
    'specs' => ['Drying Temp: 35°C  to  70°C','Fuel Cost: Zero (solar)','Configurations: Direct, Indirect, Hybrid','Capacity: 100 kg  to  10 tonnes/batch','Hybrid Option: Solar + Heat Pump','Application: Agri, Food, Wood'],
    'features' => ['Solar thermal-based drying chambers','Controlled airflow and temperature regulation','Uniform moisture removal','Reduced dependency on fossil fuels','Modular and scalable system design','Hybrid solar+heat pump option for 24/7 operation'],
    'benefits' => ['Zero fuel cost for solar hours','Lower energy consumption and bills','Improved product consistency and quality','Environmentally sustainable drying process','Support for carbon reduction initiatives','Long system life of 15+ years'],
    'industries' => [
      'Food & Agriculture' => ['Drying fruits, vegetables, and spices','Post-harvest moisture control','Grain and seed drying'],
      'Wood Processing' => ['Pre-drying of timber','Moisture conditioning for kiln'],
      'Textile' => ['Fabric pre-drying','Sustainable drying support'],
      'Biomass' => ['Biomass moisture reduction','Fuel pellet preparation'],
    ],
  ],
];

// Resolve alias
$data = $techs[$slug] ?? null;
if (is_string($data)) $data = $techs[$data] ?? null;

if (!$data):
  // Fallback to page content
  get_template_part('page');
  get_footer();
  return;
endif;
?>
<style>
.td-hero{background:linear-gradient(135deg,#0d1530 0%,#1a2a5e 100%);padding:80px 0 60px;position:relative;overflow:hidden;}
.td-hero::before{content:'';position:absolute;inset:0;background-image:url('<?= $data['img'] ?>');background-size:cover;background-position:center;opacity:0.12;}
.td-hero::after{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(13,21,48,0.92) 0%,rgba(26,42,94,0.7) 100%);}
.td-hero-inner{position:relative;z-index:2;max-width:1200px;margin:0 auto;padding:0 24px;}
.td-wrap{max-width:1200px;margin:0 auto;padding:0 24px;}
.td-grid{display:grid;grid-template-columns:2fr 1fr;gap:60px;align-items:start;}
.td-specs-card{background:#fff;border:1px solid #dde2f0;border-radius:20px;padding:32px;position:sticky;top:90px;box-shadow:0 4px 24px rgba(26,42,94,0.08);}
.td-feature-list{list-style:none;padding:0;margin:0;}
.td-feature-list li{display:flex;gap:12px;align-items:flex-start;padding:10px 0;border-bottom:1px solid #eef0f8;font-size:0.92rem;color:#3a3a5a;}
.td-feature-list li:last-child{border-bottom:none;}
.td-feature-list li::before{content:'';display:block;width:8px;height:8px;min-width:8px;background:#e8650a;border-radius:50%;margin-top:7px;}
.td-industry-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;}
.td-industry-card{background:#fff;border:1px solid #dde2f0;border-radius:14px;padding:20px;}
.td-industry-card h4{font-size:0.92rem;font-weight:700;color:#1a2a5e;margin-bottom:10px;}
.td-industry-card ul{list-style:none;padding:0;margin:0;}
.td-industry-card ul li{font-size:0.82rem;color:#5a6080;padding:3px 0;padding-left:12px;position:relative;}
.td-industry-card ul li::before{content:'▸';position:absolute;left:0;color:#e8650a;}
.td-cta{background:linear-gradient(135deg,#1a2a5e 0%,#0d1530 100%);padding:72px 0;text-align:center;}
@media(max-width:900px){
  .td-grid{grid-template-columns:1fr;gap:32px;}
  .td-specs-card{position:static;}
  .td-industry-grid{grid-template-columns:1fr 1fr;}
}
@media(max-width:600px){
  .td-hero{padding:60px 0 40px;}
  .td-industry-grid{grid-template-columns:1fr 1fr;}
  .td-wrap{padding:0 16px;}
  section{padding:48px 0!important;}
}
</style>

<!-- HERO -->
<div class="td-hero">
  <div class="td-hero-inner">
    <span style="display:inline-block;font-size:0.7rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;border:1px solid rgba(232,101,10,0.4);padding:5px 16px;border-radius:100px;margin-bottom:20px;"><?= esc_html($data['tag']) ?></span>
    <h1 style="font-family:'Playfair Display',serif;font-size:clamp(1.8rem,3.5vw,3rem);color:#fff;margin-bottom:12px;"><?= esc_html($data['title']) ?></h1>
    <p style="color:rgba(255,255,255,0.65);font-size:1.05rem;max-width:600px;"><?= esc_html($data['subtitle']) ?></p>
    <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:28px;">
      <a href="/contact-us" style="display:inline-flex;align-items:center;background:#e8650a;color:#fff;font-weight:600;padding:12px 28px;border-radius:100px;text-decoration:none;">Get Free Consultation →</a>
      <a href="/technologies" style="display:inline-flex;align-items:center;background:transparent;color:rgba(255,255,255,0.8);padding:12px 24px;border-radius:100px;border:1px solid rgba(255,255,255,0.25);text-decoration:none;font-size:0.9rem;">← All Technologies</a>
    </div>
  </div>
</div>

<!-- MAIN CONTENT -->
<section style="background:#f5f7ff;padding:72px 0;">
  <div class="td-wrap">
    <div class="td-grid">
      <div>
        <!-- Description -->
        <p style="font-size:1.05rem;color:#3a3a5a;line-height:1.8;margin-bottom:20px;"><?= esc_html($data['desc']) ?></p>
        <p style="font-size:1rem;color:#5a6080;line-height:1.75;margin-bottom:40px;"><?= esc_html($data['desc2']) ?></p>

        <!-- Image -->
        <div style="border-radius:20px;overflow:hidden;margin-bottom:48px;box-shadow:0 8px 40px rgba(26,42,94,0.12);">
          <img src="<?= $data['img'] ?>" alt="<?= esc_attr($data['title']) ?>" style="width:100%;height:380px;object-fit:cover;display:block;" />
        </div>

        <!-- Key Features -->
        <div style="margin-bottom:48px;">
          <h3 style="font-family:'Playfair Display',serif;font-size:1.5rem;color:#1a1a2e;margin-bottom:20px;">Key Technical Features</h3>
          <ul class="td-feature-list">
            <?php foreach($data['features'] as $f): ?>
            <li><?= esc_html($f) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Operational Benefits -->
        <div>
          <h3 style="font-family:'Playfair Display',serif;font-size:1.5rem;color:#1a1a2e;margin-bottom:20px;">Operational Benefits</h3>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
            <?php foreach($data['benefits'] as $b): ?>
            <div style="background:#fff;border:1px solid #dde2f0;border-radius:12px;padding:16px 18px;display:flex;gap:10px;align-items:flex-start;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e8650a" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="min-width:16px;margin-top:3px;"><polyline points="20 6 9 17 4 12"/></svg>
              <span style="font-size:0.88rem;color:#3a3a5a;line-height:1.5;"><?= esc_html($b) ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Specs Sidebar -->
      <div>
        <div class="td-specs-card">
          <h3 style="font-family:'Playfair Display',serif;font-size:1.2rem;color:#1a1a2e;margin-bottom:20px;padding-bottom:16px;border-bottom:2px solid #e8650a;">Technical Specifications</h3>
          <?php foreach($data['specs'] as $s): 
            [$label,$value] = explode(':',$s,2);
          ?>
          <div style="display:flex;justify-content:space-between;padding:12px 0;border-bottom:1px solid #eef0f8;gap:8px;">
            <span style="font-size:0.82rem;color:#5a6080;font-weight:500;"><?= esc_html(trim($label)) ?></span>
            <span style="font-size:0.88rem;color:#1a2a5e;font-weight:600;text-align:right;"><?= esc_html(trim($value)) ?></span>
          </div>
          <?php endforeach; ?>
          <a href="/contact-us" style="display:block;background:#e8650a;color:#fff;font-weight:600;text-align:center;padding:14px;border-radius:12px;text-decoration:none;margin-top:24px;">Request a Quote →</a>
          <a href="/esco" style="display:block;background:#eef0f8;color:#1a2a5e;font-weight:600;text-align:center;padding:12px;border-radius:12px;text-decoration:none;margin-top:10px;font-size:0.88rem;">Learn about ESCO Financing</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- INDUSTRY APPLICATIONS -->
<section style="background:#fff;padding:72px 0;">
  <div class="td-wrap">
    <div style="text-align:center;margin-bottom:48px;">
      <span style="display:block;font-size:0.72rem;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#e8650a;margin-bottom:12px;">Where We Deploy</span>
      <h2 style="font-family:'Playfair Display',serif;font-size:clamp(1.6rem,2.5vw,2.4rem);color:#1a1a2e;">Industry Applications</h2>
    </div>
    <div class="td-industry-grid">
      <?php foreach($data['industries'] as $industry => $apps): ?>
      <div class="td-industry-card">
        <h4><?= esc_html($industry) ?></h4>
        <ul>
          <?php foreach($apps as $app): ?>
          <li><?= esc_html($app) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<div class="td-cta">
  <div style="max-width:680px;margin:0 auto;padding:0 24px;">
    <h2 style="font-family:'Playfair Display',serif;color:#fff;font-size:clamp(1.5rem,2.5vw,2.2rem);margin-bottom:16px;">Ready to Implement <?= esc_html($data['title']) ?>?</h2>
    <p style="color:rgba(255,255,255,0.65);margin-bottom:36px;">Our engineers will audit your plant and design a custom system free of charge. No obligation.</p>
    <div style="display:flex;gap:16px;flex-wrap:wrap;justify-content:center;">
      <a href="/contact-us" style="display:inline-flex;align-items:center;background:#e8650a;color:#fff;font-weight:600;padding:14px 32px;border-radius:100px;text-decoration:none;box-shadow:0 4px 20px rgba(232,101,10,0.4);">Get Free Energy Audit →</a>
      <a href="/technologies" style="display:inline-flex;align-items:center;background:transparent;color:rgba(255,255,255,0.8);padding:14px 24px;border-radius:100px;border:1px solid rgba(255,255,255,0.25);text-decoration:none;font-size:0.9rem;">View All Technologies</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
