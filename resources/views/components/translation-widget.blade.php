<div id="google_translate_element" class="inline-block mx-2 z-50 translate-widget-container"></div>

<style>
/* Sembunyikan toolbar bawaan Google Translate di atas layar */
.goog-te-banner-frame.skiptranslate { display: none !important; }
body { top: 0px !important; }
#goog-gt-tt { display: none !important; }
.goog-tooltip { display: none !important; }
.goog-tooltip:hover { display: none !important; }

/* Kustomisasi Tampilan Dropdown Google Translate */
.goog-te-gadget {
    color: transparent !important;
    font-family: inherit !important;
    font-size: 0px !important;
}
.goog-te-gadget .goog-te-combo {
    color: #fff !important;
    background-color: #000 !important;
    border: 1px solid #c59d5f !important;
    border-radius: 6px;
    padding: 4px 8px;
    font-size: 10px !important;
    font-family: 'Montserrat', sans-serif !important;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    outline: none;
    transition: all 0.3s ease;
}
.goog-te-gadget .goog-te-combo:hover {
    background-color: #c59d5f !important;
    color: #000 !important;
}

/* Penyesuaian khusus untuk mode Admin Panel (Filament) */
.fi-topbar .goog-te-gadget .goog-te-combo {
    color: var(--text-color, inherit) !important;
    background-color: transparent !important;
}
</style>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
      pageLanguage: 'tr', 
      includedLanguages: 'en,tr',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
