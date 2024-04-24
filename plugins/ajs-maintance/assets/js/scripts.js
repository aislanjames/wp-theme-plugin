function todayDate() {
    var d = new Date();
    var n = d.getFullYear() + "  ";
    document.getElementById("date").innerHTML = n;
}
window.onload = todayDate;
