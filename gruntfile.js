module.exports = function (grunt) {
  grunt.initConfig({
    // basic settings and info about our plugins
    pkg: grunt.file.readJSON('package.json'),

    less: {
      development: {
        files: {
          'src/styles/dev/styleCompiledFromLess.css': 'app/styles/dev/*.less' // destination file and source file
        }
      }
    },
    // name of plugin
    cssmin: {
      combine: {
        files: {
          'dist/styles/main.css': [
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'src/styles/dev/styleCompiledFromLess.css'
          ]
        }
      }
    },

    // name of plugin
    uglify: {
      dist: {
        files: {
          'src/scripts/main.js': [
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/bootstrap/dist/js/bootstrap.min.js'
          ]
        }
      }
    },

    watch: {
      css: {
        files: ['src/styles/dev/*.less'],
        tasks: ['less', 'cssmin']
      },
      js: {
        files: ['src/scripts/dev/*.js', 'gruntfile.js'],
        tasks: ['uglify']
      }
    },

    browserSync: {
      bsFiles: {
        src: [
          'dist/styles/main.css',
          '/*.html'
        ]
      },
      options: {
        server: {
          baseDir: './'
        },
        watchTask: true
      }
    }
  })

  // load the plugins
  grunt.loadNpmTasks('grunt-contrib-cssmin')
  grunt.loadNpmTasks('grunt-contrib-less')
  grunt.loadNpmTasks('grunt-contrib-uglify')
  grunt.loadNpmTasks('grunt-contrib-watch')
  grunt.loadNpmTasks('grunt-browser-sync')

  // do the tasks
  grunt.registerTask('default', [
    'less',
    'cssmin',
    'uglify',
    'browserSync',
    'watch'
  ])
  grunt.registerTask('prod', [
    'less',
    'cssmin',
    'uglify'
  ])
}
