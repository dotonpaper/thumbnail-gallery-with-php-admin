<?php

/*
* Title                   : Thumbnail Gallery (with PHP Admin)
* Version                 : 1.3
* File                    : template-admin.php
* File Version            : 1.3
* Created / Last Modified : 20 January 2013
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Admin template.
*/
    
    if (!isset($DOPTG_load_scripts)){
        exit('<h2 style="color:#aaaaaa; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold;">Warning! No direct script access allowed.</h2>');
    }
    
?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo DOPTG_TITLE; ?></title>

        <link rel="stylesheet" type="text/css" href="../libraries/gui/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="../libraries/gui/css/uploadify.css" />
        <link rel="stylesheet" type="text/css" href="../libraries/gui/css/jquery.Jcrop.css" />
        <link rel="stylesheet" type="text/css" href="../libraries/gui/css/colorpicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/gui/css/style.css" />

        <script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script type="text/JavaScript" src="../libraries/js/swfobject.js"></script>
        <script type="text/JavaScript" src="../libraries/js/jquery.uploadify.min.js"></script>
        <script type="text/JavaScript" src="../libraries/js/jquery.Jcrop.min.js"></script>
        <script type="text/JavaScript" src="../libraries/js/colorpicker.js"></script>
        <script type="text/JavaScript" src="../libraries/js/jquery.dop.ImageLoader.min.js"></script>
        <script type="text/JavaScript" src="assets/js/admin.js"></script>  
                        
        <script type="text/JavaScript">
            var DOPTG_curr_page = "Galleries List",
            DOPTG_URL = "<?php echo DOPTG_URL?>",
            DOPTG_ABSOLUTE_PATH = "<?php echo DOPTG_ABSOLUTE_PATH?>",

            DOPTG_TITLE = "<?php echo DOPTG_TITLE?>",
            DOPTG_SIGN_OUT = "<?php echo DOPTG_TITLE?>",
    
            // Loading ...
            DOPTG_LOAD = "<?php echo DOPTG_LOAD?>",
            DOPTG_GALLERIES_LOADED = "<?php echo DOPTG_GALLERIES_LOADED?>",
            DOPTG_IMAGES_LOADED = "<?php echo DOPTG_IMAGES_LOADED?>",
            DOPTG_NO_GALLERIES = "<?php echo DOPTG_NO_GALLERIES?>",
            DOPTG_NO_IMAGES = "<?php echo DOPTG_NO_IMAGES?>",
            DOPTG_GALLERY_LOADED = "<?php echo DOPTG_GALLERY_LOADED?>",
            DOPTG_IMAGE_LOADED = "<?php echo DOPTG_IMAGE_LOADED?>",

            // Save ...
            DOPTG_SAVE = "<?php echo DOPTG_SAVE?>",
            DOPTG_SELECT_FILE = "<?php echo DOPTG_SELECT_FILE?>",

            // Help
            DOPTG_GALLERIES_HELP = "<?php echo DOPTG_GALLERIES_HELP?>",
            DOPTG_GALLERIES_EDIT_INFO_HELP = "<?php echo DOPTG_GALLERIES_EDIT_INFO_HELP?>",
            DOPTG_GALLERY_EDIT_HELP = "<?php echo DOPTG_GALLERY_EDIT_HELP?>",
            DOPTG_GALLERY_EDIT_INFO_HELP = "<?php echo DOPTG_GALLERY_EDIT_INFO_HELP?>",
            DOPTG_ADD_IMAGES_HELP = "<?php echo DOPTG_ADD_IMAGES_HELP?>",
            DOPTG_ADD_IMAGES_HELP_AJAX = "<?php echo DOPTG_ADD_IMAGES_HELP_AJAX?>",
            DOPTG_ADD_IMAGES_HELP_UPLOADIFY = "<?php echo DOPTG_ADD_IMAGES_HELP_UPLOADIFY?>",
            DOPTG_ADD_IMAGES_HELP_FTP = "<?php echo DOPTG_ADD_IMAGES_HELP_FTP?>",
            DOPTG_IMAGE_EDIT_HELP = "<?php echo DOPTG_IMAGE_EDIT_HELP?>",

            // Form
            DOPTG_SUBMIT = "<?php echo DOPTG_SUBMIT?>",
            DOPTG_DELETE = "<?php echo DOPTG_DELETE?>",
            DOPTG_DEFAULT = "<?php echo DOPTG_DEFAULT?>",

            // Add Gallery
            DOPTG_ADD_GALLERY_NAME = "<?php echo DOPTG_ADD_GALLERY_NAME?>",
            DOPTG_ADD_GALLERY_SUBMIT = "<?php echo DOPTG_ADD_GALLERY_SUBMIT?>",
            DOPTG_ADD_GALLERY_SUBMITED = "<?php echo DOPTG_ADD_GALLERY_SUBMITED?>",
            DOPTG_ADD_GALERRY_SUCCESS = "<?php echo DOPTG_ADD_GALERRY_SUCCESS?>",

            // Edit Galleries
            DOPTG_EDIT_GALLERIES_SUBMIT = "<?php echo DOPTG_EDIT_GALLERIES_SUBMIT?>",
            DOPTG_EDIT_GALLERIES_SUCCESS = "<?php echo DOPTG_EDIT_GALLERIES_SUCCESS?>",

            // Edit Gallery
            DOPTG_EDIT_GALLERY_SUBMIT = "<?php echo DOPTG_EDIT_GALLERY_SUBMIT?>",
            DOPTG_EDIT_GALLERY_SUCCESS = "<?php echo DOPTG_EDIT_GALLERY_SUCCESS?>",
            DOPTG_EDIT_GALLERY_USE_DEFAULT_CONFIRMATION = "<?php echo DOPTG_EDIT_GALLERY_USE_DEFAULT_CONFIRMATION?>",
                        
            // Generate Gallery Code
            DOPTG_EDIT_GALLERY_CODE = "<?php echo DOPTG_EDIT_GALLERY_CODE?>",
            DOPTG_EDIT_GALLERY_CODE_HELP = "<?php echo DOPTG_EDIT_GALLERY_CODE_HELP?>",
            DOPTG_EDIT_GALLERY_CODE_INCLUDE_JQUERY = "<?php echo DOPTG_EDIT_GALLERY_CODE_INCLUDE_JQUERY?>",
            DOPTG_EDIT_GALLERY_CODE_INCLUDE_SCROLL = "<?php echo DOPTG_EDIT_GALLERY_CODE_INCLUDE_SCROLL?>",
            DOPTG_EDIT_GALLERY_CODE_INCLUDE_MOUSE = "<?php echo DOPTG_EDIT_GALLERY_CODE_INCLUDE_MOUSE?>",
            DOPTG_EDIT_GALLERY_CODE_INCLUDE_GALLERY = "<?php echo DOPTG_EDIT_GALLERY_CODE_INCLUDE_GALLERY?>",
            DOPTG_EDIT_GALLERY_CODE_GALLERY_FULLSCREEN = "<?php echo DOPTG_EDIT_GALLERY_CODE_GALLERY_FULLSCREEN?>",
            DOPTG_EDIT_GALLERY_CODE_GALLERY_EMBED = "<?php echo DOPTG_EDIT_GALLERY_CODE_GALLERY_EMBED?>",
            DOPTG_EDIT_GALLERY_CODE_COPY = "<?php echo DOPTG_EDIT_GALLERY_CODE_COPY?>",
            DOPTG_EDIT_GALLERY_CODE_LINK = "<?php echo DOPTG_EDIT_GALLERY_CODE_LINK?>",

            // Delete Gallery
            DOPTG_DELETE_GALLERY_CONFIRMATION = "<?php echo DOPTG_DELETE_GALLERY_CONFIRMATION?>",
            DOPTG_DELETE_GALLERY_SUBMIT = "<?php echo DOPTG_DELETE_GALLERY_SUBMIT?>",
            DOPTG_DELETE_GALLERY_SUBMITED = "<?php echo DOPTG_DELETE_GALLERY_SUBMITED?>",
            DOPTG_DELETE_GALERRY_SUCCESS = "<?php echo DOPTG_DELETE_GALERRY_SUCCESS?>",

            // Add Image
            DOPTG_ADD_IMAGE_SUBMIT = "<?php echo DOPTG_ADD_IMAGE_SUBMIT?>",
            DOPTG_ADD_IMAGE_SIMPLE_UPLOAD = "<?php echo DOPTG_ADD_IMAGE_SIMPLE_UPLOAD?>",
            DOPTG_ADD_IMAGE_MULTIPLE_UPLOAD = "<?php echo DOPTG_ADD_IMAGE_MULTIPLE_UPLOAD?>",
            DOPTG_ADD_IMAGE_FTP_UPLOAD = "<?php echo DOPTG_ADD_IMAGE_FTP_UPLOAD?>",
            DOPTG_ADD_IMAGE_SUBMITED = "<?php echo DOPTG_ADD_IMAGE_SUBMITED?>",
            DOPTG_ADD_IMAGE_SUCCESS = "<?php echo DOPTG_ADD_IMAGE_SUCCESS?>",
            DOPTG_SELECT_IMAGES = "<?php echo DOPTG_SELECT_IMAGES?>",
            DOPTG_SELECT_FTP_IMAGES = "<?php echo DOPTG_SELECT_FTP_IMAGES?>",

            // Sort Image
            DOPTG_SORT_IMAGES_SUBMITED = "<?php echo DOPTG_SORT_IMAGES_SUBMITED?>",
            DOPTG_SORT_IMAGES_SUCCESS = "<?php echo DOPTG_SORT_IMAGES_SUCCESS?>",

            // Edit Image
            DOPTG_EDIT_IMAGE_SUBMIT = "<?php echo DOPTG_EDIT_IMAGE_SUBMIT?>",
            DOPTG_EDIT_IMAGE_SUCCESS = "<?php echo DOPTG_EDIT_IMAGE_SUCCESS?>",
            DOPTG_EDIT_IMAGE_CROP_THUMBNAIL = "<?php echo DOPTG_EDIT_IMAGE_CROP_THUMBNAIL?>",
            DOPTG_EDIT_IMAGE_CURRENT_THUMBNAIL = "<?php echo DOPTG_EDIT_IMAGE_CURRENT_THUMBNAIL?>",
            DOPTG_EDIT_IMAGE_TITLE = "<?php echo DOPTG_EDIT_IMAGE_TITLE?>",
            DOPTG_EDIT_IMAGE_CAPTION = "<?php echo DOPTG_EDIT_IMAGE_CAPTION?>",
            DOPTG_EDIT_IMAGE_MEDIA = "<?php echo DOPTG_EDIT_IMAGE_MEDIA?>",
            DOPTG_EDIT_IMAGE_LIGHTBOX_MEDIA = "<?php echo DOPTG_EDIT_IMAGE_LIGHTBOX_MEDIA?>",
            DOPTG_EDIT_IMAGE_ENABLED = "<?php echo DOPTG_EDIT_IMAGE_ENABLED?>",

            // Delete Image
            DOPTG_DELETE_IMAGE_CONFIRMATION = "<?php echo DOPTG_DELETE_IMAGE_CONFIRMATION?>",
            DOPTG_DELETE_IMAGE_SUBMIT = "<?php echo DOPTG_DELETE_IMAGE_SUBMIT?>",
            DOPTG_DELETE_IMAGE_SUBMITED = "<?php echo DOPTG_DELETE_IMAGE_SUBMITED?>",
            DOPTG_DELETE_IMAGE_SUCCESS = "<?php echo DOPTG_DELETE_IMAGE_SUCCESS?>",

            // Settings
            DOPTG_GENERAL_STYLES_SETTINGS = "<?php echo DOPTG_GENERAL_STYLES_SETTINGS?>",
            DOPTG_GALLERY_NAME = "<?php echo DOPTG_GALLERY_NAME?>",
            DOPTG_WIDTH = "<?php echo DOPTG_WIDTH?>",
            DOPTG_HEIGHT = "<?php echo DOPTG_HEIGHT?>",
            DOPTG_BG_COLOR = "<?php echo DOPTG_BG_COLOR?>",
            DOPTG_BG_ALPHA = "<?php echo DOPTG_BG_ALPHA?>",
            DOPTG_IMAGES_ORDER = "<?php echo DOPTG_IMAGES_ORDER?>",
            DOPTG_RESPONSIVE_ENABLED = "<?php echo DOPTG_RESPONSIVE_ENABLED?>",

            DOPTG_THUMBNAILS_STYLES_SETTINGS = "<?php echo DOPTG_THUMBNAILS_STYLES_SETTINGS?>",
            DOPTG_THUMBNAILS_POSITION = "<?php echo DOPTG_THUMBNAILS_POSITION?>",
            DOPTG_THUMBNAILS_OVER_IMAGE = "<?php echo DOPTG_THUMBNAILS_OVER_IMAGE?>",
            DOPTG_THUMBNAILS_BG_COLOR = "<?php echo DOPTG_THUMBNAILS_BG_COLOR?>",
            DOPTG_THUMBNAILS_BG_ALPHA = "<?php echo DOPTG_THUMBNAILS_BG_ALPHA?>",
            DOPTG_THUMBNAILS_SPACING = "<?php echo DOPTG_THUMBNAILS_SPACING?>",
            DOPTG_THUMBNAILS_PADDING_TOP = "<?php echo DOPTG_THUMBNAILS_PADDING_TOP?>",
            DOPTG_THUMBNAILS_PADDING_RIGHT = "<?php echo DOPTG_THUMBNAILS_PADDING_RIGHT?>",
            DOPTG_THUMBNAILS_PADDING_BOTTOM = "<?php echo DOPTG_THUMBNAILS_PADDING_BOTTOM?>",
            DOPTG_THUMBNAILS_PADDING_LEFT = "<?php echo DOPTG_THUMBNAILS_PADDING_LEFT?>",

            DOPTG_THUMBNAILS_NAVIGATION_STYLES_SETTINGS = "<?php echo DOPTG_THUMBNAILS_NAVIGATION_STYLES_SETTINGS?>",
            DOPTG_THUMBNAILS_NAVIGATION = "<?php echo DOPTG_THUMBNAILS_NAVIGATION?>",
            DOPTG_THUMBNAILS_NAVIGATION_PREV = "<?php echo DOPTG_THUMBNAILS_NAVIGATION_PREV?>",
            DOPTG_ADD_THUMBNAILS_NAVIGATION_PREV_SUBMITED = "<?php echo DOPTG_ADD_THUMBNAILS_NAVIGATION_PREV_SUBMITED?>",
            DOPTG_ADD_THUMBNAILS_NAVIGATION_PREV_SUCCESS = "<?php echo DOPTG_ADD_THUMBNAILS_NAVIGATION_PREV_SUCCESS?>",        
            DOPTG_THUMBNAILS_NAVIGATION_PREV_HOVER = "<?php echo DOPTG_THUMBNAILS_NAVIGATION_PREV_HOVER?>",
            DOPTG_ADD_THUMBNAILS_NAVIGATION_PREV_HOVER_SUBMITED = "<?php echo DOPTG_ADD_THUMBNAILS_NAVIGATION_PREV_HOVER_SUBMITED?>",
            DOPTG_ADD_THUMBNAILS_NAVIGATION_PREV_HOVER_SUCCESS = "<?php echo DOPTG_ADD_THUMBNAILS_NAVIGATION_PREV_HOVER_SUCCESS?>",
            DOPTG_THUMBNAILS_NAVIGATION_NEXT = "<?php echo DOPTG_THUMBNAILS_NAVIGATION_NEXT?>",
            DOPTG_ADD_THUMBNAILS_NAVIGATION_NEXT_SUBMITED = "<?php echo DOPTG_ADD_THUMBNAILS_NAVIGATION_NEXT_SUBMITED?>",
            DOPTG_ADD_THUMBNAILS_NAVIGATION_NEXT_SUCCESS = "<?php echo DOPTG_ADD_THUMBNAILS_NAVIGATION_NEXT_SUCCESS?>",
            DOPTG_THUMBNAILS_NAVIGATION_NEXT_HOVER = "<?php echo DOPTG_THUMBNAILS_NAVIGATION_NEXT_HOVER?>",
            DOPTG_ADD_THUMBNAILS_NAVIGATION_NEXT_HOVER_SUBMITED = "<?php echo DOPTG_ADD_THUMBNAILS_NAVIGATION_NEXT_HOVER_SUBMITED?>",
            DOPTG_ADD_THUMBNAILS_NAVIGATION_NEXT_HOVER_SUCCESS = "<?php echo DOPTG_ADD_THUMBNAILS_NAVIGATION_NEXT_HOVER_SUCCESS?>",

            DOPTG_THUMBNAIL_STYLES_SETTINGS = "<?php echo DOPTG_THUMBNAIL_STYLES_SETTINGS?>",
            DOPTG_THUMBNAIL_LOADER = "<?php echo DOPTG_THUMBNAIL_LOADER?>",
            DOPTG_ADD_THUMBNAIL_LOADER_SUBMITED = "<?php echo DOPTG_ADD_THUMBNAIL_LOADER_SUBMITED?>",
            DOPTG_ADD_THUMBNAIL_LOADER_SUCCESS = "<?php echo DOPTG_ADD_THUMBNAIL_LOADER_SUCCESS?>",
            DOPTG_THUMBNAIL_WIDTH = "<?php echo DOPTG_THUMBNAIL_WIDTH?>",
            DOPTG_THUMBNAIL_HEIGHT = "<?php echo DOPTG_THUMBNAIL_HEIGHT?>",
            DOPTG_THUMBNAIL_WIDTH_MOBILE = "<?php echo DOPTG_THUMBNAIL_WIDTH_MOBILE?>",
            DOPTG_THUMBNAIL_HEIGHT_MOBILE = "<?php echo DOPTG_THUMBNAIL_HEIGHT_MOBILE?>",
            DOPTG_THUMBNAIL_ALPHA = "<?php echo DOPTG_THUMBNAIL_ALPHA?>",
            DOPTG_THUMBNAIL_ALPHA_HOVER = "<?php echo DOPTG_THUMBNAIL_ALPHA_HOVER?>",
            DOPTG_THUMBNAIL_ALPHA_SELECTED = "<?php echo DOPTG_THUMBNAIL_ALPHA_SELECTED?>",
            DOPTG_THUMBNAIL_BG_COLOR = "<?php echo DOPTG_THUMBNAIL_BG_COLOR?>",
            DOPTG_THUMBNAIL_BG_COLOR_HOVER = "<?php echo DOPTG_THUMBNAIL_BG_COLOR_HOVER?>",
            DOPTG_THUMBNAIL_BG_COLOR_SELECTED = "<?php echo DOPTG_THUMBNAIL_BG_COLOR_SELECTED?>",
            DOPTG_THUMBNAIL_BORDER_SIZE = "<?php echo DOPTG_THUMBNAIL_BORDER_SIZE?>",
            DOPTG_THUMBNAIL_BORDER_COLOR = "<?php echo DOPTG_THUMBNAIL_BORDER_COLOR?>",
            DOPTG_THUMBNAIL_BORDER_COLOR_HOVER = "<?php echo DOPTG_THUMBNAIL_BORDER_COLOR_HOVER?>",
            DOPTG_THUMBNAIL_BORDER_COLOR_SELECTED = "<?php echo DOPTG_THUMBNAIL_BORDER_COLOR_SELECTED?>",
            DOPTG_THUMBNAIL_PADDING_TOP = "<?php echo DOPTG_THUMBNAIL_PADDING_TOP?>",
            DOPTG_THUMBNAIL_PADDING_RIGHT = "<?php echo DOPTG_THUMBNAIL_PADDING_RIGHT?>",
            DOPTG_THUMBNAIL_PADDING_BOTTOM = "<?php echo DOPTG_THUMBNAIL_PADDING_BOTTOM?>",
            DOPTG_THUMBNAIL_PADDING_LEFT = "<?php echo DOPTG_THUMBNAIL_PADDING_LEFT?>",

            DOPTG_IMAGE_LOADER = "<?php echo DOPTG_IMAGE_LOADER?>",
            DOPTG_IMAGE_STYLES_SETTINGS = "<?php echo DOPTG_IMAGE_STYLES_SETTINGS?>",
            DOPTG_ADD_IMAGE_LOADER_SUBMITED = "<?php echo DOPTG_ADD_IMAGE_LOADER_SUBMITED?>",
            DOPTG_ADD_IMAGE_LOADER_SUCCESS = "<?php echo DOPTG_ADD_IMAGE_LOADER_SUCCESS?>",
            DOPTG_IMAGE_BG_COLOR = "<?php echo DOPTG_IMAGE_BG_COLOR?>",
            DOPTG_IMAGE_BG_ALPHA = "<?php echo DOPTG_IMAGE_BG_ALPHA?>",
            DOPTG_IMAGE_DISPLAY_TYPE = "<?php echo DOPTG_IMAGE_DISPLAY_TYPE?>",
            DOPTG_IMAGE_DISPLAY_TIME = "<?php echo DOPTG_IMAGE_DISPLAY_TIME?>",
            DOPTG_IMAGE_MARGIN_TOP = "<?php echo DOPTG_IMAGE_MARGIN_TOP?>",
            DOPTG_IMAGE_MARGIN_RIGHT = "<?php echo DOPTG_IMAGE_MARGIN_RIGHT?>",
            DOPTG_IMAGE_MARGIN_BOTTOM = "<?php echo DOPTG_IMAGE_MARGIN_BOTTOM?>",
            DOPTG_IMAGE_MARGIN_LEFT = "<?php echo DOPTG_IMAGE_MARGIN_LEFT?>",
            DOPTG_IMAGE_PADDING_TOP = "<?php echo DOPTG_IMAGE_PADDING_TOP?>",
            DOPTG_IMAGE_PADDING_RIGHT = "<?php echo DOPTG_IMAGE_PADDING_RIGHT?>",
            DOPTG_IMAGE_PADDING_BOTTOM = "<?php echo DOPTG_IMAGE_PADDING_BOTTOM?>",
            DOPTG_IMAGE_PADDING_LEFT = "<?php echo DOPTG_IMAGE_PADDING_LEFT?>",

            DOPTG_NAVIGATION_STYLES_SETTINGS = "<?php echo DOPTG_NAVIGATION_STYLES_SETTINGS?>",
            DOPTG_NAVIGATION_ENABLED = "<?php echo DOPTG_NAVIGATION_ENABLED?>",
            DOPTG_NAVIGATION_OVER_IMAGE = "<?php echo DOPTG_NAVIGATION_OVER_IMAGE?>",
            DOPTG_NAVIGATION_PREV = "<?php echo DOPTG_NAVIGATION_PREV?>",
            DOPTG_ADD_NAVIGATION_PREV_SUBMITED = "<?php echo DOPTG_ADD_NAVIGATION_PREV_SUBMITED?>",
            DOPTG_ADD_NAVIGATION_PREV_SUCCESS = "<?php echo DOPTG_ADD_NAVIGATION_PREV_SUCCESS?>",
            DOPTG_NAVIGATION_PREV_HOVER = "<?php echo DOPTG_NAVIGATION_PREV_HOVER?>",
            DOPTG_ADD_NAVIGATION_PREV_HOVER_SUBMITED = "<?php echo DOPTG_ADD_NAVIGATION_PREV_HOVER_SUBMITED?>",
            DOPTG_ADD_NAVIGATION_PREV_HOVER_SUCCESS = "<?php echo DOPTG_ADD_NAVIGATION_PREV_HOVER_SUCCESS?>",
            DOPTG_NAVIGATION_NEXT = "<?php echo DOPTG_NAVIGATION_NEXT?>",
            DOPTG_ADD_NAVIGATION_NEXT_SUBMITED = "<?php echo DOPTG_ADD_NAVIGATION_NEXT_SUBMITED?>",
            DOPTG_ADD_NAVIGATION_NEXT_SUCCESS = "<?php echo DOPTG_ADD_NAVIGATION_NEXT_SUCCESS?>",
            DOPTG_NAVIGATION_NEXT_HOVER = "<?php echo DOPTG_NAVIGATION_NEXT_HOVER?>",
            DOPTG_ADD_NAVIGATION_NEXT_HOVER_SUBMITED = "<?php echo DOPTG_ADD_NAVIGATION_NEXT_HOVER_SUBMITED?>",
            DOPTG_ADD_NAVIGATION_NEXT_HOVER_SUCCESS = "<?php echo DOPTG_ADD_NAVIGATION_NEXT_HOVER_SUCCESS?>",
            DOPTG_NAVIGATION_LIGHTBOX = "<?php echo DOPTG_NAVIGATION_LIGHTBOX?>",
            DOPTG_ADD_NAVIGATION_LIGHTBOX_SUBMITED = "<?php echo DOPTG_ADD_NAVIGATION_LIGHTBOX_SUBMITED?>",
            DOPTG_ADD_NAVIGATION_LIGHTBOX_SUCCESS = "<?php echo DOPTG_ADD_NAVIGATION_LIGHTBOX_SUCCESS?>",
            DOPTG_NAVIGATION_LIGHTBOX_HOVER = "<?php echo DOPTG_NAVIGATION_LIGHTBOX_HOVER?>",
            DOPTG_ADD_NAVIGATION_LIGHTBOX_HOVER_SUBMITED = "<?php echo DOPTG_ADD_NAVIGATION_LIGHTBOX_HOVER_SUBMITED?>",
            DOPTG_ADD_NAVIGATION_LIGHTBOX_HOVER_SUCCESS = "<?php echo DOPTG_ADD_NAVIGATION_LIGHTBOX_HOVER_SUCCESS?>",
            DOPTG_NAVIGATION_TOUCH_DEVICE_SWIPE_ENABLED = "<?php echo DOPTG_NAVIGATION_TOUCH_DEVICE_SWIPE_ENABLED?>",

            DOPTG_CAPTION_STYLES_SETTINGS = "<?php echo DOPTG_CAPTION_STYLES_SETTINGS?>",
            DOPTG_CAPTION_WIDTH = "<?php echo DOPTG_CAPTION_WIDTH?>",
            DOPTG_CAPTION_HEIGHT = "<?php echo DOPTG_CAPTION_HEIGHT?>",
            DOPTG_CAPTION_TITLE_COLOR = "<?php echo DOPTG_CAPTION_TITLE_COLOR?>",
            DOPTG_CAPTION_TEXT_COLOR = "<?php echo DOPTG_CAPTION_TEXT_COLOR?>",
            DOPTG_CAPTION_BG_COLOR = "<?php echo DOPTG_CAPTION_BG_COLOR?>",
            DOPTG_CAPTION_BG_ALPHA = "<?php echo DOPTG_CAPTION_BG_ALPHA?>",
            DOPTG_CAPTION_POSITION = "<?php echo DOPTG_CAPTION_POSITION?>",
            DOPTG_CAPTION_OVER_IMAGE = "<?php echo DOPTG_CAPTION_OVER_IMAGE?>",
            DOPTG_CAPTION_SCROLL_SCRUB_COLOR = "<?php echo DOPTG_CAPTION_SCROLL_SCRUB_COLOR?>",
            DOPTG_CAPTION_SCROLL_BG_COLOR = "<?php echo DOPTG_CAPTION_SCROLL_BG_COLOR?>",
            DOPTG_CAPTION_MARGIN_TOP = "<?php echo DOPTG_CAPTION_MARGIN_TOP?>",
            DOPTG_CAPTION_MARGIN_RIGHT = "<?php echo DOPTG_CAPTION_MARGIN_RIGHT?>",
            DOPTG_CAPTION_MARGIN_BOTTOM = "<?php echo DOPTG_CAPTION_MARGIN_BOTTOM?>",
            DOPTG_CAPTION_MARGIN_LEFT = "<?php echo DOPTG_CAPTION_MARGIN_LEFT?>",
            DOPTG_CAPTION_PADDING_TOP = "<?php echo DOPTG_CAPTION_PADDING_TOP?>",
            DOPTG_CAPTION_PADDING_RIGHT = "<?php echo DOPTG_CAPTION_PADDING_RIGHT?>",
            DOPTG_CAPTION_PADDING_BOTTOM = "<?php echo DOPTG_CAPTION_PADDING_BOTTOM?>",
            DOPTG_CAPTION_PADDING_LEFT = "<?php echo DOPTG_CAPTION_PADDING_LEFT?>",

            DOPTG_LIGHTBOX_STYLES_SETTINGS = "<?php echo DOPTG_LIGHTBOX_STYLES_SETTINGS?>",
            DOPTG_LIGHTBOX_ENABLED = "<?php echo DOPTG_LIGHTBOX_ENABLED?>",
            DOPTG_LIGHTBOX_WINDOW_COLOR = "<?php echo DOPTG_LIGHTBOX_WINDOW_COLOR?>",
            DOPTG_LIGHTBOX_WINDOW_ALPHA = "<?php echo DOPTG_LIGHTBOX_WINDOW_ALPHA?>",
            DOPTG_LIGHTBOX_LOADER = "<?php echo DOPTG_LIGHTBOX_LOADER?>",
            DOPTG_ADD_LIGHTBOX_LOADER_SUBMITED = "<?php echo DOPTG_ADD_LIGHTBOX_LOADER_SUBMITED?>",
            DOPTG_ADD_LIGHTBOX_LOADER_SUCCESS = "<?php echo DOPTG_ADD_LIGHTBOX_LOADER_SUCCESS?>",
            DOPTG_LIGHTBOX_BACKGROUND_COLOR = "<?php echo DOPTG_LIGHTBOX_BACKGROUND_COLOR?>",
            DOPTG_LIGHTBOX_BACKGROUND_ALPHA = "<?php echo DOPTG_LIGHTBOX_BACKGROUND_ALPHA?>",
            DOPTG_LIGHTBOX_MARGIN_TOP = "<?php echo DOPTG_LIGHTBOX_MARGIN_TOP?>",
            DOPTG_LIGHTBOX_MARGIN_RIGHT = "<?php echo DOPTG_LIGHTBOX_MARGIN_RIGHT?>",
            DOPTG_LIGHTBOX_MARGIN_BOTTOM = "<?php echo DOPTG_LIGHTBOX_MARGIN_BOTTOM?>",
            DOPTG_LIGHTBOX_MARGIN_LEFT = "<?php echo DOPTG_LIGHTBOX_MARGIN_LEFT?>",
            DOPTG_LIGHTBOX_PADDING_TOP = "<?php echo DOPTG_LIGHTBOX_PADDING_TOP?>",
            DOPTG_LIGHTBOX_PADDING_RIGHT = "<?php echo DOPTG_LIGHTBOX_PADDING_RIGHT?>",
            DOPTG_LIGHTBOX_PADDING_BOTTOM = "<?php echo DOPTG_LIGHTBOX_PADDING_BOTTOM?>",
            DOPTG_LIGHTBOX_PADDING_LEFT = "<?php echo DOPTG_LIGHTBOX_PADDING_LEFT?>",

            DOPTG_LIGHTBOX_NAVIGATION_STYLES_SETTINGS = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_STYLES_SETTINGS?>",
            DOPTG_LIGHTBOX_NAVIGATION_PREV = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_PREV?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_PREV_SUBMITED = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_PREV_SUBMITED?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_PREV_SUCCESS = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_PREV_SUCCESS?>",
            DOPTG_LIGHTBOX_NAVIGATION_PREV_HOVER = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_PREV_HOVER?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_PREV_HOVER_SUBMITED = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_PREV_HOVER_SUBMITED?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_PREV_HOVER_SUCCESS = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_PREV_HOVER_SUCCESS?>",
            DOPTG_LIGHTBOX_NAVIGATION_NEXT = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_NEXT?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_NEXT_SUBMITED = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_NEXT_SUBMITED?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_NEXT_SUCCESS = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_NEXT_SUCCESS?>",
            DOPTG_LIGHTBOX_NAVIGATION_NEXT_HOVER = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_NEXT_HOVER?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_NEXT_HOVER_SUBMITED = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_NEXT_HOVER_SUBMITED?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_NEXT_HOVER_SUCCESS = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_NEXT_HOVER_SUCCESS?>",
            DOPTG_LIGHTBOX_NAVIGATION_CLOSE = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_CLOSE?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_CLOSE_SUBMITED = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_CLOSE_SUBMITED?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_CLOSE_SUCCESS = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_CLOSE_SUCCESS?>",
            DOPTG_LIGHTBOX_NAVIGATION_CLOSE_HOVER = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_CLOSE_HOVER?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_CLOSE_HOVER_SUBMITED = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_CLOSE_HOVER_SUBMITED?>",
            DOPTG_ADD_LIGHTBOX_NAVIGATION_CLOSE_HOVER_SUCCESS = "<?php echo DOPTG_ADD_LIGHTBOX_NAVIGATION_CLOSE_HOVER_SUCCESS?>",
            DOPTG_LIGHTBOX_NAVIGATION_INFO_BG_COLOR = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_INFO_BG_COLOR?>",
            DOPTG_LIGHTBOX_NAVIGATION_INFO_TEXT_COLOR = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_INFO_TEXT_COLOR?>",
            DOPTG_LIGHTBOX_NAVIGATION_TOUCH_DEVICE_SWIPE_ENABLED = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_TOUCH_DEVICE_SWIPE_ENABLED?>",

            DOPTG_SOCIAL_SHARE_STYLES_SETTINGS = "<?php echo DOPTG_SOCIAL_SHARE_STYLES_SETTINGS?>",
            DOPTG_SOCIAL_SHARE_ENABLED = "<?php echo DOPTG_SOCIAL_SHARE_ENABLED?>",
            DOPTG_SOCIAL_SHARE = "<?php echo DOPTG_SOCIAL_SHARE?>",
            DOPTG_SOCIAL_SHARE_SUBMITED = "<?php echo DOPTG_SOCIAL_SHARE_SUBMITED?>",
            DOPTG_SOCIAL_SHARE_SUCCESS = "<?php echo DOPTG_SOCIAL_SHARE_SUCCESS?>",
            DOPTG_SOCIAL_SHARE_LIGHTBOX = "<?php echo DOPTG_SOCIAL_SHARE_LIGHTBOX?>",
            DOPTG_SOCIAL_SHARE_LIGHTBOX_SUBMITED = "<?php echo DOPTG_SOCIAL_SHARE_LIGHTBOX_SUBMITED?>",
            DOPTG_SOCIAL_SHARE_LIGHTBOX_SUCCESS = "<?php echo DOPTG_SOCIAL_SHARE_LIGHTBOX_SUCCESS?>",

            DOPTG_TOOLTIP_STYLES_SETTINGS = "<?php echo DOPTG_TOOLTIP_STYLES_SETTINGS?>",
            DOPTG_TOOLTIP_ENABLED = "<?php echo DOPTG_TOOLTIP_ENABLED?>",
            DOPTG_TOOLTIP_BG_COLOR = "<?php echo DOPTG_TOOLTIP_BG_COLOR?>",
            DOPTG_TOOLTIP_STROKE_COLOR = "<?php echo DOPTG_TOOLTIP_STROKE_COLOR?>",
            DOPTG_TOOLTIP_TEXT_COLOR = "<?php echo DOPTG_TOOLTIP_TEXT_COLOR?>",

            DOPTG_SLIDESHOW_SETTINGS = "<?php echo DOPTG_SLIDESHOW_SETTINGS?>",
            DOPTG_SLIDESHOW = "<?php echo DOPTG_SLIDESHOW?>",
            DOPTG_SLIDESHOW_TIME = "<?php echo DOPTG_SLIDESHOW_TIME?>",
            DOPTG_SLIDESHOW_AUTOSTART = "<?php echo DOPTG_SLIDESHOW_AUTOSTART?>",
            DOPTG_SLIDESHOW_LOOP = "<?php echo DOPTG_SLIDESHOW_LOOP?>",
            DOPTG_SLIDESHOW_PLAY = "<?php echo DOPTG_SLIDESHOW_PLAY?>",
            DOPTG_SLIDESHOW_PLAY_SUBMITED = "<?php echo DOPTG_SLIDESHOW_PLAY_SUBMITED?>",
            DOPTG_SLIDESHOW_PLAY_SUCCESS = "<?php echo DOPTG_SLIDESHOW_PLAY_SUCCESS?>",
            DOPTG_SLIDESHOW_PLAY_HOVER = "<?php echo DOPTG_SLIDESHOW_PLAY_HOVER?>",
            DOPTG_SLIDESHOW_PLAY_HOVER_SUBMITED = "<?php echo DOPTG_SLIDESHOW_PLAY_HOVER_SUBMITED?>",
            DOPTG_SLIDESHOW_PLAY_HOVER_SUCCESS = "<?php echo DOPTG_SLIDESHOW_PLAY_HOVER_SUCCESS?>",
            DOPTG_SLIDESHOW_PAUSE = "<?php echo DOPTG_SLIDESHOW_PAUSE?>",
            DOPTG_SLIDESHOW_PAUSE_SUBMITED = "<?php echo DOPTG_SLIDESHOW_PAUSE_SUBMITED?>",
            DOPTG_SLIDESHOW_PAUSE_SUCCESS = "<?php echo DOPTG_SLIDESHOW_PAUSE_SUCCESS?>",
            DOPTG_SLIDESHOW_PAUSE_HOVER = "<?php echo DOPTG_SLIDESHOW_PAUSE_HOVER?>",
            DOPTG_SLIDESHOW_PAUSE_HOVER_SUBMITED = "<?php echo DOPTG_SLIDESHOW_PAUSE_HOVER_SUBMITED?>",
            DOPTG_SLIDESHOW_PAUSE_HOVER_SUCCESS = "<?php echo DOPTG_SLIDESHOW_PAUSE_HOVER_SUCCESS?>",

            DOPTG_AUTO_HIDE_SETTINGS = "<?php echo DOPTG_AUTO_HIDE_SETTINGS?>",
            DOPTG_AUTO_HIDE = "<?php echo DOPTG_AUTO_HIDE?>",
            DOPTG_AUTO_HIDE_TIME = "<?php echo DOPTG_AUTO_HIDE_TIME?>",

            DOPTG_GO_TOP = "<?php echo DOPTG_GO_TOP?>",

            DOPTG_GALLERY_NAME_INFO = "<?php echo DOPTG_GALLERY_NAME_INFO?>",
            DOPTG_WIDTH_INFO = "<?php echo DOPTG_WIDTH_INFO?>",
            DOPTG_HEIGHT_INFO = "<?php echo DOPTG_HEIGHT_INFO?>",
            DOPTG_BG_COLOR_INFO = "<?php echo DOPTG_BG_COLOR_INFO?>",
            DOPTG_BG_ALPHA_INFO = "<?php echo DOPTG_BG_ALPHA_INFO?>",
            DOPTG_IMAGES_ORDER_INFO = "<?php echo DOPTG_IMAGES_ORDER_INFO?>",
            DOPTG_RESPONSIVE_ENABLED_INFO = "<?php echo DOPTG_RESPONSIVE_ENABLED_INFO?>",

            DOPTG_THUMBNAILS_POSITION_INFO = "<?php echo DOPTG_THUMBNAILS_POSITION_INFO?>",
            DOPTG_THUMBNAILS_OVER_IMAGE_INFO = "<?php echo DOPTG_THUMBNAILS_OVER_IMAGE_INFO?>",
            DOPTG_THUMBNAILS_BG_COLOR_INFO = "<?php echo DOPTG_THUMBNAILS_BG_COLOR_INFO?>",
            DOPTG_THUMBNAILS_BG_ALPHA_INFO = "<?php echo DOPTG_THUMBNAILS_BG_ALPHA_INFO?>",
            DOPTG_THUMBNAILS_SPACING_INFO = "<?php echo DOPTG_THUMBNAILS_SPACING_INFO?>",
            DOPTG_THUMBNAILS_PADDING_TOP_INFO = "<?php echo DOPTG_THUMBNAILS_PADDING_TOP_INFO?>",
            DOPTG_THUMBNAILS_PADDING_RIGHT_INFO = "<?php echo DOPTG_THUMBNAILS_PADDING_RIGHT_INFO?>",
            DOPTG_THUMBNAILS_PADDING_BOTTOM_INFO = "<?php echo DOPTG_THUMBNAILS_PADDING_BOTTOM_INFO?>",
            DOPTG_THUMBNAILS_PADDING_LEFT_INFO = "<?php echo DOPTG_THUMBNAILS_PADDING_LEFT_INFO?>",

            DOPTG_THUMBNAILS_NAVIGATION_INFO = "<?php echo DOPTG_THUMBNAILS_NAVIGATION_INFO?>",
            DOPTG_THUMBNAILS_NAVIGATION_PREV_INFO = "<?php echo DOPTG_THUMBNAILS_NAVIGATION_PREV_INFO?>",
            DOPTG_THUMBNAILS_NAVIGATION_PREV_HOVER_INFO = "<?php echo DOPTG_THUMBNAILS_NAVIGATION_PREV_HOVER_INFO?>",
            DOPTG_THUMBNAILS_NAVIGATION_NEXT_INFO = "<?php echo DOPTG_THUMBNAILS_NAVIGATION_NEXT_INFO?>",
            DOPTG_THUMBNAILS_NAVIGATION_NEXT_HOVER_INFO = "<?php echo DOPTG_THUMBNAILS_NAVIGATION_NEXT_HOVER_INFO?>",

            DOPTG_THUMBNAIL_LOADER_INFO = "<?php echo DOPTG_THUMBNAIL_LOADER_INFO?>",
            DOPTG_THUMBNAIL_WIDTH_INFO = "<?php echo DOPTG_THUMBNAIL_WIDTH_INFO?>",
            DOPTG_THUMBNAIL_HEIGHT_INFO = "<?php echo DOPTG_THUMBNAIL_HEIGHT_INFO?>",
            DOPTG_THUMBNAIL_WIDTH_MOBILE_INFO = "<?php echo DOPTG_THUMBNAIL_WIDTH_MOBILE_INFO?>",
            DOPTG_THUMBNAIL_HEIGHT_MOBILE_INFO = "<?php echo DOPTG_THUMBNAIL_HEIGHT_MOBILE_INFO?>",
            DOPTG_THUMBNAIL_ALPHA_INFO = "<?php echo DOPTG_THUMBNAIL_ALPHA_INFO?>",
            DOPTG_THUMBNAIL_ALPHA_HOVER_INFO = "<?php echo DOPTG_THUMBNAIL_ALPHA_HOVER_INFO?>",
            DOPTG_THUMBNAIL_ALPHA_SELECTED_INFO = "<?php echo DOPTG_THUMBNAIL_ALPHA_SELECTED_INFO?>",
            DOPTG_THUMBNAIL_BG_COLOR_INFO = "<?php echo DOPTG_THUMBNAIL_BG_COLOR_INFO?>",
            DOPTG_THUMBNAIL_BG_COLOR_HOVER_INFO = "<?php echo DOPTG_THUMBNAIL_BG_COLOR_HOVER_INFO?>",
            DOPTG_THUMBNAIL_BG_COLOR_SELECTED_INFO = "<?php echo DOPTG_THUMBNAIL_BG_COLOR_SELECTED_INFO?>",
            DOPTG_THUMBNAIL_BORDER_SIZE_INFO = "<?php echo DOPTG_THUMBNAIL_BORDER_SIZE_INFO?>",
            DOPTG_THUMBNAIL_BORDER_COLOR_INFO = "<?php echo DOPTG_THUMBNAIL_BORDER_COLOR_INFO?>",
            DOPTG_THUMBNAIL_BORDER_COLOR_HOVER_INFO = "<?php echo DOPTG_THUMBNAIL_BORDER_COLOR_HOVER_INFO?>",
            DOPTG_THUMBNAIL_BORDER_COLOR_SELECTED_INFO = "<?php echo DOPTG_THUMBNAIL_BORDER_COLOR_SELECTED_INFO?>",
            DOPTG_THUMBNAIL_PADDING_TOP_INFO = "<?php echo DOPTG_THUMBNAIL_PADDING_TOP_INFO?>",
            DOPTG_THUMBNAIL_PADDING_RIGHT_INFO = "<?php echo DOPTG_THUMBNAIL_PADDING_RIGHT_INFO?>",
            DOPTG_THUMBNAIL_PADDING_BOTTOM_INFO = "<?php echo DOPTG_THUMBNAIL_PADDING_BOTTOM_INFO?>",
            DOPTG_THUMBNAIL_PADDING_LEFT_INFO = "<?php echo DOPTG_THUMBNAIL_PADDING_LEFT_INFO?>",

            DOPTG_IMAGE_LOADER_INFO = "<?php echo DOPTG_IMAGE_LOADER_INFO?>",
            DOPTG_IMAGE_BG_COLOR_INFO = "<?php echo DOPTG_IMAGE_BG_COLOR_INFO?>",
            DOPTG_IMAGE_BG_ALPHA_INFO = "<?php echo DOPTG_IMAGE_BG_ALPHA_INFO?>",
            DOPTG_IMAGE_DISPLAY_TYPE_INFO = "<?php echo DOPTG_IMAGE_DISPLAY_TYPE_INFO?>",
            DOPTG_IMAGE_DISPLAY_TIME_INFO = "<?php echo DOPTG_IMAGE_DISPLAY_TIME_INFO?>",
            DOPTG_IMAGE_MARGIN_TOP_INFO = "<?php echo DOPTG_IMAGE_MARGIN_TOP_INFO?>",
            DOPTG_IMAGE_MARGIN_RIGHT_INFO = "<?php echo DOPTG_IMAGE_MARGIN_RIGHT_INFO?>",
            DOPTG_IMAGE_MARGIN_BOTTOM_INFO = "<?php echo DOPTG_IMAGE_MARGIN_BOTTOM_INFO?>",
            DOPTG_IMAGE_MARGIN_LEFT_INFO = "<?php echo DOPTG_IMAGE_MARGIN_LEFT_INFO?>",
            DOPTG_IMAGE_PADDING_TOP_INFO = "<?php echo DOPTG_IMAGE_PADDING_TOP_INFO?>",
            DOPTG_IMAGE_PADDING_RIGHT_INFO = "<?php echo DOPTG_IMAGE_PADDING_RIGHT_INFO?>",
            DOPTG_IMAGE_PADDING_BOTTOM_INFO = "<?php echo DOPTG_IMAGE_PADDING_BOTTOM_INFO?>",
            DOPTG_IMAGE_PADDING_LEFT_INFO = "<?php echo DOPTG_IMAGE_PADDING_LEFT_INFO?>",

            DOPTG_NAVIGATION_ENABLED_INFO = "<?php echo DOPTG_NAVIGATION_ENABLED_INFO?>",
            DOPTG_NAVIGATION_OVER_IMAGE_INFO = "<?php echo DOPTG_NAVIGATION_OVER_IMAGE_INFO?>",
            DOPTG_NAVIGATION_PREV_INFO = "<?php echo DOPTG_NAVIGATION_PREV_INFO?>",
            DOPTG_NAVIGATION_PREV_HOVER_INFO = "<?php echo DOPTG_NAVIGATION_PREV_HOVER_INFO?>",
            DOPTG_NAVIGATION_NEXT_INFO = "<?php echo DOPTG_NAVIGATION_NEXT_INFO?>",
            DOPTG_NAVIGATION_NEXT_HOVER_INFO = "<?php echo DOPTG_NAVIGATION_NEXT_HOVER_INFO?>",
            DOPTG_NAVIGATION_LIGHTBOX_INFO = "<?php echo DOPTG_NAVIGATION_LIGHTBOX_INFO?>",
            DOPTG_NAVIGATION_LIGHTBOX_HOVER_INFO = "<?php echo DOPTG_NAVIGATION_LIGHTBOX_HOVER_INFO?>",
            DOPTG_NAVIGATION_TOUCH_DEVICE_SWIPE_ENABLED_INFO = "<?php echo DOPTG_NAVIGATION_TOUCH_DEVICE_SWIPE_ENABLED_INFO?>",

            DOPTG_CAPTION_WIDTH_INFO = "<?php echo DOPTG_CAPTION_WIDTH_INFO?>",
            DOPTG_CAPTION_HEIGHT_INFO = "<?php echo DOPTG_CAPTION_HEIGHT_INFO?>",
            DOPTG_CAPTION_TITLE_COLOR_INFO = "<?php echo DOPTG_CAPTION_TITLE_COLOR_INFO?>",
            DOPTG_CAPTION_TEXT_COLOR_INFO = "<?php echo DOPTG_CAPTION_TEXT_COLOR_INFO?>",
            DOPTG_CAPTION_BG_COLOR_INFO = "<?php echo DOPTG_CAPTION_BG_COLOR_INFO?>",
            DOPTG_CAPTION_BG_ALPHA_INFO = "<?php echo DOPTG_CAPTION_BG_ALPHA_INFO?>",
            DOPTG_CAPTION_POSITION_INFO = "<?php echo DOPTG_CAPTION_POSITION_INFO?>",
            DOPTG_CAPTION_OVER_IMAGE_INFO = "<?php echo DOPTG_CAPTION_OVER_IMAGE_INFO?>",
            DOPTG_CAPTION_SCROLL_SCRUB_COLOR_INFO = "<?php echo DOPTG_CAPTION_SCROLL_SCRUB_COLOR_INFO?>",
            DOPTG_CAPTION_SCROLL_BG_COLOR_INFO = "<?php echo DOPTG_CAPTION_SCROLL_BG_COLOR_INFO?>",
            DOPTG_CAPTION_MARGIN_TOP_INFO = "<?php echo DOPTG_CAPTION_MARGIN_TOP_INFO?>",
            DOPTG_CAPTION_MARGIN_RIGHT_INFO = "<?php echo DOPTG_CAPTION_MARGIN_RIGHT_INFO?>",
            DOPTG_CAPTION_MARGIN_BOTTOM_INFO = "<?php echo DOPTG_CAPTION_MARGIN_BOTTOM_INFO?>",
            DOPTG_CAPTION_MARGIN_LEFT_INFO = "<?php echo DOPTG_CAPTION_MARGIN_LEFT_INFO?>",
            DOPTG_CAPTION_PADDING_TOP_INFO = "<?php echo DOPTG_CAPTION_PADDING_TOP_INFO?>",
            DOPTG_CAPTION_PADDING_RIGHT_INFO = "<?php echo DOPTG_CAPTION_PADDING_RIGHT_INFO?>",
            DOPTG_CAPTION_PADDING_BOTTOM_INFO = "<?php echo DOPTG_CAPTION_PADDING_BOTTOM_INFO?>",
            DOPTG_CAPTION_PADDING_LEFT_INFO = "<?php echo DOPTG_CAPTION_PADDING_LEFT_INFO?>",

            DOPTG_LIGHTBOX_ENABLED_INFO = "<?php echo DOPTG_LIGHTBOX_ENABLED_INFO?>",
            DOPTG_LIGHTBOX_WINDOW_COLOR_INFO = "<?php echo DOPTG_LIGHTBOX_WINDOW_COLOR_INFO?>",
            DOPTG_LIGHTBOX_WINDOW_ALPHA_INFO = "<?php echo DOPTG_LIGHTBOX_WINDOW_ALPHA_INFO?>",
            DOPTG_LIGHTBOX_LOADER_INFO = "<?php echo DOPTG_LIGHTBOX_LOADER_INFO?>",
            DOPTG_LIGHTBOX_BACKGROUND_COLOR_INFO = "<?php echo DOPTG_LIGHTBOX_BACKGROUND_COLOR_INFO?>",
            DOPTG_LIGHTBOX_BACKGROUND_ALPHA_INFO = "<?php echo DOPTG_LIGHTBOX_BACKGROUND_ALPHA_INFO?>",
            DOPTG_LIGHTBOX_MARGIN_TOP_INFO = "<?php echo DOPTG_LIGHTBOX_MARGIN_TOP_INFO?>",
            DOPTG_LIGHTBOX_MARGIN_RIGHT_INFO = "<?php echo DOPTG_LIGHTBOX_MARGIN_RIGHT_INFO?>",
            DOPTG_LIGHTBOX_MARGIN_BOTTOM_INFO = "<?php echo DOPTG_LIGHTBOX_MARGIN_BOTTOM_INFO?>",
            DOPTG_LIGHTBOX_MARGIN_LEFT_INFO = "<?php echo DOPTG_LIGHTBOX_MARGIN_LEFT_INFO?>",
            DOPTG_LIGHTBOX_PADDING_TOP_INFO = "<?php echo DOPTG_LIGHTBOX_PADDING_TOP_INFO?>",
            DOPTG_LIGHTBOX_PADDING_RIGHT_INFO = "<?php echo DOPTG_LIGHTBOX_PADDING_RIGHT_INFO?>",
            DOPTG_LIGHTBOX_PADDING_BOTTOM_INFO = "<?php echo DOPTG_LIGHTBOX_PADDING_BOTTOM_INFO?>",
            DOPTG_LIGHTBOX_PADDING_LEFT_INFO = "<?php echo DOPTG_LIGHTBOX_PADDING_LEFT_INFO?>",

            DOPTG_LIGHTBOX_NAVIGATION_PREV_INFO = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_PREV_INFO?>",
            DOPTG_LIGHTBOX_NAVIGATION_PREV_HOVER_INFO = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_PREV_HOVER_INFO?>",
            DOPTG_LIGHTBOX_NAVIGATION_NEXT_INFO = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_NEXT_INFO?>",
            DOPTG_LIGHTBOX_NAVIGATION_NEXT_HOVER_INFO = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_NEXT_HOVER_INFO?>",
            DOPTG_LIGHTBOX_NAVIGATION_CLOSE_INFO = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_CLOSE_INFO?>",
            DOPTG_LIGHTBOX_NAVIGATION_CLOSE_HOVER_INFO = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_CLOSE_HOVER_INFO?>",
            DOPTG_LIGHTBOX_NAVIGATION_INFO_BG_COLOR_INFO = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_INFO_BG_COLOR_INFO?>",
            DOPTG_LIGHTBOX_NAVIGATION_INFO_TEXT_COLOR_INFO = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_INFO_TEXT_COLOR_INFO?>",
            DOPTG_LIGHTBOX_NAVIGATION_TOUCH_DEVICE_SWIPE_ENABLED_INFO = "<?php echo DOPTG_LIGHTBOX_NAVIGATION_TOUCH_DEVICE_SWIPE_ENABLED_INFO?>",
        
            DOPTG_SOCIAL_SHARE_ENABLED_INFO = "<?php echo DOPTG_SOCIAL_SHARE_ENABLED_INFO?>",
            DOPTG_SOCIAL_SHARE_INFO = "<?php echo DOPTG_SOCIAL_SHARE_INFO?>",
            DOPTG_SOCIAL_SHARE_LIGHTBOX_INFO = "<?php echo DOPTG_SOCIAL_SHARE_LIGHTBOX_INFO?>", 

            DOPTG_TOOLTIP_ENABLED_INFO = "<?php echo DOPTG_TOOLTIP_ENABLED_INFO?>",
            DOPTG_TOOLTIP_BG_COLOR_INFO = "<?php echo DOPTG_TOOLTIP_BG_COLOR_INFO?>",
            DOPTG_TOOLTIP_STROKE_COLOR_INFO = "<?php echo DOPTG_TOOLTIP_STROKE_COLOR_INFO?>",
            DOPTG_TOOLTIP_TEXT_COLOR_INFO = "<?php echo DOPTG_TOOLTIP_TEXT_COLOR_INFO?>",

            DOPTG_SLIDESHOW_INFO = "<?php echo DOPTG_SLIDESHOW_INFO?>",
            DOPTG_SLIDESHOW_TIME_INFO = "<?php echo DOPTG_SLIDESHOW_TIME_INFO?>",
            DOPTG_SLIDESHOW_AUTOSTART_INFO = "<?php echo DOPTG_SLIDESHOW_AUTOSTART_INFO?>",    
            DOPTG_SLIDESHOW_LOOP_INFO = "<?php echo DOPTG_SLIDESHOW_LOOP_INFO?>",    
            DOPTG_SLIDESHOW_PLAY_INFO = "<?php echo DOPTG_SLIDESHOW_PLAY_INFO?>",    
            DOPTG_SLIDESHOW_PLAY_HOVER_INFO = "<?php echo DOPTG_SLIDESHOW_PLAY_HOVER_INFO?>",
            DOPTG_SLIDESHOW_PAUSE_INFO = "<?php echo DOPTG_SLIDESHOW_PAUSE_INFO?>",    
            DOPTG_SLIDESHOW_PAUSE_HOVER_INFO = "<?php echo DOPTG_SLIDESHOW_PAUSE_HOVER_INFO?>",

            DOPTG_AUTO_HIDE_INFO = "<?php echo DOPTG_AUTO_HIDE_INFO?>",
            DOPTG_AUTO_HIDE_TIME_INFO = "<?php echo DOPTG_AUTO_HIDE_TIME_INFO?>",
            
            DOPTG_help_info = [<?php             
                for ($i=0; $i<count($DOPTG_help_info); $i++){
                    echo '{"question": "'.preg_replace('`[\r\n]`', "", addslashes($DOPTG_help_info[$i]['question'])).'", "answer": "'.preg_replace('`[\r\n]`', "", addslashes($DOPTG_help_info[$i]['answer'])).'"},';
                }
            ?>];
        </script>
    </head>
    <body>  
        <div class="DOPTG-admin">
            <div class="header">
                <h1><?php echo DOPTG_TITLE?></h1>
                <div id="DOPTG-admin-message"></div>
                <a href="?sign_out=true" id="DOPTG-menu"><?php echo DOPTG_LOGOUT_SUBMIT?></a>
                <a href="javascript:doptgInitHelp()" id="DOPTG-menu"><?php echo DOPTG_TITLE_HELP?></a>
                <input type="hidden" name="gallery_id" id="gallery_id" value="" />
                <br class="DOPTG-clear" />
            </div>
            <div class="main">
                <div class="column column1">
                    <div class="column-header">
                        <div class="add-button">
                            <a href="javascript:doptgAddGallery()" title="<?php echo DOPTG_ADD_GALLERY_SUBMIT?>"></a>
                        </div>
                        <div class="edit-button">
                            <a href="javascript:doptgShowGalleriesInfo()" title="<?php echo DOPTG_EDIT_GALLERIES_SUBMIT?>"></a>
                        </div>
                        <a href="javascript:void()" class="header-help" title="<?php echo DOPTG_GALLERIES_HELP?>"></a>
                    </div>
                    <div class="column-content-container">
                        <div class="column-content">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="column-separator"></div>
                <div class="column column2">
                    <div class="column-header"></div>
                    <div class="column-content-container">
                        <div class="column-content">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="column-separator"></div>
                <div class="column column3">
                    <div class="column-header"></div>
                    <div class="column-content-container">
                        <div class="column-content">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <br class="DOPTG-clear" />
        </div>
    </body>
</html>