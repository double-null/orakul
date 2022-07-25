{extends file="file:[orakul]template.tpl"}

{block name="title"}Добавить отзыв{/block}

{block name="content"}

    <form method="POST" action="/admin/reviews/store/">
        {include '../components/form/text.tpl' label='Имя' name='name' value=''}

        {include '../components/form/image.tpl' label='Фотография' name='photo'}

        {include '../components/form/textarea.tpl' label='Текст отзыва'}

        {include '../components/form/text.tpl' label='Ссылка на социальную сеть' name='social_link'}

        {include '../components/form/button.tpl' text='Добавить'}
    </form>

{/block}