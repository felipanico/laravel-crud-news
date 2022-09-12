@include('header')
@if ($errors->news->any())
  <div align="center" class="error">
      @foreach ($errors->news->all() as $error)
         <div>{{ $error }}</div>
      @endforeach
  </div>
@endif
<div class="table-users">
  <div class="header">News</div>
    <table cellspacing="0">
      <form action="/news/save" method="post">
        @csrf <!-- {{ csrf_field() }} -->
        <tr>
          <td>
            Name
          </td>
          <td>
            <input type="text" name="name" class="input-size">
          </td>
        </tr>
        <tr>
          <td>
            Category
          </td>
          <td>
            <select name="category" class="input-size">
               <option>Select Category</option>
               @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
               @endforeach
            </select>
          </td>
        </tr>
        <tr>
          <td>
            Description
          </td>
          <td>
            <textarea name="description" rows="20" cols="50"></textarea>
          </td>
        </tr>
        <tr>
            <td colspan="2" class="td-center">
               <button>Save</button>
            </td>
        </tr>
      </form>
    </table>
</div>