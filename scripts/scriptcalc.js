document.getElementById("botaouser").addEventListener("click", function() {
    document.getElementById("sidebar").style.width = "450px";
});
document.getElementById("closeBtn").addEventListener("click", function() {
    document.getElementById("sidebar").style.width = "0";
});

document.getElementById("novoAparelho").addEventListener("click", function() {
    document.getElementById("calc").style.display = "block";
});

document.getElementById("closeBtncalc").addEventListener("click", function() {
    document.getElementById("calc").style.display = "none";
});