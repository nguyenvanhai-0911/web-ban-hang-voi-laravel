/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function(config) {
   config.filebrowserBrowseUrl = './api/kcfinder/browse.php?type=files';
   config.filebrowserImageBrowseUrl = './api/kcfinder/browse.php?type=images';
   config.filebrowserFlashBrowseUrl = './api/kcfinder/browse.php?type=flash';
   config.filebrowserUploadUrl = './api/kcfinder/upload.php?type=files';
   config.filebrowserImageUploadUrl = './api/kcfinder/upload.php?type=images';
   config.filebrowserFlashUploadUrl = './api/kcfinder/upload.php?type=flash';
};
