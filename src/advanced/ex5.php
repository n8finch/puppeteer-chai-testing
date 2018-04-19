<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Demo of Headless Chrome">
    <meta name="author" content="Derek Binkley">
	<!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/mystyle.css" rel="stylesheet">

    <title>Hello Madison</title>
	</head>
	<body>
		<?php include 'includes/nav2.php'; ?>
		<main class="container">
			<h1>Exercise 5</h1>
		  <!-- Content here -->
		  <div class="row">
		    <div class="col-md-4">
		    	This page has the search function working. If you type into the search box you
          will get a list of five random words as the search results.
		    </div>
		    <div class="col-md-8">
          <h2>Helpful Hints</h2>
          <h3>You can resize.</h3>
          <div style="background: #eee">
          <pre><code>
    await page.pdf();
          </code></pre>
          </div>
          A full list of page printing options are available at <a href="https://github.com/GoogleChrome/puppeteer/blob/master/docs/api.md#pagepdfoptions" target="_blank">Puppeteer's API docs</a>.
        </div>
		  </div>
      <div class="row">
        <div class="col-md-4">
          <ol data-bind="foreach: {data: results, as: 'result'}" id="resultsList">
            <li class="resultItem"><span data-bind="text: result"></span></li>
          </ol>
        </div>
      </div>
		  
		</main>

		<script src="/js/jquery-3.2.1.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='/js/knockout-3.4.2.js'></script>
    <script type='text/javascript' src='/js/headless.js'></script>
	</body>
</html>