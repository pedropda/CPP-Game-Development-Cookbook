

var mediaWikiLoadStart=(new Date()).getTime();function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<6)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||(ua.match(/Glass/)&&ua.match(/Android/)));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/w/load.php","apiScript":"/w/api.php"}});mw.loader.register([["site","1412188139",[],"site"],["noscript","1412188139",[],"noscript"],["startup","1458543784",[],"startup"],["filepage","1412188139"],["user.groups","1412188139",[],"user"],["user","1412188139",[],"user"],["user.cssprefs","1412188139",["mediawiki.user"],"private"],["user.options","1412188139",[],"private"],["user.tokens","1412188139",[],
"private"],["mediawiki.language.data","1412188139",["mediawiki.language.init"]],["mediawiki.skinning.elements","1412188139"],["mediawiki.skinning.content","1412188139"],["mediawiki.skinning.interface","1412188139"],["skins.cologneblue","1412188139"],["skins.modern","1412188139"],["skins.vector.styles","1412188139"],["skins.monobook.styles","1412188139"],["skins.vector.js","1412188139",["jquery.throttle-debounce"]],["skins.vector.collapsibleNav","1412188139"],["jquery","1412188139"],["jquery.appear","1412188139"],["jquery.arrowSteps","1412188139"],["jquery.async","1412188139"],["jquery.autoEllipsis","1412188139",["jquery.highlightText"]],["jquery.badge","1412188139",["mediawiki.language"]],["jquery.byteLength","1412188139"],["jquery.byteLimit","1412188139",["jquery.byteLength"]],["jquery.checkboxShiftClick","1412188139"],["jquery.chosen","1412188139"],["jquery.client","1412188139"],["jquery.color","1412188139",["jquery.colorUtil"]],["jquery.colorUtil","1412188139"],["jquery.cookie",
"1412188139"],["jquery.delayedBind","1412188139"],["jquery.expandableField","1412188139"],["jquery.farbtastic","1412188139",["jquery.colorUtil"]],["jquery.footHovzer","1412188139"],["jquery.form","1412188139"],["jquery.fullscreen","1412188139"],["jquery.getAttrs","1412188139"],["jquery.hidpi","1412188139"],["jquery.highlightText","1412188139",["jquery.mwExtension"]],["jquery.hoverIntent","1412188139"],["jquery.json","1412188139"],["jquery.localize","1412188139"],["jquery.makeCollapsible","1458503224"],["jquery.mockjax","1412188139"],["jquery.mw-jump","1412188139"],["jquery.mwExtension","1412188139"],["jquery.placeholder","1412188139"],["jquery.qunit","1412188139"],["jquery.qunit.completenessTest","1412188139",["jquery.qunit"]],["jquery.spinner","1412188139"],["jquery.jStorage","1412188139",["jquery.json"]],["jquery.suggestions","1412188139",["jquery.highlightText"]],["jquery.tabIndex","1412188139"],["jquery.tablesorter","1458503311",["jquery.mwExtension","mediawiki.language.months"]],[
"jquery.textSelection","1412188139",["jquery.client"]],["jquery.throttle-debounce","1412188139"],["jquery.validate","1412188139"],["jquery.xmldom","1412188139"],["jquery.tipsy","1412188139"],["jquery.ui.core","1412188139",[],"jquery.ui"],["jquery.ui.widget","1412188139",[],"jquery.ui"],["jquery.ui.mouse","1412188139",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1412188139",[],"jquery.ui"],["jquery.ui.draggable","1412188139",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1412188139",["jquery.ui.core","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.resizable","1412188139",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.selectable","1412188139",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.sortable","1412188139",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.accordion","1412188139",[
"jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1412188139",["jquery.ui.core","jquery.ui.position","jquery.ui.widget"],"jquery.ui"],["jquery.ui.button","1412188139",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1412188139",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1412188139",["jquery.ui.button","jquery.ui.core","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable","jquery.ui.widget"],"jquery.ui"],["jquery.ui.progressbar","1412188139",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1412188139",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.tabs","1412188139",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1412188139",[],"jquery.ui"],["jquery.effects.blind","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip",
"1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1412188139",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1412188139",["jquery.effects.core"],"jquery.ui"],["moment","1412188139"],["mediawiki","1412188139"],["mediawiki.api","1412188139",["mediawiki.util"]],["mediawiki.api.category","1412188139",["mediawiki.Title","mediawiki.api"]],["mediawiki.api.edit",
"1412188139",["mediawiki.Title","mediawiki.api","user.tokens"]],["mediawiki.api.login","1412188139",["mediawiki.api"]],["mediawiki.api.parse","1412188139",["mediawiki.api"]],["mediawiki.api.watch","1412188139",["mediawiki.api","user.tokens"]],["mediawiki.debug","1412188139",["jquery.footHovzer","jquery.tipsy"]],["mediawiki.debug.init","1412188139",["mediawiki.debug"]],["mediawiki.feedback","1412188139",["jquery.ui.dialog","mediawiki.Title","mediawiki.api.edit","mediawiki.jqueryMsg"]],["mediawiki.hidpi","1412188139",["jquery.hidpi"]],["mediawiki.hlist","1412188139",["jquery.client"]],["mediawiki.htmlform","1458543784"],["mediawiki.icon","1412188139"],["mediawiki.inspect","1412188139",["jquery.byteLength","jquery.json"]],["mediawiki.notification","1412188139",["mediawiki.page.startup"]],["mediawiki.notify","1412188139"],["mediawiki.searchSuggest","1458503224",["jquery.client","jquery.placeholder","jquery.suggestions","mediawiki.api"]],["mediawiki.Title","1412188139",["jquery.byteLength",
"mediawiki.util"]],["mediawiki.toc","1458503223",["jquery.cookie"]],["mediawiki.Uri","1412188139"],["mediawiki.user","1412188139",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1412188139",["jquery.client","jquery.mwExtension","mediawiki.notify","mediawiki.toc"]],["mediawiki.action.edit","1412188139",["jquery.byteLimit","jquery.textSelection","mediawiki.action.edit.styles"]],["mediawiki.action.edit.styles","1412188139"],["mediawiki.action.edit.collapsibleFooter","1412188139",["jquery.cookie","jquery.makeCollapsible","mediawiki.icon"]],["mediawiki.action.edit.preview","1412188139",["jquery.form","jquery.spinner","mediawiki.action.history.diff"]],["mediawiki.action.history","1412188139",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1412188139",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1412188139",["mediawiki.page.startup","mediawiki.util"]],["mediawiki.action.view.metadata","1458504320"],[
"mediawiki.action.view.postEdit","1458503224",["jquery.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.redirectToFragment","1412188139",["jquery.client"]],["mediawiki.action.view.rightClickEdit","1412188139"],["mediawiki.action.edit.editWarning","1412188139",["mediawiki.jqueryMsg"]],["mediawiki.action.watch.ajax","1412188139",["mediawiki.page.watch.ajax"]],["mediawiki.language","1412188139",["mediawiki.cldr","mediawiki.language.data"]],["mediawiki.cldr","1412188139",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1412188139"],["mediawiki.language.init","1412188139"],["mediawiki.jqueryMsg","1412188139",["mediawiki.language","mediawiki.util"]],["mediawiki.language.months","1458503311",["mediawiki.language"]],["mediawiki.libs.jpegmeta","1412188139"],["mediawiki.page.gallery","1412188139"],["mediawiki.page.ready","1412188139",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.mw-jump","jquery.placeholder","mediawiki.util"]],[
"mediawiki.page.startup","1412188139",["mediawiki.util"]],["mediawiki.page.patrol.ajax","1412188139",["jquery.spinner","mediawiki.Title","mediawiki.api","mediawiki.notify","mediawiki.page.startup","mediawiki.util","user.tokens"]],["mediawiki.page.watch.ajax","1458503687",["jquery.mwExtension","mediawiki.api.watch","mediawiki.notify","mediawiki.page.startup","mediawiki.util"]],["mediawiki.page.image.pagination","1412188139",["jquery.spinner","mediawiki.Uri","mediawiki.util"]],["mediawiki.special","1412188139"],["mediawiki.special.block","1412188139",["mediawiki.util"]],["mediawiki.special.changeemail","1412188139",["mediawiki.util"]],["mediawiki.special.changeslist","1412188139"],["mediawiki.special.changeslist.legend","1412188139"],["mediawiki.special.changeslist.legend.js","1412188139",["jquery.cookie","jquery.makeCollapsible"]],["mediawiki.special.changeslist.enhanced","1412188139"],["mediawiki.special.movePage","1412188139",["jquery.byteLimit"]],["mediawiki.special.pagesWithProp",
"1412188139"],["mediawiki.special.preferences","1412188139",["mediawiki.language"]],["mediawiki.special.recentchanges","1412188139",["mediawiki.special"]],["mediawiki.special.search","1458503303"],["mediawiki.special.undelete","1412188139"],["mediawiki.special.upload","1412188139",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.userlogin.common.styles","1412188139"],["mediawiki.special.userlogin.signup.styles","1412188139"],["mediawiki.special.userlogin.login.styles","1412188139"],["mediawiki.special.userlogin.common.js","1458506293"],["mediawiki.special.userlogin.signup.js","1458506301",["jquery.throttle-debounce","mediawiki.api","mediawiki.jqueryMsg"]],["mediawiki.special.javaScriptTest","1412188139",["jquery.qunit"]],["mediawiki.special.version","1412188139"],["mediawiki.legacy.ajax","1412188139",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.commonPrint","1412188139"],["mediawiki.legacy.config","1412188139",["mediawiki.legacy.wikibits"]],[
"mediawiki.legacy.protect","1412188139",["jquery.byteLimit"]],["mediawiki.legacy.shared","1412188139"],["mediawiki.legacy.oldshared","1412188139"],["mediawiki.legacy.upload","1412188139",["jquery.spinner","mediawiki.Title","mediawiki.api","mediawiki.util"]],["mediawiki.legacy.wikibits","1412188139",["mediawiki.util"]],["mediawiki.ui","1412188139"],["mediawiki.ui.button","1412188139"],["oojs","1412188139"],["oojs-ui","1412188139",["oojs"]],["skins.zvalve","1434417561"],["ext.geshi.local","1412188139"],["ext.categoryTree","1458503227"],["ext.categoryTree.css","1412188139"],["ext.interwiki.specialpage","1412188139",["jquery.makeCollapsible"]],["jquery.wikiEditor","1412188139",["jquery.client","jquery.textSelection"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","1412188139",["jquery.tabIndex","jquery.ui.button","jquery.ui.dialog","jquery.ui.draggable","jquery.ui.resizable","jquery.wikiEditor","jquery.wikiEditor.toolbar"],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","1412188139",
["jquery.suggestions","jquery.wikiEditor","jquery.wikiEditor.dialogs","jquery.wikiEditor.toolbar.i18n","mediawiki.Title","mediawiki.jqueryMsg"],"ext.wikiEditor"],["jquery.wikiEditor.preview","1412188139",["jquery.wikiEditor"],"ext.wikiEditor"],["jquery.wikiEditor.previewDialog","1412188139",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.publish","1412188139",["jquery.wikiEditor","jquery.wikiEditor.dialogs"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","1412188139",["jquery.wikiEditor","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","1412188139",["jquery.async","jquery.cookie","jquery.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.i18n"],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1412188139",[],"ext.wikiEditor"],["ext.wikiEditor","1412188139",["jquery.wikiEditor"],"ext.wikiEditor"],["ext.wikiEditor.dialogs","1412188139",["ext.wikiEditor","ext.wikiEditor.toolbar",
"jquery.wikiEditor.dialogs","jquery.wikiEditor.dialogs.config"],"ext.wikiEditor"],["ext.wikiEditor.preview","1412188139",["ext.wikiEditor","jquery.wikiEditor.preview"],"ext.wikiEditor"],["ext.wikiEditor.previewDialog","1412188139",["ext.wikiEditor","jquery.wikiEditor.previewDialog"],"ext.wikiEditor"],["ext.wikiEditor.publish","1412188139",["ext.wikiEditor","jquery.wikiEditor.publish"],"ext.wikiEditor"],["ext.wikiEditor.tests.toolbar","1412188139",["ext.wikiEditor.toolbar"],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1412188139",["ext.wikiEditor","jquery.wikiEditor.toolbar","jquery.wikiEditor.toolbar.config"],"ext.wikiEditor"],["ext.wikiEditor.toolbar.hideSig","1412188139",[],"ext.wikiEditor"]]);mw.config.set({"wgLoadScript":"/w/load.php","debug":false,"skin":"valve","stylepath":"/w/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|ftps\\:\\/\\/|ssh\\:\\/\\/|sftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|xmpp\\:|sip\\:|sips\\:|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|tel\\:|sms\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|bitcoin\\:|magnet\\:|urn\\:|geo\\:|\\/\\/|steam\\:\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"/w","wgScriptExtension":".php","wgScript":"/w/index.php","wgSearchType":null,"wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"https://developer.valvesoftware.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.23.4","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Valve Developer Community","5":"Valve Developer Community talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category",
"15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"valve_developer_community":4,"valve_developer_community_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"Valve Developer Community","wgFileExtensions":["png","gif","jpg","jpeg"],"wgDBname":"developerwiki","wgFileCanRotate":true,"wgAvailableSkins":{"valve":"Valve","modern":"Modern","vector":"Vector","monobook":"MonoBook","cologneblue":"CologneBlue"},"wgExtensionAssetsPath":"/w/extensions","wgCookiePrefix":"developerwiki_mw_","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":false,"wgWikiEditorMagicWords":{"redirect":
"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumbnail","img_framed":"framed","img_frameless":"frameless"}});};if(isCompatible()){document.write("\u003Cscript src=\"/w/load.php?debug=false\u0026amp;lang=en\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=valve\u0026amp;version=20141001T014210Z\"\u003E\u003C/script\u003E");};
/* cache key: developerwiki-mw_:resourceloader:filter:minify-js:7:32df90589d6192f1820e2faadf47b10a */