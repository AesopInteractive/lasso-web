'use strict';
module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // watch our project for changes
        watch: {
        	concat: {
        		files: ['js/source/*'],
        		tasks:['concat:dist']
        	},
            less: {
				files: ['less/**/*'],
                tasks: ['less']
            },
            livereload: {
                options: { livereload: true },
                files: ['less/**/*', 'js/*.js', '**/*.html', '**/*.php', 'images/**/*.{png,jpg,jpeg,gif,webp,svg}']
            }
        },
		less: {
		  production: {
		    options: {
		      paths: ["less/source"],
		      cleancss:true
		    },
		    files: {
		      "css/lasso-theme.css": "less/style.less"
		    }
		  }
		},
   		concat: {
            dist: {
                src: [
                    'js/source/general.js'
               	],
                dest: 'js/lasso-theme.js'
            }
        },
   		uglify: {
            plugins: {
               	files: {
                    'js/lasso-theme.min.js': [
                    	'js/lasso-theme.js',
                    ]
                }
            }
        }
    });

    // register task
    grunt.registerTask('default', ['watch']);

};