# String Base64 plugin for Craft CMS 3.1

Twig filters to base64 encode/decode a string.

## Requirements

This plugin requires Craft CMS 3.1.0 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require cavellblood/string-base64

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for String Base64.

## Using String Base64

### Encoding

Input:

    {{ "some string" | base64enc }}
    
Output:

    c29tZSBzdHJpbmc=
    
    
### Decoding

Input:

    {{ "c29tZSBzdHJpbmc=" | base64dec }}
    
Output:

    some string

Brought to you by [Cavell L. Blood](https://cavellblood.com)
