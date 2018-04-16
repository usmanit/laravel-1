
<br>
<a href="{{url('article/create')}}">Create Article</a>
<?php $no=1; ?>
<br><br>

@foreach($article as $row)

<b>Article Namber {{$no++}}</b><br>
- Title = {{$row->title}}<br>
- Content = {{substr($row->content, 0, 10)}}...<br>
- Action = 
	<a href="{{url('article/show/'.$row->id)}}">Detail</a> |
	<a href="{{url('article/edit/'.$row->id)}}">edit</a> |
	<a href="{{url('article/delete/'.$row->id)}}">Delete</a>
	
@endforeach