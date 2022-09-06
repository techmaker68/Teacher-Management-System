<div>
    <div>
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

                                        </tr>
                                    </thead>
                                    <tbody>




                                    </tbody>
                                </table>

                                <form>

                                    <div div class=" row px-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="fs-6">Select teacher to view time table</label>
                                                <select wire:model='teacher_id' name="teacher_id" class="form-control" placeholder="select teacher">
                                                    <option>Select one</option>
                                                    @foreach ($teacher as $teacher)
                                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <button wire:click='searchteacher()' class="btn btn-primary mt-3 d-flex justify-content-end ms-auto px-5 py-2">Search</button>
                                        </div>
                                </form>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>