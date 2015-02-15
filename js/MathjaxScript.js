// Добавление своей кнопки на панель редактора
var fGetMarkitup = ls.settings.getMarkitup;
ls.settings.getMarkitup = function() {
    oSettings = fGetMarkitup();
    oSettingsButtonSet = oSettings['markupSet'];
    // Сепаратор
    oSettingsButtonSet.push({
        separator:'---------------'
    });
    oSettingsButtonSet.push({
        name: 'Формулы',
        className:'editor-math',
        key:'M',
        openWith:'<math>',
        closeWith:'</math>',
        beforeInsert: function() {

        }
    });
    $.extend (true, oSettings, {'markupSet': oSettingsButtonSet});
    return oSettings;
};

// Подгружаем MathJax для красивого отображения формул в том числе и в тарых браузерах.
// Закомментируйте эту функцию, если оно вам не нужно.
$(window).on('load', function() {
    var script = document.createElement('script');
    script.src = 'https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML';
    document.body.children[0].appendChild(script);
    //document.write('<script src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>');
});