### Changes in 2.0 version
***
- Laravel 5 is now supported, first draft.

### Changes in 1.0.0pre
***
The code has been almost totaly rewrited except like 30 line of code from v0.9.*, this breaks the compability with older versions so the major version has been increased to v1.0.0pre.

The version 1.0.0 is promised when the Mobile Detect 3 comes out but since they passed the due date for the release the support for their new detector will be intruduced in a plugin so the package dev can move on.

- Most prior change is the PHP requirement increased to 5.4~ this allows the usage of traits.
- Class loading now uses PSR-4 instead of PSR-0 structure. This will be handled by the composer automaticaly.
- Package now requires the manhdoan91/traits package to share resources between packages.
- PHP namespace are moved from **manhdoan91\browserdetect** to **manhdoan91\BrowserDetect** to avoid collusions.
- Package now uses the 'browser-detect.parser', 'browser-detect.result' component names in the L4 Di.
- Service provider is more extendable with splitted parser and result component keys.
- Manager class has been renamed to Parser.
- Instead of useing the basic Cache and Config class from the Laravel app now useing the app's Di to forge the needed component.
- Most of the Manager class' functions has been renamed and reoriented in the Parser.
- Before hardcoded generic values now stored in the config file.
- Default cache prefix has been changed to 'hbd1'.
- Cacheing now requires less memory the results are stored in a compact string format instead of an array.
- Parser now determine the browser's javascript support.
- Parsing are now plugin oriented instead of hardcodeing.
- Plugins are costumizeable from the config/plugins.php file.
- Package ships with 4 built in plugin.
- UserAgentStringApi plugin is default turned off, because it requires greater amount of time to process.

### v0.9.2
- Fix the case where importing datas and query the current agent in the same request.
- Perform self analization before importing data.

### v0.9.1
- New import and export function on the info object.

### Initial release v0.9.0
