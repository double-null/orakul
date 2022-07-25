<div class="card">
    <div class="header">
        <h4 class="title">{$title}</h4>
        <p class="category"></p>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr>{foreach $fields as $field}<th>{$field}</th>{/foreach}</tr>
            </thead>
            {foreach $items as $item}
                <tr>
                    {foreach $item as $field}
                        <td>{$field}</td>
                    {/foreach}
                </tr>
            {/foreach}
        </table>
    </div>
</div>