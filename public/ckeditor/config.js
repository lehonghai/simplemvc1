/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.filebrowserBrowseUrl = 'http://localhost:81/lehonghai/public/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = 'http://localhost:81/lehonghai/public/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = 'http://localhost:81/lehonghai/public/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = 'http://localhost:81/lehonghai/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = 'http://localhost:81/lehonghai/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = 'http://localhost:81/lehonghai/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
