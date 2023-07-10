import babel from '@rollup/plugin-babel';
import nodeResolve from '@rollup/plugin-node-resolve';
import commonjs from '@rollup/plugin-commonjs';
import multi from '@rollup/plugin-multi-entry';

export default {
    input: './src/js/*.js',
    output: {
        file: './public/js/main.js',
        format: 'iife',
        name: 'bundle'
    },
    plugins: [
        babel({
            // Only transpile our source code
            exclude: 'node_modules/**',
            // Include the helpers in the bundle, at most one copy of each. 
            // 'bundled' option is by default. It is recommended to configure this option explicitly, read more here: https://github.com/rollup/plugins/tree/master/packages/babel#babelhelpers
            babelHelpers: 'bundled'
        }),
        multi(),
        nodeResolve(),
        commonjs()
    ]
}
