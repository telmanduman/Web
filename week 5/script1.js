function onClick(){
	var q = document.querySelector("#s11").value;
	var w = document.querySelector("#s12").value;
	var e = document.querySelector("#s13").value;
	var a = document.querySelector("#s21").value;
	var s = document.querySelector("#s22").value;
	var d = document.querySelector("#s23").value;
	var z = document.querySelector("#s31").value;
	var x = document.querySelector("#s32").value;
	var c = document.querySelector("#s33").value;
	var g = q*s*c+w*d*z+a*x*e-e*s*z-w*a*c-d*x*q;
	console.log(g);
	document.querySelector("#result").innerHTML = g;
}
document.querySelector("#determinant").addEventListener('click',onClick);