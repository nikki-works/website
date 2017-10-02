module.exports = function (grunt) {
  grunt.initConfig({
    // basic settings and info about our plugins
    pkg: grunt.file.readJSON('package.json'),

    less: {
      development: {
        files: {
          'app/styles/dev/styleCompiledFromLess.css': 'app/styles/dev/*.less' // destination file and source file
        }
      }
    },
    // name of plugin
    cssmin: {
      combine: {
        files: {
          'app/styles/main.css': ['static/css/min/bootstrap.min.css', 'app/styles/dev/styleCompiledFromLess.css']
        }
      }
    },

    // name of plugin
    uglify: {
      dist: {
        files: {
          'app/scripts/main.js': [
            'static/js/min/bootstrap.min.js',
            'static/js/vue.js'
          ]
        }
      }
    },

    watch: {
      css: {
        files: ['app/styles/dev/*.less'],
        tasks: ['less', 'cssmin']
      },
      js: {
        files: ['app/scripts/*.js'],
        tasks: ['uglify']
      }
    }
  })

  // load the plugins
  grunt.loadNpmTasks('grunt-contrib-cssmin')
  grunt.loadNpmTasks('grunt-contrib-less')
  grunt.loadNpmTasks('grunt-contrib-uglify')
  grunt.loadNpmTasks('grunt-contrib-watch');

  // do the tasks
  grunt.registerTask('default', [
    'less',
    'cssmin',
    'uglify'
  ])
}
