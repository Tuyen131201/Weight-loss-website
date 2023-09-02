/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	filebrowserBrowseUrl= './ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl= './ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl= './ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl= './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl='./ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl= './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

};
