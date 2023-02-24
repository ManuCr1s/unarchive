/*FORMATEO DE LA ENTRADA*/
var cleave = new Cleave('#ticket', {
    delimiter: '-',
    blocks: [2, 5, 5, 4, 2, 6, 1],
    uppercase: true
});
/*SOLO NUMEROS */
let onlyNumbers = ()=> {
    let keynum = window.event ? window.event.keyCode : e.which;
    if (keynum == 8) return true;
    return /\d/.test(String.fromCharCode(keynum));
}