<a name="5.1.3"></a>
## [5.1.3](https://github.com/hypeJunction/hypeScraper/compare/5.1.2...v5.1.3) (2017-02-18)


### Bug Fixes

* **memory:** set upper threshold for parseable image width ([60ca20d](https://github.com/hypeJunction/hypeScraper/commit/60ca20d))



<a name="5.1.2"></a>
## [5.1.2](https://github.com/hypeJunction/hypeScraper/compare/5.1.1...v5.1.2) (2017-02-18)


### Bug Fixes

* **memory:** ensure thumbnails are images and resizable ([9e5ce74](https://github.com/hypeJunction/hypeScraper/commit/9e5ce74)), closes [#42](https://github.com/hypeJunction/hypeScraper/issues/42)



<a name="5.1.1"></a>
## [5.1.1](https://github.com/hypeJunction/hypeScraper/compare/5.1.0...v5.1.1) (2017-02-06)


### Bug Fixes

* **scraper:** minimize the risk of fatal impact ([0e7fdf7](https://github.com/hypeJunction/hypeScraper/commit/0e7fdf7))



<a name="5.1.0"></a>
# [5.1.0](https://github.com/hypeJunction/hypeScraper/compare/5.0.3...v5.1.0) (2017-02-03)


### Features

* **admin:** adds an admin interface for previewing cards ([e53f92e](https://github.com/hypeJunction/hypeScraper/commit/e53f92e))



<a name="5.0.3"></a>
## [5.0.3](https://github.com/hypeJunction/hypeScraper/compare/5.0.2...v5.0.3) (2016-12-08)




<a name="5.0.2"></a>
## [5.0.2](https://github.com/hypeJunction/hypeScraper/compare/5.0.1...v5.0.2) (2016-12-08)




<a name="5.0.1"></a>
## [5.0.1](https://github.com/hypeJunction/hypeScraper/compare/5.0.0...v5.0.1) (2016-12-08)


### Bug Fixes

* **linkify:** exclude HTML tag attribute names and values from token matches ([56caba3](https://github.com/hypeJunction/hypeScraper/commit/56caba3))



<a name="5.0.0"></a>
# [5.0.0](https://github.com/hypeJunction/hypeScraper/compare/4.2.2...v5.0.0) (2016-11-16)


### Bug Fixes

* **cache:** adds filesize sanity checks before generating thumbnails ([c7e5d0c](https://github.com/hypeJunction/hypeScraper/commit/c7e5d0c))
* **css:** make sure nested flex cards preserve their padding values ([e9cddb7](https://github.com/hypeJunction/hypeScraper/commit/e9cddb7))
* **embed:** only allow iframe, video and audio tags in embed html ([cd23401](https://github.com/hypeJunction/hypeScraper/commit/cd23401)), closes [#14](https://github.com/hypeJunction/hypeScraper/issues/14)
* **scraper:** ensure that urls are valid before scraping them ([bdf060a](https://github.com/hypeJunction/hypeScraper/commit/bdf060a))
* **thumbs:** fix class namespace ([e054447](https://github.com/hypeJunction/hypeScraper/commit/e054447))
* **upgrade:** normalize and filter URLs during upgrade ([0ec03f8](https://github.com/hypeJunction/hypeScraper/commit/0ec03f8))

### Features

* **cache:** add restrictions on parsing and caching of images ([5a6ec64](https://github.com/hypeJunction/hypeScraper/commit/5a6ec64))
* **core:** update requirements ([e339264](https://github.com/hypeJunction/hypeScraper/commit/e339264))
* **elgg:** now requires Elgg 2.3 ([a8f750c](https://github.com/hypeJunction/hypeScraper/commit/a8f750c))
* **images:** use new image resize library ([a458f1d](https://github.com/hypeJunction/hypeScraper/commit/a458f1d))
* **player:** add an option to disable player fallback ([e9cef19](https://github.com/hypeJunction/hypeScraper/commit/e9cef19))
* **release:** 5.0 RC release ([4fb1b5a](https://github.com/hypeJunction/hypeScraper/commit/4fb1b5a))
* **releases:** upgrade to latest Elgg, drop hypeApps requirement ([d9c5491](https://github.com/hypeJunction/hypeScraper/commit/d9c5491))
* **thumbs:** improve thumbs handling ([5d3f816](https://github.com/hypeJunction/hypeScraper/commit/5d3f816))
* **upgrades:** add a memory-safe upgrade script ([a19da0a](https://github.com/hypeJunction/hypeScraper/commit/a19da0a))


### BREAKING CHANGES

* elgg: Now requires Elgg 2.3
* release: Most of the API has been rewritten to reduce complexity.
The hooks will continue working, but hypeScraper() function has
been removed along side all of the DI services.
Support for embed.ly and iframely have been removed.
All the legacy and deprecated functions and views have been removed.
* releases: Now requires Elgg 2.2 or higher.
Drops requirement for hypeApps and subsequently affects all APIs
that rely on its functionality
* thumbs: Drops /server/thumbs.php
Drops \hypeJunction\Scraper\ThumbServer class
* core: Now requires Elgg 2.1



<a name="4.2.2"></a>
## [4.2.2](https://github.com/hypeJunction/hypeScraper/compare/4.2.1...v4.2.2) (2016-01-06)


### Bug Fixes

* **thumbs:** thumb URLs are now normalized to site root ([8105d17](https://github.com/hypeJunction/hypeScraper/commit/8105d17))



