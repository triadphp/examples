{extends "index.tpl"}
{block "title"}Home{/block}
{block "body"}
    <div class="content">
        <h1>Welcome!</h1>
        <p>This is initial home page of Triad Framework.</p>
        <p>Value of custom: {$custom|escape}</p>
    </div>
{/block}