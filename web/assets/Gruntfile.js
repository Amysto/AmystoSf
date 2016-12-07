module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      all: ['Gruntfile.js', 'src/js/*.js'],
      options: {"esversion": 6}
    },
    less: {
      main: {
        src: ['src/less/main.less'],
        dest: 'dist/css/main.css'
      }
    },
    uglify: {
      dist: {
        src: ['src/js/*.js'],
        dest: 'dist/js/*.min.js'
      }
    },
    copy: {
      images: {
        expand: true,
        cwd: 'src/img',
        src: '**',
        dest: 'dist/img',
      },
      js:{
        expand: true,
        cwd: 'src/js',
        src: '**',
        dest: 'dist/js',
      }
    },
    watch: {
      scripts: {
        files: ['src/js/*.js'],
        tasks: ['jshint:all', 'copy:js']
      },
      css: {
        files: ['src/less/*.less'],
        tasks: ['less']
      },
      images: {
        files: ['src/img/*'],
        tasks: ['copy:images']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('dev', [
    'jshint:all',
    'less',
    'copy'
    ]);
  grunt.registerTask('prod', [
    'jshint:all',
    'less',
    'uglify',
    'copy:images'
    ]);
};