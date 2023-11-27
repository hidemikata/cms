(function () {
    CKEDITOR.plugins.add('codepre', {
        icons: 'codepre',
        init: function (editor) {
            // プラグインの初期化コードをここに追加します

            editor.ui.addButton('codepre', {
                label: 'codepre',
                command: 'addcodepretags',
                toolbar: 'insert'
            });

            editor.addCommand('addcodepretags', {
                exec: function (editor) {
                    var selection = editor.getSelection();
                    var selectedText = selection.getSelectedText();
                    // プラグインが実行される際の処理をここに追加します
                    editor.insertHtml('<pre><code>' + selectedText + '</code></pre>');

                }
            });
        }
    });
})();

//このファイルがオーバーロードできないなぁ。
