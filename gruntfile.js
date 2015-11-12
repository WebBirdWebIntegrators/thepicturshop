module.exports = function(grunt) {

  grunt.initConfig({

    csscomb: {
        options: {
            // Task-specific options go here.
        },
        your_target: {
            // Target-specific file lists and/or options go here.
            files: {
                'sass/global.scss': ['sass/global.scss']
            }
        }
    },

    sass: {
      dist: {
        options: {
          cacheLocation: 'sass/.sass-cache'
        },
        files: {
          'css/styles.css': 'sass/styles.scss'
        }
      }
    },

    concurrent: {
        batch1: ['csscomb', 'sass']
    },

    watch: {
      files: ['sass/*', 'sass/widgets/*', 'sass/plugins/*'],
      tasks: ['sass'],
    },

    compress: {
      main: {
        options: {
          archive: 'eagle2.zip'
        },
        files: [
          {src: ['**', '!assets/sass/**', '!node_modules/**', '!Gruntfile.js', '!package.json', '!eagle2.zip'], dest: 'eagle2/'}, // includes files in path and its subdirs
        ]
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-csscomb');
  grunt.loadNpmTasks('grunt-concurrent');
  grunt.loadNpmTasks('grunt-contrib-compress');

  grunt.registerTask('batch', ['concurrent:batch1']);

};
