{{ Html::style(('css/bootstrap.css')) }}
<h1>Hello Libbbb</h1>
@if(Session::has('message'))
    <div class="alert alert-info">
        {{ Session::get('message') }}
    </div>
@endif
<table border="1">
  <thead>
    <tr>
      <td>ID</td>
      <td>Title</td>
      <td>Url</td>
      <td>Descriptio</td>
      <td>Create</td>
      <td width="200">Action</td>
    </tr>
  </thead>
  <tbody>
    @forelse ($lib as $key => $l)
      <tr>
        <td> {{ $l['id'] }} </td>
        <td> {{ $l['title'] }} </td>
        <td> {{ $l['language'] }} </td>
        <td> {{ $l['star'] }} </td>
        <td> {{ $l['created_at'] }}</td>

        <td>  {{ Form::open(['route' => ['lib.destroy',$l['id'], 'method' => "DELETE"] ]) }}
          <input type="hidden" name="_method" value="delete" />
              {{ Html::link('lib/'.$l['id'], 'View', array('class' => 'btn btn-primary'))}}
              {{ Html::link('lib/'.$l['id'].'/edit', 'Edit', array('class' => 'btn btn-primary'))}}
              {{ Form::submit('Delete', array('class' => 'btn btn-primary')) }}
              {{ Form::close() }}
        </td>

      </tr>
    @empty
    <tr>
      <td colspan="6">No data</td>
    </tr>
  @endforelse
  </table>
  <div class="row">
    <div class="col-xs-5">
      {{ Html::link('lib/create', 'Add New', array(
        'class' => 'btn btn-primary'
      ))}}
    </div>
  </div>
