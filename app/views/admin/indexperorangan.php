<?php 
    include '../app/views/main/app.php';
?>

<?= template_header('Home') ?>
<?= template_navbar() ?>
<?= template_sidebar() ?>
<div class="main-container">
<!-- Simple Datatable start -->
<div class="card-box mb-30">
<div class="pd-20">
    <h4 class="text-blue h4">Data Table Pengajuan Donasi Perorangan</h4>
</div>
<div class="pb-20">
    <table class="data-table table stripe hover nowrap">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Bibit</th>
                <th>Jumlah Bibit</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th class="datatable-nosort">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="table-plus">Gloria F. Mead</td>
                <td>25</td>
                <td>Sagittarius</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>30</td>
                <td>Gemini</td>
                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>20</td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>30</td>
                <td>Sagittarius</td>
                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>25</td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>20</td>
                <td>Sagittarius</td>
                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>18</td>
                <td>Gemini</td>
                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>30</td>
                <td>Sagittarius</td>
                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>30</td>
                <td>Sagittarius</td>
                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>30</td>
                <td>Gemini</td>
                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>30</td>
                <td>Gemini</td>
                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="table-plus">Andrea J. Cagle</td>
                <td>30</td>
                <td>Gemini</td>
                <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                <td>Gemini</td>
                <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
<?= template_footer() ?>