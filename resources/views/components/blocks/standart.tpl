<div class="standart-block">
    {include 'components/form/text.tpl' label='Заголовок' name='data[title]' value=$block.title}

    {include 'components/form/textarea.tpl' label='Текст' name='data[content]' value=$block.content}

    {include 'components/form/image.tpl' label='Изображение' name='data[image]' value=$block.image}
</div>