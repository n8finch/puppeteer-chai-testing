const puppeteer = require('puppeteer');
const { expect } = require('chai');

describe('Excercise 2: Modal', function() {
	let page;
	let browser;

	before(async function(){
		//browser = await puppeteer.launch({headless: false});
		browser = await puppeteer.launch();
  		page = await browser.newPage();
  		await page.goto('http://localhost:8000/ex2.php');
	});

	it('should have this page title and have a modal', async function () {

		let heading = await page.evaluate( () => document.querySelector('h1').innerHTML );

		expect( heading ).to.eql('Exercise 2');

		await page.click('#modalButton', { 'delay' : 1000 } );

	 });

	after (async function () {
	    await browser.close();
	});
});
