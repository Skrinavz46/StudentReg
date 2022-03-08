<div class="card mb-3">
  <img src="https://img.freepik.com/free-vector/focused-tiny-people-reading-books_74855-5836.jpg?t=st=1646574644~exp=1646575244~hmac=ab83a6925796d6afcd3f9ccf753608d50e146704a35de7fd7c9797d2ba778880&w=740" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find here all the information about students in the system</p>

    <table class="table table-success table-striped">
      <thead>
        <tr>
          <th scope="col">Student No.</th>
          <th scope="col">First Name</th>
          <th scope="col">Second Name</th>
          <th scope="col">Age</th>
          <th scope="col">Course</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($students as $student)
        <tr>
          <td>{{ $student->cne}}</td>
          <td>{{ $student->firstName}}</td>
          <td>{{ $student->secondName}}</td>
          <td>{{$student->age}}</td>
          <td>{{$student->speciality}}</td>
          <td>
            <a href="#" class="btn btn-sm btn-info">Show</a>
            <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
