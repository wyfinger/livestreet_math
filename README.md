# livestreet_math
*Плагин для добавления MathML формул в топики CMS LiveStreet.*

На сайте понадобилось выводить формулы.

Вариант со статическими изображениями убог, рендеринг картинок на сервере, как это делает Wikipedia тоже убог - выделить часть формулы не получится.

Большинство браузеров на данный момент поддерживают в том или ином виде язык разметки <a href="https://ru.wikipedia.org/wiki/MathML">MathML</a>, а чтобы отображение формул было одинаковым на всех браузерах есть проект <a href="http://www.mathjax.org/">MathJax</a>.

Дело за малым - написать плагин. Вот я и написал :) Плагин простейший.

Посмотреть как выглядят формулы можно вот здесь: <a href="http://energobook.ru/blog/6.html">http://energobook.ru/blog/6.html</a>.

Для ввода формул пользуюсь <a href="http://www.wiris.com/editor/demo/en/mathml-latex">вот этим онлайн редактором</a>.

Подключение MathJax можно отключить, тогда формулы будут рендериться непосредственно браузером, это можно сделать в файле \templates\skin\default\js\math.js, там есть комментарий на эту тему.
