/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.extraPlugins = 'htmlbuttons';
	
	//extra html snippets
	config.htmlbuttons = [{name:'page_title',icon:'pgtitle.png',html:'<div class="page-header"><h1>Title<small>subtitle</small></h1></div>',title:'insert page title'}, 
	{name:'jumbotron',icon:'',html:'<div class="jumbotron"><h1>Title</h1><p>text</p></div>',title:'insert jumbotron'}];

};
