const _ = require("lodash");
const glob = require("glob");
const mix = require("laravel-mix");

/**
 * Transforma qualquer barra para barra frontal
 *
 * @param {string} pathOrFile
 * @return {string}
 */
const usePathSanetizer = (pathOrFile) => pathOrFile.replace(/[\\\/]+/g, "/");

/**
 * Realiza o replace do arquivo sass para css
 *
 * @param {string} pathOrFile
 * @return {string}
 */
const useSassSanetizer = (pathOrFile) =>
	pathOrFile
		.replace(/(\\|\/)sass(\\|\/)/, "$1css$2")
		.replace(/\.scss$/, ".css");

/**
 * Compilação de todos os itens em um diretório
 *
 * @param {string} query
 * @param {(origin: string, destination: string) => any} callback
 * @returns
 */
const mixDir = (query, callback) => {
	return _.each(glob.sync(`resources/${query}`), (file) => {
		const path = usePathSanetizer(file);
		callback(path, path.replace("resources", "public"));
	});
};

/**
 * Compilação de vários diretórios
 *
 * @param {array} arrayOfDirs
 * @param {(origin: string, destination: string) => any)} callback
 * @returns
 */
const mixDirs = (arrayOfDirs, callback) => {
	return _.each(arrayOfDirs, (dir) => mixDir(dir, callback));
};

/**
 * Compilação de vários diretórios com arquivos sass
 *
 * @param {array} folders
 * @returns
 */
const useSassCompiler = (folders, precision = 5) => {
	return mixDirs(folders, (origin, destination) =>
		mix.sass(origin, useSassSanetizer(destination), {
			sassOptions: {
				precision,
			},
		})
	);
};

module.exports = {
	mixDir,
	mixDirs,
	useSassCompiler,
};
