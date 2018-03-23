{extends file='layout.tpl'}
{block name=title}VIP{/block}
{block name=body}
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">VIP
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">VIP</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h3 class="card-header">VIP</h3>
            <div class="card-body">
              <div class="display-4">$1</div>
              <div class="font-italic">lifetime</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
              <li class="list-group-item">
                <a href="#" class="btn btn-primary">Buy!</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card card-outline-primary h-100">
            <h3 class="card-header bg-primary text-white">VIP+</h3>
            <div class="card-body">
              <div class="display-4">$5</div>
              <div class="font-italic">lifetime</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
              <li class="list-group-item">
                <a href="#" class="btn btn-primary">Buy!</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card card-outline-danger h-100">
            <h3 class="card-header bg-danger">VIP++</h3>
            <div class="card-body">
              <div class="display-4">$10</div>
              <div class="font-italic">lifetime</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
              <li class="list-group-item">
                <a href="#" class="btn btn-primary">Buy!</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
{/block}