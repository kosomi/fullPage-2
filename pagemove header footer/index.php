
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Fixed Backgrounds - fullPage.js</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage fixed header and footer." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fixed, header,footer, absolute, positioned,css" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="fullpage.css" />
	<link rel="stylesheet" type="text/css" href="examples.css" />
	<style>

	/* Style for our header texts
	* --------------------------------------- */
	h1{
		font-size: 5em;
		font-family: arial,helvetica;
		color: #fff;
		margin:0;
		padding:0;
	}
	.intro p{
		color: #fff;
	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		text-align:center;
	}

	/* Fixed header and footer.
	* --------------------------------------- */
	#header, #footer{
		position:fixed;
		height: 50px;
		display:block;
		width: 100%;
		background: #333;
		z-index:9;
		text-align:center;
		color: #f2f2f2;
		padding: 20px 0 0 0;
	}

	#header{
		top:0px;
	}
	#footer{
		bottom:0px;
	}


	/* Bottom menu
	* --------------------------------------- */
	#infoMenu {
		bottom: 80px;
	}
	#infoMenu li a {
		color: #fff;
		z-index: 999;
	}

	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
</head>
<body> 

<div id="header">
	<a href="dddddd"><img src="aaaaaa.jpg" alt=""></a>
	<a href="http://localhost/pagemove/#secondPage/1">Slide2</a>
	<a href="http://localhost/pagemove/#secondPage/0">Slide2</a>
</div>
<div id="footer">Footer</div>

<div id="fullpage">
	<div class="section " id="section0">
		<div class="intro">
			<h1>Fixed elements</h1>
			<p>Create your own headers and footers</p>
		</div>
	</div>
	<div class="section" id="section1">
	    <div class="slide" id="slide1">
			<div class="intro">
				<h1>How to use it</h1>
				<p>
					You will need to place your header and footer outside the plugin's wrapper.
					This way it won't move on scrolling. Take a look at the source code of this page.
				</p>
			</div>
		</div>

	    <div class="slide" id="slide2">
			<h1>Slide 2</h1>
		</div>

	</div>
	<div class="section" id="section2">
		<div class="intro">
			<h1>Enjoy it</h1>
		</div>
	</div>
</div>

<div id="infoMenu">
	

<ul>
    <li><a href="http://alvarotrigo.com/fullPage/utils/wordpress.html">Wordpress theme</a></li>
	<li><a href="https://github.com/alvarotrigo/fullPage.js/archive/master.zip">Download</a></li>
	<li>
		<a href="#" id="showExamples">Examples</a>
		<div id="examplesList">
			<div class="column">
				<h3>Navigation</h3>
				<ul>
					<li><a href="http://alvarotrigo.com/fullPage/examples/scrollBar.html">Scroll Bar Enabled</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/normalScroll.html">Normal scrolling</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/continuous.html">Continuous vertical</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/noAnchor.html">Without anchor links (same URL)</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/navigationV.html">Vertical navigation dots</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/navigationH.html">Horizontal navigation dots</a></li>
				</ul>
			</div>
			<div class="column">
				<h3>Design</h3>
				<ul>
					<li><a href="http://alvarotrigo.com/fullPage/examples/responsive.html">Responsive</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/backgrounds.html">Full backgrounds</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/fixedBackgrounds.html">Fixed backgrounds</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/videoBackground.html">Full background videos</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/autoHeight.html">Auto-height sections</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/gradientBackgrounds.html">Gradient backgrounds</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/scrolling.html">Scrolling inside sections and slides</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/fixedHeaders.html">Adding fixed header and footer</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/oneSection.html">One single section</a></li>
				</ul>
			</div>
			 <div class="column">
                <h3>Extensions</h3>
                <ul>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/parallax.html">Parallax</a></li>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/continuous-horizontal.html">Continuous horizontal</a></li>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/interlocked-slides.html">Interlocked Slides</a></li>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/reset-sliders.html">Reset Sliders</a></li>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/responsive-slides.html">Responsive Slides</a></li>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/scroll-horizontally.html">Horizontal mouse wheel</a></li>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/fading-effect.html">Fading Effect</a></li>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/offset-sections.html">Offset Sections</a></li>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/drag-and-move.html">Drag And Move</a></li>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/scrolloverflow-reset.html">ScrollOverflow Reset</a></li>
                </ul>
            </div>
			<div class="column">
				<h3>Other</h3>
				<ul>
					<li><a href="http://alvarotrigo.com/fullPage/examples/apple.html">Animations on scrolling</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/callbacks.html">Callbacks</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/autoplayVideoAndAudio.html">Autoplay media</a></li>
					<li><a href="http://alvarotrigo.com/fullPage/examples/methods.html">Functions and methods</a></li>
                    <li><a href="http://alvarotrigo.com/fullPage/extensions/#navigation">Extra navigations</a></li>
				</ul>
			</div>
		</div>

	</li>
	<li><a href="https://github.com/alvarotrigo/fullPage.js#fullpagejs">Documentation</a></li>
	<li><a href="http://alvarotrigo.com/#contact-page">Contact</a></li>
</ul>

    <!-- Facebook Pixel Code (Do not copy this!!)-->
    <script>
	    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	    document,'script','https://connect.facebook.net/en_US/fbevents.js');
	    fbq('init', '1786065945027357'); // Insert your pixel ID here.
	    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1786065945027357&ev=PageView&noscript=1"/></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
</div>

<script type="text/javascript" src="fullpage.js"></script>
<script type="text/javascript" src="examples.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['firstPage', 'secondPage', '3rdPage'],
        sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
        css3: true
    });
</script>

</body>
</html>