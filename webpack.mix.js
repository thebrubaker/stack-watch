const mix = require('laravel-mix')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.browserSync(process.env.APP_URL)

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/**
 * AutoPrefixer Handled by PostCSS Plugin
 */
mix.options({
  autoprefixer: false,
})

mix.webpackConfig({
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js/'),
    },
  },
})

/**
 * JavaScript Bundle
 */
mix.js('resources/js/app.js', 'public/js')

/**
 * Stylesheets / Tailwind via PostCSS
 */
mix.postCss('resources/css/app.css', 'public/css', [
  require('postcss-import'),
  require('tailwindcss'),
  require('postcss-nested'),
  require('autoprefixer'),
])

/**
 * Environment Setup
 */
if (mix.inProduction()) {
  mix.version()
} else {
  mix.sourceMaps()
}
