{extends file="file:[orakul]template.tpl"}

{block name="title"}Добавить страницу{/block}

{block name="content"}

    <form method="POST" action="/admin/pages/store/">
        {include '../components/form/text.tpl' label='Адрес' name='slug'}

        {include '../components/form/text.tpl' label='Заголовок страницы' name='title'}

        {include '../components/form/textarea.tpl' label='Контент' name='content'}

        {include '../components/form/text.tpl' label='Мета Title' name='html_title'}

        {include '../components/form/text.tpl' label='Мета Description' name='seo_description'}

        {include '../components/form/checkbox.tpl' label='Доступно пользователю' name='visible'}

        {include '../components/form/button.tpl' text='Добавить'}
    </form>

{/block}