<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/classes/ViewModel.php';

$viewModel = new ViewModel();
$templateRoot = dirname(__FILE__) . '/views/templates';

$m = new Mustache_Engine([
  'pragmas' => [Mustache_Engine::PRAGMA_BLOCKS],
  'loader' => new Mustache_Loader_FilesystemLoader($templateRoot),
  // 'partials_loader' => new Mustache_Loader_FilesystemLoader($templateRoot.'/components'),
]);

// var_dump($viewModel);

echo $m->render('index', $viewModel);

// $m = new Mustache_Engine([
//   'partials' => [
//     'parent' => '{{% BLOCKS }}Hello {{$ planet }}planet{{/ planet }}'
//   ],
// ]);

// echo $m->render('{{% BLOCKS }}{{< parent }}{{$ planet }}world!{{/ planet }}{{/ parent }}', []);
