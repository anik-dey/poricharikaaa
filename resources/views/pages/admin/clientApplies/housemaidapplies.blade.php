@extends('layouts.admin')

@section('title')
    Admin Panel | Customers Apply For House Maid
@endsection

@section('content')
    <section class="tables-sec">
        <div class="list-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="top-bar">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="input-group no-border">
                                    <input id="myInput" type="text" onkeyup="myFunction()" value="" class="form-control"
                                        placeholder="Search Anythings...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header default-bg card-header-primary">
                                    <h4 class="card-title ">Customers Apply List For House Maid</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <tr text-align="center">
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Gender</th>
                                                    <th>Members</th>
                                                    <th>Home</th>
                                                    <th>Bedroom</th>
                                                    <th>Toilet</th>
                                                    <th>Task</th>
                                                    <th>Arrivel Time</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="myTable">
                                                <?php $count = 0; ?>
                                                @foreach ($all_contact as $item)
                                                    <tr>
                                                        <td>{{ $item->h_m_client_id }}</td>
                                                        <td>{{ $item->client_name }}</td>
                                                        <td>{{ $item->client_address }}</td>
                                                        <td>{{ $item->client_email }}</td>
                                                        <td class="text-primary">{{ $item->client_phone }}</td>
                                                        <td>{{ $item->sex }}</td>
                                                        <td>{{ $item->client_members }}</td>
                                                        <td>{{ $item->client_home }}</td>
                                                        <td>{{ $item->client_bedroom }}</td>
                                                        <td>{{ $item->client_toilet }}</td>
                                                        <td>{{ $item->task }}</td>

                                                        <td>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                        </td>
                                                        <td>
                                                            <button id="myBtn" class="btn btn-primary btn-block"
                                                                data-toggle="modal"
                                                                data-target="#userMeesage<?php echo $count; ?>">
                                                                View
                                                            </button>
                                                        </td>
                                                        {{-- <div id="myModal<?php //echo $count; ?>"
                                                            role="dialog" class="modal">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h2>Message From {{ $item->client_name }}</h2>
                                                                    <span class="close">&times;</span>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>{{ $item->client_txt }}</p>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        <div class="modal fade" id="userMeesage<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                  <h5 class="modal-title" id="exampleModalLongTitle">Message From {{ $item->client_name }}</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>{{ $item->client_txt }}</p>
                                                                </div>
                                                            </div>
                                                          </div>

                                    <td><a href="{{ URL::to('/client-list-housemaid-delete/' . $item->h_m_client_id) }}"><button
                                                class="btn btn-danger btn-block">Delete
                                            </button></a></td>
                                    </tr>
                                    <?php $count++; ?>
                                    @endforeach
                                    </tbody>
                                    </table>
                                    <span>{{ $all_contact->links() }}</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        function myFunction() {
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        }

    </script>
    {{-- <script>
        var modal = document.getElementById("myModal");
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script> --}}
@endsection
