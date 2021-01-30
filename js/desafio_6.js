window.addEventListener("load", val_2, true);

function val_2() {
    document.getElementById("val-1").addEventListener("keyup", function() {
        this.value = this.value.toUpperCase();
    }, true);
    document.getElementById("val-2").addEventListener("keyup", function() {
        this.value = this.value.toUpperCase();
    }, true);
}

function val_1() {
    var a = document.getElementById('val-1').value
    var b = document.getElementById('val-2').value

    if (a == 68 && b == 19032001) {

        return true
    } else {
        alert('FUGA DETECTADA')
        return false
    }
}