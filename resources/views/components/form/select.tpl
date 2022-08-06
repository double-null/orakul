<div class="row">
    <div class="col-md-12">
        <label>{$label}</label>
        <select id="select-{$name}" name="{$name}" class="form-control">
            <option></option>
            {foreach $items as $item}
                <option value="{$item.id}"{if $value == $item.id} selected{/if}>
                    {$item.{$column}}
                </option>
            {/foreach}
        </select>
    </div>
</div>