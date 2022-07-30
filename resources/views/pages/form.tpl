{extends file="file:[orakul]template.tpl"}

{block name="title"}{($action == 'create') ? 'Добавить' : 'Редактировать'} страницу{/block}

{block name="content"}

    <form method="POST" action="/admin/pages/{($action == 'create') ? 'store' : "update/{$page.id}"}/">
        {include '../components/form/text.tpl' label='Адрес' name='slug' value=$page.slug}

        {include '../components/form/text.tpl' label='Заголовок страницы' name='title' value=$page.title}

        {include '../components/form/textarea.tpl' label='Контент' name='content' value=$page.content}

        {include '../components/form/text.tpl' label='Мета Title' name='html_title' value=$page.html_title}

        {include '../components/form/text.tpl' label='Мета Description' name='seo_description' value=$page.seo_description}

        {include '../components/form/checkbox.tpl' label='Доступно пользователю' name='visible' value=$page.visible}

        {include '../components/form/button.tpl' text={($action == 'create') ? 'Добавить' : 'Редактировать'}}
    </form>

{/block}