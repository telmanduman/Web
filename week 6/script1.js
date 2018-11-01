function main(event){
	let btn = event.currentTarget;
	let div = btn.parentNode;
	let array = div.childNodes;
	array[1].style.textDecoration = "line-through";
}
let buttons = document.querySelectorAll('button');
for(let button of buttons){
	button.addEventListener('click',main);
}
