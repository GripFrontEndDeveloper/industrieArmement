<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<div class="container-fluid">
    <!-- ------------------/#navigation principal --------------------->
   <div class="row row navigationLogo ">
       <div class="col-md-8 col-md-offset-2">
           <div class="col-md-2">
               <div id="main-menu" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>">
                   <?php if ($logo): ?>
                           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                               <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                           </a>
                   <?php endif; ?>
               </div>
           </div>
           <div class="col-md-7 col-md-offset-3">
               <?php if (($page['navigation']))?>
               <?php print render($page['navigation'])?>
           </div>
       </div>
   </div>
    <!-- ------------------/#Header --------------------->
    <div class="row" id="heroPage">
        <div class="col-md-8 col-md-2">
            <?php if($page['header']) ?>
            <?php print render ($page['header'])?>
        </div>
    </div>
    <!-- ------------------/#Contenu du site --------------------->
    <div class="row contenuSite">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-10 col-md-offset-1">
                <?php if($page['content'])?>
                <?php  print render($page['content']) ?>
            </div>
        </div>
    </div>
    <!-- ------------------/#Plus loin et quelques chiffres --------------------->
    <div class="col-md-6 col-md-offset-1 plusLoin">
        <div class="col-md-2">
            <img src="sites/all/themes/industrieArmement/images/pictoDownload.png" alt=" Picto pour télécharger">
        </div>
        <div class="col-md-10">
            <?php if($page['section']) ?>
            <?php print render($page['section']) ?>
        </div>
    </div>
    <div class="EnQuelqueChiffre col-md-2 col-md-offset-1">
        <?php if($page['section1']) ?>
        <?php print render($page['section1']) ?>
    </div>

    <!-- ------------------/#footer --------------------->
    <div class="row footer1">
        <?php if (($page['footercontact']) OR ($page['footerbdd']) OR ($page['footersubventions'])) : ; ?>
        <div class="col-md-10 col-md-offset-2">
            <div class="col-md-4">
                <?php print render($page['footercontact']); ?>
            </div>
            <div class="col-md-4">
                <?php print render($page['footerbdd']); ?>
            </div>
            <div class="col-md-4">
                <?php print render($page['footersubventions']); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
     <div class="row footer2">
         <div  class= "col-md-10 col-md-offset-1" >
             <?php if ($page['footer']): ?>
                 <div id="footer" class="clearfix">
                     <?php print render($page['footer']); ?>
                 </div> <!-- /#footer -->
             <?php endif; ?>
         </div>
     </div> <!-- /.section, /#footer-wrapper -->

    <!-- ------------------/#footer --------------------->
</div> <!-- /#container-fluid -->
