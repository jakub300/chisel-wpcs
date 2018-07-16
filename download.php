<?php

$files = [
  'https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar' => 'external/phpcs.phar',
  'https://squizlabs.github.io/PHP_CodeSniffer/phpcbf.phar' => 'external/phpcbf.phar',
];


foreach($files as $url => $path) {
  copy($url, $path);

  if(!file_exists($path)) {
    exit(1);
  }
}
