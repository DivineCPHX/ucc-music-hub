// UCC Music Hub - global scripts
(function(){
  // Floating WhatsApp button (injected on every page)
  if(!document.getElementById('ucc-wa-float')){
    var a=document.createElement('a');
    a.id='ucc-wa-float';
    a.href='https://wa.me/15550102025?text=Hello%20UCC%20Music%20Hub';
    a.target='_blank';a.rel='noopener';
    a.setAttribute('aria-label','Chat on WhatsApp');
    a.style.cssText='position:fixed;right:22px;bottom:22px;width:58px;height:58px;border-radius:50%;background:#25D366;color:#fff;display:flex;align-items:center;justify-content:center;font-size:1.9rem;box-shadow:0 8px 24px rgba(37,211,102,.45);z-index:1080;text-decoration:none;transition:transform .2s;';
    a.innerHTML='<i class="bi bi-whatsapp"></i>';
    a.addEventListener('mouseover',function(){a.style.transform='scale(1.08)';});
    a.addEventListener('mouseout',function(){a.style.transform='scale(1)';});
    document.body.appendChild(a);
  }
})();
