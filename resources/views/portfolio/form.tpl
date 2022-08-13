{extends file="file:[orakul]template.tpl"}

{block name="title"}{($action == 'create') ? 'Добавить' : 'Редактировать'} {/block}

{block name="content"}

    <form method="POST" action="/admin/portfolio/{($action == 'create') ? 'store' : "update/{$portfolio.id}"}/">
        {include '../components/form/text.tpl' label='Название' name='title' value=$portfolio.title}

        {include '../components/form/image.tpl' label='Изображение' name='image' value=$portfolio.image}

        {include '../components/form/button.tpl' text={($action == 'create') ? 'Добавить' : 'Редактировать'}}
    </form>

{/block}