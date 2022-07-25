<div class="row">
    <div class="col-md-12">
        <label>{$label}</label>
        <select name="{$name}">
            <option></option>
            {foreach $items as $item}
                <option>{$item}</option>
            {/foreach}
        </select>
    </div>
</div>