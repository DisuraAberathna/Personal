function opentab(tabname) {
    if (tabname == "wsnormalVersion") {
        document.getElementById("wspt").classList.remove("active-link");
        document.getElementById("wspremiumVersion").classList.remove("active-tab");
        document.getElementById("wsnt").classList.add("active-link");
        document.getElementById("wsnormalVersion").classList.add("active-tab");
    } else if (tabname == "wspremiumVersion") {
        document.getElementById("wspt").classList.add("active-link");
        document.getElementById("wspremiumVersion").classList.add("active-tab");
        document.getElementById("wsnt").classList.remove("active-link");
        document.getElementById("wsnormalVersion").classList.remove("active-tab");
    } else if (tabname == "wanormalVersion") {
        document.getElementById("wapt").classList.remove("active-link");
        document.getElementById("wapremiumVersion").classList.remove("active-tab");
        document.getElementById("want").classList.add("active-link");
        document.getElementById("wanormalVersion").classList.add("active-tab");
    } else if (tabname == "wapremiumVersion") {
        document.getElementById("wapt").classList.add("active-link");
        document.getElementById("wapremiumVersion").classList.add("active-tab");
        document.getElementById("want").classList.remove("active-link");
        document.getElementById("wanormalVersion").classList.remove("active-tab");
    } else if (tabname == "ranormalVersion") {
        document.getElementById("rapt").classList.remove("active-link");
        document.getElementById("rapremiumVersion").classList.remove("active-tab");
        document.getElementById("rant").classList.add("active-link");
        document.getElementById("ranormalVersion").classList.add("active-tab");
    } else if (tabname == "rapremiumVersion") {
        document.getElementById("rapt").classList.add("active-link");
        document.getElementById("rapremiumVersion").classList.add("active-tab");
        document.getElementById("rant").classList.remove("active-link");
        document.getElementById("ranormalVersion").classList.remove("active-tab");
    } else {
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        for (tablink of tablinks) {
            tablink.classList.remove("active-link");
        }
        for (tabcontent of tabcontents) {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }
}

function subscribe() {
    const email = document.getElementById("email").value;
    sendMail(email);
}

function sendMail(email) {
    const success_alert = document.getElementById("success_alert");
    const error_alert = document.getElementById("error_alert");
    const loading_alert = document.getElementById("loading_alert");

    loading_alert.classList.remove("d-none");
    loading_alert.classList.add("show");
    success_alert.classList.add("d-none");
    success_alert.classList.remove("show");
    error_alert.classList.add("d-none");
    error_alert.classList.remove("show");

    const form = new FormData();
    form.append("email", email);

    const request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            const response = request.responseText;
            const responseObject = JSON.parse(response);

            if (
                responseObject.msg == "Success" ||
                responseObject.sg == "You Already Subscribed."
            ) {
                success_alert.classList.remove("d-none");
                success_alert.classList.add("show");
                loading_alert.classList.add("d-none");
                loading_alert.classList.remove("show");
                error_alert.classList.add("d-none");
                error_alert.classList.remove("show");
            } else {
                error_alert.classList.remove("d-none");
                error_alert.classList.add("show");
                loading_alert.classList.add("d-none");
                loading_alert.classList.remove("show");
                success_alert.classList.add("d-none");
                success_alert.classList.remove("show");
                document.getElementById("error_msg").innerHTML = responseObject.msg;
            }
        }
    };
    request.open("POST", "contact/subscribeProcess.php", true);
    request.send(form);
}

function hideAlert(div) {
    document.getElementById(div).classList.toggle("d-none");
    document.getElementById("email").value = "";
}

function openModal(id) {
    var pm;
    var projectModal = document.getElementById("projectModal");
    document.getElementById("modalHeading").innerHTML = id;
    document.getElementById("image").src = "resources/img/" + id + ".gif";

    pm = new bootstrap.Modal(projectModal);
    pm.show();
}