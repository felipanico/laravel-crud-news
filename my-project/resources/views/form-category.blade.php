@include('header')
<div class="table-users">
  <div class="header">Category</div>
    <table cellspacing="0">
      <form action="/category/save" method="post">
        @csrf <!-- {{ csrf_field() }} -->
        <tr>
          <td>
            Name
          </td>
          <td>
            <input type="text" name="name">
          </td>
          <td>
            <button>Save</button>
          </td>
        </tr>
      </form>
    </table>
    @if ($errors->category->first('name'))
      <div align="center" class="error">
        {{ $errors->category->first('name') }}
      </div>
    @endif
</div>