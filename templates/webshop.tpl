{extends file='layout.tpl'}
{block name=title}Webshop{/block}
{block name=body}

    <!-- Page Content -->
    <div class="container">

        <h1 class="mt-4 mb-3">Webshop
            <small>Subheading</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Webshop</li>
        </ol>

        <div class="row">
            {foreach from=$itemArray item=v}
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">{$v.name} <span
                                    class="float-right badge badge-dark">Price: {$v.price}</span></h4>
                        <div class="card-body">
                            <p class="card-text">{$v.desc}</p>
                        </div>
                        <div class="card-footer">
                            <form method="post">
                                <input type="hidden" name="itemId" value="{$v.id}">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Amount: </label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" name="amount">
                                        </div>
                                    </div>
                                    <input type="submit" name="buy" value="Buy!" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            {/foreach}
            <h1><span class="text-danger">ATTENTION!!!!! User MUST be online to receive items In the other case, user will be charged money, but will not receive items!</span></h1>
        </div>
    </div>
    <!-- /.container -->
{/block}

