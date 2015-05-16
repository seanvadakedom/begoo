module.exports = function(grunt) {
    
    grunt.initConfig({
        sass: {
            dist: {
              files: [{
                expand: false,
                cwd: 'styles',
                src: ['scss/**/*.scss'],
                dest: 'public/css',
                ext: '.css'
              }]
            }
        },
        
        jshint: {
            all: ['Gruntfile.js', 'dev/js/**/*.js']
        },
        
        watch: {
          css: {
            files: ['scss/**/*.scss',  'dev/js/**/*.js'],
            tasks: ['sass', 'jshint']
          }
        },
        
//        concat: {
//            options: {
//                separator: ';',
//            },
//            dist: {
//                src: ['src/intro.js', 'src/project.js', 'src/outro.js'],
//                dest: 'dist/built.js',
//            },
//        },

    });
    
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    //grunt.loadNpmTasks('grunt-contrib-concat');
    //grunt.loadNpmTasks('grunt-contrib-requirejs');
    //grunt.loadNpmTasks('grunt-contrib-uglify');






    grunt.registerTask('default', 'watch');

    
    
};