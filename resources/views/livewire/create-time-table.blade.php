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
      font-size: 28px;
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
      <form wire:submit.prevent="CreateTimeSlot">
        <div class="form-box shadow ">
          <p>Add Time slot for teacher</p>
          <div div class=" row px-4">
            <div class="col-md-6">
              <div class="form-group">
                <label class="fs-6" for="exampleInputEmail1">teacher</label>
                <select wire:model='teacher_id' name="teacher_id" class="form-control" placeholder="select teacher">
                  <option>Select one</option>

                  @foreach ($teachers as $teachers)
                  <option value="{{ $teachers->id }}">{{ $teachers->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="fs-6" for="exampleInputPassword1">class</label>
                <select wire:model="class_id" class="form-control" id="exampleInputPassword1" placeholder="select class">
                  <option>Select one</option>

                  @foreach ($class as $class)
                  <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                  @endforeach

                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="fs-6" for="exampleInputEmail1">Subject</label>
                <select wire:model="subject_id" class="form-control" aria-describedby="emailHelp" placeholder="select subject" wire:mode>
                  <option>Select one</option>

                  @foreach ($subjects as $subjects)
                  <option value="{{ $subjects->id }}">{{ $subjects->name }}</option>
                  @endforeach

                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="fs-6" for="exampleInputEmail1">time </label>
                <input wire:model='time' type="time" name="time" class="form-control" aria-describedby="emailHelp" wire:mode>
                </input>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="fs-6" for="exampleInputEmail1">duration (minutes)</label>
                <input wire:model="duration" class="form-control" type="text" name="duration" placeholder="Add duration" wire:mode>
                </input>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 d-flex justify-content-end ms-auto px-5 py-2">create</button>


      </form>


    </div>
  </div>
</div>