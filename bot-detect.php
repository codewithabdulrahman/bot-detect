<?php
/**
 * Plugin Name: Bot Detect
 * Plugin URI: https://www.devfor.co/
 * Description: Detect Bot and display content accordingly with these shortcodes:
 *  1- [google_bot_hide text=""][/google_bot_hide]
 *  2- [google_bot_show text=""][/google_bot_show]
 * Author: Devlobb
 * Version: 1.0
 * Author URI: http://github.com/devlobb
 * Text Domain: bot-detect
 * Domain Path: /languages
 * License: GPL-2.0+
 */
define ( 'DIR_PATH' , plugin_dir_path ( __FILE__ ) );
require_once sprintf ( "%shelper/BotAgent.php" , DIR_PATH );

use BotAgent\BotAgent;


/** @var Class Instance $BotAgent */
$agent = new BotAgent();
