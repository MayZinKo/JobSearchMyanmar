@include('auth.header')
@include('auth.nav')

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Job Lists</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Job title</th>
                    <th>Privilige</th>
                    <th>Address</th>
                    <th>Category</th>
                    <th>Company</th>
                    <th>Job Type</th>
                    <th>City</th>
                    <th>___</th>
                    <th>CVs</th>
                  </tr>
                </thead>
                <tbody>
                  @php $i = 1; @endphp
                  @foreach ($jobs as $job)
                    <tr>
                      <td>{{$i}}</td>
                      <td>{{$job->job_title}}</td>
                      <td>{{$job->privilege}}</td>
                      <td>{{$job->address}}</td>
                      <td>{{$job->category->category_name}}</td>
                      <td>{{$job->company->company_name}}</td>
                      <td>{{$job->job_type->job_type_name}}</td>
                      <td>{{$job->city->city_name}}</td>
                      <td>
                        
                        <a href="job_edit/{{$job->id}}">Update</a>
                        <a href="#" onclick="confirmDelete({{$job->id}})">Delete</a>
                      </td>
                      <td>{{$job->job_cv_count}}</td>
                    </tr>
                    @php $i++  @endphp
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
        <!-- /.col-xs-12 -->
      </div>
      <!-- /.row -->
    </div>
  </div>


<script>
    function confirmDelete(jobId) {
        var confirmation = prompt("Are you sure you want to delete? Type 'YES' to confirm.");

        if (confirmation === 'YES') {
            // User confirmed, send a POST request to the delete route
            fetch('{{ url('/delete') }}/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    job_id: jobId
                }),
            })
            
            .then(data => {
                // Handle successful response, e.g., show a success message
                alert('Deletion successful.');
                // Optionally, you can redirect to another page or refresh the current page
                window.location.reload();
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                // Handle the error, e.g., show an error message
                alert('Deletion failed. Please try again.');
            });
        } else {
            // User canceled the deletion
            alert('Deletion canceled.');
        }
    }
</script>

@include('auth.footer')