<?php
/**
 * TextileCharm — Official Haute Fashion & Artisanal Weave Portal
 * @package TextileCharm
 * @version 4.0.0
 */
declare(strict_types=1);

$siteTitle = "TextileCharm | Haute Fashion, Artisanal Weaves & Bespoke Tailoring";
$metaDescription = "Curated luxury textiles, organic cashmere overcoats, botanical indigo silks, and architectural tailoring crafted at 482 Broome Street, New York.";
$canonicalUrl = "https://textilecharm.com/";
$currentYear = (int)date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($siteTitle); ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDescription); ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($siteTitle); ?>">
  <meta property="og:description" content="<?= htmlspecialchars($metaDescription); ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="assets/images/hero_textile_atelier_loom.jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="favicon.ico">
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
</head>
<body>

<header class="site-header">
  <div class="reading-progress-bar"></div>
  <div class="container header-inner">
    <a href="index.php" class="site-logo">
      <div class="logo-symbol">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6h16"/><path d="M4 18h16"/><path d="M8 3v18"/><path d="M16 3v18"/><circle cx="12" cy="12" r="2"/></svg>
      </div>
      <span>TextileCharm</span>
    </a>
    <nav class="site-nav">
      <a href="index.php" class="nav-link active">Home</a>
      <a href="about.html" class="nav-link">Atelier & Weave</a>
      <a href="index.php#collections" class="nav-link">Capsule Cloths</a>
      <a href="blog.html" class="nav-link">Fashion Journal</a>
      <a href="contact.html" class="nav-link">Commissions</a>
    </nav>
    <div class="header-actions">
      <a href="contact.html" class="btn btn-primary btn-sm">Request Swatches</a>
      <button class="mobile-toggle" aria-label="Toggle Navigation Menu">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
    </div>
  </div>
</header>

<div class="drawer-backdrop"></div>
<div class="mobile-drawer">
  <div>
    <div class="mobile-drawer-header">
      <div class="site-logo">
        <div class="logo-symbol">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6h16"/><path d="M4 18h16"/><path d="M8 3v18"/><path d="M16 3v18"/><circle cx="12" cy="12" r="2"/></svg>
        </div>
        <span>TextileCharm</span>
      </div>
      <button class="mobile-drawer-close" aria-label="Close Navigation Menu">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div class="mobile-nav-links">
      <a href="index.php" class="nav-link active">Home</a>
      <a href="about.html" class="nav-link">Atelier & Weave</a>
      <a href="index.php#collections" class="nav-link">Capsule Cloths</a>
      <a href="blog.html" class="nav-link">Fashion Journal</a>
      <a href="contact.html" class="nav-link">Commissions</a>
      <hr style="border:none;border-top:1px solid #ded7c6;margin:0.75rem 0;">
      <a href="privacy-policy.html" class="nav-link" style="font-size:0.9rem;color:#64748b;">Privacy Policy</a>
      <a href="terms-and-conditions.html" class="nav-link" style="font-size:0.9rem;color:#64748b;">Terms of Service</a>
      <a href="disclaimer.html" class="nav-link" style="font-size:0.9rem;color:#64748b;">Fabric Disclaimer</a>
      <a href="cookie-policy.html" class="nav-link" style="font-size:0.9rem;color:#64748b;">Cookie Policy</a>
    </div>
  </div>
  <div style="padding-top:1.5rem;border-top:1px solid #ded7c6;">
    <a href="contact.html" class="btn btn-primary" style="width:100%;">Book Tailoring Consultation</a>
  </div>
</div>

<main>
  <!-- SECTION 1: HERO -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-grid">
        <div>
          <div class="section-kicker">Haute Textile Architecture</div>
          <h1 class="hero-title">Woven Elegance.<br><span class="text-highlight">Artisanal Fashion</span> Drapes.</h1>
          <p class="hero-desc">Bridging ancestral handloom heritage with avant-garde fashion silhouettes. From Mongolian raw cashmere to botanical indigo silks and Japanese selvedge weaves, we engineer textiles with timeless tactile poetry.</p>
          <div class="hero-actions">
            <a href="#collections" class="btn btn-primary btn-lg">Explore Capsule Cloths</a>
            <a href="#philosophy" class="btn btn-secondary btn-lg">The Weave Manifesto</a>
          </div>
          <div class="hero-stats">
            <div class="stat-item">
              <div class="stat-num">14.5<span>μm</span></div>
              <div class="stat-label">Ultra-Fine Cashmere Micron</div>
            </div>
            <div class="stat-item">
              <div class="stat-num">100<span>%</span></div>
              <div class="stat-label">Botanical & Non-Toxic Dyes</div>
            </div>
            <div class="stat-item">
              <div class="stat-num">60<span>Yrs</span></div>
              <div class="stat-label">Heritage Handloom Provenance</div>
            </div>
          </div>
        </div>
        <div>
          <div class="hero-image-wrapper">
            <img src="assets/images/hero_textile_atelier_loom.jpg" alt="Artisanal fashion designer styling draped wool textiles in atelier" width="600" height="530">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: THE WEAVE MANIFESTO / ATELIER HERITAGE -->
  <section class="section section-alt" id="philosophy">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Atelier Philosophy</div>
        <h2 class="section-title">The Philosophy of Slow Fiber & Structural Drape</h2>
        <p class="section-subtitle">In an era of synthetic fast fashion, TextileCharm revives the architectural dignity of natural plant and animal fibers, woven with generational patience.</p>
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:3.5rem;align-items:center;">
        <div>
          <img src="assets/images/raw_silk_fabric_folds.jpg" alt="Undulating ripples of natural raw woven silk" style="border-radius:var(--radius-xl);box-shadow:var(--shadow-lg);" width="560" height="420">
        </div>
        <div>
          <h3 style="margin-bottom:1rem;color:var(--color-indigo-900);">Honoring the Natural Integrity of the Spun Thread</h3>
          <p>Every garment begins not on the sketchpad, but at the fiber root. We trace each spun strand back to regenerative pastures and pesticide-free flax fields. The tension of our handlooms allows natural fibers to breathe, expand, and drape with fluid gravitational poise.</p>
          <p>Unlike petroleum-derived polyesters that trap moisture and break down into microplastics, our 100% natural wools, silks, and linens possess organic thermoregulation, antibacterial properties, and a soft sculptural memory that matures gracefully across decades of wear.</p>
          <div style="margin-top:2rem;">
            <a href="about.html" class="btn btn-outline">Read Our Full Atelier Heritage &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: 5-PILLAR ANATOMY OF HAUTE TEXTILE ARCHITECTURE -->
  <section class="section" id="anatomy">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Fabric Engineering</div>
        <h2 class="section-title">5 Pillars of Haute Textile Architecture</h2>
        <p class="section-subtitle">Precision standards engineered into every square yard of fabric that emerges from our weaving floor.</p>
      </div>
      <div class="anatomy-grid">
        <div class="anatomy-card">
          <div class="anatomy-number">01</div>
          <h3>Long-Staple Tensile Density</h3>
          <p>We source only extra-long staple fibers (above 36mm) to ensure unprecedented tensile resilience, minimizing pilling while yielding buttery handfeel across repeated seasons of wear.</p>
        </div>
        <div class="anatomy-card">
          <div class="anatomy-number">02</div>
          <h3>Low-Speed Shuttle Weaving</h3>
          <p>Operating our shuttle looms at gentle, rhythmic speeds preserves yarn elasticity and imparts rich dimensional surface textures unattainable on modern high-speed projectile machines.</p>
        </div>
        <div class="anatomy-card">
          <div class="anatomy-number">03</div>
          <h3>Living Botanical Dye Baths</h3>
          <p>Fermented indigo leaf vats, madder root decoctions, and walnut hull tannins penetrate deep into the yarn core, creating nuanced, living hues that age into majestic bespoke patinas.</p>
        </div>
        <div class="anatomy-card">
          <div class="anatomy-number">04</div>
          <h3>Balanced Warp & Weft Caliber</h3>
          <p>Calibrating precise thread count ratios guarantees true dimensional stability, preventing garment twisting, seam skewing, and bias sagging through tailored construction.</p>
        </div>
        <div class="anatomy-card">
          <div class="anatomy-number">05</div>
          <h3>Pure Horsehair Canvas Tailoring</h3>
          <p>Our tailored coats and jackets are structured with natural floating horsehair and linen canvas, contouring to the wearer's anatomy through heat, movement, and natural drape.</p>
        </div>
        <div class="anatomy-card">
          <div class="anatomy-number">06</div>
          <h3>Carbon-Neutral Circular Lifecycle</h3>
          <p>Every bolt of cloth is biodegradable and circular. Offcuts are reconstituted into artisanal paper or yarn, returning nutrient-rich organic matter to agricultural soils.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: SIGNATURE CAPSULE COLLECTIONS -->
  <section class="section section-alt" id="collections">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Curated Textiles</div>
        <h2 class="section-title">Signature Capsule Cloth Collections</h2>
        <p class="section-subtitle">Limited-edition artisan textiles handwoven for fashion ateliers, bespoke tailors, and discerning collectors.</p>
      </div>
      <div class="collections-grid">
        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/cashmere_wool_fabric_stack.jpg" alt="Pure Mongolian Cashmere Overcoating Fabric" width="300" height="225">
            <span class="card-badge">Winter Heirloom</span>
          </div>
          <div class="card-body">
            <h3>Mongolian Cashmere Cloth</h3>
            <p style="color:var(--color-slate-600);font-size:0.9rem;margin-bottom:1rem;">480 GSM double-faced overcoating fabric with brushed water-ripple finish.</p>
            <div class="card-footer">
              <span style="font-weight:700;color:var(--color-mulberry);font-family:var(--font-mono);">$240 / Yard</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Reserve</a>
            </div>
          </div>
        </div>
        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/botanical_indigo_dye_vat.jpg" alt="Botanical Indigo Silk Twill" width="300" height="225">
            <span class="card-badge">Artisanal Dye</span>
          </div>
          <div class="card-body">
            <h3>Indigo Mulberry Silk Twill</h3>
            <p style="color:var(--color-slate-600);font-size:0.9rem;margin-bottom:1rem;">22 Momme hand-screened pure mulberry silk dyed in ten living indigo dips.</p>
            <div class="card-footer">
              <span style="font-weight:700;color:var(--color-mulberry);font-family:var(--font-mono);">$165 / Yard</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Reserve</a>
            </div>
          </div>
        </div>
        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/selvedge_denim_shuttle_loom.jpg" alt="Japanese Shuttle Loom Selvedge Denim" width="300" height="225">
            <span class="card-badge">Raw Selvedge</span>
          </div>
          <div class="card-body">
            <h3>14.5oz Kuroki Selvedge Denim</h3>
            <p style="color:var(--color-slate-600);font-size:0.9rem;margin-bottom:1rem;">Ring-spun Zimbabwe organic cotton woven on vintage Toyoda shuttle looms.</p>
            <div class="card-footer">
              <span style="font-weight:700;color:var(--color-mulberry);font-family:var(--font-mono);">$95 / Yard</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Reserve</a>
            </div>
          </div>
        </div>
        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/linen_summer_garment_collection.jpg" alt="Unbleached Belgian Flax Linen" width="300" height="225">
            <span class="card-badge">Summer Suiting</span>
          </div>
          <div class="card-body">
            <h3>Belgian Dew-Retted Linen</h3>
            <p style="color:var(--color-slate-600);font-size:0.9rem;margin-bottom:1rem;">310 GSM crisp open-weave linen suited for structured summer tailoring.</p>
            <div class="card-footer">
              <span style="font-weight:700;color:var(--color-mulberry);font-family:var(--font-mono);">$110 / Yard</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Reserve</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: FIBER & LOOM TECHNICAL MATRIX -->
  <section class="section" id="matrix">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Material Telemetry</div>
        <h2 class="section-title">Fiber & Loom Technical Specifications</h2>
        <p class="section-subtitle">Rigorous physical benchmarks calibrated for world-class tailored drape and long-term durability.</p>
      </div>
      <div class="matrix-container">
        <table class="matrix-table">
          <thead>
            <tr>
              <th>Cloth Designation</th>
              <th>Fiber Composition</th>
              <th>Yarn Count (Nm)</th>
              <th>Fabric Weight</th>
              <th>Weave Architecture</th>
              <th>Ideal Silhouette</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Atelier Super 160s Merino</strong></td>
              <td>100% Saxon Wool (15.2μm)</td>
              <td>2/90 Nm Worsted</td>
              <td>260 GSM</td>
              <td>2/2 Twill Weave</td>
              <td>Four-Season Bespoke Suiting</td>
            </tr>
            <tr>
              <td><strong>Royal Alashan Cashmere</strong></td>
              <td>100% Inner Mongolian Cashmere</td>
              <td>2/28 Nm Woolen</td>
              <td>480 GSM</td>
              <td>Double-Faced Plain Weave</td>
              <td>Deconstructed Winter Overcoats</td>
            </tr>
            <tr>
              <td><strong>Heritage Normandy Flax</strong></td>
              <td>100% European Masters of Linen</td>
              <td>1/26 Lea Wet-Spun</td>
              <td>320 GSM</td>
              <td>Panama Basket Weave</td>
              <td>Structured Summer Blazers & Trousers</td>
            </tr>
            <tr>
              <td><strong>Peace Mulberry Silk Satin</strong></td>
              <td>100% Non-Violent Ahimsa Silk</td>
              <td>20/22 Denier</td>
              <td>110 GSM (25 Momme)</td>
              <td>8-Shaft Satin Weave</td>
              <td>Evening Gowns & Silk Shackets</td>
            </tr>
            <tr>
              <td><strong>Heavyweight Raw Selvedge</strong></td>
              <td>100% Organic Long-Staple Cotton</td>
              <td>6s x 7s Ring Spun</td>
              <td>490 GSM (14.5 oz)</td>
              <td>3/1 Right-Hand Twill</td>
              <td>Tailored Utility Jackets & Denim</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- SECTION 6: BOTANICAL DYEING THERMODYNAMICS -->
  <section class="section section-dark" id="dyeing">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Natural Alchemy</div>
        <h2 class="section-title">Botanical Dyeing Thermodynamics & Ancient Mordants</h2>
        <p class="section-subtitle">Harnessing living plant compounds and gentle thermal baths to achieve rich, multifaceted color spectrums without heavy metals.</p>
      </div>
      <div class="telemetry-grid">
        <div class="telemetry-card">
          <div class="telemetry-metric">55°C</div>
          <h4>Indigo Reduction Vat</h4>
          <p>Fermented with organic dates and iron salts at gentle temperatures, enabling leuco-indigo to chemically bond to cellulose fibers.</p>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">85°C</div>
          <h4>Madder Root Decoction</h4>
          <p>Slow simmer of wild Rubia tinctorum roots extracting alizarin reds that withstand sunlight without synthetic chemical fixatives.</p>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">0%</div>
          <h4>Petroleum Synthetics</h4>
          <p>Zero coal-tar derivatives, heavy chromium mordants, or toxic azo dyes enter our water runoff or touch the wearer's skin.</p>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">100%</div>
          <h4>Wastewater Bioremediation</h4>
          <p>All dye rinse waters pass through natural reed-bed biofilters, returning balanced pH water safely to municipal irrigation.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: INTERACTIVE DRAPE & FABRIC CALCULATOR -->
  <section class="section" id="calculator">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Tailor's Tool</div>
        <h2 class="section-title">Interactive Textile Drape & Yardage Calculator</h2>
        <p class="section-subtitle">Estimate fabric weight, drape profile, and bespoke garment yield for your next couture commission.</p>
      </div>
      <div style="max-width:760px;margin:0 auto;background:var(--color-white);padding:2.5rem;border-radius:var(--radius-xl);border:1px solid var(--color-cream-border);box-shadow:var(--shadow-sm);">
        <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:1.5rem;margin-bottom:1.5rem;">
          <div>
            <label style="display:block;font-weight:700;font-size:0.9rem;margin-bottom:0.5rem;color:var(--color-indigo-900);">Fiber Type</label>
            <select id="calc-fiber" style="width:100%;padding:0.75rem;border-radius:var(--radius-sm);border:1px solid var(--color-slate-300);background:var(--color-sand);">
              <option value="Wool">Worsted Wool</option>
              <option value="Cashmere">Pure Cashmere</option>
              <option value="Silk">Mulberry Silk</option>
              <option value="Linen">European Linen</option>
              <option value="Denim">Selvedge Denim</option>
            </select>
          </div>
          <div>
            <label style="display:block;font-weight:700;font-size:0.9rem;margin-bottom:0.5rem;color:var(--color-indigo-900);">Fabric GSM (Weight)</label>
            <input type="number" id="calc-gsm" value="280" min="80" max="750" style="width:100%;padding:0.75rem;border-radius:var(--radius-sm);border:1px solid var(--color-slate-300);background:var(--color-sand);">
          </div>
          <div>
            <label style="display:block;font-weight:700;font-size:0.9rem;margin-bottom:0.5rem;color:var(--color-indigo-900);">Estimated Yards</label>
            <input type="number" id="calc-yards" value="3.5" step="0.5" min="1" max="20" style="width:100%;padding:0.75rem;border-radius:var(--radius-sm);border:1px solid var(--color-slate-300);background:var(--color-sand);">
          </div>
        </div>
        <button id="calc-btn" class="btn btn-primary" style="width:100%;margin-bottom:1.5rem;">Calculate Drape & Cloth Metrics</button>
        <div style="background:var(--color-sand);padding:1.5rem;border-radius:var(--radius-md);border:1px solid var(--color-cream-border);">
          <div style="font-size:0.85rem;color:var(--color-slate-500);text-transform:uppercase;letter-spacing:0.05em;font-weight:700;margin-bottom:0.5rem;">Calculation Results:</div>
          <div id="calc-out-drape" style="font-size:1.15rem;font-weight:700;color:var(--color-mulberry);margin-bottom:0.35rem;">Medium Structured Drape</div>
          <div id="calc-out-weight" style="color:var(--color-slate-800);font-weight:600;margin-bottom:0.35rem;">1.26 kg approx garment cloth weight</div>
          <div id="calc-out-care" style="color:var(--color-slate-600);font-size:0.9rem;">Professional Dry Clean Recommended</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: HAUTE COUTURE PATRON TESTIMONIALS -->
  <section class="section section-alt" id="reviews">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Patron Voices</div>
        <h2 class="section-title">Acclaim from Master Tailors & Fashion Stylists</h2>
        <p class="section-subtitle">How our artisanal textiles elevate high-fashion runways, Savile Row bespoke suits, and sustainable capsule wardrobes.</p>
      </div>
      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p style="font-style:italic;color:var(--color-slate-800);line-height:1.7;">
              &ldquo;The double-faced cashmere overcoating from TextileCharm possesses a tactile density unlike anything from industrial mills. When steamed under the iron, the cloth molds effortlessly around the collar and chest without bubbling.&rdquo;
            </p>
          </div>
          <div style="margin-top:1.5rem;border-top:1px solid var(--color-cream-border);padding-top:1rem;">
            <strong>Julian Davenport</strong><br>
            <span style="font-size:0.85rem;color:var(--color-slate-500);">Master Tailor, Savile Row Bespoke Guild</span>
          </div>
        </div>
        <div class="review-card">
          <div>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p style="font-style:italic;color:var(--color-slate-800);line-height:1.7;">
              &ldquo;Using their botanical indigo-dyed silk twill for our Paris Fashion Week capsule was an absolute triumph. The color changes subtly under runway floodlights, giving our fluid dresses an ethereal depth that synthetic dyes can never replicate.&rdquo;
            </p>
          </div>
          <div style="margin-top:1.5rem;border-top:1px solid var(--color-cream-border);padding-top:1rem;">
            <strong>Camille Laurent</strong><br>
            <span style="font-size:0.85rem;color:var(--color-slate-500);">Creative Director, Maison Laurent Studio</span>
          </div>
        </div>
        <div class="review-card">
          <div>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p style="font-style:italic;color:var(--color-slate-800);line-height:1.7;">
              &ldquo;Their unbleached European linen has revolutionized our summer collections. It drapes with an architectural crispness that softens gracefully without losing silhouette form. Essential cloth for mindful tailoring.&rdquo;
            </p>
          </div>
          <div style="margin-top:1.5rem;border-top:1px solid var(--color-cream-border);padding-top:1rem;">
            <strong>Marcus Vance</strong><br>
            <span style="font-size:0.85rem;color:var(--color-slate-500);">Senior Fashion Editor, The Architectural Sartorialist</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: ETHICAL LOOM TELEMETRY -->
  <section class="section" id="ethics">
    <div class="container">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:3.5rem;align-items:center;">
        <div>
          <div class="section-kicker">Transparent Provenance</div>
          <h2 class="section-title">Ethical Loom Standards & Regenerative Agriculture</h2>
          <p>Every bolt of TextileCharm cloth is coded with a harvest passport detailing sheep shearing dates, certified organic pasture coordinates, and weaver artisan compensation.</p>
          <ul style="list-style:none;margin-top:1.5rem;display:flex;flex-direction:column;gap:1rem;">
            <li style="display:flex;align-items:flex-start;gap:0.75rem;">
              <span style="color:var(--color-mulberry);font-weight:bold;">&#10003;</span>
              <span><strong>Fair Trade Artisan Wages:</strong> Weavers earn 3.2× regional living wage minimums with full healthcare support.</span>
            </li>
            <li style="display:flex;align-items:flex-start;gap:0.75rem;">
              <span style="color:var(--color-mulberry);font-weight:bold;">&#10003;</span>
              <span><strong>Mulesing-Free Wool:</strong> 100% verified ethical shearing standards audited by independent welfare veterinarians.</span>
            </li>
            <li style="display:flex;align-items:flex-start;gap:0.75rem;">
              <span style="color:var(--color-mulberry);font-weight:bold;">&#10003;</span>
              <span><strong>Zero Toxic Effluent:</strong> Natural dyes and biological closed-loop rinses ensure 0% heavy metal waste.</span>
            </li>
          </ul>
        </div>
        <div>
          <img src="assets/images/handloom_weaving_shuttle.jpg" alt="Heritage wooden handloom with rich textured warp and weft threads" style="border-radius:var(--radius-xl);box-shadow:var(--shadow-xl);" width="560" height="420">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 10: FASHION JOURNAL HIGHLIGHTS -->
  <section class="section section-alt" id="journal">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Knowledge Atelier</div>
        <h2 class="section-title">The TextileCharm Fashion & Weave Journal</h2>
        <p class="section-subtitle">Authoritative treatises on textile physics, historical dyeing alchemies, and architectural garment construction.</p>
      </div>
      <div class="blog-grid">
        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/tailoring_mannequin_drape.jpg" alt="Structural Physics of Haute Couture Drape" width="380" height="215">
          </div>
          <div class="blog-card-body">
            <div class="blog-card-meta"><span>Textile Physics</span> &bull; <span>12 Min Read</span></div>
            <h3>The Structural Physics of Haute Couture Drape & Warp Tension</h3>
            <p style="color:var(--color-slate-600);font-size:0.95rem;margin-bottom:1.5rem;">Analyzing the mathematical relationship between fiber elasticity, bias cut geometry, and gravitational fabric drop.</p>
            <a href="blog/the-structural-physics-of-haute-couture-drape-and-warp-tension.html" class="btn btn-outline btn-sm" style="margin-top:auto;">Read Treatise &rarr;</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/botanical_indigo_dye_vat.jpg" alt="Botanical Indigo Vat Reduction" width="380" height="215">
          </div>
          <div class="blog-card-body">
            <div class="blog-card-meta"><span>Dye Chemistry</span> &bull; <span>14 Min Read</span></div>
            <h3>Botanical Indigo Vat Reduction & Natural Mordant Chemistry</h3>
            <p style="color:var(--color-slate-600);font-size:0.95rem;margin-bottom:1.5rem;">How fermentation, fructose reduction, and dissolved oxygen parameters dictate the molecular binding of natural indigo.</p>
            <a href="blog/botanical-indigo-vat-reduction-and-natural-mordant-chemistry.html" class="btn btn-outline btn-sm" style="margin-top:auto;">Read Treatise &rarr;</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/cashmere_wool_fabric_stack.jpg" alt="Heirloom Wool and Cashmere Grading" width="380" height="215">
          </div>
          <div class="blog-card-body">
            <div class="blog-card-meta"><span>Fiber Science</span> &bull; <span>13 Min Read</span></div>
            <h3>Heirloom Wool & Cashmere Grading: From Micron to Finished Loom</h3>
            <p style="color:var(--color-slate-600);font-size:0.95rem;margin-bottom:1.5rem;">Deconstructing Super 100s through Super 200s classifications, carded versus worsted yarns, and microscopic crimp factors.</p>
            <a href="blog/heirloom-wool-and-cashmere-grading-from-micron-to-loom.html" class="btn btn-outline btn-sm" style="margin-top:auto;">Read Treatise &rarr;</a>
          </div>
        </div>
      </div>
      <div style="text-align:center;margin-top:3rem;">
        <a href="blog.html" class="btn btn-primary">Browse All 6 In-Depth Fashion Guides &rarr;</a>
      </div>
    </div>
  </section>

  <!-- SECTION 11: INTERACTIVE ACCORDION FAQ -->
  <section class="section" id="faq">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Client Queries</div>
        <h2 class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle">Key answers regarding fabric swatch orders, bespoke yardage minimums, and care protocols.</p>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">
            <span>What distinguishes shuttle-loom woven cloth from industrial projectile fabric?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Industrial projectile and air-jet looms operate at extreme speeds that stretch and stress yarn fibers, resulting in stiff, uniform, and often brittle cloth with cut edges. In contrast, our vintage shuttle looms pass a continuous weft thread back and forth with gentle tension, creating a natural self-finished selvedge edge and a spongy, three-dimensional handfeel that breathes and molds to the body over time.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span>How do I order custom fabric swatch books for tailoring or fashion design?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Ateliers, designers, and bespoke tailors can request curated swatch books through our Commissions page. Each swatch archive contains 8×8 inch mounted tactile samples of our seasonal wools, raw silks, selvedge denims, and linens, complete with exact GSM specifications, yarn counts, and care documentation. Samples are dispatched within 48 hours worldwide.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span>Are your botanical indigo and madder dyes colorfast against washing and sunlight?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Yes. Our master dyers utilize natural non-toxic bio-mordants including alum potassium and tannin-rich oak gall extracts that chemically cross-link natural pigments into the protein and cellulose chains. While living natural dyes will evolve and develop a subtle artistic patina over years of wear, they achieve commercial Grade 4 lightfastness and washfastness ratings when cared for according to our cold gentle washing protocols.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span>What are your minimum yardage requirements for bespoke private weaves?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>For fabrics held in our active capsule inventory, we have a low minimum order of just 3 yards—ideal for a bespoke single suit, overcoat, or gown commission. For fully custom yarn formulations, proprietary tartan patterns, or exclusive botanical dye lot runs, our minimum warping frame run is 25 yards.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span>How should pure cashmere and fine merino overcoats be stored between seasons?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Fine animal fibers should always be gently brushed with a natural boar-bristle garment brush after wearing to remove surface dust and restore the nap. Between seasons, dry clean gently, allow to thoroughly air out, and store inside breathable 100% cotton garment bags suspended on wide, contoured cedar hangers with natural lavender sachets to protect against moths without harsh chemical mothballs.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span>Do your fabrics contain any synthetic sizing, formaldehyde, or chemical finishes?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Never. Standard industrial textile mills coat fabrics in synthetic polyvinyl alcohol (PVA) sizing agents, chemical anti-wrinkle resins, and formaldehyde baths for shelf stability. TextileCharm washes and preshrinks all finished cloth using pure mountain water and natural organic olive oil soap, ensuring the cloth that touches your skin is 100% pure, hypoallergenic, and non-toxic.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 12: BESPOKE COMMISSION & SWATCH ARCHIVE RESERVATION CTA -->
  <section class="section" id="cta">
    <div class="container">
      <div class="cta-banner">
        <h2>Experience the Tactile Splendor of Haute Weaving</h2>
        <p style="max-width:620px;margin:0 auto;color:var(--color-slate-300);font-size:1.1rem;">
          Schedule an in-person swatch consultation at our SoHo atelier or receive a curated seasonal fabric folio delivered directly to your design studio.
        </p>
        <form class="cta-form" action="contact.html" method="GET">
          <input type="email" class="cta-input" placeholder="Enter your atelier email address..." required>
          <button type="submit" class="btn btn-primary">Request Folio</button>
        </form>
      </div>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php" class="site-logo">
          <div class="logo-symbol">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6h16"/><path d="M4 18h16"/><path d="M8 3v18"/><path d="M16 3v18"/><circle cx="12" cy="12" r="2"/></svg>
          </div>
          <span>TextileCharm</span>
        </a>
        <p style="margin-top:1rem;color:#94a3b8;font-size:0.95rem;line-height:1.65;">
          Haute textile engineering, ethical handloom weaving, and bespoke tailoring drape. Preserving heritage fiber biodiversity through natural dyeing and architectural silhouettes.
        </p>
      </div>
      <div class="footer-col">
        <h4>Atelier Navigation</h4>
        <ul class="footer-links">
          <li><a href="index.php">Flagship Home</a></li>
          <li><a href="about.html">Heritage & Philosophy</a></li>
          <li><a href="index.php#collections">Capsule Fabrics</a></li>
          <li><a href="index.php#matrix">Fiber Technical Matrix</a></li>
          <li><a href="blog.html">Haute Fashion Journal</a></li>
          <li><a href="contact.html">Bespoke Commissions</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Legal Standards</h4>
        <ul class="footer-links">
          <li><a href="privacy-policy.html">Privacy Policy</a></li>
          <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
          <li><a href="disclaimer.html">Textile Disclaimer</a></li>
          <li><a href="cookie-policy.html">Cookie Policy</a></li>
          <li><a href="sitemap.xml">XML Sitemap</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Flagship Atelier</h4>
        <div style="margin-bottom:0.75rem;font-size:0.9rem;">
          <strong>Atelier Address:</strong><br>
          482 Broome Street, SoHo Fashion District, New York, NY 10013
        </div>
        <div style="margin-bottom:0.75rem;font-size:0.9rem;">
          <strong>Studio Telephone:</strong><br>
          +1-800-418-8398
        </div>
        <div style="font-size:0.9rem;">
          <strong>Client Concierge:</strong><br>
          concierge@textilecharm.com
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 TextileCharm Atelier. All rights reserved. Slow fashion, heirloom fibers, and architectural tailoring.</p>
      <div style="display:flex;gap:1.5rem;">
        <a href="privacy-policy.html">Privacy</a>
        <a href="terms-and-conditions.html">Terms</a>
        <a href="disclaimer.html">Disclaimer</a>
        <a href="cookie-policy.html">Cookies</a>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/main.js"></script>

</body>
</html>
