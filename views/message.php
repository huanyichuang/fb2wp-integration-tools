<?php
if (!defined('WPINC')) {
	die;
}
?>
<h2><?php esc_html_e('Feature description','fb2wp-integration-tools'); //這裡我把 h1 也順便改成 h2 了?></h2> 
<p><?php esc_html_e('The system will match the messages in Exact Match prior than Fuzzy Match, following the order of the messages.','fb2wp-integration-tools');//系統比對流程為先精準再模糊，依序由上往下，請自行規劃好對話動線。?></p>
<h3><?php esc_html_e('Exact Match','fb2wp-integration-tools');//精準比對(比對訊息來源完全一致才觸發)?></h3>
<p><?php esc_html_e('Triggered when input messages are matched exactly.','fb2wp-integration-tools'); ?></p>
<p><div id="match"></div></p>
<p><button id="add_match" class="button button-primary"><?php esc_html_e('Add new match','fb2wp-integration-tools');?></button> | <button id="save_match" class="button button-primary"><?php esc_html_e('Save changes','fb2wp-integration-tools');?></button></p>
<h3><?php esc_html_e('Fuzzy Match','fb2wp-integration-tools');//模糊比對(支援正規表示法)?></h3>
<p><?php esc_html_e('Regex is supported when using Fuzzy Match','fb2wp-integration-tools'); ?></p>
<p><div id="fuzzy"></div></p>
<p><button id="add_fuzzy" class="button button-primary"><?php esc_html_e('Add new match','fb2wp-integration-tools');?></button> | <button id="save_fuzzy" class="button button-primary"><?php esc_html_e('Save changes','fb2wp-integration-tools');?></button></p>