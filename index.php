<?php

use oddEvan\CapsuleUI\CapsuleUI;
use oddEvan\CapsuleUI\ComponentManager;
use oddEvan\CapsuleUI\TrackingRegistry;

require_once 'vendor/autoload.php';

$engine = new TrackingRegistry(CapsuleUI::createRegistry(\oddEvan\UI\Module::class));

$menuComponent = $engine->make('button', label: 'Home', href: '/');
$mainComponent = $engine->make(
	'generic-html',
	rawHtml: '<h1>Capsule UI</h1><p>Something odd this way comes...</p>',
);

$engine->prepare('app-shell', global: true, menu: $menuComponent, main: $mainComponent);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Capsule UI Demo (with oddEvan UI)</title>
		<style type="text/css">
			<?= $engine->css; ?>
		</style>
	</head>
	<body>
		<?= $engine->html; ?>
	</body>
</html>
