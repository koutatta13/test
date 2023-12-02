<form action="/response" method="post">
  @csrf
  <input type="text" name="startDate">
  <input type="text" name="endDate">
  <input type="text" name="alt">
  <input type="text" name="url">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <input type="submit" value="送信">
</form>