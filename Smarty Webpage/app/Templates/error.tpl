{extends "index.tpl"}
{block "title"}Error occured{/block}

{block "body"}
    <div class="content">
        <div class="errorBlock">
            <div class="errorSummary">
                <h1>{$error.message|strip_tags|escape}</h1>
                <h2>{$error.type|escape}</h2>
            </div>

            {if isset($error.debug)}
                <div class="errorDetail">
                    <dl>
                        <dt>File</dt>
                        <dd>{$error.debug.file|default:""|escape}</dd>
                        <dt>Line</dt>
                        <dd>{$error.debug.line|default:""|escape}</dd>
                        <dt>Code</dt>
                        <dd>{$error.debug.code|default:""|escape}</dd>
                    </dl>

                    {foreach $error.debug.trace as $trace}
                        <dl class="separator">
                            <dt>File</dt>
                            <dd>{$trace.file|default:""|escape}</dd>
                            <dt>Line</dt>
                            <dd>{$trace.line|default:""|escape}</dd>
                            <dt>Code</dt>
                            <dd>{$trace.function|default:""|escape}</dd>
                        </dl>
                    {/foreach}

                </div>
            {/if}

        </div>
    </div>
{/block}
