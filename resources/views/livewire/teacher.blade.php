<div>


    <div>
        <livewire:side-bar />

        <div>

            <style>
                .sidenav a {

                    padding: 6px 8px 6px 16px;
                    text-decoration: none;
                    font-size: 25px;
                    color: #2f383e;
                    display: block;
                    border-bottom: 1px solid #dbd6d6;
                    margin: 0 6px;
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
                    padding: 0px 10px;
                    overflow: hidden;
                }

                .form-box {
                    margin: 30px 30px;
                    border-radius: 10px;
                    padding: 10px 10px 30px;
                }
            </style>
            <div>
                <livewire:side-bar />
                <div class="main mt-4">

                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="form-box shadow bg-white">

                        <h4>All subjects</h4>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">address</th>
                                    <th scope="col">Qualification</th>
                                    <th scope="col">timing</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teacher as $teacher)
                                <tr>
                                    <th scope="row">{{ $loop->index +1}}</th>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->address}}</td>
                                    <td>{{$teacher->qualification}}</td>
                                    <td>{{$teacher->timing}}</td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>

                        <form wire:submit.prevent="CreateTeacher">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div div class=" row ">
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

                                <div div class=" row ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-6">Qualification</label>
                                            <input required wire:model='qualification' name="qualification" class="form-control" placeholder="Address">
                                            </input>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="fs-6">Timing</label>
                                        <input type="text" required wire:model='timing' class="form-control"></input>
                                    </div>
                                </div>

                                <div div class=" row ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fs-6">Address</label>
                                            <input required wire:model='address' name="teacher_id" class="form-control" placeholder="Address">
                                            </input>
                                        </div>
                                    </div>



                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary mt-4 ">create</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>


        </div>
    </div>