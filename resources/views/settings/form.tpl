{extends file="file:[orakul]template.tpl"}

{block name="title"}{($action == 'create') ? 'Добавить' : 'Редактировать'} параметр{/block}

{block name="content"}

    <form method="POST" action="/admin/settings/{($action == 'create') ? 'store' : "update/{$settings.id}"}/">

        {include '../components/form/text.tpl' label='Название' name='title' value=$settings.title}

        {include '../components/form/text.tpl' label='Тег' name='key' value=$settings.key}

        {include '../components/form/text.tpl' label='Значение' name='value' value=$settings.value}

        {include '../components/form/button.tpl' text={($action == 'create') ? 'Добавить' : 'Редактировать'}}

    </form>

{/block}