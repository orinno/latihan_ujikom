@extends('layouts.dashboard')

@section('title', 'Data Konsumen')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Manejemen Data Konsumen</h2>

            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Table by DataTables plugin</div> -->
                <div class="panel-body">
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Oktaviani</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection