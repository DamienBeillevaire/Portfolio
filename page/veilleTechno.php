 <title>Veille GPU 2024–2026</title>
    <style>
        :root {
            --bg: #ffffff;
            --surface: #F0F2F5;
            --surface2: #F0F2F5;
            --border: rgba(255,255,255,0.07);
            --border2: #000000;
            --text: #212529;
            --muted: #7a7a90;
            --dim: #3a3a50;
            --nv: #76b900;
            --nv-soft: rgba(118,185,0,0.12);
            --amd: #e8464a;
            --amd-soft: rgba(232,70,74,0.12);
            --intel: #0071c5;
            --intel-soft: rgba(0,113,197,0.12);
            --accent: #212529;
            --accent-soft: rgba(200,184,255,0.1);
            --gold: #f4b942;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            line-height: 1.6;
            min-height: 100vh;
        }

        /* Noise overlay */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 0;
        }

        /* Grid overlay */
        body::after {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                    linear-gradient(rgba(255,255,255,0.015) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,0.015) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
            z-index: 0;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 32px;
            position: relative;
            z-index: 1;
        }

        /* ── HEADER ── */
        header {
            padding: 60px 0 48px;
            border-bottom: 1px solid var(--border);
        }

        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 24px;
            flex-wrap: wrap;
        }

        .header-eyebrow {
            font-family: 'DM Sans', sans-serif;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .header-eyebrow::before {
            content: '';
            display: inline-block;
            width: 20px;
            height: 1px;
            background: var(--accent);
        }

        h1 {
            font-family: 'Syne', sans-serif;
            font-size: clamp(40px, 6vw, 72px);
            font-weight: 800;
            line-height: 0.95;
            letter-spacing: -0.02em;
            color: var(--text);
        }

        h1 span {
            color: var(--accent);
        }

        .header-meta {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 6px;
        }

        .header-date {
            font-size: 13px;
            color: var(--muted);
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(118,185,0,0.1);
            border: 1px solid rgba(118,185,0,0.25);
            color: var(--nv);
            font-size: 11px;
            font-weight: 500;
            padding: 5px 12px;
            border-radius: 99px;
            letter-spacing: 0.04em;
        }

        .status-pill::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--nv);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }

        /* ── TIMELINE ── */
        .timeline-section {
            padding: 48px 0 40px;
            border-bottom: 1px solid var(--border);
            overflow: hidden;
        }

        .section-label {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 24px;
        }

        .timeline-track {
            position: relative;
            display: flex;
            gap: 0;
        }

        .timeline-track::before {
            content: '';
            position: absolute;
            top: 12px;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border2) 10%, var(--border2) 90%, transparent);
        }

        .tl-item {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            cursor: default;
            opacity: 0;
            animation: fadeUp 0.4s ease forwards;
        }

        .tl-item:nth-child(1) { animation-delay: 0.05s; }
        .tl-item:nth-child(2) { animation-delay: 0.1s; }
        .tl-item:nth-child(3) { animation-delay: 0.15s; }
        .tl-item:nth-child(4) { animation-delay: 0.2s; }
        .tl-item:nth-child(5) { animation-delay: 0.25s; }
        .tl-item:nth-child(6) { animation-delay: 0.3s; }
        .tl-item:nth-child(7) { animation-delay: 0.35s; }
        .tl-item:nth-child(8) { animation-delay: 0.4s; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .tl-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 2px solid var(--bg);
            flex-shrink: 0;
            position: relative;
            z-index: 1;
        }

        .tl-body {
            text-align: center;
        }

        .tl-date {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 3px;
        }

        .tl-event {
            font-size: 11px;
            color: var(--text);
            line-height: 1.3;
            max-width: 88px;
        }

        /* ── NAV TABS ── */
        .nav-tabs {
            display: flex;
            gap: 2px;
            padding: 24px 0;
            border-bottom: 1px solid var(--border);
            overflow-x: auto;
        }

        .nav-tab {
            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            font-weight: 500;
            padding: 8px 20px;
            border-radius: 8px;
            border: none;
            background: transparent;
            color: var(--muted);
            cursor: pointer;
            transition: all 0.2s;
            white-space: nowrap;
            letter-spacing: 0.01em;
        }

        .nav-tab:hover {
            color: var(--text);
            background: var(--surface2);
        }

        .nav-tab.active {
            background: var(--accent-soft);
            color: var(--accent);
            border: 1px solid rgba(200,184,255,0.2);
        }

        /* ── CONTENT PANELS ── */
        .panel { display: none; padding: 36px 0; }
        .panel.active { display: block; }

        /* ── GPU GRID ── */
        .gpu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 16px;
        }

        .gpu-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 22px 24px;
            transition: border-color 0.2s, transform 0.2s;
            position: relative;
            overflow: hidden;
        }

        .gpu-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            opacity: 0;
            transition: opacity 0.2s;
        }

        .gpu-card:hover {
            border-color: var(--border2);
            transform: translateY(-2px);
        }

        .gpu-card:hover::before { opacity: 1; }

        .gpu-card.nv::before { background: linear-gradient(90deg, transparent, var(--nv), transparent); }
        .gpu-card.amd::before { background: linear-gradient(90deg, transparent, var(--amd), transparent); }
        .gpu-card.intel::before { background: linear-gradient(90deg, transparent, var(--intel), transparent); }
        .gpu-card.featured { border-color: rgba(200,184,255,0.25); }
        .gpu-card.featured::before { background: linear-gradient(90deg, transparent, var(--accent), transparent); opacity: 0.6; }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 14px;
        }

        .badge {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 3px 9px;
            border-radius: 5px;
        }

        .badge.nv { background: var(--nv-soft); color: var(--nv); border: 1px solid rgba(118,185,0,0.2); }
        .badge.amd { background: var(--amd-soft); color: var(--amd); border: 1px solid rgba(232,70,74,0.2); }
        .badge.intel { background: var(--intel-soft); color: var(--intel); border: 1px solid rgba(0,113,197,0.2); }

        .card-price {
            text-align: right;
        }

        .price-val {
            font-family: 'Syne', sans-serif;
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
        }

        .price-date {
            font-size: 10px;
            color: var(--muted);
            margin-top: 1px;
        }

        .gpu-name {
            font-family: 'Syne', sans-serif;
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 2px;
            letter-spacing: -0.01em;
        }

        .gpu-arch {
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 16px;
        }

        .specs-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px 16px;
            margin-bottom: 16px;
            padding: 12px;
            background: var(--surface2);
            border-radius: 10px;
        }

        .spec-item {}
        .spec-k {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.07em;
            color: var(--muted);
            margin-bottom: 2px;
        }
        .spec-v {
            font-size: 13px;
            font-weight: 500;
            color: var(--text);
        }

        /* Performance bars */
        .perf-section { margin-bottom: 14px; }
        .perf-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 7px;
        }
        .perf-cat {
            font-size: 10px;
            color: var(--muted);
            width: 65px;
            flex-shrink: 0;
            letter-spacing: 0.03em;
        }
        .bar-bg {
            flex: 1;
            height: 5px;
            background: var(--surface2);
            border-radius: 99px;
            overflow: hidden;
        }
        .bar-fill {
            height: 100%;
            border-radius: 99px;
            width: 0;
            transition: width 1s cubic-bezier(0.4,0,0.2,1);
        }
        .bar-pct {
            font-size: 10px;
            color: var(--muted);
            width: 28px;
            text-align: right;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-bottom: 12px;
        }

        .tag {
            font-size: 10px;
            padding: 3px 8px;
            border-radius: 5px;
            font-weight: 500;
            letter-spacing: 0.04em;
        }
        .tag-gaming { background: rgba(0,113,197,0.12); color: #60a0e8; border: 1px solid rgba(0,113,197,0.2); }
        .tag-4k { background: rgba(244,185,66,0.1); color: var(--gold); border: 1px solid rgba(244,185,66,0.2); }
        .tag-budget { background: rgba(52,211,153,0.1); color: #34d399; border: 1px solid rgba(52,211,153,0.2); }
        .tag-ai { background: rgba(200,184,255,0.1); color: var(--accent); border: 1px solid rgba(200,184,255,0.2); }

        .verdict {
            font-size: 12px;
            color: var(--muted);
            line-height: 1.6;
            padding-top: 12px;
            border-top: 1px solid var(--border);
        }

        .featured-label {
            position: absolute;
            top: 16px;
            right: 16px;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--accent);
            background: var(--accent-soft);
            border: 1px solid rgba(200,184,255,0.2);
            padding: 3px 9px;
            border-radius: 5px;
        }

        /* ── TECH SECTION ── */
        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 16px;
        }

        .tech-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 22px 24px;
            transition: border-color 0.2s;
        }

        .tech-card:hover { border-color: var(--border2); }

        .tech-owner {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.07em;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .tech-name {
            font-family: 'Syne', sans-serif;
            font-size: 18px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 4px;
            letter-spacing: -0.01em;
        }

        .tech-gen {
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 12px;
            font-style: italic;
        }

        .tech-desc {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.7;
        }

        /* ── COMPARE TABLE ── */
        .table-wrap {
            overflow-x: auto;
            border-radius: 16px;
            border: 1px solid var(--border);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        thead tr {
            background: var(--surface2);
        }

        th {
            padding: 12px 16px;
            text-align: left;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--muted);
            white-space: nowrap;
            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 13px 16px;
            border-bottom: 1px solid var(--border);
            color: var(--text);
            vertical-align: middle;
        }

        tr:last-child td { border-bottom: none; }
        tr:hover td { background: var(--surface2); }
        tr.highlight td { background: rgba(200,184,255,0.04); }
        tr.highlight td:first-child { border-left: 2px solid var(--accent); }

        .dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-right: 8px;
            vertical-align: middle;
        }

        .stars { color: var(--gold); letter-spacing: 1px; }
        .best-tag {
            font-size: 10px;
            background: rgba(200,184,255,0.12);
            color: var(--accent);
            border: 1px solid rgba(200,184,255,0.2);
            padding: 2px 7px;
            border-radius: 5px;
            margin-left: 6px;
            font-weight: 600;
        }

        /* ── MARKET ── */
        .market-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }

        @media (max-width: 680px) {
            .market-grid { grid-template-columns: 1fr; }
            .gpu-grid { grid-template-columns: 1fr; }
            .tech-grid { grid-template-columns: 1fr; }
            h1 { font-size: 40px; }
            .header-inner { flex-direction: column; align-items: flex-start; }
        }

        .market-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 22px 24px;
        }

        .market-card-title {
            font-family: 'Syne', sans-serif;
            font-size: 15px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 14px;
            letter-spacing: -0.01em;
        }

        .seg-row {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }

        .seg-label {
            font-size: 11px;
            color: var(--muted);
            width: 120px;
            flex-shrink: 0;
        }

        .seg-bar {
            flex: 1;
            height: 24px;
            border-radius: 6px;
            overflow: hidden;
            display: flex;
            background: var(--surface2);
        }

        .seg-part {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 600;
            transition: width 1s cubic-bezier(0.4,0,0.2,1);
        }

        .seg-nv { background: rgba(118,185,0,0.25); color: var(--nv); }
        .seg-amd { background: rgba(232,70,74,0.25); color: var(--amd); }
        .seg-intel { background: rgba(0,113,197,0.25); color: var(--intel); }

        .insight-list { list-style: none; }
        .insight-list li {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.6;
            padding: 8px 0;
            border-bottom: 1px solid var(--border);
            display: flex;
            gap: 10px;
            align-items: flex-start;
        }
        .insight-list li:last-child { border-bottom: none; }
        .insight-list li::before {
            content: '→';
            color: var(--accent);
            flex-shrink: 0;
            margin-top: 1px;
        }

        .reco-table { width: 100%; border-collapse: collapse; font-size: 13px; }
        .reco-table th {
            text-align: left; padding: 10px 14px;
            font-size: 10px; font-weight: 600;
            text-transform: uppercase; letter-spacing: 0.08em;
            color: var(--muted);
            border-bottom: 1px solid var(--border);
            background: var(--surface2);
        }
        .reco-table td {
            padding: 11px 14px;
            border-bottom: 1px solid var(--border);
            color: var(--text);
        }
        .reco-table tr:last-child td { border-bottom: none; }
        .reco-table tr:hover td { background: var(--surface2); }
        .reco-best { color: var(--accent); font-weight: 500; }

        /* Footer */
        footer {
            padding: 32px 0;
            border-top: 1px solid var(--border);
            margin-top: 24px;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .footer-text {
            font-size: 12px;
            color: var(--dim);
        }

        .footer-sources {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .source-link {
            font-size: 11px;
            color: var(--dim);
            text-decoration: none;
            transition: color 0.2s;
        }

        .source-link:hover { color: var(--muted); }
    </style>

 <div class="defaultContainer">
     <div class="main-align">
        <div class="container">
            <!-- HEADER -->
            <header>
                <div class="header-inner">
                    <div>
                        <div class="header-eyebrow">Veille technologique</div>
                        <h1>Cartes<br><span>Graphiques</span><br>2024–26</h1>
                    </div>
                    <div class="header-meta">
                        <div class="header-date">Mise à jour — Avril 2026</div>
                        <div class="status-pill">Marché stable</div>
                    </div>
                </div>
            </header>

            <!-- TIMELINE -->
            <section class="timeline-section">
                <div class="section-label">Chronologie des événements clés</div>
                <div class="timeline-track">
                    <div class="tl-item">
                        <div class="tl-dot" style="background:#76b900"></div>
                        <div class="tl-body">
                            <div class="tl-date">Sep. 2024</div>
                            <div class="tl-event">RTX 40 Super baisses de prix</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot" style="background:#0071c5"></div>
                        <div class="tl-body">
                            <div class="tl-date">3 Déc. 2024</div>
                            <div class="tl-event">Arc B580 Battlemage annoncé</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot" style="background:#0071c5"></div>
                        <div class="tl-body">
                            <div class="tl-date">13 Déc. 2024</div>
                            <div class="tl-event">Arc B580 disponible — 249 $</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot" style="background:#76b900"></div>
                        <div class="tl-body">
                            <div class="tl-date">7 Jan. 2025</div>
                            <div class="tl-event">CES · RTX 50 annoncé + DLSS 4</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot" style="background:#76b900"></div>
                        <div class="tl-body">
                            <div class="tl-date">30 Jan. 2025</div>
                            <div class="tl-event">RTX 5090 & 5080 disponibles</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot" style="background:#76b900"></div>
                        <div class="tl-body">
                            <div class="tl-date">Fév. 2025</div>
                            <div class="tl-event">RTX 5070 Ti</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot" style="background:#e8464a"></div>
                        <div class="tl-body">
                            <div class="tl-date">Mar. 2025</div>
                            <div class="tl-event">RX 9070 XT &amp; 9070 RDNA 4</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot" style="background:#e8464a"></div>
                        <div class="tl-body">
                            <div class="tl-date">Mid 2025</div>
                            <div class="tl-event">RX 9060 XT 16 Go — budget king</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- NAVIGATION -->
            <nav class="nav-tabs">
                <button class="nav-tab active" onclick="showPanel('gpus',this)">Fiches GPU</button>
                <button class="nav-tab" onclick="showPanel('tech',this)">Technologies</button>
                <button class="nav-tab" onclick="showPanel('compare',this)">Comparatif</button>
                <button class="nav-tab" onclick="showPanel('market',this)">Marché &amp; Recommandations</button>
            </nav>

            <!-- PANEL : GPU CARDS -->
            <div id="panel-gpus" class="panel active">
                <div class="gpu-grid">

                    <!-- RTX 5090 -->
                    <div class="gpu-card nv">
                        <div class="card-top">
                            <span class="badge nv">NVIDIA</span>
                        </div>
                        <div class="gpu-name">RTX 5090</div>
                        <div class="gpu-arch">Blackwell · GB202 · TSMC 4N · GDDR7</div>
                        <div class="specs-row">
                            <div class="spec-item"><div class="spec-k">CUDA Cores</div><div class="spec-v">21 760</div></div>
                            <div class="spec-item"><div class="spec-k">VRAM</div><div class="spec-v">32 Go GDDR7</div></div>
                            <div class="spec-item"><div class="spec-k">Bande passante</div><div class="spec-v">1 792 Go/s</div></div>
                            <div class="spec-item"><div class="spec-k">TDP</div><div class="spec-v">575 W</div></div>
                        </div>
                        <div class="perf-section">
                            <div class="perf-row"><span class="perf-cat">Raster 4K</span><div class="bar-bg"><div class="bar-fill" style="background:var(--nv)" data-w="100"></div></div><span class="bar-pct">100</span></div>
                            <div class="perf-row"><span class="perf-cat">Ray Tracing</span><div class="bar-bg"><div class="bar-fill" style="background:var(--nv)" data-w="100"></div></div><span class="bar-pct">100</span></div>
                            <div class="perf-row"><span class="perf-cat">IA / DLSS</span><div class="bar-bg"><div class="bar-fill" style="background:var(--nv)" data-w="100"></div></div><span class="bar-pct">100</span></div>
                        </div>
                        <div class="tags">
                            <span class="tag tag-4k">4K Ultra</span>
                            <span class="tag tag-gaming">Gaming</span>
                            <span class="tag tag-ai">IA Pro</span>
                        </div>
                        <div class="verdict">La carte la plus puissante du marché grand public. +25–35% vs RTX 4090 en rasterisation. Problèmes de stock au lancement. Réservée aux ultra-enthousiastes et professionnels.</div>
                    </div>

                    <!-- RTX 5080 -->
                    <div class="gpu-card nv">
                        <div class="card-top">
                            <span class="badge nv">NVIDIA</span>
                        </div>
                        <div class="gpu-name">RTX 5080</div>
                        <div class="gpu-arch">Blackwell · GB203 · GDDR7</div>
                        <div class="specs-row">
                            <div class="spec-item"><div class="spec-k">CUDA Cores</div><div class="spec-v">10 752</div></div>
                            <div class="spec-item"><div class="spec-k">VRAM</div><div class="spec-v">16 Go GDDR7</div></div>
                            <div class="spec-item"><div class="spec-k">Bande passante</div><div class="spec-v">960 Go/s</div></div>
                            <div class="spec-item"><div class="spec-k">TDP</div><div class="spec-v">360 W</div></div>
                        </div>
                        <div class="perf-section">
                            <div class="perf-row"><span class="perf-cat">Raster 4K</span><div class="bar-bg"><div class="bar-fill" style="background:var(--nv)" data-w="78"></div></div><span class="bar-pct">78</span></div>
                            <div class="perf-row"><span class="perf-cat">Ray Tracing</span><div class="bar-bg"><div class="bar-fill" style="background:var(--nv)" data-w="80"></div></div><span class="bar-pct">80</span></div>
                            <div class="perf-row"><span class="perf-cat">IA / DLSS</span><div class="bar-bg"><div class="bar-fill" style="background:var(--nv)" data-w="82"></div></div><span class="bar-pct">82</span></div>
                        </div>
                        <div class="tags">
                            <span class="tag tag-4k">4K</span>
                            <span class="tag tag-gaming">Gaming</span>
                        </div>
                        <div class="verdict">Même MSRP que la RTX 4080 Super à son lancement. Critiquée pour seulement 16 Go VRAM à ce prix. Reine de la 4K pour un budget ~1 200 €.</div>
                    </div>

                    <!-- RTX 5070 Ti -->
                    <div class="gpu-card nv">
                        <div class="card-top">
                            <span class="badge nv">NVIDIA</span>
                        </div>
                        <div class="gpu-name">RTX 5070 Ti</div>
                        <div class="gpu-arch">Blackwell · GDDR7 · 16 Go</div>
                        <div class="specs-row">
                            <div class="spec-item"><div class="spec-k">CUDA Cores</div><div class="spec-v">8 960</div></div>
                            <div class="spec-item"><div class="spec-k">VRAM</div><div class="spec-v">16 Go GDDR7</div></div>
                            <div class="spec-item"><div class="spec-k">Boost</div><div class="spec-v">2,45 GHz</div></div>
                            <div class="spec-item"><div class="spec-k">TDP</div><div class="spec-v">300 W</div></div>
                        </div>
                        <div class="perf-section">
                            <div class="perf-row"><span class="perf-cat">Raster 4K</span><div class="bar-bg"><div class="bar-fill" style="background:var(--nv)" data-w="68"></div></div><span class="bar-pct">68</span></div>
                            <div class="perf-row"><span class="perf-cat">Ray Tracing</span><div class="bar-bg"><div class="bar-fill" style="background:var(--nv)" data-w="72"></div></div><span class="bar-pct">72</span></div>
                            <div class="perf-row"><span class="perf-cat">IA / DLSS</span><div class="bar-bg"><div class="bar-fill" style="background:var(--nv)" data-w="75"></div></div><span class="bar-pct">75</span></div>
                        </div>
                        <div class="tags">
                            <span class="tag tag-gaming">1440p Ultra</span>
                            <span class="tag tag-4k">4K confort</span>
                        </div>
                        <div class="verdict">IGN : "première RTX 5000 qui justifie vraiment son prix". Meilleur choix NVIDIA pour le 1440p + Ray Tracing. Difficile à trouver au MSRP en 2025.</div>
                    </div>

                    <!-- RX 9070 XT -->
                    <div class="gpu-card amd featured">
                        <div class="card-top">
                            <span class="badge amd">AMD</span>
                        </div>
                        <div class="gpu-name">RX 9070 XT</div>
                        <div class="gpu-arch">RDNA 4 · Navi 48 · 16 Go GDDR6</div>
                        <div class="specs-row">
                            <div class="spec-item"><div class="spec-k">Compute Units</div><div class="spec-v">64 CU</div></div>
                            <div class="spec-item"><div class="spec-k">VRAM</div><div class="spec-v">16 Go GDDR6</div></div>
                            <div class="spec-item"><div class="spec-k">AI TOPs</div><div class="spec-v">1 557 TOPS</div></div>
                            <div class="spec-item"><div class="spec-k">TDP</div><div class="spec-v">~220 W</div></div>
                        </div>
                        <div class="perf-section">
                            <div class="perf-row"><span class="perf-cat">Raster 4K</span><div class="bar-bg"><div class="bar-fill" style="background:var(--amd)" data-w="63"></div></div><span class="bar-pct">63</span></div>
                            <div class="perf-row"><span class="perf-cat">Ray Tracing</span><div class="bar-bg"><div class="bar-fill" style="background:var(--amd)" data-w="58"></div></div><span class="bar-pct">58</span></div>
                            <div class="perf-row"><span class="perf-cat">FSR 4</span><div class="bar-bg"><div class="bar-fill" style="background:var(--amd)" data-w="60"></div></div><span class="bar-pct">60</span></div>
                        </div>
                        <div class="tags">
                            <span class="tag tag-gaming">1440p</span>
                            <span class="tag tag-budget">Meilleure valeur</span>
                        </div>
                        <div class="verdict">Véritable disrupteur du marché. Part de marché AMD à 45% post-lancement. Ruptures de stock immédiates. Rivalise avec la RTX 5070 Ti en rasterisation pour 150 € de moins.</div>
                    </div>

                    <!-- RX 9070 -->
                    <div class="gpu-card amd">
                        <div class="card-top">
                            <span class="badge amd">AMD</span>
                        </div>
                        <div class="gpu-name">RX 9070</div>
                        <div class="gpu-arch">RDNA 4 · Navi 48 · 16 Go GDDR6</div>
                        <div class="specs-row">
                            <div class="spec-item"><div class="spec-k">Compute Units</div><div class="spec-v">56 CU</div></div>
                            <div class="spec-item"><div class="spec-k">VRAM</div><div class="spec-v">16 Go GDDR6</div></div>
                            <div class="spec-item"><div class="spec-k">Boost</div><div class="spec-v">2,75 GHz</div></div>
                            <div class="spec-item"><div class="spec-k">vs XT</div><div class="spec-v">~5% moins rapide</div></div>
                        </div>
                        <div class="perf-section">
                            <div class="perf-row"><span class="perf-cat">Raster 4K</span><div class="bar-bg"><div class="bar-fill" style="background:var(--amd)" data-w="58"></div></div><span class="bar-pct">58</span></div>
                            <div class="perf-row"><span class="perf-cat">Ray Tracing</span><div class="bar-bg"><div class="bar-fill" style="background:var(--amd)" data-w="53"></div></div><span class="bar-pct">53</span></div>
                            <div class="perf-row"><span class="perf-cat">FSR 4</span><div class="bar-bg"><div class="bar-fill" style="background:var(--amd)" data-w="55"></div></div><span class="bar-pct">55</span></div>
                        </div>
                        <div class="tags">
                            <span class="tag tag-gaming">1440p</span>
                            <span class="tag tag-budget">Valeur solide</span>
                        </div>
                        <div class="verdict">Alternative équilibrée à la XT. 16 Go VRAM RDNA 4 — future-proof. Idéale pour le 1440p sans dépasser 600 €. Architecture très efficiente énergétiquement.</div>
                    </div>

                    <!-- RX 9060 XT 16G -->
                    <div class="gpu-card amd">
                        <div class="card-top">
                            <span class="badge amd">AMD</span>
                        </div>
                        <div class="gpu-name">RX 9060 XT 16G</div>
                        <div class="gpu-arch">RDNA 4 · Entrée/milieu de gamme</div>
                        <div class="specs-row">
                            <div class="spec-item"><div class="spec-k">VRAM</div><div class="spec-v">16 Go GDDR6</div></div>
                            <div class="spec-item"><div class="spec-k">Cible</div><div class="spec-v">1080p Ultra</div></div>
                            <div class="spec-item"><div class="spec-k">Consommation</div><div class="spec-v">~150 W</div></div>
                            <div class="spec-item"><div class="spec-k">vs RTX 5060 Ti</div><div class="spec-v">−50 à 100 €</div></div>
                        </div>
                        <div class="perf-section">
                            <div class="perf-row"><span class="perf-cat">Raster 1080p</span><div class="bar-bg"><div class="bar-fill" style="background:var(--amd)" data-w="42"></div></div><span class="bar-pct">42</span></div>
                            <div class="perf-row"><span class="perf-cat">Ray Tracing</span><div class="bar-bg"><div class="bar-fill" style="background:var(--amd)" data-w="36"></div></div><span class="bar-pct">36</span></div>
                        </div>
                        <div class="tags">
                            <span class="tag tag-budget">Budget</span>
                            <span class="tag tag-gaming">1080p Ultra</span>
                        </div>
                        <div class="verdict">16 Go VRAM rarissimes à ce prix. Meilleur rapport Q/P sur le segment Full HD. Rivale directe de la RTX 5060 Ti à tarif inférieur. Référence incontournable sous 400 €.</div>
                    </div>

                    <!-- Arc B580 -->
                    <div class="gpu-card intel">
                        <div class="card-top">
                            <span class="badge intel">Intel</span>
                        </div>
                        <div class="gpu-name">Arc B580</div>
                        <div class="gpu-arch">Battlemage · Xe2-HPG · 12 Go GDDR6</div>
                        <div class="specs-row">
                            <div class="spec-item"><div class="spec-k">Xe-Cores</div><div class="spec-v">20 (2 560 FP32)</div></div>
                            <div class="spec-item"><div class="spec-k">VRAM</div><div class="spec-v">12 Go GDDR6</div></div>
                            <div class="spec-item"><div class="spec-k">Bande passante</div><div class="spec-v">456 Go/s</div></div>
                            <div class="spec-item"><div class="spec-k">TDP</div><div class="spec-v">190 W</div></div>
                        </div>
                        <div class="perf-section">
                            <div class="perf-row"><span class="perf-cat">Raster 1080p</span><div class="bar-bg"><div class="bar-fill" style="background:var(--intel)" data-w="30"></div></div><span class="bar-pct">30</span></div>
                            <div class="perf-row"><span class="perf-cat">Ray Tracing</span><div class="bar-bg"><div class="bar-fill" style="background:var(--intel)" data-w="26"></div></div><span class="bar-pct">26</span></div>
                            <div class="perf-row"><span class="perf-cat">XeSS 2 / IA</span><div class="bar-bg"><div class="bar-fill" style="background:var(--intel)" data-w="34"></div></div><span class="bar-pct">34</span></div>
                        </div>
                        <div class="tags">
                            <span class="tag tag-budget">Budget</span>
                            <span class="tag tag-gaming">1080p/1440p</span>
                        </div>
                        <div class="verdict">La grande surprise de fin 2024. +70% perf/core vs Arc Alchemist. 12 Go VRAM à 249 $ — imbattable dans sa catégorie. Pilotes en amélioration constante en 2025. Intel est désormais une alternative crédible.</div>
                    </div>

                    <!-- Arc B570 -->
                    <div class="gpu-card intel">
                        <div class="card-top">
                            <span class="badge intel">Intel</span>
                        </div>
                        <div class="gpu-name">Arc B570</div>
                        <div class="gpu-arch">Battlemage · Xe2-HPG · 10 Go GDDR6</div>
                        <div class="specs-row">
                            <div class="spec-item"><div class="spec-k">Xe-Cores</div><div class="spec-v">18 (2 304 FP32)</div></div>
                            <div class="spec-item"><div class="spec-k">VRAM</div><div class="spec-v">10 Go GDDR6</div></div>
                            <div class="spec-item"><div class="spec-k">Bande passante</div><div class="spec-v">380 Go/s</div></div>
                            <div class="spec-item"><div class="spec-k">TDP</div><div class="spec-v">150 W</div></div>
                        </div>
                        <div class="perf-section">
                            <div class="perf-row"><span class="perf-cat">Raster 1080p</span><div class="bar-bg"><div class="bar-fill" style="background:var(--intel)" data-w="26"></div></div><span class="bar-pct">26</span></div>
                            <div class="perf-row"><span class="perf-cat">Efficacité E.</span><div class="bar-bg"><div class="bar-fill" style="background:var(--intel)" data-w="40"></div></div><span class="bar-pct">40</span></div>
                        </div>
                        <div class="tags">
                            <span class="tag tag-budget">Ultra budget</span>
                            <span class="tag tag-gaming">1080p</span>
                        </div>
                        <div class="verdict">L'entrée de gamme la plus récente et efficiente énergétiquement (150 W). 10 Go VRAM peuvent limiter les futurs AAA. Idéale pour les configurations compactes à petit budget.</div>
                    </div>

                </div>
            </div>

            <!-- PANEL : TECHNOLOGIES -->
            <div id="panel-tech" class="panel">
                <div class="tech-grid">

                    <div class="tech-card">
                        <div class="tech-owner" style="color:var(--nv)">NVIDIA · RTX 50 series exclusif</div>
                        <div class="tech-name">DLSS 4 Multi Frame Generation</div>
                        <div class="tech-gen">Génère jusqu'à 3 frames par frame rendue</div>
                        <div class="tech-desc">Basé sur des modèles Transformer (même architecture que GPT), génère jusqu'à 3 frames additionnelles par frame rendue. Multiplie les FPS par 8× en conjonction avec l'upscaling DLSS. Cyberpunk 2077 atteint 280 FPS en 4K Ultra sur RTX 5090. Rétrocompatible sur RTX 40 avec 1 frame générée.</div>
                    </div>

                    <div class="tech-card">
                        <div class="tech-owner" style="color:var(--nv)">NVIDIA · RTX 20+ (upscaling) / RTX 50 (MFG)</div>
                        <div class="tech-name">DLSS 4 Super Resolution</div>
                        <div class="tech-gen">Upscaling Transformer — meilleure qualité d'image</div>
                        <div class="tech-desc">L'upscaling DLSS migre vers une architecture Transformer, améliorant significativement la qualité d'image vs DLSS 3. Compatible +75 jeux via override dans le driver NVIDIA app. Ray Reconstruction et DLAA également mis à jour avec le modèle Transformer.</div>
                    </div>

                    <div class="tech-card">
                        <div class="tech-owner" style="color:var(--amd)">AMD · RX 9000 series (RDNA 4)</div>
                        <div class="tech-name">FSR 4 "Project Redstone"</div>
                        <div class="tech-gen">Upscaling IA + Frame Generation — nouveau cap AMD</div>
                        <div class="tech-desc">AMD franchit un cap majeur avec FSR 4 : upscaling assisté par IA rivalisant enfin avec DLSS en qualité d'image. Frame Generation incluse (FMF). 30+ jeux supportés au lancement. Pas de génération multi-images (contrairement au DLSS 4). Exclusif aux cartes RDNA 4.</div>
                    </div>

                    <div class="tech-card">
                        <div class="tech-owner" style="color:var(--intel)">Intel · Arc B-series Battlemage</div>
                        <div class="tech-name">XeSS 2</div>
                        <div class="tech-gen">Suite complète upscaling + génération + latence</div>
                        <div class="tech-desc">Suite complète : XeSS (upscaling IA), XeSS Frame Generation (jusqu'à 3,9× sur F1 24 en mode Ultra Performance), et XeLL (réduction latence similaire au NVIDIA Reflex). Ouverte aux GPU concurrents pour l'upscaling. Intel rattrape son retard sur l'IA graphique.</div>
                    </div>

                    <div class="tech-card">
                        <div class="tech-owner" style="color:var(--nv)">NVIDIA · Blackwell architecture</div>
                        <div class="tech-name">Tensor Cores 5e génération</div>
                        <div class="tech-gen">Triple la puissance IA vs Ada Lovelace</div>
                        <div class="tech-desc">Support FP4 natif pour l'inférence IA ultra-rapide. RT Cores 4e génération : 2× plus d'intersections rayon-triangle. GDDR7 avec jusqu'à 1 792 Go/s sur RTX 5090. DisplayPort 2.1b (8K à 165 Hz). Fabriqué en TSMC 4N process.</div>
                    </div>

                    <div class="tech-card">
                        <div class="tech-owner" style="color:var(--amd)">AMD · RDNA 4 architecture</div>
                        <div class="tech-name">AI Accelerators 2e génération</div>
                        <div class="tech-gen">8× le débit INT8 par CU · RT 2× vs RDNA 3</div>
                        <div class="tech-desc">FP8 data support natif. Débit INT8 multiplié par 8 par Compute Unit. Ray Tracing throughput doublé par CU. Focus assumé sur le mainstream — AMD abandonne le flagship à NVIDIA. 1 557 AI TOPS sur RX 9070 XT. Architecture très efficiente énergétiquement.</div>
                    </div>

                    <div class="tech-card">
                        <div class="tech-owner" style="color:var(--intel)">Intel · Xe2 Battlemage</div>
                        <div class="tech-name">Architecture Xe2</div>
                        <div class="tech-gen">+70% perf/core vs Xe1 · +50% perf/watt</div>
                        <div class="tech-desc">Première architecture Intel véritablement compétitive en gaming. XMX AI engines (matrices). Support AV1 encode/decode complet. PCIe 4.0 ×8. Pilotes en nette amélioration tout au long de 2025. Intel AI Playground intégré pour l'IA générative locale.</div>
                    </div>

                    <div class="tech-card">
                        <div class="tech-owner" style="color:var(--nv)">NVIDIA · RTX 50 series · 2025–2026</div>
                        <div class="tech-name">G-SYNC Pulsar</div>
                        <div class="tech-gen">Clarté de mouvement perçue >1 000 Hz</div>
                        <div class="tech-desc">Révolutionne la gestion de l'affichage en éliminant quasi-totalement le motion blur sur les écrans compatibles. Nécessite un écran G-SYNC Pulsar et une RTX 50 series avec DLSS 4 Multi Frame Generation activé. La prochaine frontière après les 240 Hz.</div>
                    </div>

                </div>
            </div>

            <!-- PANEL : COMPARE -->
            <div id="panel-compare" class="panel">
                <div class="table-wrap">
                    <table>
                        <thead>
                        <tr>
                            <th>GPU</th>
                            <th>Prix (€)</th>
                            <th>VRAM</th>
                            <th>Cible</th>
                            <th>Raster 4K</th>
                            <th>Ray Tracing</th>
                            <th>Upscaling IA</th>
                            <th>Verdict</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><span class="dot" style="background:var(--nv)"></span><strong>RTX 5090</strong></td>
                            <td>2 349</td>
                            <td>32 Go GDDR7</td>
                            <td>4K Ultra</td>
                            <td><span class="stars">★★★★★</span></td>
                            <td><span class="stars">★★★★★</span></td>
                            <td>DLSS 4 MFG</td>
                            <td>Niche enthousiastes</td>
                        </tr>
                        <tr>
                            <td><span class="dot" style="background:var(--nv)"></span><strong>RTX 5080</strong></td>
                            <td>1 179</td>
                            <td>16 Go GDDR7</td>
                            <td>4K</td>
                            <td><span class="stars">★★★★</span>☆</td>
                            <td><span class="stars">★★★★</span>☆</td>
                            <td>DLSS 4 MFG</td>
                            <td>4K sans compromis</td>
                        </tr>
                        <tr>
                            <td><span class="dot" style="background:var(--nv)"></span><strong>RTX 5070 Ti</strong></td>
                            <td>~900</td>
                            <td>16 Go GDDR7</td>
                            <td>1440p / 4K</td>
                            <td><span class="stars">★★★</span>☆☆</td>
                            <td><span class="stars">★★★★</span>☆</td>
                            <td>DLSS 4 MFG</td>
                            <td>Meilleur NVIDIA 1440p</td>
                        </tr>
                        <tr class="highlight">
                            <td><span class="dot" style="background:var(--amd)"></span><strong>RX 9070 XT</strong><span class="best-tag">⭐ Top Q/P</span></td>
                            <td>~650</td>
                            <td>16 Go GDDR6</td>
                            <td>1440p</td>
                            <td><span class="stars">★★★</span>☆☆</td>
                            <td><span class="stars">★★★</span>☆☆</td>
                            <td>FSR 4</td>
                            <td>Disrupteur du marché</td>
                        </tr>
                        <tr>
                            <td><span class="dot" style="background:var(--amd)"></span><strong>RX 9070</strong></td>
                            <td>~550</td>
                            <td>16 Go GDDR6</td>
                            <td>1440p</td>
                            <td><span class="stars">★★★</span>☆☆</td>
                            <td><span class="stars">★★</span>☆☆☆</td>
                            <td>FSR 4</td>
                            <td>Alternative équilibrée</td>
                        </tr>
                        <tr>
                            <td><span class="dot" style="background:var(--amd)"></span><strong>RX 9060 XT 16G</strong></td>
                            <td>~350</td>
                            <td>16 Go GDDR6</td>
                            <td>1080p Ultra</td>
                            <td><span class="stars">★★</span>☆☆☆</td>
                            <td><span class="stars">★</span>☆☆☆☆</td>
                            <td>FSR 4</td>
                            <td>Meilleur budget 2025</td>
                        </tr>
                        <tr>
                            <td><span class="dot" style="background:var(--intel)"></span><strong>Arc B580</strong></td>
                            <td>~249 $</td>
                            <td>12 Go GDDR6</td>
                            <td>1080p / 1440p</td>
                            <td><span class="stars">★</span>☆☆☆☆</td>
                            <td><span class="stars">★</span>☆☆☆☆</td>
                            <td>XeSS 2</td>
                            <td>Surprise Intel budget</td>
                        </tr>
                        <tr>
                            <td><span class="dot" style="background:var(--intel)"></span><strong>Arc B570</strong></td>
                            <td>~219 $</td>
                            <td>10 Go GDDR6</td>
                            <td>1080p</td>
                            <td>☆☆☆☆☆</td>
                            <td>☆☆☆☆☆</td>
                            <td>XeSS 2</td>
                            <td>Ultra entrée de gamme</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p style="font-size:11px;color:var(--dim);margin-top:10px">★ = performance relative sur 5 points · Basé sur benchmarks 3DMark Steel Nomad + 15 jeux en 1440p Ultra · Prix indicatifs avril 2026</p>
            </div>

            <!-- PANEL : MARKET -->
            <div id="panel-market" class="panel">

                <div class="market-grid">
                    <div class="market-card">
                        <div class="market-card-title">Répartition du marché par segment</div>
                        <div class="seg-row">
                            <span class="seg-label">Très haut de gamme</span>
                            <div class="seg-bar">
                                <div class="seg-part seg-nv" style="width:95%">NVIDIA 95%</div>
                                <div class="seg-part seg-amd" style="width:5%"></div>
                            </div>
                        </div>
                        <div class="seg-row">
                            <span class="seg-label">Haut de gamme</span>
                            <div class="seg-bar">
                                <div class="seg-part seg-nv" style="width:60%">NV 60%</div>
                                <div class="seg-part seg-amd" style="width:40%">AMD 40%</div>
                            </div>
                        </div>
                        <div class="seg-row">
                            <span class="seg-label">Milieu de gamme</span>
                            <div class="seg-bar">
                                <div class="seg-part seg-nv" style="width:45%">NV 45%</div>
                                <div class="seg-part seg-amd" style="width:45%">AMD 45%</div>
                                <div class="seg-part seg-intel" style="width:10%">10%</div>
                            </div>
                        </div>
                        <div class="seg-row">
                            <span class="seg-label">Budget</span>
                            <div class="seg-bar">
                                <div class="seg-part seg-nv" style="width:40%">NV 40%</div>
                                <div class="seg-part seg-amd" style="width:35%">AMD 35%</div>
                                <div class="seg-part seg-intel" style="width:25%">Intel 25%</div>
                            </div>
                        </div>
                    </div>

                    <div class="market-card">
                        <div class="market-card-title">Tendances &amp; enseignements clés</div>
                        <ul class="insight-list">
                            <li>NVIDIA domine le très haut de gamme sans opposition directe sur la RTX 5090. DLSS 4 creuse l'écart logiciel.</li>
                            <li>AMD abandonne délibérément le flagship pour se concentrer sur le mainstream. Pari payant : part de marché à 45% sur le mid-range.</li>
                            <li>Intel s'impose comme troisième acteur crédible sur le budget avec Battlemage, après des années de pilotes défaillants.</li>
                            <li>Ruptures de stock généralisées (RTX 5090, 5080, RX 9070 XT, B580). Le "sweet spot" se déplace vers le mid-range.</li>
                            <li>Pénurie GDDR7 16 Go en fin 2025. Tarifs douaniers US impactant les approvisionnements mondiaux.</li>
                        </ul>
                    </div>
                </div>

                <div class="market-card" style="margin-bottom: 16px;">
                    <div class="market-card-title">Recommandations d'achat — Avril 2026</div>
                    <div style="overflow-x:auto">
                        <table class="reco-table">
                            <thead>
                            <tr>
                                <th>Profil / Budget</th>
                                <th>Choix principal</th>
                                <th>Alternative</th>
                                <th>Note</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1080p · budget &lt; 300 €</td>
                                <td class="reco-best">Intel Arc B580 (12 Go)</td>
                                <td>Intel Arc B570</td>
                                <td>Meilleure VRAM à ce prix</td>
                            </tr>
                            <tr>
                                <td>1080p Ultra · ~350 €</td>
                                <td class="reco-best">AMD RX 9060 XT 16 Go</td>
                                <td>RTX 5060 Ti 8 Go*</td>
                                <td>*Prudence : 8 Go VRAM limitant</td>
                            </tr>
                            <tr>
                                <td>1440p · ~550–650 €</td>
                                <td class="reco-best">AMD RX 9070 XT ⭐</td>
                                <td>AMD RX 9070</td>
                                <td>Meilleur rapport Q/P du marché</td>
                            </tr>
                            <tr>
                                <td>1440p + Ray Tracing · ~900 €</td>
                                <td class="reco-best">NVIDIA RTX 5070 Ti</td>
                                <td>RX 9070 XT si budget serré</td>
                                <td>DLSS 4 = avantage RT</td>
                            </tr>
                            <tr>
                                <td>4K gaming · ~1 200 €</td>
                                <td class="reco-best">NVIDIA RTX 5080</td>
                                <td>—</td>
                                <td>Pas d'alternative AMD équivalente</td>
                            </tr>
                            <tr>
                                <td>4K Ultra / niche · 2 300 €+</td>
                                <td class="reco-best">NVIDIA RTX 5090</td>
                                <td>—</td>
                                <td>Réservé aux enthousiastes / pro</td>
                            </tr>
                            <tr>
                                <td>Création contenu / IA locale</td>
                                <td class="reco-best">RTX 5090 (32 Go GDDR7)</td>
                                <td>RTX 5080 (16 Go)</td>
                                <td>VRAM déterminante pour les LLM</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- FOOTER -->
            <footer>
                <div class="footer-inner">
                    <div class="footer-text">Veille GPU 2024–2026 · Sources vérifiées · Dernière mise à jour Avril 2026</div>
                    <div class="footer-sources">
                        <a href="https://www.tomshardware.com" class="source-link" target="_blank">Tom's Hardware</a>
                        <a href="https://www.ginjfo.com" class="source-link" target="_blank">GinjFo</a>
                        <a href="https://pausehardware.com" class="source-link" target="_blank">Pause Hardware</a>
                        <a href="https://www.nvidia.com" class="source-link" target="_blank">NVIDIA</a>
                        <a href="https://www.amd.com" class="source-link" target="_blank">AMD</a>
                        <a href="https://newsroom.intel.com" class="source-link" target="_blank">Intel Newsroom</a>
                    </div>
                </div>
            </footer>

        </div>

        <script>
            // Tab navigation
            function showPanel(id, btn) {
                document.querySelectorAll('.panel').forEach(p => p.classList.remove('active'));
                document.querySelectorAll('.nav-tab').forEach(b => b.classList.remove('active'));
                document.getElementById('panel-' + id).classList.add('active');
                btn.classList.add('active');
                animateBars();
            }

            // Animate bars on load and panel switch
            function animateBars() {
                requestAnimationFrame(() => {
                    document.querySelectorAll('.bar-fill[data-w]').forEach(el => {
                        el.style.width = el.dataset.w + '%';
                    });
                });
            }

            // Initial bar animation after small delay
            setTimeout(animateBars, 200);
        </script>
     </div>
 </div>