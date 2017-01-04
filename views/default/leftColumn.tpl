<div id="leftColumn">
    <div id="leftMenu">
        <div class="menuCaption">Меню:<br>
            {foreach $rsCategories as $item}
                <a href="#">{$item['name']}</a><br>
            {/foreach}
        </div>
    </div>
</div>