{extends file="file:[orakul]template.tpl"}

{block name="title"}{($action == 'create') ? 'Добавить' : 'Редактировать'} отзыв{/block}

{block name="content"}

    <form method="POST" action="/admin/reviews/{($action == 'create') ? 'store' : "update/{$review.id}"}/">
        {include '../components/form/text.tpl' label='Имя' name='name' value=$review.name}

        {include '../components/form/image.tpl' label='Фотография' name='photo' value=$review.photo}

        {include '../components/form/textarea.tpl' label='Текст отзыва' value=$review.content}

        {include '../components/form/text.tpl' label='Ссылка на социальную сеть' name='social_link' value=$review.social_link}

        {include '../components/form/button.tpl' text={($action == 'create') ? 'Добавить' : 'Редактировать'}}
    </form>

{/block}

