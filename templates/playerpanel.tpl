{extends file='layout.tpl'}
{block name=title}Player Panel{/block}
{block name=body}
    <div class="container">
        <h1 class="mt-4 mb-3">Player Administration Panel
            <small>Subheading</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Player Panel</li>
        </ol>

        <div class="card h-100">
            <h3 class="card-header">Quick Access</h3>
            <div class="card-body">
                <form method="post">
                    {foreach from=$playersOnline item=v}
                        <h3><input type="submit" name="quickBtn" value="{$v}" class="btn btn-outline-primary"></h3>
                    {/foreach}
                </form>
            </div>
        </div>
        <hr>
    </div>
{/block}