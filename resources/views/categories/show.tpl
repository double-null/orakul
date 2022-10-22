{extends file="file:[orakul]template.tpl"}

{block name="title"}Категория {$category.title}{/block}

{block name="content"}
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">
                        Подкатегории '{$category.title}'
                        <a href="/admin/categories/create/?category={$category.id}"
                           class="btn btn-info btn-fill">Добавить</a>
                </h4>
            </div>
            <div class="content">
                {$fields = ['ID', 'Родительская категория', 'Slug', 'Название', 'Описание', 'Иконка', 'Обложка'] }
                {include '../components/table.tpl' fields=$fields items=$child_categories actions=1}
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h4 class="title">
                    Товары (Услуги) '{$category.title}'
                    <a href="/admin/products/create/?category={$category.id}"
                       class="btn btn-info btn-fill">Добавить</a>
                </h4>
            </div>
            <div class="content">
                {$fields = ['ID', 'Категория', 'Название', 'Цена'] }
                {include '../components/table.tpl' fields=$fields items=$products actions=1 module='products'}
            </div>
        </div>
    </div>

{/block}