const { promises: fs } = require("fs")
const path = require("path")
const replace = require('replace-in-file');

async function copyDir(src, dest) {
    await fs.mkdir(dest, { recursive: true });
    let entries = await fs.readdir(src, { withFileTypes: true });
	let ignore = [
		'node_modules',
        '.old_files',
		'dist',
		'src',
        '.git',
		'.github',
		'.browserslistrc',
		'.editorconfig',
		'.gitattributes',
		'.gitignore',
		'.jscsrc',
		'.jshintignore',
		'.travis.yml',
        '.babelrc',
        '.DS_Store',
		'composer.json',
		'composer.lock',
		'package.json',
		'package-lock.json',
		'phpcs.xml.dist',
		'readme.txt',
        '.csscomb.json',
        '.editorconfig',
        '.npmignore'
	];


    for (let entry of entries) {
		if ( ignore.indexOf( entry.name ) != -1 ) {
			continue;
		}
        if(entry.name.endsWith("orig")) {
            continue;
        }
        if(entry.name.includes("style.css")) {
            continue;
        }
        if(entry.name.includes("main.js")) {
            continue;
        }
        
        let srcPath = path.join(src, entry.name);
        let destPath = path.join(dest, entry.name);


        entry.isDirectory() ?
            await copyDir(srcPath, destPath) :
            await fs.copyFile(srcPath, destPath);    
            
    }

    
}

copyDir('./', './dist')
    .then(res => {
        console.log('dist folder ready');
        //updating links to get the minified files
        const options = {
            files: './dist/index.php',
            from: [/main\.js/g, /style\.css/g],
            to: ['main.min.js', 'style.min.css'],
        };
        
        replace(options)
            .then(results => {
                console.log('Replacement results:', results);
            })
            .catch(error => {
                console.error('Error occurred:', error);
            });
    })
    .catch(error => {
        console.error('Error occurred:', error);
    });


