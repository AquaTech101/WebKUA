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
    if (y == "KAU") {
        document.getElementById("tipe").value = "Surat Keterangan Asal-Usul"
        document.getElementById("G-KAU").innerHTML = "Informasi Orang Tua Kandung"
        z = document.getElementsByClassName("KAU");
        for (i = 0; i < 24; i++) {
            z[i].disabled = false;
            z[i].placeholder = "Isi Disini";
            z[i].style.background = "transparent";
        }

    } else if (y == "PM") {
        document.getElementById("tipe").value = "Surat Persetujuan Mempelai"
        z = document.getElementsByClassName("PM");
        for (i = 0; i < 18; i++) {
            z[i].disabled = false;
            z[i].placeholder = "Isi Disini";
            z[i].style.background = "transparent";
        }

    } else if (y == "KTOT") {
        document.getElementById("tipe").value = "Surat Keterangan Tentang Orang Tua"
        z = document.getElementsByClassName("KTOT");
        for (i = 0; i < 26; i++) {
            z[i].disabled = false;
            z[i].placeholder = "Isi Disini";
            z[i].style.background = "transparent";
        }

    } else if (y == "SIOT") {
        document.getElementById("tipe").value = "Surat Izin Orang Tua"
        z = document.getElementsByClassName("SIOT");
        for (i = 0; i < 32; i++) {
            z[i].disabled = false;
            z[i].placeholder = "Isi Disini";
            z[i].style.background = "transparent";
        }

    } else if (y == "SKK") {
        document.getElementById("tipe").value = "Surat Keterangan Kematian Suami/Istri"
        document.getElementById("G-SKK").innerHTML = "Informasi Yang Wafat"
        document.getElementById("2G-SKK").innerHTML = "Informasi Pasangan"
        document.getElementById("3G-SKK").innerHTML = "Bin / Binti"
        document.getElementById("4G-SKK").innerHTML = "Bin / Binti"
        z = document.getElementsByClassName("SKK");
        for (i = 0; i < 20; i++) {
            z[i].disabled = false;
            z[i].placeholder = "Isi Disini";
            z[i].style.background = "transparent";
        }

    } else if (y == "PKN") {
        document.getElementById("tipe").value = "Pemberitahuan Kehendak Nikah"
        z = document.getElementsByClassName("PKN");
        for (i = 0; i < 9; i++) {
            z[i].disabled = false;
            z[i].placeholder = "Isi Disini";
            z[i].style.background = "transparent";
        }

    } else if (y == "SKUN") {
        document.getElementById("G-SKUN").innerHTML = "Informasi Pasangan"
        document.getElementById("tipe").value = "Surat Keterangan Untuk Nikah"
        z = document.getElementsByClassName("SKUN");
        for (i = 0; i < 12; i++) {
            z[i].disabled = false;
            z[i].placeholder = "Isi Disini";
            z[i].style.background = "transparent";
        }

    }


}

function special() {
    var y = document.getElementById("wrap");
    var z = document.getElementById("selected").value;
    if (z == "PKN") {
        y.action = "SForm.php";
    } else {
        y.action = "Form.php"
    }
}