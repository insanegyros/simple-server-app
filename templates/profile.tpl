{extends file='layout.tpl'}
{block name=title}Profile{/block}
{block name=body}
    <div class="container">
        <h1 class="mt-4 mb-3">Profile
            <small>Subheading</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </div>
    <div class="container">
            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Profile pic:</label>
                <div class="col-10">
                    <img src="https://minotar.net/bust/{$playerInfo.username}/550.png" class="rounded mx-auto d-block" alt="...">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Role:</label>
                <div class="col-10">

                    <h3>
                        <span class="badge-pill badge-secondary">User</span>
                        {if $playerInfo.isAdmin == 1}
                            <span class="badge-pill badge-info">VIP</span>
                        {/if}
                        {if $playerInfo.isAdmin == 1}
                            <span class="badge-pill badge-danger">Admin</span>
                        {/if}
                    </h3>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Username:</label>
                <div class="col-10">
                    <input class="form-control" type="text" value="{$playerInfo.realname}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">IP:</label>
                <div class="col-10">
                    <input class="form-control" type="text" value="{$playerInfo.ip}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Last World:</label>
                <div class="col-10">
                    <input class="form-control" type="text" value="{$playerInfo.world}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">On server:</label>
                <div class="col-10">
                    {if $playerInfo.isLogged == 1}
                        <h3><span class="badge-pill badge-success">Online</span></h3>
                    {else}
                        <h3><span class="badge-pill badge-danger">Offline</span></h3>
                    {/if}
                </div>
            </div>
    </div>
{/block}