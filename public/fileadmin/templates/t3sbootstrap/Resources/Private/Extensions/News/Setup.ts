# **********************************************************
#	EXT:news
# **********************************************************
plugin.tx_news {
	view {
		templateRootPaths {
			2 = EXT:t3sbootstrap/Resources/Private/Extensions/News/Templates/
		}
		partialRootPaths {
			2 = EXT:t3sbootstrap/Resources/Private/Extensions/News/Partials/
		}
		layoutRootPaths {
			2 = EXT:t3sbootstrap/Resources/Private/Extensions/News/Layouts/
		}
	}
	settings {
		detail.media {
			image.baguetteBox.enabled = 1
		}
	}
}
