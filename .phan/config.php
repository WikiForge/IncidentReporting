<?php

$cfg = require __DIR__ . '/../vendor/mediawiki/mediawiki-phan-config/src/config.php';

$cfg['target_php_version'] = '8.1';

$cfg['suppress_issue_types'] = [
	'SecurityCheck-LikelyFalsePositive',
	'PhanPluginMixedKeyNoKey'
];

return $cfg;
