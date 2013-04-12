function validaCPFCNPJ(vlr)
{
	vlr = Limpar(vlr, '0123456789');

	if (vlr.length>11) {
		return validaCnpj(vlr);
	} else {
		return validaCpf(vlr);
	}
}

function validaCnpj(vlr) {

	var i;
	var numero = Limpar(vlr, '0123456789');

	if (numero.length != 14) {
		return false;
	}

	s = numero;

	c = s.substr(0,12);
	var dv = s.substr(12,2);
	var d1 = 0;

	for (i = 0; i < 12; i++){
		d1 += c.charAt(11-i)*(2+(i % 8));
	}

	if (d1 == 0){
		return false;
	}
	d1 = 11 - (d1 % 11);

	if (d1 > 9) d1 = 0;

	if (dv.charAt(0) != d1){
		return false;
	}

	d1 *= 2;
	for (i = 0; i < 12; i++){
		d1 += c.charAt(11-i)*(2+((i+1) % 8));
	}

	d1 = 11 - (d1 % 11);
	if (d1 > 9) d1 = 0;

	if (dv.charAt(1) != d1){
		return false;
	}
	return true;

}

function validaCpf(vlr){

	var i;
	var numero = Limpar(vlr, '0123456789');

	if (numero.length != 11) {
		return false;
	}

	var tudoIgual = true;
	for (i = 0; i < 11; i++){
		if (numero.charAt(0)!=numero.charAt(i)) {
			tudoIgual = false;
		}
	}
	if (tudoIgual) {
		return false;
	}

	s = numero;
	c = s.substr(0,9);
	var dv = s.substr(9,2);
	var d1 = 0;

	for (i = 0; i < 9; i++){
		d1 += c.charAt(i)*(10-i);
	}

	if (d1 == 0){
		return false;
	}

	d1 = 11 - (d1 % 11);
	if (d1 > 9) d1 = 0;

	if (dv.charAt(0) != d1){
		return false;
	}

	d1 *= 2;
	for (i = 0; i < 9; i++){
		d1 += c.charAt(i)*(11-i);
	}

	d1 = 11 - (d1 % 11);
	if (d1 > 9) d1 = 0;

	if (dv.charAt(1) != d1){
		return false;
	}

	return true;

}

function Limpar(valor, validos) {
	// retira caracteres invalidos da string
	var result = "";
	var aux;
	for (var i=0; i < valor.length; i++) {
		aux = validos.indexOf(valor.substring(i, i+1));
		if (aux>=0) {
			result += aux;
		}
	}
	return result;
}
