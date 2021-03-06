<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  
  <?php if($is_front) :?>
  <style>
  .page-container {
    margin-top: 50px;
  }
  </style>  
  
  <?php else :?>
  <link rel="stylesheet" href="/<?php echo path_to_theme();?>/jquery-ui/jquery-ui.min.css" />
  <style>
.page-container {
	width: 720px;
}

/* UI tabs full width hack */
.ui-tabs .ui-tabs-nav li a {
	padding: 0.3em 1.5em;
}

#slides {
  position:relative;
}

.slides_container {
	width: 570px;
	height: 270px;
	margin-left: auto;
	margin-right: auto;
}

.slides_container div {
	width: 570px;
	height: 270px;
	display: block;
}
</style>
  
  <?php endif;?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php print $scripts; ?>
  
  <?php if(! $is_front) :?>
<script>

(function($) {
  $(document).ready(function() {
    var tabsSelection = $('#tabs')
    , slidesSelection = $('#slides')
    ;

    if(tabsSelection.length) {
      $.getScript('<?php echo path_to_theme();?>/jquery-ui/jquery-ui.min.js'
        ,function() {
          tabsSelection.tabs();
        });
    }

    if(slidesSelection.length) {
      $.getScript('<?php echo path_to_theme();?>/slides.min.jquery.js'
        ,function() {
          slidesSelection.slides({
            'play':3000
            ,'generatePagination':false
          });
        });
    }
  });
}(jQuery));

</script>
  <?php endif;?>
</body>
</html>
