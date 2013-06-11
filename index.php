<?php
defined('_JEXEC') or die('Restricted access');
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<!--
	##########################################
	## redWeb.dk                            ##
	## Blangstedgaardsvej 1, 1 sal          ##
	## 5220 Odense SØ                       ##
	## Danmark                              ##
	## email@redweb.dk                      ##
	## http://www.redweb.dk                 ##
	## Dato: 2013-06-11                     ##
	##########################################
-->
	<?php $this->setMetaData('generator','redWEB ApS – www.redweb.dk'); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.css" />
	<link rel="stylesheet/less" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/less/template.less" />
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/less.js" type="text/javascript"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/modernizr.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/scripts.js" type="text/javascript"></script>

</head>
<body>

<!--
    <div class='container'>

        <div class='row'>
            <div class='span12'>Header</div>
        </div>

        <div class='row'>

            <div class='span9'>
                <jdoc:include type="modules" name="position-3" style="xhtml" />
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="position-2" style="none" />
            </div>

            <div class='span3'>
                <jdoc:include type="modules" name="position-7" style="well" />
            </div>
        </div>

        <div class='row'>
            <div class='span12'>Footer</div>
        </div>
    </div>
-->

</body>
</html>