<?php
/**
 * RealdonAlfred Headless — index.php
 * Default landing for headless deployments.
 * Place this theme in /wp-content/themes/realdonalfred-headless/
 */
?><!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Headless activo — @realdonalfred</title>
  <meta name="robots" content="noindex,follow">
  <style>
    :root{--bg:#0f1226;--fg:#f7f7fb;--muted:#cfd2ff;--card:#171a35;--accent:#8b5cf6;--accent-2:#22d3ee}
    *{box-sizing:border-box}
    html,body{margin:0;height:100%}
    body{font-family:ui-sans-serif,system-ui,-apple-system,"Segoe UI",Roboto,Ubuntu,Cantarell,"Noto Sans","Helvetica Neue",Arial;
      background:linear-gradient(180deg,#0f1226 0%,#101532 50%,#0d132b 100%);color:var(--fg)}
    a{color:inherit;text-decoration:none}
    a:focus{outline:2px dashed var(--accent-2);outline-offset:2px}
    .visually-hidden{position:absolute;width:1px;height:1px;margin:-1px;border:0;padding:0;white-space:nowrap;clip-path:inset(50%);clip:rect(0 0 0 0);overflow:hidden}
    .container{min-height:100dvh;display:flex;align-items:center;justify-content:center;padding:24px}
    .card{width:100%;max-width:560px;background:rgba(23,26,53,.75);backdrop-filter:blur(8px);
      border:1px solid rgba(139,92,246,.25);border-radius:24px;padding:28px;box-shadow:0 10px 30px rgba(0,0,0,.4)}
    .badge{display:inline-flex;gap:8px;align-items:center;font-size:.75rem;letter-spacing:.02em;
      background:rgba(34,211,238,.12);border:1px solid rgba(34,211,238,.35);padding:6px 10px;border-radius:9999px;color:#a5f3fc}
    h1{margin:14px 0 8px;font-size:1.9rem;line-height:1.15}
    p{margin:0 0 18px;color:var(--muted);line-height:1.6}
    .cta{display:flex;flex-wrap:wrap;gap:12px;margin-top:12px}
    .button{display:inline-flex;align-items:center;gap:10px;border:1px solid rgba(255,255,255,.12);padding:10px 14px;border-radius:14px;font-weight:600;transition:transform .12s ease, border-color .12s ease}
    .button:hover{transform:translateY(-1px);border-color:rgba(255,255,255,.28)}
    .footer{margin-top:18px;font-size:.85rem;color:#b6b9ff;opacity:.95}
    .icon{width:18px;height:18px;display:inline-block}
    @media (min-width: 480px){ h1{font-size:2.15rem} .button{padding:12px 16px} }
    @media (min-width: 768px){ h1{font-size:2.35rem} }
  </style>
</head>
<body>
  <main class="container" role="main">
    <section class="card" aria-labelledby="welcome-title">
      <span class="badge" aria-hidden="true">🧩 Headless • WordPress</span>
      <h1 id="welcome-title">¡Hola! ✨</h1>
      <p>Este sitio usa un <strong>tema headless</strong>. Tu app (frontend) vive en otro lugar, y WordPress solo funge como <em>CMS/API</em>.</p>
      <p>Si estás viendo esto, la conexión está lista. Puedes conectar tu frontend a <code>/wp-json/</code>.</p>

      <div class="cta" role="navigation" aria-label="Redes de realdonalfred">
        <a class="button" href="https://www.instagram.com/realdonalfred/" target="_blank" rel="noopener">
          <span class="icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.8A5.2 5.2 0 1 1 6.8 13 5.2 5.2 0 0 1 12 7.8zm0 2A3.2 3.2 0 1 0 15.2 13 3.2 3.2 0 0 0 12 9.8Zm5.55-3.05a1.15 1.15 0 1 1-1.15 1.15 1.15 1.15 0 0 1 1.15-1.15Z"/></svg>
          </span>
          Instagram
        </a>
        <a class="button" href="https://x.com/realdonalfred" target="_blank" rel="noopener">
          <span class="icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2H21l-6.74 7.72L22.5 22h-6.93l-4.83-6.19L4.9 22H2l7.21-8.26L1.75 2h7l4.37 5.73L18.244 2Zm-1.21 18h2.05L8.03 4H5.87l11.17 16Z"/></svg>
          </span>
          X (Twitter)
        </a>
        <a class="button" href="https://www.youtube.com/@realdonalfred" target="_blank" rel="noopener">
          <span class="icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M23 7.5s-.2-1.5-.8-2.2c-.7-.8-1.5-.8-1.9-.9C17.6 4 12 4 12 4h0s-5.6 0-8.3.4c-.4 0-1.2.1-1.9.9C1.3 6 1 7.5 1 7.5S.8 9.2.8 11v2c0 1.8.2 3.5.2 3.5s.2 1.5.8 2.2c.7.8 1.7.8 2.1.9 1.6.2 6.1.4 8.1.4 0 0 5.6 0 8.3-.4.4-.1 1.2-.1 1.9-.9.6-.7.8-2.2.8-2.2s.2-1.7.2-3.5v-2c0-1.8-.2-3.5-.2-3.5ZM9.75 14.9v-6l6 3-6 3Z"/></svg>
          </span>
          YouTube
        </a>
      </div>

      <p class="footer">Desarrollado por <strong>@RealDonAlfred</strong>.</p>
      <span class="visually-hidden">Redes: Instagram, X, YouTube.</span>
    </section>
  </main>
</body>
</html>
