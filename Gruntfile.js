module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            dynamic_mappings: {
                files: [
                    {
                        expand: true,
                        cwd: 'public/js/',
                        src: ['**/*.js'],
                        dest: 'public/js/',
                        ext: '.min.js',
                        extDot: 'first'
                    }
                ]
            }
        },
        wiredep: {
            target: {
                src: [
                    'public/*.html'
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-wiredep');

    grunt.registerTask('default', ['uglify', 'wiredep']);
};
