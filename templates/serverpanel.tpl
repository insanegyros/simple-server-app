{extends file='layout.tpl'}
{block name=title}Server Panel{/block}
{block name=body}
    <div class="container">
        <h1 class="mt-4 mb-3">Server Administration Panel
            <small>Subheading</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Server Panel</li>
        </ol>
        <a href="index.php?p=serverpanel&a=start" class="btn btn-block btn-lg btn-outline-success">Start</a>
        <a href="index.php?p=serverpanel&a=stop" class="btn btn-block btn-lg btn-outline-danger">Stop</a>
        <hr>
    </div>
{/block}