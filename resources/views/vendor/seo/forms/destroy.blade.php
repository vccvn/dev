<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{isset($route)?$route:''}}" method="post" style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-default cursor-pointer  btn-sm"><i
                class="text-danger fa fa-remove"></i></button>
</form>