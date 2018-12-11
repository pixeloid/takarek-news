
# "Takarék" Wordpress based news website

## Requirements

* PHP >= 5.6
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation

1. Clone the project in a new folder for your project:

  `git clone https://github.com/pixeloid/takarek-news.git --recurse-submodules your-project-folder-name`

2. Update environment variables in `.env`  file:
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (http://example.com)
  * `WP_SITEURL` - Full URL to WordPress including subdirectory (http://example.com/wp)
  * `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`

 You can cut and paste random keys from the [Roots WordPress Salt Generator][roots-wp-salt].

3. Run `composer install` to install dependencies

4. The theme is in `web/app/themes` as you would for a normal WordPress site as submodule (https://github.com/pixeloid/takarek-news-theme.git). See Readme for setup the theme!

5. Set your site vhost document root to `/path/to/site/web/`

6. Access WP admin at `http://example.com/wp/wp-admin`

