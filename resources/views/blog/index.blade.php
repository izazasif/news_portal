@extends('auth.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
        @if (session('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ session('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    @foreach ($errors->all() as $error)
                        <li><span class="glyphicon glyphicon-alert" aria-hidden="true"></span> &nbsp;{{ $error }}
                        </li>
                    @endforeach
                </div>
            @endif
            <div class="row">
                <!-- left column -->
                <div class="col-xs-12">
                    <!-- general form elements -->
                    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Project List</h3>
            </div>
            
            <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th class="text-center">Sl.</th>
                          <th class="text-center">Title</th>
                          <th class="text-center">Main Image </th>
                          <th class="text-center">Writer</th>
                          <th class="text-center">Pulished At</th>
                          <th class="text-center">Category</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        @php 
                   
                              $count=1;
              
                        @endphp
                        <tbody>
                          @foreach($data as $blog)
                              <tr>
                                <th class="text-center">{{$count++}}</th>
                                <td class="text-center">{{ $blog->article_title }}</td>
                                <td class="text-center">
                                <img src="{{ asset('website/' . $blog->article_main_image) }}" alt="element 05" style="height:100px;width:100px">
                                </td>
                                <td class="text-center">{{$blog->user_name }}</td>
                                <td class="text-center">{{$blog->article_published_at }}</td>
                                <td class="text-center">{{$blog->category_name }}</td>
                                <td class="text-center" style="color:green;font-weight: bold;"> 
                                  @if($blog->article_status == "published")
                                  
                                  <a href=""> Published </a>
                                  
                                  @else
                                  <a href="{{ route('update.status', ['id' => $blog->article_id, 'status' => 'published']) }}" style="color:red;"> Draft </a>
                                  @endif
                                </td>
                              
                                <td class="text-center">
                                <a href="{{route('article.edit',$blog->article_id)}}"><i class="fa fa-edit"></i> </a>
                                <a href="javascript:void(0)" onclick="showDeleteModal({{ $blog->article_id }})"><i class="fa fa-trash"></i> </a>
                                </td>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $data->links() }}
                    </div>
                    
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
            </div>
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
               
                  
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </section>
        <!-- /.content -->
    </div>
    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-4 rounded-lg w-96 text-center">
            <h2 class="text-lg font-semibold mb-4">Are you sure you want to delete this item?</h2>
            <form id="deleteForm" method="POST" action="{{route('article.destroy',$blog->article_id)}}">
              @csrf
              @method('DELETE')  <!-- This is crucial to use the DELETE method -->
              <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Delete</button>
              <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-lg mr-2" onclick="closeModal()">Cancel</button>
          </form>
                
        </div>
    </div>
    <script>
    function showDeleteModal(itemId) {
        // Show the modal
        document.getElementById('deleteModal').classList.remove('hidden');
        // Set the form action to the delete route for the specific item
        document.getElementById('deleteForm').action = `/article/${itemId}`;
    }

    function closeModal() {
        // Hide the modal
        document.getElementById('deleteModal').classList.add('hidden');
    }
</script>
@endsection
