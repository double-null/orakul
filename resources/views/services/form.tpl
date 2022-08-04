{extends file="file:[orakul]template.tpl"}

{block name="title"}{($action == 'create') ? 'Добавить' : 'Редактировать'} услугу{/block}

{block name="content"}
    <form method="POST" action="/admin/services/{($action == 'create') ? 'store' : "update/{$service.id}" }/">
        {include '../components/form/select.tpl' label='Страница' name='page_id' items=$pages column='title'
            value="{$service.page_id}"}

        {include '../components/form/text.tpl' label='Название услуги' name='title' value="{$service.title}"}

        {include '../components/form/text.tpl' label='Тэг' name='tag' value="{$service.tag}"}

        {include '../components/form/textarea.tpl' label='Контент' name='content' value="{$service.content}"}

        {include '../components/form/image.tpl' label='Изображение' name='image' value="{$service.image}"}

        {include '../components/form/button.tpl' text=($action == 'create') ? 'Добавить' : 'Редактировать'}
    </form>
{/block}
