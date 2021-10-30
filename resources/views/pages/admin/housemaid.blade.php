@extends('layouts.admin')

@section('title')
    Admin Panel | House Maids List
@endsection

@section('content')
    <section class="tables-sec">
        <div class="list-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="top-bar">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search Name...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                      <i class="material-icons">search</i>
                                      <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search Location...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                      <i class="material-icons">search</i>
                                      <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search Tasks...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                      <i class="material-icons">search</i>
                                      <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <a href="{{ route('ahousemaidform') }}">
                                    <button class="db2 float-lg-right">ADD NEW MAID</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header default-bg card-header-primary">
                                    <h4 class="card-title ">House Maids List</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                ID
                                                </th>
                                                <th>
                                                Name
                                                </th>
                                                <th>
                                                Country
                                                </th>
                                                <th>
                                                City
                                                </th>
                                                <th>
                                                Salary
                                                </th>
                                            </thead>
                                        <tbody>
                                            <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Dakota Rice
                                            </td>
                                            <td>
                                                Niger
                                            </td>
                                            <td>
                                                Oud-Turnhout
                                            </td>
                                            <td class="text-primary">
                                                $36,738
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Minerva Hooper
                                            </td>
                                            <td>
                                                Curaçao
                                            </td>
                                            <td>
                                                Sinaai-Waas
                                            </td>
                                            <td class="text-primary">
                                                $23,789
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                Sage Rodriguez
                                            </td>
                                            <td>
                                                Netherlands
                                            </td>
                                            <td>
                                                Baileux
                                            </td>
                                            <td class="text-primary">
                                                $56,142
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                Philip Chaney
                                            </td>
                                            <td>
                                                Korea, South
                                            </td>
                                            <td>
                                                Overland Park
                                            </td>
                                            <td class="text-primary">
                                                $38,735
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                                5
                                            </td>
                                            <td>
                                                Doris Greene
                                            </td>
                                            <td>
                                                Malawi
                                            </td>
                                            <td>
                                                Feldkirchen in Kärnten
                                            </td>
                                            <td class="text-primary">
                                                $63,542
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                                6
                                            </td>
                                            <td>
                                                Mason Porter
                                            </td>
                                            <td>
                                                Chile
                                            </td>
                                            <td>
                                                Gloucester
                                            </td>
                                            <td class="text-primary">
                                                $78,615
                                            </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
