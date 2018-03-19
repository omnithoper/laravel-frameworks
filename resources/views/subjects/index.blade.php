@extends('layouts.master')

@section('content')
    <h1>Subject Records</h1>
    <?php var_dump(csrf_token()); ?>
    @if(empty($subjects))
      <div class="alert alert-info">No subject yet</div>
      @else       

      <div class="col-md-7">
        <div>
          <a   
            href="#"
            class="add-modal pull-right btn btn-success" 
            title="add Subject" > 
            <i class="glyphicon glyphicon-plus"></i>
          </a>
        </div>  
        <table class="table table-bordered table-condensed table-striped table-hover">
          <thead class="tHeader">
              <tr>
                <th>id</th>
                <th>subject</th>
                <th>lecUnit</th>
                <th>labUnit</th>
                <th>subjectUnit</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr> 
          </thead>  
            <tbody>
              @foreach($subjects as $subject)
              <tr>
                <th scope="row">{{$subject->subject_id}}</th>
                <td><a href="/subjects/{{$subject->subject_id}}">{{$subject->subject}}</a></td>
                <td>{{$subject->lec_unit}}</td>
                <td>{{$subject->lab_unit}}</td>
                <td>{{$subject->subject_unit}}</td>
                <td> 
                    <button class="show-modal btn btn-success" data-id="{{$subject->subject_id}}" data-subjectname="{{$subject->subject}}" data-subjectunit="{{$subject->subject_unit}}">
                    <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                </td>
                <td style="width: 1px; wrap: nowrap;">
                    <button class="edit-modal btn btn-success" data-id="{{$subject->subject_id}}" data-subjectname="{{$subject->subject}}" data-subjectlec="{{$subject->lec_unit}}" data-subjectlab="{{$subject->lab_unit}}" data-subjectunit="{{$subject->subject_unit}}">
                    <span class="glyphicon glyphicon-edit"></span> Edit</button>
                </td>         
                <td style="width: 1px; wrap: nowrap;">      
                  <button class="delete-modal btn btn-danger" data-id="{{$subject->subject_id}}" data-subjectname="{{$subject->subject}}" data-subjectunit="{{$subject->subject_unit}}">
                  <span class="glyphicon glyphicon-trash"></span> Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $subjects->links() }}
    </div>      
  @endif  
<div class="col-md-1">
    <h1>
        <label class="label label-info">This is where you can view, edit, <br>delete subjects</label>
        <br></br>
        <img id = "subject-img" class="second-slide" src="/img/subjects.jpg" alt="Second slide">
    </h1>
  </div>



<div id="showModal" id="subjects" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <dl>
          <dt><label class="modal-label"> Subject ID: </label></dt><dd><input type="text" disabled id="subjectID" /></dd>
          <dt><label class="modal-label"> Subject Name: </label></dt><dd><input type="text" disabled id="subjectName" /></dd>
          <dt><label class="modal-label"> Subject Unit: </label></dt><dd><input type="text" disabled id="subjectUnit" /></dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
      </div>
    </div>

  </div>
</div>
<div id="editModal" id="subjects" class="modal fade" role="dialog">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Subject Edit</h4>
        </div>
        <div class="modal-body">
          <h1> Subject Edit </h1>

          <dl>
            <dt><label class="modal-label"> Subject   ID : </label></dt><dd><input type="text" disabled id="editSubjectID" /></dd>
            <dt><label class="modal-label"> Subject      : </label></dt><dd><input type="text" id="editSubjectName" /></dd>
            <dt><label class="modal-label"> Subject Lec  : </label></dt><dd><input type="text" id="editSubjectLec" /></dd>
            <dt><label class="modal-label"> Subject Lab  : </label></dt><dd><input type="text" id="editSubjectLab" /></dd>
            <dt><label class="modal-label"> Subject Unit : </label> </dt><dd><input type="text" id="editSubjectUnit" /></dd>
          </dl>
        </div>
        <div class="modal-footer">
         <button type="button" class="btn btn-danger edit" data-dismiss="modal">
          <span id="" class='glyphicon glyphicon-edit'></span> Edit
        </button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">
            <span class='glyphicon glyphicon-remove'></span> Close
        </button>
        </div>
      </div>

    </div>  
</div>
<div id="addModal" id="subjects" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          <h1> Subject add </h1>

          <dl>
            <dt><label class="modal-label"> Subject      : </label></dt><dd><input type="text" id="addSubjectName" /></dd>
            <dt><label class="modal-label"> Subject Lec  : </label></dt><dd><input type="text" id="addSubjectLec" /></dd>
            <dt><label class="modal-label"> Subject Lab  : </label></dt><dd><input type="text" id="addSubjectLab" /></dd>
            <dt><label class="modal-label"> Subject Unit : </label> </dt><dd><input type="text" id="addSubjectUnit" /></dd>
          </dl>
     
        <div class="modal-footer">
            <button type="button" id="addSubject" class="btn btn-success  addSubject" data-resource="subjects" data-dismiss="modal"><span id="" class='glyphicon glyphicon-check'></span> Add </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class='glyphicon glyphicon-remove'></span> Close</button>        
        </div>
      </div> 
    </div>  
  </div>   
</div>


<div id="deleteModal" id="subjects" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h3 class="text-center">Are you sure you want to delete the following subject?</h3>
        <dl>
          <dt><label class="modal-label"> Subject ID: </label></dt><dd><input type="text" disabled id="deleteSubjectID" /></dd>
          <dt><label class="modal-label"> Subject Name: </label></dt><dd><input type="text" disabled id="deleteSubjectName" /></dd>
          <dt><label class="modal-label"> Subject Unit: </label></dt><dd><input type="text" disabled id="deleteSubjectUnit" /></dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger delete" data-dismiss="modal">
          <span id="" class='glyphicon glyphicon-trash'></span> Delete
        </button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">
            <span class='glyphicon glyphicon-remove'></span> Close
        </button>
      </div>
    </div>

  </div>
</div>

<script src="/js/subjects.js"></script>

@endsection
