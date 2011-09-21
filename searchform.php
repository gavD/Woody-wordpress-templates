<?php
/**
 * The template for displaying Search Form
 *
 * see wp-includes/general-template.php
 *
 * @package WordPress
 * @subpackage woody
 */

get_header(); ?>

<?php $search_text = "Search"; ?>
<form role="search" method="get" id="searchform" action="<?php home_url('/') ?>/">
    <div>
    <input type="text" value="<?php echo $search_text; ?>"  name="s" id="s"
       onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}"
       onfocus="if (this.value == '<?php echo $search_text; ?>')
{this.value = '';}"
/><input type="image" id="searchsubmit" alt="Search" src="/wp-content/themes/woody/img/btnsearch.png" width="59" height="26" />
    </div>
</form>