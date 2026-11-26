<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TORIN | Teknisi</title>

<style>
:root{--bg:#061326;--cyan:#19c7f4;--blue:#087bea;--text:#f4f8ff;--muted:#a8bdd5;--green:#22e6a0;--shadow:0 18px 48px #0005}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:"Segoe UI",Arial,sans-serif;color:var(--text);background:radial-gradient(ellipse at 88% 24%,#0b3760 0,transparent 34%),linear-gradient(135deg,#061326,#071a32 55%,#041226);min-height:100vh;line-height:1.5}
button,input,select{font:inherit}
button{cursor:pointer}

/* HEADER */
.topbar{height:84px;display:flex;align-items:center;justify-content:space-between;padding:0 clamp(20px,4vw,48px);border-bottom:1px solid #17436a;background:#061326ef;backdrop-filter:blur(14px)}
.brand{display:flex;align-items:center;gap:14px;text-decoration:none;color:#fff}
.brand-mark{height:52px;width:52px;display:grid;place-items:center;border-radius:15px;background:linear-gradient(140deg,#0785ff,#26c9f5);font-size:29px;font-weight:800;box-shadow:0 0 28px #0785ff55}
.brand-name{font-size:26px;font-weight:850;letter-spacing:3px;line-height:1}
.brand-name small{display:block;margin-top:6px;color:var(--muted);font-size:9px;letter-spacing:2.2px}
.top-actions{display:flex;align-items:center;gap:22px}
.bell{font-size:23px;color:#c9e6ff;position:relative}
.bell:after{content:"";position:absolute;width:9px;height:9px;border-radius:50%;background:#0ea5e9;right:-3px;top:0}
.profile{display:flex;align-items:center;gap:11px;padding-left:20px;border-left:1px solid #1d3c5b;font-weight:650}
.avatar{height:43px;width:43px;border-radius:50%;display:grid;place-items:center;background:linear-gradient(140deg,#234c78,#102c4d);font-size:22px}
.profile small{font-size:11px;color:var(--muted);margin-left:4px}

/* HALAMAN */
.page{width:min(1540px,100%);margin:auto;padding:28px clamp(20px,4vw,48px) 55px}
.breadcrumb{display:flex;align-items:center;gap:15px;color:var(--muted);font-size:14px;margin:2px 0 24px}
.breadcrumb .home{color:#69baff;font-size:22px}
.breadcrumb strong{color:#fff}
.heading{display:flex;align-items:center;gap:20px;margin-bottom:30px;position:relative}
.heading:after{content:"";position:absolute;z-index:-1;right:-5vw;top:-8px;width:47%;height:115px;background:repeating-linear-gradient(173deg,transparent 0 7px,#087bea25 8px 9px);border-radius:50%}
.heading-icon{width:76px;height:76px;border:1px solid #1c5078;border-radius:17px;display:grid;place-items:center;background:linear-gradient(145deg,#123d60,#0b2542);font-size:37px;color:#28c8ff;box-shadow:var(--shadow)}
h1{font-size:clamp(25px,3vw,34px);letter-spacing:-.7px}
.heading p{color:#b5cce5;margin-top:4px;font-size:16px}

/* LAYOUT */
.layout{display:grid;grid-template-columns:minmax(0,1fr) 400px;gap:28px;align-items:start}
.workspace,.guide{border:1px solid #126093;border-radius:24px;background:linear-gradient(145deg,#0a2039ef,#071a30f5);box-shadow:var(--shadow)}
.workspace{padding:22px 24px 24px}

/* FILTER DAN SEARCH */
.toolbar{display:grid;grid-template-columns:minmax(180px,270px) minmax(200px,1fr) 140px;gap:16px;margin-bottom:25px}
.control{height:56px;border:1px solid #24628e;border-radius:13px;background:#071b31;color:#eaf6ff;padding:0 17px;outline:none;width:100%}
.control:focus{border-color:var(--cyan);box-shadow:0 0 0 3px #19c7f426}
.floor-select{font-weight:700;font-size:16px}
.search-wrap{position:relative}
.search-wrap span{position:absolute;left:18px;top:10px;font-size:25px;color:#59c8ff}
.search-wrap input{padding-left:55px;font-size:15px}
.search-wrap input::placeholder{color:#b2c5dc}
.search-btn{border:0;border-radius:13px;color:#fff;font-weight:750;font-size:16px;background:linear-gradient(135deg,#0789f5,#0667d6);box-shadow:0 8px 22px #006fe944}
.search-btn:hover{filter:brightness(1.12)}

/* TOPOLOGI */
.topology-card{display:grid;grid-template-columns:minmax(0,1fr) 345px;gap:24px;align-items:stretch;border:1px solid #15527d;border-radius:21px;padding:25px 18px;background:linear-gradient(145deg,#0a2039,#07182c)}
.diagram{min-width:0;display:flex;flex-direction:column;padding:12px 8px 8px}
.router-node,.switch-node{margin:0 auto;text-align:center;border-radius:17px;background:linear-gradient(145deg,#123a5b,#0a2540)}
.router-node{width:min(220px,70%);padding:12px;border:2px solid #60a5fa;box-shadow:0 0 22px #3b82f622}
.router-node strong,.switch-node strong{font-size:21px}
.router-node small,.switch-node small{display:block;color:#c4d8ec;font-size:14px;margin-top:2px}
.switch-symbol{font-size:24px;color:#1fcaff;margin-right:9px}
.switch-node{width:min(260px,80%);padding:14px 12px;border:2px solid var(--cyan);box-shadow:0 0 22px #05bce522}
.top-row{display:grid;grid-template-columns:1fr minmax(0,220px) 1fr;align-items:center;gap:14px}
.top-row .router-node{width:100%}
.floor-label{justify-self:start;padding:10px 18px;border:2px solid var(--cyan);border-radius:14px;background:linear-gradient(145deg,#123a5b,#0a2540);box-shadow:0 0 22px #05bce522}
.floor-label strong{display:block;font-size:19px}
.floor-label small{display:block;color:#c4d8ec;font-size:13px}
.floor-section{margin-bottom:34px}
.floor-section:last-child{margin-bottom:0}
.link{width:2px;height:28px;margin:0 auto;background:var(--cyan)}
.branches{display:grid;grid-template-columns:repeat(auto-fill,minmax(118px,1fr));gap:8px 12px;position:relative}
.branches:before{content:"";position:absolute;z-index:0;left:calc(50% - 1px);top:0;bottom:30px;width:2px;background:var(--cyan)}
.device-branch{position:relative;z-index:1;text-align:center;min-width:0;padding-top:28px}
.device-branch:before{content:"";position:absolute;top:0;left:-6px;right:-6px;height:2px;background:var(--cyan)}
.device-branch:after{content:"";position:absolute;top:0;left:calc(50% - 1px);width:2px;height:28px;background:var(--cyan)}
.port{position:relative;z-index:1;display:inline-flex;align-items:center;justify-content:center;gap:6px;padding:5px 10px;border:1.5px solid #078fe0;border-radius:10px;background:#0c2b49;color:#d8f4ff;font-size:12px;white-space:nowrap}
.port b{color:#27caff}
.pc{position:relative;z-index:1;width:100%;min-height:88px;margin-top:10px;padding:10px 4px;border:2px solid #1aa9ee;border-radius:14px;background:linear-gradient(145deg,#123b5c,#0a2139);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:1px;transition:.2s;cursor:pointer;color:#fff}
.pc:hover,.pc.selected{border-color:#12d8ff;box-shadow:0 0 24px #08bce944;transform:translateY(-2px)}
.pc.offline{border-color:#b83e58}
.pc .monitor{font-size:25px;color:#1fcaff;line-height:1.2}
.pc.offline .monitor{color:#ff8ca0}
.pc strong{font-size:15px}
.pc small{font-size:10px;color:#a8c4de}
.empty-floor{padding:45px 15px;text-align:center;color:var(--muted);border:1px dashed #286084;border-radius:14px}

/* DETAIL PC */
.detail{border-left:1px solid #24628e;padding:4px 0 4px 24px;min-width:0}
.detail-box{height:100%;padding:22px 20px;border:1px solid #1b527e;border-radius:20px;background:linear-gradient(145deg,#102d4b,#091e35)}
.detail-title{display:flex;align-items:center;gap:12px;font-size:23px;margin-bottom:17px}
.detail-title span{font-size:25px;color:#19c7f4}
.detail-row{display:grid;grid-template-columns:105px 1fr;gap:10px;padding:13px 5px;border-bottom:1px solid #1d4567;font-size:14px}
.detail-row span{color:#b8cce2}
.detail-row strong{font-weight:600;overflow-wrap:anywhere}
.connection-status{margin-top:23px;padding:10px;border:1px solid #079d72;border-radius:12px;background:#063c36;color:var(--green);font-size:17px;font-weight:800;text-align:center}
.connection-status.offline{border-color:#b83e58;background:#401b2a;color:#ff8ca0}

/* PANDUAN */
.guide{padding:24px 25px 26px;border-color:#087bb5}
.guide-title{display:flex;align-items:center;gap:14px;padding-bottom:19px;border-bottom:1px solid #24618c;font-size:21px}
.info-icon{width:43px;height:43px;display:grid;place-items:center;border-radius:50%;background:linear-gradient(140deg,#058cf4,#0064ce);font-size:25px}
.steps{padding-top:20px;display:grid;gap:29px}
.step{display:grid;grid-template-columns:48px 1fr;gap:15px;position:relative}
.step:not(:last-child):after{content:"";position:absolute;left:22px;top:48px;height:62px;width:2px;background:#1266a0}
.number{width:43px;height:43px;display:grid;place-items:center;border-radius:50%;background:linear-gradient(140deg,#078bf6,#0061c8);font-size:22px;font-weight:800;box-shadow:0 0 16px #087bea44}
.step h3{font-size:17px;margin:0 0 5px}
.step p{color:#b7cce3;font-size:15px;line-height:1.45}
.hint{margin-top:25px;padding:13px 14px;border:1px solid #1a4e72;border-radius:12px;background:#0a2742;color:#a9c6df;font-size:12px}
.toast{position:fixed;right:22px;bottom:22px;padding:12px 17px;border:1px solid #1d8a6a;border-radius:10px;background:#063c36;color:#d5fff1;box-shadow:var(--shadow);opacity:0;transform:translateY(10px);pointer-events:none;transition:.2s}
.toast.show{opacity:1;transform:translateY(0)}

/* RESPONSIVE */
@media(max-width:1150px){
.layout{grid-template-columns:1fr}
.guide{display:grid;grid-template-columns:1fr 2fr;gap:18px}
.guide-title{align-self:start;border:0;padding:8px 0}
.steps{padding-top:0;grid-template-columns:repeat(3,1fr);gap:12px}
.step{grid-template-columns:38px 1fr;gap:9px}
.number{width:36px;height:36px;font-size:18px}
.step:not(:last-child):after{display:none}
.step h3{font-size:14px}
.step p{font-size:12px}
.hint{grid-column:1/-1;margin-top:0}
}
@media(max-width:760px){
.top-row{grid-template-columns:1fr;justify-items:center;gap:12px}
.floor-label{justify-self:center;text-align:center}
.top-row span{display:none}
.topbar{height:72px}
.brand-mark{width:43px;height:43px}
.brand-name{font-size:21px}
.profile small{display:none}
.profile{padding-left:12px}
.page{padding-top:20px}
.heading-icon{width:60px;height:60px;font-size:30px}
.heading p{font-size:13px}
.workspace{padding:15px}
.toolbar{grid-template-columns:1fr 1fr;gap:10px}
.floor-select,.search-wrap,.search-btn{grid-column:1/-1}
.search-btn{height:48px}
.topology-card{grid-template-columns:1fr;gap:18px;padding:15px}
.detail{border-left:0;border-top:1px solid #24628e;padding:18px 0 0}
.detail-box{padding:17px}
.guide{display:block}
.steps{grid-template-columns:1fr;gap:18px}
.step:not(:last-child):after{display:block;top:40px;height:35px}
.guide-title{border-bottom:1px solid #24618c;padding-bottom:15px}
.hint{margin-top:20px}
}
@media(max-width:480px){
.brand-name{font-size:18px}
.brand-name small{font-size:7px}
.top-actions{gap:12px}
.avatar{width:36px;height:36px}
.profile{font-size:13px}
.breadcrumb{font-size:12px;gap:9px}
.heading{gap:12px}
.heading-icon{width:50px;height:50px;font-size:25px}
.heading h1{font-size:22px}
.workspace{padding:11px}
.port{font-size:10px;padding:4px 6px;gap:3px}
.pc{min-height:78px;padding:8px 2px}
.pc .monitor{font-size:22px}
.pc strong{font-size:12px}
.pc small{font-size:8px}
.switch-node strong{font-size:19px}
.switch-node small{font-size:13px}
.detail-row{grid-template-columns:90px 1fr;font-size:12px}
.detail-title{font-size:20px}
.guide{padding:18px}
}
</style>
</head>

<body>

<!-- HEADER -->
<header class="topbar">
  <a class="brand" href="/">
    <span class="brand-mark">⌘</span>
    <span class="brand-name">TORIN<small>NETWORK SOLUTIONS</small></span>
  </a>

  <div class="top-actions">
    <span class="bell" aria-label="Notifikasi">♧</span>
    <div class="profile">
      <span class="avatar">♙</span>
      <span>Teknisi <small>⌄</small></span>
    </div>
  </div>
</header>

<main class="page">

  <!-- BREADCRUMB -->
  <nav class="breadcrumb">
    <span class="home">⌂</span>
    <span>/</span>
    <span>Topologi Jaringan</span>
    <span>/</span>
    <strong>Teknisi</strong>
  </nav>

  <!-- JUDUL -->
  <section class="heading">
    <div class="heading-icon">🔧</div>
    <div>
      <h1>Topologi Jaringan / Teknisi</h1>
      <p>Kelola dan lihat detail koneksi perangkat pada jaringan.</p>
    </div>
  </section>

  <div class="layout">

    <!-- AREA TOPOLOGI -->
    <section class="workspace" aria-label="Visualisasi topologi jaringan">

      <!-- FILTER DAN PENCARIAN -->
      <div class="toolbar">
        <select class="control floor-select" id="floorSelect" aria-label="Pilih lantai">
          <option value="all">▰ Semua Lantai</option>
          <option value="1" selected>▰ Lantai 1</option>
          <option value="2">▰ Lantai 2</option>
          <option value="3">▰ Lantai 3</option>
          <option value="4">▰ Lantai 4</option>
          <option value="5">▰ Lantai 5</option>
        </select>

        <label class="search-wrap">
          <span>⌕</span>
          <input class="control" id="searchInput" type="search" placeholder="Cari kode atau nama PC..." autocomplete="off">
        </label>

        <button class="search-btn" id="searchBtn" type="button">Cari</button>
      </div>

      <!-- GAMBAR TOPOLOGI DAN DETAIL -->
      <div class="topology-card">

        <div class="diagram" id="diagram">
          <div id="topology"></div>
        </div>

        <!-- DETAIL PC -->
        <aside class="detail">
          <div class="detail-box">
            <h2 class="detail-title"><span>▣</span>Detail PC</h2>

            <div class="detail-row"><span>Kode PC</span><strong id="detailCode">PC01</strong></div>
            <div class="detail-row"><span>Nama</span><strong id="detailName">Komputer Lab 01</strong></div>
            <div class="detail-row"><span>Router</span><strong id="detailRouter">Router Lantai 1</strong></div>
            <div class="detail-row"><span>Port</span><strong id="detailPort">01</strong></div>
            <div class="detail-row"><span>Lantai</span><strong id="detailFloor">Lantai 1</strong></div>

            <div class="connection-status" id="detailStatus">● Terhubung</div>
          </div>
        </aside>

      </div>
    </section>

    <!-- PANDUAN -->
    <aside class="guide">
      <h2 class="guide-title"><span class="info-icon">i</span>Panduan Penggunaan</h2>

      <div class="steps">
        <div class="step">
          <span class="number">1</span>
          <div><h3>Pilih konteks</h3><p>Filter lantai untuk melihat topologi pada lantai tertentu.</p></div>
        </div>
        <div class="step">
          <span class="number">2</span>
          <div><h3>Temukan PC</h3><p>Cari menggunakan kode atau nama perangkat.</p></div>
        </div>
        <div class="step">
          <span class="number">3</span>
          <div><h3>Baca sambungan</h3><p>Pilih perangkat untuk melihat switch dan nomor port.</p></div>
        </div>
      </div>

      <div class="hint">
        ⓘ Data perangkat pada halaman ini merupakan data simulasi.
        Jumlah PC dan port tiap lantai dapat disesuaikan dengan kondisi jaringan sebenarnya.
      </div>
    </aside>

  </div>
</main>

<div class="toast" id="toast" role="status" aria-live="polite"></div>

<script>
// DATA PERANGKAT: jumlah PC (= jumlah port) berbeda tiap lantai
const floorConfig = [
  { floor: "1", count: 12, label: "Komputer Lab" },
  { floor: "2", count: 15, label: "Komputer Administrasi" },
  { floor: "3", count: 18, label: "Komputer Server" },
  { floor: "4", count: 10, label: "Komputer Teknisi" },
  { floor: "5", count: 20, label: "Komputer Direksi" }
];

const floorData = {};
let counter = 0;

floorConfig.forEach(({ floor, count, label }) => {
  floorData[floor] = {
    ports: count,
    pcs: Array.from({ length: count }, (_, i) => {
      counter++;
      const port = String(i + 1).padStart(2, "0");
      return {
        code: "PC" + String(counter).padStart(2, "0"),
        name: `${label} ${port}`,
        port,
        status: counter % 7 === 0 ? "offline" : "online"
      };
    })
  };
});

// ELEMEN HTML
const floorSelect = document.getElementById("floorSelect");
const searchInput = document.getElementById("searchInput");
const topology = document.getElementById("topology");
const toast = document.getElementById("toast");

let activeFloor = "1";
let selectedDevice = floorData[1].pcs[0];
let toastTimer;

// NOTIFIKASI
function showToast(message) {
  toast.textContent = message;
  toast.classList.add("show");
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => toast.classList.remove("show"), 2400);
}

// SEMUA DATA PC
function allDevices() {
  return Object.entries(floorData).flatMap(([floor, data]) =>
    data.pcs.map(pc => ({ ...pc, floor }))
  );
}

// TAMPILKAN TOPOLOGI (setiap lantai punya router sendiri)
function renderTopology() {
  const query = searchInput.value.trim().toLowerCase();
  const floors = activeFloor === "all" ? Object.keys(floorData) : [activeFloor];

  const visible = floors
    .map(floor => ({
      floor,
      pcs: floorData[floor].pcs
        .map(pc => ({ ...pc, floor }))
        .filter(pc => [pc.code, pc.name].join(" ").toLowerCase().includes(query))
    }))
    .filter(item => item.pcs.length);

  const filtered = visible.flatMap(item => item.pcs);

  topology.innerHTML = "";

  if (!filtered.length) {
    topology.innerHTML = `
      <div class="empty-floor">
        Perangkat tidak ditemukan pada pilihan lantai ini.
      </div>`;
    return;
  }

  // PILIH PC PERTAMA JIKA PC SEBELUMNYA TIDAK ADA
  if (!filtered.some(pc => pc.code === selectedDevice?.code)) {
    selectedDevice = filtered[0];
  }

  // SATU BAGIAN PER LANTAI: LABEL LANTAI + ROUTER + PC
  visible.forEach(({ floor, pcs }) => {
    const section = document.createElement("div");
    section.className = "floor-section";

    section.innerHTML = `
      <div class="top-row">
        <div class="floor-label">
          <strong>Lantai ${floor}</strong>
          <small>${floorData[floor].ports} Port</small>
        </div>
        <div class="router-node">
          <strong>ROUTER</strong>
          <small>Router Lantai ${floor}</small>
        </div>
        <span></span>
      </div>
      <div class="link"></div>
      <div class="branches">
        ${pcs.map(pc => `
          <div class="device-branch">
            <div class="port"><b>▣</b> Port ${pc.port}</div>
            <button type="button"
              class="pc ${pc.status === "offline" ? "offline" : ""} ${selectedDevice.code === pc.code ? "selected" : ""}"
              data-code="${pc.code}">
              <span class="monitor">▣</span>
              <strong>${pc.code}</strong>
            </button>
          </div>`).join("")}
      </div>`;

    topology.appendChild(section);
  });

  updateDetail(selectedDevice);

  // KLIK PC
  topology.querySelectorAll("[data-code]").forEach(button => {
    button.addEventListener("click", () => {
      selectedDevice = filtered.find(pc => pc.code === button.dataset.code);
      updateDetail(selectedDevice);

      topology.querySelectorAll(".pc").forEach(el => {
        el.classList.toggle("selected", el.dataset.code === selectedDevice.code);
      });
    });
  });
}

// DETAIL PC
function updateDetail(pc) {
  if (!pc) return;

  document.getElementById("detailCode").textContent = pc.code;
  document.getElementById("detailName").textContent = pc.name;
  document.getElementById("detailPort").textContent = pc.port;
  document.getElementById("detailFloor").textContent = `Lantai ${pc.floor}`;
  document.getElementById("detailRouter").textContent = `Router Lantai ${pc.floor}`;

  const status = document.getElementById("detailStatus");
  status.textContent = pc.status === "online" ? "● Terhubung" : "● Tidak Terhubung";
  status.classList.toggle("offline", pc.status !== "online");
}

// PILIH LANTAI
floorSelect.addEventListener("change", () => {
  activeFloor = floorSelect.value;
  selectedDevice = null;
  renderTopology();
});

// PENCARIAN
searchInput.addEventListener("input", renderTopology);

document.getElementById("searchBtn").addEventListener("click", () => {
  renderTopology();

  const query = searchInput.value.trim().toLowerCase();
  const found = allDevices().find(pc =>
    [pc.code, pc.name].join(" ").toLowerCase().includes(query)
  );

  if (query && !found) showToast("Perangkat tidak ditemukan.");
});

// TAMPILKAN DATA PERTAMA KALI
renderTopology();
</script>

</body>
</html>