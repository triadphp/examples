<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{block "title"}Hello World{/block}</title>
    <link rel="stylesheet" href="{$base|escape}assets/css/default.css" />
    {block "headers"}{/block}
</head>
<body>
<div class="header">
    <div class="clear headerContents">
        <div class="leftFloat">
            <h1 id="pageLogo"><a href="{$base|escape}?ref=logo">Hello World</a></h1>
        </div>

        <div class="rightFloat">

            {if isset($user)}
                <a href="{$base|escape}profile" class="button">{$user->name}</a>
                <a href="{$base|escape}logout" class="button">Logout</a>
            {else}
                <a href="{$base|escape}login" class="button">Login</a>
            {/if}

        </div>
    </div>
</div>

<div>
    {block "body"}{/block}
</div>

<div class="footer">
    Powered by Triad Framework
</div>
</body>
</html>
