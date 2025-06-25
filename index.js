
document.querySelector("form").addEventListener("submit", function (e) {
    const name = document.getElementById("name").value.trim();
    const age = document.getElementById("age").value.trim();
    const gender = document.getElementById("gender").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();

    let errors = [];

    if (name == "") errors.push("Name is required.");
    if (age == "" || isNaN(age)) errors.push("Valid age is required.");
    if (gender == "") errors.push("Gender is required.");
    if (!email.includes("@")) errors.push("Valid email is required.");
    if (phone.length < 10) errors.push("Valid phone number is required.");

    if (errors.length > 0) {
        e.preventDefault(); 
        alert(errors.join("\n"));
    }
});

document.querySelector("form").addEventListener("submit", function () {
    document.querySelector(".btn").disabled = true;
    document.querySelector(".btn").innerText = "Submitting...";
});

document.getElementById("name").addEventListener("input", function () {
    console.log("Name preview: " + this.value);
});
