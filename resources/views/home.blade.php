@include('header')
<script>
    function searchByName() {
        let name = document.getElementById('name').value;
        window.location.href = `/?name=${name}`;
    }
</script>
<div class="table-users">
    <div class="header">News - Search</div>
    <div class="header">
        <input type="text" id="name" placeholder="Search by name">
        <button onclick="searchByName()">Search</button>
    </div>
    <table cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
        </tr>
        @foreach ($news as $item)
            <tr>
                <td class="td-center">{{ $item->name }}</td>
                <td class="td-center">{{ $item->categoryName }}</td>
                <td class="td-center">{{ $item->description }}</td>
            </tr>
        @endforeach
    </table>
</div>