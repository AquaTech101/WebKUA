var currentTab = 0;
showTab(currentTab);

function showTab(n) {
    const before = document.getElementById("before");
    const next = document.getElementById("next");
    const submit = document.getElementsByClassName("submit");


    var x = document.getElementsByClassName("tab");
    x[n].style.display = "flex";
    document.getElementById("number").innerHTML = (n + 1) + "/" + x.length;
    if (n <= 0) {
        before.disabled = true;
        next.disabled = false;
        submit[currentTab].style.display = "none";
    } else if ((n + 1) >= x.length) {
        before.disabled = false;
        next.disabled = true;
        submit[currentTab].style.display = "block";
    } else {
        before.disabled = false;
        next.disabled = false;
        submit[currentTab].style.display = "none";
    }
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    showTab(currentTab);
}

function selectedOption() {
    var z, i, f;
    var y = document.getElementById("name").innerText;
    
    if (y == "Form Persetujuan Mempelai") {
        document.getElementById("tipe").value = "Surat Persetujuan Mempelai"
        z = document.getElementsByClassName("PM");
        for (i = 0; i < 18; i++) {
            z[i].disabled = false;
            z[i].placeholder = "Isi Disini";
            z[i].style.background = "transparent";
        }
    }


}