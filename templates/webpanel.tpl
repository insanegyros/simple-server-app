{extends file='layout.tpl'}
{block name=title}Website Panel{/block}
{block name=body}
    <div class="container">
        <h1 class="mt-4 mb-3">Website Administration Panel
            <small>Subheading</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Website Panel</li>
        </ol>

        <form method="post">
            <div class="form-group">
                <label>Item name:</label>
                <input name="itemName" type="text" class="form-control" placeholder="Dirt" required>
            </div>
            <div class="form-group">
                <label>Short description:</label>
                <input name="itemDesc" type="text" class="form-control" placeholder="Precious dirt..." required>
            </div>
            <div class="form-group">
                <label>Minecraft text ID (minecraft:[MCID]):</label>
                <input name="itemMcid" type="text" class="form-control" placeholder="dirt" required>
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input name="itemPrice" type="number" class="form-control" placeholder="25" required>
            </div>
            <div class="form-group">
                <input name="itemAdd" type="submit" class="btn btn-primary" value="Add item!" placeholder="25" required>
            </div>
        </form>
    </div>
{/block}