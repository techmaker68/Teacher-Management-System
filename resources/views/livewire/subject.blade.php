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
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subject as $subject)
                            <tr>
                                <th scope="row">{{ $loop->index +1}}</th>
                                <td>{{$subject->name}}</td>
                                <td>{{$subject->description}}</td>
                            </tr>
                            @endforeach



                        </tbody>
                    </table>

                    <form wire:submit.prevent="CreateSubject">

                        <div div class=" row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fs-6" for="exampleInputEmail1">Name</label>
                                    <input required wire:model='name' name="teacher_id" class="form-control" placeholder="Name">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fs-6" for="exampleInputEmail1">Description</label>
                                    <input required wire:model='description' name="teacher_id" class="form-control" placeholder="description">
                                    </input>
                                </div>
                            </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary mt-3">create</button>
                                </div>
                        </div>



                    </form>


                </div>
            </div>
        </div>


    </div>