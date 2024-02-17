@extends('layouts.dashboard')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Total Anggota</div>
                                <div class="stat-digit">8500</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Total Pelayan</div>
                                <div class="stat-digit">7800</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Pendapatan Kotor Event</div>
                                <div class="stat-digit">500</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-two card-body">
                            <div class="stat-content">
                                <div class="stat-text">Total Anggota Tidak aktif</div>
                                <div class="stat-digit">650</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Pengumuman</h2>
                            <p class="text-primary">
                                Teman-teman, semua jangan lupa isi berkasnya yaa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Anggota Paling Aktif</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Product</th>
                                            <th>quantity</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>Lew Shawon</td>
                                            <td><span>Dell-985</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td><span class="badge badge-success">Done</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>Lew Shawon</td>
                                            <td><span>Asus-565</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>lew Shawon</td>
                                            <td><span>Dell-985</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td><span class="badge badge-success">Done</span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>Lew Shawon</td>
                                            <td><span>Asus-565</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>lew Shawon</td>
                                            <td><span>Dell-985</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td><span class="badge badge-success">Done</span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>Lew Shawon</td>
                                            <td><span>Asus-565</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Anggota Paling Tidak Aktif</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Product</th>
                                            <th>quantity</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>Lew Shawon</td>
                                            <td><span>Dell-985</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td><span class="badge badge-success">Done</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>Lew Shawon</td>
                                            <td><span>Asus-565</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>lew Shawon</td>
                                            <td><span>Dell-985</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td><span class="badge badge-success">Done</span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>Lew Shawon</td>
                                            <td><span>Asus-565</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>lew Shawon</td>
                                            <td><span>Dell-985</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td><span class="badge badge-success">Done</span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img width="35" src="./images/avatar/1.png"
                                                            alt="" /></a>
                                                </div>
                                            </td>
                                            <td>Lew Shawon</td>
                                            <td><span>Asus-565</span></td>
                                            <td><span>456 pcs</span></td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-4 col-xxl-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Timeline Event</h4>
                        </div>
                        <div class="card-body">
                            <div class="widget-timeline">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge primary"></div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>10 Hari lagi</span>
                                            <h6 class="m-t-5">Cara pintar menjadi pintar</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="timeline-badge warning"></div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>12 Hari lagi</span>
                                            <h6 class="m-t-5">Rapat Kerja bulanan</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="timeline-badge danger"></div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>15 Hari lagi </span>
                                            <h6 class="m-t-5">Mubes.</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Todo</h4>
                        </div>
                        <div class="card-body px-0">
                            <div class="todo-list">
                                <div class="tdl-holder">
                                    <div class="tdl-content widget-todo mr-4">
                                        <ul id="todo_list">
                                            <li>
                                                <label><input type="checkbox" /><i></i><span>Get up</span><a
                                                        href="#" class="ti-trash"></a></label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" checked /><i></i><span>Stand
                                                        up</span><a href="#" class="ti-trash"></a></label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" /><i></i><span>Don't give up the
                                                        fight.</span><a href="#" class="ti-trash"></a></label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" checked /><i></i><span>Do something
                                                        else</span><a href="#" class="ti-trash"></a></label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" checked /><i></i><span>Stand
                                                        up</span><a href="#" class="ti-trash"></a></label>
                                            </li>
                                            <li>
                                                <label><input type="checkbox" /><i></i><span>Don't give up the
                                                        fight.</span><a href="#" class="ti-trash"></a></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="px-4">
                                        <input type="text" class="tdl-new form-control"
                                            placeholder="Write new item and hit 'Enter'..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xxl-6 col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Produk Terjual</h4>
                            <div class="card-action">
                                <div class="dropdown custom-dropdown">
                                    <div data-toggle="dropdown">
                                        <i class="ti-more-alt"></i>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart py-4">
                                <canvas id="sold-product"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-intro-title">
                                Kalender Program Kerja (Event)
                            </h4>

                            <div class="">
                                <div id="external-events" class="my-3">
                                    <p>Drag and drop your event or click in the calendar</p>
                                    <div class="external-event" data-class="bg-primary">
                                        <i class="fa fa-move"></i>New Theme Release
                                    </div>
                                    <div class="external-event" data-class="bg-success">
                                        <i class="fa fa-move"></i>My Event
                                    </div>
                                    <div class="external-event" data-class="bg-warning">
                                        <i class="fa fa-move"></i>Meet manager
                                    </div>
                                    <div class="external-event" data-class="bg-dark">
                                        <i class="fa fa-move"></i>Create New theme
                                    </div>
                                </div>
                                <!-- checkbox -->
                                <div class="checkbox checkbox-event pt-3 pb-5">
                                    <input id="drop-remove" class="styled-checkbox" type="checkbox" />
                                    <label class="ml-2 mb-0" for="drop-remove">Remove After Drop</label>
                                </div>
                                <a href="javascript:void()" data-toggle="modal" data-target="#add-category"
                                    class="btn btn-primary btn-event w-100">
                                    <span class="align-middle"><i class="ti-plus"></i></span>
                                    Buat Event Baru
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div id="calendar" class="app-fullcalendar"></div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN MODAL -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">
                                    Create event
                                </button>

                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                                    data-dismiss="modal">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add a category</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name"
                                                type="text" name="category-name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..."
                                                name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                                    data-dismiss="modal">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
