// 예제 6-1 믹스를 사용하지 않고 웹팩을 사용하여 Sass 파일 컴파일

var path = require('path');
var MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  entry: './src/sass/app.scss',
  module: {
    rules: [
      {
	test: /\.s[ac]ss$/,
	use: [
	  MiniCssExtractPlugin.loader,
	  "css-loader",
	  "sass-loader"
	]
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      path: path.resolve(__dirname, './dist'),
      filename: 'app.css'
    })
  ]
}
