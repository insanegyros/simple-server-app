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
            <label for="example-text-input" class="col-2 col-form-label">Username:</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{$name}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">E-Mail:</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{$email}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Role:</label>
            <div class="col-10">
                <h3><span class="badge-pill badge-primary">{$role}</span></h3>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Profile pic:</label>
            <div class="col-10">
                <img src="https://minotar.net/bust/{$name}/550.png" class="rounded mx-auto d-block" alt="...">
            </div>
        </div>
    </div>
{/block}