// --------------------------------------- All --------------------------------------------------
// Ativa a função Tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

// Exibe cumprimento na nav
function cumprimento(){

	let data = new Date

	if((data.getHours()) < 12){
		document.getElementById('cumprimento').innerHTML = (`Bom dia`)
	}
	else if ((data.getHours()) >= 12 && (data.getHours()) < 18) {
		document.getElementById('cumprimento').innerHTML = (`Boa tarde`)
	}
	else if ((data.getHours())>= 18) {
		document.getElementById('cumprimento').innerHTML = (`Boa noite`)
	}

}

// --------------------------------------- NEWBook -------------------------------------------------
// Data de cadastro do livro

function clock() {

let data = document.getElementById('data')


data.value = ((new Date).toLocaleString().substr(0, 16)); 
setInterval(function () {
    data.value = ((new Date).toLocaleString().substr(0, 16));  
}, 60000);

}