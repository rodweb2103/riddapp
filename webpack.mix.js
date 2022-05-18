const mix = require('laravel-mix');

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
 
/*const CKEditorWebpackPlugin = require('@ckeditor/ckeditor5-dev-webpack-plugin');
const {styles} = require('@ckeditor/ckeditor5-dev-utils');

// make sure you copy these two regexes from the CKEdidtor docs: 
// https://ckeditor.com/docs/ckeditor5/latest/installation/advanced/alternative-setups/integrating-from-source.html#webpack-configuration 
const CKERegex = {
  svg: /ckeditor5-[^/\\]+[/\\]theme[/\\]icons[/\\][^/\\]+\.svg$/,
  css: /ckeditor5-[^/\\]+[/\\]theme[/\\].+\.css$/,
};

const ckeditor5_pattern = {
	  svg: /ckeditor5-[^/]+\/theme\/icons\/[^/]+\.svg$/,
	  css: /ckeditor5-[^/]+\/theme\/[\w-/]+\.css$/,
  }

Mix.listen('configReady', webpackConfig => {
  

  // these change often! Make sure you copy the correct regexes for your Webpack version!
  const targetSVG = /(\.(png|jpe?g|gif|webp|avif)$|^((?!font).)*\.svg$)/;
  const targetFont = /(\.(woff2?|ttf|eot|otf)$|font.*\.svg$)/;
  const targetCSS = /\.p?css$/;
  
  
  
  webpackConfig.module.rules.map(rule => {
	  for (let key in ckeditor5_pattern) {
	    if (`test.${key}`.match(rule.test)) {
	      if (rule.exclude) {
	        if (rule.exclude instanceof Array)
	          rule.exclude.push(ckeditor5_pattern[key])
	        else
	          rule.exclude = [rule.exclude, ckeditor5_pattern[key]]
	      } else
	        rule.exclude = ckeditor5_pattern[key]
	    }
	  }
	
	  return rule
  })

  const rules = webpackConfig.module.rules;
  

  // exclude CKE regex from mix's default rules
  for (let rule of rules) {
    // console.log(rule.test) // uncomment to check the CURRENT rules

    if (rule.test.toString() === targetSVG.toString()) {
      rule.exclude = CKERegex.svg;
    } else if (rule.test.toString() === targetFont.toString()) {
      rule.exclude = CKERegex.svg;
    } else if (rule.test.toString() === targetCSS.toString()) {
      rule.exclude = CKERegex.css;
    }
  }

  
  

});

mix.webpackConfig({
  plugins: [
    new CKEditorWebpackPlugin({
      language: 'en',
      addMainLanguageTranslationsToAllAssets: true
    })
  ],
  module: {
    rules: [
	  {
	    test: ckeditor5_pattern['svg'],
	    use: [ 'raw-loader' ]
	  },
      {
        test: CKERegex.svg,
        use: ['raw-loader']
      },
      {
        test: CKERegex.css,
        use: [
          {
            loader: 'style-loader',
            options: {
              injectType: 'singletonStyleTag',
              attributes: {
                'data-cke': true
              }
            }
          },
          'css-loader', // ADDED
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: styles.getPostCssConfig({ // moved into option `postcssOptions`
                themeImporter: {
                  themePath: require.resolve('@ckeditor/ckeditor5-theme-lark')
                },
                minify: true
              })
            }
          }
        ]
      }
    ]
  }
});

mix.setPublicPath('public')*/

mix.js('resources/js/app.js', 'public/js').vue()
    .sass('resources/sass/app.scss', 'public/css')
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}