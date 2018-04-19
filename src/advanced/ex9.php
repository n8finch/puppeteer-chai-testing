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
		<?php include 'includes/nav.php'; ?>
		<main class="container">
			<h1>Exercise 9</h1>
		  <!-- Content here -->
		  <div class="row">
		    <div class="col-md-4">
		    	This web page is built using <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>'s
          responsive layout. This means that the layout will change based upon the screen size. You can
          manually see this work by resizing your browser window.<br/><br/>

          Now let's see if we can test the responsiveness of this page.
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
		  
		</main>

		<script src="/js/jquery-3.2.1.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script>
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip();
			});
		</script>
	</body>
</html>