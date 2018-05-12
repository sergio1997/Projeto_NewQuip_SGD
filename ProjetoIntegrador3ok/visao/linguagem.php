<script language="javascript1.2">
function soLetras(e){
if (document.all){var evt=event.keyCode;}
else{var evt = e.charCode;}
var chr = String.fromCharCode(evt);
//  var re = /[A-Za-z]/; // permite apenas de A-Z e de a-z
var re = /[A-Za-z\s-ÃÕÑÁÉÍÓÚÀÜÇãõñáéíóúàçü]/; // permite de A-Z, a-z, espaços,
// hífens e caracteres acentuados. Mais caracteres podem ser adicionados a Lista
return (re.test(chr) || evt<20); // com evt<20 permitimos <ENTER>,<TAB>,<BACKSPACE>
}
</script>
<script language="javascript1.2">
function soNumero(e){
if (document.all){var evt=event.keyCode;}
else{var evt = e.charCode;}
var chr = String.fromCharCode(evt);
//  var re = /[0-9/; // permite apenas numeros de 0-9;
var re = /[0-9]/; // permite numeros  de 0-9,
// hífens e caracteres acentuados. Mais caracteres podem ser adicionados a Lista
return (re.test(chr) || evt<20); 
}
</script>
