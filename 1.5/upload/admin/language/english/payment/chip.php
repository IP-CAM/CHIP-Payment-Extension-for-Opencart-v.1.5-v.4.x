<?php

$_['heading_title'] = 'CHIP  - Better Payment & Business Solutions';

$_['text_success'] = 'Success: You have modified CHIP account details!';
$_['text_enabled'] = 'Enabled';
$_['text_disabled'] = 'Disabled';
$_['text_all_zones'] = 'All Zones';
$_['text_browse'] = 'Browse';
$_['text_clear'] = 'Clear';
$_['text_payment'] = 'Payment';
$_['text_chip'] = '<a href="https://www.chip-in.asia/" taget="_blank"><img src="view/image/payment/chip.png" alt="CHIP" title="CHIP" style="height: 20px;" /></a>';

$_['tab_general'] = 'General';
$_['tab_order_status'] = 'Order status';
$_['tab_api_details'] = 'API details';
$_['tab_customise'] = 'Customize checkout';

$_['entry_secret_key'] = 'Secret Key:<br /><span class="help">Secret Key can be retrieved from CHIP Collect Dashboard.</span>';
$_['entry_brand_id'] = 'Brand ID:<br /><span class="help">Secret Key can be retrieved from CHIP Collect Dashboard.</span>';
$_['entry_webhook_url'] = 'Webhook URL:<br /><span class="help">Optional: This can be set in the CHIP Collect Dashboard.</span>';
$_['entry_public_key'] = 'Public Key:<br /><span class="help">Public Key can be retrieved from CHIP Collect Dashboard.</span>';
$_['entry_general_public_key'] = 'General Public Key:<br /><span class="help">This public key will be filled automatically when the secret key is set correctly. It requires no configuration.</span>';
$_['entry_purchase_send_receipt'] = 'Purchase Send Receipt:';
$_['entry_due_strict'] = 'Purchase Due Strict:<br /><span class="help">This will prevent payment after passing due strict timing.</span>';
$_['entry_due_strict_timing'] = 'Purchase Due Strict Timing:<br /><span class="help">Set due strict timing in minutes. Setting 60 will make the payment timeout in 1 hour. If leave blank, default to 60 minutes</span>';
$_['entry_total'] = 'Total:<br /><span class="help">The checkout total the order must reach before this payment method becomes active.</span>';
$_['entry_geo_zone'] = 'Geo Zone:';
$_['entry_status'] = 'Status:<br /><span class="help">Whether to enable/disable CHIP payment gateway.</span>';
$_['entry_sort_order'] = 'Sort Order:<br /><span class="help">Payment gateway sorting on checkout page.</span>';
$_['entry_created_order_status'] = 'Created Order Status:<br /><span class="help">Default to Pending.</span>';
$_['entry_error_order_status'] = 'Error Order Status:<br /><span class="help">Default to Failed.</span>';
$_['entry_cancelled_order_status'] = 'Cancelled Order Status:<br /><span class="help">Default to Canceled.</span>';
$_['entry_overdue_order_status'] = 'Overdue Order Status:<br /><span class="help">Default to Expired.</span>';
$_['entry_paid_order_status'] = 'Paid Order Status:<br /><span class="help">Default to Processing.</span>';
$_['entry_refunded_order_status'] = 'Refunded Order Status:<br /><span class="help">Default to Refunded.</span>';
$_['entry_allow_notes'] = 'Notes:<br /><span class="help">To display note on checkout page.</span>';
$_['entry_logo'] = 'Logo:<br /><span class="help">To display logo on checkout page.</span>';

$_['error_permission'] = 'Warning: You do not have permission to modify CHIP!';
$_['error_secret_key'] = 'Error! You are required to set CHIP Secret Key';
$_['error_secret_key_invalid'] = 'Error! CHIP Secret Key is not valid';
$_['error_brand_id'] = 'Error! You are required to set Brand ID';
$_['error_public_key'] = 'Error! The public key is not valid';