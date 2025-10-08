plugin.tx_indexedsearch.view {
	// view {
		//templateRootPaths {
			//5 = EXT:t3sbootstrap/Resources/Private/Extensions/IndexedSearch/Templates/
		//}
		//partialRootPaths {
			//5 = EXT:t3sbootstrap/Resources/Private/Extensions/IndexedSearch/Partials/
		//}
	//}
    templateRootPaths {
        0 = EXT:indexed_search/Resources/Private/Templates/
        10 = {$plugin.tx_indexedsearch.view.templateRootPath}
        20 = EXT:yourextension/Resources/Private/Templates/
    }

    partialRootPaths {
        0 = EXT:indexed_search/Resources/Private/Partials/
        10 = {$plugin.tx_indexedsearch.view.partialRootPath}
        20 = EXT:yourextension/Resources/Private/Partials/
    }
}
# Set the target page UID for the extbase variant of the plugin.
plugin.tx_indexedsearch.settings.targetPid = 2
# A list of integer which should be root-pages to search from.
plugin.tx_indexedsearch.settings.rootPidList = 2