@extends('layouts.app')

@section('content')
    <div class="section-header">
        <ol class="breadcrumb">
            <div class="col-lg-12">
                <h1 class="text-primary">Listado de usuarios</h1>
            </div><!--end .col -->

        </ol>
    </div>
        <div class="section-body">

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Fecha nacimiento</th>
                    <th>Jurisdiccion</th>
                    <th class="text-right">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img class="img-circle width-1" src="../../assets/img/avatar2.jpg?1404026449" alt="" /></td>
                    <td>Abbey</td>
                    <td>Johnson</td>
                    <td>Fuisset delicatissimi duo, qui ut animal noluisse erroribus.</td>
                    <td></td>
                    <td></td>
                    <td class="text-right">
                        <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
                        <button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Copy row"><i class="fa fa-copy"></i></button>
                        <button type="button" class="btn btn-icon-toggle" data-toggle="modal" data-target="#simpleModal" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>


            <div class="modal fade" id="simpleModal" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="simpleModalLabel">Eliminar catequista?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Esta seguro que quiere borrar al catequista ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Estoy seguro</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </div><!--end .section-body -->
    <!--<div class="col-lg-12">
        <div class="table-responsive">
            <div id="datatable2_wrapper" class="dataTables_wrapper no-footer">
                <div class="DTTT_container"><a class="DTTT_button DTTT_button_print" id="ToolTables_datatable2_4" title="View print view"><span>Print</span></a></div>
                <div class="clear"></div>
                <div class="dataTables_length" id="datatable2_length">
                    <label>
                        <select name="datatable2_length" aria-controls="datatable2" class="">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries per page
                    </label>
                </div>
                <div id="datatable2_filter" class="dataTables_filter">
                    <label>
                        <i class="fa fa-search"></i>
                        <input type="search" class="" placeholder="" aria-controls="datatable2">
                    </label>
                </div>
                <table id="datatable2" class="table order-column hover dataTable no-footer" data-source="data/users.json" data-swftools="../../assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf" role="grid" aria-describedby="datatable2_info">
                    <thead>
                    <tr role="row"><th class="details-control sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 55px;"></th>
                        <th class="sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 258px;">Name</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 317px;">Position</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 258px;">Office</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 268px;">Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd">
                        <td valign="top" colspan="5" class="dataTables_empty">Loading...</td>
                    </tr>
                    </tbody>
                </table>
                <div class="dataTables_info" id="datatable2_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                <div class="dataTables_paginate paging_simple_numbers" id="datatable2_paginate">
                    <a class="paginate_button previous disabled" aria-controls="datatable2" data-dt-idx="0" tabindex="0" id="datatable2_previous">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <span></span>
                    <a class="paginate_button next disabled" aria-controls="datatable2" data-dt-idx="1" tabindex="0" id="datatable2_next">
                        <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div><!--end .table-responsive
    </div> -->
    </section>

@endsection
