const { useSassCompiler } = require('./webpack.mix.utils');

useSassCompiler([
	"sass/templates/!(_)*.scss"
]);
