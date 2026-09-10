document.addEventListener('DOMContentLoaded', () => {
  // Reading Progress Bar
  const progressBar = document.querySelector('.reading-progress-bar');
  if (progressBar) {
    window.addEventListener('scroll', () => {
      const s = document.documentElement.scrollTop;
      const h = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      if (h > 0) progressBar.style.width = `${(s / h) * 100}%`;
    });
  }

  // Mobile Drawer Navigation
  const mobileToggle = document.querySelector('.mobile-toggle');
  const drawer = document.querySelector('.mobile-drawer');
  const backdrop = document.querySelector('.drawer-backdrop');
  const closeBtn = document.querySelector('.mobile-drawer-close');

  function toggle(o) {
    if (!drawer) return;
    drawer.classList.toggle('open', o);
    if (backdrop) backdrop.classList.toggle('open', o);
    document.body.style.overflow = o ? 'hidden' : '';
  }

  if (mobileToggle) mobileToggle.addEventListener('click', () => toggle(true));
  if (closeBtn) closeBtn.addEventListener('click', () => toggle(false));
  if (backdrop) backdrop.addEventListener('click', () => toggle(false));
  document.addEventListener('keydown', (e) => { if (e.key === 'Escape') toggle(false); });
  document.querySelectorAll('.mobile-drawer a').forEach(l => l.addEventListener('click', () => toggle(false)));

  // FAQ Accordion
  document.querySelectorAll('.faq-item').forEach(item => {
    const q = item.querySelector('.faq-question');
    if (q) {
      q.addEventListener('click', () => {
        const active = item.classList.contains('active');
        document.querySelectorAll('.faq-item').forEach(o => o.classList.remove('active'));
        item.classList.toggle('active', !active);
      });
    }
  });

  // Interactive Drape / Fabric Calculator
  const calcBtn = document.getElementById('calc-btn');
  if (calcBtn) {
    calcBtn.addEventListener('click', () => {
      const fiber = document.getElementById('calc-fiber').value;
      const gsm = parseFloat(document.getElementById('calc-gsm').value) || 280;
      const yards = parseFloat(document.getElementById('calc-yards').value) || 3.5;
      const outDrape = document.getElementById('calc-out-drape');
      const outWeight = document.getElementById('calc-out-weight');
      const outCare = document.getElementById('calc-out-care');

      let drapeLevel = "Medium Structured Drape";
      if (gsm < 180) drapeLevel = "Fluid & Flowing Drape (Sheer / Summer Weave)";
      else if (gsm > 350) drapeLevel = "Heavy Tailored Architecture (Overcoat / Suiting)";

      let totalKg = ((gsm * (yards * 0.9144) * 1.4) / 1000).toFixed(2);

      let care = "Professional Dry Clean Recommended";
      if (fiber === "Linen") care = "Cold Delicate Wash, Line Dry in Shade";
      else if (fiber === "Denim") care = "Cold Soak Inside Out, Hang Dry to Preserve Indigo";

      if (outDrape) outDrape.innerText = drapeLevel;
      if (outWeight) outWeight.innerText = `${totalKg} kg approx garment cloth weight`;
      if (outCare) outCare.innerText = care;
    });
  }
});
