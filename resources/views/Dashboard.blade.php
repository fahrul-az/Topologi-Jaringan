<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TORIN | Network Topology Solutions</title>
<meta name="description" content="TORIN - Platform visualisasi dan pengelolaan topologi jaringan profesional.">
<style>
:root{--bg:#07111f;--blue:#2563eb;--primary:#38bdf8;--text:#f1f5f9;--muted:#94a3b8;--border:#23364d;--green:#4ade80}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth;scroll-padding-top:90px}
body{font-family:"Segoe UI",Arial,sans-serif;background:var(--bg);color:var(--text);line-height:1.7}
a{text-decoration:none;color:inherit}
.container{width:min(1160px,88%);margin:auto}

/* NAVBAR */
.navbar{position:sticky;top:0;z-index:100;background:rgba(7,17,31,.94);backdrop-filter:blur(15px);border-bottom:1px solid var(--border)}
.nav-content{min-height:76px;display:flex;justify-content:space-between;align-items:center;gap:25px}
.brand{display:flex;align-items:center;gap:12px;font-size:25px;font-weight:800;letter-spacing:2px}
.brand-icon{width:43px;height:43px;display:grid;place-items:center;color:#fff;border-radius:12px;background:linear-gradient(135deg,#2563eb,#38bdf8);box-shadow:0 0 25px #0284c733}
.brand small{display:block;font-size:9px;color:var(--muted);letter-spacing:2px;line-height:1.3}
.nav-links{display:flex;align-items:center;gap:28px}
.nav-links a{color:#b6c5d8;font-size:14px;transition:.25s}
.nav-links a:hover{color:var(--primary)}

/* HERO */
.hero{position:relative;overflow:hidden;padding:95px 0 85px;background:radial-gradient(ellipse at 80% 30%,#123d64 0%,transparent 40%),linear-gradient(135deg,#07111f,#0a1930)}
.hero::before{content:"";position:absolute;inset:0;pointer-events:none;opacity:.15;background-image:linear-gradient(#38bdf822 1px,transparent 1px),linear-gradient(90deg,#38bdf822 1px,transparent 1px);background-size:38px 38px;mask-image:linear-gradient(to right,transparent,black)}
.hero-grid{position:relative;display:grid;grid-template-columns:1fr 1fr;gap:55px;align-items:center}
.eyebrow{display:inline-flex;align-items:center;gap:10px;padding:7px 13px;border:1px solid #38bdf84d;border-radius:30px;color:#7dd3fc;background:#0c2741;font-size:11px;font-weight:700;letter-spacing:1.5px;margin-bottom:24px}
.live-dot{width:7px;height:7px;border-radius:50%;background:var(--green);box-shadow:0 0 10px var(--green)}
h1{font-size:clamp(40px,5vw,63px);line-height:1.12;letter-spacing:-2px;margin-bottom:24px}
h1 span{display:block;color:var(--primary)}
.hero-description{color:var(--muted);font-size:16px;max-width:520px;margin-bottom:30px}
.actions{display:flex;flex-wrap:wrap;gap:13px}
.btn{display:inline-flex;justify-content:center;align-items:center;gap:9px;padding:13px 21px;border-radius:8px;font-size:14px;font-weight:700;border:1px solid transparent;cursor:pointer;transition:.25s}
.btn-primary{background:linear-gradient(135deg,#2563eb,#0284c7);color:#fff}
.btn-primary:hover{transform:translateY(-3px);box-shadow:0 10px 25px #0284c733}

/* TOPOLOGY */
.network-panel{position:relative;min-height:365px;padding:24px;border:1px solid #294763;border-radius:20px;background:linear-gradient(145deg,#10253b,#091727);box-shadow:0 30px 80px #00000030}
.panel-heading{display:flex;justify-content:space-between;align-items:center;gap:10px;margin-bottom:12px}
.panel-heading strong{font-size:14px}
.panel-heading span{color:var(--green);font-size:11px}
.topology{display:block;width:100%;height:auto;min-height:240px}
.connection{fill:none;stroke:#38bdf8;stroke-width:1.6;stroke-dasharray:6 5;animation:flow 15s linear infinite}
.node{fill:#112c47;stroke:#38bdf8;stroke-width:1.5}
.node-core{fill:#123c5b;stroke:#60a5fa;stroke-width:2}
.node-label{fill:#dbeafe;font-size:10px;font-family:Arial,sans-serif;text-anchor:middle}
.topology-legend{display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px;padding-top:16px;border-top:1px solid var(--border);color:var(--muted);font-size:11px}
.legend-item{display:flex;align-items:center;gap:7px}
.legend-dot{width:8px;height:8px;border-radius:50%;background:var(--green)}
@keyframes flow{to{stroke-dashoffset:-100}}

/* METRICS */
.metrics{padding:28px 0;background:#0c1a2b;border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
.metrics-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.metric{display:flex;justify-content:center;align-items:center;gap:14px;padding:10px}
.metric-icon{display:grid;place-items:center;width:45px;height:45px;flex-shrink:0;background:#153554;color:var(--primary);border-radius:12px;font-size:21px}
.metric strong{display:block;font-size:15px}
.metric p{color:var(--muted);font-size:12px}

/* SECTIONS */
.section{padding:85px 0}
.section-header{text-align:center;max-width:680px;margin:0 auto 42px}
.section-label{color:var(--primary);font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase}
.section-header h2{font-size:clamp(28px,4vw,38px);line-height:1.25;margin:12px 0}
.section-header p{color:var(--muted);font-size:15px}
.service-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.service-card{padding:28px;border-radius:15px;border:1px solid var(--border);background:linear-gradient(145deg,#102138,#0b192a);transition:.3s}
.service-card:hover{transform:translateY(-6px);border-color:#258bc0;box-shadow:0 18px 40px #00000020}
.service-icon{display:grid;place-items:center;width:54px;height:54px;border-radius:13px;background:#143657;font-size:26px;margin-bottom:22px}
.service-card h3{font-size:18px;margin-bottom:12px}
.service-card p{color:var(--muted);font-size:14px;margin-bottom:20px}
.service-link{color:var(--primary);font-size:13px;font-weight:700}

/* ABOUT */
.about{background:#0b1a2c;border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
.about-grid{display:grid;grid-template-columns:.8fr 1.2fr;gap:60px;align-items:center}
.about-visual{padding:35px;text-align:center;background:linear-gradient(135deg,#102d49,#0a1727);border:1px solid #294763;border-radius:18px}
.big-icon{font-size:80px;display:block;margin-bottom:12px}
.about-visual strong{font-size:21px;letter-spacing:3px}
.about-visual p{font-size:12px;color:var(--muted);margin-top:8px}
.about-content h2{font-size:35px;line-height:1.25;margin:12px 0 20px}
.about-content>p{color:var(--muted);margin-bottom:22px}
.benefit{display:flex;align-items:flex-start;gap:12px;margin:15px 0}
.check{color:var(--green);font-weight:bold;margin-top:2px}
.benefit strong{font-size:14px;display:block}
.benefit p{color:var(--muted);font-size:13px}

/* FOOTER */
footer{border-top:1px solid var(--border);padding:28px 0;color:var(--muted);font-size:12px}
.footer-content{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:15px}
.footer-brand{color:var(--primary);font-weight:800;letter-spacing:2px}

/* RESPONSIVE */
@media(max-width:900px){
.hero-grid{grid-template-columns:1fr}
.hero-copy{text-align:center}
.hero-description{margin-left:auto;margin-right:auto}
.actions{justify-content:center}
.network-panel{max-width:600px;width:100%;margin:auto}
.about-grid{grid-template-columns:1fr;gap:35px}
.about-visual{max-width:500px;width:100%;margin:auto}
.service-grid{grid-template-columns:repeat(2,1fr)}
}
@media(max-width:600px){
.container{width:90%}
.nav-content{padding:15px 0;flex-direction:column;gap:15px}
.nav-links{justify-content:center;flex-wrap:wrap;gap:14px}
.nav-links a{font-size:12px}
.hero{padding:60px 0}
h1{letter-spacing:-1px}
.network-panel{padding:15px;min-height:auto}
.service-grid{grid-template-columns:1fr}
.metrics-grid{grid-template-columns:1fr;gap:5px}
.metric{justify-content:flex-start}
.section{padding:60px 0}
.about-content h2{font-size:29px}
.footer-content{flex-direction:column;text-align:center}
}
</style>
</head>
<body>

<!-- NAVBAR -->
<header class="navbar">
<div class="container nav-content">
<a href="#beranda" class="brand">
<span class="brand-icon">⌘</span>
<span>TORIN<small>NETWORK SOLUTIONS</small></span>
</a>
<nav class="nav-links">
<a href="#beranda">Beranda</a>
<a href="#topologi">Topologi</a>
<a href="#tentang">Tentang</a>
</nav>
</div>
</header>

<main>

<!-- HERO -->
<section class="hero" id="beranda">
<div class="container hero-grid">

<div class="hero-copy">
<div class="eyebrow"><span class="live-dot"></span>NETWORK INFRASTRUCTURE &amp; TECHNOLOGY</div>
<h1>Membangun <span>Koneksi Cerdas.</span></h1>
<p class="hero-description">
TORIN menghadirkan solusi visualisasi topologi jaringan yang terstruktur, modern, dan efisien untuk membantu memahami hubungan antarperangkat dalam infrastruktur jaringan.
</p>
<div class="actions">
<a href="/teknisi" class="btn btn-primary">Teknisi</a>
</div>
</div>

<!-- VISUAL TOPOLOGI -->
<div class="network-panel" id="topologi">
<div class="panel-heading">
<strong>Network Architecture</strong>
<span>● Concept Design</span>
</div>

<svg class="topology" viewBox="0 0 440 300" role="img" aria-label="Ilustrasi topologi jaringan dengan router utama, switch, dan komputer">
<path class="connection" d="M220 54 V83"/>
<path class="connection" d="M220 119 V145 H110 V174"/>
<path class="connection" d="M220 145 H330 V174"/>
<path class="connection" d="M110 208 V232 H55 V248"/>
<path class="connection" d="M110 232 H165 V248"/>
<path class="connection" d="M330 208 V232 H275 V248"/>
<path class="connection" d="M330 232 H385 V248"/>

<circle cx="220" cy="31" r="21" fill="#153958" stroke="#38bdf8" stroke-width="1.5"/>
<text x="220" y="35" text-anchor="middle" fill="#7dd3fc" font-size="10">NET</text>
<text class="node-label" x="220" y="10">INTERNET</text>

<rect class="node-core" x="181" y="83" width="78" height="36" rx="8"/>
<text class="node-label" x="220" y="105">ROUTER</text>

<rect class="node" x="72" y="174" width="76" height="34" rx="6"/>
<text class="node-label" x="110" y="195">SWITCH 01</text>
<rect class="node" x="292" y="174" width="76" height="34" rx="6"/>
<text class="node-label" x="330" y="195">SWITCH 02</text>

<rect class="node" x="32" y="248" width="46" height="27" rx="5"/>
<text class="node-label" x="55" y="265">PC 01</text>
<rect class="node" x="142" y="248" width="46" height="27" rx="5"/>
<text class="node-label" x="165" y="265">PC 02</text>
<rect class="node" x="252" y="248" width="46" height="27" rx="5"/>
<text class="node-label" x="275" y="265">PC 03</text>
<rect class="node" x="362" y="248" width="46" height="27" rx="5"/>
<text class="node-label" x="385" y="265">PC 04</text>
</svg>

<div class="topology-legend">
<div class="legend-item"><span class="legend-dot"></span>Struktur konseptual</div>
<div class="legend-item"><span style="color:#38bdf8">━━</span>Jalur koneksi</div>
</div>
</div>

</div>
</section>

<!-- METRICS -->
<section class="metrics">
<div class="container metrics-grid">
<div class="metric">
<div class="metric-icon">⌘</div>
<div><strong>Network Topology</strong><p>Visualisasi struktur jaringan</p></div>
</div>
<div class="metric">
<div class="metric-icon">◈</div>
<div><strong>Structured Design</strong><p>Arsitektur lebih terorganisasi</p></div>
</div>
<div class="metric">
<div class="metric-icon">⌁</div>
<div><strong>Network Planning</strong><p>Perencanaan infrastruktur IT</p></div>
</div>
</div>
</section>

<!-- SERVICES -->
<section class="section" id="layanan">
<div class="container">
<div class="section-header">
<span class="section-label">Solusi TORIN</span>
<h2>Infrastruktur Jaringan yang Terencana</h2>
<p>Kenali komponen utama dalam perancangan jaringan komputer dan infrastruktur digital.</p>
</div>

<div class="service-grid">
<article class="service-card">
<div class="service-icon">🌐</div>
<h3>Topologi Jaringan</h3>
<p>Pelajari susunan perangkat dan jalur komunikasi menggunakan topologi Star, Bus, Ring, Mesh, dan Tree.</p>
<a href="#topologi" class="service-link">Lihat ilustrasi →</a>
</article>

<article class="service-card">
<div class="service-icon">🖧</div>
<h3>Network Devices</h3>
<p>Kenali fungsi router, switch, access point, server, dan perangkat lain dalam jaringan.</p>
<a href="#tentang" class="service-link">Pelajari perangkat →</a>
</article>

<article class="service-card">
<div class="service-icon">🔗</div>
<h3>Network Infrastructure</h3>
<p>Rancang hubungan antarperangkat agar komunikasi data dapat berjalan secara terstruktur dan efisien.</p>
<a href="#topologi" class="service-link">Mulai perencanaan →</a>
</article>
</div>
</div>
</section>

<!-- ABOUT -->
<section class="section about" id="tentang">
<div class="container about-grid">

<div class="about-visual">
<span class="big-icon">⌘</span>
<strong>TORIN</strong>
<p>NETWORK TOPOLOGY &amp; INFRASTRUCTURE</p>
</div>

<div class="about-content">
<span class="section-label">Tentang Kami</span>
<h2>Mengenal Jaringan dari Struktur hingga Koneksi</h2>
<p>
TORIN merupakan konsep platform informasi teknologi jaringan yang berfokus pada visualisasi topologi, pengenalan perangkat, dan perencanaan infrastruktur jaringan komputer. Platform ini dapat dikembangkan sebagai media pembelajaran maupun portal informasi jaringan.
</p>

<div class="benefit">
<span class="check">✓</span>
<div><strong>Visualisasi Terstruktur</strong><p>Mempermudah pemahaman hubungan antarperangkat.</p></div>
</div>
<div class="benefit">
<span class="check">✓</span>
<div><strong>Desain Profesional</strong><p>Tampilan modern dengan navigasi yang jelas.</p></div>
</div>
<div class="benefit">
<span class="check">✓</span>
<div><strong>Mudah Dikembangkan</strong><p>Dapat menjadi dasar pengembangan sistem jaringan lebih lanjut.</p></div>
</div>
</div>

</div>
</section>

</main>

<!-- FOOTER -->
<footer>
<div class="container footer-content">
<div><span class="footer-brand">TORIN</span><span> | Network Solutions</span></div>
<p>&copy; <span id="year"></span> TORIN. Network Technology &amp; Infrastructure.</p>
</div>
</footer>

<script>
document.getElementById("year").textContent = new Date().getFullYear();
</script>

</body>
</html>