// Generated on 2014-03-28 using generator-lessapp 0.4.9
'use strict';

// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to recursively match all subfolders:
// 'test/spec/**/*.js'

module.exports = function(grunt) {

    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);

    // Load grunt tasks automatically
    require('jit-grunt')(grunt, {
    });



    // Define the configuration for all the tasks
    grunt.initConfig({

        // Project settings
        package: require('./package.json'),
        config: {
            // Configurable paths
            app: '.',
            dist: 'dist'
        },

        // Watches files for changes and runs tasks based on the changed files
        watch: {
            options: {
               interval: 250,
               livereload: true
            },
            less: {
                files: ['<%= config.app %>/{,*/}*.less'
                ],
                tasks: ['less:server','autoprefixer']
            },
            gruntfile: {
                files: [
                    'Gruntfile.js'],
                options: {
                  reload: true
                }
            },
            livereload: {
                options: {
                    livereload: '35729'
                },
                files: [
                    '<%= config.app %>/css/{,*/}*.css'
                ]
            }
        },
        autoprefixer: {
          dist: {
            options: {
              browsers: ['last 2 versions', 'ie 8', 'ie 9'],
            },
            files: [{
              expand: true,
              cwd: '<%= config.app %>/',
              src: '{,*/}*.css',
              dest: '<%= config.app %>/'
            }]
          }
        },

        ftpush: {
            options: {

            },
            playbook: {
                auth: {
                    host: 'playbook.sapient.com',
                    port: 22,
                    authKey: 'dev'
                },
                src: 'css',
                dest: '/var/www/playbook/sites/all/themes/playbook/fonts',
                exclusions: ['**/.DS_Store', '**/Thumbs.db', '*.txt', '*.sh'],
                simple: true,
                useList: false
            }
        },

        // Compiles LESS to CSS and generates necessary files if requested
        less: {
            options: {
                modifyVars: {
                    version: 'version=<%= package.version %>'
                },
                paths: [
                    '<%= config.app %>/node_modules'
                ]
            },
            server: {
                files: {
                    '<%= config.app %>/css/style.css': '<%= config.app %>/style.less'
                }
            }
        }
    });


    grunt.registerTask('serve', function(target) {
        if (target === 'dist') {
            return grunt.task.run(['build', 'connect:dist:keepalive']);
        }

        grunt.task.run([
            'less:server',
            'autoprefixer',
            'watch'
        ]);
    });


};
