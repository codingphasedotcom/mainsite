var DashboardPlugin = require('webpack-dashboard/plugin');
var VendorChunkPlugin = require('webpack-vendor-chunk-plugin');
path = require('path');
var WebpackStrip = require('strip-loader');

var webpack = require('webpack');
module.exports = {
  entry: {
    tryon: './resources/assets/js/components/tryon/tryon.jsx',
    categoriesQuickInfo: './resources/assets/js/components/categoriesQuickInfo/categoriesQuickInfo.js',
    peopleWhoViewed: './resources/assets/js/components/peopleWhoViewed/peopleWhoViewed.jsx',
    recentlyViewed: './resources/assets/js/components/recentlyViewed/recentlyViewed.jsx',
    lensOptions: './resources/assets/js/components/lens-options/lens-options.jsx',
    homepageTabs: './resources/assets/js/components/homepageTabs/homepageTabs.jsx',
    headerSearch: './resources/assets/js/components/header-search/header-search.jsx',
    adminOrder: './resources/assets/js/components/admin-order/admin-order.jsx',
    vendor: ['react', 'redux', 'react-redux', 'jquery', 'lodash']
  },
  output: {
    path: path.join(__dirname, 'public/js/components'),
    publicPath: '/',
    filename: '[name].js'
  },
  module: {
    loaders: [
      { test: /vendor\/.+\.(jsx|js)$/,
        loader: 'imports?jQuery=jquery,$=jquery,this=>window'
      },
      {
        test: /\.js?$/,
        exclude: /node_modules/,
        loader: 'babel',
        query: {
          presets: ['react', 'es2015', 'stage-1']
        }
      },
      {
      test: /\.jsx?$/,
      exclude: /node_modules/,
      loader: 'babel',
      query: {
        presets: ['react', 'es2015', 'stage-1']
      }
    },
    { test: /\.js$/, loader: WebpackStrip.loader('console.log', 'console.error') }
  ]
  },
  plugins: [
     new webpack.optimize.CommonsChunkPlugin('vendor', 'vendor.js'),
     new VendorChunkPlugin('vendor'),
     new webpack.DefinePlugin({
			"process.env": {
				// This has effect on the react lib size
				"NODE_ENV": JSON.stringify("production")
			}
		}),
		new webpack.optimize.DedupePlugin(),
		new webpack.optimize.UglifyJsPlugin()
    ],
  resolve: {
    extensions: ['', '.js', '.jsx']
  },
  devServer: {
    historyApiFallback: true,
    contentBase: './'
  }
};
