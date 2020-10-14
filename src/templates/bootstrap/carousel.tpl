<!--
File: carousel.tpl
File Created: Wednesday, 14th October 2020 11:16:05 am
Author: Oscar Lin (oscar@des13.com)
Copyright (c) 2020 esangtek
-->

<div id="{$idPrefix}-carousel" class="carousel slide" data-ride="carousel">
    {if $showIndicators}
    <ol class="carousel-indicators">
        {foreach $items as $item}
        <li data-target="#{$idPrefix}-carousel" data-slide-to="{$item@iteration-1}"
            class="{if $item@iteration == 0}active{/if}"></li>
        {/foreach}
    </ol>
    {/if}
    <div class="carousel-inner">
        {foreach $items as $item}
        <div class="carousel-item
            {if $item@iteration == 1}active{/if}">
            <img src="{$item.img}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>{$item.title}</h5>
                <p>{$item.content}</p>
            </div>
        </div>
        {/foreach}
    </div>
    {if $showControl}
    <a class="carousel-control-prev" href="#{$idPrefix}-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#{$idPrefix}-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    {/if}
</div>

{if $carouselInterval}
<script>
    $('#{$idPrefix}-carousel').carousel({
        interval: {
            $carouselInterval
        }
    })
</script>
{/if}
