// script.js

function showDetails(name, role, description) {
    // Show the modal
    var modal = document.getElementById("myModal");
    modal.style.display = "block";

    // Set the content in the modal
    document.getElementById("modalName").innerText = name;
    document.getElementById("modalRole").innerText = role;
    document.getElementById("modalDescription").innerText = description;
}

// Close the modal when the user clicks the "x" button
document.addEventListener("DOMContentLoaded", function() {
    var closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.onclick = function() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    };

    // Close the modal when the user clicks anywhere outside of it
    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});
