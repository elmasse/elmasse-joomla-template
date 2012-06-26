<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
JPlugin::loadLanguage( 'tpl_SG1' );
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
<link rel="shortcut icon" href="templates/<?php echo $this->template ?>/favicon.ico" >

<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/article.css" type="text/css" />

<!-- Google Analytics  -->
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-9447874-2");
        pageTracker._trackPageview();
    } catch(err) {}
</script>
<!-- End Google Analytics -->

</head>
<body>
	<div class="container">

		<div id="top" class="header">
            <jdoc:include type="modules" name="left" />
			<jdoc:include type="modules" name="top" />
            <div class="sitename">
                <h1><?php echo $mainframe->getCfg('sitename');?></h1>
            </div>
	    </div>	

	    <div id="content" class="module">
	    	<jdoc:include type="component" style="xhtml"/>
	    </div>
		
		<div id="bottom" class="footer">
			<?php echo $mainframe->getCfg('sitename');?> - Design and Development by <a href="http://elmasse.gaver.nl">elmasse!</a> - Maximiliano Fierro - &copy; 2009 - <?php echo date("Y") ?>
		</div>
	</div>

<? 
	/*

		<div id="header">
			<div id="shape"></div>
			<div id="siteName" class="module">
				<h1><?php echo $mainframe->getCfg('sitename');?></h1>
			</div>
		</div>


    <div id="user1" class="module">
        <jdoc:include type="modules" name="user1" style="xhtml"/>
    </div>
    <div id="user2" class="module">
        <jdoc:include type="modules" name="user2" style="xhtml"/>
    </div>
    <div id="user3" class="module">
        <jdoc:include type="modules" name="user3" style="xhtml"/>
    </div>
    <div id="user4" class="module">
        <jdoc:include type="modules" name="user4" style="xhtml"/>
    </div>
   <div id="newsflash" class="module">
        <jdoc:include type="modules" name="newsflash" style="xhtml"/>
    </div>
	<div id="left" class="module">
    	<jdoc:include type="modules" name="left" style="xhtml" />
    </div>
    <div id="footer" class="module">
    	<jdoc:include type="modules" name="footer" style="xhtml" />
    </div>	

	*/
?>

<!-- Sintax Highlighter Ref -->
<!-- Include required JS files -->
<script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/2.1.364/scripts/shCore.js"></script>

<!-- At least one brush, here we choose JS. You need to include a brush for every language you want to highlight -->
<script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/2.1.364/scripts/shBrushJScript.js"></script>

<!-- Include *at least* the core style and default theme -->
<link href="http://alexgorbatchev.com/pub/sh/2.1.364/styles/shCore.css" rel="stylesheet" type="text/css" />
<link href="http://alexgorbatchev.com/pub/sh/2.1.364/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
     SyntaxHighlighter.all()
</script>
<!-- End Sintax Highlighter Ref -->

</body> 
</html>