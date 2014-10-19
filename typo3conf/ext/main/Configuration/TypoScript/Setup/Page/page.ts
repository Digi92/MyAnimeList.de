page = PAGE
page {
    typeNum = 0

     meta {
            description {
                    data = levelfield:-1,description
            }

            keywords {
                    data = levelfield:-1,keywords
            }
     }

    includeCSS {
        base = {$filepath.css}/main.css
    }

    includeJSFooter {
#        vendor = {$filepath.js}/vendor.min.js
#        vendor.external = 1
#        custom = {$filepath.js}/custom.min.js
#        custom.external = 1
    }

    shortcutIcon = EXT:main/Resources/Public/Images/favicon.ico
}