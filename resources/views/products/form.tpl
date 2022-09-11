{extends file="file:[orakul]template.tpl"}

{block name="title"}{($action == 'create') ? 'Добавить' : 'Редактировать'} товар (услугу){/block}

{block name="content"}
    <form method="POST" action="/admin/products/{($action == 'create') ? 'store' : "update/{$product.id}" }/">
        {include '../components/form/select.tpl' label='Категория' name='category_id' items=$categories column='title'
            value="{($product.category_id) ? $product.category_id : $current_category}"}

        {include '../components/form/text.tpl' label='Название услуги (товара)' name='title' value="{$product.title}"}

        {include '../components/form/textarea.tpl' label='Контент' name='content' value="{$product.content}"}

        {include '../components/form/image.tpl' label='Изображение' name='photo' value="{$product.photo}"}

        {include '../components/form/text.tpl' label='Цена' name='price' value="{$product.price}"}

        {include '../components/form/button.tpl' text=($action == 'create') ? 'Добавить' : 'Редактировать'}
    </form>
{/block}
