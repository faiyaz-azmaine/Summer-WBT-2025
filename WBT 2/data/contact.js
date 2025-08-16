document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // prevent refresh

        // Collect form data
        const data = {
            fname: document.getElementById("fname").value,
            lname: document.getElementById("lname").value,
            email: document.getElementById("email").value,
            birthday: document.getElementById("birthday").value,
            gender: document.querySelector('input[name="gender"]:checked')?.value || "Not selected",
            purpose: document.getElementById("purpose").value,
            schedule: document.querySelector('input[name="schedule"]:checked')?.value || "Not selected"
        };

        // Save into localStorage
        localStorage.setItem("contactData", JSON.stringify(data));
        console.log("✅ Saved Data:", data);

        // Redirect to details page (inside /html/)
        window.location.href = "showdetails.html";
    });
});
