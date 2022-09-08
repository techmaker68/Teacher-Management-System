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
                            background-color: white;
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
                            <div class="form-box shadow">
                                <form wire:submit.prevent="searchteacher">

                                    <div div class=" row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="fs-3">Select teacher to view time table</label>
                                                <select required wire:model='teacher_id' name="teacher_id" class="form-control" placeholder="select teacher">
                                                    <option>Select one</option>
                                                    @foreach ($teacher as $teacher)
                                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <button class="btn btn-primary mt-3 d-flex justify-content-end ms-auto px-5 py-2">Search</button>
                                        </div>
                                </form>
                            </div>
                            @if($timetables)
                            <div>
                                <h4 class="mt-3">Teacher Detail</h3>

                                <div class="d-flex justify-content-between fs-4">
                                    <p>Name: {{$teacherData->name}}</p>
                                    <p>Qualification: {{$teacherData->qualification}}</p>
                                    <p>Timing: {{$teacherData->timing}}</p>
                                </div>
                                <table class="text-center table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">duration</th>

                                        </tr>
                                        </thead>
                                        @foreach ($timetables as $timetables)
                                        <tr>
                                            <td scope="row">{{ $loop->index +1}}</td>
                                            <td>{{$timetables->class->class_name}}</td>
                                            <td>{{$timetables->subject->name}}</td>
                                            <td>{{$timetables->time}}</td>
                                            <td>{{$timetables->Duration}} minutes</td>
                                        </tr>
                                        @endforeach
                                        <tr class="text-center">
                                            <td colspan="5" scope="row">OFF</td>
                                            
                                        </tr>
                                    
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>

                            @endif
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>