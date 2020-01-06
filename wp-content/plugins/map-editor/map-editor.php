<?php
/**
 * Map Editor
 *
 * Plugin Name: Map Editor
 * Plugin URI:  https://wordpress.org/plugins/map-editor/
 * Description: Enables the WordPress map editor and the old-style Edit Post screen with TinyMCE, Meta Boxes, etc. Supports the older plugins that extend this screen.
 * Version:     1.5
 * Author:      WordPress Contributors
 * Author URI:  https://github.com/WordPress/map-editor/
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: map-editor
 * Domain Path: /languages
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

function form_creation(){
?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
    integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
    crossorigin=""></script>
    
	<style>
   	.entry-content {
            margin: 0px !important;
            padding: 0px !important;
            max-width: 999999px !important;
        }
    	#MapMainContainer {
    		display: flex;
    		width: 100%;
    		margin: 0px !important;
    		padding: 0px !important;
    		max-width: 999999px;
		}
		#MapContainer {
			flex: auto;
			text-align:center;
			
		}
		#MapContent {
			width: 500px;
			height: 700px;
			display: inline-block;
			box-shadow: 2px 2px 45px rgba(35,69,152,.15);
		}
		#MapControlContainer {
			width: 400px;
			box-shadow: -1px 5px 6px rgba(0,0,0,0.1);
		}
    </style>
    <div id="MapMainContainer">
        <div id="MapContainer">
        	<div id="MapContent">
        	</div>
        </div>
        <div id="MapControlContainer">
        	<div onclick="MapEditor_SetTitle()">setTitle</div>
        </div>
    </div>
    <script src='<?php echo plugin_dir_url(__FILE__). "js/mapeditor.js" ?>'></script>
    <script>
        
    </script>
<?php
}
add_shortcode('map-editor-shortcode', 'form_creation');