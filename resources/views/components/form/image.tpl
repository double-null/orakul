<div class="row">
    <div class="col-md-10">
        <div class="form-group">
            <label>{$label|default:'Изображение'}</label>
            <input id="input-{$name}" type="file" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <div class="py-5">
                <a class="btn btn-info load-image" style="margin-top:23px;" data-name="{$name}">
                    Загрузить
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <p class="loading-status">{$value}</p>
        <input id="hidden-{$name}" type="hidden" name="{$name}" value="{$value}">
    </div>
</div>