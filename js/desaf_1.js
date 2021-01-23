function desaf_1() {
    var a = document.getElementById('val-1').value
    
    if (a == 'DHCP') {
        return true
    } else {
        alert('FALLO DE LA RED')
        return false
    }
}