const quotes = [
{
	quote: 'hduhwuhwduduhdwdw',
	author: 'av'
},
{
	quote: 'ewewewffwfw',
	author: 'vdvd'
},
{
	quote: 'brrtryuduhdwdw',
	author: 'vdfdf'
},	
	
]

const quoteBtn = document.getElementById('quote-btn');
const quote = document.querySelector('.quote');
const author = document.querySelector('.author');

quoteBtn.addEventListener('click', () => {
	let random = Math.floor(Math.random() * quotes.length);
	
	quote.innerHTML = quotes[random].quote;
	author.innerHTML = quotes[random].author;
})