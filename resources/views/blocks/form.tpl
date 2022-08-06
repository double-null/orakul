{extends file="file:[orakul]template.tpl"}

{block name="title"}{($action == 'create') ? 'Добавить' : 'Редактировать'} блок{/block}

{block name="content"}

    <form method="POST" action="/admin/blocks/{($action == 'create') ? 'store' : "update/{$block.id}"}/">

        <input type="hidden" name="page_id" value="{$page_id}">

        {include '../components/form/select.tpl' label='Тип блока' name='type' items=$types column='title'
                    value="{$block.type}"}

        <div id="block-type-forms"></div>

        {include '../components/form/text.tpl' label='Позиция' name='position' value=$page.slug}

        {include '../components/form/button.tpl' text={($action == 'create') ? 'Добавить' : 'Редактировать'}}
    </form>

{/block}