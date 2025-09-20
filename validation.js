function validateForm() {
    const name = document.forms["bookingForm"]["name"].value.trim();
    const email = document.forms["bookingForm"]["email"].value.trim();
    const destination = document.forms["bookingForm"]["destination"].value;
    const persons = document.forms["bookingForm"]["persons"].value;
    const date = document.forms["bookingForm"]["date"].value;

    if (name === "" || email === "" || destination === "" || persons === "" || date === "") {
        alert("All fields must be filled out.");
        return false;
    }

    const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (persons <= 0) {
        alert("Number of persons must be at least 1.");
        return false;
    }

    const today = new Date().toISOString().split('T')[0];
    if (date < today) {
        alert("Please select a future travel date.");
        return false;
    }

    return true;
}
