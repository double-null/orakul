{extends file="file:[orakul]template.tpl"}

{block name="title"}{($action == 'create') ? 'Добавить' : 'Редактировать'} блок{/block}

{block name="content"}

    <form method="POST" action="/admin/blocks/{($action == 'create') ? 'store' : "update/{$block.id}"}/">

        <input type="hidden" name="page_id" value="{($page_id) ? $page_id : $block.page_id}">

        {if $action == 'create'}
            {include '../components/form/select.tpl' label='Тип блока' name='block_id' items=$blocks column='title'
                value="{$block.type}"}
        {/if}

        {include "../components/blocks/{$block.name}.tpl" block=$block.data|json_decode:true}

        {include '../components/form/text.tpl' label='Позиция' name='position' value={$block.position}}
        
        {include '../components/form/button.tpl' text={($action == 'create') ? 'Добавить' : 'Редактировать'}}
    </form>

{/block}