<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */

// Mime types
$GLOBALS['TL_MIME'] =
[
	// Application files
	'xl'    => ['application/excel', 'iconXL.svg'],
	'xls'   => ['application/excel', 'iconXLS.svg'],
	'xlsx'  => ['application/excel', 'iconXLSX.svg'],
	'hqx'   => ['application/mac-binhex40', 'iconHQX.svg'],
	'cpt'   => ['application/mac-compactpro', 'iconCPT.svg'],
	'bin'   => ['application/macbinary', 'iconBIN.svg'],
	'doc'   => ['application/msword', 'iconDOC.svg'],
	'docx'  => ['application/msword', 'iconDOCX.svg'],
	'word'  => ['application/msword', 'iconWORD.svg'],
	'cto'   => ['application/octet-stream', 'iconCTO.svg'],
	'dms'   => ['application/octet-stream', 'iconDMS.svg'],
	'lha'   => ['application/octet-stream', 'iconLHA.svg'],
	'lzh'   => ['application/octet-stream', 'iconLZH.svg'],
	'exe'   => ['application/octet-stream', 'iconEXE.svg'],
	'class' => ['application/octet-stream', 'iconCLASS.svg'],
	'so'    => ['application/octet-stream', 'iconSO.svg'],
	'sea'   => ['application/octet-stream', 'iconSEA.svg'],
	'dll'   => ['application/octet-stream', 'iconDLL.svg'],
	'oda'   => ['application/oda', 'iconODA.svg'],
	'pdf'   => ['application/pdf', 'iconPDF.svg'],
	'ai'    => ['application/postscript', 'iconAI.svg'],
	'eps'   => ['application/postscript', 'iconEPS.svg'],
	'ps'    => ['application/postscript', 'iconPS.svg'],
	'pps'   => ['application/powerpoint', 'iconPPS.svg'],
	'ppt'   => ['application/powerpoint', 'iconPPT.svg'],
	'pptx'  => ['application/powerpoint', 'iconPPTX.svg'],
	'smi'   => ['application/smil', 'iconSMI.svg'],
	'smil'  => ['application/smil', 'iconSMIL.svg'],
	'mif'   => ['application/vnd.mif', 'iconMIF.svg'],
	'odc'   => ['application/vnd.oasis.opendocument.chart', 'iconODC.svg'],
	'odf'   => ['application/vnd.oasis.opendocument.formula', 'iconODF.svg'],
	'odg'   => ['application/vnd.oasis.opendocument.graphics', 'iconODG.svg'],
	'odi'   => ['application/vnd.oasis.opendocument.image', 'iconODI.svg'],
	'odp'   => ['application/vnd.oasis.opendocument.presentation', 'iconODP.svg'],
	'ods'   => ['application/vnd.oasis.opendocument.spreadsheet', 'iconODS.svg'],
	'odt'   => ['application/vnd.oasis.opendocument.text', 'iconODT.svg'],
	'wbxml' => ['application/wbxml', 'iconWBXML.svg'],
	'wmlc'  => ['application/wmlc', 'iconWMLC.svg'],
	'dmg'   => ['application/x-apple-diskimage', 'iconDMG.svg'],
	'dcr'   => ['application/x-director', 'iconDCR.svg'],
	'dir'   => ['application/x-director', 'iconDIR.svg'],
	'dxr'   => ['application/x-director', 'iconDXR.svg'],
	'dvi'   => ['application/x-dvi', 'iconDVI.svg'],
	'gtar'  => ['application/x-gtar', 'iconGTAR.svg'],
	'inc'   => ['application/x-httpd-php', 'iconINC.svg'],
	'php'   => ['application/x-httpd-php', 'iconPHP.svg'],
	'php3'  => ['application/x-httpd-php', 'iconPHP3.svg'],
	'php4'  => ['application/x-httpd-php', 'iconPHP4.svg'],
	'php5'  => ['application/x-httpd-php', 'iconPHP5.svg'],
	'phtml' => ['application/x-httpd-php', 'iconPHTML.svg'],
	'phps'  => ['application/x-httpd-php-source', 'iconPHPS.svg'],
	'js'    => ['application/x-javascript', 'iconJS.svg'],
	'psd'   => ['application/x-photoshop', 'iconPSD.svg'],
	'rar'   => ['application/x-rar', 'iconRAR.svg'],
	'fla'   => ['application/x-shockwave-flash', 'iconFLA.svg'],
	'swf'   => ['application/x-shockwave-flash', 'iconSWF.svg'],
	'sit'   => ['application/x-stuffit', 'iconSIT.svg'],
	'tar'   => ['application/x-tar', 'iconTAR.svg'],
	'tgz'   => ['application/x-tar', 'iconTGZ.svg'],
	'xhtml' => ['application/xhtml+xml', 'iconXHTML.svg'],
	'xht'   => ['application/xhtml+xml', 'iconXHT.svg'],
	'zip'   => ['application/zip', 'iconZIP.svg'],

	// Audio files
	'm4a'   => ['audio/x-m4a', 'iconM4A.svg'],
	'mp3'   => ['audio/mp3', 'iconMP3.svg'],
	'wma'   => ['audio/wma', 'iconWMA.svg'],
	'mpeg'  => ['audio/mpeg', 'iconMPEG.svg'],
	'wav'   => ['audio/wav', 'iconWAV.svg'],
	'ogg'   => ['audio/ogg','iconOGG.svg'],
	'mid'   => ['audio/midi', 'iconMID.svg'],
	'midi'  => ['audio/midi', 'iconMIDI.svg'],
	'aif'   => ['audio/x-aiff', 'iconAIF.svg'],
	'aiff'  => ['audio/x-aiff', 'iconAIFF.svg'],
	'aifc'  => ['audio/x-aiff', 'iconAIFC.svg'],
	'ram'   => ['audio/x-pn-realaudio', 'iconRAM.svg'],
	'rm'    => ['audio/x-pn-realaudio', 'iconRM.svg'],
	'rpm'   => ['audio/x-pn-realaudio-plugin', 'iconRPM.svg'],
	'ra'    => ['audio/x-realaudio', 'iconRA.svg'],

	// Images
	'bmp'   => ['image/bmp', 'iconBMP.svg'],
	'gif'   => ['image/gif', 'iconGIF.svg'],
	'jpeg'  => ['image/jpeg', 'iconJPEG.svg'],
	'jpg'   => ['image/jpeg', 'iconJPG.svg'],
	'jpe'   => ['image/jpeg', 'iconJPE.svg'],
	'png'   => ['image/png', 'iconPNG.svg'],
	'tiff'  => ['image/tiff', 'iconTIFF.svg'],
	'tif'   => ['image/tiff', 'iconTIF.svg'],
	'svg'   => ['image/svg+xml', 'iconSVG.svg'],
	'svgz'  => ['image/svg+xml', 'iconSVGZ.svg'],

	// Mailbox files
	'eml'   => ['message/rfc822', 'iconEML.svg'],

	// Text files
	'asp'   => ['text/asp', 'iconASP.svg'],
	'css'   => ['text/css', 'iconCSS.svg'],
	'scss'  => ['text/x-scss', 'iconSCSS.svg'],
	'less'  => ['text/x-less', 'iconLESS.svg'],
	'html'  => ['text/html', 'iconHTML.svg'],
	'htm'   => ['text/html', 'iconHTM.svg'],
	'md'    => ['text/markdown', 'iconMD.svg'],
	'shtml' => ['text/html', 'iconSHTML.svg'],
	'txt'   => ['text/plain', 'iconTXT.svg'],
	'text'  => ['text/plain', 'iconTEXT.svg'],
	'log'   => ['text/plain', 'iconLOG.svg'],
	'rtx'   => ['text/richtext', 'iconRTX.svg'],
	'rtf'   => ['text/rtf', 'iconRTF.svg'],
	'xml'   => ['text/xml', 'iconXML.svg'],
	'xsl'   => ['text/xml', 'iconXSL.svg'],

	// Videos
	'mp4'   => ['video/mp4', 'iconMP4.svg'],
	'm4v'   => ['video/x-m4v', 'iconM4V.svg'],
	'mov'   => ['video/mov', 'iconMOV.svg'],
	'wmv'   => ['video/wmv', 'iconWMV.svg'],
	'webm'  => ['video/webm', 'iconWEBM.svg'],
	'qt'    => ['video/quicktime', 'iconQT.svg'],
	'rv'    => ['video/vnd.rn-realvideo', 'iconRV.svg'],
	'avi'   => ['video/x-msvideo', 'iconAVI.svg'],
	'ogv'   => ['video/ogg', 'iconOGV.svg'],
	'movie' => ['video/x-sgi-movie', 'iconMOVIE.svg']
];
