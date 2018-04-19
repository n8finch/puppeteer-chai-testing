const puppeteer = require('puppeteer');
const { expect } = require('chai');

describe('Test Layout', function() {
	let page;
	let browser;

	before(async function(){
		//browser = await puppeteer.launch({headless: false});
		browser = await puppeteer.launch();
  		page = await browser.newPage();
  		await page.goto('http://localhost:8000');
	});

	it('should do what it tell it to', async function () {
	    expect(1).to.eql(2);
	 });

	after (async function () {
	    await browser.close();
	});
});


