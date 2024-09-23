=== Theme Switcha - Easily Switch Themes for Development and Testing ===

Plugin Name: Theme Switcha
Plugin URI: https://perishablepress.com/theme-switcha/
Description: Theme switching done right.
Tags: theme, switch, switcher, theme switcher, preview
Author: Jeff Starr
Contributors: specialk
Author URI: https://plugin-planet.com/
Donate link: https://monzillamedia.com/donate.html
Requires at least: 4.6
Tested up to: 6.6
Stable tag: 3.3.4
Version:    3.3.4
Requires PHP: 5.6.20
Text Domain: theme-switcha
Domain Path: /languages
License: GPL v3 or later

Easily switch between themes for development and testing.



== Description ==

Theme switching done right.

> Preview any theme privately on the front-end
> Develop themes privately behind the scenes
> Enable your visitors to switch themes 

There are many theme-switcher plugins but none of them provide the simplicity, performance, and reliability that I require for my own sites. So I wrote my own plugin using the WP API and kept the plugin as focused and solid as possible. Only essential theme-switching features have been added, along with a simple yet informative UI. This gives you a consistent, quality theme-switching experience that you can optionally share with your visitors.

> Switch to an alternate theme for preview or development while visitors use the default theme :)


**What it's for..**

Theme Switcha:

* Enables visitors to switch themes via the frontend
* Enables admins to test alternate themes for debugging
* Enables developers to build/customize themes privately
* Enables you to create links that switch to specific themes
* Enables live private previews of any installed theme


**What it's NOT for..**

This plugin **should not** be used together with WordPress features such as Gutenberg Block Editor, Theme Customizer, Widgets, Menus, and other theme-related options. Doing so may result in private changes being made public on the current active theme. [Learn more](https://wordpress.org/support/topic/important-please-read-2/).

> Theme Switcha = Best Theme Switcher for WordPress


**Plugin Features**

* Develop new themes while visitors use the default theme
* Control who can switch themes (admins, w/ passkey, or everyone)
* Administrators can switch themes directly via the WP Admin Area
* Enable visitors to switch and preview themes on the front-end
* Each visitor can choose their own theme
* Send preview links to clients via the passkey
* Choose your own custom passkey code for preview links
* Set the duration (cookie timeout) for switched themes
* Enable/disable theme preview in the Admin Area
* Enable/disable all theme switching without deactivating the plugin
* Provides several shortcodes to enable visitors to switch themes
* Shortcodes display themes as a list, select menu, or thumbnails
* Changed options are saved when working on switched themes
* Dashboard widget to switch themes via select menu
* Simple, stylish UI featuring screenshots of each theme
* Works with any theme, parent themes and child themes
* Works with or without Gutenberg Block Editor
* Works with WP Multisite

Theme Switcha makes it easy for the site admin to preview and develop new themes without changing the default theme. So visitors will continue to use your site normally without ever knowing that you are testing new themes behind the scenes. And if you want to enable your visitors to switch themes, you can do that as well by adding a shortcode to any WP Post or Page. Then each visitor will be able to select and preview any of your WordPress themes.


**Core Features**

* Easy to use
* Squeaky clean code
* Simple and focused
* Built with the WordPress API
* Lightweight, fast and flexible
* Focused on performance and security
* Regularly updated and "future proof"
* Works great with other WordPress plugins
* Plugin options configurable via settings screen
* Plugin cleans up after itself upon uninstall
* One-click restore plugin default options

Plus you get free, responsive support from a top WP professional ;)


The Theme Switcha plugin is useful for things like:

* __Maintenance mode__ - display a temporary theme to visitors while you update your primary theme
* __Theme test drive__ - preview and test new themes without disrupting anything on the frontend
* __Theme development__ - perfect for developing new theme templates to fit existing site content
* __Client presentations__ - send clients special "theme preview" links to show off new templates

I use Theme Switcha to develop new themes for my own sites like [Perishable Press](https://perishablepress.com/) and [Plugin Planet](https://plugin-planet.com/). The beauty of Theme Switcha is that visitors will never know that you are hard at work testing and building new themes behind the scenes :)


**Privacy**

This plugin does not collect or store any user data. It does not set any user cookies, and it does not connect to any third-party locations. Thus, this plugin does not affect user privacy in any way.

Theme Switcha is developed and maintained by [Jeff Starr](https://twitter.com/perishable), 15-year [WordPress developer](https://plugin-planet.com/) and [book author](https://books.perishablepress.com/).
 

**Support development**

I develop and maintain this free plugin with love for the WordPress community. To show support, you can [make a donation](https://monzillamedia.com/donate.html) or purchase one of my books: 

* [The Tao of WordPress](https://wp-tao.com/)
* [Digging into WordPress](https://digwp.com/)
* [.htaccess made easy](https://htaccessbook.com/)
* [WordPress Themes In Depth](https://wp-tao.com/wordpress-themes-book/)
* [Wizard's SQL Recipes for WordPress](https://books.perishablepress.com/downloads/wizards-collection-sql-recipes-wordpress/)

And/or purchase one of my premium WordPress plugins:

* [BBQ Pro](https://plugin-planet.com/bbq-pro/) - Super fast WordPress firewall
* [Blackhole Pro](https://plugin-planet.com/blackhole-pro/) - Automatically block bad bots
* [Banhammer Pro](https://plugin-planet.com/banhammer-pro/) - Monitor traffic and ban the bad guys
* [GA Google Analytics Pro](https://plugin-planet.com/ga-google-analytics-pro/) - Connect WordPress to Google Analytics
* [Simple Ajax Chat Pro](https://plugin-planet.com/simple-ajax-chat-pro/) - Unlimited chat rooms
* [USP Pro](https://plugin-planet.com/usp-pro/) - Unlimited front-end forms

Links, tweets and likes also appreciated. Thank you! :)



== Screenshots ==

1. Plugin Settings Screen (showing default options)



== Installation ==

**Getting Started**

1. Upload the plugin and activate
2. Visit plugin settings and check the box to "Enable Switching"
3. After clicking "Save Changes", scroll down to view available themes
4. Click on any theme thumbnail to switch privately to that theme

**Important:** Please read this [support topic](https://wordpress.org/support/topic/important-please-read-2/)!

More info on [installing WP plugins](https://wordpress.org/support/article/managing-plugins/#installing-plugins)


**Usage: Switch Themes**

After activating Theme Switcha, visit the plugin settings page. There you can enable theme switching via the "Enable Switching" option. After that option is enabled, a menu of all available themes will be displayed on the settings page. From there you can click any thumbnail to switch privately to that theme. While you view the switched theme, your regular visitors will continue viewing your normal active theme. To verify this, visit your site in a different browser (with clean cache and cookies).

**Tip:** In the plugin settings, a thumbnail menu of all available themes will be displayed after you enable the "Enable Switching" option. Otherwise if that option is disabled, no theme thumbnails will be displayed.


**Usage: Display Menus**

In addition to switching themes via the settings page, you also can display a menu of switchable themes. In order for any theme-switch menu to work, the plugin setting "Allowed Users" must be set to "Everyone". So all visitors can enjoy your site using their preferred theme.

Theme Switcha provides several shortcodes for displaying theme-switch menus:

	Display themes as list of links:
	[theme_switcha_list display="list"]
	// display = (list or flat) format of the list
	
	Display themes as thumbnail links:
	[theme_switcha_thumbs style="true"]
	// style = (true or false) include default CSS
	
	Display themes in select/dropdown menu:
	[theme_switcha_select text="Choose a theme.."]
	// text = for the default option
	
	Display plain-text link for theme switch:
	[theme_switcha_link theme="mytheme" text="Switch Theme"]
	// theme = theme name, text = link text

These shortcodes can be included in any WP Post, Page, or supportive widget (e.g., the default "Text" widget that's included with WordPress).

If you would rather include the theme lists via your theme, you can use any of these template tags:

	<?php if (function_exists('theme_switcha_display_list'))     theme_switcha_display_list(); ?>
	<?php if (function_exists('theme_switcha_display_thumbs'))   theme_switcha_display_thumbs(); ?>
	<?php if (function_exists('theme_switcha_display_dropdown')) theme_switcha_display_dropdown(); ?>

Alternately you can call the shortcodes in your theme template using [do_shortcode](https://developer.wordpress.org/reference/functions/do_shortcode/).


**Usage: Theme-Switch Links**

Theme Switcha also enables you to create theme-switch links that you can share with others. To begin, follow these steps:

1. Determine the slug/name for the theme (should be same as name of theme directory)
2. Choose any URL from your site, and append `?theme-switch=mytheme`

For example, if you have a theme named "My Awesome Theme" that is located in a directory named `/my-awesome-theme/`, you would create a theme-switch URL like so:

`https://example.com/?theme-switch=my-awesome-theme`

What happens if you enter that URL in a browser? Well, that depends on the plugin setting, "Allowed Users":

* If Allowed Users is set to "Everyone", the URL will enable anyone to switch to the specified theme
* If Allowed Users is set to "Only Admin", the URL will enable any logged-in admin-level user to switch to the specified theme
* If Allowed Users is set to "Only with Passkey", the URL requires a passkey in order to switch to the specified theme

We'll look at how to make a Passkey Link in the next section. For the other two options, "Everyone" and "Only Admin", you can either share the URL as-is, or make it a clickable hyperlink such as the following example:

`<a href="https://example.com/?theme-switch=my-awesome-theme">Switch to My Awesome Theme</a>`


**Usage: Passkey Links**

Passkey links are a great way to enable private theme switching without giving the user access to the WP Admin Area. To make a Passkey Link, follow these steps:

1. Visit the Theme Switcha settings page
2. Enable the "Enable Switching" option
3. For the "Allowed Users" option, select "Only with Passkey"
4. Save changes

After saving changes, thumbnails will be displayed for each available theme. So to get a Passkey Link:

1. Right-click on the thumbnail image for the desired theme
2. Select "Copy link address" to copy the URL to your clipboard

Done! You now have a Passkey Link ready to paste wherever. It will look similar to this:

`https://example.com/?theme-switch=my-awesome-theme&passkey=1234567890`

So you can either share the Passkey Link as-is, or make it a clickable hyperlink such as the following example:

`<a href="https://example.com/?theme-switch=my-awesome-theme&passkey=1234567890">Switch to My Awesome Theme</a>`

Here are some notes about Passkey Links:

* Passkey links work for logged-in users and logged-out users
* Passkey links must include the theme name and valid passkey
* The theme name must be the theme slug (e.g., "my-theme" not "My Theme")

Here is an example of proper passkey format:

`https://example.com/?theme-switch=THEMESLUG&passkey=PASSKEY`

Here you would replace "THEMESLUG" with the slug of the theme you want to preview, and "PASSKEY" with the current passkey (provided via the "Passkey" setting). Here is an example showing how to make a clickable link from the Passkey URL:

`<a href="https://example.com/?theme-switch=THEMESLUG&passkey=PASSKEY">Switch Theme!</a>`


**Important**

This plugin **should not** be used together with WordPress features such as Gutenberg Block Editor, Theme Customizer, Widgets, Menus, and other theme-related options. Doing so may result in private changes being made public on the current active theme. [Learn more](https://wordpress.org/support/topic/important-please-read-2/).


**Plugin Options**

Theme Switcha provides three basic configurations via the "Allowed Users" option:

* __Admins only__ - useful for theme developers to work on themes on a live site
* __Passkey only__ - useful for sending clients preview links to new templates
* __Everyone__ - allow everyone to switch themes (required for shortcodes)

Other options should be self-explanatory. If you have any questions, feel free to post in the [Theme Switcha Support Forum](https://wordpress.org/support/plugin/theme-switcha/). I usually respond very quickly :)

**Note:** It's a good idea to change the Passkey periodically to prevent access to alternate themes (only required when using "Passkey only" configuration).


**How It Works**

If you're still scratching your head at this point, here are some points that may help to clarify how theme-switching works:

* Your site always will have a default active (primary) theme
* The primary theme always will be visible to regular visitors
* If you enable Theme Switcha, you can privately view other themes
* So you can switch to a theme that only is active for YOU only
* You can also enable visitors to switch themes on the front-end
* You can even send a private theme-switch URL to friends, etc.

So while you re viewing and working on a switched theme, all other users will continue to see/use the default active theme. When you are done working on your switched theme, you can disable theme switching via the plugin settings. Upon doing so, you will be viewing the default active theme like everyone else.

Also keep in mind that theme-switching is browser-specific (via cookies). So if you need to view the theme in multiple browsers, the easiest way is to use the passkey link. The passkey enables you to quickly switch themes by simply entering the URL in your browser's address bar. See the next section for details.

Because Theme Switcha is browser-specific, you can easily test theme-switching functionality by simply visiting your site in a different browser (with cleared cache and cookies). For example, in one browser you can be logged in to WordPress and switch to some other theme. While in the other browser, you are not logged in and thus viewing the site as a regular visitor, so you will be viewing the default active theme.


**Going Live**

Here are the steps to "go live" with your switched theme once you are ready to do so:

1. Visit the plugin settings and disable the option "Enable Switching".
2. Visit Appearance &gt; Themes to activate the theme for the world to see.

After these steps, the active theme will be visible to you and everyone else.


**Excluding Themes**

To exclude a theme from theme switching, open the theme's `style.css` file and add `Status: private` or `Status: unpublished` to the file header. Or, to exclude a theme only for visitors, add `Status: admin-only` to the file header. 

Here is a summary:

	Status: private     = theme excluded from theme switching
	Status: unpublished = theme excluded from theme switching
	Status: admin-only  = theme available for switching only by admin-level users
	Status: publish     = theme available for switching by all users (depending on settings)
	No Status header    = theme available for switching by all users (depending on settings)

You can remove the Status file header at any time to make the theme available for theme switching.


**Troubleshooting**

If theme-switching isn't working for you, here are some things to check:

* Make sure you have more than one theme installed
* Make sure there are no other plugins interfering
* Make sure there are no .htaccess rules interfering
* Make sure only one theme-switching plugin is enabled
* Make sure `WP_DEFAULT_THEME` not defined in `wp-config.php`
* Make sure your theme is using the WP API for settings, etc.
* Try using a different browser and/or clearing your cache and cookies

Those are the main things to check. If theme-switching still isn't working for your site, most likely something is interfering with normal functionality. In that case, you can do some basic [troubleshooting](https://perishablepress.com/how-to-troubleshoot-wordpress/) to help identify the culprit.


**Current active theme**

Theme Switcha provides a function that returns the name of the currently active theme:

`theme_switcha_active_theme()`

This can be used just like any other WP function, in plugins and theme templates.


**Like the plugin?**

If you like Theme Switcha, please take a moment to [give a 5-star rating](https://wordpress.org/support/plugin/theme-switcha/reviews/?rate=5#new-post). It helps to keep development and support going strong. Thank you!


**Uninstalling**

This plugin cleans up after itself. All plugin settings will be removed from your database when the plugin is uninstalled via the Plugins screen.



== Upgrade Notice ==

To upgrade this plugin, remove the old version and replace with the new version. Or just click "Update" from the Plugins screen and let WordPress do it for you automatically.

Note: uninstalling the plugin from the WP Plugins screen results in the removal of all settings and data from the WP database. 



== Credit ==

Thanks to Ryan Boren for the original [Theme Switcher](https://plugins.trac.wordpress.org/wiki/ThemeSwitcher) plugin.



== Frequently Asked Questions ==

**Does the plugin enable anyone to switch themes?**

Yes, just set the "Allowed Users" option to "Everyone", and then add any shortcode to your page. After you do that, any user will be able to switch themes even if they are not logged in to your site.


**I click the links but the theme does not switch?**

It could be because of a caching plugin, or if you are trying to switch themes while logged out of WP, it could be that the setting "Allowed Users" is not set to "Everyone".


**How do exclude themes from theme switching?**

Open the theme's `style.css` file and add `Status: private` or `Status: unpublished` to the file header. See section on "Excluding Themes" in the [Installation Docs](https://wordpress.org/plugins/theme-switcha/installation/) for more infos.


**Does this plugin support Multisite?**

It should work fine with Multisite, but it hasn't been officially tested yet.


**I am having problems with white screens or other errors?**

Two things: 1) deactivate the plugin or remove via FTP, and 2) [report the issue](https://plugin-planet.com/support/#contact) so I can investigate and try to fix any bugs.


**How is the CSS included for the front-end shortcodes?**

For better performance, the styles are included inline. The styles for each shortcode are minimal, so it's faster to include them inline via style tags rather than chewing up another HTTP request. If you are concerned for whatever reason, you can use disable the styles in the `[theme_switcha_thumbs]` shortcode, like so: `[theme_switcha_thumbs style="false"]`. That way the styles won't be included and you can add your own however desired.


**Do I need to activate my alternate theme?**

Question: Do I need to activate my alternate theme via Appearance &gt; Themes?

Short answer: "no", stay away from the Appearance &gt; Themes screen while switching themes. Long answer: whenever you activate a theme via the Appearance &gt; Themes screen in the WP Admin Area, that theme will be the one that is publicly displayed (live). That's why, with Theme Switcha, you don't make any changes via the Themes screen; rather, you just visit the plugin settings and click on whichever theme you want to view privately. Complete instructions are available [here](https://wordpress.org/plugins/theme-switcha/installation/) and in the plugin's readme.txt.


**Theme settings not saved after theme switching disabled?**

As explained in the plugin documentation, Theme Switcha should not be used with admin-related functionality like Gutenberg, Customizer, Widgets, Menus, etc. You can learn more about this [here](https://wordpress.org/support/topic/important-please-read-2/).


**Widgets are not saved after theme switching is disabled?**

As explained in the plugin documentation, Theme Switcha should not be used with admin-related functionality like Gutenberg, Customizer, Widgets, Menus, etc. You can learn more about this [here](https://wordpress.org/support/topic/important-please-read-2/).


**When I switch themes, will it apply to all admins or just me?**

Great question. Theme-switching uses cookies to work, so it is browser-specific. That basically means that only the person who switched the theme will be able to view it. There currently is no option to switch to the same theme at the same time for multiple users. It is possible, however, to share the same Passkey Link to any group of users, so they all will switch to the same theme. For more information about this, check out the section "Usage: Passkey Links", located in the [Installation Docs](https://wordpress.org/plugins/theme-switcha/installation/).


**How can I let visitors choose their own theme?**

You can use any of the front-end shortcodes to enable visitors to select any available theme. It's also possible to exclude themes from switching. Visit the [Installation Docs](https://wordpress.org/plugins/theme-switcha/installation/) for more information (under "Usage: Display Menus" and "Excluding Themes", respectively).


**When switching themes, will visitors see the same content?**

Yes, the same database/content will be displayed regardless of which theme is enabled or switched. The WP database provides the content for ALL themes.


**How can I test demo content while switching themes?**

Question: How can I test demo content (like posts and pages) while switching themes?

Answer: Just make sure that all of the demo content is added as "Draft" or "Pending" instead of "Published". Then only logged-in users with proper capabilities will be able to see it.


**I still don't get it.. how do I switch themes?**

Here are the steps to use the plugin: __1)__ Visit the plugin settings and enable the setting, “Enable Switching”. __2)__ Under “Available Themes”, you will see all themes that are available for switching; click one to enable it only for you (admin). Whichever theme you enable via the plugin settings will be available to you only, so you can work on the theme while regular visitors see whichever theme is activated under the Appearance menu. Note that changes made to the switched theme will be visible only by you and other admins. Changes made to content (like post content, page content, categories, tags, etc.), on the other hand, affect all themes and will be visible to your regular visitors. For more information, check out the [Installation Docs](https://wordpress.org/plugins/theme-switcha/installation/).


**How do I switch themes?**

Theme Switcha is meant for temporarily switching themes. To actually change the current default active theme, visit the Themes page in the WordPress Admin Area.


**How do I go live with changes made to my theme?**

First, as explained [here](https://wordpress.org/support/topic/important-please-read-2/), Theme Switcha is for making changes to your theme template. With that in mind. If you switch to the "Awesome" theme using Theme Switcha, and then modify the theme template files, those changes will be made public once you change the default active theme to "Awesome" (via the WP Themes page). 

__Note:__ For any admin-related features like the Customizer, Widgets, Menus, and other theme-related options, any changes made to a switched theme may or may not be remembered after activating the theme as the site's default active theme. This is why Theme Switcha is not recommended for use with admin features like Customizer, Widgets, etc. To learn more, read this [Important Information](https://wordpress.org/support/topic/important-please-read-2/).


**Got a question?**

Send any questions or feedback via my [contact form](https://plugin-planet.com/support/#contact)



== Changelog ==

If you like Theme Switcha, please take a moment to [give a 5-star rating](https://wordpress.org/support/plugin/theme-switcha/reviews/?rate=5#new-post). It helps to keep development and support going strong. Thank you!


**3.3.4 (2024/06/25)**

* Fixes bug with `dismiss_notice_link`
* Updates plugin settings page
* Updates default translation template
* Tests on WordPress 6.6 (beta)


Full changelog @ [https://plugin-planet.com/wp/changelog/theme-switcha.txt](https://plugin-planet.com/wp/changelog/theme-switcha.txt)
