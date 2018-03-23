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
            {foreach from=$itemArray key=k item=v}
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">{$k} <span class="float-right badge badge-dark">Price: {$v.price}</span></h4>
                        <div class="card-body">
                            <p class="card-text">{$v.description}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">BUY</a>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    <!-- /.container -->
{/block}

