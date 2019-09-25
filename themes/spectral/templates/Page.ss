<!DOCTYPE HTML>
<!--
	Spectral by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
	
<html>
	<head>
		<title>Untitled</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<% require themedCSS('main.css') %>
		<% require themedCSS('noscript.css') %>
	
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
				<% include Header %>

				$Layout

				<!-- Footer -->
				<% include Footer %>

			</div>

$Form

		<!-- Scripts -->
		<% require themedJavascript('jquery.min.js') %>
		<% require themedJavascript('jquery.scrollex.min.js') %>
		<% require themedJavascript('jquery.scrolly.min.js') %>
		<% require themedJavascript('browser.min.js') %>
		<% require themedJavascript('breakpoints.min.js') %>
		<% require themedJavascript('util.js') %>
		<% require themedJavascript('main.js') %>	
		

	</body>
</html>