// Implemente a função removeProperty, que recebe um objeto e o nome de uma propriedade.

// Faça o seguinte:

// Se o objeto obj tiver uma propriedade prop, a função removerá a propriedade do objeto e retornará true;
// em todos os outros casos, retorna falso.

const test = {
	language: 'PHP',
	company: 'petiko',
	test: 'JS'
}

function removeProperty(obj, prop) {
  	return obj[prop] 
		? delete obj[prop]
		: false
}

console.log(removeProperty(test, "language"))
console.log(removeProperty(test, "namespace"))