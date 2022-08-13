{extends file="file:[orakul]template.tpl"}

{block name="title"}{($action == 'create') ? 'Добавить' : 'Редактировать'} {/block}

{block name="content"}

    <form method="POST" action="/admin/categories/{($action == 'create') ? 'store' : "update/{$category.id}"}/">

        {include '../components/form/select.tpl' label='Категория' name='parent' items=$categories column='title'
        value="{$category.parent}"}

        {include '../components/form/text.tpl' label='Заголовок страницы' name='title' value=$category.title}

        {include '../components/form/text.tpl' label='Тэг' name='slug' value=$category.slug}

        {include '../components/form/textarea.tpl' label='Описание' name='description' value=$page.description}

        {include '../components/form/text.tpl' label='Иконка' name='icon' value=$category.icon}

        {include '../components/form/image.tpl' label='Обложка' name='cover_image' value=$category.cover_image}

        {include '../components/form/button.tpl' text={($action == 'create') ? 'Добавить' : 'Редактировать'}}

    </form>

{/block}