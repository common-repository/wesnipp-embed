// Create a new tinyMCE Button
/*global tinymce: true*/
(function () {
    "use strict";
    tinymce.create('tinymce.plugins.WeSnippPlugin', {
        init: function (ed, url) {
            ed.addCommand('mcebutton', function () {
                ed.windowManager.open({
                    file: url + '/wesnipp-popup-form.php',
                    width: 400 + parseInt(ed.getLang('wesnipp.delta_width', 0), 10),
                    height: 400 + parseInt(ed.getLang('wesnipp.delta_height', 0), 10),
                    inline: 1
                });
            });
            ed.addButton('wesnipp_embed', {
                title: 'Insert WeSnipp Embed',
                cmd: 'mcebutton',
                image: url + '/images/wesnipp.png',
                'class': 'wesnipp_btn'
            });
        },
        getInfo: function () {
            return {
                longname: 'WeSnipp Embed',
                author: '@osternaud_clem',
                authorurl: 'http://myressources.com',
                infourl: 'http://myressources.com',
                version: tinymce.majorVersion + "." + tinymce.minorVersion
            };
        }
    });
    tinymce.PluginManager.add('wesnipp_embed', tinymce.plugins.WeSnippPlugin);
})();