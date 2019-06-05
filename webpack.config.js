const webpack = require('webpack');

module.exports = {
  plugins: [
    new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery'
    }),
    new webpack.ProvidePlugin({
        _: 'underscore'            
    })
  ]
};