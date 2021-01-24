
function val_1() {
    var a = document.getElementById('val-1').value
    var b = document.getElementById('val-2').value
    if (a == 'DHCP' && b == 'DNS') {
        return true
    }

    if (a == 'DNS' && b == 'DHCP'){
        return true
    }
    else {
        alert('FALLO DE LA RED')
        return false
    }
}