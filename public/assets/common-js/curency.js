var rupiah1 = document.getElementById("rupiah1");
rupiah1.addEventListener("keyup", function(e) {
  rupiah1.value = convertRupiah(this.value);
});
rupiah1.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});

var rupiah2 = document.getElementById("rupiah2");
rupiah2.addEventListener("keyup", function(e) {
  rupiah2.value = convertRupiah(this.value, "Rp. ");
});
rupiah2.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});

function convertRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split  = number_string.split(","),
    sisa   = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

	if (ribuan) {
		separator = sisa ? "." : "";
		rupiah += separator + ribuan.join(".");
	}

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '')

}

function isNumberKey(evt) {
    key = evt.which || evt.keyCode;
	if ( 	key != 188 // Comma
		 && key != 8 // Backspace
		 && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
		 && (key < 48 || key > 57) // Non digit
		) 
	{
		evt.preventDefault();
		return;
	}
}