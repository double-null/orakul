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
                    {foreach $item as $field => $value}
                        {if $field != 'actions'}
                            <td>{$value}</td>
                        {/if}
                    {/foreach}

                    <td id="table-actions">
                        {foreach $item.actions as $action}
                            <a class="{$action.color}" href="{$action.link}">
                                <i class="{$action.icon} excellent-icon"></i>
                            </a>
                        {/foreach}
                        <a class="yellow" href="/admin/{$module}/edit/{$item.id}/">
                            <i class="pe-7s-pen excellent-icon"></i>
                        </a>
                        <a data-id="{$item.id}" class="del-item red">
                            <i class="pe-7s-trash excellent-icon"></i>
                        </a>
                    </td>

                </tr>
            {/foreach}
        </table>
    </div>
</div>