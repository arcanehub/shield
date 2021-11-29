const overlays = document.querySelectorAll('.details_dropdown_overlay')

console.log(overlays)

for (let overlay of overlays) {
    overlay.addEventListener('click', function (event) {
        const details = overlay.closest('details');
        details.open = false;
    })
}

