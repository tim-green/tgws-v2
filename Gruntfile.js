'use strict';
module.exports = function(grunt) {

  grunt.initConfig({

    cwebp: {
      dynamic: {
        options: {
          q: 50
        },
        files: [{
          expand: true,
          cwd: 'assets/images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'assets/images/'
        }]
      }
    },
    
    sass: {
      dist: {
        options: {
          style: 'compressed',
          compass: false,
          sourcemap: false
        },
        files: {
          'build/app.min.css': [
              'assets/sass/app.scss'
          ]
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'build/app.min.js': [
            'assets/js/vendor/anime.js',
            'assets/js/plugins/anime.init.js', 
            'assets/js/vendor/vanilla-lazyload.js',
            'assets/js/plugins/smooth-scroll.js',
            'assets/js/plugins/navpag.js',
            'assets/js/plugins/progress-bar.js',
            'assets/js/plugins/accordion.js',
            'assets/js/plugins/ios.js',
            'assets/js/vendor/swiper.js',
            'assets/js/plugins/swiper.init.js',
            'assets/js/plugins/back-to-top.js',
            'assets/js/plugins/plugins.js'
          ]
        },
        options: {
          preserveComments: false,
          sourceMap: 'build/app.min.js.map',
          sourceMappingURL: 'build/app.min.js.map'
        }
      }
    },
    watch: {
      options: {
        livereload: true
      },
      sass: {
        files: [
          'assets/sass/**/*.scss'
        ],
        tasks: ['sass']
      },
      js: {
        files: [
          'assets/js/vendor/anime.js',
          'assets/js/plugins/anime.init.js', 
          'assets/js/vendor/vanilla-lazyload.js',
          'assets/js/plugins/smooth-scroll.js',
          'assets/js/plugins/navpag.js',
          'assets/js/plugins/progress-bar.js',
          'assets/js/plugins/accordion.js',
          'assets/js/plugins/ios.js',
          'assets/js/vendor/swiper.js',
          'assets/js/plugins/swiper.init.js',
          'assets/js/plugins/back-to-top.js',
          'assets/js/plugins/plugins.js'
        ],
        tasks: ['uglify']
      },
      html: {
        files: [
          '**/*.html'
        ]
      }
    },
    clean: {
      dist: [
        'build/app.min.css',
        'build/app.min.js'
      ]
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-cwebp');
  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'sass',
    'uglify'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};