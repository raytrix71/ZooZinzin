<script>
window.addEventListener('DOMContentLoaded', (event) => {
    const ouiRadio = document.querySelector('input[name="reservation"][value="oui"]');
    const nonRadio = document.querySelector('input[name="reservation"][value="non"]');
    const additionalContent = document.getElementById('additionalContent');

    if (!ouiRadio || !nonRadio || !additionalContent) {
        console.log("Un ou plusieurs éléments n'ont pas été trouvés.");
    } else {
        console.log("Tous les éléments nécessaires sont présents.");
    }

    function toggleAdditionalContent() {
        console.log('Changement détecté.');
        if (ouiRadio.checked) {
            console.log('Oui est sélectionné.');
            additionalContent.style.display = 'block';
        } else if (nonRadio.checked) {
            console.log('Non est sélectionné.');
            additionalContent.style.display = 'none';
        }
    }

    ouiRadio.addEventListener('change', toggleAdditionalContent);
    nonRadio.addEventListener('change', toggleAdditionalContent);
});
</script>



