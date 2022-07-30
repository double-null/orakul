<div class="card">
    <div class="header">
        <h4 class="title">{$title}</h4>
        <p class="category"></p>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    {foreach $fields as $field}<th>{$field}</th>{/foreach}
                    {if $actions == 1}<th>Действия</th>{/if}
                </tr>
            </thead>
            {foreach $items as $item}
                <tr>
                    {foreach $item as $field}
                        <td>{$field}</td>
                    {/foreach}
                    {if $actions == 1}
                        <th>
                            <a href="/admin/{$module}/edit/{$item.id}/">[ред]</a>
                            <a href="/admin/{$module}/destroy/{$item.id}/">[del]</a>
                        </th>
                    {/if}
                </tr>
            {/foreach}
        </table>
    </div>
</div>