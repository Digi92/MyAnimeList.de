config {
    admPanel = 0
    
    // HTML Header / Tags
    xmlprologue = none
    doctype = html5
    renderCharset = utf-8
    
    meaningfulTempFilePrefix = 100

    //Remove in production mode
    no_cache = 0
    
    // Reset some standards
    removeDefaultCss = 1
    removeDefaultJS = 1

    absRefPrefix = /

}

# GET-Parameter für Sprache
config.linkVars = L
# Englisch / Hauptsprache
config {
	language = en
	locale_all = en_US
	htmlTag_langKey = en_US
	sys_language_uid = 0
    sys_language_mode = strict
}
 
# Deutsch / 2. Sprache
# Die "1" muss mit der obengenannten ID übereinstimmen
# Die Weiche kann auch alternativ mit einer anderen Domain verknüpft werden (www.domain.com)
[globalVar = GP:L = 1]
config {
	language = de
	locale_all = de_DE
	htmlTag_langKey = de_DE
	sys_language_uid = 1
}
[global]