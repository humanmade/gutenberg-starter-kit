<?php
/**
 * Plugin Name: Gutenberg Starter Kit
 * Description: A building block for building blocks!
 * Author: Human Made Limited
 * License: GPL-3.0
 */

namespace HM\Gutenberg_Starter_Kit;

require_once __DIR__ . '/inc/namespace.php';

add_action( 'plugins_loaded', __NAMESPACE__ . '\\setup' );
