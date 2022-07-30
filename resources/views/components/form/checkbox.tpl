<div class="row">
    <div class="col-md-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" data-name="check-{$name}" {if $value == 1}checked{/if}>
            <label class="form-check-label" for="check-{$name}">{$label}</label>

            <input id="check-{$name}" type="hidden" name="{$name}" value="{$value}">
        </div>
    </div>
</div>