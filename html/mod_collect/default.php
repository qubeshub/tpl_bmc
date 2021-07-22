<?php
/**
 * @package    hubzero-cms
 * @copyright  Copyright (c) 2005-2020 The Regents of the University of California.
 * @license    http://opensource.org/licenses/MIT MIT
 */

// no direct access
defined('_HZEXEC_') or die();

$this->css()
	 ->css('mod_collect.css')
     ->js();

$foo = App::get('editor')->display('description', '', '', '', 35, 5, false, 'field_description', null, null, array('class' => 'minimal no-footer'));

$url  = urldecode(Request::path());
$url  = implode('/', array_map('rawurlencode', explode('/', $url)));
$url .= (strstr($url, '?') ? '&' : '?') . 'tryto=collect';
?>

<a class="icon-collect btn collect-this" href="<?php echo htmlspecialchars($url); ?>">
	<?php echo Lang::txt('MOD_COLLECT_ACTION'); ?>
</a>
