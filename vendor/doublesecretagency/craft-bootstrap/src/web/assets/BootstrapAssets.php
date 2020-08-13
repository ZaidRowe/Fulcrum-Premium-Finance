<?php
/**
 * Bootstrap plugin for Craft CMS
 *
 * Build your site with the Bootstrap front-end framework.
 *
 * @author    Double Secret Agency
 * @link      https://www.doublesecretagency.com/
 * @copyright Copyright (c) 2018 Double Secret Agency
 *
 * @author    Bootstrap
 * @link      https://getbootstrap.com/
 * @copyright 2011-2018 The Bootstrap Authors
 * @copyright 2011-2018 Twitter, Inc.
 * @license   MIT
 */

namespace doublesecretagency\bootstrap\web\assets;

use Craft;
use craft\web\AssetBundle;
use doublesecretagency\bootstrap\Bootstrap;

/**
 * Class BootstrapAssets
 * @since 4.1.1
 */
class BootstrapAssets extends AssetBundle
{

    /** @inheritdoc */
    public function init()
    {
        parent::init();

        // Whether to use CDN assets
        if (Bootstrap::$plugin->loadCdn) {

            // Get library version of Bootstrap
            $version = Bootstrap::$plugin->versions['bootstrap'];

            // Use CDN in production environment
            $bootstrapPath = "https://stackpath.bootstrapcdn.com/bootstrap/{$version}/";

        } else {

            // Use local files in all other environments
            $this->sourcePath = '@vendor/twbs/bootstrap/dist/';

            // No additional path necessary
            $bootstrapPath = '';

        }

        // Optionally bundle Popper
        if (Bootstrap::$plugin->getSettings()->includePopper) {
            $bootstrapJs = 'bootstrap.bundle.min.js';
        } else {
            $bootstrapJs = 'bootstrap.min.js';
        }

        // Register assets
        $this->css = [
            "{$bootstrapPath}css/bootstrap.min.css"
        ];
        $this->js = [
            "{$bootstrapPath}js/{$bootstrapJs}"
        ];

    }

}