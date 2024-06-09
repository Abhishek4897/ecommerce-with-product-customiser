<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>AnshuWap - Fonts Manager</title>
    <link href="<?= base_url() ?>/resources/css/fonts.css" media="all" rel="stylesheet">
  </head>
<body class="tsd-fonts-manager tsd-show-my-fonts" style="">
	
	<div id="tsd-fonts-manager">
		<div id="tsd-ggf-header">
		    
			<h3>
				Fonts Manager
				<small>( Total 1020 fonts )</small>
			</h3>
			<div id="tsd-ggf-hright">
				<input type="search" id="tsd-ggf-search" placeholder="Search by name">
				<i class="tsd-icon-magnifier"></i>
			</div>
			<ul>
				<li>
					<select id="tsd-ggf-filter">
						<option value="popularity">Sorting</option>
						<option value="popularity">Popular</option>
						<option value="trending">Trending</option>
						<option value="style">Style</option>
						<option value="alpha">Alpha</option>
					</select>
				</li>
				<li>
					<select id="tsd-ggf-language">
						<option value="">All subsets</option>
						<option value="arabic">Arabic</option>
						<option value="bengali">Bengali</option>
						<option value="cyrillic">Cyrillic</option>
						<option value="cyrillic-ext">Cyrillic Extended</option>
						<option value="devanagari">Devanagari</option>
						<option value="greek">Greek</option>
						<option value="greek-ext">Greek Extended</option>
						<option value="gujarati">Gujarati</option>
						<option value="hebrew">Hebrew</option>
						<option value="khmer">Khmer</option>
						<option value="latin">Latin</option>
						<option value="latin-ext">Latin Extended</option>
						<option value="tamil">Tamil</option>
						<option value="telugu">Telugu</option>
						<option value="thai">Thai</option>
						<option value="vietnamese">Vietnamese</option>
					</select>
				</li>
				<li>
					<select id="tsd-ggf-category">
						<option value="">All Categories</option>
						<option value="serif">Serif</option>
						<option value="sans-serif">Sans Serif</option>
						<option value="display">Display</option>
						<option value="handwriting">Handwriting</option>
						<option value="monospace">Monospace</option>
					</select>
				</li>
				<li class="tsd-ggf-added" data-action="my-fonts">
					<i class="fa-folder-open" data-action="my-fonts"></i> 
					Selected Fonts
					(<span data-action="my-fonts">16</span>)
				</li>
				<li class="tsd-ggf-load-time">
					Load Time <span class="medium">Medium</span>
				</li>
			</ul>
		</div>
		<div id="tsd-ggf-my-fonts" style="display: inline-block;">
			<div id="tsd-ggf-mf-header">
				<span>List selected fonts</span>  
				<i>(Please remove unused fonts to make the application loads faster)</i>
				<i class="tsd-icon-close" data-action="close-my-fonts"></i>
			</div>
			<div id="tsd-ggf-mf-body"></div>
		<div id="tsd-ggf-body">
			<div id="tsd-ggf-pagination-top" class="tsd-ggf-pagination"></div>
			<div id="tsd-ggf-render"></div>
		</div>
	</div>
	<div id="tsd-fonts-manager-resource">
	    </div>
	<div id="tsd-fonts-manager-api"><script type="text/javascript" src="https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyCrsTDigL61TFHYPHTZduQP1cGi8CLfp90&amp;callback=lumise_fonts.load&amp;sort=popularity"></script></div>


<script type="text/javascript" src="<?= base_url() ?>/resources/js/vendors.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/resources/js/fonts.js?ver=1.0"></script>

</body></html>