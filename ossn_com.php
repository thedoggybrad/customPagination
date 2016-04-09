<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
function custom_pagination_init(){
	ossn_add_hook("pagination", "page_limit","set_new_page_limit");
}
function set_new_page_limit(){
   return 20;
}
ossn_register_callback('ossn', 'init', 'custom_pagination_init');
