<?php
namespace MailPoet\Twig;

use MailPoet\WP\Functions as WPFunctions;
use MailPoetVendor\Twig\Extension\AbstractExtension;
use MailPoetVendor\Twig\TwigFunction;

if (!defined('ABSPATH')) exit;

class Assets extends AbstractExtension {
  const CDN_URL = 'https://ps.w.org/mailpoet/';
  private $_globals;

  function __construct($globals) {
    $this->_globals = $globals;
  }

  function getFunctions() {
    return array(
      new TwigFunction(
        'stylesheet',
        array($this, 'generateStylesheet'),
        array('is_safe' => array('all'))
      ),
      new TwigFunction(
        'javascript',
        array($this, 'generateJavascript'),
        array('is_safe' => array('all'))
      ),
      new TwigFunction(
        'image_url',
        array($this, 'generateImageUrl'),
        array('is_safe' => array('all'))
      ),
      new TwigFunction(
        'cdn_url',
        array($this, 'generateCdnUrl'),
        array('is_safe' => array('all'))
      )
    );
  }

  function generateStylesheet() {
    $stylesheets = func_get_args();
    $output = array();

    foreach ($stylesheets as $stylesheet) {
      $output[] = sprintf(
        '<link rel="stylesheet" type="text/css" href="%s/dist/css/%s" />',
        $this->_globals['assets_url'],
        $this->getAssetFilename($this->_globals['assets_manifest_css'], $stylesheet)
      );
    }

    return join("\n", $output);
  }

  function generateJavascript() {
    $scripts = func_get_args();
    $output = array();

    foreach ($scripts as $script) {
      $output[] = sprintf(
        '<script type="text/javascript" src="%s/%s/%s"></script>',
        $this->_globals['assets_url'],
        strpos($script, 'lib/') === 0 ? 'js' : 'dist/js',
        $this->getAssetFileName($this->_globals['assets_manifest_js'], $script)
      );
    }

    return join("\n", $output);
  }

  function generateImageUrl($path) {
    return $this->appendVersionToUrl(
      $this->_globals['assets_url'] . '/img/' . $path
    );
  }

  function appendVersionToUrl($url) {
    return WPFunctions::get()->addQueryArg('mailpoet_version', $this->_globals['version'], $url);
  }

  function getAssetFileName($manifest, $asset) {
    return (!empty($manifest[$asset])) ? $manifest[$asset] : $asset;
  }

  function generateCdnUrl($path) {
    $useCdn = defined('MAILPOET_USE_CDN') ? MAILPOET_USE_CDN : true;
    return ($useCdn ? self::CDN_URL : $this->_globals['base_url'] . '/plugin_repository/') . "assets/$path";
  }
}
