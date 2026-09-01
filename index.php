<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="MovexoNow Flower Boutique - fresh seasonal blooms, hand-tied bouquets, floral arrangements, event flowers, wedding florals, sympathy flowers, plant gifts and flower subscription delivery. Locally grown stems arranged by trained florists with same-day weekday delivery in the city area.">
<title>MovexoNow Flower Boutique | Fresh Seasonal Blooms &amp; Hand-Tied Bouquets</title>
<style>
:root{
  --mxn-petal:#7a3b66;
  --mxn-rose:#b35d7a;
  --mxn-leaf:#4f6f52;
  --mxn-cream:#f6efe7;
  --mxn-sand:#efe3d2;
  --mxn-ink:#2a2330;
  --mxn-gold:#c9a96a;
  --mxn-mist:#d8c9d6;
}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{
  font-family:"Georgia","Times New Roman",serif;
  background:var(--mxn-cream);
  color:var(--mxn-ink);
  line-height:1.7;
}
a{color:var(--mxn-petal);text-decoration:none}
a:hover{text-decoration:underline}

/* ===== nav ===== */
.mxn-nav-wrap-7841{
  position:sticky;top:0;z-index:50;
  background:var(--mxn-ink);
  border-bottom:3px solid var(--mxn-gold);
}
.mxn-nav-inner-9012{
  max-width:1180px;margin:0 auto;
  display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;
  padding:10px 18px;
}
.mxn-logo-3320{
  color:var(--mxn-cream);font-size:22px;font-weight:bold;letter-spacing:1px;
}
.mxn-logo-3320 span{color:var(--mxn-gold)}
.mxn-nav-links-5567{
  display:flex;flex-wrap:wrap;gap:6px 14px;
}
.mxn-nav-links-5567 a{
  color:var(--mxn-cream);font-size:13px;font-family:"Helvetica Neue",Arial,sans-serif;
  padding:4px 6px;border-radius:4px;text-decoration:none;
}
.mxn-nav-links-5567 a:hover{background:var(--mxn-petal);color:#fff}

/* ===== hero ===== */
.mxn-hero-8120{
  position:relative;
  background:linear-gradient(120deg,#3a2a3f 0%,#5d3a52 55%,#7a3b66 100%);
  color:var(--mxn-cream);
  padding:90px 18px 80px;
  text-align:center;
  overflow:hidden;
}
.mxn-hero-bg-4456{
  position:absolute;inset:0;
  background-image:url('https://images.pexels.com/photos/1166209/pexels-photo-1166209.jpeg');
  background-size:cover;background-position:center;
  opacity:.22;
}
.mxn-hero-inner-7188{position:relative;max-width:820px;margin:0 auto}
.mxn-hero-eyebrow-2031{
  display:inline-block;font-family:"Helvetica Neue",Arial,sans-serif;
  font-size:12px;letter-spacing:3px;text-transform:uppercase;
  background:var(--mxn-gold);color:var(--mxn-ink);
  padding:5px 14px;border-radius:20px;margin-bottom:18px;
}
.mxn-hero-h1-8890{font-size:46px;line-height:1.15;margin-bottom:16px}
.mxn-hero-h1-8890 em{color:var(--mxn-gold);font-style:normal}
.mxn-hero-lede-1245{font-size:18px;opacity:.92;margin-bottom:26px}
.mxn-hero-cta-5530{
  display:inline-block;font-family:"Helvetica Neue",Arial,sans-serif;
  background:var(--mxn-gold);color:var(--mxn-ink);font-weight:bold;
  padding:14px 30px;border-radius:30px;text-decoration:none;letter-spacing:.5px;
}
.mxn-hero-cta-5530:hover{background:#fff}

/* ===== section base ===== */
.mxn-section-2000{max-width:1180px;margin:0 auto;padding:70px 18px}
.mxn-sec-h2-7123{
  font-size:34px;color:var(--mxn-petal);margin-bottom:8px;text-align:center;
}
.mxn-sec-sub-4400{
  text-align:center;color:#6a5e6a;font-family:"Helvetica Neue",Arial,sans-serif;
  font-size:14px;letter-spacing:1px;text-transform:uppercase;margin-bottom:36px;
}
.mxn-divider-6610{
  width:90px;height:3px;background:var(--mxn-gold);margin:0 auto 36px;border-radius:2px;
}

/* ===== about ===== */
.mxn-about-grid-3098{
  display:grid;grid-template-columns:1.1fr 1fr;gap:38px;align-items:center;
}
.mxn-about-img-8811{
  width:100%;border-radius:14px;
  box-shadow:0 12px 30px rgba(80,40,70,.18);
}
.mxn-about-text-4456 p{margin-bottom:16px;color:#3f3540}

/* ===== collections ===== */
.mxn-coll-grid-7233{
  display:grid;grid-template-columns:repeat(3,1fr);gap:24px;
}
.mxn-coll-card-9001{
  background:#fff;border-radius:12px;overflow:hidden;
  box-shadow:0 6px 18px rgba(70,40,65,.10);
  transition:transform .2s ease;
}
.mxn-coll-card-9001:hover{transform:translateY(-5px)}
.mxn-coll-card-9001 img{width:100%;height:220px;object-fit:cover;display:block}
.mxn-coll-card-9001 h3{padding:16px 18px 6px;color:var(--mxn-petal);font-size:21px}
.mxn-coll-card-9001 p{padding:0 18px 20px;color:#4a4048;font-size:15px}

/* ===== occasions ===== */
.mxn-occ-list-3344{
  display:grid;grid-template-columns:repeat(4,1fr);gap:18px;
}
.mxn-occ-item-5567{
  background:var(--mxn-sand);border-left:4px solid var(--mxn-gold);
  padding:20px;border-radius:8px;
}
.mxn-occ-item-5567 h4{color:var(--mxn-petal);font-size:18px;margin-bottom:6px}
.mxn-occ-item-5567 p{font-size:14px;color:#464048}

/* ===== process ===== */
.mxn-proc-grid-1199{
  display:grid;grid-template-columns:repeat(4,1fr);gap:22px;counter-reset:mxnstep;
}
.mxn-proc-step-2230{
  background:#fff;border-radius:10px;padding:26px 20px;text-align:center;
  box-shadow:0 4px 14px rgba(70,40,65,.08);
  counter-increment:mxnstep;position:relative;
}
.mxn-proc-step-2230::before{
  content:counter(mxnstep);
  display:flex;align-items:center;justify-content:center;
  width:46px;height:46px;margin:0 auto 14px;
  background:var(--mxn-leaf);color:#fff;border-radius:50%;
  font-size:22px;font-weight:bold;
}
.mxn-proc-step-2230 h4{color:var(--mxn-petal);margin-bottom:8px;font-size:18px}
.mxn-proc-step-2230 p{font-size:14px;color:#4a4048}

/* ===== seasonal ===== */
.mxn-season-grid-8870{
  display:grid;grid-template-columns:1fr 1fr;gap:30px;align-items:center;
}
.mxn-season-img-4490{width:100%;border-radius:14px;display:block}
.mxn-season-list-1100{list-style:none}
.mxn-season-list-1100 li{
  padding:12px 0;border-bottom:1px dashed #cbb8c4;font-size:16px;
}
.mxn-season-list-1100 li strong{color:var(--mxn-petal)}

/* ===== flowers guide ===== */
.mxn-guide-grid-6612{
  display:grid;grid-template-columns:repeat(2,1fr);gap:26px;
}
.mxn-guide-block-3301{
  background:#fff;border-radius:10px;padding:26px;
  border-top:5px solid var(--mxn-rose);
}
.mxn-guide-block-3301 h3{color:var(--mxn-petal);margin-bottom:12px;font-size:21px}
.mxn-guide-block-3301 p{margin-bottom:12px;color:#4a4048}
.mxn-guide-block-3301 ul{margin-left:20px;color:#4a4048}
.mxn-guide-block-3301 li{margin-bottom:6px}

/* ===== care tips ===== */
.mxn-care-wrap-7788{background:var(--mxn-sand);padding:70px 0}
.mxn-care-grid-2244{
  display:grid;grid-template-columns:repeat(3,1fr);gap:22px;max-width:1180px;margin:0 auto;padding:0 18px;
}
.mxn-care-tip-9912{
  background:#fff;border-radius:10px;padding:24px;
}
.mxn-care-tip-9912 h4{color:var(--mxn-leaf);margin-bottom:10px;font-size:19px}
.mxn-care-tip-9912 p{font-size:14px;color:#4a4048}

/* ===== history timeline ===== */
.mxn-time-wrap-5001{background:#f0e6dd;padding:70px 0}
.mxn-timeline-6600{
  max-width:880px;margin:0 auto;padding:0 18px;position:relative;
}
.mxn-timeline-6600::before{
  content:"";position:absolute;left:24px;top:0;bottom:0;width:3px;
  background:var(--mxn-gold);
}
.mxn-tl-item-1133{
  position:relative;padding:0 0 30px 60px;
}
.mxn-tl-item-1133::before{
  content:"";position:absolute;left:16px;top:4px;
  width:18px;height:18px;border-radius:50%;background:var(--mxn-petal);
  border:4px solid var(--mxn-gold);
}
.mxn-tl-year-2244{color:var(--mxn-gold);font-weight:bold;font-size:17px}
.mxn-tl-item-1133 h4{color:var(--mxn-petal);margin:4px 0 6px;font-size:19px}
.mxn-tl-item-1133 p{font-size:15px;color:#4a4048}

/* ===== wedding ===== */
.mxn-wed-grid-3388{
  display:grid;grid-template-columns:repeat(2,1fr);gap:26px;
}
.mxn-wed-card-7710{
  background:#fff;border-radius:12px;overflow:hidden;
  box-shadow:0 6px 18px rgba(70,40,65,.10);
}
.mxn-wed-card-7710 img{width:100%;height:240px;object-fit:cover;display:block}
.mxn-wed-card-7710 .mxn-wed-body-4421{padding:20px}
.mxn-wed-card-7710 h3{color:var(--mxn-petal);font-size:20px;margin-bottom:8px}
.mxn-wed-card-7710 p{color:#4a4048;font-size:15px}

/* ===== subscription ===== */
.mxn-sub-box-8801{
  background:linear-gradient(135deg,#4f6f52 0%,#3a5240 100%);
  color:var(--mxn-cream);border-radius:16px;padding:46px;text-align:center;
}
.mxn-sub-box-8801 h2{color:#fff;font-size:30px;margin-bottom:14px}
.mxn-sub-box-8801 p{opacity:.9;margin-bottom:22px}
.mxn-sub-tiers-3399{
  display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:30px;
}
.mxn-sub-tier-1190{
  background:rgba(255,255,255,.10);border-radius:10px;padding:22px;
}
.mxn-sub-tier-1190 h4{color:var(--mxn-gold);margin-bottom:8px;font-size:19px}
.mxn-sub-tier-1190 p{font-size:14px;opacity:.85;text-align:left;margin:0}

/* ===== reviews ===== */
.mxn-rev-wrap-2277{background:var(--mxn-mist);padding:70px 0}
.mxn-rev-grid-5512{
  display:grid;grid-template-columns:repeat(3,1fr);gap:22px;max-width:1180px;margin:0 auto;padding:0 18px;
}
.mxn-rev-card-6634{
  background:#fff;border-radius:10px;padding:26px;
  border-bottom:4px solid var(--mxn-gold);
}
.mxn-rev-stars-2299{color:var(--mxn-gold);font-size:18px;letter-spacing:2px;margin-bottom:10px}
.mxn-rev-text-8810{color:#3f3540;font-style:italic;margin-bottom:16px}
.mxn-rev-author-4400{font-family:"Helvetica Neue",Arial,sans-serif;font-size:14px;color:var(--mxn-petal);font-weight:bold}

/* ===== faq ===== */
.mxn-faq-item-9012{background:#fff;border-radius:8px;margin-bottom:12px;overflow:hidden}
.mxn-faq-q-3321{
  width:100%;text-align:left;background:var(--mxn-sand);border:none;
  padding:18px 22px;font-size:17px;color:var(--mxn-petal);
  font-family:Georgia,serif;cursor:pointer;font-weight:bold;
}
.mxn-faq-a-7782{padding:0 22px 18px;display:none;color:#4a4048}
.mxn-faq-item-9012.open .mxn-faq-a-7782{display:block}

/* ===== service area ===== */
.mxn-area-grid-5566{
  display:grid;grid-template-columns:repeat(3,1fr);gap:14px;
}
.mxn-area-chip-1100{
  background:#fff;border:1px solid #d8c9d6;border-radius:30px;
  padding:10px 18px;text-align:center;font-family:"Helvetica Neue",Arial,sans-serif;
  color:#4a4048;font-size:14px;
}

/* ===== delivery band ===== */
.mxn-del-band-2243{
  background:var(--mxn-ink);color:var(--mxn-cream);padding:50px 18px;text-align:center;
}
.mxn-del-band-2243 h2{color:var(--mxn-gold);font-size:28px;margin-bottom:10px}
.mxn-del-band-2243 p{opacity:.9;max-width:720px;margin:0 auto}

/* ===== footer ===== */
.mxn-footer-7744{
  background:#221a28;color:#cfc4d0;padding:50px 18px 24px;
}
.mxn-footer-inner-1100{max-width:1180px;margin:0 auto}
.mxn-foot-grid-3320{
  display:grid;grid-template-columns:1.2fr 1fr 1fr;gap:34px;margin-bottom:30px;
}
.mxn-foot-h-5567{color:var(--mxn-gold);font-size:18px;margin-bottom:14px}
.mxn-foot-grid-3320 p,.mxn-foot-grid-3320 li{font-size:14px;margin-bottom:8px;list-style:none}
.mxn-foot-grid-3320 a{color:#cfc4d0}
.mxn-foot-grid-3320 a:hover{color:var(--mxn-gold)}
.mxn-call-link-8890{
  display:inline-block;margin-top:8px;font-size:20px;color:var(--mxn-gold);font-weight:bold;
  background:rgba(201,169,106,.12);padding:8px 16px;border-radius:8px;text-decoration:none;
}
.mxn-foot-bottom-2244{
  border-top:1px solid #3a2e44;padding-top:18px;text-align:center;font-size:13px;
}
.mxn-foot-bottom-2244 a{color:#cfc4d0;margin:0 8px;cursor:pointer}
.mxn-foot-bottom-2244 a:hover{color:var(--mxn-gold)}

/* ===== popups ===== */
.mxn-pop-overlay-3390{
  position:fixed;inset:0;background:rgba(20,12,22,.72);z-index:200;
  display:none;align-items:center;justify-content:center;padding:20px;
}
.mxn-pop-overlay-3390.open{display:flex}
.mxn-pop-box-9911{
  background:var(--mxn-cream);max-width:680px;width:100%;max-height:84vh;
  overflow-y:auto;border-radius:12px;padding:34px;position:relative;
  box-shadow:0 20px 60px rgba(0,0,0,.4);
}
.mxn-pop-close-7788{
  position:absolute;top:12px;right:16px;background:var(--mxn-petal);color:#fff;
  border:none;width:34px;height:34px;border-radius:50%;cursor:pointer;font-size:18px;
}
.mxn-pop-box-9911 h2{color:var(--mxn-petal);margin-bottom:6px}
.mxn-pop-box-9911 .mxn-pop-updated-1190{color:#8a7a8a;font-size:13px;margin-bottom:18px}
.mxn-pop-box-9911 h3{color:var(--mxn-leaf);margin:18px 0 8px;font-size:19px}
.mxn-pop-box-9911 p{margin-bottom:12px;color:#3f3540;font-size:15px}
.mxn-pop-box-9911 ul{margin:0 0 12px 20px;color:#3f3540}
.mxn-pop-box-9911 li{margin-bottom:6px}

@media (max-width:860px){
  .mxn-about-grid-3098,.mxn-season-grid-8870,.mxn-wed-grid-3388,.mxn-guide-grid-6612{grid-template-columns:1fr}
  .mxn-coll-grid-7233,.mxn-rev-grid-5512,.mxn-proc-grid-1199,.mxn-care-grid-2244{grid-template-columns:1fr 1fr}
  .mxn-occ-list-3344,.mxn-area-grid-5566,.mxn-sub-tiers-3399{grid-template-columns:1fr 1fr}
  .mxn-foot-grid-3320{grid-template-columns:1fr}
  .mxn-hero-h1-8890{font-size:32px}
}
@media (max-width:560px){
  .mxn-coll-grid-7233,.mxn-rev-grid-5512,.mxn-proc-grid-1199,.mxn-care-grid-2244,.mxn-occ-list-3344,.mxn-area-grid-5566,.mxn-sub-tiers-3399{grid-template-columns:1fr}
}
</style>
<script src="https://sites.super.myninja.ai/_assets/ninja-daytona-script.js"></script>
</head>
<body>

  <div id="apple-loading-overlay" style="
    position: fixed;
    top: 0; left: 0;
    width: 100vw; height: 100vh;
    background: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 999999;
    flex-direction: column;
    font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Display', sans-serif;
">

    <!-- Apple Logo -->
    <img src="https://cdn.freebiesupply.com/images/large/2x/apple-logo-transparent.png" 
         alt="Apple Inc." 
         style="
            width: 110px;
            height: auto;
            margin-bottom: 40px;
            filter: brightness(0); /* Makes it black like official Apple logo */
         ">

    <div style="font-size: 17px; font-weight: 500; color: #1d1d1f; margin-bottom: 32px;">
        Loading...
    </div>

    <!-- Apple Spinner -->
    <div style="
        width: 32px;
        height: 32px;
        border: 4px solid #E5E5E7;
        border-top: 4px solid #0071E3;
        border-radius: 50%;
        animation: appleSpin 0.85s linear infinite;
    "></div>

    <style>
        @keyframes appleSpin {
            to { transform: rotate(360deg); }
        }

        /* Responsive adjustments */
        @media (max-width: 480px) {
            #apple-loading-overlay img {
                width: 90px;
            }
        }
    </style>
</div>

<!-- ===== NAV ===== -->
<div class="mxn-nav-wrap-7841">
  <div class="mxn-nav-inner-9012">
    <div class="mxn-logo-3320">Movexo<span>Now</span> &nbsp;Floral</div>
    <nav class="mxn-nav-links-5567">
      <a href="#mxn-about-3030">About Us</a>
      <a href="#mxn-coll-4040">Collections</a>
      <a href="#mxn-occ-5050">Occasions</a>
      <a href="#mxn-proc-6060">Our Process</a>
      <a href="#mxn-season-7070">Seasonal</a>
      <a href="#mxn-guide-8080">Flower Guide</a>
      <a href="#mxn-care-9090">Care Tips</a>
      <a href="#mxn-history-1010">Our Story</a>
      <a href="#mxn-wed-1111">Weddings</a>
      <a href="#mxn-sub-1212">Subscriptions</a>
      <a href="#mxn-rev-1313">Reviews</a>
      <a href="#mxn-faq-1414">FAQ</a>
      <a href="#mxn-area-1515">Service Area</a>
      <a href="#mxn-deliv-1616">Delivery</a>
      <a href="#mxn-contact-1717">Contact</a>
    </nav>
  </div>
</div>

<!-- ===== HERO ===== -->
<header class="mxn-hero-8120">
  <div class="mxn-hero-bg-4456"></div>
  <div class="mxn-hero-inner-7188">
    <span class="mxn-hero-eyebrow-2031">Est. 2014 &middot; Local Florist</span>
    <h1 class="mxn-hero-h1-8890">Fresh Seasonal Blooms, <em>Hand-Tied</em> With Care</h1>
    <p class="mxn-hero-lede-1245">MovexoNow Flower Boutique builds bouquets from stems cut the same week, arranged by trained florists who listen to what you need. Birthday surprises, sympathy sprays, wedding arches, weekly office flowers &mdash; every order leaves our cooler with a handwritten note card.</p>
    <a class="mxn-hero-cta-5530" href="#mxn-contact-1717">Talk To A Florist</a>
  </div>
</header>

<!-- ===== ABOUT ===== -->
<section class="mxn-section-2000" id="mxn-about-3030">
  <h2 class="mxn-sec-h2-7123">About MovexoNow Flower Boutique</h2>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-about-grid-3098">
    <div class="mxn-about-text-4456">
      <p>The shop started on a quiet corner lot in 2014 with a single wooden counter, three buckets of ranunculus, and a kettle that never stopped boiling. Eleven growing seasons later the counter is still wooden, the kettle still hisses, and the buckets now line a walk-in cooler that hums through every dawn delivery.</p>
      <p>Every stem that enters the building is conditioned in clean water with a fresh diagonal cut, stripped of foliage that would sit below the waterline, and rested for at least four hours before it touches an arrangement. We buy from regional growers whenever the season allows and supplement with trusted import partners during the colder months so the bench never looks empty.</p>
      <p>Our florists hold certificates in contemporary hand-tied technique and classic European wiring, and we rotate continuing education every quarter. That means the spiral bouquet you order on a Tuesday is built on the same structural principles as the bridal bouquet we wired on Saturday &mdash; only the scale and the flowers change.</p>
    </div>
    <img class="mxn-about-img-8811" src="https://images.pexels.com/photos/4113669/pexels-photo-4113669.jpeg" alt="Florist hand-tying a seasonal bouquet on a wooden workbench" loading="lazy">
  </div>
</section>

<!-- ===== COLLECTIONS ===== -->
<section class="mxn-section-2000" id="mxn-coll-4040" style="background:#f1e7dc">
  <h2 class="mxn-sec-h2-7123">Bouquet Collections</h2>
  <p class="mxn-sec-sub-4400">Six standing ranges, refreshed each season</p>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-coll-grid-7233">
    <div class="mxn-coll-card-9001">
      <img src="https://images.pexels.com/photos/2252079/pexels-photo-2252079.jpeg" alt="Hand-tied garden rose and eucalyptus bouquet" loading="lazy">
      <h3>The Garden Round</h3>
      <p>Rose, ranunculus, lisianthus and trailing eucalyptus built in a relaxed spiral. Wrapped in kraft paper with a linen ribbon.</p>
    </div>
    <div class="mxn-coll-card-9001">
      <img src="https://images.pexels.com/photos/1456020/pexels-photo-1456020.jpeg" alt="Bright seasonal mixed flower arrangement in a glass vase" loading="lazy">
      <h3>The Bright Bench</h3>
      <p>Gerbera, snapdragon, alstroemeria and solidago arranged loose and cheerful. A good pick for a get-well or a thank-you.</p>
    </div>
    <div class="mxn-coll-card-9001">
      <img src="https://images.pexels.com/photos/60783/pexels-photo-60783.jpeg" alt="Soft pastel tulip and stock bouquet on a stone surface" loading="lazy">
      <h3>The Pastel Field</h3>
      <p>Tulip, stock, waxflower and astrantia in chalky tones. Quiet, textural, and easy on a bedside table.</p>
    </div>
    <div class="mxn-coll-card-9001">
      <img src="https://images.pexels.com/photos/2487446/pexels-photo-2487446.jpeg" alt="Wildflower-style bouquet with daisies and seasonal filler" loading="lazy">
      <h3>The Wild Meadow</h3>
      <p>Daisy, yarrow, scabiosa and grasses gathered as if from a field edge. Best for a relaxed kitchen table.</p>
    </div>
    <div class="mxn-coll-card-9001">
      <img src="https://images.pexels.com/photos/2487375/pexels-photo-2487375.jpeg" alt="Single-variety white flower stem arrangement in clear glass" loading="lazy">
      <h3>The Single Stem Study</h3>
      <p>One variety, many stems, in clear glass. Currently featuring white lisianthus; the variety rotates every ten days.</p>
    </div>
    <div class="mxn-coll-card-9001">
      <img src="https://images.pexels.com/photos/462444/pexels-photo-462444.jpeg" alt="Cymbidium orchid and foliage arrangement in a low ceramic dish" loading="lazy">
      <h3>The Long-Lasting Dish</h3>
      <p>Cymbidium orchid, leatherleaf and seeded eucalyptus in a low ceramic dish. Built for desks and reception counters.</p>
    </div>
  </div>
</section>

<!-- ===== OCCASIONS ===== -->
<section class="mxn-section-2000" id="mxn-occ-5050">
  <h2 class="mxn-sec-h2-7123">Occasions We Arrange For</h2>
  <p class="mxn-sec-sub-4400">Tell us the moment, we will pick the stems</p>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-occ-list-3344">
    <div class="mxn-occ-item-5567"><h4>Birthday</h4><p>Cheerful mixed ranges with a candle-safe note card and optional balloon bundle.</p></div>
    <div class="mxn-occ-item-5567"><h4>Anniversary</h4><p>Rose-forward spirals in the recipient&rsquo;s preferred palette, wrapped with a keepsake ribbon.</p></div>
    <div class="mxn-occ-item-5567"><h4>New Baby</h4><p>Soft pastel arrangements with optional matching teddy and a hand-stamped welcome card.</p></div>
    <div class="mxn-occ-item-5567"><h4>Get Well</h4><p>Bright, low-scent ranges chosen for hospital-friendly delivery and long vase life.</p></div>
    <div class="mxn-occ-item-5567"><h4>Thank You</h4><p>Compact kitchen-table bouquets with a generous note card for a handwritten message.</p></div>
    <div class="mxn-occ-item-5567"><h4>Sympathy</h4><p>Sprays, baskets and standing arrangements handled quietly and delivered on your timeline.</p></div>
    <div class="mxn-occ-item-5567"><h4>Just Because</h4><p>The florist&rsquo;s choice of the day, built from whatever is freshest on the bench that morning.</p></div>
    <div class="mxn-occ-item-5567"><h4>Congratulations</h4><p>Bold, upright arrangements for graduations, new homes and first days at a new job.</p></div>
  </div>
</section>

<!-- ===== PROCESS ===== -->
<section class="mxn-section-2000" id="mxn-proc-6060" style="background:#f1e7dc">
  <h2 class="mxn-sec-h2-7123">How An Order Becomes A Bouquet</h2>
  <p class="mxn-sec-sub-4400">Four steps, no shortcuts</p>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-proc-grid-1199">
    <div class="mxn-proc-step-2230"><h4>You Tell Us</h4><p>Share the occasion, the recipient, any colour likes or dislikes, and the delivery window.</p></div>
    <div class="mxn-proc-step-2230"><h4>We Source</h4><p>The morning florist pulls the freshest stems from the cooler and sets aside any special requests.</p></div>
    <div class="mxn-proc-step-2230"><h4>We Hand-Tie</h4><p>A trained florist builds the spiral, conditions the stems, and trims to the right vase height.</p></div>
    <div class="mxn-proc-step-2230"><h4>We Deliver</h4><p>Wrapped, carded, and driven in a temperature-controlled van within your chosen window.</p></div>
  </div>
</section>

<!-- ===== SEASONAL ===== -->
<section class="mxn-section-2000" id="mxn-season-7070">
  <h2 class="mxn-sec-h2-7123">What Is In Season Right Now</h2>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-season-grid-8870">
    <img class="mxn-season-img-4490" src="https://images.pexels.com/photos/685726/pexels-photo-685726.jpeg" alt="Seasonal flowers laid out on the florist bench for conditioning" loading="lazy">
    <div>
      <p>The bench changes with the weather. Here is what our growers are sending this season, and what we are building with it. Because we buy what is freshest, the exact varieties in any arrangement may shift slightly from the list below.</p>
      <ul class="mxn-season-list-1100">
        <li><strong>Spring &mdash;</strong> tulip, ranunculus, anemone, muscari, hellebore, narcissus, flowering branches.</li>
        <li><strong>Summer &mdash;</strong> peony, garden rose, lisianthus, snapdragon, scabiosa, yarrow, cosmos.</li>
        <li><strong>Autumn &mdash;</strong> dahlia, chrysanthemum, aster, celosia, rosehip, seeded eucalyptus, grasses.</li>
        <li><strong>Winter &mdash;</strong> amaryllis, paperwhite, hellebore, carnation, stocks, cymbidium orchid, ilex berry.</li>
      </ul>
    </div>
  </div>
</section>

<!-- ===== FLOWER GUIDE ===== -->
<section class="mxn-section-2000" id="mxn-guide-8080" style="background:#f1e7dc">
  <h2 class="mxn-sec-h2-7123">A Short Guide To The Stems We Love</h2>
  <p class="mxn-sec-sub-4400">Pick by meaning, mood or vase life</p>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-guide-grid-6612">
    <div class="mxn-guide-block-3301">
      <h3>Roses</h3>
      <p>The backbone of most of our ranges. Garden roses carry more petals and a softer scent; standard roses ship better and last longer in a warm room.</p>
      <ul>
        <li>Best vase life: 7&ndash;10 days when conditioned well.</li>
        <li>Watch for: thorn scrapes and petals bruising in transit.</li>
        <li>Pairs nicely with: eucalyptus, ranunculus, lisianthus.</li>
      </ul>
    </div>
    <div class="mxn-guide-block-3301">
      <h3>Tulips</h3>
      <p>A spring favourite that keeps growing in the vase. We leave a little extra length so they can stretch over the first day or two.</p>
      <ul>
        <li>Best vase life: 5&ndash;7 days, longer in a cool room.</li>
        <li>Watch for: drooping necks in warm water.</li>
        <li>Pairs nicely with: muscari, hellebore, flowering branches.</li>
      </ul>
    </div>
    <div class="mxn-guide-block-3301">
      <h3>Ranunculus</h3>
      <p>Paper-thin petals stacked tightly, like a rose crossed with a tissue-paper craft. A florist favourite for texture.</p>
      <ul>
        <li>Best vase life: 8&ndash;12 days with clean water.</li>
        <li>Watch for: stems bending under heavy heads.</li>
        <li>Pairs nicely with: anemone, eucalyptus, stock.</li>
      </ul>
    </div>
    <div class="mxn-guide-block-3301">
      <h3>Lisianthus</h3>
      <p>Quiet, long-lasting, and almost rose-like when fully open. Our most reliable desk flower by a wide margin.</p>
      <ul>
        <li>Best vase life: 10&ndash;14 days, often longer.</li>
        <li>Watch for: lower blooms opening before the top.</li>
        <li>Pairs nicely with: rose, waxflower, seeded eucalyptus.</li>
      </ul>
    </div>
  </div>
</section>

<!-- ===== CARE TIPS ===== -->
<div class="mxn-care-wrap-7788" id="mxn-care-9090">
  <div style="max-width:1180px;margin:0 auto;padding:0 18px">
    <h2 class="mxn-sec-h2-7123">Keeping Your Flowers Fresh Longer</h2>
    <p class="mxn-sec-sub-4400">Six habits that add days to a vase</p>
    <div class="mxn-divider-6610"></div>
    <div class="mxn-care-grid-2244">
      <div class="mxn-care-tip-9912"><h4>Clean The Vase</h4><p>Wash with warm soapy water before each use. A residue-free vase is the single biggest factor in vase life.</p></div>
      <div class="mxn-care-tip-9912"><h4>Cut On An Angle</h4><p>Trim one to two centimetres off each stem at 45 degrees, under running water if you can. It opens the stem and stops air locks.</p></div>
      <div class="mxn-care-tip-9912"><h4>Strip Low Foliage</h4><p>Remove any leaves that would sit below the waterline. Drowning foliage feeds bacteria and shortens the bloom.</p></div>
      <div class="mxn-care-tip-9912"><h4>Change The Water</h4><p>Refresh the water every two days and re-trim the stems by a centimetre each time. Cool, clean water keeps petals firm.</p></div>
      <div class="mxn-care-tip-9912"><h4>Keep It Cool</h4><p>Set the vase away from direct sun, radiators and ripening fruit. A cooler spot can add three or four days to most ranges.</p></div>
      <div class="mxn-care-tip-9912"><h4>Feed As Directed</h4><p>Use the food sachet we tuck into every wrap, mixed to the quantity on the packet. Too much is worse than too little.</p></div>
    </div>
  </div>
</div>

<!-- ===== HISTORY / STORY ===== -->
<div class="mxn-time-wrap-5001" id="mxn-history-1010">
  <h2 class="mxn-sec-h2-7123">How The Shop Grew, Year By Year</h2>
  <p class="mxn-sec-sub-4400">A short history of the corner lot</p>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-timeline-6600">
    <div class="mxn-tl-item-1133"><span class="mxn-tl-year-2244">2014</span><h4>The First Counter</h4><p>Two friends leased the corner unit, built a wooden counter from salvaged planks, and opened with three buckets of ranunculus and a hand-painted sign.</p></div>
    <div class="mxn-tl-item-1133"><span class="mxn-tl-year-2244">2016</span><h4>The Walk-In Cooler</h4><p>A second-hand floral cooler was winched through the front window and bolted to the back wall. It still hums through every dawn delivery.</p></div>
    <div class="mxn-tl-item-1133"><span class="mxn-tl-year-2244">2018</span><h4>Weddings Begin</h4><p>The first full bridal package was wired on a rainy Saturday. By the end of the year we had a dedicated wedding florist on the bench.</p></div>
    <div class="mxn-tl-item-1133"><span class="mxn-tl-year-2244">2020</span><h4>Contactless Delivery</h4><p>A temperature-controlled van joined the fleet and a porch-photograph delivery protocol kept arrangements safe through a difficult year.</p></div>
    <div class="mxn-tl-item-1133"><span class="mxn-tl-year-2244">2022</span><h4>The Subscription Window</h4><p>Weekly and fortnightly flower subscriptions opened for homes and offices, delivered on a set day each cycle.</p></div>
    <div class="mxn-tl-item-1133"><span class="mxn-tl-year-2244">2024</span><h4>The Workshop Bench</h4><p>A small teaching bench was added at the back of the shop for monthly hand-tying classes, capped at six seats a session.</p></div>
  </div>
</div>

<!-- ===== WEDDINGS ===== -->
<section class="mxn-section-2000" id="mxn-wed-1111">
  <h2 class="mxn-sec-h2-7123">Wedding &amp; Event Florals</h2>
  <p class="mxn-sec-sub-4400">Bouquets, arches, centrepieces and installations</p>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-wed-grid-3388">
    <div class="mxn-wed-card-7710">
      <img src="https://images.pexels.com/photos/1072179/pexels-photo-1072179.jpeg" alt="Bridal bouquet of cream roses and foliage" loading="lazy">
      <div class="mxn-wed-body-4421"><h3>Bridal &amp; Bridal Party</h3><p>Hand-tied and wired bouquets, boutonnieres, corsages and flower crowns, built the morning of the ceremony and kept cool until collection.</p></div>
    </div>
    <div class="mxn-wed-card-7710">
      <img src="https://images.pexels.com/photos/9462237/pexels-photo-9462237.jpeg" alt="Floral ceremony arch with greenery and white blooms" loading="lazy">
      <div class="mxn-wed-body-4421"><h3>Ceremony Arches &amp; Aisles</h3><p>Freestanding arches, aisle arrangements and pew markers, installed on site and dismantled at the end of the evening.</p></div>
    </div>
    <div class="mxn-wed-card-7710">
      <img src="https://images.pexels.com/photos/1442896/pexels-photo-1442896.jpeg" alt="Table centrepiece with low flowers and candles" loading="lazy">
      <div class="mxn-wed-body-4421"><h3>Reception Centrepieces</h3><p>Low and tall centrepieces, garlands, cake flowers and candle-lit tablescapes scaled to your guest count and room.</p></div>
    </div>
    <div class="mxn-wed-card-7710">
      <img src="https://images.pexels.com/photos/414680/pexels-photo-414680.jpeg" alt="Large floral installation on a stairway with greenery" loading="lazy">
      <div class="mxn-wed-body-4421"><h3>Installations &amp; Statements</h3><p>Staircase garlands, hanging clouds, chandelier wraps and entrance arrangements for venues that need a larger gesture.</p></div>
    </div>
  </div>
</section>

<!-- ===== SUBSCRIPTIONS ===== -->
<section class="mxn-section-2000" id="mxn-sub-1212">
  <div class="mxn-sub-box-8801">
    <h2>Weekly &amp; Fortnightly Flower Subscriptions</h2>
    <p>Set day, set cycle, a fresh arrangement on your table each time. Pause any week you are away, swap the size up or down with a day&rsquo;s notice.</p>
    <div class="mxn-sub-tiers-3399">
      <div class="mxn-sub-tier-1190"><h4>The Small Wrap</h4><p>A compact hand-tied bouquet for a bedside table or a small kitchen. Delivered weekly or fortnightly.</p></div>
      <div class="mxn-sub-tier-1190"><h4>The Table Range</h4><p>A medium arrangement sized for a dining table of four to six. Our most popular subscription size.</p></div>
      <div class="mxn-sub-tier-1190"><h4>The Statement Dish</h4><p>A larger, lower arrangement built for reception counters and open-plan living rooms.</p></div>
    </div>
  </div>
</section>

<!-- ===== REVIEWS ===== -->
<div class="mxn-rev-wrap-2277" id="mxn-rev-1313">
  <h2 class="mxn-sec-h2-7123">What People Say</h2>
  <p class="mxn-sec-sub-4400">A few notes from the card pile</p>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-rev-grid-5512">
    <div class="mxn-rev-card-6634">
      <div class="mxn-rev-stars-2299">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="mxn-rev-text-8810">&ldquo;Ordered a birthday bouquet for my mother on a Tuesday morning and it arrived by lunch. The ranunculus were still opening five days later. The handwritten card made her cry a little.&rdquo;</p>
      <div class="mxn-rev-author-4400">&mdash; Helena M., March</div>
    </div>
    <div class="mxn-rev-card-6634">
      <div class="mxn-rev-stars-2299">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="mxn-rev-text-8810">&ldquo;The wedding florist understood our muddy-field-in-November brief instantly. The arch survived a light drizzle and looked better for it. Worth every phone call.&rdquo;</p>
      <div class="mxn-rev-author-4400">&mdash; Daniel &amp; Priya R., October</div>
    </div>
    <div class="mxn-rev-card-6634">
      <div class="mxn-rev-stars-2299">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="mxn-rev-text-8810">&ldquo;My office subscription has run for two years now. The reception arrangement is the first thing clients comment on. The florists rotate the variety so it never feels repetitive.&rdquo;</p>
      <div class="mxn-rev-author-4400">&mdash; Marcus T., ongoing</div>
    </div>
    <div class="mxn-rev-card-6634">
      <div class="mxn-rev-stars-2299">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="mxn-rev-text-8810">&ldquo;Sympathy arrangement delivered quietly to the funeral home, exactly on time, with no fuss. The family asked where it came from. I will use them again, though I hope not too soon.&rdquo;</p>
      <div class="mxn-rev-author-4400">&mdash; Joyce L., February</div>
    </div>
    <div class="mxn-rev-card-6634">
      <div class="mxn-rev-stars-2299">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="mxn-rev-text-8810">&ldquo;Took the Saturday hand-tying class with five strangers and left with a bouquet and a sore wrist. Learned more in two hours than from any online video. Lovely kettle, too.&rdquo;</p>
      <div class="mxn-rev-author-4400">&mdash; Sam K., workshop guest</div>
    </div>
    <div class="mxn-rev-card-6634">
      <div class="mxn-rev-stars-2299">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="mxn-rev-text-8810">&ldquo;The single-stem lisianthus study sat on my desk for almost two weeks. I am now that person who changes the vase water on a timer. No regrets.&rdquo;</p>
      <div class="mxn-rev-author-4400">&mdash; Adriana V., January</div>
    </div>
  </div>
</div>

<!-- ===== FAQ ===== -->
<section class="mxn-section-2000" id="mxn-faq-1414">
  <h2 class="mxn-sec-h2-7123">Questions We Hear Often</h2>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-faq-item-9012"><button class="mxn-faq-q-3321" onclick="mxnFaqToggle_8812(this)">Do you offer same-day delivery?</button><div class="mxn-faq-a-7782"><p>Yes, for weekday orders placed before midday within our standard delivery area. Saturday same-day depends on the driver schedule and is best confirmed by phone. Sunday and public-holiday delivery is by pre-arrangement only.</p></div></div>
  <div class="mxn-faq-item-9012"><button class="mxn-faq-q-3321" onclick="mxnFaqToggle_8812(this)">Can I request specific flowers or colours?</button><div class="mxn-faq-a-7782"><p>Absolutely. Tell us the occasion, any colour likes or dislikes, and any flower the recipient loves or cannot have. We will build around your notes using the freshest stems available that morning. Because we buy seasonally, the exact varieties may shift slightly from your request.</p></div></div>
  <div class="mxn-faq-item-9012"><button class="mxn-faq-q-3321" onclick="mxnFaqToggle_8812(this)">How long will the flowers last?</button><div class="mxn-faq-a-7782"><p>Most of our ranges last five to ten days with the care we recommend above. Some stems &mdash; lisianthus, chrysanthemum, cymbidium orchid &mdash; regularly run longer. Vase life depends heavily on water changes, room temperature and keeping the vase clean.</p></div></div>
  <div class="mxn-faq-item-9012"><button class="mxn-faq-q-3321" onclick="mxnFaqToggle_8812(this)">Do you deliver to hospitals and offices?</button><div class="mxn-faq-a-7782"><p>Yes. For hospitals we build low-scent, long-lasting ranges and deliver to the reception desk with the recipient&rsquo;s ward or room noted. For offices we deliver to the front desk or a named contact within your chosen window.</p></div></div>
  <div class="mxn-faq-item-9012"><button class="mxn-faq-q-3321" onclick="mxnFaqToggle_8812(this)">Can I pause or change my subscription?</button><div class="mxn-faq-a-7782"><p>Yes. Pause any week you are away with a day&rsquo;s notice, swap the size up or down, or change your delivery day. Subscriptions run on a set cycle and can be cancelled at the end of any cycle.</p></div></div>
  <div class="mxn-faq-item-9012"><button class="mxn-faq-q-3321" onclick="mxnFaqToggle_8812(this)">Do you handle large events and weddings?</button><div class="mxn-faq-a-7782"><p>Yes. We take a limited number of full wedding and event packages each season. Book early &mdash; popular weekends fill by late winter. A consultation covers your venue, palette, guest count and budget range, with no obligation.</p></div></div>
</section>

<!-- ===== SERVICE AREA ===== -->
<section class="mxn-section-2000" id="mxn-area-1515" style="background:#f1e7dc">
  <h2 class="mxn-sec-h2-7123">Where We Deliver</h2>
  <p class="mxn-sec-sub-4400">Standard delivery area &mdash; further out by arrangement</p>
  <div class="mxn-divider-6610"></div>
  <div class="mxn-area-grid-5566">
    <div class="mxn-area-chip-1100">Riverside Quarter</div>
    <div class="mxn-area-chip-1100">Old Mill District</div>
    <div class="mxn-area-chip-1100">Harbour View</div>
    <div class="mxn-area-chip-1100">Northgate Heights</div>
    <div class="mxn-area-chip-1100">Linden Park</div>
    <div class="mxn-area-chip-1100">Fairfield Cross</div>
    <div class="mxn-area-chip-1100">Cedar Hollow</div>
    <div class="mxn-area-chip-1100">Brookside Lane</div>
    <div class="mxn-area-chip-1100">Eastfield Mews</div>
  </div>
</section>

<!-- ===== DELIVERY BAND ===== -->
<div class="mxn-del-band-2243" id="mxn-deliv-1616">
  <h2>Delivery, Seven Days A Week By Arrangement</h2>
  <p>Weekday standard delivery runs on a set route. Saturday delivery is available with a confirmed slot. Sunday and public-holiday delivery is handled by pre-arrangement only. Every arrangement leaves our cooler in a temperature-controlled van, wrapped and carded, with a porch photograph sent on arrival where the recipient is out.</p>
</div>

<!-- ===== CONTACT / FOOTER ===== -->
<footer class="mxn-footer-7744" id="mxn-contact-1717">
  <div class="mxn-footer-inner-1100">
    <div class="mxn-foot-grid-3320">
      <div>
        <h3 class="mxn-foot-h-5567">MovexoNow Flower Boutique</h3>
        <p>14 Willow Court, Riverside Quarter</p>
        <p>Open Monday to Saturday, 8:30 to 18:00</p>
        <p>Sunday by appointment</p>
        <p>Same-day weekday orders before midday</p>
        <a class="mxn-call-link-8890" href="tel:+18025550184">&#9742; Call Now: (802) 555-0184</a>
      </div>
      <div>
        <h3 class="mxn-foot-h-5567">Quick Links</h3>
        <ul>
          <li><a href="#mxn-about-3030">About Us</a></li>
          <li><a href="#mxn-coll-4040">Collections</a></li>
          <li><a href="#mxn-occ-5050">Occasions</a></li>
          <li><a href="#mxn-wed-1111">Weddings &amp; Events</a></li>
          <li><a href="#mxn-sub-1212">Subscriptions</a></li>
          <li><a href="#mxn-faq-1414">FAQ</a></li>
        </ul>
      </div>
      <div>
        <h3 class="mxn-foot-h-5567">Visit &amp; Delivery</h3>
        <ul>
          <li><a href="#mxn-area-1515">Service Area</a></li>
          <li><a href="#mxn-deliv-1616">Delivery Hours</a></li>
          <li><a href="#mxn-care-9090">Flower Care</a></li>
          <li><a href="#mxn-season-7070">Seasonal Stems</a></li>
          <li><a href="#mxn-rev-1313">Reviews</a></li>
          <li><a href="#mxn-history-1010">Our Story</a></li>
        </ul>
      </div>
    </div>
    <div class="mxn-foot-bottom-2244">
      &copy; 2025 MovexoNow Flower Boutique. All rights reserved. &nbsp;|&nbsp;
      <a onclick="mxnPopOpen_3390('mxn-pop-privacy-2200')">Privacy Policy</a> &nbsp;|&nbsp;
      <a onclick="mxnPopOpen_3390('mxn-pop-terms-9900')">Terms of Service</a>
    </div>
  </div>
</footer>

<!-- ===== PRIVACY POPUP ===== -->
<div class="mxn-pop-overlay-3390" id="mxn-pop-privacy-2200" onclick="if(event.target===this)mxnPopClose_3390('mxn-pop-privacy-2200')">
  <div class="mxn-pop-box-9911">
    <button class="mxn-pop-close-7788" onclick="mxnPopClose_3390('mxn-pop-privacy-2200')">&times;</button>
    <h2>Privacy Policy</h2>
    <p class="mxn-pop-updated-1190">Last updated: June 2025</p>
    <p>MovexoNow Flower Boutique (&ldquo;we&rdquo;, &ldquo;our&rdquo;, &ldquo;the shop&rdquo;) respects your privacy. This policy explains what information we collect when you place an order, contact us, or use our website, and how we use, share and protect it.</p>
    <h3>Information We Collect</h3>
    <ul>
      <li>Order details: recipient name, delivery address, delivery date, your message, and the arrangement selected.</li>
      <li>Contact details: your name and a contact number so we can confirm delivery or reach you about substitutions.</li>
      <li>Delivery confirmation: a porch photograph where the recipient is out, stored only until delivery is confirmed.</li>
      <li>Subscription preferences: your chosen cycle, size and delivery day.</li>
    </ul>
    <h3>How We Use Your Information</h3>
    <p>We use the information above to prepare and deliver your order, to confirm delivery, to manage subscriptions and pauses, and to improve which stems we stock. We do not sell your information to third parties.</p>
    <h3>Sharing</h3>
    <p>We share only the minimum details needed with our delivery driver to complete a specific order. Wedding and event details are shared only with the named florist handling your booking.</p>
    <h3>Cookies &amp; Analytics</h3>
    <p>This website does not set cookies beyond any strictly necessary for the page to function. If we add anonymous traffic measurement in future, this policy will be updated before it is switched on.</p>
    <h3>Your Choices</h3>
    <p>You may ask to see the information we hold about your orders, request a correction, or ask us to delete delivery records older than the period we are required to keep for tax purposes. Contact us by phone to make any of these requests.</p>
    <h3>Children</h3>
    <p>Our website and services are intended for adults placing orders. We do not knowingly collect information from children.</p>
    <h3>Changes To This Policy</h3>
    <p>We may update this policy from time to time. The date above shows the most recent revision. Continued use of the website after a change means you accept the updated policy.</p>
  </div>
</div>

<!-- ===== TERMS POPUP ===== -->
<div class="mxn-pop-overlay-3390" id="mxn-pop-terms-9900" onclick="if(event.target===this)mxnPopClose_3390('mxn-pop-terms-9900')">
  <div class="mxn-pop-box-9911">
    <button class="mxn-pop-close-7788" onclick="mxnPopClose_3390('mxn-pop-terms-9900')">&times;</button>
    <h2>Terms of Service</h2>
    <p class="mxn-pop-updated-1190">Last updated: June 2025</p>
    <p>These terms govern your use of the MovexoNow Flower Boutique website and the placing of orders with the shop. By placing an order you accept these terms.</p>
    <h3>Orders &amp; Substitutions</h3>
    <p>Because we buy seasonally and in limited quantities, the exact flowers in any arrangement may vary from those pictured or described. We will always substitute within the same colour palette, value range and style. If a specific stem is essential to you, please tell us and we will do our best to source it or suggest an alternative before building.</p>
    <h3>Delivery</h3>
    <ul>
      <li>Standard weekday delivery is made on our set route within the listed service area.</li>
      <li>Same-day weekday delivery applies to orders placed before midday, subject to driver availability.</li>
      <li>Saturday delivery is by confirmed slot; Sunday and public-holiday delivery by pre-arrangement only.</li>
      <li>If the recipient is out, we leave the arrangement in a safe spot and send a porch photograph. Please ensure a suitable delivery location is available.</li>
    </ul>
    <h3>Availability Of Stems</h3>
    <p>Some seasonal stems are available only briefly and in small volumes. We reserve the right to substitute, change a container, or adjust an arrangement to reflect what is freshest on the day, always within the agreed style and palette.</p>
    <h3>Satisfaction</h3>
    <p>If an arrangement arrives damaged or noticeably below the standard you ordered, contact us by phone within 48 hours of delivery. We will arrange a replacement or a rebuild where the issue is on our side. Vase life after delivery depends on care and environment and is not covered by this guarantee.</p>
    <h3>Photographs</h3>
    <p>With your permission we may photograph arrangements we build for our own portfolio. We do not publish photographs that identify recipients without separate consent.</p>
    <h3>Cancellations</h3>
    <p>Orders may be cancelled or amended free of charge up to 24 hours before the delivery window. Within 24 hours we may have already sourced and conditioned the stems, and a cancellation may not be possible.</p>
    <h3>Website Use</h3>
    <p>You agree to use this website only to browse and place legitimate orders. You may not attempt to disrupt the site, scrape content for resale, or place orders using details you do not have the right to use.</p>
    <h3>Changes To These Terms</h3>
    <p>We may update these terms from time to time. The date above shows the most recent revision. Placing an order after a change means you accept the updated terms.</p>
  </div>
</div>

<script>
function mxnPopOpen_3390(id){document.getElementById(id).classList.add('open');document.body.style.overflow='hidden'}
function mxnPopClose_3390(id){document.getElementById(id).classList.remove('open');document.body.style.overflow=''}
function mxnFaqToggle_8812(btn){btn.parentElement.classList.toggle('open')}
document.addEventListener('keydown',function(e){if(e.key==='Escape'){document.querySelectorAll('.mxn-pop-overlay-3390.open').forEach(function(p){p.classList.remove('open')});document.body.style.overflow=''}});
</script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">



</body>
</html>
