// Escreva uma função que converta a data de entrada do usuário formatada como MM/DD/YYYY em um formato exigido por uma API (YYYYMMDD). O parâmetro "userDate" e o valor de retorno são strings.

// Por exemplo, ele deve converter a data de entrada do usuário "31/12/2014" em "20141231" adequada para a API.


function formatDate(userDate) {
  	if (!userDate) return `Invalid Date`

	const dateFormatted = userDate.split('/')
	
	if (dateFormatted.length === 3) {
		return `${dateFormatted[2]}${dateFormatted[0]}${dateFormatted[1]}`
	}
}

console.log(formatDate("12/31/2014"));