document.addEventListener('DOMContentLoaded', function() {
    // Get all open modal buttons
    var openModalButtons = document.querySelectorAll(".open-modal-btn");

    // Iterate over each button and add click event listener
    openModalButtons.forEach(function(btn) {
        btn.onclick = function() {
            var productId = this.getAttribute('data-product-id');
            var modal = document.getElementById("myModal-" + productId);
            modal.style.display = "block";
        }
    });

    // Get all close buttons
    var closeButtons = document.querySelectorAll(".close");

    // Iterate over each close button and add click event listener
    closeButtons.forEach(function(span) {
        span.onclick = function() {
            var productId = this.getAttribute('data-product-id');
            var modal = document.getElementById("myModal-" + productId);
            modal.style.display = "none";
        }
    });

    // Close the modal if the user clicks outside of the modal content
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = "none";
        }
    }
});
