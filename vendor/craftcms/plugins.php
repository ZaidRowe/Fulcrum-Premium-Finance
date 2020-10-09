<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.8.1',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'doublesecretagency/craft-bootstrap' => 
  array (
    'class' => 'doublesecretagency\\bootstrap\\Bootstrap',
    'basePath' => $vendorDir . '/doublesecretagency/craft-bootstrap/src',
    'handle' => 'bootstrap',
    'aliases' => 
    array (
      '@doublesecretagency/bootstrap' => $vendorDir . '/doublesecretagency/craft-bootstrap/src',
    ),
    'name' => 'Bootstrap',
    'version' => '4.1.3.1',
    'schemaVersion' => '0.0.0',
    'description' => 'Build your site with the Bootstrap front-end framework.',
    'developer' => 'Double Secret Agency',
    'developerUrl' => 'https://www.doublesecretagency.com/plugins',
    'documentationUrl' => 'https://github.com/doublesecretagency/craft-bootstrap/blob/v4/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/doublesecretagency/craft-bootstrap/v4/CHANGELOG.md',
  ),
  'chasegiunta/scss' => 
  array (
    'class' => 'chasegiunta\\scss\\Scss',
    'basePath' => $vendorDir . '/chasegiunta/scss/src',
    'handle' => 'scss',
    'aliases' => 
    array (
      '@chasegiunta/scss' => $vendorDir . '/chasegiunta/scss/src',
    ),
    'name' => 'SCSS',
    'version' => '1.0.0',
    'description' => 'Compiler for SCSS',
    'developer' => 'Chase Giunta',
    'developerUrl' => 'https://chasegiunta.com',
    'documentationUrl' => 'https://github.com/chasegiunta/scss/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/chasegiunta/scss/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
      'scssService' => 'chasegiunta\\scss\\services\\ScssService',
    ),
  ),
  'utakka/redactor-anchors' => 
  array (
    'class' => 'utakka\\redactoranchors\\RedactorAnchors',
    'basePath' => $vendorDir . '/utakka/redactor-anchors/src',
    'handle' => 'redactor-anchors',
    'aliases' => 
    array (
      '@utakka/redactoranchors' => $vendorDir . '/utakka/redactor-anchors/src',
    ),
    'name' => 'Redactor Anchors',
    'version' => '1.1.0',
    'schemaVersion' => '2.0',
    'description' => 'Support for anchors in Craft 3 Redactor',
    'developer' => 'Lars Heidkämper',
    'developerUrl' => 'https://github.com/utakka',
    'documentationUrl' => 'https://github.com/utakka/craft-redactor-anchors/blob/master/README.md',
    'changelogUrl' => 'https://github.com/Utakka/craft-redactor-anchors/blob/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'swdevelopment/animate' => 
  array (
    'class' => 'swdevelopment\\animate\\Animate',
    'basePath' => $vendorDir . '/swdevelopment/animate/src',
    'handle' => 'animate',
    'aliases' => 
    array (
      '@swdevelopment/animate' => $vendorDir . '/swdevelopment/animate/src',
    ),
    'name' => 'Animate',
    'version' => '1.0.2',
    'description' => 'This will animate HTML elements using the AOS library.',
    'developer' => 'Tim Strawbridge',
    'developerUrl' => 'https://swdevteam.com',
    'documentationUrl' => 'https://github.com/sw-development-services/animate-plugin/blob/master/README.md',
    'changelogUrl' => 'https://github.com/sw-development-services/animate-plugin/master/CHANGELOG.md',
  ),
);
