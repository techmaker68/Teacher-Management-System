<div>


    <div>
        <livewire:side-bar />

        <div>

            <style>
                .sidenav a {
                    padding: 6px 8px 6px 16px;
                    text-decoration: none;
                    font-size: 25px;
                    color: #2196F3;
                    display: block;
                }

                .navbar {
                    position: fixed;
                    left: 0;
                    right: 0;
                }

                .sidenav a:hover {
                    color: #064579;
                }

                .main {
                    margin-left: 240px;
                    font-size: 28px;
                    padding: 0px 10px;
                    overflow: hidden;
                }

                .form-box {
                    margin: 30px 30px;
                    box-shadow: 0 0 10px #b2b2b291;
                    border-radius: 10px;
                    padding: 10px 10px 30px;
                }
            </style>
            <div>
                <livewire:side-bar />
                <div class="main">

                    <h2>Time Table</h2>
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="form-box">

                        <p>All subjects</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teacher as $teacher)
                                <tr>
                                    <th scope="row">{{ $teacher->url}}</th>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->address}}</td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>

                        <form wire:submit.prevent="CreateTeacher">

                            <div div class=" row px-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fs-6">Name</label>
                                        <input required wire:model='name' name="teacher_id" class="form-control" placeholder="Name">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fs-6" for="exampleInputEmail1">Email</label>
                                        <input required wire:model='email' name="teacher_id" class="form-control" placeholder="Email">
                                        </input>
                                    </div>
                                </div>

                                <div div class=" row px-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-6">Address</label>
                                            <input required wire:model='address' name="teacher_id" class="form-control" placeholder="Address">
                                            </input>
                                        </div>
                                    </div>



                                    <div div class=" row px-4">
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary mt-3 d-flex justify-content-end ms-auto px-5 py-2">create</button>
                                        </div>
                                    </div>

                        </form>


                    </div>
                </div>
            </div>


        </div>
    </div>