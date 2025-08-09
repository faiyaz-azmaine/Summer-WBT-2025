function contactFormStepByStep() {


    var reason = prompt("What are the purpose of contacting? (Project / Thesis / Casual meetup / Consulting)");

    if (!reason) {
        alert("You didn’t provide any input. Please select one option");
        return;



    } else if (
        reason.toLowerCase() === "project" ||
        reason.toLowerCase() === "thesis" ||
        reason.toLowerCase() === "casual meetup" ||
        reason.toLowerCase() === "consulting"
    ) {
        alert("Selected option: " + reason);


    }
    else {
        alert("The option is invalid .");
        return;
    }


    var contactEmail = prompt("Please enter your email address (optional):") || "Not provided";
    var contactPhone = prompt("Please enter your phone number (optional):") || "Not provided";


    var appInput = prompt("Do you interested in App Development or App Creation? (yes / no)");
    var app = appInput && appInput.toLowerCase() === "yes";
    alert("App Development or App Creation interested: " + (app ? "Yes" : "No"));


    var webInput = prompt("Are you interested in Web Development or Web Creation? (yes / no)");
    var web = webInput && webInput.toLowerCase() === "yes";
    alert("Web Development or Web Creation Interest: " + (web ? "Yes" : "No"));






    var jobInput = prompt("Are you here to offer a job opportunity? (yes / no)");
    var job = jobInput && jobInput.toLowerCase() === "yes";
    alert("Job offer: " + (job ? "Yes" : "No"));



    var services = "";
    if (app && web) {
        services = "App Development or App Creation, Web Development or Web Creation";
    } else if (app) {
        services = "App Development or App Creation";
    } else if (web) {
        services = "Web Development or Web Creation";
    } else {
        services = "No service Selected";
    }


    alert(
        "Contact Summary\n" +
        "Purpose: " + reason + "\n" +
        "Selected Services: " + services + "\n" +
        "Job offer: " + (job ? "Yes" : "No") + "\n" +
        "Email: " + contactEmail + "\n" +
        "Phone: " + contactPhone
    );
}

contactFormStepByStep();