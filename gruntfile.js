module.exports = function(grunt) {

  grunt.initConfig({
    //basic settings and info about our plugins
    pkg: grunt.file.readJSON("package.json"),

    //name of plugin
    cssmin: {
      combine: {
        files: {
          "app/css/main.css": ["app/css/screen.css"]
        }
      }
    },

    //name of plugin
    uglify: {
      dist: {
        files: {
          "app/css/main.min.js": ["app/css/screen.js"]
        }
      }
    }
  });

  //load the plugins
  grunt.loadNpmTasks("grunt-contrib-cssmin");
  grunt.loadNpmTasks("grunt-contrib-uglify");

  //do the tasks
  grunt.registerTask("default", ["cssmin","uglify"]);
}
