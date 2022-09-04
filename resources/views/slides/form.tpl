{extends file="file:[orakul]template.tpl"}

{block name="title"}{($action == 'create') ? 'Добавить' : 'Редактировать'} слайд {/block}

{block name="content"}

    <form method="POST" action="/admin/slides/{($action == 'create') ? 'store' : "update/{$slide.id}"}/">

        <input type="hidden" name="page_id" value="{$page_id}">

        {include '../components/form/text.tpl' label='Заголовок' name='title' value=$slide.title}

        {include '../components/form/textarea.tpl' label='Контент' name='content' value=$slide.content}

        {include '../components/form/image.tpl' label='Изображение' name='image' value=$slide.image}

        <div class="header">
            <h4 class="title">Кнопки <a id="slide-button-add" class="btn btn-info btn-fill">Добавить</a></h4>
        </div>

        <div id="slide-buttons">
            {foreach $slide.buttons|json_decode:true as $button}

                {include '../components/chunks/slide-button.tpl' button=$button}

            {foreachelse}
                {include '../components/chunks/slide-button.tpl'}
            {/foreach}
        </div>

        {include '../components/form/button.tpl' text={($action == 'create') ? 'Добавить' : 'Редактировать'}}
    </form>

{/block}