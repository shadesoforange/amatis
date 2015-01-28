<?php

/**
 * @file
 * This file is the default admin notification template for Ubercart.
 */
?>

<p>
<b><?php print t('Order number:'); ?></b> <?php print $order_admin_link; ?><br />
<b><?php print t('Customer:'); ?></b> <?php print $order_first_name; ?> <?php print $order_last_name; ?> - <?php print $order_email; ?><br />
<br/>
<b><?php print t('Billing Address:'); ?></b><br />
                        <?php print $order_billing_address; ?><br />
                        <br />
                        <b><?php print t('Phone:'); ?></b><br />
                        <?php print $order_billing_phone; ?><br />
                     
                      <?php if ($shippable): ?>
                      
                        <b><?php print t('Shipping Address:'); ?></b><br />
                        <?php print $order_shipping_address; ?><br />
                        
                        <?php endif; ?>
                        <br />
                        
						
<b><?php print t('Order total:'); ?></b> <?php print $order_total; ?><br />
<b><?php print t('Shipping method:'); ?></b> <?php print $order_shipping_method; ?>


<p>
<?php print t('Products:'); ?><br />
<?php foreach ($products as $product): ?>
- <?php print $product->qty; ?> x <?php print $product->title; ?> - <?php print $product->total_price; ?><br />
&nbsp;&nbsp;<?php print t('SKU'); ?>: <?php print $product->model; ?><br />
    <?php if (!empty($product->data['attributes'])): ?>
    <?php foreach ($product->data['attributes'] as $attribute => $option): ?>
    &nbsp;&nbsp;<?php print t('@attribute: @options', array('@attribute' => $attribute, '@options' => implode(', ', (array)$option))); ?><br />
    <?php endforeach; ?>
    <?php endif; ?>
<br />
<?php endforeach; ?>
</p>

<p>
<?php print t('Order comments:'); ?><br />
<?php print $order_comments; ?>
</p>
