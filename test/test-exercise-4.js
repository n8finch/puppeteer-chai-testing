const puppeteer = require('puppeteer');
const { expect } = require('chai');

describe('Excercise 4: Get a PDF', function() {
	let page;
	let browser;

	before(async function(){
		// browser = await puppeteer.launch({headless: false});
		browser = await puppeteer.launch();
  		page = await browser.newPage();
  		await page.goto('http://localhost:8000/ex3.php');
	});

	it('should have this page title and have a modal', async function () {

		await page.click('#modalButton');

		await page.pdf( { 'path': 'pdf/pdf.pdf' } );

	 });

	after (async function () {
	    await browser.close();
	});
});
