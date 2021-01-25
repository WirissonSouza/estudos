function Calcular(tipo, valor) {

	let input = document.getElementById('digitos')
	let ultimo_caracter = input.value[input.value.length-1]

	// Caso seja pressionado o botão AC, limpa o input
	if (tipo === 'acao') {
		if (valor === 'AC') {
			input.value = ''
		}
		// Caso seja pressionado o botão =, efetua o calculo da expressão no input
		if (valor === '=') {
			let resultado = input.value
			input.value = (eval(resultado))
		}
		// Se for pressionado algum operador
		if (valor === '/' || valor === '*' || valor === '-' || valor === '+' || valor === '.') {
			// Verifica se o ultimo caracter pressionado não foi um operador, se NÃO foi, concatena o operador no input
			if (ultimo_caracter !== '/' && ultimo_caracter !== '*' && ultimo_caracter !== '-' && ultimo_caracter !== '+' && ultimo_caracter !== '.'){
				if (input.value !== ''){
					input.value += valor
					ultimo_caracter = input.value[input.value.length-1] //Armazena o ultimo caracter pressionado
				}
			}
			// Se o ultimo caracter pressionado foi um operador, não concatenará mais um operador caso pressione novamente
			else {
				input.value = input.value
			}
		}
	}
	// Caso seja um pressionado um botão do tipo valor (número) concatena ele no input
	else if(tipo === 'valor') {
		document.getElementById('digitos').value += valor
	}
}

const botao = document.getElementById('calculadora')

botao.disabled = 'true'