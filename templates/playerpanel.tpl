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

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Player</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$playersOnline item=v}
                <tr>
                    <td>{$v}</td>
                    <td><a href="index.php?p=playerpanel&a=ban&u={$v}" class="btn btn-outline-danger">Ban</a> <a href="index.php?p=playerpanel&a=kick&u={$v}" class="btn btn-outline-warning">Kick</a> <a href="index.php?p=playerpanel&a=admin&u={$v}" class="btn btn-outline-success">Make Admin</a> <a href="index.php?p=playerpanel&a=revadmin&u={$v}" class="btn btn-outline-primary">Revoke Admin</a></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    <hr>
    </div>
{/block}