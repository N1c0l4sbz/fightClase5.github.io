<footer role="contentinfo">
    <p><strong>NICOLAS BAEZ</strong></p>
    <p><strong>2026</strong></p>
</footer>
<script src="<?= e($base ?? '') ?>main.js"></script>
<script>
function leerPagina() { if (!('speechSynthesis' in window)) return; window.speechSynthesis.cancel(); const main=document.querySelector('main'); if(main){const m=new SpeechSynthesisUtterance(main.innerText);m.lang='es-AR';window.speechSynthesis.speak(m);} }
function detenerVoz() { if ('speechSynthesis' in window) window.speechSynthesis.cancel(); }
</script>
</body>
</html>
