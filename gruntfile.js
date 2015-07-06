module.exports = function(grunt) {

  grunt.initConfig({
    
    less: {
	  development: {
	  	files: {
	      "css/styles.css": "less/styles.less"
	    }
	  }
	},
	
	watch: {
      styles: {
        files: ['less/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
    
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

};