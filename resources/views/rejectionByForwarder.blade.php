<form action="/reject/{{$data->id}}" method="post">
@csrf
   <textarea name="remarks" id="remarks" cols="30" rows="10"></textarea>
   <input type="submit" value="submit">
</form>