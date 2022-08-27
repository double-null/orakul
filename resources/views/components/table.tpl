<div class="card">
    <div class="header">
        <h4 class="title">{$title}</h4>
        <p class="category"></p>
    </div>
    <div class="content table-responsive table-full-width">
        <table id="entity-table" class="table table-hover table-striped" data-destroy="0" data-entity="{$module}">
            <thead>
                <tr>
                    {foreach $fields as $field}<th>{$field}</th>{/foreach}
                    {if $actions == 1}<th>Действия</th>{/if}
                </tr>
            </thead>
            {foreach $items as $item}
                <tr class="item-{$item.id}">
                    {foreach $item as $field}
                        <td>{$field}</td>
                    {/foreach}
                    {if $actions == 1}
                        <th>
                            <a href="/admin/{$module}/edit/{$item.id}/"><i class="pe-7s-pen excellent-icon"></i></a>
                            <a data-id="{$item.id}" class="del-item"><i class="pe-7s-junk excellent-icon"></i></a>
                        </th>
                    {/if}
                </tr>
            {/foreach}
        </table>
    </div>
</div>